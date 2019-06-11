<?php
// Initialize the session
//session_start();
 
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();
 
session_unset();
header("location: login.php");
exit;
?>