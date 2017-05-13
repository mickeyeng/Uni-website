<?php
  if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 



include 'db_handler.php';





$userid = $_POST['userid'];
$password = $_POST['password'];


$sql = "SELECT * FROM login WHERE userid='$userid' AND password='$password'";




$result = $conn->query($sql);


if (!$row = $result->fetch_assoc()) {
	echo "Your username or passowrd is incorrect";
} else {
	$_SESSION['id'] = $row['id'];
	header("Location: home.php");
}




//header("Location: loggedin.php");