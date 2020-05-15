<!DOCTYPE html>
<html>
<head>
<title>login page</title>
<style type="text/css">
body{
background-image: url(wood.jpg);
background-size:cover;
}

.a{
font-weight:bolder;
padding-left:10px;
padding-top:10px;
}




.aa{
width: 300px;
height: 260px;
background-color: rgba(0,0,0,0.5);
margin:0 auto;
margin-top: 100px;
padding-top:10px;
padding-left:50px;
border-radius:15px;
color:white;
font-weight: bolder;
box-shadow: inset -4px -4px rgba(0,0,0,0.5);
font-size:18px;
}
.aa input[type="text"]{
width:200px;
height:30px;
border:0;
border-radius:5px;
padding-left:5px;
}
.aa input[type="password"]{
width:200px;
height:30px;
border:0;
border-radius:5px;
padding-left:5px;
}
.aa input[type="submitt"]{
width:100px;
height:35px;
border:0;
boder-radius:5px;
background-color:skyblue;
font-weight:bolder;
padding-left:5px;
}

</style>
<body>
<div class="a">
<a href="ram.php"><h2>Back To Home</h2><img src="home.jpg" style="margin-left:60px;margin-top:-20px"></a>
</div>
<div class="aa">
<h2>Login</h2>
<form action = "user.php" method = "post">
 
 <input type="text" name="userid" placeholder="Please enter user name..."><br><br>
<input type="password" name="password" placeholder="Please enter Password..."><br><br>
  <input type="submit" name="submit" value="submit">
</form>
</div>

<div >
<h2><a href="account.php" style="margin-left:470px;padding:30px">Create Account!!</a><h2>
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
<?php

$severname = "localhost";
$username = "root";
$password = "";
$dbname = "rajan";

$conn = mysqli_connect($severname, $username, $password, $dbname);

if ($conn->connect_error){
die("connectioin failed: " . $conn->connect_error);
}
if(isset($_POST['submit'])){
$userid = $_POST['userid'];
$password = $_POST['password'];

$sql = "SELECT * FROM user WHERE userid='$userid' AND password='$password'";
$result = $conn->query($sql);

 if (!$row = $result->fetch_assoc()){
	echo "<script>alert(' your username password incoorect')</script>";
}
else {
	echo "<script>window.open('reserve.php', '_self')</script>";
}

}
	?>