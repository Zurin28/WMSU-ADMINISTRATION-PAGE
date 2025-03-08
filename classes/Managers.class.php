<?php
require_once 'database.class.php';

class Managers {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->connect();
    }

    public function fetchAll() {
        try {
            $stmt = $this->db->prepare("SELECT * FROM managers");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Error fetching values: " . $e->getMessage());
        }
    }
}
?>