<?php session_start(); ?>
<?php 
$_SESSION["T2"]=$_POST["T2"];//Likert 2 Variable
$_SESSION["S2P1"]=$_POST["S2P1"];//S2P1 Variable
$_SESSION["S2P2"]=$_POST["S2P2"];//S2P2 Variable
$_SESSION["variable3"]=$_POST["variable3"];//Random variable 3
$_SESSION["variable4"]=$_POST["variable4"];//Random variable 4

include('connection.php'); //Database details
$conn = connect(); //Connect to the database

$randomNumber1 = $_SESSION['number'][array_rand($_SESSION['number'])]; //Generate a random variable number
$randomNumber2 = $_SESSION['number'][array_rand($_SESSION['number'])]; //Generate a random number for variable 1

//Random variable 1
$stmt = $conn->prepare("SELECT Age FROM PersonAge WHERE RandomNumber=:randomNumber;"); //Randomly likert scenario 1
$stmt->execute(['randomNumber' => $randomNumber1]);
$variable5 = $stmt->fetch();

//Random variable 2
$stmt2 = $conn->prepare("SELECT Family FROM FamilyRelationships WHERE RandomNumber=:randomNumber;"); //Randomly likert scenario 1
$stmt2->execute(['randomNumber' => $randomNumber2]);
$variable6 = $stmt2->fetch();

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
    <form method="POST" action="likert2.php">
      <!--Likert Scenario 3-->
    <div id="trust3">
        <p class="survey-paragraph">3: You would trust an artificial intelligence to make prescription decisions </p>
        <div>
         <input type="radio" id="trust3-1" name="T3" value="U-T3-1" required>
           <label class="scenario-option" for="trust3-1">STRONGLY AGREE</label>
         <input type="radio" id="trust3-2" name="T3" value="U-T3-2">
           <label class="scenario-option" for="trust3-2">AGREE</label>
         <input type="radio" id="trust3-3" name="T3" value="U-T3-3">
           <label class="scenario-option" for="trust3-3">NEUTRAL</label>
         <input type="radio" id="trust3-4" name="T3" value="U-T3-4">
           <label class="scenario-option" for="trust3-4">DISAGREE</label>
         <input type="radio" id="trust3-5" name="T3" value="U-T3-5">
         <label class="scenario-option" for="trust3-5">STRONGLY DISAGREE</label><br>
        </div>
        <div>
            <button id="s1l1-button" class="confirm-button" onclick="s3l1Lock()">Confirm Choice</button>
          </div>
       </div>
      <!--Scenario 3 Part 1-->
      <div id="scenario7" style="display: none;">
        <P class="survey-paragraph">3.1: An artificial intelligence has analysed data from the past 10 years and identified a trend suggesting an incoming flu pandemic. Unfortunately, there are not enough flu vaccines available to vaccinate everyone, so only people above 67 and below 18 are eligible to be vaccinated, as they are deemed to be most at risk. Two individuals, not eligible for the vaccine, visit their local GP to receive their flu vaccine. The patients explain that they own and work in a small shop and are extremely worried about catching the flu at work and becoming seriously ill. The artificial intelligence in-charge of deciding who the vaccine is given to produces two options: </P>
        <input type="radio" id="scenario3-part1-utilitarian" name="S3P1" value="U-S3P1-UTILITARIAN" required></input>
          <label class="scenario-option" for="scenario3-part1-utilitarian">The artificial intelligence decides to give the two <?php echo $variable5['Age']; ?>-year-old patients a flu vaccine, even though they are not eligible, as it means more people have been vaccinated against the flu</label><br>
        <input type="radio" id="scenario3-part1-deontology" name="S3P1" value="U-S3P1-DEONTOLOGY">
          <label class="scenario-option" for="scenario3-part1-deontology">The artificial intelligence decides not to give the two <?php echo $variable5['Age']; ?>-year-old patients the flu vaccine, to avoid running out of vaccines for those most at risk</label><br>
      </div>
      <div>
          <button id="s3p1-button" class="confirm-button" style="display: none;" onclick="s3p1Lock()">Confirm Choice</button>
        </div>
      <!--Scenario 3 Part 2-->
      <div id="scenario8" style="display: none;">
        <P class="survey-paragraph">3.2: You are related to one of the individuals who are extremely worried about catching the flu at work and becoming seriously ill. The artificial intelligence in-charge of deciding who the vaccine is given to produces two options: </P>
        <input type="radio" id="scenario3-part2-utilitarian" name="S3P2" value="U-S3P2-UTILITARIAN"required></input>
          <label class="scenario-option" for="scenario3-part2-utilitarian">The artificial intelligence decides to give your <?php echo $variable6['Family']; ?> a flu vaccine, even though they are not eligible</label><br>
        <input type="radio" id="scenario3-part2-deontology" name="S3P2" value="U-S3P2-DEONTOLOGY">
          <label class="scenario-option" for="scenario3-part2-deontology">The artificial intelligence decides not to give your <?php echo $variable6['Family']; ?> the flu vaccine, as they are not eligible, to avoid running out of vaccines for those most at risk</label><br>
      </div>
      <div>
              <button id="s3p2-button" class="confirm-button" style="display: none;" onclick="s3p2Lock()">Next Page</button>
            </div>
      <div>
          <input type="hidden" name="variable5" value="<?php echo $variable5['Age']; ?>" >
          <input type="hidden" name="variable6" value="<?php echo $variable6['Family']; ?>" >
      </div>
</form>
    </div>
</main>
</body>
</html>