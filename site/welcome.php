<?php
session_start();
echo "Welcome ".$_SESSION['User'];

echo '<a href="login.php">Logout</a>'
?>