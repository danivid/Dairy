<?php 

/**
 * The page class holds the object class that controls the 
 * page-objects, the pages are where the user writes and
 * is stored in the database.
 */

class Page extends Db_object{

	protected static $db_table = "page"; 

	protected static $db_table_fields = array('user_id', 'text', 'mood', 'date');
	public $id;
	public $user_id;
	public $text;
	public $mood;
	public $date;

	/**
	 * This class finds all of the pages that the user have,
	 * and then places it in the object-array that awaits where
	 * it is called.
	 */
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
	 * a start-date and a end-date. Is not yet used.
	 */
	public static function find_mood_in_period($startdate, $enddate) {

		global $database;
		$usre_id = $database->escape_string($user_id);

		$sql = "SELECT AVG(mood) FROM " . self::$db_table . " WHERE ";
		$sql .= "date BETWEEN '{$startdate}' AND '{$enddate}'";

		return static::find_by_query($sql);

	}

	/**
	 * This method collects the average mood out of all the 
	 * pages and is used to color and choose the face in the 
	 * navbar.
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