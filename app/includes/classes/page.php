<?php 

class Page extends Db_object{

	protected static $db_table = "page"; 

	protected static $db_table_fields = array('user_id', 'text', 'mood', 'date');
	public $user_id;
	public $text;
	public $mood;
	public $date;

	public static function find_pages($user_id) {

		global $database;
		$room_id = $database->escape_string($room_id);

		$sql = "SELECT * FROM " . self::$db_table . " WHERE ";
		$sql .= "user_id = '{$user_id}' ";
		$sql .= "ORDER BY id";

		return static::find_by_query($sql);

	}

} // End of Page-class

?>