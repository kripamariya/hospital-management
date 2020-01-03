<!-- Login Page
  *Author:
-->

<?php include("header1.php");?>
<body>
<div class="menubar">
<ul>
<li><a href="#">Home</a></li>
<li><a href="#">SIGN UP</a>
   <div class="submenu">
     <ul>
     <li><a href="doctor_registration.php">DOCTOR</a></li>
     <li><a href="patient_registration.php">PATIENT</a></li>
	 </ul>
   </div>
</li>
<li><a href="#">Contact us</a></li>

</ul>
</div>
    <div class="mena">
			     <ul>
				     <li><center><h1 > HOSPITAL MANAGEMENT SYSTEM</h1></center></li>
				 </ul>
		     </div>

   <div class="row" > 
      <div class="col" align="center">
    <!-- Login Form -->
    <form action="logindb.php" method="POST" >
      <input type="text" id="username" class="fadeIn second" name="username" placeholder="username">
      <input type="text" id="password" class="fadeIn third" name="password" placeholder="password">
      <input type="submit" class="fadeIn fourth" name="login" value="login">
    </form>
       
    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>
<?php include("footer.php");?>