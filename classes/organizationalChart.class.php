<?php
require_once 'database.class.php';

class OrganizationalChart {
    protected $db;

    function __construct()
    {
        $this->db = new Database();
    }

        // Fetch all products
        function fetchAll()
        {
            $sql = " SELECT * FROM organizational_chart ";
        
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
        function upload($file_name, $description)
        {
            try {
                $sql = "INSERT INTO organizational_chart (image, description) VALUES (:image, :description)";
                $query = $this->db->connect()->prepare($sql);
                           
                $query->bindParam(':image', $file_name);
                $query->bindParam(':description', $description);
                
                           
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

        function fetchRecord($recordID)
        {
            $sql = "SELECT * FROM organizational_chart WHERE id = :recordID;";
            $query = $this->db->connect()->prepare($sql);
            $query->bindParam(':recordID', $recordID);
            $data = null;
            if ($query->execute()) {
                $data = $query->fetch();
            }
            return $data;
        }

        function edit($id, $file_name, $description)
        {
            try
        {
        
                // Update the current record with or without an image
                if ($file_name) {
                    $sql = "UPDATE organizational_chart 
                            SET image = :image, description = :description
                            WHERE id = :id";
                } else {
                    $sql = "UPDATE organizational_chart 
                            SET description = :description
                            WHERE id = :id";
                }
        
                $query = $this->db->connect()->prepare($sql);
                $query->bindParam(':description', $description, PDO::PARAM_STR);
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
            }catch (Exception $e) {
                echo "Error: " . $e->getMessage();
                return false;
            }
        }

        function delete_organizationalChart($id) {
            $sql = "DELETE FROM organizational_chart WHERE id = :id";
            $query = $this->db->connect()->prepare($sql);
            $query->bindParam(':id', $id);
            return $query->execute();
        }

    
}