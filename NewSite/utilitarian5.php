<?php session_start(); ?>
<?php 
$_SESSION["T4"]=$_POST["T4"];//Likert 4 Variable
$_SESSION["S4P1"]=$_POST["S4P1"];//S4P1 Variable
$_SESSION["S4P2"]=$_POST["S4P2"];//S4P2 Variable
$_SESSION["variable7"]=$_POST["variable7"];//Random variable 7
$_SESSION["variable8"]=$_POST["variable8"];//Random variable 8

include('connection.php'); //Database details
$conn = connect(); //Connect to the database

$randomNumber1 = $_SESSION['number'][array_rand($_SESSION['number'])]; //Generate a random variable number
$randomNumber2 = $_SESSION['number'][array_rand($_SESSION['number'])]; //Generate a random number for variable 1

//Random variable 1
$stmt = $conn->prepare("SELECT Dead FROM NumberDead WHERE RandomNumber=:randomNumber;"); //Randomly likert scenario 1
$stmt->execute(['randomNumber' => $randomNumber1]);
$variable9 = $stmt->fetch();

//Random variable 2
$stmt2 = $conn->prepare("SELECT Family FROM FamilyRelationships WHERE RandomNumber=:randomNumber;"); //Randomly likert scenario 1
$stmt2->execute(['randomNumber' => $randomNumber2]);
$variable10 = $stmt2->fetch();

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
  </div>
  <h3 id="title-cdss">HIT Survey</h3>
<div id="cdss-container">
    <form method="POST" action="likert3.php">
      <!--Likert Scenario 5-->
      <div id="trust5">
        <p class="survey-paragraph">5: You would trust an artificial intelligence with access to your private medical records</p>
        <div>
         <input type="radio" id="trust5-1" name="T5" value="U-T5-1" required>
           <label class="scenario-option" for="trust5-1">STRONGLY AGREE</label>
         <input type="radio" id="trust5-2" name="T5" value="U-T5-2">
           <label class="scenario-option" for="trust5-2">AGREE</label>
         <input type="radio" id="trust5-3" name="T5" value="U-T5-3">
           <label class="scenario-option" for="trust5-3">NEUTRAL</label>
         <input type="radio" id="trust5-4" name="T5" value="U-T5-4">
           <label class="scenario-option" for="trust5-4">DISAGREE</label>
         <input type="radio" id="trust5-5" name="T5" value="U-T5-5">
         <label class="scenario-option" for="trust5-5">STRONGLY DISAGREE</label><br>
        </div>
        <div>
            <button id="s1l1-button" class="confirm-button" onclick="s5l1Lock()">Confirm Choice</button>
          </div>
       </div>
      <!--Scenario 5 Part 1-->
    <div id="scenario13" style="display: none;">
        <P class="survey-paragraph">5.1: An artificial intelligence has been developed to support clinicians, by analysing data on current and previous patients and assigning treatment for mental health conditions or offering services that may be beneficial. Data provided to the artificial intelligence about a specific patient shows they have previously suffered with poor mental health, and data indicates similar individuals have greatly benefited from counselling sessions. However, appointments for these sessions are normally reserved for those currently suffering from severe mental health issues, and there are very few left available. The artificial intelligence responsible for making these decisions has two options:  </P>
        <input type="radio" id="scenario5-part1-utilitarian" name="S5P1" value="U-S5P1-UTILITARIAN" required></input>
          <label class="scenario-option" for="scenario5-part1-utilitarian">The artificial intelligence identifies the benefits to the specific patient and assigns them <?php echo $variable9['Dead']; ?> of the available counselling sessions, even though they are not currently being treated for a severe mental health condition</label><br>
        <input type="radio" id="scenario5-part1-deontology" name="S5P1" value="U-S5P1-DEONTOLOGY">
          <label class="scenario-option" for="scenario5-part1-deontology" >The artificial intelligence does not assign the specific patient a counselling session, because they do not currently have a severe mental health condition. This will allow more counselling sessions to remain available for those who require them</label><br>
      </div>
      <div>
              <button id="s5p1-button" class="confirm-button" style="display: none;" onclick="s5p1Lock()">Confirm Choice</button>
            </div>
      <!--Scenario 5 Part 2-->
      <div id="scenario14" style="display: none;">
        <P class="survey-paragraph">5.2: Your relative has previously suffered from mental health conditions, and an artificial intelligence has identified that they might benefit from counselling sessions, as individuals currently suffering from similar conditions have greatly benefited from these sessions. However, appointments for these sessions are normally reserved for those currently suffering from severe mental health issues, and there are very few left available. The artificial intelligence responsible for making these decisions has two options:  </P>
        <input type="radio" id="scenario5-part2-utilitarian" name="S5P2" value="U-S5P2-UTILITARIAN"required></input>
          <label class="scenario-option" for="scenario5-part2-utilitarian">The artificial intelligence identifies the benefits to your <?php echo $variable10['Family']; ?>, and assigns them one of the available counselling sessions, even though they are not currently being treated for a severe mental health condition</label><br>
        <input type="radio" id="scenario5-part2-deontology" name="S5P2" value="U-S5P2-DEONTOLOGY">
          <label class="scenario-option" for="scenario5-part2-deontology">The artificial intelligence does not assign your <?php echo $variable10['Family']; ?> a counselling session, because they are not currently being treated for a severe mental health condition. This will allow more counselling sessions to remain available for those who require them</label><br>
      </div>
      <div>
              <button id="s5p2-button" class="confirm-button" style="display: none;" onclick="s5p2Lock()">Next Page</button>
            </div>
            <div>
          <input type="hidden" name="variable9" value="<?php echo $variable9['Dead']; ?>" >
          <input type="hidden" name="variable10" value="<?php echo $variable10['Family']; ?>" >
      </div>
</form>
    </div>
</main>
</body>
</html>