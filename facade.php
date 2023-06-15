<?php
require_once 'IncentiveProfile.php';

// Create an instance of the IncentiveProfile class
$model = new IncentiveProfile();

// Check if the "CARIAN" button is clicked
if (isset($_POST['search_button'])) {
    $ic_number = $_POST['ic_number'];
    $data = $model->searchData($ic_number);
}
?>