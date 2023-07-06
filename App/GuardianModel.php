<?php

class GuardianModel
{
    private $db;

    public function __construct()
    {
        $host = 'localhost';
        $dbname = 'emunakahat';
        $username = 'root';
        $password = '';

        try {
            $this->db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
            exit();
        }
    }

    public function saveGuardianData($formData)
    {
        // Extract the form data
        $guardianID = $formData['guardian_ID'];
        $guardianname = $formData['guardian_name'];
        $guardianaddrress = $formData['guardian_addrress'];  
        $guardianphone_number = $formData['guardian_phone_number'];
        

        // Save the marriage data in the database
        $stmt = $this->db->prepare("INSERT INTO requestmarriage (guardian_ID, guardian_name, guardian_addrress, guardian_phone_number)
         VALUES (?, ?, ?, ? )");
        $stmt->execute([$guardianID, $guardianname, $guardianaddrress, $guardianphone_number ]);
    }
    public function getGuardianData()
    {
        $stmt = $this->db->prepare("SELECT * FROM requestmarriage");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}