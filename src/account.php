<!DOCTYPE html>
<html>
<head>
<title>login page</title>
<link rel="stylesheet" type="text/css" href='style.css'>
<body>
<div class="a">
<a href="ram.php"><h2>Back To Home</h2><img src="home.jpg" style="margin-left:60px;margin-top:-20px"></a>
</div>
<div class="aa">
<h2>Create Account</h2>
<form method="post" action="account.php">
 <input type="text" name="name" placeholder="Enter full name..."><br><br>
 <input type="text" name="userid" placeholder="Enter user id..."><br><br>
<input type="number" name="ph" placeholder="Enter ph number..."><br><br>
<input type="password" name="password" placeholder="Enter Password..."><br><br>
  <input type="password" name="password2" placeholder="Re-enter Password..."><br><br>
<input type="submit" name="submit" value="Submit">
</form>
</div>

<div >
<h3><a href="user.php" style="margin-left:470px;padding:30px">Back to Login Page</a><h3>
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
$name=$_POST['name'];
$userid=$_POST['userid'];
$ph=$_POST['ph'];
$password=$_POST['password'];
$password2=$_POST['password2'];
if($name==''){
echo"<script>alert('Enter your name')</script>";
}
else if($userid==''){
echo"<script>alert('Enter your userid')</script>";
}
else if($ph==''){
echo"<script>alert('Enter your phone no')</script>";
}
else if($password==''){
echo"<script>alert('Enter your password')</script>";
}
else if($password!=$password2){
echo"<script>alert('The two password are not match')</script>";
}
else{
$sql = "INSERT INTO user(name,userid,ph,password,password2) values ('$name', '$userid', '$ph', '$password','$password2')";

if ($conn->query($sql) === TRUE) {
   
echo "<script>window.open('after.php', '_self')</script>";
}
 else {
    echo "<script>alert('error')</script>";
}
}}

$conn->close();
?>
