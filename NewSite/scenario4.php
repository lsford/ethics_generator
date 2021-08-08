<?php session_start(); ?>
<?php 
$_SESSION["T3"]=$_POST["T3"];//Likert 3 Variable
$_SESSION["S3P1"]=$_POST["S3P1"];//S3P1 Variable
$_SESSION["S3P2"]=$_POST["S3P2"];//S3P2 Variable

include('connect.php'); //Database details
$conn = connect(); //Connect to the database

$scenarioNumber3 = $_POST['page_number3']; //Get the random number from the previous page

//Remove previous random number from array
if (($key = array_search($scenarioNumber3, $_SESSION['scenario'])) !== false) {
  unset($_SESSION['scenario'][$key]);
}

$scenarioNumber4 = $_SESSION['scenario'][array_rand($_SESSION['scenario'])]; //Generate a random scenario

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
    <form method="POST" action="scenario5.php">
      <!__Likert Scenario 4-->
    <div id="trust4">
        <p class="survey-paragraph">
        <?php $stmt = $conn->prepare("SELECT Content FROM LikertScenarios WHERE ScenarioNumber=:scenarioNumber;"); //Randomly likert scenario 1
            $stmt->execute(['scenarioNumber' => $scenarioNumber4]);
            $LikertScenario = $stmt->fetch(); 
            echo "<p class='survey-paragraph'>" . $LikertScenario["Content"]. "</p>";?>
        </p>
        <div>
         <input type="radio" id="trust4-1" name="T4" value="T4-1" required>
           <label class="scenario-option" for="trust4-1">STRONGLY AGREE</label>
         <input type="radio" id="trust4-2" name="T4" value="T4-2">
           <label class="scenario-option" for="trust4-2">AGREE</label>
         <input type="radio" id="trust4-3" name="T4" value="T4-3">
           <label class="scenario-option" for="trust4-3">NEUTRAL</label>
         <input type="radio" id="trust4-4" name="T4" value="T4-4">
           <label class="scenario-option" for="trust4-4">DISAGREE</label>
         <input type="radio" id="trust4-5" name="T4" value="T4-5">
         <label class="scenario-option" for="trust4-5">STRONGLY AGREE</label><br>
        </div>
       </div>
      <!--Scenario 4 Part 1-->
    <div id="scenario10">
        <P class="survey-paragraph">
        <?php $stmt = $conn->prepare("SELECT BaseScenario FROM HITScenarios WHERE ScenarioNumber=:scenarioNumber;");
            $stmt->execute(['scenarioNumber' => $scenarioNumber4]);
            $BaseScenario = $stmt->fetch(); 
            echo "<p class='survey-paragraph'>" . $BaseScenario["BaseScenario"]. "</p>";?>
        </P>
        <input type="radio" id="scenario4-part1-utilitarian" name="S4P1" value="S4P1-UTILITARIAN" required></input>
          <label class="scenario-option" for="scenario4-part1-utilitarian">
          <?php $stmt = $conn->prepare("SELECT Content FROM BaseUtilitarianOptions WHERE ScenarioNumber=:scenarioNumber;");
              $stmt->execute(['scenarioNumber' => $scenarioNumber4]);
              $BaseUtil = $stmt->fetch(); 
              echo "<p class='survey-paragraph'>" . $BaseUtil["Content"]. "</p>";?>
          </label><br>
        <input type="radio" id="scenario4-part1-deontology" name="S4P1" value="S4P1-DEONTOLOGY">
          <label class="scenario-option" for="scenario4-part1-deontology">
          <?php $stmt = $conn->prepare("SELECT Content FROM BaseDeontologyOptions WHERE ScenarioNumber=:scenarioNumber;");
              $stmt->execute(['scenarioNumber' => $scenarioNumber4]);
              $BaseDeon = $stmt->fetch(); 
              echo "<p class='survey-paragraph'>" . $BaseDeon["Content"]. "</p>";?>
          </label><br>
      </div>
      <div>
              <button id="s4p1-button" class="confirm-button" onclick="s4p1Lock()">Confirm Choice</button>
            </div>
      <!--Scenario 4 Part 2-->
      <div id="scenario11" style="display: none;">
        <P class="survey-paragraph">
        <?php $stmt = $conn->prepare("SELECT RelationshipScenario FROM HITScenarios WHERE ScenarioNumber=:scenarioNumber;");
            $stmt->execute(['scenarioNumber' => $scenarioNumber4]);
            $RelaScenario = $stmt->fetch(); 
            echo "<p class='survey-paragraph'>" . $RelaScenario["RelationshipScenario"]. "</p>";?>
        </P>
        <input type="radio" id="scenario4-part2-utilitarian" name="S4P2" value="S4P2-UTILITARIAN"required></input>
          <label class="scenario-option" for="scenario4-part2-utilitarian">
          <?php $stmt = $conn->prepare("SELECT Content FROM RelationshipUtilitarianOptions WHERE ScenarioNumber=:scenarioNumber;");
              $stmt->execute(['scenarioNumber' => $scenarioNumber4]);
              $RelaUtil = $stmt->fetch(); 
              echo "<p class='survey-paragraph'>" . $RelaUtil["Content"]. "</p>";?>
          </label><br>
        <input type="radio" id="scenario4-part2-deontology" name="S4P2" value="S4P2-DEONTOLOGY">
          <label class="scenario-option" for="scenario4-part2-deontology">
          <?php $stmt = $conn->prepare("SELECT Content FROM RelationshipDeontologyOptions WHERE ScenarioNumber=:scenarioNumber;");
              $stmt->execute(['scenarioNumber' => $scenarioNumber4]);
              $RelaDeon = $stmt->fetch(); 
              echo "<p class='survey-paragraph'>" . $RelaDeon["Content"]. "</p>";?>
          </label><br>
      </div>
      <div>
              <button id="s4p2-button" class="confirm-button" style="display: none;"onclick="s4p2Lock()">Confirm Choice</button>
            </div>
            <input type="hidden" name="page_number4" value="<?php echo $scenarioNumber4;?>"/>
      <div>
      <button class="start-button" id="s4-submit" style="display: none;" >Next Page</button>
      </div>
</form>
    </div>
</main>
</body>
</html>