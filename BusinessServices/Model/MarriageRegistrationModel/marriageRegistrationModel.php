<?php
require_once 'C:\xampp\htdocs\ezkahwin\BusinessServices\Model\db.php';

class MarriageRegistrationModel extends Connection
{
    public function getApplicantData($id)
    {
        $connection = $this->getConnection();

        $query = "SELECT *
              FROM applicant
              JOIN user ON applicant.id = user.id
              WHERE applicant.id = $id";

        $result = mysqli_query($connection, $query);

        if (mysqli_num_rows($result) == 0) {
            return null; // Return null if no matching applicant data found
        } else {
            return mysqli_fetch_assoc($result); // Return the applicant data as an associative array
        }
    }

    public function getPartnerData($partner_ic)
    {
        $connection = $this->getConnection();

        $query = "SELECT *
              FROM partner
              WHERE partner_ic = '$partner_ic'";

        $result = mysqli_query($connection, $query);

        if (mysqli_num_rows($result) == 0) {
            return null; // Return null if no matching partner data found
        } else {
            return mysqli_fetch_assoc($result); // Return the partner data as an associative array
        }
    }


    public function addMarriage($marriage_category, $marriage_license_number)
    {
        $connection = $this->getConnection();
        $query = "INSERT INTO marriageregistration VALUES (0, NULL, NULL, '$marriage_category', '$marriage_license_number', NULL)";

        $result = mysqli_query($connection, $query);
        if (!$result) {
            return false;
        } else {
            return $result;
        }
    }

    public function displayInfo()
    {
        $connection = $this->getConnection();

        $query = "SELECT *
        FROM requestmarriage AS r
        JOIN applicant AS a ON r.applicant_id
        JOIN user as u ON a.id
        JOIN partner AS p ON r.partner_id
        WHERE r.requestmarriage_id = 1";
        
        $result = mysqli_query($connection, $query);

        if (mysqli_num_rows($result) == 0) {
            return null; // Return null if no matching applicant data found
        } else {
            return mysqli_fetch_assoc($result); // Return the applicant data as an associative array
        }
    }
}
