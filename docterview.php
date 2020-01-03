<!DOCTYPE html>
<!-- Docter View
*Author:
-->
<html>
<head>
<link rel="stylesheet"type="text/css"href="style.css">
</head>
<body class="d">
<div class="men">
			     <ul>
				     <li><h1 > HOSPITAL MANAGEMENT SYSTEM</h1></li>
				 </ul>
		     </div>
<div align="center" class="view"><br> 

<?php
$servername = "localhost";
$username = "root";
$password= "";
$dbname = "hms";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT * FROM users WHERE type='dctr'";
$result=$conn->query($sql);?>
<center><h1>Doctor Details </h1></center>
<form action="editd.php">
<?php

echo "<table border='1px'>";
echo "<tr>";
echo "<th> id </th>";
echo "<th> Name </th>";
echo "<th> Specialization </th>";
echo "<th> Clinic_address  </th>";
echo "<th> Clinic_time </th>";
echo "<th> Modify </th>";
echo "</tr>";
foreach($result as $row)
{
	//print_r($row);
echo "<br>";
echo "<tr>";
echo "<td>".$row["id"]."</td>";
echo "<td>".$row["name"]."</td>";
echo "<td>".$row["specialization"]."</td>";
echo "<td>".$row["cladd"]."</td>";
echo "<td>".$row["cltime"]."</td>";?>
<td><a href='editd.php?id=<?=$row["id"]?>'>Edit</a>||<a href='delete_d.php?id=<?=$row["id"]?>'>Delete</a></td>
</div>
 <?php
echo "</tr>";
}
echo "</table>";

$conn->close();
?><br>

</form>

<button><a href ="admin_dashbord.php">back</a></button>
</body>
</html>
