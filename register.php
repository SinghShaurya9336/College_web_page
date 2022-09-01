<?php
?>
<html>
<head>
  <style>
  #outer
  {
	  height:1200px;
	  width:1000px;
	 //border:1px solid white;  
	 margin:0px auto; 
  }
  #menu
  {
	  height:50px;
	  width:1000px;
	  background-color:white;
	  border-radius:20px 20px 0px 0px;
	  border:1px solid white;
  }
  #menu ul
  {
	  list-style-type:none;
  }
  #menu ul li
  {
	  display:inline;
	  padding:15px;
  }
  #menu ul li a
  {
	  color:black;
	  text-decoration:none;
  }
  #menu ul li a:hover
  {
	color:green;  
   }
 
  #slider
  {
	  height:250px;
	  width:1000px;
	  margin:auto;
  }
  #slideimage
  { 
    height:250px;
	width:1000px;
  }
  #parent
  {
	  height:600px;
	  width:1000px;
	  //border:1px solid white;
	  margin-top:5px;
  } 
  #left
  {
	  height:600px;
	  width:700px;
	  background-color:aqua;
	 // margin-top:5px;
	  float:left;
	  border-radius:0px 0px 20px 20px;
  }
  #right
  {
	  height:600px;
	  width:300px;
	  background-color:lightgrey;
	 // margin-top:5px;
	 float:right;
	  border-radius:0px 0px 20px 20px;
  }
  #footer
  {
	 height:270px;
     width:1000px;
     background-color:white;
	 border:1px solid white;
     border-radius:20px;
     margin-top:20px;	 
	  
  }
  .one
  {
	  height:240px;
	  width:310px;
	  //border:1px solid;
	  margin-top:15px;
	  margin-left:15px;
	  float:left;
  }
  #c1
  {
	  height:65px;
	  width:290px;
	  border:1px solid lightgrey;
	  margin:10px auto;
	  margin-bottom:5px;
  }
    #c2
  {
	  height:65px;
	  width:290px;
	  border:1px solid lightgrey;
	    margin:10px auto;
   	     //margin-bottom:5px;
  }
  .d1
  {
	  height:55px;
	  width:88px;
	  border:1px solid lightgrey;
	  margin-top:5px;
	  margin-left:5px;
	  float:left;
  }
  .b1
  {
	  height:55px;
	  width:88px;
	  border:1px solid lightgrey;
	  margin-top:5px;
	  margin-left:5px;
	  float:left;
  }
  
  
  
  
  </style>
   </head>
   <body bgcolor="green;">
   <div id="outer">
   <div id="menu">
   <ul>
   <li><a href="index.php">HOME</a></li>
   <li><a href="about.php">ABOUT</a></li>
   <li><a href="register.php">REGISTER</a></li>
   <li><a href="login.php">LOGIN</a></li>
   <li><a href="gallary.php">GALLERY</a></li>
   <li><a href="contact.php">CONTACT US</a></li>
   
   </ul>
   </div>
   <div id="slider">
     <script>
	var images=["slider/1.jpg","slider/2.jpg","slider/3.jpg","slider/4.jpg","slider/5.jpg","slider/6.jpg"];
	 var i=0;
	 function slides()
	 {
	 document.getElementById("slideimage").src=images[i];
	 if(i<(images.length-1)) 
	 {
	   i++;
	 }
	 else
	 {
	   i=0;
	 }
	 } 
	 setInterval(slides,1000);

	 </script>
	 <img src="slider/1.jpg" alt="1.jpg" id="slideimage">
   </div>
   <div id="parent">
   <div id="left">
   <h1 align="center">Register Here!!</h1>
   <table align="center">
   <form action="code.php" method="post" enctype="multipart/form-data">
   <tr>
   <td>Name:</td>
   <td><input type="text" name="name"/></td>  
   </tr>
   <tr>
   <td>F'Name:</td>
   <td><input type="text" name="fname"/></td>  
   </tr>
   <tr>
   <td>Gender</td>
   <td>
   <input type="radio" name="a" value="male"/>Male
   <input type="radio" name="a"value="female"/>Female
   </td>
   </tr>
   <tr>
    <td>Email</td>
    <td><input type="email" name="email"/>
	</td>
   </tr>
   <tr>
   <td>Password</td>
   <td>
   <input type="password" name="password"/>
   </td>
   </tr>
   <tr>
   <td>Mobile No</td>
   <td>
   <input type="mobile" name="mobile"/>
   </td>
   </tr>
   <tr>
   <td>Pincode</td>
   <td>
   <input type="pin" name="pin"/>
   </td>
   </tr>
   <tr>
   <td>City</td>
   <td>
   <select style="width:175px" name="city">
       <option value="">--Select City--</option>
       <option>Lucknow</option>
       <option>Varanasi</option>
       <option>Allahabad</option>
       <option>Ayodhya</option>
       <option>Gorakhpur</option>
   </select>
   </td>
   </tr>
   <tr>
   <td>Address</td>
   <td><textarea name="address"></textarea>
   </td>
   </tr>
   <tr>
   <td>Upload Pic</td>
   <td><input type="file" name="file"/>
   </td>
   </tr>
   <tr>
   
   <td><input type="submit" value="register"/>
   </td>
   </tr>
   </form>
   </table>
  
   </div>
   <div id="right">
