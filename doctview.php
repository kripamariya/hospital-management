
<!DOCTYPE html>
<!--  
  *Author:ROHIT
-->
<?php include("header.php");?>

<body class="d">
<div class="men">
			     <ul>
				     <li><h1 > HOSPITAL MANAGEMENT SYSTEM</h1></li>
				 </ul>
				 </div><br><br><br><br>
<?php
include("connection.php");
session_start();
  $id=$_SESSION['id'];
  $sql1="select * from users where id='$id'";
 
  $result = $conn->query($sql1);
?>
<div align="center" class="temp">
  <center><h1>Update Time</h1></center>
<form action="updateaction.php" method="get">
<?php
echo "<table border='1px'>";
echo "<tr>";
echo "<th> id </th>";
echo "<th> Name</th>";
echo "<th> Specialization</th>";
echo "<th> Date</th>";
echo "<th> From</th>";
echo "<th> To</th>";

echo "</tr>";
foreach($result as $row)
{
	//print_r($row);
echo "<br>";
echo "<tr>";?>

<td> <?php echo $row['id'];?></td>
<input type='hidden' name='id' value="<?php echo $row['id']; ?>">
<td> <?php echo $row['name'];?></td>
<input type='hidden' name='name' value="<?php echo $row['name']; ?>">
<td> <?php echo $row['specialization'];?></td>
<input type='hidden' name='specialization' value="<?php echo $row['specialization']; ?>">
<td><input type="date" name="avail_date" value="date">
  <td><input type="time" name="frm" value="From">
 <td><input type="time" name="tu" value="To">
  <td><input type="submit" name="submit" value="submit"></td>
 <?php
echo "</tr>";
}
echo "</table>";

//$conn->close();
?><br>

</div>
</form>
<button align="center" class="but"><a href="docterdashboard.php">Back</a><button>
</body>
</html>