<?php

include_once 'dbconfig.php';

include 'header.html';

?>
<div class="form_container"> 

  <div class="certification_test_container" id="testarea">
    <section class="screen_container">
      
      <div id="certification_userfields_container">
        <p>&nbsp;</p>
        <h2 style="text-align:center;">Please fill in your information to start:</h2>
        <div id="emailmessage" style="display:none;color:red;font-size:16px;text-align:center;">Your emails do not match.  Please confirm them and submit again. </div>
        <form class="form-class" id="process_user_processor" role="form" method="post" action="upload.php" enctype="multipart/form-data" >
          
            <div class="form-group">
              <label class="control-label" for="FirstName">First Name: </label>
              <input type="text" class="form-control" id="FirstName" name="FirstName" placeholder="First Name" required>
            </div>  
            <div class="form-group">
              <label class="control-label" for="LastName">Last Name: </label>
              <input type="text" class="form-control" id="LastName" name="LastName" placeholder="Last Name" required>
            </div>
          <div class="form-group">
            <label class="control-label" for="HomeAddress1">Address 1: </label>
            <input type="text" class="form-control" id="HomeAddress1" name="HomeAddress1"  placeholder="Address 1" required>
          </div>
          <div class="form-group">
            <label class="control-label" for="HomeAddress2">Address 2: </label>
            <input type="text" class="form-control" id="HomeAddress2" name="HomeAddress2"  placeholder="Address 2" required>
          </div>
          <div class="form-group">
            <label class="control-label" for="HomeCity">City: </label>
            <input type="text" class="form-control" id="HomeCity" name="HomeCity"  placeholder="City" required>
          </div>
          <div class="form-group required">
            <label class="control-label" for="HomeState">State: </label>
            <select class="form-control" name="HomeState" id="HomeState" required >
              <option value="AL">Alabama</option>
              <option value="AK">Alaska</option>
              <option value="AZ">Arizona</option>
              <option value="AR">Arkansas</option>
              <option value="CA">California</option>
              <option value="CO">Colorado</option>
              <option value="CT">Connecticut</option>
              <option value="DE">Delaware</option>
              <option value="DC">District Of Columbia</option>
              <option value="FL">Florida</option>
              <option value="GA">Georgia</option>
              <option value="HI">Hawaii</option>
              <option value="ID">Idaho</option>
              <option value="IL">Illinois</option>
              <option value="IN">Indiana</option>
              <option value="IA">Iowa</option>
              <option value="KS">Kansas</option>
              <option value="KY">Kentucky</option>
              <option value="LA">Louisiana</option>
              <option value="ME">Maine</option>
              <option value="MD">Maryland</option>
              <option value="MA">Massachusetts</option>
              <option value="MI">Michigan</option>
              <option value="MN">Minnesota</option>
              <option value="MS">Mississippi</option>
              <option value="MO">Missouri</option>
              <option value="MT">Montana</option>
              <option value="NE">Nebraska</option>
              <option value="NV">Nevada</option>
              <option value="NH">New Hampshire</option>
              <option value="NJ">New Jersey</option>
              <option value="NM">New Mexico</option>
              <option value="NY">New York</option>
              <option value="NC">North Carolina</option>
              <option value="ND">North Dakota</option>
              <option value="OH">Ohio</option>
              <option value="OK">Oklahoma</option>
              <option value="OR">Oregon</option>
              <option value="PA">Pennsylvania</option>
              <option value="RI">Rhode Island</option>
              <option value="SC">South Carolina</option>
              <option value="SD">South Dakota</option>
              <option value="TN">Tennessee</option>
              <option value="TX">Texas</option>
              <option value="UT">Utah</option>
              <option value="VT">Vermont</option>
              <option value="VA">Virginia</option>
              <option value="WA">Washington</option>
              <option value="WV">West Virginia</option>
              <option value="WI">Wisconsin</option>
              <option value="WY">Wyoming</option>              
            </select>
          </div>  
          <div class="form-group">
            <label class="control-label" for="HomeZip">Home Zip:</label>
            <input type="text" class="form-control" id="HomeZip" name="HomeZip" placeholder="Zip (ex. 12345)" pattern=".{5,}" required>
          </div>
          <div class="form-group">
            <label class="control-label" for="HomePhone">Phone: </label>
            <input type="text" class="form-control" id="HomePhone" name="HomePhone" pattern=".{10,}"  placeholder="Phone (ex. 123-456-7890)" required>
          </div>
          <div class="form-group">
            <label class="control-label" for="UserEmail">Email: </label>
            <input type="email" class="form-control" id="UserEmail" name="UserEmail"  placeholder="Email" required>
          </div>
          <div class="form-group">
            <label class="control-label" for="UserEmailConfirm">Confirm Email: </label>
            <input type="email" class="form-control" id="UserEmailConfirm" name="UserEmailConfirm"  placeholder="Confirm Email" onblur="confirmEmail()" required>
          </div>
          
          <div class="form-group">
            <label class="control-label" for="CompanyInfo">Company Info: </label>
            <input type="textarea" class="form-control" id="CompanyInfo" name="CompanyInfo" placeholder="Company Information" required>
          </div>
          <div class="form-group">
            <label class="control-label" for="CompanyAddress">Company Address: </label>
            <input type="text" class="form-control" id="CompanyAddress" name="CompanyAddress" placeholder="Address (ex. 123 Any Street)" pattern=".{6,}" required>
          </div>
          <div class="form-group">
            <label class="control-label" for="CompanyCity">Company City: </label>
            <input type="text" class="form-control" id="CompanyCity" name="CompanyCity" placeholder="Company City (ex. Anytown)" pattern=".{2,}" required>
          </div>

          <div class="form-group required">
            <label class="control-label" for="CompanyState">Company State: </label>
            <select class="form-control" name="CompanyState" id="CompanyState" required >
              <option value="AL">Alabama</option>
              <option value="AK">Alaska</option>
              <option value="AZ">Arizona</option>
              <option value="AR">Arkansas</option>
              <option value="CA">California</option>
              <option value="CO">Colorado</option>
              <option value="CT">Connecticut</option>
              <option value="DE">Delaware</option>
              <option value="DC">District Of Columbia</option>
              <option value="FL">Florida</option>
              <option value="GA">Georgia</option>
              <option value="HI">Hawaii</option>
              <option value="ID">Idaho</option>
              <option value="IL">Illinois</option>
              <option value="IN">Indiana</option>
              <option value="IA">Iowa</option>
              <option value="KS">Kansas</option>
              <option value="KY">Kentucky</option>
              <option value="LA">Louisiana</option>
              <option value="ME">Maine</option>
              <option value="MD">Maryland</option>
              <option value="MA">Massachusetts</option>
              <option value="MI">Michigan</option>
              <option value="MN">Minnesota</option>
              <option value="MS">Mississippi</option>
              <option value="MO">Missouri</option>
              <option value="MT">Montana</option>
              <option value="NE">Nebraska</option>
              <option value="NV">Nevada</option>
              <option value="NH">New Hampshire</option>
              <option value="NJ">New Jersey</option>
              <option value="NM">New Mexico</option>
              <option value="NY">New York</option>
              <option value="NC">North Carolina</option>
              <option value="ND">North Dakota</option>
              <option value="OH">Ohio</option>
              <option value="OK">Oklahoma</option>
              <option value="OR">Oregon</option>
              <option value="PA">Pennsylvania</option>
              <option value="RI">Rhode Island</option>
              <option value="SC">South Carolina</option>
              <option value="SD">South Dakota</option>
              <option value="TN">Tennessee</option>
              <option value="TX">Texas</option>
              <option value="UT">Utah</option>
              <option value="VT">Vermont</option>
              <option value="VA">Virginia</option>
              <option value="WA">Washington</option>
              <option value="WV">West Virginia</option>
              <option value="WI">Wisconsin</option>
              <option value="WY">Wyoming</option>              
            </select>
          </div>

          <div class="form-group">
            <label class="control-label" for="CompanyZip">Company Zip:</label>
            <input type="text" class="form-control" id="CompanyZip" name="CompanyZip" placeholder="Zip (ex. 12345)" pattern=".{5,}" required>
          </div>

          <div class="form-group">
            <label class="control-label" for="CompanyPhone">Company Phone: </label>
            <input type="text" class="form-control" id="CompanyPhone" name="CompanyPhone" pattern=".{10,}"  placeholder="Phone (ex. 123-456-7890)" required>
          </div>

          <div class="form-group">
            <label class="control-label" for="InvoiceAttach">Attach Invoice </label>
            <input type="file" name="file" id="file" accept="application/pdf" >
          </div>

          <!-- Google ReCaptcha API -->
          <div class="form-group">
            <div class="g-recaptcha" data-sitekey="6Lf6ugkUAAAAAGE25xfzpcMfxEMRkI5ObklQqghJ"></div>
          </div>

          <button type="submit" name="btn-upload">upload</button>

          <!-- 
          <input id="submit" name="Submit" type="submit" value="Submit" class="btn btn-primary question_button">
          -->
        </form>
      </div>
    </section>
  </div>
</div>

<script type="text/javascript">
    function confirmEmail() {
        var email = document.getElementById("UserEmail").value;
        var confemail = document.getElementById("UserEmailConfirm").value;
        var emailmessage = document.getElementById("emailmessage");
        var submitbutton = document.getElementById("submit");
        if(email != confemail) {
            submitbutton.disabled = true;
            emailmessage.style.display = "block";
        } else {
          submitbutton.disabled = false;
          emailmessage.style.display = "none";
        }
    }
</script>

</body>
</html>