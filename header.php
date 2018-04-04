<?php
	//Start session
	session_start();	
	//Unset the variables stored in session
	unset($_SESSION['u_id']);
	unset($_SESSION['u_first']);
	unset($_SESSION['u_last']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
  <title>YLD (I CAN) || Homepage</title>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="favicon.jpg" type="image/x-icon">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Brawler' rel='stylesheet'>

<!--//////////////////My costom css section//////////////////////-->
<link rel = "stylesheet" type = "text/css" href = "style.css" />
<link rel = "stylesheet" type = "text/css" href = "main.css" />
<link rel = "stylesheet" type = "text/css" href = "team.css" />
<script>require_once('auth.php');</script>
</head>
<body>
  <!--////////////////////////////////////////////////////////////-->
<!--===========head-wrapper section starts here=================-->
<!--===============A div should be here=========================-->
<!--=============head-wrapper section ends here=================-->
<!--////////////////////////////////////////////////////////////-->
<!--////////////////Dropdown nav starts here..//////////////////-->
<div class="navbar">
  <a href="index.php">Home</a>
  <a href="workshop.php">workshop</a>
  <a href="job.php">Jobs</a>
  <a href="gallery.php">Gallery</a>
  <a href="goals.php">Goals</a>
  <a href="#">Reviews</a>

    <!--/////////////////////////////////////////////////////////-->    
    <!--//////The Starts of the dropdown optoin section starts here../////-->
    <!--////////=============================////////////////////-->  
  <div class="dropdown">
    <button class="dropbtn">More... .
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="about.php">About Us</a>
      <a href="policy.php">policy</a>
      <a href="team.php">Team</a>
      <a href="faq.php">FAQ</a>
    </div>
    <!--////////=============================////////////////////-->
    <!--//////The End of the dropdown optoin section starts here../////-->
    <!--/////////////////////////////////////////////////////////-->
    
</div> 
<div style="float:right">
    <!--//////////////Start of login section////////////////////-->
    <button onclick="document.getElementById('id01').style.display='block'" style="width:auto; ">Login</button>
<div id="id01" class="modal" style="padding-top:1">
  <form class="modal-content animate" action="login.inc.php" method="POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="avater.jpg" alt="Avatar" class="avatar">
    </div>
    <div class="container">
      <label><b>Username</b></label> *<br>
      <input type="text" placeholder="Username / E-mail" name="uid" min="5" max="10" required><br>
      <label><b>Password</b></label> *<br>
      <input type="password" placeholder="min 8 characters" name="pwd" min="8" required>
      <br>  
      <input type="checkbox" checked="checked"> Remember me
      <br>
      <center><button type="submit">Login</button>
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button></center><br>
    </div>
  </form>
</div>
<script>
// Get the modal//////////////////////////////////////////////
var modal = document.getElementById('id01');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<!-- ////////////////////////End of login section////////////-->
<!-- //////////////////////Start of Signup section///////////-->
<button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Sign Up</button>
<div id="id02" class="modal" style="padding-top:0">
  <form class="modal-content animate" action="signup.inc.php" method="POST">
    <div class="container">
      <div></div>
      <p style="color:darkgreen; font-family: 'Brawler';font-size: 22px">Registration form</p>
            <span><center>All fields marked * must be filled</center></span><br>
            <label><b>Firstname</b></label> *<br>
            <input type="text" placeholder="Firstname" name="first" required>
            <br>
            <label><b>Lastname</b></label> *<br>
            <input type="text" placeholder="Lastname" name="last" required>
            <br>
            <label><b>E-mail</b></label> *<br>
            <input type="text" placeholder="e-mail" name="email" required><br>
            <label><b>Username</b></label> *<br>
            <input type="text" placeholder="Username" name="uid" required><br>
            <label><b>Password</b></label> *<br>
            <input type="password" placeholder="Password" name="pwd" required><br>
            <label><b>Comfirm Password</b></label> *<br>
            <input type="password" placeholder="Re-Type Password" name="pwd" required><br>

      <input type="checkbox" checked="checked"> Remember me  
      <div class="clearfix">
        <center><button type="submit" class="signupbtn" name="submit">Sign Up</button>
        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</center></button>
      </div>
    </div>
  </form>
</div>
<button onclick="document.getElementById('id03').style.display='block'" style="width:auto;">Forgot Password?</button>
<div id="id03" class="modal"> 
  <form class="modal-content animate" action="#" method="POST">
    <div class="container">
      <label><b>Fill in the e-mail address that is linked with your account</b></label> *<br>
      <input type="text" placeholder="e-mail address" name="email" required><br>

      <label><b>Fill in the last Password you remembered</b></label> *<br>
      <input type="password" placeholder="Enter Password" name="psw" required>
      <br>  
      <div class="clearfix">
        <center><button type="submit" class="signupbtn" name="submit">Submit</button>
        <button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn">Cancel</center></button>
      </div>
    </div>
  </form>
</div>
<script>
// Get the modal//////////////////////////////////////////////////////
var modal = document.getElementById('id02');
// When the user clicks anywhere outside of the modal, close it//////
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
// I just added this code to test////////////////////////////////////
</script>
<!--/////////////////////////////////////////////////////////////////-->
<!--////////////////script for closing the modal id03////////////////-->
<!--/////////////////////End of signup section///////////////////////-->
</div>
</div>
<!--////////////////////////End of dropdown nav..////////////////////-->


<!--//////////////////////starts with the day////////////////////////-->
<p id="demo" style="font-size:14px; color:green; float:right;"></p>
<script>
document.getElementById("demo").innerHTML = Date();
</script>
<!--///////////////////end of time & date section..//////////////////-->