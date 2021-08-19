<?php session_start(); ?>
<?php 
$_SESSION["T6"]=$_POST["T6"];//Likert 6 Variable
$_SESSION["T7"]=$_POST["T7"];//Likert 7 Variable
$_SESSION["T8"]=$_POST["T8"];//Likert 8 Variable
$_SESSION["T9"]=$_POST["T9"];//Likert 9 Variable

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>About the Ethics Generator</title>
    <link rel="icon" href="/2890562-artificialintelligence11_101977.ico" />
    <meta name="viewport" content="width=device.width, initial-scale=1" />
    <link rel="icon" href="2890562-artificialintelligence11_101977.ico" />
    <link rel="stylesheet" href="style.css" />   
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <script src="scenarios.js"></script>
    <body id="cdss-body">
        <header>
            <nav class="navigation-index">
               <a href="index.html"><h1 id="title">Ethics Explored</h1></a>
              <!--<img src="Logo1.png" height="50" width="">-->
               <ul>
                <li><a href="index.html">Home</a></li>
          <li><a href="scenarios.html">Scenarios</a></li>
          <li><a href="about.html">About</a></li>
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
  <h3 id="title-cdss">HIT Survey</h3>
  <div>
      <p id="description">The following questions are about assigning blame when wrong decisions are made. For all these scenarios, imagine an artificial intelligence purposefully designed by a manufacturer to diagnose illness, being used in a hospital in unison with a doctor. </p>
      <p id="description">The doctor: a GP with 14 years of experience</p>
      <p id="description">The artificial intelligence: purpose-built diagnosis software, capable of learning from experience to improve its decision making</p>
      <p id="description">The manufacturer: an experienced artificial intelligence development firm</p>
    </div>
    
    <div id="line">
    </div>
  <p></p>
<div id="cdss-container">
    <form method="POST" action="demographic.php">
    <div id="submit-scenarios">
      <!--Trust Questions-->
      <!--Likert 1-->
      <div id="ai-likert1">
          <p class="survey-paragraph">If an artificial intelligence makes a wrong decision, who do you believe is the MOST to blame </p>
          <div>
           <input type="radio" id="trust10-1" name="T10" value="T10-1" required>
             <label class="scenario-option" for="trust10-1">The Artificial Intelligence</label>
           <input type="radio" id="trust10-2" name="T10" value="T10-2">
             <label class="scenario-option" for="trust10-2">The Doctor</label>
           <input type="radio" id="trust10-3" name="T10" value="T10-3">
             <label class="scenario-option" for="trust10-3">The Manufacturer of the Artificial Intelligence</label><br>
          </div>
        </div>  
      <div>
      <!--Likert 2-->
      <div id="ai-likert2">
          <p class="survey-paragraph">If an artificial intelligence makes a wrong decision, who do you believe is the LEAST to blame  </p>
          <div>
           <input type="radio" id="trust11-1" name="T11" value="T11-1" required>
             <label class="scenario-option" for="trust11-1">The Artificial Intelligence</label>
           <input type="radio" id="trust11-2" name="T11" value="T11-2">
             <label class="scenario-option" for="trust11-2">The Doctor</label>
           <input type="radio" id="trust11-3" name="T11" value="T11-3">
             <label class="scenario-option" for="trust11-3">The Manufacturer of the Artificial Intelligence</label><br>
          </div>
        </div>  
      <div>
      <!--Likert 3-->
      <div id="ai-likert3">
          <p class="survey-paragraph">Machine learning means artificial intelligence can learn from experiences and may make decisions it was never programmed to make. If an artificial intelligence makes a wrong decision, who do you believe is the MOST to blame </p>
          <div>
           <input type="radio" id="trust12-1" name="T12" value="T12-1" required>
             <label class="scenario-option" for="trust12-1">The Artificial Intelligence</label>
           <input type="radio" id="trust12-2" name="T12" value="T12-2">
             <label class="scenario-option" for="trust12-2">The Doctor</label>
           <input type="radio" id="trust12-3" name="T12" value="T12-3">
             <label class="scenario-option" for="trust12-3">The Manufacturer of the Artificial Intelligence</label><br>
          </div>
        </div>  
        <!--Likert 4-->
      <div id="ai-likert4">
          <p class="survey-paragraph">Machine learning means artificial intelligence can learn from experiences and may make decisions it was never programmed to make. If an artificial intelligence makes a wrong decision, who do you believe is the LEAST to blame   </p>
          <div>
           <input type="radio" id="trust13-1" name="T13" value="T13-1" required>
             <label class="scenario-option" for="trust13-1">The Artificial Intelligence</label>
           <input type="radio" id="trust13-2" name="T13" value="T13-2">
             <label class="scenario-option" for="trust13-2">The Doctor</label>
           <input type="radio" id="trust13-3" name="T13" value="T13-3">
             <label class="scenario-option" for="trust13-3">The Manufacturer of the Artificial Intelligence</label><br>
          </div>
      </div> 
      <!--Likert 5-->
      <div id="ai-likert5">
          <p class="survey-paragraph">If an artificial intelligence and a doctor both make the same wrong decision, who do you believe is the MOST to blame </p>
          <div>
           <input type="radio" id="trust14-1" name="T14" value="T14-1" required>
             <label class="scenario-option" for="trust14-1">The Artificial Intelligence</label>
           <input type="radio" id="trust14-2" name="T14" value="T14-2">
             <label class="scenario-option" for="trust14-2">The Doctor</label>
           <input type="radio" id="trust14-3" name="T14" value="T14-3">
             <label class="scenario-option" for="trust14-3">The Manufacturer of the Artificial Intelligence</label><br>
          </div>
      </div> 
      <!--Likert 6-->
      <div id="ai-likert6">
          <p class="survey-paragraph">If an artificial intelligence and a doctor both make the same wrong decision, who do you believe is the LEAST to blame </p>
          <div>
           <input type="radio" id="trust15-1" name="T15" value="T15-1" required>
             <label class="scenario-option" for="trust15-1">The Artificial Intelligence</label>
           <input type="radio" id="trust15-2" name="T15" value="T15-2">
             <label class="scenario-option" for="trust15-2">The Doctor</label>
           <input type="radio" id="trust15-3" name="T15" value="T15-3">
             <label class="scenario-option" for="trust15-3">The Manufacturer of the Artificial Intelligence</label><br>
          </div>
      </div> 
      <div>
      <input type="submit" class="start-button" type="submit"></input>
      </div>
</form>
    </div>
</main>
</body>
</html>