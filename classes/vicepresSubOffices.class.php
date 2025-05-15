<?php
require_once 'database.class.php';

class VicepresSubOffices {

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
                vps.*, 
                h.short AS honorific_short
            FROM vice_president_suboffices AS vps
            LEFT JOIN honorifics AS h ON vps.honorifics_id = h.id
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

    function add_official($office, $office_head, $office_of_vp_in, $honorifics_id)
    {
        try {
            $sql = "INSERT INTO vice_president_suboffices (office, office_head, office_of_vp_in, honorifics_id) VALUES (:office, :office_head, :office_of_vp_in, :honorifics_id)";
            $query = $this->db->connect()->prepare($sql);
            
            $query->bindParam(':office', $office);
            $query->bindParam(':office_head', $office_head);
            $query->bindParam(':office_of_vp_in', $office_of_vp_in);
            $query->bindParam(':honorifics_id', $honorifics_id);
            
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
        $sql = "SELECT * FROM vice_president_suboffices WHERE id = :recordID;";
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
        $sql = "UPDATE vice_president_suboffices SET office = :office, office_head = :office_head, office_of_vp_in = :office_of_vp_in, honorifics_id = :honorifics_id WHERE id = :id;";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':office', $this->office);
        $query->bindParam(':office_head', $this->office_head);
        $query->bindParam(':office_of_vp_in', $this->office_of_vp_in);
        $query->bindParam(':honorifics_id', $this->honorifics);
        $query->bindParam(':id', $this->id);
        return $query->execute();
    }


    function deleteOfficial($id) {
        $sql = "DELETE FROM vice_president_suboffices WHERE id = :id";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':id', $id);
        return $query->execute();
    }

    function fetchSuboffices()
    {
        $sql = "SELECT * FROM vice_president_suboffices ORDER BY office ASC;";
        $query = $this->db->connect()->prepare($sql);
        $data = null;
        if ($query->execute()) {
            $data = $query->fetchAll(PDO::FETCH_ASSOC);
        }
        return $data;
    }

    // Upload
    function upload($office, $office_head, $office_of_vp_in, $honorifics_id, $description, $file_name)
    {
        try {
            $sql = "INSERT INTO vice_president_suboffices (office, office_head, office_of_vp_in, honorifics_id, description, image) VALUES (:office, :office_head, :office_of_vp_in, :honorifics_id, :description, :image)";
            $query = $this->db->connect()->prepare($sql);
            
            $query->bindParam(':office', $office);
            $query->bindParam(':office_head', $office_head);
            $query->bindParam(':office_of_vp_in', $office_of_vp_in);
            $query->bindParam(':honorifics_id', $honorifics_id);
            $query->bindParam(':description', $description);
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


}