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
}
