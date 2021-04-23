<?php 

session_start();


$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'online_matrimony');

$user = $_POST['user'];

$password = $_POST['password'];

$s = "select * from registerinfo_data where user = '$user' &&  
password = '$password' ";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ( $num== 1){
	$_SESSION['username'] = $user;
	header('location:afterlog.php');
}
else{
   header('location:register.html');
}


 ?>