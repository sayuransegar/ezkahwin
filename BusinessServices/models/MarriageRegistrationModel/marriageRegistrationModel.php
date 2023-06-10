<?php
require_once __DIR__ . '/../../models/db.php';

class MarriageRegistrationModel extends Connection {
    public function getApplicantdata($id){
        $connection = $this->getConnection();

        $query = "SELECT * FROM applicant WHERE applicant_id = '$id'";

        $result = mysqli_query($connection, $query);

        if (mysqli_num_rows($result) == 0) {
            return false; // Return false if no matching user found
        } else {
            return mysqli_fetch_assoc($result); // Return the user data as an associative array
        }
    }
}
?>
