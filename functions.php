<?php
session_start();

function logged_in() {
		return (isset($_SESSION['email'])) ? true : false;
	}
	
	function logged_in_redirect() {
		if (logged_in() == true) {
			header('Location: welcome.php');
			exit();
		}
	}
	
	// Redirects users to index page if they are not logged in.
	function protect_page() {
		if (logged_in() == false) {
			header('Location: Index.php');
			exit();
		}
	}
	
?>