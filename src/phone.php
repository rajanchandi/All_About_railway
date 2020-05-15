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
</div>
<div><br><br><br><br><br>
</div>
<div id="nav1"; >
<h3>Services</h3>

      <li><a href="information.php">Information</a></li>
      <li><a href="phone.php">Phone Service</a></li>
      <li><a href="login.php">How to Login</a></li>

</div>

<div id="main">
<div id="next1" style="text-align:center">
<a><h2 style="margin-top:5px">Phone Sevice:</h2></div></a><br><br>
<h2> 
<li>you can also reserve the seat from your phone.</li><br>
<li>Now you check the status of train and seat from your phone.</li><br>
</div>

<div id="main2">


<div class="w3-content w3-section" style="max-width:1000px">
    <a href="https://www.heromotocorp.com"><img class="mySlides" src="hero.jpg" style="width:100%"></a>
    <a href="https://www.ford.com"><img class="mySlides" src="ford.jpg" style="width:100%"></a>
    <a href="https://www.huwaei.com">  <img class="mySlides" src="huw.jpg" style="width:100%"></a>
   
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

</div>
<div class="footer1">
<footer style="width: 100%; margin-left: 300px; margin-right: 400px;margin-top:180px">
<h3>Copyright @ All About Train| Powered by: NTES</h3>
<a href="https://www.google.com"> <img src="google.png"></a>
  <a href="https://www.twitter.com"><img src="twitter.png"></a>
  <a href="https://www.facebook.com"> <img src="facebook.png"></a>
  </footer> 
</div>

</body>
</html>