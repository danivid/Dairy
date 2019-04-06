<div class="navbar">
    <nav>
        <!-- IF ON THIS PAGE -->
        <a <?php echo false ? "" : "href=\"index.php\"" ?> class="home-icon" ><?php echo true ? "<i class=\"fas fa-fw fa-book\"></i>" : "<i class=\"fas fa-fw fa-book-open\"></i>" ?></a>

        <?php 
         $rounded_avg = 0;
        if ($session->is_signed_in()) {
            $user_id = $session->user_id;
            $avg = Page::find_mood_average(1);
            $rounded_avg = round($avg);
            echo $rounded_avg;
        } ?>

        <!-- IF ON THIS PAGE -->
        <a <?php echo false ? "" : "href=\"mood.php\"" ?>
            class="mood-icon
            <?php
                // DEPENDING ON MOOD LEVEL ROUNDED TO CLOSEST
                if ($rounded_avg = 5) {
                    echo " -very-happy";
                } else if ($rounded_avg =4) {
                    echo " -happy";
                } else if ($rounded_avg = 3 || $rounded_avg = 0) {
                    echo " -neutral";
                } else if ($rounded_avg = 2) {
                    echo " -sad";
                } else if ($rounded_avg = 1) {
                    echo " -very-sad";
                }
            ?>
            "
        >
            <!-- DEPENDING ON MOOD LEVEL ROUNDED TO CLOSEST -->
            <?php
                if ($rounded_avg == 5) {
                    echo "<i class=\"fas fa-fw fa-laugh-beam\"></i>";
                } else if ($rounded_avg ==4) {
                    echo "<i class=\"fas fa-fw fa-smile\"></i>";
                } else if ($rounded_avg ==3) {
                    echo "<i class=\"fas fa-fw fa-meh\"></i>";
                } else if ($rounded_avg == 2) {
                    echo "<i class=\"fas fa-fw fa-frown\"></i>";
                } else if ($rounded_avg == 1) {
                    echo "<i class=\"fas fa-fw fa-sad-cry\"></i>";
                }
            ?>
        </a>
    </nav>

    <div id="sign" class="sign">
        <!-- IF SIGNED IN -->
        <?php echo $session->is_signed_in() ? "<div id=\"SIGN_IN\" class=\"sign-icon\"><i class=\"fas fa-fw fa-sign-in-alt\"></i>" : "<div class=\"sign-icon\"><i class=\"fas fa-fw fa-sign-out-alt\"></i>" ?></div>
    </div>
</div>


