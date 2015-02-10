<?php
//http://php.net/manual/en/function.session-start.php
	session_start ();
	if(session_status() == PHP_SESSION_ACTIVE){
		if(empty($_POST['username'])) {
			echo "A user-name must be entered<br>";
			echo '<a href= "http://web.engr.oregonstate.edu/~bauerbr/src/login.php">Return to Login Page </a> <br>';
			
		}
		$username1 = $_POST['username'];
		
		if(empty($_POST['username']) == FALSE) {
			$_SESSION['username'] = $_POST['username'];
			$_SESSION['visits'] = $_SESSION['visits'] + 1;
			echo "Hello $username1 <br>";
			echo "You have visited this website " . $_SESSION['visits'] . " Times<br>";
			echo '<a href="http://web.engr.oregonstate.edu/~bauerbr/src/content2.php">Go to Page Content 2 </a><br>';
			echo '<a href= "logout.php">Logout</a>';
		}
}

?>
