<?php

session_start();

class Login{
	public function add($email, $password){
		$newEmail = (object)[
			'email' => $email,
			'password' => $password
		];

		if($_SESSION['details'] === null){
			$_SESSION['details'] = array();
		}

		array_push($_SESSION['details'], $newEmail);
	}
}

$login = new Login();

if($_POST['action'] === 'add'){
	// add function
	$login->add($_POST['email'], $_POST['password'] );
}


header('Location: ./indextwo.php');