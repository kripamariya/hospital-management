<?php
/*  Patient  Edit
  *Author:
*/

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
$id=$_GET['id'];
$sql = "SELECT * FROM users WHERE id='$id'";
$result=$conn->query($sql);
foreach($result as $row)
{
	//print_r($row);
echo "<br>";
echo "<tr>";
"<td>".$row["id"]."</td>";
"<td>".$row["name"]."</td>";
 "<td>".$row["gender"]."</td>";
"<td>".$row["age"]."</td>";
}?>
<!DOCTYPE html>
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
<div align="center" class="temp">

<h1><center>Edit Patient Details<hr></center></h1>
<form action="updatep.php" method="GET">
    <input type="hidden"  name="id" value="<?php echo $id;?>" ><br><br>  

Name:	 <input type="text"  name="name"  class="frm" value="<?php echo $row["name"];?>"><br><br>
Gender:	 <input type="text"  name="gender"  class="frm" value="<?php echo $row["gender"];?>"><br><br>
Age:     <input type="text"  name="age"  class="frm" value="<?php echo $row["age"];?>"><br><br>


		 <input type="submit" value="Update" name="submit" class="frm-btn"></form>

</div>
</body>
</html>