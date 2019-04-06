<?php 

/**
 * This is the logout page, that calls on the logout()
 * method in the Session class to clean the $session
 * properties, and then redirects the user to login.php.
 */

require_once("includes/init.php");

$session->logout();

redirect("index.php");

?>


