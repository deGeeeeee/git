<?php


	function checkLogin() {
		session_start();
		if(isset($_SESSION["user_id"])) {
			return $_SESSION["user_id"];
		}else {
			header("Location: login.html");
			exit();
		}
	}
	
	

?>