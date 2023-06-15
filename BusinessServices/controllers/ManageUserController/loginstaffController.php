<?php

require_once __DIR__ . '/../../Model/MANAGEUSERMODEL/staff.php';


class loginstaffController extends staff
{
    public function loginStaff() {
        if(isset($_POST['Loginstaff'])){
            $icnum = $_REQUEST['icnum'];
            $password = $_REQUEST['pass'];
    
            $loginstaffModel = new staff();
    
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
    
                header("Location: ../../ezkahwin/App/ManageUser/profilepengguna.php");
                exit();
            } else {
                echo "Invalid login credentials"; // Debugging statement
                header("refresh:3; ../../ezkahwin/index.php");
            }
        } else {
            include 'App/ManageUser/loginstaff.php';
        }
    }
    
}