<?php
//http://php.net/manual/en/function.session-start.php
	session_start ();
	if(session_status() == PHP_SESSION_ACTIVE){
		if(empty($_SESSION['username'])) {
			echo '<a href="../src/content1.php">Go to Page Content 1 </a>';
		}	
		if(empty($_SESSION['username']) == FALSE) {
			$_SESSION['visits'] = $_SESSION['visits'] + 1;
			echo "Hello ". $_SESSION['username'] . "<br>";
			echo "You have visited this website " . $_SESSION['visits'] . " Times<br>";			
		}
	}
?>

<a href="logout.php">Logout</a>
 