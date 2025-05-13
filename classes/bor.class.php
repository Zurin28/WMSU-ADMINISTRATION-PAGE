<?php
require_once 'database.class.php';

class Board {   
    protected $db;
    

    function __construct()
    {
        $this->db = new Database();
    }


function fetchAll()
{
    $sql = "
        SELECT 
            p.id, 
            p.name, 
            p.title_bor, 
            p.image, 
            p.rank, 
            'president' AS type,
            h.short AS honorific_short,
            NULL AS representedby_image,
            NULL AS representedby_name,
            NULL AS representedby_honorific_short
        FROM president AS p
        LEFT JOIN honorifics AS h ON p.honorifics_id = h.id

        UNION

        SELECT 
            bor.id, 
            bor.name, 
            dbor.designation AS title_bor,
            bor.image, 
            bor.rank, 
            'board' AS type,
            h.short AS honorific_short,
            bor.representedby_image,
            bor.representedby_name,
            rh.short AS representedby_honorific_short
        FROM board_of_regents AS bor
        LEFT JOIN honorifics AS h ON bor.honorifics_id = h.id
        LEFT JOIN honorifics AS rh ON bor.representedby_honorifics_id = rh.id
        LEFT JOIN designation_bor AS dbor ON bor.title_id = dbor.id

        ORDER BY rank
    ";

    $query = $this->db->connect()->prepare($sql);

    $data = null;
    if ($query->execute()) {
        $data = $query->fetchAll(PDO::FETCH_ASSOC);
    }

    return $data;
}

    
    

        


        // Upload
        function upload($name, $title, $image_name, $rank, $honorifics_id, $representedby_honorifics_id, $representedby_image_name, $representedby_name)
        {
            try {
                $sql = "INSERT INTO board_of_regents (name, title_id, image, rank, honorifics_id, representedby_honorifics_id, representedby_name, representedby_image) VALUES (:name, :title_id, :image, :rank, :honorifics_id, :representedby_honorifics_id, :representedby_name, :representedby_image)";
                $query = $this->db->connect()->prepare($sql);
                           
                $query->bindParam(':name', $name);
                $query->bindParam(':title_id', $title);
                $query->bindParam(':image', $image_name);
                $query->bindParam(':rank', $rank);
                $query->bindParam(':honorifics_id', $honorifics_id);
                if (empty($representedby_honorifics_id)) {
                $query->bindValue(':representedby_honorifics_id', null, PDO::PARAM_NULL);
            } else {
                $query->bindValue(':representedby_honorifics_id', $representedby_honorifics_id, PDO::PARAM_INT);
            }

            if (empty($representedby_name)) {
                $query->bindValue(':representedby_name', null, PDO::PARAM_NULL);
            } else {
                $query->bindValue(':representedby_name', $representedby_name, PDO::PARAM_STR);
            }

            if (empty($representedby_image_name)) {
                $query->bindValue(':representedby_image', null, PDO::PARAM_NULL);
            } else {
                $query->bindValue(':representedby_image', $representedby_image_name, PDO::PARAM_STR);
            }

                
                           
                if ($query->execute()) {
                    return true;
                } else {
                    // Print error if insertion fails
                        print_r($query->errorInfo());
                        return false;
                    }
                } catch (PDOException $e) {
                    echo "Database error: " . $e->getMessage();
                        return false;
                }
        }

