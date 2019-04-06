<?php 

/**
 * The class that creates and stores user-objects, is used
 * whenever something need's to use or store information
 * about the user that is logged in or other users.
 */

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

	/**
	 * Verifiy that the user lies in the database with this username and password, used with login
	 * but can also be used other places.
	 *
	 * @param $username is the username that the user have written into the form
	 * @param $password is the password that the user have written into the form.
	 * @return true if the user is in the database, false if not.
	*/
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



	/**
	 * Verifiserer at brukeren ligger i databasen, brukes ved registrering og kan brukes andre steder.
	 * Legger feilmeldinger inn i error_array, error arrayet sendes så tilbake. 
     * Hvis det er felmeldinger vil ikke brukeren bli laget, og feilmeldingene vil vises.
     *
	 * @param $username
	 * @param $password
	 * @param $password_check
	 * @return the error_array, empty if all is well.
	 */
	public static function verify_new_user($username, $password) {

		global $database;

		$error_array       = array();
		$username          = $database->escape_string($username);
		$password          = $database->escape_string($password);

		$username          = strip_tags($username);
		$password          = strip_tags($password);

		$sql = "SELECT * FROM " . self::$db_table . " WHERE ";
		$sql .= "username = '{$username}' ";
		$sql .= "AND password = '{$password}' ";
		$sql .= "LIMIT 1";

		$the_result_array = self::find_by_query($sql);

		if (!empty($the_result_array)) {
			array_push($error_array, "The username is already in use, pick something else!");
		}
		
		if((strlen($password) > 50) || strlen($password) < 5) {  
			array_push($error_array, "Your password must be between 5 and 50 characters");
		}

		$password = password_hash($password, PASSWORD_DEFAULT);

		if (empty($error_array)) {
			
			$user = new user();														

			$user->username    = $username;
			$user->password    = $password;
			$user->user_image  = "assets/img/profile/1.png";

			$user->create();

		} 

		return $error_array;

	}

}

?>