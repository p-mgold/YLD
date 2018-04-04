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
  <center><strong><h2 >Welcome to YLD (I CAN)!</h2>
  <br />

  <br /></strong> <h3 style="color:green;">Your account has been successfully created ..</h3>
  <span><button><a href="index.php">Click here to login</a></button></span></center>.
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