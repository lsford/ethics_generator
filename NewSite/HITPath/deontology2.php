<?php session_start(); ?>
<?php 
$_SESSION["T1"]=$_POST["T1"];//Likert 1 Variable
$_SESSION["S1P1"]=$_POST["S1P1"];//S1P1 Variable
$_SESSION["S1P2"]=$_POST["S1P2"];//S1P2 Variable
$_SESSION["variable1"]=$_POST["variable1"];//Random variable 1 
$_SESSION["variable2"]=$_POST["variable2"];//Random variable 2

include('connection.php'); //Database details
$conn = connect(); //Connect to the database

$randomNumber1 = $_SESSION['number'][array_rand($_SESSION['number'])]; //Generate a random variable number
$randomNumber2 = $_SESSION['number'][array_rand($_SESSION['number'])]; //Generate a random number for variable 1

//Random variable 1
$stmt = $conn->prepare("SELECT Rate FROM SurvivalRate WHERE RandomNumber=:randomNumber;"); //Randomly likert scenario 1
$stmt->execute(['randomNumber' => $randomNumber1]);
$variable3 = $stmt->fetch();

//Random variable 2
$stmt2 = $conn->prepare("SELECT Family FROM FamilyRelationships WHERE RandomNumber=:randomNumber;"); //Randomly likert scenario 1
$stmt2->execute(['randomNumber' => $randomNumber2]);
$variable4 = $stmt2->fetch();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ethics Generator Survey</title>
    <meta name="viewport" content="width=device.width, initial-scale=1" />
    <link rel="icon" href="../2890562-artificialintelligence11_101977.ico" />
    <link rel="stylesheet" href="../style.css" />   
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <script src="scenarios copy.js"></script>
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
  </div>
  <h3 id="title-cdss">HIT Survey</h3>
    <div id="cdss-container">
    <form method="POST" action="deontology3.php">
      <!--Likert Scenario 2-->
      <div id="trust2">
        <p class="survey-paragraph">2: You would trust an artificial intelligence to make life or death decisions </p>
        <div>
         <input type="radio" id="trust2-1" name="T2" value="D-T2-1" required>
           <label class="scenario-option" for="trust2-1">STRONGLY AGREE</label>
         <input type="radio" id="trust2-2" name="T2" value="D-T2-2">
           <label class="scenario-option" for="trust2-2">AGREE</label>
         <input type="radio" id="trust2-3" name="T2" value="D-T2-3">
           <label class="scenario-option" for="trust2-3">NEUTRAL</label>
         <input type="radio" id="trust2-4" name="T2" value="D-T2-4">
           <label class="scenario-option" for="trust2-4">DISAGREE</label>
         <input type="radio" id="trust2-5" name="T2" value="D-T2-5">
         <label class="scenario-option" for="trust2-5">STRONGLY DISAGREE</label><br>
        </div>
        <div>
          <button id="s2l1-button" class="confirm-button" onclick="s2l1Lock()">Confirm Choice</button>
        </div>
       </div>
      <!--Scenario 2 Part 1-->
    <div id="scenario4" style="display: none;">
        <p class="survey-paragraph">2.1: Six months ago, an individual suffered a major stroke which resulted in them entering a vegetative state and being cared for by the hospital. In that time, the patient has received numerous treatments from the hospital, including providing nutrition through a feeding tube, providing sensory stimulation, as well as offering periods of meaningful activity such as visits from family members or listening to music. The individual has not shown any signs of recovery, however, their opinion on stopping life-support treatment is unknown. An artificial intelligence has analysed the condition of the patient as well as data on individuals in similar conditions, and produced two decisions: </p>
        <input type="radio" id="scenario2-part1-utilitarian" name="S2P1" value="D-S2P1-UTILITARIAN" required>
          <label class="scenario-option" for="scenario2-part1-utilitarian">The likelihood of the patient recovering from the vegetative state is less than <?php echo $variable3['Rate']; ?>. The artificial intelligence has decided it would be better to save vital hospital resources and withdraw nutritional support, causing the patient to eventually die</label><br>
        <input type="radio" id="scenario2-part1-deontology" name="S2P1" value="D-S2P1-DEONTOLOGY">
          <label class="scenario-option" for="scenario2-part1-deontology">The likelihood of the patient recovering from the vegetative state is less than <?php echo $variable3['Rate']; ?>. The artificial intelligence has decided that the patient should continue to be treated by the hospital until they are declared brain dead or recover, even though the patient’s chance of recovery decreases each month</label><br>
    </div>
      <div>
        <button id="s2p1-button" class="confirm-button" style="display: none;" onclick="s2p1Lock()">Confirm Choice</button>
      </div>
      <!--Scenario 2 Part 2-->
      <div id="scenario5" style="display: none;">
        <p class="survey-paragraph">2.2: It is in-fact one of your relatives who has suffered a major stroke, which resulted in them entering a vegetative state and being cared for by your local hospital over the previous six months. The local hospital has contacted you to find out whether your relative would want treatment to be continued or stopped, because an artificial intelligence has analysed the condition of the patient as well as data on individuals in similar conditions, and produced two decisions: </p>
        <input type="radio" id="scenario2-part2-utilitarian" name="S2P2" value="D-S2P2-UTILITARIAN" required>
        <label class="scenario-option" for="scenario2-part2-utilitarian">The artificial intelligence has decided it would be better to save vital hospital resources and withdraw nutritional support, causing your <?php echo $variable4['Family']; ?> to eventually die</label><br>
        <input type="radio" id="scenario2-part2-deontology" name="S2P2" value="D-S2P2-DEONTOLOGY">
        <label class="scenario-option" for="scenario2-part2-deontology">The artificial intelligence has decided that your <?php echo $variable4['Family']; ?> should continue to be treated by the hospital until they are declared brain dead or recover, even though the chance of recovery decreases each month</label><br>
      </div>
      <div>
        <button id="s2p2-button" class="confirm-button" style="display: none;" onclick="s2p2Lock()">Next Page</button>
      </div>
      <div>
            <input type="hidden" name="variable3" value="<?php echo $variable3['Rate']; ?>" >
            <input type="hidden" name="variable4" value="<?php echo $variable4['Family']; ?>" >
          </div>
</form>
    </div>
</main>
</body>
</html>