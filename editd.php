<?php
/*  Doctor's  Edit
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
 "<td>".$row["specialization"]."</td>";
"<td>".$row["cladd"]."</td>";
"<td>".$row["cltime"]."</td>";
}?>
<!DOCTYPE html>
<html>
<head>
<title>Edit Doctor Details</title>
<link rel="stylesheet"type="text/css"href="style.css">
</head>
<body class="d">
<div class="men">
			     <ul>
				     <li><h1 > HOSPITAL MANAGEMENT SYSTEM</h1></li>
				 </ul>
		     </div>

<div align="center" class="temp">
   
<h1><center>Edit Doctor Details<hr></center></h1>
<form action="update_d.php" method="GET">
    <input type="hidden"  name="id" value="<?php echo $id;?>" ><br><br>  

Name:	 <input type="text"  name="name"  class="frm" value="<?php echo $row["name"];?>"><br><br>
Specialization:<select   name="specialization" class="frm" value="<?php echo $row["specialization"];?>"><br><br>
                 <option value="psychiatrist" class="frm">psychiatrist</option>
				  <option value="cardiologist" class="frm">cardiologist</option>
				   <option value="gynecologist" class="frm">gynecologist</option>
				    </select><br><br>
Clinic_address:<textarea name="cladd" class="frm" value="<?php echo $row["cladd"];?>"></textarea ><br><br>
Clinic_time: <input type="time"  name="cltime" class="frm" value="<?php echo $row["cltime"];?>"><br><br>


		 <input type="submit" value="Update" name="submit" class="frm-btn"></form>

</div>
</body>
</html>