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
<title>Update Info</title>

	</head>
	<body>
	  
	  <!-- NAVBAR -->

<?php include 'menu.php' ; ?>

<form action="updateinfo.php" method="post" style="width:930px; text-align:center; color: #ededf5;background-color: 
#030317;" >
        <fieldset style="text-align:center;">
            <h1 style="text-align:center; background-color: #222f3e; color: #f1c40f">Create Your Profile</h1>
            <h3 style="text-align:center;">Choose Your Partner </h3>
            <table width="500px">


<tr>

    <tr>
                    <td>
                        <br>
                        <label for="who">Marital Status</label>
                    </td>
                    <td>
                        <br>
                        <input type="radio" name="bro" value="Single" >Single
                        <input type="radio" name="bro" value="Married">Married
                        <input type="radio" name="bro" value="Widowed">Widowed
                        <input type="radio" name="bro" value="Divorced">Divorced
                    </td>
                </tr>

     <tr>
                    <td>
                        <br>
                        <label for="brochure">Looking For</label>
                    </td>
                    <td>
                        <br>
                        <input type="radio" name="brochure" value="Bride">Bride
                        <input type="radio" name="brochure" value="Groom">Groom
                    </td>
                </tr>           
                    <td>
                        <label for="fruit">Body Type</label>
                    </td>
                    <td>
                        <br>
                        <input type="radio"  name="fruit" value="Fat">Fat <br>
                        <input type="radio"  name="fruit"value="Slim">Slim <br>
                        <input type="radio"  name="fruit"value="Medium">Medium <br>
                        <input type="radio"  name="fruit"value="Any">Any <br>
                    </td>
</tr>


<tr>
        <td>
                        <label for="fruit">Education</label>
                    </td>

                    <td>
                        <br>
                        <select name="education">
                            <option value="SSC" >SSC </option>
                            <option value="HSC">HSC</option>
                            <option value="Graduate">Graduate</option>
                            <option value="Univarsity">University Student</option>
                            <option value="Masters">Masters</option>
                        </select>  
                        <br>
                    </td>
</tr>


<tr>
                    <td>
                        <label for="religion">religion</label>
                    </td>
                    <td>
                        <br>
                        <select name= "religion"; multiple size="3">
                            <option value="Muslim">Muslim</option>
                            <option value="Hindu">Hindu</option>
                            <option value="christian">Cristian</option>
                            <option value="Buddhist">Buddhist</option>
                            <option value="Ihudi">Ihudi</option>
                        </select>  
                        <br>
                    </td>
</tr>



                <tr>
                    <td>
                        <br>
                        <label for="brochure">Skin Complexion</label>
                    </td>
                    <td>
                        <br>
                          <select name= "skin"; >      
                        <option type="checkbox"  value="Fair">Fair</option>
                        <option type="checkbox"  value="Dark">Dark</option>
                    </select>
                    </td>
                </tr>

<tr>
                    <td>
                        <br>
                        <label for="brochure">Smoke</label>
                    </td>
                    <td>
                        <br>
                        <select name= "smoke"; >
                        <option type="checkbox"  value="Yes">Yes</option>
                        <option type="checkbox"  value="No">No</option>
                    </select>
                    </td>
                </tr> <br>


<tr>
        <td><label for="age">Age preference?</label></td>
                  <td>  <div class="col-sm-5 input-group1">
        <input class="form-control has-dark-background" name="agemin" value="min" id="slider-name" placeholder="18" type="text" required="" />
      </div>
      
      <div class="col-sm-5 input-group1">
        <input class="form-control has-dark-background" name="agemax" value="max" id="slider-name" placeholder="40" type="text" required="" />
      </div><br></td>
  </tr>
<tr>
      <td>
        <label for="Height">Height preference?</label>
    </td>
                    <td><div class="col-sm-5 input-group1">
        <input class="form-control has-dark-background" name="hmin"value="min"  id="slider-name" placeholder="4.5" type="text" required="" />
      </div>
      
      <div class="col-sm-5 input-group1">
        <input class="form-control has-dark-background" name="hmax" value="max" id="slider-name" placeholder="6.5" type="text" required="" />
      </div><br>
  </td>
 </tr>     

      <tr>
                   <td colspan="2" style="text-align:center;">
                    <br>

                       <input type="submit" value="Submit" style="background-color: #222f3e; color:#f1c40f; width: 80px; height: 30px;">
                       <input type="reset" value="reset" style="background-color: #222f3e; color:#f1c40f; width: 80px; height: 30px;">
                   </td>
                </tr>
            </table>
        </fieldset>
    </form><br>

    <?php include 'footer.php' ; ?>




</body>
</html>
