<?php
include('connect_db.php');
session_start();

if (isset($_GET['did'])) {
    $id = $_GET['did'];
    
    $sql = "DELETE FROM user WHERE id = $id";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Delete success');</script>";
        echo "<script>window.location.href='profilepengguna.php'</script>";
    } else {
        echo "<script>alert('Delete failed');</script>";
        echo "<script>window.location.href='profilepengguna.php'</script>";
    }

}
?>