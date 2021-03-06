<?php

if (isset($_POST['submit'])) {

	include_once 'dbh.inc.php';

	$first = mysqli_real_escape_string($conn, $_POST['first']);
	$last = mysqli_real_escape_string($conn, $_POST['last']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

	//Error handlers
	//Check for empty fields
	if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)) {
		header("Location: ../#?signup=empty");
		exit();
	}else{
		//Check if input characters are valid
		if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
			header("Location: ../#?signup=invalid");
			exit();
		}else {
			//Check if email is valid
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				header("Location: ../emailtaken.php?signup=emailtaken");
				exit();
			} else {
				$sql = "SELECT * FROM users WHERE user_uid='$uid'";
				$result = mysqli_query($conn, $sql);
				$resulCheck = mysqli_num_rows($result);

				if($resulCheck > 0) {
					header("Location: ../uidtaken.php?signup=usertaken");
					exit();
				} else {
					//Hashing the password
					$hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);
					//Insert the user into the database
					$sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES ('$first', '$last', '$email', '$uid', '$hashedpwd');";
					mysqli_query($conn, $sql);
					header("Location: ../signup.php?signup=Success");
					exit();

				}
			}
		}

	}

}else {
	header("Location: ../signup.php");
	exit();
}