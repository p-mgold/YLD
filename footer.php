
<!--///////////////Scroll to the top Section Starts Here../////////////////-->
<button onclick="topFunction()" id="myBtn" title="Go to top" >Top</button>
<!--////////////////////==============================/////////////////////-->
<!--////////////////////==============================/////////////////////-->
<!--/////////////////Scroll to the top Section Ends Here../////////////////-->
<!--////////////////////==============================/////////////////////-->
<!--///////////////////////////////////////////////////////////////////////-->
<!--///////////////////////////////////////////////////////////////////////-->
<!--//////////////////////////////////////////////////////////////////////-->
<br />
<div style="background-color:lightgrey;"></div>
<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}
// When the user clicks on the button, scroll to the top of the document///////
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>

<!-- ////////////////////////End of the scroll to the top button section////////-->
<!--//////////////A Horizontal Line here...////////////////////////////-->
<hr />
<!--============================================================================-->
<div class="col-container" style="width:100%; position:relative; overflow: auto; padding-left:15px; background:black; color:grey;">
    <div class="col" style="">
      <h3>About YLD</h3>
        <a href="policy.php" style="color:grey;">Policy</a><br>
        <a href="workshop.php" style="color:grey;">workshop</a><br>
        <a href="job.php" style="color:grey;">Jobs</a><br>
        <a href="#" style="color:grey;">Review</a><br>
        <a href="goals.php" style="color:grey;">Goals</a><br>
        <a href="faq.php" style="color: grey;">FAQ</a>
    </div>
    
    <div class="col" style="">
        <h3>Gallery</h3>
        <a href="gallery.php" style="color:grey;">Pictures</a><br>
        <a href="video.php" style="color:grey;">Videos</a><br>
    </div>
  
    <div class="col" style="">
        <h3>Connect</h3>
        <p><a href="https://www.facebook.com/Youth-Leadership-Development-I-CAN-1588525494567882/?modal=admin_todo_tour" class="fa fa-facebook" style="color:grey;"> facebook</a><br>
        <a href="https://twitter.com/YLD_ICAN" class="fa fa-twitter" style="color:grey;"> twitter</a><br>
        <a href="https://www.youtube.com/channel/UCi3KdYFjVOoW3OTm1sWbfbg?view_as=subscriber" class="fa fa-youtube" style="color:grey;"> youtube</a><br>
        <a href="https://www.instagram.com/yldican/" class="fa fa-instagram"style="color:grey;"> instagram</a><br>
        
      </div>

    <div class="col" style="overflow: auto;">
      <h3>Contacts</h3>
    WhatsApp : 08073720204<br>
    <p><i class="fa fa-fw fa-phone"></i> 08073720204</p>
        <p><i class="fa fa-fw fa-envelope"></i> info@yldican.com</p>
    </div>
  
  </div>
<!--=============================================================================-->
<!-- //////////////My Side Nav Starts here../////////////////////////////////-->
<div id="mySidenav" class="sidenav">
  <a href="index.php" id="about">Home</a>
  <a href="about.php" id="blog">About</a>
  <a href="workshop.php" id="projects">Workshop</a>
  <a href="contact.php" id="contact">Contact</a>
</div>
<!-- //////////////My Side Nav Ends here../////////////////////////////////-->
<!--///////////////////=====================================/////////////////-->
<!--////////////////////JivoChat/Help Desk section Starts here..///////////////////-->
<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = 'ueDqTajywO';var d=document;var w=window;function l(){
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
<!-- {/literal} END JIVOSITE CODE -->
<!--////////////////////////Footer section starts here..////////////////////////-->
<div class="footer">
  &copy; <?php echo date("Y");?> YLD (I CAN)
</div>
<!--///////////////////////////End of Footer..//////////////////////////////////-->
</body>
</html>