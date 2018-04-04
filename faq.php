<?php include('header.php'); ?>
<!--////////////////////////////////////-->
<!--////FAQ secton starts here../////-->
<br>
<br>
<center><h2>FREQUENTLY ASKED QUESTIONS</h2></center>

<button class="collapsible">What is Development?</button>
<div class="content">
  <p>A multitude of meaning is attached to the idea of development. The term is complex, contested, ambiguous and elusive. However, in the simplest terms, developmentcan be defined as bringing about social change that allow people to achieve their human potentials.</p><p>Development may also be seen as a process that creates growth, progress, possitive change or the addition of physical, economical, environmental, social and demographical components.</p>
</div>
<button class="collapsible">What is Leadership?</button>
<div class="content">
  <p>A simple definition is that leadership is the art of motivating a group of people to act towards achieving a common goal. The leadership definition captures the essentials of being able to inspires others and being prepared to do so.</p>
</div>
<button class="collapsible">What is effective leadership?</button>
<div class="content">
  <p><p>Effective leadership is based upon the idea (whether original or borrowed), but wont happen unless those ideas can be communicated to others in a way that engages them enough to act as the leadership wants them to act. Put even more simply, the leader is the inspiration and director of the action. he or she is the person in the group that possesses the combination of personality and leadership skills that make others wants to follow his or her direction.</p></p>
</div>
<button class="collapsible">Are Leaders Born or Made?</button>
<div class="content">
  <p>Some persons are said to be born to lead, while others are self-made leaders. It is important to note that even born leaders needs proper leadership development process to emerge as good leader. These can be seen in leadership by inheritance i.e Monarchy.</p>
</div>
<button class="collapsible">What is YLD (I CAN)?</button>
<div class="content">
  <p>YLD (I CAN) Means Youth Leadership Development (I CAN). This is a platform that is concerned with Youth Development and Youth Leadership, as Youth can only emerge into Leadership with proper level of Development, which comes from orientation, concious Self Development, Government factor and Traditional factors.</p>
</div>
<button class="collapsible">What are the concept of YLD (I CAN)</button>
<div class="content">
  <p>The concept and practice of YLD (I CAN) grew from the dissatisfaction of the predominant view that has under estimated the true capacity of young people by focusing on their deficits rather than their development potentials.</p><p>Encouraging the possitive development of youth can help to lessen the likelihood of youths being involved in crime and other socio problems arising from poor Adolescent development and negative peer pressure. Easing a healthy transition of youths into leaders</p>
</div>
<button class="collapsible">What are the differences between developed and under-developed youths?</button>
<div class="content">
  <p>Every man is said to be born equal. These is because, the brain of every new born is at tabula rasa (empty slate). The level of development differentiate and stratify people into different class of life.</p><p><b>Developed Youths</b> Understand the purpose of their existence as well as their strengths and abilities. They accept their flux and weaknesses and continue to work on themselves to become a better person, worthy of emulation.</p><p><b>under-developed Youths</b> feel perfect, give excuses for failure, points accusing fingers at every one else but themselves, for the misfortune they face in life.</p><p>It is important to note, that development starts from the mind and that is why, concious and self development remains the most effective resource of youth development.</p>
</div>
<button class="collapsible">What are the visions of YLD (I CAN)?</button>
<div class="content">
  <p>imagine a word improved, even transformed by the next generation. Thats our vision.</p><p>We beleive every young adult is capable of leadership because being a leader means first; leading yourself, and thereby; learning to successfuly take on opportunities challenges in life. The emerging generation simply needs to be shown how.</p>
</div>
<button class="collapsible">What are the Goals YLD (I CAN)?</button>
<div class="content">
  <p>The goal of youth leadership development perspective is to promot positive outcome. These idea is in contrast to a perspective that focuses on purnishment and the idea that adolescents are broken.</p><p>Youth Leadership Development program technique will help youth determine what they really want, access their energy to get their, put a plan in place and then execute to attain their goals. It is a straight forward result focused process that put you in charge. </p><p>In summary, Youth Leadership development will lead to corporation dynamics between government and youths, as both the youth and government then have a common goal which is national development.</p>
</div>
<button class="collapsible">What are the resources of development?</button>
<div class="content">
  <p>There are three basic resource we need in the development of youths into leaders. These are:-
    <ul>
      <li>Conciouse Self Development</li>
      <li>Government Factor</li>
      <li>Traditional / Cultural Factor</li>
  </p>
</div>
<button class="collapsible">What are the features of YLD (I CAN) Workshop?</button>
<div class="content">
  <p>YLD (ICAN) offers special training section for youths. These are:-
    <ul>
      <li>Enterprenuership</li>
      <li>Information Communication Technology (ICT)</li>
      <li>Project Management</li>
      <li>Peace Building</li>
      <li>Mentorship Program</li>
  </p>
</div>
<button class="collapsible">How can I have first hand information on Job opportunities?</button>
<div class="content">
  <p>YLD (I CAN) website is there for you to get first hand information on Job opportunities that are available..</p>
</div>


<!--==============================================-->
<!--Starts of script section for the faq section-->
<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
</script>
<!--End of script section for the faq section-->
<!--==============================================-->
<!--////////////////End of faq////////////////////////// -->
<!--============================================================================-->
<!--///////////////Scroll to the top Section Starts Here../////////////////-->
<button onclick="topFunction()" id="myBtn" title="Go to top" >Top</button>
<!--////////////////////==============================/////////////////////-->
<!--////////////////////==============================/////////////////////-->
<?php include('footer.php');