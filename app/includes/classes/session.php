<?php

class Session {

	private $signed_in = false;
	public $user_id;
	public $message;
	public $current_game;

	function __construct() {

		session_start();
		$this->check_the_login();

	}

	public function is_signed_in() {

		return $this->signed_in;

	}

	public function get_user_id() {

		return $this->user_id;

	}

	public function login($user) {

		if ($user) {

			$this->user_id = $_SESSION['user_id'] = $user->id;
			$this->signed_in = true;

		}
	}

	public function logout() {

		// Changes here the signed_in of the user to 0.
		$user = new User();
		$user = User::find_by_id($_SESSION['user_id']);
		$user->signed_in = 0;
		$user->update();

		unset($_SESSION['user_id']);
		unset($this->user_id);
		$this->signed_in = false;

	}

	private function check_the_login() {

		if (isset($_SESSION['user_id'])) {
			
			$this->user_id = $_SESSION['user_id']; 
			$this->signed_in = true;

		} else {

			unset($this->user_id);
			$this->signed_in = false;

		}

	}

} // End of the Session-class.

$session = new Session();


?>