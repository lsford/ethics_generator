<?php session_start(); ?>
<div> <!--Session Variables-->
  <?php 
  //LIKERT VARIABLES
  $L1=$_SESSION["L1"];//Likert 1 Variable
  $L2=$_SESSION["L2"];//Likert 2 Variable
  $L3=$_SESSION["L3"];//Likert 3 Variable
  $Path1=$_SESSION['Path1'];//First Path

  //SCENARIO 1 VARIABLES
  $T1=$_SESSION["T1"];//Likert Scenario 1
  $S1P1=$_SESSION["S1P1"];//S1P1 Variable
  $S1P2=$_SESSION["S1P2"];//S1P2 Variable
  $variable1=$_SESSION["variable1"];//Random variable 1 
  $variable2=$_SESSION["variable2"];//Random variable 2

  //SCENARIO 2 VARIABLES
  $T2=$_SESSION["T2"];//Likert Scenario 2
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

  $L4=$_SESSION["L4"];//Likert 4 Variable
  $L5=$_SESSION["L5"];//Likert 5 Variable
  $L6=$_SESSION["L6"];//Likert 6 Variable
  $Path2=$_SESSION['Path2'];//First Path

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

  //Likert 3 Variables
  $T6=$_SESSION["T6"];//Likert Scenario 6
  $T7=$_SESSION["T7"];//Likert Scenario 7
  $T8=$_SESSION["T8"];//Likert Scenario 8
  $T9=$_SESSION["T9"];//Likert Scenario 9

  //Likert 4 Variables
  $T10=$_SESSION["T10"];//Likert Scenario 10
  $T11=$_SESSION["T11"];//Likert Scenario 11
  $T12=$_SESSION["T12"];//Likert Scenario 12
  $T13=$_SESSION["T13"];//Likert Scenario 13
  $T14=$_SESSION["T14"];//Likert Scenario 14
  $T15=$_SESSION["T15"];//Likert Scenario 15

  //Demographics
  $age=$_POST["AGE"];
  $gender=$_POST["gender"];
  $education=$_POST["education"];

  //Results
  $score=$_SESSION['Total'];
  $score2=$_SESSION['Total2'];
  $result = $score + $score2;
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
    <script src="functions.js"></script>
    <body id="cdss-body" onload="total()">
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
<div> <!--Echo Variables-->
 <?php 
 /*
 echo $L1 . "<br>";//Likert 1 Variable
 echo $L2 . "<br>";//Likert 2 Variable
 echo $L3 . "<br>";//Likert 3 Variable
 echo $Path1 . "<br>";//Path 1 choice
 echo "<p>The first score is: </p>" . $score. "<br>"; 
 //SCENARIO 1 VARIABLES
 echo $T1 . "<br>";//Likert Scenario 1
 echo $S1P1 . "<br>";//S1P1 Variable
 echo $S1P2 . "<br>";//S1P2 Variable
 echo $variable1 . "<br>";//Random variable 1 
 echo $variable2 . "<br>";//Random variable 2

 //SCENARIO 2 VARIABLES
 echo $T2 . "<br>";//Likert Scenario 2
 echo $S2P1 . "<br>";//S2P1 Variable
 echo $S2P2 . "<br>";//S2P2 Variable
 echo $variable3 . "<br>";//Random variable 3
 echo $variable4 . "<br>";//Random variable 4

 //SCENARIO 3 VARIABLES
 echo $T3 . "<br>";//Likert Scenario 3
 echo $S3P1 . "<br>";//S3P1 Variable
 echo $S3P2 . "<br>";//S3P2 Variable
 echo $variable5 . "<br>";//Random variable 5 
 echo $variable6 . "<br>";//Random variable 6

 echo $L4 . "<br>";//Likert 4 Variable
 echo $L5 . "<br>";//Likert 5 Variable
 echo $L6 . "<br>";//Likert 6 Variable
 echo $Path2 . "<br>";//Path 2 choice
 echo "<p>The second score is: </p>" . $score2 . "<br>";

 //SCENARIO 4 VARIABLES
 echo $T4 . "<br>";//Likert Scenario 4
 echo $S4P1 . "<br>";//S4P1 Variable
 echo $S4P2 . "<br>";//S4P2 Variable
 echo $variable7 . "<br>";//Random variable 7 
 echo $variable8 . "<br>";//Random variable 8

 //SCENARIO 5 VARIABLES
 echo $T5 . "<br>";//Likert Scenario 5
 echo $S5P1 . "<br>";//S5P1 Variable
 echo $S5P2 . "<br>";//S5P2 Variable
 echo $variable9 . "<br>";//Random variable 9 
 echo $variable10 . "<br>";//Random variable 10

 //Likert 3 Variables
 echo $T6 . "<br>";//Likert Scenario 6
 echo $T7 . "<br>";//Likert Scenario 7
 echo $T8 . "<br>";//Likert Scenario 8
 echo $T9 . "<br>";//Likert Scenario 9

 //Likert 4 Variables
 echo $T10 . "<br>";//Likert Scenario 10
 echo $T11 . "<br>";//Likert Scenario 11
 echo $T12 . "<br>";//Likert Scenario 12
 echo $T13 . "<br>";//Likert Scenario 13
 echo $T14 . "<br>";//Likert Scenario 14
 echo $T15 . "<br>";//Likert Scenario 15

 //Demographocs
 echo $age . "<br>";//Age
 echo $gender . "<br>";//Gender
 echo $education . "<br>";//Education

 echo $result;

 if($result = "6"){
   echo "You selected all the utilitarian options";
 } elseif($result = "5"){
  echo "You selected most of the utilitarian options";
 } elseif ($result = "4"){
  echo "You selected more of the utilitarian options";
 } elseif ($result = "3"){
  echo "You are between utilitarian and deontology";
 } elseif ($result = "2"){
  echo "You selected more of the deontology options";
 } elseif ($result = "1"){
  echo "You selected most of the deontology options";
 } else {
  echo "You selected all of the deontology options";
 }*/

 ?>
