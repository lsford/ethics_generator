<?php session_start(); ?>
<?php 
$_SESSION["T1"]=$_POST["T1"];//Likert 1 Variable
$_SESSION["S1P1"]=$_POST["S1P1"];//S1P1 Variable
$_SESSION["S1P2"]=$_POST["S1P2"];//S1P2 Variable

include('connect.php'); //Database details
$conn = connect(); //Connect to the database

$scenarioNumber = $_POST['page_number']; //Get the random number from the previous page

//Remove previous random number from array
if (($key = array_search($scenarioNumber, $_SESSION['scenario'])) !== false) { 
  unset($_SESSION['scenario'][$key]);
}

$scenarioNumber2 = $_SESSION['scenario'][array_rand($_SESSION['scenario'])]; //Generate a random scenario

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
      <!--Likert Scenario 2-->
      <div id="trust2">
        <p class="survey-paragraph">
        <?php $stmt = $conn->prepare("SELECT Content FROM LikertScenarios WHERE ScenarioNumber=:scenarioNumber;"); //Randomly likert scenario 1
            $stmt->execute(['scenarioNumber' => $scenarioNumber2]);
            $LikertScenario = $stmt->fetch(); 
            echo "<p class='survey-paragraph'>" . $LikertScenario["Content"]. "</p>";?>
        </p>
        <div>
         <input type="radio" id="trust2-1" name="T2" value="T2-1" required>
           <label class="scenario-option" for="trust2-1">STRONGLY AGREE</label>
         <input type="radio" id="trust2-2" name="T2" value="T2-2">
           <label class="scenario-option" for="trust2-2">AGREE</label>
         <input type="radio" id="trust2-3" name="T2" value="T2-3">
           <label class="scenario-option" for="trust2-3">NEUTRAL</label>
         <input type="radio" id="trust2-4" name="T2" value="T2-4">
           <label class="scenario-option" for="trust2-4">DISAGREE</label>
         <input type="radio" id="trust2-5" name="T2" value="T2-5">
         <label class="scenario-option" for="trust2-5">STRONGLY DISAGREE</label><br>
        </div>
       </div>
      <!--Scenario 2 Part 1-->
    <div id="scenario4">
        <p class="survey-paragraph">
          <?php $stmt = $conn->prepare("SELECT BaseScenario FROM HITScenarios WHERE ScenarioNumber=:scenarioNumber;");
            $stmt->execute(['scenarioNumber' => $scenarioNumber2]);
            $BaseScenario = $stmt->fetch(); 
            echo "<p class='survey-paragraph'>" . $BaseScenario["BaseScenario"]. "</p>";?>
            </p>
        <input type="radio" id="scenario2-part1-utilitarian" name="S2P1" value="S2P1-UTILITARIAN" required>
          <label class="scenario-option" for="scenario2-part1-utilitarian">
            <?php $stmt = $conn->prepare("SELECT Content FROM BaseUtilitarianOptions WHERE ScenarioNumber=:scenarioNumber;");
              $stmt->execute(['scenarioNumber' => $scenarioNumber2]);
              $BaseUtil = $stmt->fetch(); 
              echo "<p class='survey-paragraph'>" . $BaseUtil["Content"]. "</p>";?>
            </label><br>
        <input type="radio" id="scenario2-part1-deontology" name="S2P1" value="S2P1-DEONTOLOGY">
          <label class="scenario-option" for="scenario2-part1-deontology">
            <?php $stmt = $conn->prepare("SELECT Content FROM BaseDeontologyOptions WHERE ScenarioNumber=:scenarioNumber;");
              $stmt->execute(['scenarioNumber' => $scenarioNumber2]);
              $BaseDeon = $stmt->fetch(); 
              echo "<p class='survey-paragraph'>" . $BaseDeon["Content"]. "</p>";?>
            </label><br>
    </div>
      <div>
        <button id="s2p1-button" class="confirm-button" " onclick="s2p1Lock()">Confirm Choice</button>
      </div>
      <!--Scenario 2 Part 2-->
      <div id="scenario5" style="display: none;">
        <p class="survey-paragraph">
          <?php $stmt = $conn->prepare("SELECT RelationshipScenario FROM HITScenarios WHERE ScenarioNumber=:scenarioNumber;");
            $stmt->execute(['scenarioNumber' => $scenarioNumber2]);
            $RelaScenario = $stmt->fetch(); 
            echo "<p class='survey-paragraph'>" . $RelaScenario["RelationshipScenario"]. "</p>";?>
            </p>
        <input type="radio" id="scenario2-part2-utilitarian" name="S2P2" value="S2P2-UTILITARIAN" required>
        <label class="scenario-option" for="scenario2-part2-utilitarian">
          <?php $stmt = $conn->prepare("SELECT Content FROM RelationshipUtilitarianOptions WHERE ScenarioNumber=:scenarioNumber;");
              $stmt->execute(['scenarioNumber' => $scenarioNumber2]);
              $RelaUtil = $stmt->fetch(); 
              echo "<p class='survey-paragraph'>" . $RelaUtil["Content"]. "</p>";?>
              </label><br>
        <input type="radio" id="scenario2-part2-deontology" name="S2P2" value="S2P2-DEONTOLOGY">
        <label class="scenario-option" for="scenario2-part2-deontology">
          <?php $stmt = $conn->prepare("SELECT Content FROM RelationshipDeontologyOptions WHERE ScenarioNumber=:scenarioNumber;");
              $stmt->execute(['scenarioNumber' => $scenarioNumber2]);
              $RelaDeon = $stmt->fetch(); 
              echo "<p class='survey-paragraph'>" . $RelaDeon["Content"]. "</p>";?>
              </label><br>
              <input type="hidden" name="page_number2" value="<?php echo $scenarioNumber2;?>"/>
      </div>
      <div>
        <button id="s2p2-button" class="confirm-button" style="display: none;" onclick="s2p2Lock()">Confirm Choice</button>
      </div>
      <div>
      <button class="start-button" id="s2-submit" style="display: none;">Next Page</button>
      </div>
</form>
    </div>
</main>
</body>
</html>