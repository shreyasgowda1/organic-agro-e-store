<?php


session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: ownerlogin.php"); // Redirecting To Home Page
}
?>