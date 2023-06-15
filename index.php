<?php

require_once 'BusinessServices/controllers/ManageUserController/loginuserController.php';
require_once 'BusinessServices/controllers/ManageUserController/loginstaffController.php';
require_once 'BusinessServices/controllers/ManageUserController/registerController.php';
require_once 'BusinessServices/controllers/ManageConsultationController/complaintController.php';
require_once 'BusinessServices/controllers/ManageConsultationController/consultationController.php';
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

    $adduser = new registerController();
    $adduser->register($noIC, $email, $name, $gender, $phonenum, $address, $password);
}

if (isset($_POST['submitcomplaint'])) {
    $complaint_date = $_POST['complaint_date'];
    $complaint_desc = $_POST['complaint_desc'];

    $usercomplaint = new complaintController();
    $usercomplaint->complaint($complaint_date, $complaint_desc);
}

if (isset($_POST['submitsession'])) {
    $consultation_session_no = $_POST['consultation_session_no'];
    $consultation_additional = $_POST['consultation_additional'];
    $consultation_date = $_POST['consultation_date'];
    $consultation_time = $_POST['consultation_time'];

    $session = new consultationController();
    $session->consultation($consultation_session_no, $consultation_additional, $consultation_date,  $consultation_time);
}

if (isset($_POST['getComplaintData'])) {
    $complaintController= new complaintController();
    $complaintController->getDataComplaint();
}

if (isset($_POST['getConsultationtData'])) {
    $consultationController= new consultationController();
    $consultationController->getDataConsultation();
}

?>