<?php
      include("../connect.php");
   $query="select * from tbl_contact";
   $res=mysql_query($query);


?>
<h1 href="center">Show All Contacts</h1>
<table border="1" align="center">
<tr>
    
    <th>Name</th>
    <th>Eamil</th>
    <th>Mobile</th>
    <th>Message</th>
    <th>Date</th>

</tr>
    <?php
      while($row=mysql_fetch_array($res,MYSQL_BOTH))
            {
?>
<tr>
   
    <td><?php echo $row['name'];?></td>
    <td><?php echo $row['email'];?></td>
    <td><?php echo $row['mobile'];?></td>
    <td><?php echo $row['message'];?></td>
    <td><?php echo $row['date'];?></td>

</tr>
<?php
             }
?>

</table>