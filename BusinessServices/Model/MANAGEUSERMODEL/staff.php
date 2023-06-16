<?php
require_once __DIR__ . '/../../MODEL/db.php';


class staff extends Connection {
    
    public function getStaff($icnum, $password)
    {
        $connection = $this->getConnection();

        $query = "SELECT * FROM staff WHERE icnum = '$icnum' AND password = '$password'";

        $result = mysqli_query($connection, $query);

        if (mysqli_num_rows($result) == 0) {
            return false; // Return false if no matching user found
        } else {
            return mysqli_fetch_assoc($result); // Return the user data as an associative array
        }
    }
    
    public function getAllUsers()
    {
        $connection = $this->getConnection();
    
        $query = "SELECT * FROM user";
    
        $result = mysqli_query($connection, $query);
    
        $users = array();
    
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $users[] = $row;
            }
        }
    
        return $users;
    }

    public function getUserById($id)
    {
        $connection = $this->getConnection();
        $query = "SELECT * FROM user WHERE id='$id'";
        $result = mysqli_query($connection, $query);

        $user = mysqli_fetch_assoc($result);

        return $user;
    }

    public function deleteUserById($id)
    {
        $connection = $this->getConnection();
        $query = "DELETE FROM user WHERE id='$id'";
        mysqli_query($connection, $query);
    }
    

    public function updateUser($email, $name, $gender, $phonenum, $address, $id)
    {
        $connection = $this->getConnection();
        $query = "UPDATE user SET email='$email', name='$name', gender='$gender', phonenum='$phonenum', address='$address' WHERE id=$id";
        $result = mysqli_query($connection, $query);

        if (!$result) {
            return false;
        }

        return true;
    }
    
}

?>

