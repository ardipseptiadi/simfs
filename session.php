<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "");
// Selecting Database
$db = mysql_select_db("db_simfs", $connection);
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysql_query("select nama, username, email from ss_user where username='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['username'];
$nama = $row['nama'];
$email = $row['email'];
if(!isset($login_session)){
  mysql_close($connection); // Closing Connection
  header('Location: login.php'); // Redirecting To Home Page
}
?>
