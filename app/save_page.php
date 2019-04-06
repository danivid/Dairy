<?php 

require_once("includes/init.php"); 

// Collects the blob of text that the user have written..
$blob = $_POST['editor_content'];

// Makes a new page and places it in the database.
$page = new page();
$page->user_id = 1;
$page->text = $blob;
$page->date = date("Y/m/d");

$page->create();

redirect("index.php");

?>