<?php
 
session_start();
if (!isset($_SESSION['username']))
{
	header('location:index.html');
}

?>
<!doctype html>
<html>
	<head>
	</head>
	<body>

	 
	 <?php include 'info-1.php' ; ?>

	</body>
</html>
