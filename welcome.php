<?php include('header.php'); ?>
<!--///////////////// sidenav section starts here.../////////////////-->
<!-- ////********************************************************////-->
<!--////////////////// sidenav section ends here..///////////////////-->
<!-- ////********************************************************////-->
<br />
<!--/////////////////////////////////////////////////////////////////-->
<!--/////////////////////=======================//////////////////////-->
<!--/////////////////////Alart info section starts here..//////////////////////-->
<br />
<div class="alert info">
  <span class="closebtn">&times;</span>  
<?php  
session_start();  
  
if(!$_SESSION['email'])  
{  
  
    header("Location: login.php");//redirect to login page to secure the welcome page without login access.  
}  
  
?>  
  
<html>  
<head>  
  
    <title>  
        Registration  
    </title>  
</head>  
  
<body>  
<h1>Welcome</h1><br>  
<?php  
echo $_SESSION['email']; 
?>  

  
<h3><a href="logout.php">Logout here</a> </h3>  
  
  
</body>  
  
</html> 
  <span><button><a href="index.php">Back to Homepage</a></button></span></center>.
</div>
<script>
var close = document.getElementsByClassName("closebtn");
var i;

for (i = 0; i < close.length; i++) {
    close[i].onclick = function(){
        var div = this.parentElement;
        div.style.opacity = "0";
        setTimeout(function(){ div.style.display = "none"; }, 600);
    }
}
</script>
<!--/////////////////////Alart info section stops here..//////////////////////-->
<?php include('footer.php'); ?>