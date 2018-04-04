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
<div class="alert warning">
  <center><span class="closebtn">&times;</span>  
  <h2 style="color:red;"><strong>Warning!</strong></h2> <br /><h3>A user with the username already exist..!</3></center>
</div>
<div ><center>Click here to go <a href="index.php" style="color:green; text-decoration:none;"><strong>Back ...</strong></a></center>
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