<?php
/* Doctor Updation
*Author:kripa
*/

include('connection.php');
echo $id=$_GET['id'];
$name=$_GET['name'];
$specialization=$_GET['specialization'];
$cladd=$_GET['cladd'];
$cltime=$_GET['cltime'];


$db=new $conn;
$qry="update users set name='$name',specialization='$specialization',cladd='$cladd',cltime='$cltime'  where id='$id'";
if ($conn->query($qry) == TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
echo "<script>alert('Success'); window.location='docterview.php';</script>";
?>
