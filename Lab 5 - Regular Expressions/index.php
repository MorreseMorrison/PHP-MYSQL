<?php
// <!--- LAB 5 Version 10/9/2021 --->
// <!--- Completed on 10/9/2021 --->
//10/5/2021 - set default value of variables for initial page load (Validation)
if(!isset($fnameError)) {$fnameError = '';}
if(!isset($lnameError)) {$lnameError = '';}
if(!isset($emailError)) {$emailError = '';}
if(!isset($radioExample)) { $radioExample = '';}


?>
<!DOCTYPE html>
<html>
    <head>
        <title>Alien Abduction Form</title>
        <style>
          /* The following CSS Lines up Each Text Box Question */
          div {
            margin-bottom: 10px;
          }
          label {
            display: inline-block;
            /* Width is Equal to 215px To Make Room For "*" In The Email Label 
            If you Want To Add More Text Make The px Value Larger*/
            width: 215px;
          }
        </style>
        </head>
<body>

<h2>Aliens Abducted Me - Report an Abduction</h2>

<p>Share your story of alien abduction:<p>

  <!--- REQUIRED FIELD MESSAGES --->
  <p style="color:red;">* Required Fields!</p>

  <!--- If $fname is empty print Red $fnameError Message --->
  <p style="color:red;"><?php print $fnameError; ?></p>
  <p style="color:red;"><?php print $lnameError; ?></p>
  <p style="color:red;"><?php print $emailError; ?></p>
  <p style="color:red;"><?php print $radioExampleError; ?></p>




 <!--- Form Creation. PHP script Is In The Directory. PHP Script
  Is Named "index.php"---> 
  <form action="report.php"
        method="post"
        id="index">
  <!--- 10/5/2021 ID added "index"---> 

  <label for="fname"><b>* First name:</b></label>
  <input type="text" id="fname" name="fname" value="<?php print $fname; ?>" placeholder="First Name"><br>
  <!---10/5/2021 Print Error Message (Validation)--->
 
  <label for="lname"><b>* Last name:</b></label>
  <input type="text" id="lname" name="lname" value="<?php print $lname; ?>" placeholder="Last Name" ><br>

  <!-- 10/2/2021 Changed "Type" to Email-->
  <label for="email"><b>* What is your email address?</b></label>
  <input type="email" id="email" name="email" value="<?php print $email; ?>" placeholder="Email"><br>

  <label for="when"><b>When did it happen?</b></label>
  <input type="date" id="when" name="when" value="" placeholder="MM/DD/YYYY" ><br>

  <!-- 10/2/2021 Changed "Type" to Date-->
  <label for="long"><b>How long were you gone?</b></label>
  <input type="text" id="long" name="long" value="" placeholder="Hours, Days, Years?"><br>

  <!-- 10/2/2021 Changed "Type" to Number-->
  <label for="how"><b>How many did you see?</b></label>
  <input type="number" id="how" name="how" value="" placeholder="Enter a number"><br>

  <label for="description"><b>Describe them:</b></label>
  <input type="text" id="description" name="description" value="" placeholder="What did they look like?"><br>

  <label for="what"><b>What did they do to you?</b></label>
  <input type="text" id="what" name="what" value="" placeholder="Describe what they did"><br>

  <div class="col-75">
  </div>

  <p><b>*Have you seen my dog Fluffly?</b></p>

  <!--- Created Two Radio Buttons. Same name but different ID's. This Way Both 
  Radio Buttons can be selected. ---> 
  <!--- Created an Array "confirmation[]" for both Radio Buttons.
    Corresponds With The PHP Script. ---> 
  <!--- 10/9/2021 Changed Label Radio name to "radioExample" from "confirmation[]"
  In Order For NULL Logic In The PHP Script. --->
  <label>
    <input type="radio" id="yes" name="radioExample" value="yes">Yes
  </label>

  <label>
    <input type="radio" id="no" name="radioExample" value="no">No
  </label>
  

          
  <br>
  <br>

 <!--- Utilized Area Text Box. ---> 
  <label for="add"><b>Anything else you want to add?</b></label>
  <textarea id="add" name="add"  style="height:25px" placeholder="Your comments..."></textarea>
  <br>
  <br>

<img src="fluffy.jpg" alt="Fluffy">



 <!--- Created Two Buttons. Button with name "submit" submits the form
  Button with name "rese" clears the form completely.---> 
  <input type="submit" name="submit" id="submit" value="Report Abduction">
  <input type ="reset" name="reset" id="reset" value="Clear Form">


</form> 



</body>
</html>
