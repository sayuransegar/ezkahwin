<?php
require_once 'ProfileController.php';

// Create an instance of the ProfileController class
$model = new ProfileController();

// Check if the "CARIAN" button is clicked
if (isset($_POST['search_button'])) {
    $ic_number = $_POST['ic_number'];
    $data = $model->searchData($ic_number);
}
?>