<div class="navbar">
    <nav>

        <?php
        if ($session->is_signed_in()) {
            $user = User::find_by_id($session->user_id);
            $user_image = $user->user_image;
        }
        ?>

        <a class="home-icon"><div href="profile.php" style="background-image: url(<?php echo $user_image; ?>)" class="avatar"></div></a>

        <!-- IF ON THIS PAGE -->
        <a <?php echo false ? "" : "href=\"index.php\"" ?> class="home-icon" ><?php echo true ? "<i class=\"fas fa-fw fa-book\"></i>" : "<i class=\"fas fa-fw fa-book-open\"></i>" ?></a>

        <?php
        /**
         * This is the mood-face that will show when someone is logged
         * onto the page, nothing will show if not. The mood face is
         * currently the average of the days the user have input'ed.
         */
        if ($session->is_signed_in()) :

            $rounded_avg = 0;

            $user_id = $session->user_id;
            $avg = Page::find_mood_average($user_id);
            $rounded_avg = round($avg);
            // DEPENDING ON MOOD LEVEL ROUNDED TO CLOSEST
            if ($rounded_avg == 5) {
            $mood = " -very-happy";
            } else if ($rounded_avg == 4) {
                $mood = " -happy";
            } else if ($rounded_avg == 3 || $rounded_avg == 0) {
                $mood = " -neutral";
            } else if ($rounded_avg == 2) {
                $mood = " -sad";
            } else if ($rounded_avg == 1) {
                $mood = " -very-sad";
            } else {$mood = "";}
            ?>

        <!-- IF ON THIS PAGE -->
        <a href="mood.php" class="mood-icon <?php echo $mood?>" >
            <!-- DEPENDING ON MOOD LEVEL ROUNDED TO CLOSEST -->
            <?php
            if ($rounded_avg == 5) {
                echo "<i class=\"fas fa-fw fa-laugh-beam\"></i>";
            } else if ($rounded_avg == 4) {
                echo "<i class=\"fas fa-fw fa-smile\"></i>";
            } else if ($rounded_avg == 3 || $rounded_avg == 0) {
                echo "<i class=\"fas fa-fw fa-meh\"></i>";
            } else if ($rounded_avg == 2) {
                echo "<i class=\"fas fa-fw fa-frown\"></i>";
            } else if ($rounded_avg == 1) {
                echo "<i class=\"fas fa-fw fa-sad-cry\"></i>";
            }
            ?>
            </a>

        <?php endif;?>

</nav>

<div id="sign" class="sign">
    <!-- IF SIGNED IN -->
    <?php echo $session->is_signed_in() ? "<a href='logout.php'><div class=\"sign-icon\"><i class=\"fas fa-fw fa-sign-out-alt\"></i></a>" : "<div id=\"SIGN_IN\" class=\"sign-icon\"><i class=\"fas fa-fw fa-sign-in-alt\"></i>" ?></div>
</div>
</div>


