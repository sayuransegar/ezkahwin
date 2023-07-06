<?php

class WitnessModel
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

    public function saveWitnessData($formData)
    {
        // Extract the form data
        $witnessID1 = $formData['witness_ID1'];
        $witnessname1 = $formData['witness_name1'];
        $witnessaddress1 = $formData['witness_address1'];  
        $witnessphone_number1 = $formData['witness_phone_number1'];
        $witnessID2 = $formData['witness_ID2'];
        $witnessname2 = $formData['witness_name2'];
        $witnessaddress2 = $formData['witness_address2'];  
        $witnessphone_number2 = $formData['witness_phone_number2'];
        

        // Save the marriage data in the database
        $stmt = $this->db->prepare("INSERT INTO requestmarriage (witness_ID1, witness_name1, witness_address1, witness_phone_number1, witness_ID2, witness_name2, witness_address2, witness_phone_number2)
         VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute([$witnessID1, $witnessname1, $witnessaddress1, $witnessphone_number1, $witnessID2, $witnessname2, $witnessaddress2, $witnessphone_number2 ]);
    }
    public function getWitnessData()
    {
        $stmt = $this->db->prepare("SELECT * FROM requestmarriage");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}