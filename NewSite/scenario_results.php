<?php session_start(); ?>
<div> <!--Session Variables-->
  <?php 
  //SCENARIO 1 VARIABLES
  $S1P1=$_SESSION["S1P1"];//S1P1 Variable
  $S1P2=$_SESSION["S1P2"];//S1P2 Variable
 
  //SCENARIO 2 VARIABLES
  $S2P1=$_SESSION["S2P1"];//S2P1 Variable
  $S2P2=$_SESSION["S2P2"];//S2P2 Variable

  //SCENARIO 3 VARIABLES
  $S3P1=$_SESSION["S3P1"];//S3P1 Variable
  $S3P2=$_SESSION["S3P2"];//S3P2 Variable

  //SCENARIO 4 VARIABLES
  $S4P1=$_SESSION["S4P1"];//S4P1 Variable
  $S4P2=$_SESSION["S4P2"];//S4P2 Variable

  //SCENARIO 5 VARIABLES
  $S5P1=$_SESSION["S5P1"];//S5P1 Variable
  $S5P2=$_SESSION["S5P2"];//S5P2 Variable

  //LIKERT VARIABLES
  $T1=$_SESSION["T1"];//T1 Variable
  $T2=$_SESSION["T2"];;//T2 Variable
  $T3=$_SESSION["T3"];//T3 Variable
  $T4=$_SESSION["T4"];//T4 Variable
  $T5=$_SESSION["T5"];//T5 Variable
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
<div> <!--PHP Session Echo Test Statements-->
  <?php /*
  //TEST VARIABLES PRINT
  //SCENARIO 1
  echo "<p class='survey-paragraph'>" . $S1P1 . "</p>";
  echo "<p class='survey-paragraph'>" .  $S1P2 . "</p>";
  echo "<p class='survey-paragraph'>" .  $S1P3 . "</p>";
  //SCENARIO 2
  echo "<p class='survey-paragraph'>" .  $S2P1 . "</p>";
  echo "<p class='survey-paragraph'>" .  $S2P2 . "</p>";
  echo "<p class='survey-paragraph'>" .  $S2P3 . "</p>";
  //SCENARIO 3
  echo "<p class='survey-paragraph'>" .  $S3P1 . "</p>";
  echo "<p class='survey-paragraph'>" .  $S3P2 . "</p>";
  echo "<p class='survey-paragraph'>" .  $S3P3 . "</p>";
  //SCENARIO4
  echo "<p class='survey-paragraph'>" .  $S4P1 . "</p>";
  echo "<p class='survey-paragraph'>" .  $S4P2 . "</p>";
  echo "<p class='survey-paragraph'>" .  $S4P3. "</p>";
  //SCENARIO 5
  echo "<p class='survey-paragraph'>" .  $S5P1 . "</p>";
  echo "<p class='survey-paragraph'>" .  $S5P2 . "</p>";
  echo "<p class='survey-paragraph'>" .  $S5P3 . "</p>";
  //LIEKRT SCALE
  echo "<p class='survey-paragraph'>" .  $T1 . "</p>";
  echo "<p class='survey-paragraph'>" .  $T2 . "</p>";
  echo "<p class='survey-paragraph'>" .  $T3 . "</p>";
  echo "<p class='survey-paragraph'>" .  $T4 . "</p>";
  echo "<p class='survey-paragraph'>" .  $T5 . "</p>";
  */?>
</div>
<div> <!--Thank you statement-->
  <?php //echo "<p class='survey-paragraph'>Thank you for participating in this survey.</p>" ?>
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