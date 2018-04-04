<?php include('header.php'); ?>
<!--///////////////// sidenav section starts here.../////////////////-->
<!-- ////********************************************************////-->
<!--////////////////// sidenav section ends here..///////////////////-->
<!-- ////********************************************************////-->
<br />
<!--/////////////////////////////////////////////////////////////////-->
<!--/////////////////////=======================//////////////////////-->
<!--/////////////////////Alart info section starts here..//////////////////////-->
<br /><br />
<br /><br />
<br /><br />
<center><div class="alert info" style="width:300px;">
    <h2 style="color:red;">Error..<b style="color:red;">!</b></h2>
    
</div>
<div class="alert info" style="width:300px;">
    <h3 style="color:red;">Invalid Username or Password</h3>
</div>
<span><button><a href="index.php">Back to Homepage</a></button></span></center> 
</div>
<script>
var close = document.getElementsByClassName("closebtn");
var i;

for (i = 0; i < close.length; i++) {
    close[i].onclick = function(){
        var div = this.parentElement;
        div.style.opacity = "0";
        setTimeout(function(){ div.style.display = "block"; }, 600);
    }
}
</script>
<br /><br />
<br /><br />

<!--/////////////////////Alart info section stops here..//////////////////////-->
<?php include('footer.php'); ?>