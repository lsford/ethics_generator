<?php session_start(); ?>
<?php
$_SESSION["L1"]=$_POST["L1"];//Likert 1 Variable
$_SESSION["L2"]=$_POST["L2"];//Likert 2 Variable
$_SESSION["L3"]=$_POST["L3"];//Likert 3 Variable
$_SESSION['Path1']=$_POST['path1'];//Deontology Path
$_SESSION['Total']=$_POST['total'];//Score

$number = Array(1,2,3,4,5); //Create array with scenario numbers

$_SESSION['number'] = $number; //Turn array into session variable to allow access across all pages

$randomNumber1 = $_SESSION['number'][array_rand($_SESSION['number'])]; //Generate a random number for variable 1
$randomNumber2 = $_SESSION['number'][array_rand($_SESSION['number'])]; //Generate a random number for variable 1

include('connection.php'); //Database details
$conn = connect(); //Connect to the database

//Random variable 1
$stmt = $conn->prepare("SELECT Dead FROM NumberDead WHERE RandomNumber=:randomNumber;"); //Randomly likert scenario 1
$stmt->execute(['randomNumber' => $randomNumber1]);
$variable1 = $stmt->fetch();

//Random variable 2
$stmt2 = $conn->prepare("SELECT Family FROM FamilyRelationships WHERE RandomNumber=:randomNumber;"); //Randomly likert scenario 1
$stmt2->execute(['randomNumber' => $randomNumber2]);
$variable2 = $stmt2->fetch();

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
    <!--<script src="functions.js"></script>-->
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
      <h3 id="title-cdss">HIT Survey</h3>
    </div>
       
      <div id="cdss-container">
        <form method="POST" action="deontology2.php">
          <!--Likert Question-->
        <div id="trust1">
          <p class="survey-paragraph">1: You would trust an artificial intelligence to make surgical decisions for you</p>
          <div>
           <input type="radio" id="trust1-1" name="T1" value="D-T1-1" required>
             <label class="scenario-option" for="trust1-1">STRONGLY AGREE</label>
           <input type="radio" id="trust1-2" name="T1" value="D-T1-2">
             <label class="scenario-option" for="trust1-2">AGREE</label>
           <input type="radio" id="trust1-3" name="T1" value="D-T1-3">
             <label class="scenario-option" for="trust1-3">NEUTRAL</label>
           <input type="radio" id="trust1-4" name="T1" value="D-T1-4">
             <label class="scenario-option" for="trust1-4">DISAGREE</label>
           <input type="radio" id="trust1-5" name="T1" value="D-T1-5">
            <label class="scenario-option" for="trust1-5">STRONGLY DISAGREE</label><br>
          </div>
          <div>
            <button id="s1l1-button" class="confirm-button" onclick="s1l1Lock()">Confirm Choice</button>
          </div> 
        </div>  
        <!--SCENARIO 1 Part 1-->
        <div id="scenario1" style="display: none;">
          <p class="survey-paragraph">1.1: There has been a car accident involving a bus full of passengers and a small vehicle. The accident has resulted in several people being severely injured, and without surgery, they will die. Some of the bus passengers require organ transplants, whilst those in the small vehicle only require surgery. The artificial intelligence has identified that all the individuals in the small vehicle are suitable matches for organ donation, however, the artificial intelligence does not know if the individuals in the small vehicle are registered organ donors. The artificial intelligence responsible for making the decision has produced two options:</p>
          <div>
            <input type="radio" id="scenario1-part1-utilitarian" name="S1P1" value="D-S1P1-UTILITARIAN"required>
            <label class="scenario-option" for="scenario1-part1-utilitarian">The artificial intelligence has decided one of the people in the small vehicle should donate their organs to save the lives of <?php echo $variable1['Dead']; ?> bus passengers who require organ transplants to survive</label><br>
            <input type="radio" id="scenario1-part1-deontology" name="S1P1" value="D-S1P1-DEONTOLOGY">
            <label class="scenario-option" for="scenario1-part1-deontology">The artificial intelligence has decided the one small vehicle passenger should receive surgery and not donate their organs to the <?php echo $variable1['Dead']; ?> bus passengers</label><br>
          </div>
        </div>
            <div>
              <button id="s1p1-button" class="confirm-button" style="display: none;" onclick="s1p1Lock()">Confirm Choice</button>
            </div>
        <!--Scenario1 Part 2-->
          <div id="scenario2" style="display: none;">
            <p class="survey-paragraph">1.2: Your local hospital contacts you to inform you that you are related to one of the people in the small vehicle, and that they are severely injured. When you get to the hospital you are informed that your relative’s organs could be donated to save some of the injured bus passengers. However, you do not know your relative’s organ donor status. Which of the two options should the artificial intelligence select: </p>
            <input type="radio" id="scenario1-part2-utilitarian" name="S1P2" value="D-S1P2-UTILITARIAN" required>
            <label class="scenario-option" for="scenario1-part2-utilitarian">The artificial intelligence decides the organs of your <?php echo $variable2['Family']; ?> should be used to save the lives of the injured bus passengers</label><br>
            <input type="radio" id="scenario1-part2-deontology" name="S1P2" value="D-S1P2-DEONTOLOGY">
            <label class="scenario-option" for="scenario1-part2-deontology">The artificial intelligence decides the organs of your <?php echo $variable2['Family']; ?> should not be used to save the lives of the injured bus passengers</label><br>
          </div>
          <div>
            <button id="s1p2-button" class="confirm-button" style="display: none;" onclick="s1p2Lock()">Next Page</button>
          </div>
          <div>
            <input type="hidden" name="variable1" value="<?php echo $variable1['Dead']; ?>" >
            <input type="hidden" name="variable2" value="<?php echo $variable2['Family']; ?>" >
          </div>
        </form>   
      </div>
</main>
	</body>
</html>