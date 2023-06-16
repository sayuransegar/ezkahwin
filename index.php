<?php

require_once 'BusinessServices/controllers/MANAGEUSERCONTROLLER/loginuserController.php';
require_once 'BusinessServices/controllers/MANAGEUSERCONTROLLER/loginstaffController.php';
require_once 'BusinessServices/controllers/MANAGEUSERCONTROLLER/registerController.php';
require_once 'BusinessServices/controllers/ManageConsultationController/complaintController.php';
require_once 'BusinessServices/controllers/ManageConsultationController/consultationController.php';
require_once 'BusinessServices/controllers/MANAGEUSERCONTROLLER/editprofileController.php';
require_once 'BusinessServices/controllers/MANAGEUSERCONTROLLER/editpenggunaController.php';
require_once 'BusinessServices/controllers/MANAGEUSERCONTROLLER/deletepenggunaController.php';
require_once 'BusinessServices/controllers/MarriageRegistrationController/MarriageRegistrationController.php';
require_once 'BusinessServices/controllers/MarriageRegistrationController/NewMarriageRegistrationController.php';
require_once 'BusinessServices/controllers/MarriageRegistrationController/MarriageRegistrationApprovalController.php';
require_once 'BusinessServices/controllers/MarriageCardController/ProofOfPaymentController.php';


session_start();
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
} elseif (isset($_POST['id']) && isset($_COOKIE['user_data'])) {
    $id = $_POST['id'];
    $email = $_POST['email'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $phonenum = $_POST['phonenum'];
    $address = $_POST['address'];

    $editProfile = new EditProfileController();
    $editProfile->profile($email, $name, $gender, $phonenum, $address, $id);
} elseif (isset($_POST['uid'])) {
    $id = $_POST['uid'];
    $email = $_POST['email'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $phonenum = $_POST['phonenum'];
    $address = $_POST['address'];

    $editProfile = new editPengguna();
    $editProfile->userUpdate($email, $name, $gender, $phonenum, $address, $id);
} elseif (isset($_GET['did'])) {
    $id = $_GET['did'];

    $deleteProfile = new deletePengguna();
    $deleteProfile->deleteUser($id);
} elseif (isset($_POST['action']) && $_POST['action'] === 'searchPartner') {
    $partner_ic = $_POST['partner_ic'];
    $marriageRegistrationController = new MarriageRegistrationController();
    $marriageRegistrationController->displayPartner($partner_ic);
} elseif (isset($_POST['submit'])) {
    $marriage_category = $_POST['marriage_category'];
    $marriage_license_number = $_POST['marriage_license_number'];

    $newRegister = new newMarriageController();
    $newRegister->newMarriage($marriage_category, $marriage_license_number);

    echo $content;

} elseif (isset($_POST['submitPayment'])) {
    $proof_of_payment = $_REQUEST['proof_of_payment'];

    $card = new newMarriageCard();
    $card->marriageCard($proofofpayment);

} elseif (isset($_POST['submitcomplaint'])) {
    $complaint_date = $_POST['complaint_date'];
    $complaint_desc = $_POST['complaint_desc'];

    $usercomplaint = new complaintController();
    $usercomplaint->complaint($complaint_date, $complaint_desc);
} elseif (isset($_POST['submitsession'])) {
    $consultation_session_no = $_POST['consultation_session_no'];
    $consultation_additional = $_POST['consultation_additional'];
    $consultation_date = $_POST['consultation_date'];
    $consultation_time = $_POST['consultation_time'];

    $session = new consultationController();
    $session->consultation($consultation_session_no, $consultation_additional, $consultation_date,  $consultation_time);
} elseif (isset($_POST['getComplaintData'])) {
    $complaintController = new complaintController();
    $complaintController->getDataComplaint();
} elseif (isset($_POST['getConsultationtData'])) {
    $consultationController = new consultationController();
    $consultationController->getDataConsultation();
}else {

    // Display the user login view
    include 'App/ManageUser/loginuser.php';
}
