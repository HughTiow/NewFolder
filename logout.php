<?php
$connection = mysql_connect("localhost", "root", "tiow0403");
session_start();

if(session_destroy()) // Destroying All Sessions
{
header("Location: ogs.php"); // Redirecting To Home Page
}

?>