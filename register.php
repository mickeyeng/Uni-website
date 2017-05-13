<?php
  if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

include 'db_handler.php'; // needs this for it to work

$first = $_POST['first'];
$last = $_POST['last'];
$email = $_POST['email'];
$userid = $_POST['userid'];
$password = $_POST['password'];


// script to check if there is empty fields 
if (empty($first)) {
	header("Location: admin/int-add-user.php?error=empty");
	exit();
}
if (empty($last)) {
	header("Location: admin/int-add-user.php?error=empty");
	exit();
}
if (empty($email)) {
	header("Location: admin/int-add-user.php?error=empty");
	exit();
}
if (empty($userid)) {
	header("Location: admin/int-add-user.php?error=empty");
	exit();
}
if (empty($password)) {
	header("Location: admin/int-add-user.php?error=empty");
	exit();
}

$query_string = "INSERT INTO login (first, last, email, userid, password) VALUES ('" . $first . "','" . $last . "','" . $email . "','" . $userid . "','" . $password . "')";
$query = $query_string;
//echo $query;


//$result = $conn->query($query);


$row = $conn->query($query);

if (!$row) {
	// while ($row = $conn->fetch_assoc()) {
		echo "Your username or passowrd is incorrect";
	// }
} else {
	$_SESSION['id'] = $row['id'];
	header("Location: home.php");
}











