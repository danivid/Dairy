<?php


	require_once("../init.php"); 


$username = trim($_POST['username']); 
$password = trim($_POST['password']);

$user_found = User::verify_user($username, $password);

if ($user_found) {
	$session->login($user_found);
	redirect("index.php");

} else {
	echo "error";
}



?>