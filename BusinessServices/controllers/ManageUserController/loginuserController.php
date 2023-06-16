<?php

require_once __DIR__ . '/../../Model/MANAGEUSERMODEL/ManageUser.php';


class loginuserController extends ManageUser
{
    public function login() {
        if(isset($_POST['Loginuser'])){
            $icnum = $_REQUEST['icnum'];
            $password = $_REQUEST['pass'];
    
            $loginuserModel = new ManageUser();
    
            $loginResult = $loginuserModel->getUser($icnum, $password);
    
            if ($loginResult !== false ) {
                $userArray = array(
                    'uid' => $loginResult['id'],
                    'icnum' => $loginResult['icnum'],
                    'name' => $loginResult['name'],
                    'email' => $loginResult['email'],
                    'gender' => $loginResult['gender'],
                    'phonenum' => $loginResult['phonenum'],
                    'address' => $loginResult['address'],
                    'password' => $loginResult['password'],
                    'login' => true,
                );
    
                setcookie("user_data", json_encode($userArray));
    
                header("Location: ../../ezkahwin/App/ManageUser/home.php");
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
