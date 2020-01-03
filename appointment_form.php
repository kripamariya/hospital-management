
<?php include("header1.php");?>

<body class="d">
    <div class="men">
			     <ul>
				     <li><h1>HOSPITAL MANAGEMENT SYSTEM</h1></li>
				 </ul>
		     
         
    </div>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
   
  <?php
include("connection.php");
session_start();

  $id=$_POST['id'];
  $doc_name=$_POST['docname'];
  $avail_date=$_POST['avail_date'];
 ?>


    

    <!-- Login Form -->
	<table>
    <form method="post" action="appoinment_action.php">
	 

     Patient_name :<input type="text"  class="fadeIn second" name="patient_name">
	 	 Doctor ID:<input type="text" name="id" value="<?php echo $id; ?>">
	 <input type='hidden' name='id' value="<?php echo $id; ?>">
	 Docname:<input type="text" name="doc_name" value="<?php echo $doc_name; ?>">
	 <input type='hidden' name='doc_name' value="<?php echo $doc_name; ?>">
     Phone_no : <input type="text" class="fadeIn third" name="phone_no">
	 symptoms :<input type="text" class="fadeIn second" name="symptoms"><br><br>
	 Date :<input type="date"  name="avail_date" value="<?php echo $avail_date; ?>">
	 <input type='hidden' name='avail_date' value="<?php echo $avail_date; ?>">
	 Time :<input type="time" class="fadeIn second" name="time"><br><br>
      <input type="submit" class="fadeIn fourth" name="submit" value="Make an appointment">
	  
    </form>
</table>
    <!-- Remind Passowrd 
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>-->

  </div>
</div>