    // Method to delete an official
    function deleteOfficial($id) {
        $sql = "DELETE FROM board_of_regents WHERE id = :id";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':id', $id);
        return $query->execute();
    }

    function fetchRecord($recordID)
    {
        $sql = "SELECT * FROM board_of_regents WHERE id = :recordID;";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':recordID', $recordID);
        $data = null;
        if ($query->execute()) {
            $data = $query->fetch();
        }
        return $data;
    }

    // Function to detect which table the ID belongs to
    function getTableById($id)
    {
        $conn = $this->db->connect();

        // Check if the ID exists in the president table
        $sql = "SELECT id FROM president WHERE id = :id";
        $query = $conn->prepare($sql);
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->execute();

        if ($query->fetch()) return 'president';

        // Check if the ID exists in the board_of_regents table
        $sql = "SELECT id FROM board_of_regents WHERE id = :id";
        $query = $conn->prepare($sql);
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->execute();

        if ($query->fetch()) return 'board_of_regents';

        return null;
    }

    // Function to update ranks
    function updateRanks($newRank, $currentRank, $id)
    {
        if ($newRank == $currentRank) {
            return;
        }

        try {
            $conn = $this->db->connect();

            // Step 1: Get the table
            $table = $this->getTableById($id);
            if (!$table) {
                throw new Exception("Record with ID $id not found.");
            }

            // Step 2: Temporarily set the current item's rank to 0 in the correct table
            $sql = "UPDATE $table SET rank = 0 WHERE id = :id";
            $query = $conn->prepare($sql);
            $query->bindParam(':id', $id, PDO::PARAM_INT);
            $query->execute();

            // Step 3: Temporarily shift ranks in BOTH tables to avoid conflicts
            if ($newRank < $currentRank) {
                // Moving up: shift ranks from newRank to currentRank-1 UP by 100
                $sql1 = "UPDATE board_of_regents SET rank = rank + 100 WHERE rank >= :newRank AND rank < :currentRank";
                $sql2 = "UPDATE president SET rank = rank + 100 WHERE rank >= :newRank AND rank < :currentRank";
            } else {
                // Moving down: shift ranks from currentRank+1 to newRank UP by 100
                $sql1 = "UPDATE board_of_regents SET rank = rank + 100 WHERE rank <= :newRank AND rank > :currentRank";
                $sql2 = "UPDATE president SET rank = rank + 100 WHERE rank <= :newRank AND rank > :currentRank";
            }

            // Execute both queries
            foreach ([$sql1, $sql2] as $sql) {
                $query = $conn->prepare($sql);
                $query->bindParam(':newRank', $newRank, PDO::PARAM_INT);
                $query->bindParam(':currentRank', $currentRank, PDO::PARAM_INT);
                $query->execute();
            }

            // Step 4: Normalize shifted ranks in both tables
            if ($newRank < $currentRank) {
                // Shift back down by 99
                $sql1 = "UPDATE board_of_regents SET rank = rank - 99 WHERE rank >= 101 AND rank < :limit";
                $sql2 = "UPDATE president SET rank = rank - 99 WHERE rank >= 101 AND rank < :limit";
                $limit = $currentRank + 100;
            } else {
                // Shift back down by 101
                $sql1 = "UPDATE board_of_regents SET rank = rank - 101 WHERE rank > :limit AND rank <= :upper";
                $sql2 = "UPDATE president SET rank = rank - 101 WHERE rank > :limit AND rank <= :upper";
                $limit = $currentRank + 100;
                $upper = $newRank + 100;
            }

            // Execute normalization queries
            foreach ([[$sql1, 'limit'], [$sql2, 'limit']] as [$sql, $bind]) {
                $query = $conn->prepare($sql);
                $query->bindParam(':limit', $limit, PDO::PARAM_INT);
                if (isset($upper)) {
                    $query->bindParam(':upper', $upper, PDO::PARAM_INT);
                }
                $query->execute();
            }

            // Step 5: Move the original record to the new rank
            $sql = "UPDATE $table SET rank = :newRank WHERE id = :id";
            $query = $conn->prepare($sql);
            $query->bindParam(':newRank', $newRank, PDO::PARAM_INT);
            $query->bindParam(':id', $id, PDO::PARAM_INT);
            $query->execute();

        } catch (PDOException $e) {
            echo "Database error in updateRanks: " . $e->getMessage();
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }

function edit(
    $id,
    $name,
    $title_id,
    $file_name,
    $rank,
    $honorifics,
    $representedby_name,
    $representedby_honorifics,
    $representedby_file_name
) {
    try {
        // Get the current rank of the record
        $sql = "SELECT rank FROM board_of_regents WHERE id = :id";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->execute();
        $current = $query->fetch(PDO::FETCH_ASSOC);

        if (!$current) {
            throw new Exception("Record with ID $id not found.");
        }

        $currentRank = $current['rank'];
        $this->updateRanks($rank, $currentRank, $id);

        // Build base SQL update
        $sql = "UPDATE board_of_regents SET 
                    name = :name, 
                    title_id = :title_id, 
                    rank = :rank, 
                    honorifics_id = :honorifics_id";

        // Dynamically add optional fields if they exist
        if (!empty($file_name)) {
            $sql .= ", image = :image";
        }
        if (!empty($representedby_name)) {
            $sql .= ", representedby_name = :representedby_name";
        }
        if (!empty($representedby_honorifics)) {
            $sql .= ", representedby_honorifics_id = :representedby_honorifics";
        }
        if (!empty($representedby_file_name)) {
            $sql .= ", representedby_image = :representedby_image";
        }

        $sql .= " WHERE id = :id";

        $query = $this->db->connect()->prepare($sql);

        // Required bindings
        $query->bindParam(':name', $name, PDO::PARAM_STR);
        $query->bindParam(':title_id', $title_id, PDO::PARAM_INT);
        $query->bindParam(':rank', $rank, PDO::PARAM_INT);
        $query->bindParam(':honorifics_id', $honorifics, PDO::PARAM_INT);
        $query->bindParam(':id', $id, PDO::PARAM_INT);

        // Optional bindings
        if (!empty($file_name)) {
            $query->bindParam(':image', $file_name, PDO::PARAM_STR);
        }
        if (!empty($representedby_name)) {
            $query->bindParam(':representedby_name', $representedby_name, PDO::PARAM_STR);
        }
        if (!empty($representedby_honorifics)) {
            $query->bindParam(':representedby_honorifics', $representedby_honorifics, PDO::PARAM_INT);
        }
        if (!empty($representedby_file_name)) {
            $query->bindParam(':representedby_image', $representedby_file_name, PDO::PARAM_STR);
        }

        return $query->execute();

    } catch (PDOException $e) {
        echo "Database error in edit: " . $e->getMessage();
        return false;
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
        return false;
    }
}


    function fetchById($id) {
        return $this->fetchRecord($id);
    }
}
