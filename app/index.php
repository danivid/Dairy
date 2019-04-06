<?php require_once("includes/init.php"); 

if (isset($_POST['submit'])) {

    $username = trim($_POST['username']); 
    $password = trim($_POST['password']);

    $user_found = User::verify_user($username, $password);

    if ($user_found) {
        $session->login($user_found);
        redirect("index.php");

    } else {
        echo "error";
    }
} else {
    $username = "";
    $password = "";

}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include("includes/helpers/head.php") ?>
<body>
    <main>
        <?php include("includes/views/loginmodal.php") ?>

        <?php include("includes/views/navbar.php") ?>

        <!-- IF LOGGED IN -->
        <?php $session->is_signed_in() ? include("includes/views/home.php") : include("includes/views/welcome.php") ?>

        <!-- IF LOGGED IN -->
        <?php // true && include("app/includes/views/filter.php") ?>

        <?php //include("includes/views/page.php"); ?>

    <main>

    <?php include("includes/views/footer.php") ?>
</body>
</html>



