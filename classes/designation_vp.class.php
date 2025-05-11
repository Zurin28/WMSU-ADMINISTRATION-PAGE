<?php
require_once 'database.class.php';

class DesignationVp {
    protected $db;

    function __construct()
    {
        $this->db = new Database();
    }

    function add_designationVp($designation)
    {
        try {
            $sql = "INSERT INTO designation_vp (designation) VALUES (:designation)";
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

    function fetchdesignation_vp()
    {
        $sql = "SELECT * FROM designation_vp ORDER BY designation ASC;";
        $query = $this->db->connect()->prepare($sql);
        $data = null;
        if ($query->execute()) {
            $data = $query->fetchAll(PDO::FETCH_ASSOC);
        }
        return $data;
    }

    function delete_designationVp($id)
    {
        try {
            $sql = "DELETE FROM designation_vp WHERE id = :id";
            $query = $this->db->connect()->prepare($sql);
            $query->bindParam(':id', $id);
            return $query->execute();
        } catch (PDOException $e) {
            echo "Database error: " . $e->getMessage();
            return false;
        }
    }

    function fetchRecord($id) {
        $sql = "SELECT * FROM designation_vp WHERE id = :id";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':id', $id);
        $data = null;
        if ($query->execute()) {
            $data = $query->fetch(PDO::FETCH_ASSOC);
        }
        return $data;
    }
}