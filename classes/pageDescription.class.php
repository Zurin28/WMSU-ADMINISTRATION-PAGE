<?php
require_once 'database.class.php';

class PageDescription {
    protected $db;

    function __construct()
    {
        $this->db = new Database();
    }

        // Fetch all products
        function fetchAll()
        {
            $sql = " SELECT * FROM page_description ";
        
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

        function add_page($page, $description)
        {
            try {
                $sql = "INSERT INTO page_description (page, description) VALUES (:page, :description)";
                $query = $this->db->connect()->prepare($sql);
                
                $query->bindParam(':page', $page);
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
            $sql = "SELECT * FROM page_description WHERE id = :recordID;";
            $query = $this->db->connect()->prepare($sql);
            $query->bindParam(':recordID', $recordID);
            $data = null;
            if ($query->execute()) {
                $data = $query->fetch();
            }
            return $data;
        }

        function edit()
        {
            $sql = "UPDATE page_description SET description = :description WHERE id = :id;";
            $query = $this->db->connect()->prepare($sql);
            $query->bindParam(':description', $this->description);
            $query->bindParam(':id', $this->id);
            return $query->execute();
        }

        function delete_pageDescription($id) {
            $sql = "DELETE FROM page_description WHERE id = :id";
            $query = $this->db->connect()->prepare($sql);
            $query->bindParam(':id', $id);
            return $query->execute();
        }

    }