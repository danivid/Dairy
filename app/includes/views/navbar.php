<div class="navbar">
    <nav>
        <!-- IF ON THIS PAGE -->
        <a <?php echo false ? "" : "href=\"index.php\"" ?> class="home-icon" ><?php echo true ? "<i class=\"fas fa-fw fa-book\"></i>" : "<i class=\"fas fa-fw fa-book-open\"></i>" ?></a>

        <!-- IF ON THIS PAGE -->
        <a <?php echo false ? "" : "href=\"mood.php\"" ?>
            class="mood-icon
            <?php
                // DEPENDING ON MOOD LEVEL ROUNDED TO CLOSEST
                if (true) {
                    echo ' -very-happy';
                } else if (true) {
                    echo ' -happy';
                } else if (true) {
                    echo ' -neutral';
                } else if (true) {
                    echo ' -sad';
                } else if (true) {
                    echo ' -very-sad';
                }
            ?>
            "
        >
            <!-- DEPENDING ON MOOD LEVEL ROUNDED TO CLOSEST -->
            <?php
                if (true) {
                    echo "<i class=\"fas fa-fw fa-laugh-beam\"></i>";
                } else if (true) {
                    echo "<i class=\"fas fa-fw fa-smile\"></i>";
                } else if (true) {
                    echo "<i class=\"fas fa-fw fa-meh\"></i>";
                } else if (true) {
                    echo "<i class=\"fas fa-fw fa-frown\"></i>";
                } else if (true) {
                    echo "<i class=\"fas fa-fw fa-sad-cry\"></i>";
                }
            ?>
        </a>
    </nav>

    <div id="sign" class="sign">
        <!-- IF SIGNED IN -->

        <div class="sign-icon modal"><?php echo $session->is_signed_in() ? "<i class=\"fas fa-fw fa-sign-in-alt\"></i>" : "<i class=\"fas fa-fw fa-sign-out-alt\"></i>" ?></div>
  
    </div>
</div>


