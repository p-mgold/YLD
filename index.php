<?php include('header.php'); ?>
<?php   
    if (isset($_SESSION['u_id'])) {
        echo "You are logged in..!";
}
?>
<!--/////////////////////colunm section starts here..//////////////////////-->
<div class="row" style="padding-left:7%; position: relative;">
  <div class="column" style="background-color:white; width:70%; height:80%; position: relative;">
    <!--////////////////slide show section starts here../////////////////-->
<center><h2 style="color:greenyellow"><i><b>YOUTH LEADERSHIP DEVELOPMENT (I can )</b></i></h2>

<div class="slideshow-container">
<div class="mySlides fade">
  <div class="numbertext">1 / 8</div>
  <img src="./img/y1.jpeg" style="width:40%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 8</div>
  <img src="./img/y4.jpeg" style="width:40%">
  <div class="text">Caption Three</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 8</div>
  <img src="./img/y5.jpeg" style="width:40%">
  <div class="text">Caption Three</div>
</div>

<div class="mySlides fade">
    <div class="numbertext">4 /8</div>
    <img src="./img/y6.jpeg" style="width:40%">
    <div class="text">Caption Three</div>
  </div>

<div class="mySlides fade">
    <div class="numbertext">5 / 8</div>
    <img src="./img/y7.jpeg" style="width:40%">
    <div class="text">Caption Three</div>
  </div>

<div class="mySlides fade">
    <div class="numbertext">6 / 8</div>
    <img src="./img/y8.jpeg" style="width:40%">
    <div class="text">Caption Three</div>
  </div>
          
<div class="mySlides fade">
  <div class="numbertext">7 / 8</div>
  <img src="./img/y2.jpeg" style="width:40%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">8 / 8</div>
  <img src="./img/y3.jpeg" style="width:40%">
  <div class="text">Caption Three</div>
</div>

</div>
<br>
<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 

</div>
<script>
var slideIndex = 0;
showSlides();
function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 10000); // Change image every 10 seconds//////////
}
</script>
<!--////////////////////SlideShow Section Ends Here../////////////////////-->
<!--////////////////////==============================/////////////////////-->
<!--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->
<!--////////////////////==============================/////////////////////-->
<!--////////////////////Main column Section Starts Here../////////////////////--><hr>

<div class="parallax" style="position: relative;"></div>
<div style="height:100%; width:98%; font-size:20px; position: relative; background-color:white; text-align:justify; text-decoration:none; white-space: normal; word-spacing:normal;">
    <p>The concept and practice of youth leadership development, grew from the dissatisfaction with a predominant view that under-estimated the true capacity of young people by focusing on their deficits, rather than their development potential.</p>
    <p>Encouraging the positive development of youths can help to less the likelihood of youths being involved in crime and other social problems, arising from poor adolescent development and negative peer pressure. Easing a healthy transition of youth into leaders.</p>
    <p>Youth leadership Development focuses on the active promotion of optimal human development, rather than on the scientific study of age related change, distinguishing it from the study of child development or adolescent development, or as solely a means of avoiding risky behaviours, rather than grounding its development approach in the presence of adversity, risk or  challenges. Youth leadership development approach considers the potential and capacity of each individual. A hallmark of these programs is that they are based on the concept that children and adolescent have strengths and abilities unique to their developmental stage and that they are not merely inadequate or undeveloped adults.</p>
    <p>Youth leadership development (I can) is both a vision, an ideology and a new vocabulary for engaging with youth development.</p>
    <blockquote style="font-family:serif; color:saddlebrown">
      <center>YLD (I can) emphasize both <b style="color:green"><i>skills</i></b> and <b style="color:green"><i>character</i></b> development</center> 
    </blockquote>
</div>
<!--//////////////////////main column Section Ends Here../////////////////////-->
<!--////////////////////==============================/////////////////////-->
  </div>
  <div class="column" style="background-color:wheat; width:30%; height:50%; border: 1px solid darkorange;  border: 6px groove yellowgreen; position: relative; font-size:13px; content: ""; clear: both;">
    <h3><center><u><strong>News and Updates</strong></u></center></h3>
    <p>YLD (I CAN) launches its Official Website on the Monday, 20th February 2018... <i class="blink" style="left:80%; color:#fc0c04; font-family:Monospace;">New</i></p><hr>

    <p><!--/////// News updates and articles will go in here...////--><a href="#" target="_blank" style="color:blue; font-size:12px; "><h6><!--Read More...--></h6></a></p>
    <div>
      <!--////Home page video section starts here..-->
      <iframe width="100%" height="100%" src="http://www.youtube.com/embed/7jFfNwq-fPw" frameborder="5" allowfullscreen></iframe>
      <!--////Home page video section End here..-->
    </div>
    <!--/////////////////////////////////////////////////////////////-->
    <!--/////////////Newsletter section starts here../////////////////-->
    <div>
            <form action="/action_page.php" style="width:100%">
            
              <div class="container" style="background-color:wheat">
              <h45class="Lcontainer"><center><u>Subscribe to our Newsletter</u></h5></center>
              <input type="text" placeholder="Email address" name="mail" required>
              </div>
            
              <div class="Lcontainer" style="width:85px; padding-left:5%;">
                <input type="submit" value="Subscribe">
              </div>
            </form>
    </div>
  </div>
</div>
    <!--/////////////Newsletter section ends here../////////////////-->
    <!--/////////////////////////////////////////////////////////////-->
<!--////////////////////==============================/////////////////////-->

<?php include('footer.php'); ?>