<h1 align="center">Sidebar Menu<h1>
   <ul align="left">
<li><a href="#">Home</a></li>
<li><a href="#">Templateinfo</a></li>
<li><a href="#">Syllabus</a></li>
<li><a href="#">Seminars</a></li>
<li><a href="#">Academic Council</a>
<ul id="sub-menu">
<li><a href="#">Departments</a></li>
<li><a href="#">Faculty Profile</a></li>
<li><a href="#">Academic Calender</a></li>
</li>
</ul>
</ul>
<h1 align="center">Administration</h1>
<ul align="left">
   <li><a href="#">Chancellor</a></li>
    <li><a href="#">Vice-Chancellor</a></li>    
    <li><a href="#"><<---->></a></li>    

   
   </div>
   </div>
   <div id="footer">
   <div class="one">
   <h3 align="center">IMAGE GALLERY</h3>
   <div id="c1">
   <div class="d1">
   	<img src="slider/7.jpg" height="55px" width="88px" id="images"/>
   </div>
   <div class="d1">
   <img src="slider/8.jpg" height="55px" width="88px" id="images"/></div>
   <div class="d1">
   	<img src="slider/9.jpg" height="55px" width="88px" id="images"/></div>
   </div>
   <div id="c2">
   <div class="b1">
   	<img src="slider/10.jpg" height="55px" width="88px" id="images"/></div>
   <div class="b1">
   	<img src="slider/11.jpg" height="55px" width="88px" id="images"/></div>
   <div class="b1">
   	<img src="slider/12.jpg" height="55px" width="88px" id="images"/></div>
   </div>
   <a href="gallary.php">Gallery</a>
   </div>
   <div class="one">
   <h3 align="center">Links Of Interest</h3>
   <br/>
   RMLAU Entrance:
   <br/>
    <a href="">http://rmlauentrance.in</a>
	<br/>
	 AISHE:
	 <br/>
       <a href="">http://rmlauexams.in/AISHE</a>
	   <br/>
     University Grants Commission
 NATIONAL ACADEMIC DEPOSITORY (NAD):
 <br/>
        <a href="">http://www.rmlau.info</a>
   </div>
   <div class="one">
   <h3 align="center">CONTACT</h3>
   For any further information you can contact us by our email id or our contact number:
   <br/>
    <br/>
	 <br/>
    <a href="">saur@8953</a>
	<br/>
    <a href="">arpit@3498</a>
     <br/>
     <br/>
     <a href="">9648562439</a>
      <br/>
	 <a href="">8355033063</a> 
   
   
   </div>
   </div>
   </div>
</body>
</html>
