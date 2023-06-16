<?php
session_start();

// Clear session data
session_unset();
session_destroy();

// Delete cookies
setcookie("user_data", "", time()-3600, "/");
// Add more setcookie() statements if you have other cookies to delete

unset($_COOKIE['user_data']);

// Redirect to the login page
header("Location: loginuser.php");
exit();
?>