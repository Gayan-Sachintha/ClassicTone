<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Register Buyfresh</title>
<link rel="stylesheet" type="text/css" href="Register.css" />
<style>
	body
	{
		background-image: url("Images/registerbg.jpg");
		background-repeat: round;
		background-attachment: fixed;
		width:auto;
		height: auto;
			
	}
</style>	
</head>
<body>
<form method="post" action="Register.php">
<table width="677" height="537" border="0" align="center">
  <tbody>
    <tr>
      <td width="671" height="78"><table width="598" height="74" border="0" align="center">
  <tbody>
    <tr>
      <td width="292" align="center" ><img src="Images/Untitled-1.png" width="261" height="66" alt=""/></td>
      <td width="296">
<ul>
  <li><a href="Home.php">Home</a></li>
  <li><a href="Store face.php">Store</a></li>
  <li><a href="Profile.php">Profile</a></li>
  <li><a href="cart.php">Cart</a></li>
</ul></td>
    </tr>
  </tbody>
</table>
</td>
    </tr>
    <tr>
     
		   <td width="275" height="236" align="center">
		<div class="image_content">
		  <img class="mySlides" src="Images/registerimages/2.jpg" width="275" height="236" alt=""/>
		  <img class="mySlides" src="Images/registerimages/4.jpg" width="275" height="236" alt=""/>
		  <img class="mySlides" src="Images/registerimages/6.jpg" width="275" height="236" alt=""/>
		  <img class="mySlides" src="Images/registerimages/7.jpg" width="275" height="236" alt=""/>
		</div> </td>
	<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 500); 
}
</script>	  
		  </p>
        <table width="439" height="392" border="0" align="center">
          <tbody>
          <tr>
            <td align="center" height="38" colspan="2" bgcolor="f0aa49" ><h1 style="font-size: 36px; font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif;"><span style="color: #FD0004">Create</span> Profile</h1></td>
          </tr>
          <tr>
            <td width="228" height="66" align="center" style="color: #FCFCFC; font-size: 24px; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif;">Full Name</td>
            <td width="207"><input type="text" name="txtFullName" id="txtFullName" /></td>
          </tr>
          <tr>
            <td height="66" align="center" style="color: #FFFFFF; font-size: 24px; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif;">Email Address</td>
            <td><input type="text" name="txtEmail" id="txtEmail" /></td>
          </tr>
          <tr>
            <td height="44" align="center" style="color: #FFFFFF; font-size: 24px; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif;">Contact number</td>
           <td><input type="text" name="txtnum" id="txtnum" /></td>
          </tr>
          <tr>
            <td height="66" align="center" style="color: #FFFFFF; font-size: 24px; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif;">Password</td>
            <td><input type="password" name="txtPassword" id="txtPassword" class="datalist" /></td>
          </tr>
          <tr>
            <td height="42" align="center" style="color: #FFFFFF; font-size: 24px; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif;">Confirm Password</td>
            <td><input type="password" name="txtCPassword" id="txtCPassword" class="datalist" /></td>
          </tr>
        </tbody>
</table></td>
    </tr>
  </tbody>
</table>
	
	<form class="btnsetting">
	  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <button type="submit" class="button1" name="btnSubmit" id="btnSubmit">Register </button>
	<button type="submit" class="button2" name="btnSubmit" id="btnSubmit">Cancel</button>
	</form>
</form>	

</body>
<?php
	if(isset($_POST["btnSubmit"]))  //check whether button is clicked or not
	{
		
		$fullname = $_POST["txtFullName"];  //get values
		$email = $_POST["txtEmail"];
		$contact = $_POST["txtnum"];
		$password = $_POST["txtPassword"];
		$utype="customer";
		$con = mysqli_connect("localhost:3308","root","","buyfresh");
					
				if(!$con) // check db connection
				{
					die("Cannot connect our DB Seaver");
				}
		  $sql = "INSERT INTO `user` (`Fullname`, `Email`, `Cnumber`,`Password`,`utype`) VALUES ('$fullname', '$email', '$contact','$password','$utype');";

	
		if( mysqli_query($con,$sql))
		{
			
			header('Location:login.php');

		}
	
	}
	
?>	
</html>