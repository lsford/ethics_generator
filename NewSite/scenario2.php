<?php session_start(); ?>
<?php 
$_SESSION["S1P1"]=$_POST["S1P1"];//S1P1 Variable
$_SESSION["S1P2"]=$_POST["S1P2"];//S1P2 Variable
$_SESSION["S1P3"]=$_POST["S1P3"];//S1P3 Variable
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
    <script src="scenarios copy.js"></script>
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
    <form method="POST" action="scenario3.php">
      <!--Scenario 2 Part 1-->
    <div id="scenario4">
        <p class="survey-paragraph">Six months ago, an individual suffered a major stroke which resulted in them entering a vegetative state and being cared for by the hospital. In that time, the patient has received numerous treatments from the hospital, including providing nutrition through a feeding tube, providing sensory stimulation, as well as offering periods of meaningful activity such as visits from family members or listening to music. An artificial intelligence has analysed the information provided and produce two decisions:  </p>
        <input type="radio" id="scenario2-part1-utilitarian" name="S2P1" value="S2P1-UTILITARIAN" required>
          <label class="scenario-option" for="scenario2-part1-utilitarian">Data analysed by the artificial intelligence, on individuals in similar situations to the patient, shows that the likelihood of the patient recovering from the vegetative state is less than 5%. The artificial intelligence has decided it would be better to save vital hospital resources and withdraw nutritional support, causing the patient to eventually die  </label><br>
        <input type="radio" id="scenario2-part1-deontology" name="S2P1" value="S2P1-DEONTOLOGY">
          <label class="scenario-option" for="scenario2-part1-deontology">Data analysed by the artificial intelligence, on individuals in similar situations to the patient, shows that the likelihood of the patient recovering from the vegetative state is less than 5%. The artificial intelligence has decided that the patient should continue to be treated by the hospital until they are declared brain dead or recover, even though the patient’s chance of recovery decreases each month</label><br>
    </div>
      <div>
        <button id="s2p1-button" class="confirm-button" " onclick="s2p1Lock()">Confirm Choice</button>
      </div>
      <!--Scenario 2 Part 2-->
      <div id="scenario5" style="display: none;">
        <p class="survey-paragraph">It is in-fact your mother who has suffered a major stroke which resulted in her entering a vegetative state and being cared for by your local hospital over the previous six months. The local hospital has contacted you because an artificial intelligence has analysed the information provided and produced two decisions regarding your mother’s future care:  </p>
        <input type="radio" id="scenario2-part2-utilitarian" name="S2P2" value="S2P2-UTILITARIAN" required>
        <label class="scenario-option" for="scenario2-part2-utilitarian">The artificial intelligence has decided it would be better to save vital hospital resources and withdraw nutritional support, causing your mother to eventually die </label><br>
        <input type="radio" id="scenario2-part2-deontology" name="S2P2" value="S2P2-DEONTOLOGY">
        <label class="scenario-option" for="scenario2-part2-deontology">The artificial intelligence has decided that your mother should continue to be treated by the hospital until they are declared brain dead or recover, even though your mother’s chance of recovery decreases each month</label><br>
      </div>
      <div>
        <button id="s2p2-button" class="confirm-button" style="display: none;" onclick="s2p2Lock()">Confirm Choice</button>
      </div>
      <!--Scenario 2 Part 3-->
      <div id="scenario6" style="display: none;">
        <P class="survey-paragraph">Built into the artificial intelligence is the ability to provide an explanation on how it made its decision. You would like the artificial intelligence to explain why it has decided to withdraw nutritional support from your mother. Please select the explanation that you feel is the most appropriate and can understand: </P>
        <input type="radio" id="scenario2-part3-detailed" name="S2P3" value="S2P3-DETAILED" onclick="submitScenarios2()" required></input>
          <label class="scenario-option" for="scenario2-part3-detailed" onclick="submitScenarios2()">Because your mother’s organs are not able to function on their own, the likelihood of recovery is low, and the life-sustaining treatment is prolonging the dying process. Therefore, treatment should be withdrawn from your mother to allow her to die peacefully, and let others benefit from resources that would have been used to keep treating her</label><br>
        <input type="radio" id="scenario2-part3-simple" name="S2P3" value="S2P3-SIMPLE" onclick="submitScenarios2()">
          <label class="scenario-option" for="scenario2-part3-simple" onclick="submitScenarios2()">Your mother still has a chance of recovery so nutritional support should not be withdrawn</label><br>
      </div>
      <div>
      <button class="start-button" id="s2-submit" style="display: none;">Next Page</button>
      </div>
</form>
    </div>
</main>
</body>
</html>