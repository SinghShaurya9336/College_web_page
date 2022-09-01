<?php
   include("../connect.php");
   $query="select * from tbl_user";
   $res=mysql_query($query);
   
?>
<h1 align="center">Show All Users</h1>
<table border="1" align="center">
<tr>
  <th>User Id</th>
  <th>Name</th>
  <th>F'Name</th>
  <th>Gender</th>
  <th>Email</th>
  <th>Password</th>
  <th>Mobile</th>
  <th>Pincode</th>
  <th>City</th>
  <th>Address</th>
  <th>Picture</th>
  <th>Date</th>
</tr>
<?php
      while($row=mysql_fetch_array($res,MYSQL_BOTH))
            {
?>
<tr>
    <td><?php echo $row['uid'];?></td>
    <td><?php echo $row['name'];?></td>
    <td><?php echo $row['fname'];?></td>
    <td><?php echo $row['gender'];?></td>
    <td><?php echo $row['email'];?></td>
    <td><?php echo $row['password'];?></td>
    <td><?php echo $row['mobile'];?></td>
    <td><?php echo $row['pincode'];?></td>
    <td><?php echo $row['city'];?></td>
    <td><?php echo $row['address'];?></td>
    <td><?php echo $row['filename'];?></td>
    <td><?php echo $row['date'];?></td>
	
	
	


</tr>
<?php
             }
?>





</table>