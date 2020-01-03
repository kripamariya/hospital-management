<?php
/* Patient Updation
*Author:jibi
*/

include('connection.php');
echo $id=$_GET['id'];
$name=$_GET['name'];
$gender=$_GET['gender'];
$age=$_GET['age'];


$db=new $conn;
//$conn=new mysqli($servername,$username,$password,$dbname);
$qry="update users set name='$name',gender='$gender',age='$age'  where id='$id'";
if ($conn->query($qry) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
echo "<script>alert('Success'); window.location='patientview.php';</script>";
?>
