<?php session_start();
if(!isset($_SESSION["txtuname"]))
{
	header("location:login.php");
}
?>

<head>
<title>Profile</title>
<link rel="stylesheet" type="text/css" href="login.css" />
	<style>
	body
	{
		background-image: url("Images/profile bg.jpg");
		background-repeat: round;
		background-attachment: fixed;
		width:auto;
		height: auto;
			
	}
</style>	
	
</head>

<body>
	<p>
	  <?php
	$con = mysqli_connect("localhost:3308","root","","buyfresh");
					if(!$con)
					{
						die ("we are facing a technical issue");
					}
				  	
	$sql ="SELECT * FROM `user` WHERE `Email` = '".$_SESSION["txtuname"]."'"; 
	
	$result=mysqli_query($con,$sql);
	
	if(mysqli_num_rows($result)>0)
	{
		$row =mysqli_fetch_assoc($result);
	
		
	?>
</p>
<div class="box">	
<p>&nbsp;</p>
<table width="258" height="212" border="0" align="center">
  <tbody>
    <tr>
      <td width="211" align="center"><img src="Images/pro.png" width="216" height="277" alt=""/></td>
    </tr>
  </tbody>
</table>
<table width="597" height="342" align="center">
	<tr>
		<td colspan="2" bgcolor=rgba(0,0,0,0.55)><h1 align="center" style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; color: #3B5C28;"><span style="color: #000000">My</span> <span style="color: #FF0000">Profile</span></h1></td>
  </tr>
	
	<tr>
	<td width="167" style="font-size: 24px; font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif;">Full Name</td>
	<td width="206"><input type="text" name="txtFullName" id="txtFullName" value="<?php echo $row["Fullname"];?>" readonly></td>
	</tr>
	<tr>
	<td width="167" style="font-size: 24px; font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif;">Email</td>
	<td width="206"><input type="text" name="txtEmail" id="txtEmail" value="<?php echo $row["Email"];?>" readonly></td>
	</tr>
	<tr>
	<td width="167" style="font-size: 24px; font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif;">Contact Number</td>
	<td width="206"><input type="text" name="txtContact" id="txtContact" value="<?php echo $row["Cnumber"];?>" readonly></td>
	</tr>
	
</table>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<table width="200" border="0" align="center">
  <tbody>
    <tr>
      <td width="227" align="center"><a href="Home.php"><button type="submit" name="btnsubmit" id="subbtn">Back</button></a></td>
    </tr>
<div>	  
  </tbody>
</table>

	<?php
		}
	mysqli_close($con);
		 ?>
</body>
</html>