
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Buyfresh Online</title>
<link rel="stylesheet" type="text/css" href="Home.css" />
	<link rel="stylesheet" type="text/css" href="phpfonts.css" />	
<style>
	body
	{
		background-image: url("Images/adminhomebg.jpg");
		background-repeat: round;
		background-attachment: fixed;
		width:auto;
		height: auto;
			
	}
</style>	
	
</head>

<body>
<table width="1022" height="547" border="0" align="center">
  <tbody>
    <tr>
      <td height="71"><table width="637" height="60" border="0">
        <tbody>
          <tr>
            <td width="338" align="center" ><img src="Images/Untitled-1.png" width="261" height="85" alt=""/></td>
            <td width="289">
<ul>
  <li><a href="Home.php">Home</a></li>
  <li><a href="Store face.php">Store</a></li>
  <li><a href="Profile.php">Profile</a></li>
  <li><a href="cart.php">Cart</a></li>
</ul>
			  </td>
          </tr>
        </tbody>
      </table></td>
    </tr>
    <tr>
      <td height="362">
		  <div class="image_content">
		  <img class="mySlides" src="Images/adminhomeSlides/1.png" width="1100" height="600" alt=""/>
		  <img class="mySlides" src="Images/adminhomeSlides/2.png" width="1100" height="600" alt=""/>
		  <img class="mySlides" src="Images/adminhomeSlides/3.png" width="1100" height="600" alt=""/>
		  <img class="mySlides" src="Images/adminhomeSlides/4.png" width="1100" height="600" alt=""/>
		</div>
		  
		  <div class="center">
  <div class="btn_section" align="center">
    <button class="arrows" name="arrows" id="arrows" onclick="plusDivs(-1)">❮ Prev</button>
    <button class="arrows" name="arrows" id="arrows" onclick="plusDivs(1)">Next ❯</button>
  </div>
			  <div class="btnalign" align="center">
			  <button class="numb"  name="numb" id="numb" onclick="currentDiv(1)">1</button> 
  <button class="numb"  name="numb" id="numb" onclick="currentDiv(2)">2</button> 
  <button class="numb"  name="numb" id="numb" onclick="currentDiv(3)">3</button> 
  <button class="numb"  name="numb" id="numb" onclick="currentDiv(4)">4</button> 
			  </div>	  
</div>
		  
	  </td>
	<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" red", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " red";
}
	</script>	
    </tr>
    <tr>
		
      <td width="1016" height="95" align="center" bgcolor="rgba(0,0,0,0.2)" style="font-size: 30px"><span style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif"><span style="color: #FF0004">Exsisitng</span> <span style="color: #FFFFFF">Members</span></span> <span style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif"><a href="login.php" style="color: #3C6F72">login</a>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #FF0004">New</span> <span style="color: #FFFFFF">Member</span></span> <span style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif"><a href="register.php" style="color: #266873">Join now </a></span></td>
	
    </tr>

  </tbody>
	 
</table>
<table width="1217" border="0">
  <tbody>
    <tr>
      <td width="218" height="62">&nbsp;</td>
      <td width="103"><a href="https://www.facebook.com/gayan.gamage.779"><img src="Images/logos/facebook.png" width="48" height="48" alt=""/></a></td>
      <td width="114"><img src="Images/logos/R (10).png" width="48" height="48" alt=""/></td>
	  <td width="114"><a href = "https://www.linkedin.com/feed/"><img src="Images/logos/linkedIn.png" width="48" height="48" alt=""/><></td>
      <td width="329">&nbsp;</td>
      <td width="68">&nbsp;</td>
      <td width="68">&nbsp;</td>
      <td width="68">&nbsp;</td>
      <td width="68">&nbsp;</td>
      <td width="68">&nbsp;</td>
      <td width="71">&nbsp;</td>
    </tr>
  </tbody>
</table>

</body>
</html>
