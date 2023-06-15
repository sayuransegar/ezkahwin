<?php
include('connect_db.php');
session_start();

if ($_POST['id'] == $_SESSION['id']) {
    $id = $_POST['id'];
    $email = $_POST['email'];
    $name = $_POST['name'];

    $query = "UPDATE staff SET email='$email', name='$name' WHERE id=$id";

    if (mysqli_query($conn, $query)) {
        echo "Record updated successfully";
        header("refresh:3; url=home.php");
      } else {
        echo "Error updating record: " . mysqli_error($conn);
        header("refresh:3; url=profilepengguna.php");
      }
}
?>