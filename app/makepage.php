<?php require_once("includes/init.php");?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include("includes/helpers/head.php") ?>
<body>
    <main>
        <?php include("includes/views/loginmodal.php") ?>

        <?php include("includes/views/navbar.php") ?>

        <!-- IF LOGGED IN -->
        <?php $session->is_signed_in() && include("includes/views/page.php") ?>

        <!-- IF LOGGED IN -->
        <?php // true && include("app/includes/views/filter.php") ?>

    <main>
</body>
</html>