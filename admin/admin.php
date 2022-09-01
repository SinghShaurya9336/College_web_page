<?php
  session_start();
  echo $_SESSION['admin'];
  if($_SESSION['admin']=="")
  {
  session_destroy();
  header("location:index.php");
  }
?>
<br/>
<a href="logout.php">Logout</a>
<br/>
<a href="showuser.php">Show All Users</a>
<br/>
<a href="showcontact.php">Show All Contact</a>