<?php
/*  Patient detail DELETE 
  *Author:
*/
include('Connection.php');
echo $id=$_GET['id'];
$name=$_GET['name'];
$gender=$_GET['gender'];
$age=$_GET['age'];

$db=new $conn;
$qry="delete from users  where id='$id'";
if ($conn->query($qry) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}


echo "<script>alert('Success'); window.location='patientview.php';</script>";
?>
