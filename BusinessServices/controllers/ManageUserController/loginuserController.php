<?php

require_once __DIR__ . '/../../models/ManageUserModel/loginuserModel.php';


class loginuserController extends loginuserModel
{
    public function login() {
        if(isset($_POST['Loginuser'])){
            $icnum = $_REQUEST['icnum'];
            $password = $_REQUEST['pass'];
    
            $loginuserModel = new loginuserModel();
    
            $loginResult = $loginuserModel->getUser($icnum, $password);
    
            if ($loginResult !== false ) {
                $userArray = array(
                    'uid' => $loginResult['id'],
                    'icnum' => $loginResult['icnum'],
                    'fullname' => $loginResult['name'],
                    'email' => $loginResult['email'],
                    'login' => true,
                );
    
                setcookie("user_data", json_encode($userArray));
    
                header("Location: ../../ezkahwin/App/MarriageRegistration/marriageRegistrationView.php");
                exit();
            } else {
                echo "Invalid login credentials"; // Debugging statement
                header("refresh:3; ../../ezkahwin/index.php");
            }
        } else {
            include 'App/ManageUser/loginuser.php';
        }
    }
    
}
