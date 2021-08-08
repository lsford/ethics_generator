<?php session_start(); ?>
<?php 
$_SESSION["T2"]=$_POST["T2"];//Likert 2 Variable
$_SESSION["S2P1"]=$_POST["S2P1"];//S2P1 Variable
$_SESSION["S2P2"]=$_POST["S2P2"];//S2P2 Variable

include('connect.php'); //Database details
$conn = connect(); //Connect to the database

$scenarioNumber2 = $_POST['page_number2']; //Get the random number from the previous page

//Remove previous random number from array
if (($key = array_search($scenarioNumber2, $_SESSION['scenario'])) !== false) {
  unset($_SESSION['scenario'][$key]);
}

$scenarioNumber3 = $_SESSION['scenario'][array_rand($_SESSION['scenario'])]; //Generate a random scenario

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
    <form method="POST" action="scenario4.php">
      <!--Likert Scenario 3-->
    <div id="trust3">
        <p class="survey-paragraph">
        <?php $stmt = $conn->prepare("SELECT Content FROM LikertScenarios WHERE ScenarioNumber=:scenarioNumber;"); //Randomly likert scenario 1
            $stmt->execute(['scenarioNumber' => $scenarioNumber3]);
            $LikertScenario = $stmt->fetch(); 
            echo "<p class='survey-paragraph'>" . $LikertScenario["Content"]. "</p>";?>
        </p>
        <div>
         <input type="radio" id="trust3-1" name="T3" value="T3-1" required>
           <label class="scenario-option" for="trust3-1">STRONGLY AGREE</label>
         <input type="radio" id="trust3-2" name="T3" value="T3-2">
           <label class="scenario-option" for="trust3-2">AGREE</label>
         <input type="radio" id="trust3-3" name="T3" value="T3-3">
           <label class="scenario-option" for="trust3-3">NEUTRAL</label>
         <input type="radio" id="trust3-4" name="T3" value="T3-4">
           <label class="scenario-option" for="trust3-4">DISAGREE</label>
         <input type="radio" id="trust3-5" name="T3" value="T3-5">
         <label class="scenario-option" for="trust3-5">STRONGLY DISAGREE</label><br>
        </div>
       </div>
      <!--Scenario 3 Part 1-->
      <div id="scenario7">
        <P class="survey-paragraph">
          <?php $stmt = $conn->prepare("SELECT BaseScenario FROM HITScenarios WHERE ScenarioNumber=:scenarioNumber;");
            $stmt->execute(['scenarioNumber' => $scenarioNumber3]);
            $BaseScenario = $stmt->fetch(); 
            echo "<p class='survey-paragraph'>" . $BaseScenario["BaseScenario"]. "</p>";?>
          </P>
        <input type="radio" id="scenario3-part1-utilitarian" name="S3P1" value="S3P1-UTILITARIAN" required></input>
          <label class="scenario-option" for="scenario3-part1-utilitarian">
            <?php $stmt = $conn->prepare("SELECT Content FROM BaseUtilitarianOptions WHERE ScenarioNumber=:scenarioNumber;");
              $stmt->execute(['scenarioNumber' => $scenarioNumber3]);
              $BaseUtil = $stmt->fetch(); 
              echo "<p class='survey-paragraph'>" . $BaseUtil["Content"]. "</p>";?>
            </label><br>
        <input type="radio" id="scenario3-part1-deontology" name="S3P1" value="S3P1-DEONTOLOGY">
          <label class="scenario-option" for="scenario3-part1-deontology">
          <?php $stmt = $conn->prepare("SELECT Content FROM BaseDeontologyOptions WHERE ScenarioNumber=:scenarioNumber;");
              $stmt->execute(['scenarioNumber' => $scenarioNumber3]);
              $BaseDeon = $stmt->fetch(); 
              echo "<p class='survey-paragraph'>" . $BaseDeon["Content"]. "</p>";?>
          </label><br>
      </div>
      <div>
          <button id="s3p1-button" class="confirm-button" onclick="s3p1Lock()">Confirm Choice</button>
        </div>
      <!--Scenario 3 Part 2-->
      <div id="scenario8" style="display: none;">
        <P class="survey-paragraph">
        <?php $stmt = $conn->prepare("SELECT RelationshipScenario FROM HITScenarios WHERE ScenarioNumber=:scenarioNumber;");
            $stmt->execute(['scenarioNumber' => $scenarioNumber3]);
            $RelaScenario = $stmt->fetch(); 
            echo "<p class='survey-paragraph'>" . $RelaScenario["RelationshipScenario"]. "</p>";?>
        </P>
        <input type="radio" id="scenario3-part2-utilitarian" name="S3P2" value="S3P2-UTILITARIAN"required></input>
          <label class="scenario-option" for="scenario3-part2-utilitarian">
          <?php $stmt = $conn->prepare("SELECT Content FROM RelationshipUtilitarianOptions WHERE ScenarioNumber=:scenarioNumber;");
              $stmt->execute(['scenarioNumber' => $scenarioNumber3]);
              $RelaUtil = $stmt->fetch(); 
              echo "<p class='survey-paragraph'>" . $RelaUtil["Content"]. "</p>";?>
          </label><br>
        <input type="radio" id="scenario3-part2-deontology" name="S3P2" value="S3P2-DEONTOLOGY">
          <label class="scenario-option" for="scenario3-part2-deontology">
            <?php $stmt = $conn->prepare("SELECT Content FROM RelationshipDeontologyOptions WHERE ScenarioNumber=:scenarioNumber;");
              $stmt->execute(['scenarioNumber' => $scenarioNumber3]);
              $RelaDeon = $stmt->fetch(); 
              echo "<p class='survey-paragraph'>" . $RelaDeon["Content"]. "</p>";?>
              </label><br>
      </div>
      <div>
              <button id="s3p2-button" class="confirm-button" style="display: none;" onclick="s3p2Lock()">Confirm Choice</button>
            </div>
            <input type="hidden" name="page_number3" value="<?php echo $scenarioNumber3;?>"/>
      <div>
        <button class="start-button" id="s3-submit" style="display: none;">Next Page</button>
      </div>
</form>
    </div>
</main>
</body>
</html>