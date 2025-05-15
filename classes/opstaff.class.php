<?php
require_once 'database.class.php';

class OpStaff {
    protected $db;

    // Add office_name property
    public $office_name;

    function __construct()
    {
        $this->db = new Database();
    }

    // Fetch all opstaff with honorifics, designation title, and office_name
    function fetchAll()
    {
        $sql = "
            SELECT 
                o.id,
                o.name,
                o.page_link,
                o.office_name,  /* Make sure office_name is selected */
                h.short AS honorific_short,
                d.designation AS title
            FROM opstaff AS o
            LEFT JOIN honorifics AS h ON o.honorifics_id = h.id
            LEFT JOIN designation_opstaff AS d ON o.title_id = d.id
            ORDER BY o.id ASC
        ";

        // Prepare the query
        $query = $this->db->connect()->prepare($sql);

        // Execute the query and fetch data
        $data = null;
        if ($query->execute()) {
            $data = $query->fetchAll(PDO::FETCH_ASSOC);
        }

        return $data;
    }

        

    function add_official($name, $title_id, $page_link, $honorifics_id, $office_name)
    {
        try {
            $sql = "INSERT INTO opstaff (name, title_id, page_link, honorifics_id, office_name) 
                    VALUES (:name, :title_id, :page_link, :honorifics_id, :office_name)";
            $query = $this->db->connect()->prepare($sql);
            
            $query->bindParam(':name', $name);
            $query->bindParam(':title_id', $title_id);  // Changed from :title to :title_id
            $query->bindParam(':page_link', $page_link);
            $query->bindParam(':honorifics_id', $honorifics_id);
            $query->bindParam(':office_name', $office_name);
            
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
        $sql = "DELETE FROM opstaff WHERE id = :id";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':id', $id);
        return $query->execute();
    }

    function fetchRecord($recordID)
    {
        $sql = "SELECT * FROM opstaff WHERE id = :recordID;";
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
        $sql = "UPDATE opstaff SET name = :name, title_id = :title_id, page_link = :page_link, honorifics_id = :honorifics_id, office_name = :office_name WHERE id = :id;";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':name', $this->name);
        $query->bindParam(':title_id', $this->title_id);
        $query->bindParam(':page_link', $this->page_link);
        $query->bindParam(':honorifics_id', $this->honorifics);
        $query->bindParam(':office_name', $this->office_name);
        $query->bindParam(':id', $this->id);
        return $query->execute();
    }

    // Add this new method to fetch designations
    function fetchDesignations() {
        $sql = "SELECT id, designation FROM designation_opstaff ORDER BY designation ASC";
        $query = $this->db->connect()->prepare($sql);
        
        $data = null;
        if ($query->execute()) {
            $data = $query->fetchAll(PDO::FETCH_ASSOC);
        }
        return $data;
    }
}
?>