<?php
require_once __DIR__ . '/../../Model/db.php';

class ManageUser extends Connection
{
    public function getUser($icnum, $password)
    {
        $connection = $this->getConnection();

        $query = "SELECT * FROM user WHERE icnum = '$icnum' AND password = '$password'";

        $result = mysqli_query($connection, $query);

        if (mysqli_num_rows($result) == 0) {
            return false; // Return false if no matching user found
        } else {
            return mysqli_fetch_assoc($result); // Return the user data as an associative array
        }
    }

    public function addUser($noIC, $email, $name, $gender, $phonenum, $address, $password)
    {
        $connection = $this->getConnection();
        $query = "INSERT INTO user VALUES (0, '$noIC', '$email', '$name', '$gender', '$phonenum', '$address', '$password')";

        $result = mysqli_query($connection, $query);
        if (!$result) {
            return false;
        } else {
            return $result;
        }
    }

    public function editProfile($email, $name, $gender, $phonenum, $address, $id)
    {
        $connection = $this->getConnection();
        $query = "UPDATE user SET email='$email', name='$name', gender='$gender', phonenum='$phonenum', address='$address' WHERE id=$id";
        $result = mysqli_query($connection, $query);

        if (!$result) {
            return false;
        }

        // Update the user data in the cookie
        if (isset($_COOKIE['user_data'])) {
            $userArray = json_decode($_COOKIE['user_data'], true);
            if ($userArray['uid'] == $id) {
                $userArray['email'] = $email;
                $userArray['name'] = $name;
                $userArray['gender'] = $gender;
                $userArray['phonenum'] = $phonenum;
                $userArray['address'] = $address;
                setcookie('user_data', json_encode($userArray)); // Update the cookie
            }
        }

        return true;
    }

    public function getUserById($id)
    {
        if (isset($_COOKIE['user_data'])) {
            $userArray = json_decode($_COOKIE['user_data'], true);
            if ($userArray['uid'] == $id) {
                return $userArray;
            }
        }
        return null;
    }
}
