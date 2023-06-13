<?php

require_once 'BusinessServices/controllers/ManageUserController/loginuserController.php';
require_once 'BusinessServices/controllers/ManageUserController/loginstaffController.php';
require_once 'BusinessServices/controllers/ManageUserController/registerController.php';
require_once 'BusinessServices/controllers/ManageConsultationController/complaintController.php';
//require_once 'BusinessServices/controllers/MarriageRegistrationController/marriageRegistrationController.php';


//$facade = new MarriageRegistrationController();

if (isset($_POST['Loginstaff'])) {
    // Staff login request
    if (isset($_GET['user_type']) && $_GET['user_type'] === 'staff') {
        $loginstaffController = new LoginstaffController();
        $loginstaffController->loginStaff();
    } else {
        // Display the staff login view
        include 'App/ManageUser/loginstaff.php';
        exit(); // Exit to prevent further execution
    }
} else {
    // User login request
    if (isset($_POST['Loginuser'])) {
        $facade = new loginuserController();
        $facade->login();
    } else {
        // Display the user login view
        include 'App/ManageUser/loginuser.php';
    }
}


if (isset($_POST['daftar'])) {
    $noIC = $_POST['icnum'];
    $email = $_POST['email'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $phonenum = $_POST['phonenum'];
    $address = $_POST['address'];
    $password = $_POST['password'];

    $usercourse = new registerController();
    $usercourse->register($noIC, $email, $name, $gender, $phonenum, $address, $password);
}

if (isset($_POST['submitcomplaint'])) {
    $complaint_date = $_POST['complaint_date'];
    $complaint_desc = $_POST['complaint_desc'];

    $usercomplaint = new complaintController();
    $usercomplaint->complaint($complaint_date, $complaint_desc);
}

// Check if the complaint ID is provided in the URL and handle the deletion
if (isset($_GET['id'])) {
    $complaint_ID = $_GET['id'];

    // Include the necessary files and instantiate the controller
    require_once 'path/to/complaintController.php';
    $complaintController = new complaintController();

    // Call the deleteComplaint method
    $complaintController->deleteComplaint($complaint_ID);

    // Redirect to the same page to refresh the table without the deleted complaint
    header('Location: index.php');
    exit();
}

if (isset($complaint['complaint_desc'])) {
    $complaint_desc = $complaint['complaint_desc'];
} else {
    $complaint_desc = "N/A"; // or any default value you want to assign
}

