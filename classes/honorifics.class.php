<?php
require_once 'database.class.php';

class Honorifics {
    protected $db;

    function __construct()
    {
        $this->db = new Database();
    }

    function add_honorifics($name, $short)
    {
        try {
            $sql = "INSERT INTO honorifics (name, short) VALUES (:name, :short)";
            $query = $this->db->connect()->prepare($sql);
            
            $query->bindParam(':name', $name);
            $query->bindParam(':short', $short);
            
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

    function fetchHonorifics()
    {
        $sql = "SELECT * FROM honorifics ORDER BY name ASC;";
        $query = $this->db->connect()->prepare($sql);
        $data = null;
        if ($query->execute()) {
            $data = $query->fetchAll(PDO::FETCH_ASSOC);
        }
        return $data;
    }


}