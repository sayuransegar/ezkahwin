<?php

class ViewRequestMarriageInterfaceApplicantModel
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

    
    public function saveViewRequestMarriageInterfaceApplicantData($formData)
    {
        // Extract the form data
        $applicantID = $formData['applicant_ID'];
        $applicantName = $formData['applicant_name'];
        $applicantdob = $formData['applicant_dob'];  
        $applicantpob = $formData['applicant_pob'];
        $applicantaddress = $formData['applicant_address'];
        $applicantrace = $formData['applicant_race'];
        $applicantjob = $formData['applicant_job'];
        $applicantlevelofeducation = $formData['applicant_levelOfEducation'];
        $applicantsalary = $formData['applicant_salary'];
        $applicantgender = $formData['applicant_gender'];
        $applicantjobsector = $formData['applicant_JOB_sector'];
        $applicantphonenumber = $formData['applicant_phone_number'];

        // Save the applicant data in the database
        $stmt = $this->db->prepare("INSERT INTO applicant (applicant_ID, applicant_name, applicant_dob, applicant_pob, applicant_address, applicant_race
        , applicant_job, applicant_levelOfEducation, applicant_salary, applicant_gender, applicant_JOB_sector, applicant_phone_number) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )");
        $stmt->execute([$applicantID, $applicantName, $applicantdob, $applicantpob, $applicantaddress, $applicantrace, $applicantjob, 
        $applicantlevelofeducation, $applicantsalary, $applicantgender, $applicantjobsector, $applicantphonenumber ]);
    }

    public function getViewRequestMarriageInterfaceApplicantData()
    {
        $stmt = $this->db->prepare("SELECT * FROM applicant");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

    //////Partner
    class PartnerModel
    {

    public function savePartnerData($formData)
    {
        // Extract the form data
        $partnerID = $formData['partner_ID'];
        $partnerName = $formData['partner_name'];
        $partnerdob = $formData['partner_dob'];  
        $partnerpob = $formData['partner_pob'];
        $partneraddress = $formData['partner_address'];
        $partnerrace = $formData['partner_race'];
        $partnerjob = $formData['partner_job'];
        $partnerlevelofeducation = $formData['partner_levelOfEducation'];
        $partnersalary = $formData['partner_salary'];
        $partnergender = $formData['partner_gender'];
        $partnerjobsector = $formData['partner_JOB_sector'];
        $partnerphonenumber = $formData['partner_phone_number'];

        // Save the partner data in the database
        $stmt = $this->db->prepare("INSERT INTO partner (partner_ID, partner_name, partner_dob, partner_pob, partner_address, partner_race
        , partner_job, partner_levelOfEducation, partner_salary, partner_gender, partner_JOB_sector, partner_phone_number) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )");
        $stmt->execute([$partnerID, $partnerName, $partnerdob, $partnerpob, $partneraddress, $partnerrace, $partnerjob, 
        $partnerlevelofeducation, $partnersalary, $partnergender, $partnerjobsector, $partnerphonenumber ]);
    }

    public function getPartnerData()
    {
        $stmt = $this->db->prepare("SELECT * FROM partner");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
