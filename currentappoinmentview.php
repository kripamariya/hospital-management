<?php include("header.php");?>
<?php
include("connection.php");
   
session_start();
$id=$_SESSION['id'];
	/*$id=$_POST['id'];
	$patient_name=$_POST['patient_name'];
	$phone_no=$_POST['phone_no'];
	$symptoms=$_POST['symptoms'];*/
	echo "Date :"  .$avail_date=$_POST['date_x'];
	/*$time=$_POST['time'];*/

 $sql = "SELECT * FROM appoinment WHERE avail_date='$avail_date' and id=$id";
$result=$conn->query($sql);?>
<body class="d">
    <div class="men">
			     <ul>
				     <li><h1 >HOSPITAL MANAGEMENT SYSTEM</h1></li>
				 </ul>
		     
         
    </div>
	<div align="center" class="temp">
<center><h1>APPOINTMENTS</h1><center><br>

<form>
<?php

echo "<table border='1px'>";
echo "<tr>";
echo "<th> id </th>";
echo "<th>Patient Name </th>";

echo "<th>Phone no  </th>";
echo "<th> symptoms</th>";
echo "<th>Time </th>";
echo "<th>Response </th>";
echo "</tr>";
foreach($result as $row)
{
	//print_r($row);
echo "<br>";
echo "<tr>";
echo "<td>".$row["id"]."</td>";
echo "<td>".$row["patient_name"]."</td>";
echo "<td>".$row["phone_no"]."</td>";
echo "<td>".$row["symptoms"]."</td>";
echo "<td>".$row["time"]."</td>";
?>
<td><a href='#?id=//<?php=$row["id"]?>'>Accept</a>||<a href='#?id=<?php=$row["id"]?>'>Reject</a></td>

<?php
echo"</tr>";
}
echo"</table>";
$conn->close();
?><br>
<a href="docterdashboard.php">Back</a>
</div>
</form>
</body>
</html>










