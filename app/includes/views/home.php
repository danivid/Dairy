<?php
	$pages = Page::find_pages(1);

	foreach ($pages as $page) :

		echo $page->text;

	endforeach;
?>

<div class="home">

	<hr data-content="Oktober">

	<div class="page-preview-grid">

		<a href="pag" class="new-page"><i class="fas fa-fw fa-plus"></i></a>

		<a href="page" class="page-preview">
			<div class="page-preview-header -neutral">
				<span>29 Oct 2019</span>
				<i class="fas fa-fw fa-meh"></i>
			</div>
			<div class="page-preview-body">The 50 first characters + "..."</div>
		</a>

		<a href="page" class="page-preview">
			<div class="page-preview-header -sad">
				<span>28 Oct 2019</span>
				<i class="fas fa-fw fa-frown"></i>
			</div>
			<div class="page-preview-body">The 50 first characters + "..."</div>
		</a>

		<a href="page" class="page-preview">
			<div class="page-preview-header -very-happy">
				<span>27 Oct 2019</span>
				<i class="fas fa-fw fa-laugh-beam"></i>
			</div>
			<div class="page-preview-body">The 50 first characters + "..."</div>
		</a>

		<a href="page" class="page-preview">
			<div class="page-preview-header -very-sad">
				<span>26 Oct 2019</span>
				<i class="fas fa-fw fa-sad-cry"></i>
			</div>
			<div class="page-preview-body">The 50 first characters + "..."</div>
		</a>

		<a href="page" class="page-preview">
			<div class="page-preview-header -happy">
				<span>25 Oct 2019</span>
				<i class="fas fa-fw fa-smile"></i>
			</div>
			<div class="page-preview-body">The 50 first characters + "..."</div>
		</a>

	</div>

</div>
