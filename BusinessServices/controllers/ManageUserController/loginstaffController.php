<?php

require_once __DIR__ . '/../../models/ManageUserModel/loginstaffModel.php';


class loginstaffController extends loginstaffModel
{
    public function loginStaff() {
        if(isset($_POST['Loginstaff'])){
            $icnum = $_REQUEST['icnum'];
            $password = $_REQUEST['pass'];
    
            $loginstaffModel = new loginstaffModel();
    
            $loginResult = $loginstaffModel->getStaff($icnum, $password);
    
            if ($loginResult !== false ) {
                $userArray = array(
                    'uid' => $loginResult['id'],
                    'icnum' => $loginResult['icnum'],
                    'fullname' => $loginResult['name'],
                    'email' => $loginResult['email'],
                    'login' => true,
                );
    
                setcookie("user_data", json_encode($userArray));
    
                header("Location: ../../ezkahwin/App/MarriageRegistration/newRegistration.php");
                exit();
            } else {
                echo "Invalid login credentials"; // Debugging statement
                header("refresh:3; ../../ezkahwin/index.php");
            }
        } else {
            include 'App/Login/loginstaff.php';
        }
    }
    
}