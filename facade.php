<?php
require_once 'IncentiveProfile.php';

// Create an instance of the IncentiveProfile class
$incentiveProfile = new IncentiveProfile();

// Check if the "CARIAN" button is clicked
if (isset($_POST['search_button'])) {
    $ic_number = $_POST['ic_number'];
    $data = $incentiveProfile->searchData($ic_number);
}
?>