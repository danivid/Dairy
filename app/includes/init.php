<?php 
defined('DS')            ? null : define('DS', DIRECTORY_SEPARATOR); 
defined('SITE_ROOT')     ? null : define('SITE_ROOT', DS . 'XAMPP'. DS . 'htdocs' . DS . 'Dairy');  
defined('INCLUDES_PATH') ? null : define('INCLUDES_PATH', SITE_ROOT . 'app' . DS . 'includes');  
defined('CLASSES_PATH')  ? null : define('CLASSES_PATH', INCLUDES_PATH . DS . 'classes' . DS); 
defined('PROCESS_PATH')  ? null : define('PROCESS_PATH', INCLUDES_PATH . DS . 'process' . DS); 

require_once("includes/helpers/database.php"); 
require_once("includes/helpers/functions.php"); 
require_once("includes/classes/db_object.php"); 
require_once("includes/classes/session.php");
require_once("includes/classes/user.php");       
?>