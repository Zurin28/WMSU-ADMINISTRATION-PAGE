<?php
require_once 'database.class.php';

class Pres {

    protected $db;

    function __construct()
    {
        $this->db = new Database();
    }

        // Fetch all products
        function fetchAll()
        {
            $sql = "SELECT * FROM president";
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
    function upload($name, $title, $title_bor, $page_link, $file_name)
    {
        try {
            $sql = "INSERT INTO president (name, title, title_bor, page_link, image) VALUES (:name, :title, :title_bor, :page_link, :image)";
            $query = $this->db->connect()->prepare($sql);
                       
            $query->bindParam(':name', $name);
            $query->bindParam(':title', $title);
            $query->bindParam(':title_bor', $title_bor);
            $query->bindParam(':page_link', $page_link);
            $query->bindParam(':image', $file_name);
                       
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

    function edit($id, $name, $title, $title_bor, $page_link, $file_name)
    {
        try {
            // Build the base SQL query
            if ($file_name) {
                // Update including the image
                $sql = "UPDATE president 
                        SET name = :name, title = :title, title_bor = :title_bor, page_link = :page_link, image = :image 
                        WHERE id = :id";
            } else {
                // Update without changing the image
                $sql = "UPDATE president 
                        SET name = :name, title = :title, title_bor = :title_bor, page_link = :page_link
                        WHERE id = :id";
            }
    
            $query = $this->db->connect()->prepare($sql);
    
            $query->bindParam(':name', $name);
            $query->bindParam(':title', $title);
            $query->bindParam(':title_bor', $title_bor);
            $query->bindParam(':page_link', $page_link);
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

/*
    function edit()
    {
        $sql = "UPDATE president SET name = :name, title = :title, page_link = :page_link WHERE id = :id;";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':name', $this->name);
        $query->bindParam(':title', $this->title);
        $query->bindParam(':page_link', $this->page_link);
        $query->bindParam(':id', $this->id);
        return $query->execute();
    }
*/
           
}
?>
