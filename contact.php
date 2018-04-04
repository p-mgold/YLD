<?php include('header.php'); ?>
<!--///////////////////////////////////////////////////////////////////////////////////-->
<!--//////////////goals section starts here..///////////-->
<br>
<div class="col-container">
  <div class="col" style="text-align:justify;">
    
  <!--///////////////////////////////////////////////////////////////////////////////////-->
  
      <div class="container" style="width:100%">
          <form action="action_page.php" >
            <h2>Need help?<br>Send your questions to our help desk..</h2>
        
            <label for="fname">Full Name</label><br>
            <input type="text" id="fname" name="full name" placeholder="Your full name.."><br>
        
            <label for="lname">Email</label><br>
            <input type="email" id="email" name="email" placeholder="Your E-mail Address.."><br>
        
            <label for="country">Country</label><br>
            <select id="country" name="country">
              <option value="nigeria">Nigeria</option>
              <option value="botswana">Botswana</option>
              <option value="cameroon">Cameroon</option>
              <option value="gambia">Gambia</option>
              <option value="ghana">Ghana</option>
              <option value="kenya">Kenya</option>
              <option value="lesotho">Lesotho</option>
              <option value="liberia">Liberia</option>
              <option value="malawi">Malawi</option>
              <option value="namibia">Namibia</option>
              <option value="nigeria">Nigeria</option>
              <option value="rwanda">Rwanda</option>
              <option value="sierra-leone">Sierra Leone</option>
              <option value="sa">South Africa</option>
              <option value="swaziland">Swaziland</option>
              <option value="uganda">Uganda</option>
              <option value="zambia">Zambia</option>
              <option value="zimbabwe">Zimbabwe</option>
            </select><br>
        
            <label for="lname">Subject</label><br>
            <input type="text" id="subject" name="subject" placeholder="Subject.."><br>
        
            <label for="subject">Message</label><br>
            <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea><br>
        
            <center><input type="submit" value="Submit" style="width:10%;"></center>
        
          </form>
        </div>
       
        </div>

        <div>
          
        </div>
        
  </div>
</div>
<!--////////////////////////////////end of goals section../////////////////////////////-->
<!--///////////////////////////////////////////////////////////////////////////////////-->
<!--//////////////==========================================================///////////-->
<?php include('footer.php'); ?>