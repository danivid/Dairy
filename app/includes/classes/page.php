<?php 

/**
 * The page class
 *
 */

class Page extends Db_object{

	protected static $db_table = "page"; 

	protected static $db_table_fields = array('user_id', 'text', 'mood', 'date');
	public $id;
	public $user_id;
	public $text;
	public $mood;
	public $date;

	public static function find_pages($user_id) {

		global $database;
		$user_id = $database->escape_string($user_id);

		$sql = "SELECT * FROM " . self::$db_table . " WHERE ";
		$sql .= "user_id = '{$user_id}' ";
		$sql .= "ORDER BY date DESC";

		return static::find_by_query($sql);

	}

	/**
	 * The method that collects the average in mood between
	 * a start-date and a end-date.
	 */
	public static function find_mood_in_period($startdate, $enddate) {

		global $database;
		$usre_id = $database->escape_string($user_id);

		$sql = "SELECT AVG(mood) FROM " . self::$db_table . " WHERE ";
		$sql .= "date BETWEEN '{$startdate}' AND '{$enddate}'";

		return static::find_by_query($sql);

	}

	/**
	 * The method that collects the average in mood between
	 * a start-date and a end-date.
	 */
	public static function find_mood_average($user_id) {

		global $database;
		$user_id = $database->escape_string($user_id);

		$sql = "SELECT AVG(mood) FROM " . self::$db_table . " WHERE ";
		$sql .= "user_id ='{$user_id}'";
		$sql .= " LIMIT 1";

		$result = $database->query($sql);

		if ($row = $result->fetch_assoc()) {
			$average_score = implode(", ", $row);
		}
		return $average_score;

	}

} // End of Page-class

?>