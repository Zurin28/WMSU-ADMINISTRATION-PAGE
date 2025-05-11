<?php
require_once 'database.class.php';

class Honorifics {
    protected $db;

    function __construct()
    {
        $this->db = new Database();
    }

    function fetchall()
    {
        $sql = "SELECT * FROM honorifics ORDER BY name ASC;";
        $query = $this->db->connect()->prepare($sql);
        $data = null;
        if ($query->execute()) {
            $data = $query->fetchAll(PDO::FETCH_ASSOC);
        }
        return $data;
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

    function fetchRecord($recordID)
    {
        $sql = "SELECT * FROM honorifics WHERE id = :recordID;";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':recordID', $recordID);
        $data = null;
        if ($query->execute()) {
            $data = $query->fetch();
        }
        return $data;
    }

    function edit($id, $name, $short)
    {
        $sql = "UPDATE honorifics SET name = :name, short = :short WHERE id = :id";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':id', $id);
        $query->bindParam(':name', $name);
        $query->bindParam(':short', $short);
        return $query->execute();
    }

    function delete_honorifics($id)
    {
        $sql = "DELETE FROM honorifics WHERE id = :id";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':id', $id);
        return $query->execute();
    }


}