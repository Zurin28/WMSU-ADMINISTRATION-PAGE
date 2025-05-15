<?php
require_once 'database.class.php';

class Personnel {
    protected $db;

    function __construct()
    {
        $this->db = new Database();
    }

    function add_president_personnel($PersonnelName, $PresSuboffice_id, $personnel_honorifics_id)
    {
        try {
            $sql = "INSERT INTO personnel (PersonnelName, PresSuboffice_id, personnel_honorifics_id) VALUES (:PersonnelName, :PresSuboffice_id, :personnel_honorifics_id)";
            $query = $this->db->connect()->prepare($sql);
            
            $query->bindParam(':PersonnelName', $PersonnelName);
            $query->bindParam(':PresSuboffice_id', $PresSuboffice_id);
            $query->bindParam(':personnel_honorifics_id', $personnel_honorifics_id);
            
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

        function add_vicepres_personnel($PersonnelName, $VpSuboffice_id, $personnel_honorifics_id)
    {
        try {
            $sql = "INSERT INTO personnel (PersonnelName, VpSuboffice_id, personnel_honorifics_id) VALUES (:PersonnelName, :VpSuboffice_id, :personnel_honorifics_id)";
            $query = $this->db->connect()->prepare($sql);
            
            $query->bindParam(':PersonnelName', $PersonnelName);
            $query->bindParam(':VpSuboffice_id', $VpSuboffice_id);
            $query->bindParam(':personnel_honorifics_id', $personnel_honorifics_id);
            
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

    function fetchPersonnelPresident()
    {
        $sql = "SELECT p.*, ps.office, h.short AS honorific_short
                FROM personnel p
                LEFT JOIN president_suboffices ps ON p.PresSuboffice_id = ps.id
                LEFT JOIN honorifics h ON p.personnel_honorifics_id = h.id
                WHERE p.PresSuboffice_id IS NOT NULL";
        $query = $this->db->connect()->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    function fetchVicePresidentPersonnel()
    {
        $sql = "SELECT p.*, vp.office, vp.office_of_vp_in, h.short AS honorific_short
                FROM personnel p
                LEFT JOIN vice_president_suboffices vp ON p.VpSuboffice_id = vp.id
                LEFT JOIN honorifics h ON p.personnel_honorifics_id = h.id
                WHERE p.VpSuboffice_id IS NOT NULL";
        
        $query = $this->db->connect()->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    function fetchPresidentSuboffices()
    {
        $sql = "SELECT * FROM president_suboffices";
        $query = $this->db->connect()->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    function fetchVicePresidentSuboffices()
    {
        $sql = "SELECT * FROM vice_president_suboffices";
        $query = $this->db->connect()->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    function fetchRecord($recordID)
    {
        $sql = "SELECT * FROM personnel WHERE id = :recordID;";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':recordID', $recordID);
        $data = null;
        if ($query->execute()) {
            $data = $query->fetch();
        }
        return $data;
    }

    function editPersonnelPres($id, $PersonnelName, $PresSuboffice_id, $personnel_honorifics_id)
    {

        $sql = "UPDATE personnel SET PersonnelName = :PersonnelName, PresSuboffice_id = :PresSuboffice_id, personnel_honorifics_id = :personnel_honorifics_id WHERE id = :id";
        $query = $this->db->connect()->prepare($sql);
        
        $query->bindParam(':PersonnelName', $this->PersonnelName);
        $query->bindParam(':PresSuboffice_id', $this->presSuboffice_id);
        $query->bindParam(':personnel_honorifics_id', $this->personnel_honorifics_id);
        $query->bindParam(':id', $this->id);
        
        return $query->execute();
    }

    function editPersonnelVicepres($id, $PersonnelName, $VpSuboffice_id, $personnel_honorifics_id)
    {

        $sql = "UPDATE personnel SET PersonnelName = :PersonnelName, VpSuboffice_id = :VpSuboffice_id, personnel_honorifics_id = :personnel_honorifics_id WHERE id = :id";
        $query = $this->db->connect()->prepare($sql);
        
        $query->bindParam(':PersonnelName', $this->PersonnelName);
        $query->bindParam(':VpSuboffice_id', $this->VpSuboffice_id);
        $query->bindParam(':personnel_honorifics_id', $this->personnel_honorifics_id);
        $query->bindParam(':id', $this->id);
        
        return $query->execute();
    }

    function deletePersonnel($id)
    {
        $sql = "DELETE FROM personnel WHERE id = :id";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':id', $id);
        return $query->execute();
    }

    function fetchAcademicAffairsPersonnel()
{
    $sql = "SELECT p.*, h.short AS honorific_short
            FROM personnel p
            LEFT JOIN vice_president_suboffices vp ON p.VpSuboffice_id = vp.id
            LEFT JOIN honorifics h ON p.personnel_honorifics_id = h.id
            WHERE vp.office_of_vp_in = 'Academic Affairs'";
    
    $query = $this->db->connect()->prepare($sql);
    $query->execute();
    return $query->fetchAll(PDO::FETCH_ASSOC);
}

public function fetchVicePresidentOfficeInfo($title)
{
    $sql = "SELECT *
            FROM vice_president_suboffices
            WHERE office_of_vp_in = :office_of_vp_in
            LIMIT 1";
    
    $query = $this->db->connect()->prepare($sql);
    $query->bindParam(':office_of_vp_in', $title);
    $query->execute();
    return $query->fetch(PDO::FETCH_ASSOC);
}


public function fetchPersonnelByOfficeOfVpIn($title)
{
    $sql = "SELECT p.*, vp.office_of_vp_in, h.short AS honorific_short
            FROM personnel p
            LEFT JOIN vice_president_suboffices vp ON p.VpSuboffice_id = vp.id
            LEFT JOIN honorifics h ON p.personnel_honorifics_id = h.id
            WHERE vp.office_of_vp_in = :office_of_vp_in";

    $query = $this->db->connect()->prepare($sql);
    $query->bindParam(':office_of_vp_in', $title);
    $query->execute();
    return $query->fetchAll(PDO::FETCH_ASSOC);
}



}