<!DOCTYPE html>
<!--  Listing Doctors list
  *Author:ROHIT
-->
<html>
<head>
<title>listing doctor</title>
<link rel="stylesheet"type="text/css"href="style.css">
</head>
<body class="t">

<h1><center>DOCTOR's LIST</center></h1>
<?php
include("connection.php");
session_start();
if(isset($_POST['submit']))
{
  $specilization=$_POST['specialization'];
  
  
  $sql1="select * from doctime where specialization='$specilization'";
  /*$sql="insert into  (date)values('$date')";*/
 
  $result = $conn->query($sql1);
?>
  <center><h1></h1></center>
<form action="appointment_form.php" method="post">
<?php
/*echo "<b>name</b>".$name;
echo "<br>";
echo "<b>:</b>".$di;
echo "<br>";*/
echo "<table border='1px'>";
echo "<tr>";
echo "<th> id </th>";
echo "<th> name </th>";
echo "<th> specialization </th>";
echo "<th> Date </th>";
echo "<th> Time from </th>";
echo "<th> Time ends </th>";
echo "<th> make appoinment</th>";
echo "</tr>";
foreach($result as $row)
{
	//print_r($row);

echo "<tr>";
?>
<td> <?php echo $row['id'];?></td>
<input type='hidden' name='id' value="<?php echo $row['id']; ?>">
<td> <?php echo $row['docname'];?></td>
<input type='hidden' name='docname' value="<?php echo $row['docname']; ?>">
<td> <?php echo $row['specialization'];?></td>
<input type="hidden" name="specialization" value="<?php echo $row['specialization']; ?>">

<td><input type="date" name="avail_date" value="<?php echo $row['avail_date']; ?>">
<input type="hidden" name="avail_date" value="<?php echo $row['avail_date']; ?>">
  <td><input type="time" name="frm" value="<?php echo $row['frm']; ?>">

 <td><input type="time" name="tu" value="<?php echo $row['tu']; ?>">
  <td><input type="submit" name="submit" value="submit"></td> 

 <?php
echo "</tr>";
}
echo "</table>";

//$conn->close();
?><br>

<?php
}
?>
</form>
<a href="patientdashboard.php">Back</a>
</body>
</html>