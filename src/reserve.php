<!DOCTYPE HTML>
<html>
<head>
<title>RAILWAY ENQUIRY & RESERVATION</title>
<link rel="stylesheet" type="text/css" href='style.css'>
<link rel="stylesheet" type="text/css" href='../resource/font.css'> 
</head>

<style>
div.absolute {
   
position: absolute;
    top: 50px;
    right: 450px;
    width: 600px;
    height: 500px;

font-size: 40px; 
font-weight: bold;
  padding: 10px;


}

.mySlides {display:none;}
<style>
.enquiry{
background:rgba(0,0,0,0.2);
width:1000px;
height:900px;
border-radius:15px 0 15px 0;
margin:-100px 100px 0;
color:#333;
padding:50px;
box-sizing:border-box;
}
.enquiry a{
	padding:50px;
}
.enquiry1{
background:rgba(0,0,0,0.8);
width:800px;
height:60px;
border-radius:25px 25px 25px 25px;
margin:50px 200px 0;
color:#333;
padding:2px;
box-sizing:border-box;
}

.enquiry1 a{
	color:white;
}


.mySlides {display:none;}
</div>
</style>

</div>
</style>
<body>

<a href="ram.php"><img style="margin-left: 1170px;margin-top:35px;" src="home.jpg"></a>

<font color="	#6C208F"><div class="absolute"><u>ALL ABOUT RAILWAY</u></div></font>
<h6 class="logo">logo here</h6><br><br>

<div id="nav">
<br>
  
<div id="nav_wrapper"><br>
<ul>
    <li><a href="ram.php">HOME</a></li>
       <li><a href="#">TRAIN ENQUIRY</a>

      <ul>
       
       <li><a href="train.php">Tain Code</a></li>
       <li><a href="train.php">Tain Name</a></li>
</ul></li>
       <li><a href="reservation.php">RESERVATION</a></li>
       <li><a href="#">STATION DETAIL</a>
<ul>
       <li><a href="station.php">Station Code</a></li>
</ul>
</li>
       <li><a href="#">LOGIN CORNER</a>
      <ul>
       <li><a href="log.php">Admin</a></li>
       <li><a href="user.php">User</a></li>
</ul>
</li>     
       <li><a href="map.php">RAILWAY MAP</a></li>
       <li><a href="about.php">ABOUT</a></li>
</ul>
   </div>
</div>
<div>
<center><h2>HELLO USER</h2></center>


<div class="enquiry1">
<a><h2><center>Reservation Form:</center></h2></a>
</div>
<div class="enquiry">
<form method="post" action="enquiry.php">
<br><br><br><br><br><br><table >
<tr>
<td>
<b>NAME:</td><td><input type="text" name="name" style="font-size:10pt;height:30px; width:400px;margin-left:250px"><br><br>
</td>
</tr>
<tr>
<td><b>ADDRESS:</td><td><input type="text" name="addd" style="font-size:10pt;height:30px; width:400px;margin-left:250px"><br><br>
</td></tr>
<td>
<b>MOBILE NUMBER:</td><td><input type="text" name="mob" style="font-size:10pt;height:30px; width:400px;margin-left:250px" ><br><br>
</td></tr>
<tr>
<td><b>GENDER:</td>
<td>
<select scroll="yes" margin-right="500px"  name="gender" style="font-size:10pt;height:30px;width:400px;margin-left:250px"><br><br>
<option value="female">FEMALE</option>
<option value="male">MALE</option>
</select>
</td>
</tr>
<tr>
<td><b>PINCODE:</td><td><input type="text" name="pin" style="font-size:10px;height:30px; width:400px;margin-left:250px;margin-top:20px" ><br><br>
</td></tr>

<td><b>Source</td><td><input type="text" name="state" margin-right="500px" style="font-size:10pt;height:30px;width:400px;margin-left:250px;margin-top:20px"><br><br>
</td></tr><br><br>
<tr>
<td><b>Destination</td><td><input type="text" name="course" margin-right="500px"  style="font-size:10pt;height:30px;width:400px;margin-left:250px;margin-top:20px"><br><br>
</td></tr>
<tr><td><b>Select Class</b></td><td> <select name="after1" style="font-size:10pt;height:30px;width:400px;margin-left:250px;margin-top:20px"> <br><br>
<option value="B Tech">Sleeper</option>
<option value="BCA">First AC</option>
<option value="BA">Second AC</option>
<option value="BBA">Third AC</option>
<option value="Hotel Management">FIrst Class</option>
<option value="none">Second Seating</option>
</select>
</td></tr>
</table>
</form>

</div>






<div class="footer1">
<footer style="margin-top: 20px; width: 100%; margin-left: 300px; margin-right: 400px">
<h3>Copyright @ All About Train| Powered by: NTES</h3>
<a href="https://www.google.com"> <img src="google.png"></a>
  <a href="https://www.twitter.com"><img src="twitter.png"></a>
  <a href="https://www.facebook.com"> <img src="facebook.png"></a>
  </footer> 
</div>
</body>
</html>
