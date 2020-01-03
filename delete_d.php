<?php
/*  Doctor detail DELETE 
  *Author:
*/
include('Connection.php');
echo $id=$_GET['id'];
$name=$_GET['name'];
$specialization=$_GET['specialization'];
$cladd=$_GET['cladd'];
$cltime=$_GET['cltime'];
$db=new $conn;
$qry="delete from users  where id='$id'";
if ($conn->query($qry) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}


echo "<script>alert('Success'); window.location='docterview.php';</script>";
?>
