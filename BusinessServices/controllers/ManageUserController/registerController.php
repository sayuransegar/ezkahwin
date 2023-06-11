<?php

require_once __DIR__ . '/../../models/ManageUserModel/user.php';


class registerController extends user
{
    public function register() {
        if(isset($_POST['Registeruser'])){
            $icnum = $_REQUEST['icnum'];
            $email = $_REQUEST['email'];
            $name = $_REUQEST['name'];
            $gender = $_REQUEST['gender'];
            $phonenum = $_REQUEST['phonenum'];
            $address = $_REQUEST['address'];
            $password = $_REQUEST['pass'];
    
            $user = new user();
    
            $registerResult = $user->getUser($icnum, $email, $name, $gender, $phonenum, $address, $password);
    
            if ($registerResult !== false ) {
                $userArray = array(
                    'uid' => $registerResult['id'],
                    'icnum' => $registerResult['icnum'],
                    'email' => $registerResult['email'],
                    'fullname' => $registerResult['name'],
                    'gender' => $registerResult['gender'],
                    'phonenum' => $registerResult['phonenum'],
                    'address' => $registerResult['address'],
                    'register' => true,
                );
    
                setcookie("user_data", json_encode($userArray));
    
                header("Location: ../../ezkahwin/App/MarriageRegistration/marriageRegistrationView.php");
                exit();
            } else {
                echo "Invalid login credentials"; // Debugging statement
                header("refresh:3; ../../ezkahwin/index.php");
            }
        } else {
            include 'App/ManageUser/register.php';
        }
    }
    
}
