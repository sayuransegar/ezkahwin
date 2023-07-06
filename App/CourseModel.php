<?php

class CourseModel
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

    public function saveCourseData($formData)
    {
        // Extract the form data
        $coursedate = $formData['course_date'];
        $courselocation = $formData['course_location'];
        $courseaddress = $formData['course_address'];  
       
        

        // Save the marriage data in the database
        $stmt = $this->db->prepare("INSERT INTO marriagepreparationcourse(course_date, course_location, course_address)
         VALUES (?, ?, ?)");
        $stmt->execute([$coursedate, $courselocation, $courseaddress ]);
    }
    public function getCourseData()
    {
        $stmt = $this->db->prepare("SELECT * FROM marriagepreparationcourse");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}