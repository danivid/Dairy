<div class="home">
<!--echo '<a href="pag" class="new-page"><i class="fas fa-fw fa-plus"></i></a>';-->
<?php
	$date_month_check = 0;								// Used to check if the month is the same as the month for the page previous.
	$check = 0;											// Used as a rushed try to fix this page. 
	$pages = Page::find_pages($session->user_id);
	foreach ($pages as $page) : 
		
		$page_mood = $page->mood;						// Collects the mood that the person were in when they posted the page.
		$page_text = substr($page->text,0, 50);
		$date=date('d M Y', strtotime($page->date));	// Gather's the date used when seperating messages
		$date_month=date('M', strtotime($page->date));  // Gather's the month used when seperating messages by day
		
		if ($date_month_check !== $date_month) {

			if ($check != 0) {	// If $check is not zero, then echo a end to page-previous-grid.
				echo '</div>';
			}
			$check = 1;	// To make sure that the /div goes trough next time.

			echo '<hr data-content="' . $date_month .'">';
			echo '<div class="page-preview-grid">';
			
		}

		switch ($page_mood) {
			case 1:
				$mood = " -very-sad";
				break;
			case 2:
				$mood = " -sad";
				break;
			case 3:
				$mood = " -neutral";
				break;
			case 4:
				$mood = " -happy";
				break;
			case 5:
				$mood = " -very-happy";
				break;
			
			default:
				$mood = " -neutral";
				break;
		}

		// decide if the year have changed.
		// Decide if the month have changed.


		echo '<a href="page" class="page-preview">';
		echo '<div class="page-preview-header ' . $mood . '">';
		echo '<span>' . $date . '</span>';

		if ($page_mood == 5) {
			echo "<i class=\"fas fa-fw fa-laugh-beam\"></i>";
		} else if ($page_mood == 4) {
			echo "<i class=\"fas fa-fw fa-smile\"></i>";
		} else if ($page_mood == 3) {
			echo "<i class=\"fas fa-fw fa-meh\"></i>";
		} else if ($page_mood == 2) {
			echo "<i class=\"fas fa-fw fa-frown\"></i>";
		} else if ($page_mood == 1) {
			echo "<i class=\"fas fa-fw fa-sad-cry\"></i>";
		}

		echo '</div>';
		echo '<div class="page-preview-body">'. $page_text . '...' . '</div>';
		echo '</a>';


		$date_month_check = $date_month;
		?>




	<?php endforeach; ?>

</div>



