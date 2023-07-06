<?php

class MarriageModel
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

    public function saveMarriageData($formData)
    {
        // Extract the form data
        $marriagesoleminization = $formData['soleminization_date'];
        $marriagedate = $formData['marriage_date'];
        $marriagedownry = $formData['ammount_downry'];  
        $marriageaddress = $formData['marriage_address'];
        

        // Save the marriage data in the database
        $stmt = $this->db->prepare("INSERT INTO requestmarriage (soleminization_date, marriage_date, ammount_downry, marriage_address)
         VALUES (?, ?, ?, ? )");
        $stmt->execute([$marriagesoleminization, $marriagedate, $marriagedownry, $marriageaddress ]);
    }
    public function getMarriageData()
    {
        $stmt = $this->db->prepare("SELECT * FROM requestmarriage");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}