<?php 

include("app/includes/views/header.php"); 

//if ($session->is_signed_in()) {header("Location: index.php");}

if (isset($_POST['submit'])) {

	$username = trim($_POST['username']); 
	$password = trim($_POST['password']);

	$user_found = User::verify_user($username, $password);

	if ($user_found) {
		$session->login($user_found);
		header("Location: index.php");

	} else {
		echo "error";
	}
} else {
	$username = "";
	$password = "";

}


?>

	<form method="post">

		<div>
			<h1>Login</h1>
		</div>

		<input type="username" name="username" id="username" placeholder="Username">
		<label for="username">Username</label>

		<input type="password" name="password" id="password" placeholder="Password">
		<label for="password">Password</label>

		<input type="submit" name="submit" id="submit" class="button-contained" value="submit">

	</form>



<?php include("app/includes/views/footer.php"); ?>