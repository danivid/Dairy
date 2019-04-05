<?php 

class User extends Db_object{

	protected static $db_table = "users";

	protected static $db_table_fields = array('username', 'password', 'first_name', 'middle_name', 'last_name', 'user_image');

	public $id;
	public $username;
	public $password;
	public $first_name;
	public $middle_name;
	public $last_name;
	public $user_image;

	public static function verify_user($username, $password) {

		global $database;
		$username = $database->escape_string($username);
		$password = $database->escape_string($password);

		$sql = "SELECT * FROM " . self::$db_table . " WHERE ";
		$sql .= "username = '{$username}' ";
		$sql .= "LIMIT 1";

		$the_result_array = self::find_by_query($sql);

		if (!empty($the_result_array)) {

			$hashed_password = $the_result_array[0]->password; 

			if (password_verify($password, $hashed_password)) {

				$user_id = $the_result_array[0]->id; 
				$user = new User;
				$user = User::find_by_id($user_id);
				$user->signed_in = 1;
				$user->update();

				return  array_shift($the_result_array);
			} 

			return false;
		} else {

			return false;
		}	
	}

	public function get_user_image() {

		return "app/" . "assets/" . "img/" . "profile/" . "default/" . $this->user_image;
	}

	public static function verify_new_user($username, $password, $password_check) {

		global $database;

		$error_array       = array();
		$username          = $database->escape_string($username);
		$password          = $database->escape_string($password);
		$password_check    = $database->escape_string($password_check);

		$username          = strip_tags($username);
		$password          = strip_tags($password);
		$password_check    = strip_tags($password_check);

		$sql = "SELECT * FROM " . self::$db_table . " WHERE ";
		$sql .= "username = '{$username}' ";
		$sql .= "AND password = '{$password}' ";
		$sql .= "LIMIT 1";

		$the_result_array = self::find_by_query($sql);

		if (!empty($the_result_array)) {
			array_push($error_array, "The username is already in use, pick something else!");
		}

		if($password != $password_check) { 
			array_push($error_array,  "Your passwords do not match");
		}
		
		if((strlen($password) > 50) || strlen($password) < 5) {  
			array_push($error_array, "Your password must be between 5 and 50 characters");
		}

		$password = password_hash($password, PASSWORD_DEFAULT);

		if (empty($error_array)) {
			
			$user = new user();														

			$user->username    = $username;
			$user->password    = $password;
			$user->user_image  = "1.png";

			$user->create();

		} 

		return $error_array;

	}

}

?>