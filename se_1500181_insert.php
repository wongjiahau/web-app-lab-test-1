<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
$formData = $_SESSION["formData"] or header('location: se_1500181_form.php');
$staffNo  = (int)$formData['StaffNumber']; 
$name     = $formData['Name'];
$email    = $formData['Email'];
$phone    = $formData['Phone'];

$conn  = mysqli_connect('localhost', 'username', 'password', 'uecs2094_ptest');
$query = "INSERT INTO se_1500181_staff(staffNo, name, email, phone) VALUES(?, ?, ?, ?);";
$stmt  = mysqli_prepare($conn, $query);
$stmt->bind_param('isss', $staffNo, $name, $email, $phone);
$stmt->execute();
if($error = mysqli_stmt_error($stmt)) {
   echo "<h1>ERROR: $error</h1><br/>"; 
   echo "<button onclick='window.history.back();'>Click here to retry.</button>";
   die;
}
echo "<h1>Data has been inserted successfully.</h1><br/>";
echo "<a href='se_1500181_form.php'>Click here to go back.</a>";
session_destroy();
