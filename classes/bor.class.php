<?php
require_once 'database.class.php';

class Board {   
    protected $db;

    function __construct()
    {
        $this->db = new Database();
    }

        // Fetch all products
        function fetchAll()
        {
            $sql = "SELECT * FROM board_of_regents";
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
        function upload($name, $title, $file_name)
        {
            try {
                $sql = "INSERT INTO board_of_regents (name, title, image) VALUES (:name, :title, :image)";
                $query = $this->db->connect()->prepare($sql);
                           
                $query->bindParam(':name', $name);
                $query->bindParam(':title', $title);
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
    // Method to delete an official
    function deleteOfficial($id) {
        $sql = "DELETE FROM board_of_regents WHERE id = :id";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':id', $id);
        return $query->execute();
    }

}
?>