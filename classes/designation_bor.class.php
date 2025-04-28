<?php
require_once 'database.class.php';

class DesignationBor {
    protected $db;

    function __construct()
    {
        $this->db = new Database();
    }

    function add_designationBor($designation)
    {
        try {
            $sql = "INSERT INTO designation_bor (designation) VALUES (:designation)";
            $query = $this->db->connect()->prepare($sql);
            
            $query->bindParam(':designation', $designation);
            
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

    function fetchdesignation_bor()
    {
        $sql = "SELECT * FROM designation_bor ORDER BY designation ASC;";
        $query = $this->db->connect()->prepare($sql);
        $data = null;
        if ($query->execute()) {
            $data = $query->fetchAll(PDO::FETCH_ASSOC);
        }
        return $data;
    }


}