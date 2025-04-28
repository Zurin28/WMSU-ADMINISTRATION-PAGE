<?php
require_once 'database.class.php';

class Pres {

    protected $db;

    function __construct()
    {
        $this->db = new Database();
    }

    function fetchAll()
    {
        $sql = "
            SELECT 
                p.*, 
                h.short AS honorific_short
            FROM president AS p
            LEFT JOIN honorifics AS h ON p.honorifics_id = h.id
            ORDER BY p.rank
        ";
    
        // Prepare the query
        $query = $this->db->connect()->prepare($sql);
    
        // Execute the query and fetch data
        $data = null;
        if ($query->execute()) {
            $data = $query->fetchAll(PDO::FETCH_ASSOC);
        }
    
        // Return the data
        return $data;
    }

    function fetchpresident(){
        $sql = "SELECT * FROM president";
        $query = $this->db->connect()->prepare($sql);
        $data = null;
        if ($query->execute()) {
            $data = $query->fetchAll(PDO::FETCH_ASSOC);
        }
        return $data;
    }
    

           // Upload
           function add_official($name, $title, $file_name) {
            try {
                // Check if a president already exists
                $checkSql = "SELECT COUNT(*) as count FROM president";
                $checkQuery = $this->db->connect()->prepare($checkSql);
                $checkQuery->execute();
                $result = $checkQuery->fetch(PDO::FETCH_ASSOC);
    
                if ($result['count'] > 0) {
                    // A president already exists
                    return false;
                }
    
                // Insert new president
                $sql = "INSERT INTO president (name, title, page_link) VALUES (:name, :title, :page_link)";
                $query = $this->db->connect()->prepare($sql);
                $query->bindParam(':name', $name);
                $query->bindParam(':title', $title);
                $query->bindParam(':page_link', $file_name);
    
                if ($query->execute()) {
                    return true;
                } else {
                    print_r($query->errorInfo());
                    return false;
                }
            } catch (PDOException $e) {
                echo "Database error: " . $e->getMessage();
                return false;
            }
        }
    
    // Upload
    function upload($name, $title, $title_bor, $page_link, $file_name, $rank, $honorifics_id)
    {
        try {
            $sql = "INSERT INTO president (name, title, title_bor, page_link, image, rank, honorifics_id) VALUES (:name, :title, :title_bor, :page_link, :image, :rank, :honorifics_id)";
            $query = $this->db->connect()->prepare($sql);
                       
            $query->bindParam(':name', $name);
            $query->bindParam(':title', $title);
            $query->bindParam(':title_bor', $title_bor);
            $query->bindParam(':page_link', $page_link);
            $query->bindParam(':image', $file_name);
            $query->bindParam(':rank', $rank);
            $query->bindParam(':honorifics_id', $honorifics_id);
                       
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

    function deleteOfficial($id) {
        $sql = "DELETE FROM president WHERE id = :id";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':id', $id);
        return $query->execute();
    }

    function fetchRecord($recordID)
    {
        $sql = "SELECT * FROM president WHERE id = :recordID;";
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
    
/*
    function edit($id, $name, $title, $title_bor, $page_link, $rank, $file_name)
    {
        try {
            // Build the base SQL query
            if ($file_name) {
                // Update including the image
                $sql = "UPDATE president 
                        SET name = :name, title = :title, title_bor = :title_bor, page_link = :page_link, rank = :rank, image = :image 
                        WHERE id = :id";
            } else {
                // Update without changing the image
                $sql = "UPDATE president 
                        SET name = :name, title = :title, title_bor = :title_bor, page_link = :page_link, rank = :rank
                        WHERE id = :id";
            }
    
            $query = $this->db->connect()->prepare($sql);
    
            $query->bindParam(':name', $name);
            $query->bindParam(':title', $title);
            $query->bindParam(':title_bor', $title_bor);
            $query->bindParam(':page_link', $page_link);
            $query->bindParam(':rank', $rank);
            $query->bindParam(':id', $id);
    
            if ($file_name) {
                $query->bindParam(':image', $file_name);
            }
    
            if ($query->execute()) {
                return true;
            } else {
                print_r($query->errorInfo());
                return false;
            }
        } catch (PDOException $e) {
            echo "Database error: " . $e->getMessage();
            return false;
        }
    }
*/

    
    function edit($id, $name, $title, $title_bor, $page_link, $file_name, $rank, $honorifics)
    {
        try {
            // Get the current rank of the record
            $sql = "SELECT rank FROM president WHERE id = :id";
            $query = $this->db->connect()->prepare($sql);
            $query->bindParam(':id', $id, PDO::PARAM_INT);
            $query->execute();
            $current = $query->fetch(PDO::FETCH_ASSOC);
    
            if (!$current) {
                throw new Exception("Record with ID $id not found.");
            }
    
            $currentRank = $current['rank'];
    
            // Update other ranks before updating this record
            $this->updateRanks($rank, $currentRank, $id);
    
            // Update the current record with or without an image
            if ($file_name) {
                $sql = "UPDATE president 
                        SET name = :name, title = :title, title_bor = :title_bor, page_link = :page_link, image = :image, rank = :rank, honorifics_id = :honorifics_id
                        WHERE id = :id";
            } else {
                $sql = "UPDATE president 
                        SET name = :name, title = :title, title_bor = :title_bor, page_link = :page_link, rank = :rank, honorifics_id = :honorifics_id
                        WHERE id = :id";
            }
    
            $query = $this->db->connect()->prepare($sql);
            $query->bindParam(':name', $name, PDO::PARAM_STR);
            $query->bindParam(':title', $title, PDO::PARAM_STR);
            $query->bindParam(':title_bor', $title_bor, PDO::PARAM_STR);
            $query->bindParam(':page_link', $page_link, PDO::PARAM_STR);
            $query->bindParam(':rank', $rank, PDO::PARAM_INT);
            $query->bindParam(':honorifics_id', $honorifics, PDO::PARAM_INT);
            $query->bindParam(':id', $id, PDO::PARAM_INT);
    
            if ($file_name) {
                $query->bindParam(':image', $file_name, PDO::PARAM_STR);
            }
    
            if ($query->execute()) {
                return true;
            } else {
                print_r($query->errorInfo());
                return false;
            }
        } catch (PDOException $e) {
            echo "Database error in edit: " . $e->getMessage();
            return false;
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

    
           
}
?>
