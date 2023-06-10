<?php
//require_once 'BusinessServices/controllers/marriageRegistrationController.php';
require_once 'BusinessServices/controllers/ManageUserController/loginuserController.php';
require_once 'BusinessServices/controllers/ManageUserController/loginstaffController.php';

//$facade = new MarriageRegistrationController();

if (isset($_POST['Loginstaff'])) {
    // Staff login request
    if (isset($_GET['user_type']) && $_GET['user_type'] === 'staff') {
        $loginstaffController = new LoginstaffController();
        $loginstaffController->loginStaff();
    } else {
        // Display the staff login view
        include 'App/Login/loginstaff.php';
        exit(); // Exit to prevent further execution
    }
} else {
    // User login request
    if (isset($_POST['Loginuser'])) {
        $facade = new loginuserController();
        $facade->login();
    } else {
        // Display the user login view
        include 'App/Login/loginuser.php';
    }
}

?>
