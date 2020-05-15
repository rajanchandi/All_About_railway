<!DOCTYPE html>
<html>
<head>
<title>login page</title>
<link rel="stylesheet" type="text/css" href='style.css'>
<body>
<div class="a">
<a href="al.php"><h2>Back</h2></a>
</div>
<div class="aa">
<h2>Enter TRain</h2>
<form method="post" action="et.php">
 <input type="text" name="TrainName" placeholder="enter  name..."><br><br>
 <input type="number" name="TrainNo" placeholder="enter no..."><br><br>
<input type="text" name="TrainType" placeholder="enter type..."><br><br>
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
$TrainName=$_POST['TrainName'];
$TrainNo=$_POST['TrainNo'];
$TrainType=$_POST['TrainType'];
if($TrainName==''){
echo"<script>alert('enter your name')</script>";
}
else if($TrainNo==''){
echo"<script>alert('enter your userid')</script>";
}
else if($TrainType==''){
echo"<script>alert('enter your phone no')</script>";
}
else{
$sql = "INSERT INTO train(TrainName,TrainNo,TrainType) values ('$TrainName', '$TrainNo', '$TrainType')";

if ($conn->query($sql) === TRUE) {
   
echo "<script>window.open('al.php', '_self')</script>";
}
 else {
    echo "<script>alert('error')</script>";
}
}}

$conn->close();
?>
