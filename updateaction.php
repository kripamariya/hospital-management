<!DOCTYPE html>
 <?php session_start(); ?>
 <?php
include("connection.php");
  $id=$_SESSION['id'];


echo $name=$_GET['name'];
echo $specialization=$_GET['specialization'];
echo $date=$_GET['avail_date'];
echo $from=$_GET['frm'];
echo $to=$_GET['tu'];


  $sql="insert into doctime(id,docname,specialization,avail_date,frm,tu)values
        ('$id','$name','$specialization','$date','$from','$to')";
  if($conn->query($sql)==TRUE){
	  echo "success";
	echo " <script>
	 window.location='docterdashboard.php';
	 </script>";
     }
	 else{
		 echo "failure";
		 echo " <script>alert('error');
		 window.location='docterdashboard.php';
		 </script>";
	 }


//}	?>