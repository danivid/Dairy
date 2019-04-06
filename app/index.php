<?php require_once("includes/init.php"); ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include("includes/helpers/head.php") ?>
<body>
    <main>
        <div class="modal -show">
            <div class="modal-content">
                <form action="post" class="form">
                    <div class="close">
                        <div class="close-icon"></div>
                    </div>

                    <div>
                        <label for="username">Username</label>
                        <input type="text" id="username">
                    </div>

                    <div>
                        <label for="password">Password</label>
                        <input type="text" id="password">
                    </div>

                    <div class="form-buttons">
                        <button class="button -clear">Register</button>
                        <button>Sign in</button>
                    </div>
                </form>
            </div>
        </div>

        <?php include("includes/views/navbar.php") ?>

        <!-- IF LOGGED IN -->
        <?php // true ? include("app/includes/views/home.php") : include("app/includes/views/welcome.php") ?>

        <!-- IF LOGGED IN -->
        <?php // true && include("app/includes/views/filter.php") ?>
    </main>

    <?php include("includes/views/footer.php") ?>
</body>
</html>



