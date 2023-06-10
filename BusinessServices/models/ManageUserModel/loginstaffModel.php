<?php
require_once __DIR__ . '/../../models/db.php';

class loginstaffModel extends Connection {
    public function getStaff($icnum, $password)
{
    $connection = $this->getConnection();

    $query = "SELECT * FROM staff WHERE icnum = '$icnum' AND pass = '$password'";

    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) == 0) {
        return false; // Return false if no matching user found
    } else {
        return mysqli_fetch_assoc($result); // Return the user data as an associative array
    }
}

}
?>
