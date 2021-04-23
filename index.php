<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/register.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
<title>Matrimony</title>
	</head>
	<body>
	  
	  <!-- NAVBAR -->

<?php include 'menu.php' ; ?>

<!-- Carosoul -->
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/1st.jpg" alt="Los Angeles" width="100%" height="10%">
    </div>
    <div class="carousel-item">
      <img src="images/n1.jpg" alt="Chicago" width="100%" height="100%">
    </div>
    <div class="carousel-item">
      <img src="images/3rd.jpg" alt="New York" width="100%" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<!----  register    ----->
<section style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(images/fix.jpg);
background-size: cover;
background-position: center;
color: #fff;
background-attachment: fixed;
text-align: center;
padding: 100px;
font-family: sans-serif;
font-weight: bold;
font-size: 38px;">
					<div class="container">
						<p>YOU and ME together and forever!</p>
						<h4 style="color:#daed07">To get your Life Partner Register from HERE</h4>
						<a href="register.html" target="_blank" class="btn btn-primary" style="width: 180px; height: 60px; font-size: 28px">Register</a>
					</div>
				

<!-- about us -->

<section class="my-5">
	<div class="py=5">
		<h2 class="text-center"> About Us </h2>
	</div>
			<div class="container-fluid">
				<div class='row'>
					<div class="col-lg-6 col-md-6 col-12">
						<img src="images/abtpic.jpg" class="img-fluid about_img">
						
					</div>
					<div class="col-lg-6 col-md-6 col-12">
						<h2 class="display-4"> Here some Info</h2>
						<p class="py-3"> Welcome to Bestpartnermatrimony.com</p>
						<a href="about.php" class="btn btn-success"> check more</a>
					</div>
				</div>
			</div>
</section>	

<!-- Featured Profiles -->
		
		<section class="my-5">
	<div class="py=5">
		<h2 class="text-center"> Featured Profiles </h2>
	</div>
			<div class="container-fluid">
				<div class='row'>
<div class="col-lg-4 col-md-4 col-12">
						<div class="card" >
  <img class="card-img-top" src="images/patro4.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Azharul Islam</h4>
    <p class="card-text">Profile ID-1</p>
    <a href="profile1.php" class="btn btn-primary">See Profile</a>
  </div>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12">
	<div class="card" >
  <img class="card-img-top" src="images/patro2.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Mahir Kashaf</h4>
    <p class="card-text">Some example text.</p>
    <a href="profile2.php" class="btn btn-primary">See Profile</a>
  </div>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12">
						<div class="card" >
  <img class="card-img-top" src="images/patro1.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Hemel Tanjim</h4>
    <p class="card-text">Some example text.</p>
    <a href="profile3.php" class="btn btn-primary">See Profile</a>
  </div>
</div> 
</div>
</div>
</div> 
		</section>
<!-- gallery -->
<section class="my-5">
	<div class="py=5">
		<h2 class="text-center"> Gallery </h2>
	</div>
			<div class="container-fluid">
				<div class='row'>
					<div class="col-lg-4 col-md-4 col-12">
						<img src="images/5th.jpg" class="img-fluid pb-4">
					</div>
					<div class="col-lg-4 col-md-4 col-12">
						<img src="images/6th.jpg" class="img-fluid pb-4">
					</div>
					<div class="col-lg-4 col-md-4 col-12">
						<img src="images/7th.jpg" class="img-fluid pb-4">
					</div>
				</div>
			</div>	
</section>					
				
<!-- contact -->
<section class="my-5">
	<div class="py=5">
		<h2 class="text-center"> Any Query? </h2>
	</div>	
	<div class="w-50 m-auto">
		<form action="userinfo.php" method="post">
		<div class= "form-group">
			<label> Username </label>
			<input type="text" name="user" autocomplete="off" class="form-control">
		</div>	
	<div class= "form-group">
			<label> Email Id </label>
			<input type="text" name="email" autocomplete="off" class="form-control">
		</div>
	<div class= "form-group">
			<label> Mobile </label>
			<input type="text" name="mobile" autocomplete="off" class="form-control">
		<div class= "form-group">
			<label> Comments </label>
			<textarea class ="form-control" name="comments ">				 
			</textarea>
			
		</div>	
		<button type="submit" class="btn btn-success"> Submit </button>		
		</form>
		
	</div>

</section>

</section>
<!--  <footer>
	<p class="p-3 bg-dark text-white text-center">
@amatrimonialwebsite		
	</p>
</footer>   -->
<?php include 'footer.php' ; ?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	</body>
</html>
