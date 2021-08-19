<?php session_start(); ?>
<?php 
$_SESSION["L4"]=$_POST["L4"];//Likert 4 Variable
$_SESSION["L5"]=$_POST["L5"];//Likert 5 Variable
$_SESSION["L6"]=$_POST["L6"];//Likert 6 Variable
$_SESSION['Path2']=$_POST['path2'];//Deontology Path
$_SESSION['Total2']=$_POST['total2'];//Score

include('connection.php'); //Database details
$conn = connect(); //Connect to the database

$randomNumber1 = $_SESSION['number'][array_rand($_SESSION['number'])]; //Generate a random variable number
$randomNumber2 = $_SESSION['number'][array_rand($_SESSION['number'])]; //Generate a random number for variable 1

//Random variable 1
$stmt = $conn->prepare("SELECT Age FROM PersonAge WHERE RandomNumber=:randomNumber;"); //Randomly likert scenario 1
$stmt->execute(['randomNumber' => $randomNumber1]);
$variable7 = $stmt->fetch();

//Random variable 2
$stmt2 = $conn->prepare("SELECT Family FROM FamilyRelationships WHERE RandomNumber=:randomNumber;"); //Randomly likert scenario 1
$stmt2->execute(['randomNumber' => $randomNumber2]);
$variable8 = $stmt2->fetch();

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
<h3 id="title-cdss">Health Information Technology Survey</h3>
      <p id="description">Please select how strongly you agree or disagree with the statement below. When you have made your decision, please click <b>Confirm Choice</b>. This will lock in your answer. You will then be shown a scenario as well as the scenario outcomes, please select the outcome you find prefereable. When you have made your decision, please click <b>Confirm Choice</b>. Please press <b>Next Page</b> to move onto the next set of questions. </p> 
    </div>
    <div id="line">
    </div>
  <h3 id="title-cdss">HIT Survey</h3>
<div id="cdss-container">
    <form method="POST" action="deontology5.php">
      <!__Likert Scenario 4-->
    <div id="trust4">
        <p class="survey-paragraph">4: You would trust an artificial intelligence to make decisions about medical treatment </p>
        <div>
         <input type="radio" id="trust4-1" name="T4" value="D-T4-1" required>
           <label class="scenario-option" for="trust4-1">STRONGLY AGREE</label>
         <input type="radio" id="trust4-2" name="T4" value="D-T4-2">
           <label class="scenario-option" for="trust4-2">AGREE</label>
         <input type="radio" id="trust4-3" name="T4" value="D-T4-3">
           <label class="scenario-option" for="trust4-3">NEUTRAL</label>
         <input type="radio" id="trust4-4" name="T4" value="D-T4-4">
           <label class="scenario-option" for="trust4-4">DISAGREE</label>
         <input type="radio" id="trust4-5" name="T4" value="D-T4-5">
         <label class="scenario-option" for="trust4-5">STRONGLY AGREE</label><br>
        </div>
        <div>
          <button id="s4l1-button" class="confirm-button" onclick="s4l1Lock()">Confirm Choice</button>
        </div> 
       </div>
      <!--Scenario 4 Part 1-->
    <div id="scenario10" style="display: none;">
        <P class="survey-paragraph">4.1: Your local hospital uses artificial intelligence to help with cancer detection and care. The artificial intelligence can detect cancer from scans, predict the risk of cancer developing, and assign the most appropriate treatment options. A woman has recently had a cancer screening after a work colleague was diagnosed with breast cancer, even though they have no symptoms. Based on this woman’s current lifestyle and medical history, the artificial intelligence has predicted this woman has a higher-than-average chance of developing cancer in the next 15-years. The artificial intelligence has produced two options: </P>
        <input type="radio" id="scenario4-part1-utilitarian" name="S4P1" value="D-S4P1-UTILITARIAN" required></input>
          <label class="scenario-option" for="scenario4-part1-utilitarian">The artificial intelligence decides the <?php echo $variable7['Age']; ?>-year-old woman should have yearly breast cancer screenings to help detect cancer if it appears. This is normally only for women aged 50+ and could mean appointments will be unavailable to these women. It could also result in unnecessary extra tests that use vital hospital resources</label><br>
        <input type="radio" id="scenario4-part1-deontology" name="S4P1" value="D-S4P1-DEONTOLOGY">
          <label class="scenario-option" for="scenario4-part1-deontology">The artificial intelligence decides that because the <?php echo $variable7['Age']; ?>-year-old woman does not yet have breast-cancer, she should alter her lifestyle to reduce the risk of her getting cancer in the future. This will include limiting alcohol, being physically active and maintaining a healthy weight and altering her diet</label><br>
      </div>
      <div>
              <button id="s4p1-button" class="confirm-button" style="display: none;" onclick="s4p1Lock()">Confirm Choice</button>
            </div>
      <!--Scenario 4 Part 2-->
      <div id="scenario11" style="display: none;">
        <P class="survey-paragraph">4.2: Your relative has recently had a cancer screening after their work colleague has been diagnosed with cancer, even though your relative has no symptoms. Based on your relative’s current lifestyle and medical history, the artificial intelligence has predicted they have a higher-than-average chance of developing cancer in the next 15-years. The artificial intelligence has produced two options: </P>
        <input type="radio" id="scenario4-part2-utilitarian" name="S4P2" value="D-S4P2-UTILITARIAN"required></input>
          <label class="scenario-option" for="scenario4-part2-utilitarian">The artificial intelligence decides your <?php echo $variable8['Family']; ?> should have yearly screenings to help detect cancer if it appears. This is normally only for individuals aged 50+ and could mean appointments will be unavailable to these people. It could also result in unnecessary extra tests that use vital hospital resources</label><br>
        <input type="radio" id="scenario4-part2-deontology" name="S4P2" value="D-4P2-DEONTOLOGY">
          <label class="scenario-option" for="scenario4-part2-deontology">The artificial intelligence decides that because your <?php echo $variable8['Family']; ?> does not yet have cancer, they should alter their lifestyle to reduce the risk of her getting cancer in the future. This will include limiting alcohol, being physically active and maintaining a healthy weight and altering her diet</label><br>
      </div>
      <div>
              <button id="s4p2-button" class="confirm-button" style="display: none;"onclick="s4p2Lock()">Next Page</button>
            </div>
            <div>
          <input type="hidden" name="variable7" value="<?php echo $variable7['Age']; ?>" >
          <input type="hidden" name="variable8" value="<?php echo $variable8['Family']; ?>" >
      </div>
</form>
    </div>
</main>
</body>
</html>