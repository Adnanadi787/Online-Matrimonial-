<?php

$con= mysqli_connect('localhost','root');

if($con){
	echo "Connection Successfull";
}
else{ 
echo "No connection"; 
} 

mysqli_select_db($con, 'online_matrimony'); 

$user = $_POST['user']; 
$email = $_POST['email']; 
$password = $_POST['password'];
$mobile = $_POST['mobile']; 
$dob = $_POST['dob']; 
$gender = $_POST ['gender'];
$pic = $_POST ['pic'];

$query = " insert into registerinfo_data (user, email, password, mobile, dob, gender) 
values ('$user', '$email', '$password','$mobile', '$dob', '$gender' $'pic') "; 

echo "$query"; 

mysqli_query($con, $query); 

header('location:register.html');
?>
