<?php
require_once 'database.class.php';

class Board {   
    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->connect();
    }

    public function getAllValues() {
        try {
            $stmt = $this->db->prepare("SELECT * FROM board");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Error fetching values: " . $e->getMessage());
        }
    }
}
?>