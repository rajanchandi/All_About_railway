<?php

$severname = "localhost";
$username = "root";
$password = "";
$dbname = "rajan";

$conn = mysqli_connect($severname, $username, $password, $dbname);

if ($conn->connect_error){
die("connectioin failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM train";
$records = $conn->query($sql);

if(isset($_POST['search']))
{
$bsearch = $_POST['bsearch'];
$query = "SELECT * FROM `train` WHERE CONCAT(`Train Name`, `Train No`) LIKE '%".$bsearch."%'";
$search_Result = filtertable($query);
}
else {
 $query = "SELECT * FROM `train`";
 $search_Result = filtertable($query);

 }
function filtertable($query)
{
	$conn = mysqli_connect("localhost", "root", "", "rajan");
     $filter_Result = mysqli_query($conn, $query);
	 return $filter_Result;
}



?>
<!DOCTYPE>
<html>
<head>
<title>Statioin code</title>
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
<br><br><br><br><br>

<div style="margin-left:200px">
<table width="600" border="1" cellpadding="1" cellspacing="1" >
<tr>
<th>Train Name</th>
<th>Train No.</th>
<th>Train Type</th>
<tr>
<?php
while($row = $records->fetch_assoc()){
	echo "<tr>";
	
		echo "<td>" . $row['TrainName']."</td>";
			echo "<td>" . $row['TrainNo']."</td>";
            echo "<td>" . $row['TrainType']."</td>";
	echo "</tr>";
}
?>

</table>
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
