<?php
include('connect_db.php');
session_start();

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $email = $_POST['email'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $phonenum = $_POST['phonenum'];
    $password = $_POST['password'];
    // $address = $_POST['address'];

    $query = "UPDATE user SET email='$email', name='$name', gender='$gender', phonenum='$phonenum' ";

    if(!empty($password)){
        $query .= " , password = '$password' ";
    }

    $query .= " WHERE id=$id";

    if (mysqli_query($conn, $query)) {
        // echo "Record updated successfully";
        // // header("refresh:3; url=home.php");
        // header("refresh:3; url=editpengguna.php?eid=" . $id);
        echo "<script>alert('Update success');</script>";
        echo "<script>window.location.href='profilepengguna.php'</script>";
      } else {
        // echo "Error updating record: " . mysqli_error($conn);
        // header("refresh:3; url=editpengguna.php?eid=" . $id);
        echo "<script>alert('Update failed');</script>";
        echo "<script>window.location.href='profilepengguna.php'</script>";
      }
}
?>