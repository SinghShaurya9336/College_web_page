<?php
   session_start();
   echo $_SESSION['user'];
   if($_SESSION['user']=="")
   {
	   session_destroy();
	   header("location:login.php");
	}
   
   
   
?>
  <br/>
  <a href="logout.php">Logout</a>
  <br/>
  <a href="change.php">Change Password</a>
  <br/>
  <a href="feedback.php">Feedback</a>
  