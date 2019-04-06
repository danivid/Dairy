<?php

	$pages = Page::find_pages(1);     		

	foreach ($pages as $page) : 					

		echo $page->text;

	endforeach; 						



?>
