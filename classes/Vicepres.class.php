<?php
require_once 'database.class.php';

class VicePres {
    protected $db;
    public $office_name; // Add office_name property

    function __construct() {
        $this->db = new Database();
    }

    function fetchAll() {
        $sql = "
            SELECT 
                vp.id,
                vp.name,
                vp.title_id,
                
                dvp.designation AS title,
                vp.page_link,
                h.short AS honorific_short
            FROM vice_presidents AS vp
            LEFT JOIN honorifics AS h ON vp.honorifics_id = h.id
            LEFT JOIN designation_vp AS dvp ON vp.title_id = dvp.id
            ORDER BY vp.id ASC
        ";
    
        $query = $this->db->connect()->prepare($sql);
        $data = null;
        if ($query->execute()) {
            $data = $query->fetchAll(PDO::FETCH_ASSOC);
        }
        return $data;
    }

    function add_official($name, $title_id, $page_link, $honorifics_id, $office_name) {
        try {
            $sql = "INSERT INTO vice_presidents (name, title_id, page_link, honorifics_id, office_name) 
                    VALUES (:name, :title_id, :page_link, :honorifics_id, :office_name)";
            $query = $this->db->connect()->prepare($sql);
            
            $query->bindParam(':name', $name);
            $query->bindParam(':title_id', $title_id);
            $query->bindParam(':page_link', $page_link);
            $query->bindParam(':honorifics_id', $honorifics_id);
            $query->bindParam(':office_name', $office_name);
            
            return $query->execute();
        } catch (PDOException $e) {
            echo "Database error: " . $e->getMessage();
            return false;
        }
    }

    function deleteOfficial($id) {
        $sql = "DELETE FROM vice_presidents WHERE id = :id";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':id', $id);
        return $query->execute();
    }

    function fetchRecord($recordID) {
        $sql = "SELECT * FROM vice_presidents WHERE id = :recordID;";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':recordID', $recordID);
        $data = null;
        if ($query->execute()) {
            $data = $query->fetch();
        }
        return $data;
    }

    function edit() {
        $sql = "UPDATE vice_presidents SET name = :name, title_id = :title_id, page_link = :page_link, 
                honorifics_id = :honorifics_id, office_name = :office_name WHERE id = :id;";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':name', $this->name);
        $query->bindParam(':title_id', $this->title_id);
        $query->bindParam(':page_link', $this->page_link);
        $query->bindParam(':honorifics_id', $this->honorifics);
        $query->bindParam(':office_name', $this->office_name);
        $query->bindParam(':id', $this->id);
        return $query->execute();
    }
}
?>