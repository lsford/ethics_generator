<?php session_start(); ?>
<div> <!--Session Variables-->
  <?php 
  //LIKERT VARIABLES
  $L1=$_SESSION["T1"];//Likert 1 Variable
  $L2=$_SESSION["T2"];;//Likert 2 Variable
  $L3=$_SESSION["T3"];//Likert 3 Variable

  //SCENARIO 1 VARIABLES
  $T1=$_SESSION["T1"];//Likert Scenario 1
  $S1P1=$_SESSION["S1P1"];//S1P1 Variable
  $S1P2=$_SESSION["S1P2"];//S1P2 Variable
  $variable1=$_SESSION["variable1"];//Random variable 1 
  $variable2=$_SESSION["variable2"];//Random variable 2

  //SCENARIO 2 VARIABLES
  $T2=$_SESSION["T2"];;//Likert Scenario 2
  $S2P1=$_SESSION["S2P1"];//S2P1 Variable
  $S2P2=$_SESSION["S2P2"];//S2P2 Variable
  $variable3=$_SESSION["variable3"];//Random variable 3
  $variable4=$_SESSION["variable4"];//Random variable 4

  //SCENARIO 3 VARIABLES
  $T3=$_SESSION["T3"];//Likert Scenario 3
  $S3P1=$_SESSION["S3P1"];//S3P1 Variable
  $S3P2=$_SESSION["S3P2"];//S3P2 Variable
  $variable5=$_SESSION["variable5"];//Random variable 5 
  $variable6=$_SESSION["variable6"];//Random variable 6

  //SCENARIO 4 VARIABLES
  $T4=$_SESSION["T4"];//Likert Scenario 4
  $S4P1=$_SESSION["S4P1"];//S4P1 Variable
  $S4P2=$_SESSION["S4P2"];//S4P2 Variable
  $variable7=$_SESSION["variable7"];//Random variable 7 
  $variable8=$_SESSION["variable8"];//Random variable 8

  //SCENARIO 5 VARIABLES
  $T5=$_SESSION["T5"];//Likert Scenario 5
  $S5P1=$_SESSION["S5P1"];//S5P1 Variable
  $S5P2=$_SESSION["S5P2"];//S5P2 Variable
  $variable9=$_SESSION["variable9"];//Random variable 9 
  $variable10=$_SESSION["variable10"];//Random variable 10
  ?>
</div>
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
<div> <!--Breaks-->
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
<div> <!--SQL Login and Query-->
  <?php 
  include('connect.php');
  $conn = connect();
  try{
    //SQL Insert Results
    $sql = "INSERT INTO HITResults (
      s1p1, s1p2, s2p1, s2p2, s3p1, s3p2, s4p1, s4p2, s5p1, s5p2, t1, t2, t3, t4, t5, age, gender, education) 
      VALUES (
        '$S1P1',
        '$S1P2',
        '$S2P1',
        '$S2P2',
        '$S3P1',
        '$S3P2',
        '$S4P1',
        '$S4P2',
        '$S5P1',
        '$S5P2',
        '$T1',
        '$T2',
        '$T3',
        '$T4',
        '$T5',
        '".$_POST["AGE"]."',
        '".$_POST["gender"]."',
        '".$_POST["education"]."')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "<p id='title-cdss'>Thank you for participating in this survey.</p>";
  echo "<br>";
  echo "<br>";
  echo "<p class='survey-paragraph'>To participate in the other survey please click Scenarios in the navigation bar. To find out more the project and its developers, please click About in the navigation bar. Otherwise, you may close this window.</p>";
  } catch (PDOException $e) {
     echo "<br><p class='survey-paragraph'>An error has occured while submitting your response. Please return to the Scenarios page and recomplete they survey. <br><br>" . $e->getMessage() . "</p>";
  }
      
  $conn = null; 
  ?>

<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();
?>
</div>

</main>
</body>
</html>