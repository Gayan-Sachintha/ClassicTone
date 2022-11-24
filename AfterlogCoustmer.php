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
<title>Buyfresh Online</title>
<link rel="stylesheet" type="text/css" href="Home.css" />
	<style>
	body
	{
		background-image: url("Images/adminafterlogbg.jpg");
		background-repeat: round;
		background-attachment: fixed;
		width:auto;
		height: auto;
			
	}
</style>
</head>

<body>
<table width="649" height="471" border="0" align="center">
  <tbody>
    <tr>
      <td width="643" height="71"><table width="638" height="60" border="0">
        <tbody>
          <tr>
             <td width="338" align="center"><img src="Images/Untitled-1.png" width="261" height="66" alt=""/></td>
            <td width="290">
<ul>
  <li><a href="Home.php">Home</a></li>
  <li><a href="Store face Coustmer.php">Store</a></li>
  <li><a href="Profile.php">Profile</a></li>
  <li><a href="cart.php">Cart</a></li>
</ul>
			  </td>
          </tr>
        </tbody>
      </table></td>
    </tr>
    <tr>
      <td height="409"><iframe src="Images/introvide/Untitled ‑ Made with FlexClip.mp4" width="1502" height="389" autoplay></iframe>&nbsp;</td>
    </tr>
    
  </tbody>
</table>
<form>
		<div class="image_content">
	  <img class="mySlides" src="Images/contactbg/one.jpg" width="1502" height="300" alt=""/>
	  <img class="mySlides" src="Images/contactbg/two.jpg" width="1502" height="300" alt=""/>
	  <img class="mySlides" src="Images/contactbg/three.jpg" width="1502" height="300" alt=""/>
	  <img class="mySlides" src="Images/contactbg/four.jpg" width="1502" height="300" alt=""/>
  </div>
	
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
  setTimeout(carousel, 1000); 
}
</script>	
	</form>
</body>
</html>
