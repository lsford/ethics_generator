<?php session_start(); ?>
<?php

$scenario = Array(1,2,3,4,5); //Create array with scenario numbers

$_SESSION['scenario'] = $scenario; //Turn array into session variable to allow access across all pages

$scenarioNumber = $_SESSION['scenario'][array_rand($_SESSION['scenario'])]; //Generate a random scenario

include('connect.php'); //Database details
$conn = connect(); //Connect to the database

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
    <!--<script src="functions.js"></script>-->
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
    <h3 id="purpose">Healthcare Information Technology</h3>
  </div>

    <div>
      <p id="description">Here you will be presented with a series of questions regarding the use of autonomous artificial intelligence in healthcare. For some questions you will be shown a written description of a scenario, as well as the scenario outcomes. You are asked to select which of the two outcomes you prefer. The other questions ask you to rate how strongly you agree or disagree with a statement. </p>
      <p id="description">The first scenario is below, once you have clicked on the outcome you find preferable, please click <b>Confirm Choice</b>. This will lock in your answer, and show you the next scenario. Please press <b>Next Page</b> when you have finished answering a set of scenarios to move onto the next set. No knowledge of the topic is required to answer the questions. Please answer honestly.</p> 
    </div>
    
    <div id="line">
      <h3 id="title-cdss">HIT Survey</h3>
    </div>
       
      <div id="cdss-container">
        <form method="POST" action="scenario2.php">
          <!--Likert Question-->
        <div id="trust1">
          <p class="survey-paragraph">
          <?php $stmt = $conn->prepare("SELECT Content FROM LikertScenarios WHERE ScenarioNumber=:scenarioNumber;"); //Randomly likert scenario 1
            $stmt->execute(['scenarioNumber' => $scenarioNumber]);
            $LikertScenario = $stmt->fetch(); 
            echo "<p class='survey-paragraph'>" . $LikertScenario["Content"]. "</p>";?>
          </p>
          <div>
           <input type="radio" id="trust1-1" name="T1" value="T1-1" required>
             <label class="scenario-option" for="trust1-1">STRONGLY AGREE</label>
           <input type="radio" id="trust1-2" name="T1" value="T1-2">
             <label class="scenario-option" for="trust1-2">AGREE</label>
           <input type="radio" id="trust1-3" name="T1" value="T1-3">
             <label class="scenario-option" for="trust1-3">NEUTRAL</label>
           <input type="radio" id="trust1-4" name="T1" value="T1-4">
             <label class="scenario-option" for="trust1-4">DISAGREE</label>
           <input type="radio" id="trust1-5" name="T1" value="T1-5">
            <label class="scenario-option" for="trust1-5">STRONGLY DISAGREE</label><br>
          </div>
        </div>   
        <!--SCENARIO 1 Part 1-->
          <p class="survey-paragraph">
            <?php $stmt = $conn->prepare("SELECT BaseScenario FROM HITScenarios WHERE ScenarioNumber=:scenarioNumber;"); //Randomly generated base scenario 1
            $stmt->execute(['scenarioNumber' => $scenarioNumber]);
            $BaseScenario = $stmt->fetch(); 
            echo "<p class='survey-paragraph'>" . $BaseScenario["BaseScenario"]. "</p>";?>
          </p>
          <div>
            <input type="radio" id="scenario1-part1-utilitarian" name="S1P1" value="S1P1-UTILITARIAN"required>
            <label class="scenario-option" for="scenario1-part1-utilitarian">
              <?php $stmt = $conn->prepare("SELECT Content FROM BaseUtilitarianOptions WHERE ScenarioNumber=:scenarioNumber;"); //Utilitarian option for base scenario 1
              $stmt->execute(['scenarioNumber' => $scenarioNumber]);
              $BaseUtil = $stmt->fetch(); 
              echo "<p class='survey-paragraph'>" . $BaseUtil["Content"]. "</p>";?>
            </label><br>
            <input type="radio" id="scenario1-part1-deontology" name="S1P1" value="S1P1-DEONTOLOGY">
            <label class="scenario-option" for="scenario1-part1-deontology">
              <?php $stmt = $conn->prepare("SELECT Content FROM BaseDeontologyOptions WHERE ScenarioNumber=:scenarioNumber;"); //Deontology option for base scenario 1
              $stmt->execute(['scenarioNumber' => $scenarioNumber]);
              $BaseDeon = $stmt->fetch(); 
              echo "<p class='survey-paragraph'>" . $BaseDeon["Content"]. "</p>";?>
            </label><br>
          </div>
            <div>
              <button id="s1p1-button" class="confirm-button" onclick="s1p1Lock()">Confirm Choice</button>
            </div>
        <!--Scenario1 Part 2-->
          <div id="scenario2" style="display: none;">
            <p class="survey-paragraph">
              <?php $stmt = $conn->prepare("SELECT RelationshipScenario FROM HITScenarios WHERE ScenarioNumber=:scenarioNumber;"); //Randomly generated relationship scenario
            $stmt->execute(['scenarioNumber' => $scenarioNumber]);
            $RelaScenario = $stmt->fetch(); 
            echo "<p class='survey-paragraph'>" . $RelaScenario["RelationshipScenario"]. "</p>";?>
            </p>
            <input type="radio" id="scenario1-part2-utilitarian" name="S1P2" value="S1P2-UTILITARIAN" required>
            <label class="scenario-option" for="scenario1-part2-utilitarian">
              <?php $stmt = $conn->prepare("SELECT Content FROM RelationshipUtilitarianOptions WHERE ScenarioNumber=:scenarioNumber;"); //Utilitarian option for relationship scenario 1
              $stmt->execute(['scenarioNumber' => $scenarioNumber]);
              $RelaUtil = $stmt->fetch(); 
              echo "<p class='survey-paragraph'>" . $RelaUtil["Content"]. "</p>";?>
            </label><br>
            <input type="radio" id="scenario1-part2-deontology" name="S1P2" value="S1P2-DEONTOLOGY">
            <label class="scenario-option" for="scenario1-part2-deontology">
            <?php $stmt = $conn->prepare("SELECT Content FROM RelationshipDeontologyOptions WHERE ScenarioNumber=:scenarioNumber;"); //Deontology option for relationship scenario 1
              $stmt->execute(['scenarioNumber' => $scenarioNumber]);
              $RelaDeon = $stmt->fetch(); 
              echo "<p class='survey-paragraph'>" . $RelaDeon["Content"]. "</p>";?>
            </label><br>
            <input type="hidden" name="page_number" value="<?php echo $scenarioNumber;?>"/>
          </div>
          <div>
            <button id="s1p2-button" class="confirm-button" style="display: none;" onclick="s1p2Lock()">Confirm Choice</button>
          </div>
          <div>
            <button class="start-button" id="s1-submit" style="display: none;">Next Page</button>
          </div>
        </form>   
      </div>
</main>
	</body>
</html>