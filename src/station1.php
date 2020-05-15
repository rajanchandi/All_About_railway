<?php
$severname = "localhost";
$username = "root";
$password = "";
$dbname = "rajan";

$conn = mysqli_connect($severname, $username, $password, $dbname);

if ($conn->connect_error){
die("connectioin failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM station";
$records = $conn->query($sql);

?>

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
</div>
</style>
<body>

<marquee bgcolor="rgba(0,0,0,0.1)"><font color="blue">WELCOME  TO  INDIAN  RAILWAY.....Here!! you can check all about indian Railway and reserve the seat. </font></marquee>
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
</div><br><br>

<div class="aa">
<h2><u>Enter The Station</u></h2><br><br><br>
<form action = "station1.php" method = "post">
 
 Source: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="source" placeholder="Please enter the source..."><br><br><br><br>
Destination: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="destination" placeholder="Please enter the destination..." ><br><br><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; <input type="submit" name="submit" value="Submit">
</form>
</div>
<br><br><br><div class="footer1">
<footer style="width: 100%; margin-left: 300px; margin-right: 400px">
<h3>Copyright @ All About Train| Powered by: NTES</h3>
<a href="https://www.google.com"> <img src="google.png"></a>
  <a href="https://www.twitter.com"><img src="twitter.png"></a>
  <a href="https://www.facebook.com"> <img src="facebook.png"></a>
  </footer> 
</div>

</body>
</html>


