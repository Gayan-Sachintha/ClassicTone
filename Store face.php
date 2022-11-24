<?php session_start();
if(!isset($_SESSION["txtuname"]))
{
	header("location:login.php");
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Store Buyfresh</title>
<link rel="stylesheet" type="text/css" href="Store face.css"/>
<style>
	body
	{
		background-image: url("Images/admin_catagory.jpg");
		background-repeat: round;
		background-attachment: fixed;
		width:auto;
		height: auto;
			
	}
</style>	
	
</head>

<body>
<form>
  <img src="Images/Untitled-1.png" width="415" height="131" alt=""/> <span style="text-align: justify; color: #FFFFFF;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size: 36px; font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif;"><span style="color: #FB0004"><strong>Admin</strong></span><strong> Catagory View</strong></span></span>
</form>	
<form id="form1" name="form1" >
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="935" border="0" align="center">
    <tbody>
      <tr>
	    <td><div class="pic"> <a href= "viweStore.php"><img src="Images/img1.jpg.jpg" width="235" height="225"></a>
         <p style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; color: #FFFFFF; font-size: 28px;">Keyboards</p>
	    </div></td>
        <td><div class="pic">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href= "viweStoreL.php"><img src="Images/img2.jpg" width="235" height="225"></a>
         <p style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; color: #FFFFFF; font-size: 28px;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Guitars</p>
	    </div></td>
      </tr>
      <tr>
        <td><div class="pic"> <a href= "viweStoreM.php"><img src="Images/img3.jpg" width="235" height="225"></a>
         <p style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; color: #FFFFFF; font-size: 28px;">Volins</p>
	    </div></td>
        <td><div class="pic"> <a href= "viweStoreB.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="Images/img4.jpg" width="235" height="225"></a>
         <p style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; color: #FFFFFF; font-size: 28px;" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Other Equments</p>
	    </div></td>
      </tr>
    </tbody>
  </table>
</form>
</body>
</html>
