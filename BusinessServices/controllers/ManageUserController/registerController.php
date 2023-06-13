<?php

require_once __DIR__ . '/../../models/ManageUserModel/user.php';


class registerController extends user
{
    public function register($noIC, $email, $name, $gender, $phonenum, $address, $password)
    {

        $useraddcourseModel = new user();
        $addcourseResult = $useraddcourseModel->addUser($noIC, $email, $name, $gender, $phonenum, $address, $password);

        if (!$addcourseResult) {
            echo "Faild Register"; // Debugging statement
            header("refresh:3; ../../ezkahwin/App/ManageUser/register.php");
        } else {
            echo "Faild Register";
            header("Location: ../../ezkahwin/index.php");
            exit();
        }
    }
}
