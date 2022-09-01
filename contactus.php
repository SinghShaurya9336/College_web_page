<?php
   $n=$_POST['name'];
   //echo "$n";
   $e=$_POST['email'];
   //echo "$e";
   $mob=$_POST['mobile'];
   //echo "$m";
   $m=$_POST['message'];
   //echo "$a";
   include("connect.php");
   $query="insert into tbl_contact(name,email,mobile,message,date) values('$n','$e','$mob','$m',now())";
   mysql_query($query);
 
?>