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
		background-image: url("Images/Customer_catagory.jpg");
		background-repeat: round;
		background-attachment: fixed;
		width:auto;
		height: auto;
			
	}
</style>		
	
</head>

<body>
<form>
	<img src="Images/Untitled-1.png" width="415" height="131" alt=""/> <span style="text-align: justify; color: #FFFFFF;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size: 36px; font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif;"><span style="color: #FB0004"><strong>Customer</strong></span><strong> Catagory View</strong></span></span>
</form>	
<form id="form1" name="form1" >
  <table width="1044" border="0" align="center">
    <tbody>
      <tr>
	    <td width="670">&nbsp;&nbsp;&nbsp;
	      <div class="pic"> <a href= "viweStoreCoustmer.php"><img src="Images/img1.jpg.jpg" width="235" height="225"></a>
	        <p style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 28px; color: #FFFFFF;">KeyBoards</p>
	    </div></td>
        <td width="364"><div class="pic"> <a href= "viweStoreLCoustmer.php"><img src="Images/img2.jpg" width="235" height="225"></a>
         <p style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 28px; color: #FFFFFF;">Guitars</p>
	    </div></td>
      </tr>
      <tr>
        <td><div class="pic"> <a href= "viweStoreMCoustmer.php"><img src="Images/img3.jpg" width="235" height="225"></a>
         <p style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 28px; color: #FFFFFF;">Volins</p>
	    </div></td>
        <td><div class="pic"> <a href= "viweStoreBCoustmer.php"><img src="Images/img4.jpg" width="235" height="225"></a>
         <p style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif" ><span style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; color: #FFFFFF; font-size: 28px;">Other Equments</span></p>
	    </div></td>
      </tr>
    </tbody>
  </table>
</form>
</body>
</html>
