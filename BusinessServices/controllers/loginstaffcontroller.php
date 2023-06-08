<?php 
include('connect_db.php'); 

if (isset($_POST['icnum']) and isset($_POST['password'])){
    $icnum = $_POST['icnum'];
    $password = $_POST['password'];
    
    $query = "SELECT * FROM `staff` WHERE icnum='$icnum' and password='$password'";
    
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    $count = mysqli_num_rows($result);
    
    if ($count == 1){
        header("Location: editprofile.html");
    }else{
        echo "Invalid login credentials";
        header("refresh:3; url=loginstaff.html");
    }
}
?>