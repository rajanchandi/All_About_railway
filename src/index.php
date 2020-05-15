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
<font color="DARKBLUE"><div class="absolute"><u>ALL ABOUT RAILWAY</u></div></font>
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
<marquee  scrollamount="20"><h3><font color="blue">...we add the additional service now.......to know about services, click on any service option.</font></h3></marquee>
</div><br>
<div id="nav1">
<h3>Services</h3>

      <li><a href="information.php">Information</a></li>
      <li><a href="phone.php">Phone Service</a></li>
      <li><a href="login.php">How to Login</a></li>

</div>
<div id="main1">


<div class="w3-content w3-section" style="max-width:1000px">
  <img class="mySlides" src="1.jpg" style="width:100%">
  <img class="mySlides" src="2.jpg" style="width:100%">
    <img class="mySlides" src="3.jpg" style="width:100%">
   <img class="mySlides" src="4.jpg" style="width:100%">

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
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
<br><br></div>
<div id="transbox">
<div id="next" style="text-align:center";>
<a><h2 style="margin-top:5px" >News Feeds:</h2></a>
<br>
<marquee direction="up" scrollamount="4" style="max-width:900px;height:300px; margin-top: 4px;margin-left: 5px">
<h2><li>now you reserve the seats online.</li><br>
<li>you also check the status online.please click the train enquiry for more   information.</li><br>
<li>Now we can accept the online payment transaction to make the digital   india</li><br>
<li>please follows the rules and policy while booking the tickets.</li><br>
<li>you can check the atatus of seat with PNR number.</li><br>
<li>the PNR number is available on your ticket.</li><br>
<li>you can also check the PNR number in your account.</li><br>
<li>you can create account into login corner</li></h2>
</marquee>
</div>


</div>


<div  style="max-width:200px; margin-top: -390px;margin-left: 20px">
  <h2>Visit This:</h2>
<marquee direction="up" scrollamount="10"><a href="https://www.samsung.com"><img src="s.jpg"></a> <a href="http://www.venushomeappliances.com/"><img src="v.jpg"></a></marquee>
</div>
<div class="footer1">
<footer style="margin-top: 140px; width: 100%; margin-left: 300px; margin-right: 400px">
<h3>Copyright @ All About Train| Powered by: NTES</h3>
<a href="https://www.google.com"> <img src="google.png"></a>
  <a href="https://www.twitter.com"><img src="twitter.png"></a>
  <a href="https://www.facebook.com"> <img src="facebook.png"></a>
  </footer> 
</div>
</body>

</html>