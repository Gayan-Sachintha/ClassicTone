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
<title>viewStorel</title>
<link rel="stylesheet" type="text/css" href="login.css" />
	<style>
	body
	{
		background-image: url("Images/AdminVolin.jpg");
		background-repeat: round;
		background-attachment: fixed;
		width:auto;
		height: auto;
			
	}
</style>	
	
</head>

<body>
<table width="641" height="256" border="0" align="center">
  <tr>
    <td width="342" align="center"><img src="Images/Untitled-1.png" width="261" height="66" alt=""/></td>
    <td width="289"><div>
<ul>
  <li><a href="Afterlog.php">Home</a></li>
  <li><a href="Store face.php">Store</a></li>
  <li><a href="Profile.php">Profile</a></li>
  <li><a href="cart.php">Cart</a></li>
</ul>
</div></td>

  </tr>
	
  <tr>
	  
    <td height="198" colspan="2" align="center">
      <p>&nbsp;</p>
      <table width="477" height="223" border="0">
      <tbody>
        <tr>
          <td width="471" height="219" align="center"><img src="Images/Adminvolin2.jpg" width="175" height="211" alt=""/>
			  <img src="Images/AdminVolin1.jpg" width="165" height="211" alt=""/></td>
        </tr>
      </tbody>
    </table>
      <table width="262" height="42" border="0">
        <tbody>
          <tr>
            <td><h1 align="center" style="color: #FFFFFF; font-family: Consolas, 'Andale Mono', 'Lucida Console', 'Lucida Sans Typewriter', Monaco, 'Courier New', monospace; font-size: 40px;"> Volin
</h1></td>
          </tr>
        </tbody>
      </table>
	  <table width="518" height="56" align="center">
      <tr>
        <td width="521">
            <table width="512">
				<?php
				
				$con = mysqli_connect("localhost:3308","root","","buyfresh");
					
				if(!$con)
				{
					die("DB Seaver Error");
				}
				 
				$sql= "SELECT * FROM `productm`" ;
				
				$result = (mysqli_query($con,$sql));
				
				if(mysqli_num_rows($result)>0)
				{
					while($row = mysqli_fetch_assoc($result))
					{	
						
				echo "
					
              <tr>
				<td width='195' style='background-color:rgba(225,225,225,0.55)'><div class='imgcontainer'><img src='".$row["Path"]."' width='195' height='150'></div></td>
				<td width='159' align='center' style='color:white;font-size:25px;background-color:rgba(0,0,0,0.55)'> ".$row["Name"]."</td>
				<td width='159' align='center' style='color:white;font-size:25px;background-color:rgba(0,0,0,0.55)'> ".$row["Price"]."</td>
                <td width='46'><a href='UpdatestoreM.php?id=".$row["id"]."'><img src='images/edit2.png' alt='' width='32' height='34' />Edit</a></td>
                <td width='45'><a href='DeleteStoreM.php?id=".$row["id"]."'><img src='images/delete.jpg' alt='' width='32' height='34' />Delete </a></td>
             
              </tr> " ;
					}
				}
				?>
			
            </table>
          </div>
          <div class="container" style="background-color:#f1f1f1"></div></td>
      </tr>
    </table>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<a href="AddstoreM.php">
		<button type="submit" name="btnsubmit" id="subbtn" >Addstore</button>
	    </a>
	</td>
  </tr>
</table>
</body>
</html>