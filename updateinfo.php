<?php

$con= mysqli_connect('localhost','root','','online_matrimony');

if($con){
	echo "Connection Successfull";
}
else{ 
echo "No connection"; 
} 

mysqli_select_db($con, 'online_matrimony'); 

$status = $_POST['bro']; 
$look = $_POST['brochure']; 
$body = $_POST['fruit'];
$education = $_POST['education']; 
$religion = $_POST['religion']; 
$skin = $_POST ['skin'];
$smoke = $_POST ['smoke'];
$a_min = $_POST ['agemin'];
$a_max = $_POST ['agemax'];
$hmin = $_POST ['hmin'];
$hmax = $_POST ['hmax'];

$query = "INSERT INTO `profileonfo_data`(`id`,`id_from_reg`,`status`, `look`, `body`,`education`, `religion`, `skin`, `smoke`, `a_min`, `a_max`, `hmin`, `hmax`) VALUES ('$status', '$look', '$body','$education', '$religion', '$skin', '$smoke', '$a_min', '$a_max',
 '$hmin', '$hmax',) "; 

echo "$query"; 

mysqli_query($con, $query); 

header('location:update.php');
?>
