<?php
require_once('db.php');

class AdmissionForm {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function submitForm($data) {
        try {
            $stmt = $this->db->connection->prepare("INSERT INTO admission_form (first_name, last_name, date_of_birth, gender) VALUES (:first_name, :last_name, :date_of_birth, :gender)");

            $stmt->bindParam(':first_name', $data['first_name']);
            $stmt->bindParam(':last_name', $data['last_name']);
            $stmt->bindParam(':date_of_birth', $data['date_of_birth']);
            $stmt->bindParam(':gender', $data['gender']);

            return $stmt->execute();
        } catch (PDOException $e) {
            return false;
        }
    }
}
?>
