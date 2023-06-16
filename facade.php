<?php
require_once 'C:\xampp\htdocs\ezkahwin\BusinessServices\Model\IncentiveModel\IncentiveProfile.php';

// Create an instance of the IncentiveProfile class
$incentiveProfile = new IncentiveProfile();

// Check if the "CARIAN" button is clicked
if (isset($_POST['search_button'])) {
    $ic_number = $_POST['ic_num'];
    $data = $incentiveProfile->searchData($ic_number);
}
?>