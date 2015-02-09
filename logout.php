<?php
session_start();
session_destroy();
echo "You have been logged out!<br>";
echo '<a href="../src/login.php">Return to Login Page </a>';

?>