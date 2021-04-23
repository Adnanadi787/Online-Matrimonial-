<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="info.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
<title>Personal Information</title>

	</head>
	<body>

<!-- NAVBAR -->
<?php include 'menu.php' ; ?>

<section style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(images/1st.jpg);
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
            <h2 style="color:#daed07">Add your Information HERE</h2>
            <a href="update.php" target="_blank" class="btn btn-primary" style="width: 180px; height: 60px; font-size: 28px">Add</a>
          </div>
          </section>

<div class="jumbotron">
  <h1>Hey! I am Azharul Islam</h1>
  <h3 style="color:#e81c3a; ">Here Is My Information. Waiting for you...</h3>
</div>



<!-- Info Start -->
<div class="resume">
   <div class="resume_left">

    <!-- pic -->
     <div class="resume_profile">
       <img src="images/az1.jpg" alt="profile_pic">
     </div>
     <div class="resume_content">

<!-- info -->
<div class="resume_item resume_info">
         <div class="title">
           <p class="bold">Azharul Islam</p>
           <p class="regular">Future Engineer</p>
         </div>
         <ul>
           <li>
             <div class="icon">
               <i class="fas fa-map-signs"></i>
             </div>
             <div class="data">
               Malibag, Dhaka <br /> Bangladesh
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fas fa-mobile-alt"></i>
             </div>
             <div class="data">
               01680075817
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fas fa-envelope"></i>
             </div>
             <div class="data">
               adnanadi787@gmail.com
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fab fa-weebly"></i>
             </div>
             <div class="data">
               www.stephen.com
             </div>
           </li>
         </ul>
</div>

<!-- social -->
<div class="resume_item resume_social">
         <div class="title">
           <p class="bold">Social</p>
         </div>
         <ul>
           <li>
             <div class="icon">
               <i class="fab fa-facebook-square"></i>
             </div>
             <div class="data">
               <p class="semi-bold">Facebook</p>
               <p>facebook.com/adnan.crx/</p>
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fab fa-instagram"></i>
             </div>
             <div class="data">
               <p class="semi-bold">Instagram</p>
               <p>instagram.com/adnanadi222</p>
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fab fa-youtube"></i>
             </div>
             <div class="data">
               <p class="semi-bold">Youtube</p>
               <p>youtube.com/channel/adnan/</p>
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fab fa-linkedin"></i>
             </div>
             <div class="data">
               <p class="semi-bold">Linkedin</p>
               <p>adnanadi@linkedin</p>
             </div>
           </li>
         </ul>
</div>


     </div>
  </div>

  <div class="resume_right">

<!-- about me -->
<div class="resume_item resume_about">
        <div class="title">
           <p class="bold">About me</p>
         </div>
        <p>Father’s Name: Md. Ashraf Ali</p> <br>
<p> Mother’s Name: Mrs. Nasreen Akter</p> <br>
<p> Date of Birth: 30/06/1996</p><br>
 <p>Nationality: Bangladeshi</p><br>
<p> Gender: Male</p><br>
<p>Religion: Islam</p>
</div>

<!--Education-->
<div class="resume_item resume_work">
        <div class="title">
           <p class="bold">EDUCATION</p>
         </div>
        <ul>
            <li>
                <div class="date">2016 - 2020</div> 
                <div class="info">
                     <p class="semi-bold">East West University</p> 
                  <p>Bachelor of Science in Computer Science and
                  Engineering </p>
                </div>
            </li>
            <li>
              <div class="date">2012 - 2013</div>
              <div class="info">
                     <p class="semi-bold">Dhaka City College</p> 
                  <p>Background: Science (GPA:5.00)</p>
                </div>
            </li>
            <li>
              <div class="date">2001 - 2011</div>
              <div class="info">
                     <p class="semi-bold">Ideal School and College</p> 
                  <p>Background: Science (GPA:5.00)</p>
                </div>
            </li>
        </ul>
</div>

<div class="resume_item resume_hobby">
      <div class="title">
           <p class="bold">Hobby</p>
         </div>
       <ul>
         <li><i class="fas fa-book-reader"></i></li>
         <li><i class="fas fa-gamepad"></i></li>
         <li><i class="fas fa-music"></i></li>
         <li><i class="far fa-futbol"></i></li>
      </ul>
</div>

  </div>
</div>

<!-- info table -->
<!--<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>-->
<section class="my-5">
  <div class="py=5">
    <h2 class="text-center;text-left;"> Details Info </h2>
  </div>
<button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
  Partner preference
</button>

<button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
  View Photos
</button>

<button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus
sagittis lacus vel augue laoreet rutrum faucibus.">
  Contact with Me
</button>


</section>



<?php include 'footer.php' ; ?>
	</body>
	</html>