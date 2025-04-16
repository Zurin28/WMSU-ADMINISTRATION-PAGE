<?php
require_once 'database.class.php';

class CampusAdministrators {
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
                ca.*, 
                h.short AS honorific_short
            FROM campus_administrators AS ca
            LEFT JOIN honorifics AS h ON ca.honorifics_id = h.id
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
    
    // Upload
    function add_official($name, $title)
    {
        try {
            $sql = "INSERT INTO campus_administrators (name, title) VALUES (:name, :title)";
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

    function deleteOfficial($id) {
        $sql = "DELETE FROM campus_administrators WHERE id = :id";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':id', $id);
        return $query->execute();
    }

    function fetchRecord($recordID)
    {
        $sql = "SELECT * FROM campus_administrators WHERE id = :recordID;";
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
        $sql = "UPDATE campus_administrators SET name = :name, title = :title, honorifics_id = :honorifics_id WHERE id = :id;";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':name', $this->name);
        $query->bindParam(':title', $this->title);
        $query->bindParam(':honorifics_id', $this->honorifics);
        $query->bindParam(':id', $this->id);
        return $query->execute();
    }
}
?>