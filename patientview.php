
<!-- Patient View
*Author:aromal
-->
<?php include("header.php");?>
<body class="d">
<div class="men">
			     <ul>
				     <li><h1 > HOSPITAL MANAGEMENT SYSTEM</h1></li>
				 </ul>
		     </div> 
<div align="center"class="view">

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
$sql = "SELECT * FROM users WHERE type='ptnt'";
$result=$conn->query($sql);?>
<center><div><h1>Patient Details </h1>
<form action="editp.php"></center>
<?php

echo "<table border='1px'>";
echo "<tr>";
echo "<th> id </th>";
echo "<th> Name </th>";

echo "<th> Gender </th>";
echo "<th> Age </th>";
echo "<th> Modify </th>";
echo "</tr>";
foreach($result as $row)
{
	//print_r($row);
echo "<br>";
echo "<tr>";
echo "<td>".$row["id"]."</td>";
echo "<td>".$row["name"]."</td>";
echo "<td>".$row["gender"]."</td>";
echo "<td>".$row["age"]."</td>";
?>
<td><a href='editp.php?id=<?=$row["id"]?>'>Edit</a>||<a href='deletep.php?id=<?=$row["id"]?>'>Delete</a></td>
</div>
 <?php
echo "</tr>";
}
echo "</table>";
$conn->close();
?><br>

</form>
<button><a href ="admin_dashbord.php">back</a></button>
<?php
include("footer.php");?>
