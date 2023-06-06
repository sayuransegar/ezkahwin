<?php
require_once 'db.php';

class MarriageRegistrationModel {
    private $db;

    public function __construct() {
        $this->db = new DB();
    }

    public function getApplicantData() {
        $query = "SELECT * FROM applicant Where applicant_id = 1";
        $result = $this->db->query($query);
        return $this->db->fetch($result);
    }
}
?>
