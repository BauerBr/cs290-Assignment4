<?php
//http://php.net/manual/en/function.session-start.php
	session_start();
	if(session_status() == PHP_SESSION_ACTIVE){
		if(empty($_SESSION['username'])) {
			echo "A user-name must be entered<br>";
			echo 'http://web.engr.oregonstate.edu/~bauerbr/src/login.php"> Login Page </a>';
		}	
		if(empty($_SESSION['username']) == FALSE) {
			$_SESSION['visits'] = $_SESSION['visits'] + 1;
			echo "Hello ". $_SESSION['username'] . "<br>";
			echo "You have visited this website " . $_SESSION['visits'] . " Times<br>";	
			echo '<a href="logout.php">Logout</a>';	
		}
	}
?>


 