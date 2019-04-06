<?php 

require_once("includes/init.php"); 

$blob = $_POST['editor_content'];

echo $blob;

$page = new page();
$page->user_id = 1;
$page->text = $blob;
$page->date = date("Y/m/d");

$page->create();

redirect("index.php");

?>