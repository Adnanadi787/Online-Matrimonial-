<?php
$status = $_GET['bro'];
$looking = $_GET['brochure'];
$body = $_GET['fruit'];
$education = $_GET['education'];
$religion = $_GET['religion'];
$skin = $_GET['skin'];
$smoke = $_GET['smoke'];
$agemin = $_GET['agemin'];
$agemax = $_GET['agemax'];
$hmin = $_GET['hmin'];
$hmax = $_GET['hmax'];

echo $status;
echo $looking;
echo $body;
echo $education;
echo $religion;
echo $skin;
echo $smoke;
echo $agemin;
echo $agemax;
echo $hmin;
echo $hmax;

?>

<!doctype html>
<html>
	<head>
	</head>
	<body>
	
<?php include 'info-1.php' ; ?>

<?php
		$con= mysqli_connect('localhost','root','','online_matrimony');
  
  $conn = mysqli_connect($server_name, $mysql_username, $mysql_password, $db_name);
  

  
$sql = "SELECT * FROM `updateinfo_data` where `status` LIKE '%$searchresult%' 

or `looking` LIKE '%$searchresult%' or `body` LIKE '%$searchresult%' or `education` LIKE '%$searchresult%'; or `religion` LIKE '%$searchresult%'' or `skin` LIKE '%$searchresult%' or `smoke` LIKE '%$searchresult%' or `agemin` LIKE '%$searchresult%' or `agemax` LIKE '%$searchresult%' or `hmin` LIKE '%$searchresult%' or `hmax` LIKE '%$searchresult%' ";

 if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
            $PassIDToProfileInfo_data=$row['ID'];
        	echo "<a href='feature.php?ID_Set= $PassIDToprofileinfo_data'>";
			echo "<div class='row'>";
    				echo "<div class='column'>";

    				 if(($row['Pic'])!=""){
				echo '<img class="img"; src="data:images/jpeg;base64,' . base64_encode( $row['Pic'] ) . '" />';
    		        }else{
    		             echo '<img class="img" src="bride.jpeg"/>';
    		            
    		        }

    		        mysqli_free_result($result);
    } else{
        echo "No records matching .";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 

mysqli_close($conn);
?>


	</body>
</html>
