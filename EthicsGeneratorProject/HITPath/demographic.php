<?php session_start(); ?>
<?php 
$_SESSION["T10"]=$_POST["T10"];//Trust 1 Variable
$_SESSION["T11"]=$_POST["T11"];//Trust 2 Variable
$_SESSION["T12"]=$_POST["T12"];//Trust 3 Variable
$_SESSION["T13"]=$_POST["T13"];//Trust 4 Variable
$_SESSION["T14"]=$_POST["T14"];//Trust 5 Variable
$_SESSION["T15"]=$_POST["T15"];//Trust 6 Variable

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ethics Generator Survey</title>
    <link rel="icon" href="../2890562-artificialintelligence11_101977.ico" />
    <meta name="viewport" content="width=device.width, initial-scale=1" />
    <link rel="stylesheet" href="../style.css" />   
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <script src="scenarios.js"></script>
    <body id="cdss-body">
        <header>
            <nav class="navigation-index">
               <a href="../index.html"><h1 id="title">Ethics Explored</h1></a>
              <!--<img src="Logo1.png" height="50" width="">-->
               <ul>
                <li><a href="../index.html">Home</a></li>
          <li><a href="../scenarios.html">Scenarios</a></li>
          <li><a href="../about.html">About</a></li>
              </ul>
              <div class="clear"></div>
            </nav>
          </header>

</head>
<main>
<div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
  </div>
  <div>
      <h3 id="title-cdss">Health Information Technology Survey</h3>
      <p id="description">Please enter your demographic information. This information cannot be used to identify you, and your repsonse will be anonymous. Please click <b>Submit</b> to submit your results. </p> 
    </div>
  <h3 id="title-cdss">HIT Survey</h3>
<div id="cdss-container">
    <form method="POST" action="scenario_results.php">
    <div id="submit-scenarios">
      <!--Age-->
      <div>
        <p class="survey-paragraph">Please select your age</p>
        <input type="radio" id="0-17" name="AGE" value="0-17" required>
          <label class="scenario-option" for="0-17">Under 18</label>
        <input type="radio" id="18-21" name="AGE" value="18-21">
          <label class="scenario-option" for="18-21">18-21</label>
        <input type="radio" id="22-30" name="AGE" value="22-30">
          <label class="scenario-option" for="22-30">22-30</label>
        <input type="radio" id="31-40" name="AGE" value="31-40">
          <label class="scenario-option" for="31-40">31-40</label>
        <input type="radio" id="41-50" name="AGE" value="41-50">
          <label class="scenario-option" for="41-50">41-50</label>
        <input type="radio" id="51-60" name="AGE" value="51-60">
          <label class="scenario-option" for="51-60">51-60</label>
        <input type="radio"id="61<" name="AGE" value="61-99">
          <label class="scenario-option" for="61<">Over 60</label>
      </div>
      <div id="line"></div>
      <!--Gender-->
      <div>
        <p class="survey-paragraph">Please select your gender</p>
        <select name="gender" id="gender" required>
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="other">Other</option>
        </select>
      </div>
      <div id="line"></div>
      <!--Education-->
      <div>
        <p class="survey-paragraph">Please select your highest acheived level of education</p>
        <select name="education" id="education" required>
        <option value="none">None</option>
          <option value="a-level">A-Level</option>
          <option value="bachelor">Bachelor's Degree</option>
          <option value="postgraduate">Postgraduate Qualification</option>
        </select>
      </div>
      <div>
      <div>
      <input type="submit" class="start-button" type="submit"></input>
      </div>
</form>
    </div>
</main>
</body>
</html>