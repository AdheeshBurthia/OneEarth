<?php
    session_start();
    $_SESSION["home"] =false;
    $_SESSION["aboutus"] =false;
    $_SESSION["contactus"] =true;
    $_SESSION["projects"] =false;
    require 'includes/navbar.php';
  ?>
  
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JOIN-COMMUNITY | OneEarth</title>

    <link rel="Stylesheet" href="/css/JoinCommunityCss.css">
</head>
<body>
<form action="SEND ADDRESS" id="ft-form" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
  <fieldset>
    <legend>Job</legend>
    <label>
      My Current job is *
      <input type="text" name="Current job" required> 
    </label>
  </fieldset>
  <fieldset>
    <legend>Personal data</legend>
    <div class="two-cols">
      <label>
        First name *
        <input type="text" name="First name" required>
      </label>
      <label>
        Family name *
        <input type="text" name="Family name" required>
      </label>
    </div>
    <div class="two-cols">
      <label>
        Citizenship
        <input type="text" name="Citizenship">
      </label>
      <label>
        Date of birth
        <input type="date" name="Date of birth">
      </label>
    </div>
    <div class="two-cols">
    <label>
      Address
      <input type="text" name="Address">
    </label>
      <!--<label>-->
      <!--  ZIP Code-->
      <!--  <input type="text" name="ZIP">-->
      <!--</label>-->
      <label>
        City
        <input type="text" name="City">
      </label>
    </div>
    <div class="two-cols">
      <label>
        Phone *
        <input type="tel" name="Phone" required>
      </label>
      <label>
        Email address *
        <input type="email" name="Email" required>
      </label>
    </div>
  </fieldset>
  <fieldset>
    <legend>Application documents</legend>
    <input type="hidden" name="MAX_FILE_SIZE" value="10485760">
    <div class="two-cols">
      <label>
        Morality form
        <input type="file" name="Morality form" accept=".doc,.docx,.pdf">
      </label>
      <label>
        Personal Picture
        <input type="file" name="my profile picture" accept=".doc,.docx,.pdf">
      </label>
    </div>
    <p>Possible file types: DOC, PDF. Maximum file size: 10 MB.</p>
  </fieldset>
  <div class="btns">
    <input type="text" name="_gotcha" value="" style="display:none;">
    <input type="submit" value="Submit application">
  </div>
</form>
</body>
</html>