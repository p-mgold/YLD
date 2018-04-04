<?php
	//Start session
	session_start();
	//check whether the session variable SESSION_U_ID is present or not
	if(!isset($_SESSION['u_id'])) || (trim($_SESSION['u_id']) == '') {
		header("location: index.php");
		exit();
	}
?>