<?php session_start(); ?>
<?php 

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
    <script src="function.js"></script>
    <body id="cdss-body">
        <header>
            <nav class="navigation-index">
               <a href="index.html"><h1 id="title">Ethics Explored</h1></a>
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
<form method="POST" action="#">
        <div id="likert1">
          <p class="survey-paragraph">An action is always morally correct if the consequences produce more happiness than harm</p>
          <div>
           <input class="likert" type="radio" id="OPTION-1" name="L1" value="1" required>
             <label class="scenario-option" for="OPTION-1">AGREE</label>
           <input class="likert" type="radio" id="OPTION-2" name="L1" value="0">
             <label class="scenario-option" for="OPTION-2">DISAGREE</label><br>
          </div>
        </div> 
      <!--Likert 2-->
      <div id="likert2">
        <p class="survey-paragraph">Rules should always be followed, even if breaking the rules could produce more happiness</p>
        <div>
         <input class="likert" type="radio" id="OPTION-3" name="L2" value="1" required>
           <label class="scenario-option" for="OPTION-3">AGREE</label>
         <input class="likert" type="radio" id="OPTION-4" name="L2" value="0">
           <label class="scenario-option" for="OPTION-4">DISAGREE</label><br>
        </div>
       </div>
      <!--Likert 3-->
      <div id="likert3">
        <p class="survey-paragraph">The consequences of an action are irrelevant when deciding if the action was morally right</p>
        <div>
         <input class="likert" type="radio" id="OPTION-5" name="L3" value="0" required>
           <label class="scenario-option" for="OPTION-5">AGREE</label>
         <input class="likert" type="radio" id="OPTION-6" name="L3" value="1">
           <label class="scenario-option" for="OPTION-6">DISAGREE</label><br>
        </div>
       </div>
       <input class="start-button" id="confirm" type="button" onclick="displayRadioValue()" style="display: block;" value="Confirm choice"><br>
    </form>    
    <div>
        <p class="survey-paragraph" id="target" style="display: none;"></p>
    </div>
    <div>
        <form action="deontology.php" method="POST">
            <button class="start-button" id="deontology" style="display: none;">Next Page</button>
            <input type="hidden" name="deontology" value="deontology-path">
        </form>
    </div>
    <div>
        <form action="utilitarian.php" method="POST">
            <button class="start-button" id="utilitarian" style="display: none;">Next Page</button>
            <input type="hidden" name="utilitarian" value="utilitarian-path">
        </form>
    </div>
</div>
</main>
</body>
</html>