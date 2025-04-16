<?php
require_once 'database.class.php';

class AssistantDirectors {
    protected $db;

    function __construct()
    {
        $this->db = new Database();
    }

    // Fetch all products
    function fetchAll()
    {
        $sql = "
            SELECT 
                ad.*, 
                h.short AS honorific_short
            FROM assistant_directors AS ad
            LEFT JOIN honorifics AS h ON ad.honorifics_id = h.id
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
    
    function add_official($name, $title)
    {
        try {
            $sql = "INSERT INTO assistant_directors (name, title) VALUES (:name, :title)";
            $query = $this->db->connect()->prepare($sql);
            
            $query->bindParam(':name', $name);
            $query->bindParam(':title', $title);
            
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
            $sql = "DELETE FROM assistant_directors WHERE id = :id";
            $query = $this->db->connect()->prepare($sql);
            $query->bindParam(':id', $id);
            return $query->execute();
        }

        function fetchRecord($recordID)
        {
            $sql = "SELECT * FROM assistant_directors WHERE id = :recordID;";
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
            $sql = "UPDATE assistant_directors SET name = :name, title = :title WHERE id = :id;";
            $query = $this->db->connect()->prepare($sql);
            $query->bindParam(':name', $this->name);
            $query->bindParam(':title', $this->title);
            $query->bindParam(':id', $this->id);
            return $query->execute();
        }
}
?>