</div>
<div> <!--SQL Login and Query-->
  <?php 
  include('connection.php');
  $conn = connect();
  try{
    //SQL Insert Results
    $sql = "INSERT INTO HITResults (
      EthicalPath1,
    S1L1,
    S1P1,
    S1P1Variable,
    S1P2,
    S1P2Variable,
    S2L1,
    S2P1,
    S2P1Variable,
    S2P2,
    S2P2Variable,
    S3L1,
    S3P1,
    S3P1Variable,
    S3P2,
    S3P2Variable,
    EthicalPath2,
    S4L1,
    S4P1,
    S4P1Variable,
    S4P2,
    S4P2Variable,
    S5L1,
    S5P1,
    S5P1Variable,
    S5P2,
    S5P2Variable,
    Trust1,
    Trust2,
    Trust3,
    Trust4,
    Blame1,
    Blame2,
    Blame3,
    Blame4,
    Blame5,
    Blame6,
    Result,
    Age,
    Gender,
    Education) 
      VALUES (
        '$Path1',
        '$T1',
        '$S1P1',
        '$variable1',
        '$S1P2',
        '$variable2',
        '$T2',
        '$S2P1',
        '$variable3',
        '$S2P2',
        '$variable4',
        '$T3',
        '$S3P1',
        '$variable5',
        '$S3P2',
        '$variable6',
        '$Path2',
        '$T4',
        '$S4P1',
        '$variable7',
        '$S4P2',
        '$variable8',
        '$T5',
        '$S5P1',
        '$variable9',
        '$S5P2',
        '$variable10',
        '$T6',
        '$T7',
        '$T8',
        '$T9',
        '$T10',
        '$T11',
        '$T12',
        '$T13',
        '$T14',
        '$T15',
        '$result',
        '".$_POST["AGE"]."',
        '".$_POST["gender"]."',
        '".$_POST["education"]."')";
  // use exec() because no results are returned
  $conn->exec($sql);
  /*$sql = "CREATE TABLE HITResults (
    Id INT AUTO_INCREMENT PRIMARY KEY,
    EthicalPath1 VARCHAR(25),
    S1L1 VARCHAR(25),
    S1P1 VARCHAR(25),
    S1P1Variable VARCHAR(25),
    S1P2 VARCHAR(25),
    S1P2Variable VARCHAR(25),
    S2L1 VARCHAR(25),
    S2P1 VARCHAR(25),
    S2P1Variable VARCHAR(25),
    S2P2 VARCHAR(25),
    S2P2Variable VARCHAR(25),
    S3L1 VARCHAR(25),
    S3P1 VARCHAR(25),
    S3P1Variable VARCHAR(25),
    S3P2 VARCHAR(25),
    S3P2Variable VARCHAR(25),
    EthicalPath2 VARCHAR(25),
    S4L1 VARCHAR(25),
    S4P1 VARCHAR(25),
    S4P1Variable VARCHAR(25),
    S4P2 VARCHAR(25),
    S4P2Variable VARCHAR(25),
    S5L1 VARCHAR(25),
    S5P1 VARCHAR(25),
    S5P1Variable VARCHAR(25),
    S5P2 VARCHAR(25),
    S5P2Variable VARCHAR(25),
    Trust1 VARCHAR(25),
    Trust2 VARCHAR(25),
    Trust3 VARCHAR(25),
    Trust4 VARCHAR(25),
    Blame1 VARCHAR(25),
    Blame2 VARCHAR(25),
    Blame3 VARCHAR(25),
    Blame4 VARCHAR(25),
    Blame5 VARCHAR(25),
    Blame6 VARCHAR(25),
    Result VARCHAR(25),
    Age VARCHAR(25),
    Gender VARCHAR(25),
    Education VARCHAR(25)
  );";
   $conn->exec($sql);*/
  echo "<p id='title-cdss'>Thank you for participating in this survey.</p>";
  echo "<br>";
  echo "<br>";
  echo "<p class='survey-paragraph'>To participate in the other survey please click Scenarios in the navigation bar. To find out more the project and its developers, please click About in the navigation bar. Otherwise, you may close this window.</p>";
  echo "<p class='survey-paragraph'>Your result is: </p>";
  echo "<p class='survey-paragraph' id='result'></p>";
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