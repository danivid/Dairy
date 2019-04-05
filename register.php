<?php 

require_once("app/includes/views/header.php");

//if ($session->is_signed_in()) {redirect("index.php");}

if (isset($_POST['submit'])) {
	 

	$username = trim($_POST['username']); 
	$password = trim($_POST['password']);
	$password_check = trim($_POST['password_check']);

	$error_array = User::verify_new_user($username, $password, $password_check);	

	if (empty($error_array)) {
		
		redirect("login.php");

	} else {

		$the_message = "Your information are incorrect.";
	}

} else {

		$username       = "";
		$password       = "";
		$password_check = "";
		$the_message    = "";
	}

?>

<h4><?php echo $the_message; ?></h4>
	
<form id="login-id" action="" method="post">
	
<div class="">
	<label>Username</label>
	<input type="text" name="username" value="<?php echo htmlentities($username); ?>" >

</div>

<div class="">
	<label>Password</label>
	<input type="password" name="password" value="<?php echo htmlentities($password); ?>">
	
</div>

<div class="">
	<label>Password_Check</label>
	<input type="password" name="password_check" value="<?php echo htmlentities($password_check); ?>">
	
</div>

<?php 
if (!empty($error_array)) {
	foreach ($error_array as $error_message) {
		echo $error_message . "<br>";

	}
}
?>

<div class="">
<input type="submit" name="submit" value="Submit">

</div>

</form>




<?php include("app/includes/views/footer.php"); ?>