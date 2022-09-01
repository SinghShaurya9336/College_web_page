<?php
session_start();
  $op=$_POST['op'];
  //echo "";
   $np=$_POST['np'];
  //echo "$np";
   $cnp=$_POST['cnp'];
  //echo "cnp";
  $email=$_SESSION['user'];
  include("connect.php");
  $query="select * from tbl_user where email='$email'";
  $res=mysql_query($query);
  if($row=mysql_fetch_array($res,MYSQL_BOTH))
  {
	$pp=$row['password'];  
   }
   if($op==$pp)
   {
	  if($op==$np)
	  {
		 header("location:change.php"); 
		  
	  }
     else if($np==$cnp)
	 {
	   $query2="update tbl_user set password='$cnp' where email='$email'";
	   mysql_query($query2);
	   session_destroy();
	   header("location:login.php");
	 }
     else
	 {
		header("location:change.php"); 
		 
	 }		 
   }
   else
   {
	header("location:change.php");  
   }
  
  
  
  
?>