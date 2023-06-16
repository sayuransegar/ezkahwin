<?php

require_once 'BusinessServices/controllers/MANAGEUSERCONTROLLER/loginuserController.php';
require_once 'BusinessServices/controllers/MANAGEUSERCONTROLLER/loginstaffController.php';
require_once 'BusinessServices/controllers/MANAGEUSERCONTROLLER/registerController.php';
require_once 'BusinessServices/controllers/ManageConsultationController/complaintController.php';
require_once 'BusinessServices/controllers/ManageConsultationController/consultationController.php';
require_once 'BusinessServices/controllers/MANAGEUSERCONTROLLER/editprofileController.php';
require_once 'BusinessServices/controllers/MANAGEUSERCONTROLLER/editpenggunaController.php';
require_once 'BusinessServices/controllers/MANAGEUSERCONTROLLER/deletepenggunaController.php';



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
} elseif (isset($_POST['Loginuser'])) {
    $facade = new loginuserController();
    $facade->login();

} elseif (isset($_POST['daftar'])) {
    $noIC = $_POST['icnum'];
    $email = $_POST['email'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $phonenum = $_POST['phonenum'];
    $address = $_POST['address'];
    $password = $_POST['password'];

    $adduser = new registerController();
    $adduser->register($noIC, $email, $name, $gender, $phonenum, $address, $password);
} else {

    // Display the user login view
    include 'App/ManageUser/loginuser.php';
}

if (isset($_POST['id']) && isset($_COOKIE['user_data'])) {
    $id = $_POST['id'];
    $email = $_POST['email'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $phonenum = $_POST['phonenum'];
    $address = $_POST['address'];

    $editProfile = new EditProfileController();
    $editProfile->profile($email, $name, $gender, $phonenum, $address, $id);
}

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $email = $_POST['email'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $phonenum = $_POST['phonenum'];
    $address = $_POST['address'];

    $editProfile = new editPengguna();
    $editProfile->userUpdate($email, $name, $gender, $phonenum, $address, $id);
}

if (isset($_GET['did'])) {
    $id = $_GET['did'];

    $deleteProfile = new deletePengguna();
    $deleteProfile->deleteUser($id);
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
    $complaintController = new complaintController();
    $complaintController->getDataComplaint();
}

if (isset($_POST['getConsultationtData'])) {
    $consultationController = new consultationController();
    $consultationController->getDataConsultation();
}
