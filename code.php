<?php
   $n=$_POST['name'];
   //echo "$n";
   $fn=$_POST['fname'];
   //echo "$fn";
   $g=$_POST['a'];
   //echo "$g";
   $e=$_POST['email'];
   //echo "$e";
   $p=$_POST['password'];
   //echo "$p";
   $m=$_POST['mobile'];
   //echo "$m";
   $pin=$_POST['pin'];
   //echo "$pin";
   $c=$_POST['city'];
   //echo "$c";
   $a=$_POST['address'];
   //echo "$a";
   $filename=$_FILES['file']['name'];
   //echo "$filename";
   $type=$_FILES['file']['type'];
   //echo "$type";
   $size=$_FILES['file']['size'];
   //echo "$size";
   $tmp_name=$_FILES['file']['tmp_name'];
   //echo "$tmp_name";
   $location="upload/";
   include("connect.php");
   $query="insert into tbl_user(name,fname,gender,email,password,mobile,pincode,city,address,filename,date) values('$n','$fn','$g','$e','$p','$m','$pin','$c','$a','$filename',now())";
   mysql_query($query);
   move_uploaded_file($tmp_name,$location.$filename);
   header("location:login.php");
   
  ?>