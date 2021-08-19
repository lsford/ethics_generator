<?php session_start(); ?>
<?php 
$_SESSION["T5"]=$_POST["T5"];//Likert 4 Variable
$_SESSION["S5P1"]=$_POST["S5P1"];//S4P1 Variable
$_SESSION["S5P2"]=$_POST["S5P2"];//S4P2 Variable
$_SESSION["variable9"]=$_POST["variable9"];//Random variable 9
$_SESSION["variable10"]=$_POST["variable10"];//Random variable 10

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
<div id="cdss-container">
    <form method="POST" action="trust.php">
    <div id="submit-scenarios">
      <!--Trust Questions-->
      <!--Likert 1-->
      <div id="ai-likert1">
          <p class="survey-paragraph">Do you think artificial intelligence should be used in healthcare?</p>
          <div>
           <input type="radio" id="trust6-1" name="T6" value="T6-1" required>
             <label class="scenario-option" for="trust6-1">STRONGLY AGREE</label>
           <input type="radio" id="trust6-2" name="T6" value="T6-2">
             <label class="scenario-option" for="trust6-2">AGREE</label>
           <input type="radio" id="trust6-3" name="T6" value="T6-3">
             <label class="scenario-option" for="trust6-3">NEUTRAL</label>
           <input type="radio" id="trust6-4" name="T6" value="T6-4">
             <label class="scenario-option" for="trust6-4">DISAGREE</label>
           <input type="radio" id="trust6-5" name="T6" value="T6-5">
            <label class="scenario-option" for="trust6-5">STRONGLY DISAGREE</label><br>
          </div>
        </div>  
      <div>
      <!--Likert 2-->
      <div id="ai-likert2">
          <p class="survey-paragraph">Do you think artificial intelligence should be programmed with ethical theories, such as utilitarianism or deontology, to help make fair decisions? </p>
          <div>
           <input type="radio" id="trust7-1" name="T7" value="T7-1" required>
             <label class="scenario-option" for="trust7-1">STRONGLY AGREE</label>
           <input type="radio" id="trust7-2" name="T7" value="T7-2">
             <label class="scenario-option" for="trust7-2">AGREE</label>
           <input type="radio" id="trust7-3" name="T7" value="T7-3">
             <label class="scenario-option" for="trust7-3">NEUTRAL</label>
           <input type="radio" id="trust7-4" name="T7" value="T7-4">
             <label class="scenario-option" for="trust7-4">DISAGREE</label>
           <input type="radio" id="trust7-5" name="T7" value="T7-5">
            <label class="scenario-option" for="trust7-5">STRONGLY DISAGREE</label><br>
          </div>
        </div>  
      <div>
      <!--Likert 3-->
      <div id="ai-likert3">
          <p class="survey-paragraph">Do you think artificial intelligence should be used alongside doctors and nurses? </p>
          <div>
           <input type="radio" id="trust8-1" name="T8" value="T8-1" required>
             <label class="scenario-option" for="trust8-1">STRONGLY AGREE</label>
           <input type="radio" id="trust8-2" name="T8" value="T8-2">
             <label class="scenario-option" for="trust8-2">AGREE</label>
           <input type="radio" id="trust8-3" name="T8" value="T8-3">
             <label class="scenario-option" for="trust8-3">NEUTRAL</label>
           <input type="radio" id="trust8-4" name="T8" value="T8-4">
             <label class="scenario-option" for="trust8-4">DISAGREE</label>
           <input type="radio" id="trust8-5" name="T8" value="T8-5">
            <label class="scenario-option" for="trust8-5">STRONGLY DISAGREE</label><br>
          </div>
        </div>  
        <!--Likert 4-->
      <div id="ai-likert4">
          <p class="survey-paragraph">Do you think artificial intelligence should make decisions without supervision?  </p>
          <div>
           <input type="radio" id="trust9-1" name="T9" value="T9-1" required>
             <label class="scenario-option" for="trust9-1">STRONGLY AGREE</label>
           <input type="radio" id="trust9-2" name="T9" value="T9-2">
             <label class="scenario-option" for="trust9-2">AGREE</label>
           <input type="radio" id="trust9-3" name="T9" value="T9-3">
             <label class="scenario-option" for="trust9-3">NEUTRAL</label>
           <input type="radio" id="trust9-4" name="T9" value="T9-4">
             <label class="scenario-option" for="trust9-4">DISAGREE</label>
           <input type="radio" id="trust9-5" name="T9" value="T9-5">
            <label class="scenario-option" for="trust9-5">STRONGLY DISAGREE</label><br>
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