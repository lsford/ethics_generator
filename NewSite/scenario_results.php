<?php session_start(); ?>
<?php 
//SCENARIO 1 VARIABLES
$S1P1=$_SESSION["S1P1"];//S1P1 Variable
$S1P2=$_SESSION["S1P2"];//S1P2 Variable
$S1P3=$_SESSION["S1P3"];//S1P3 Variable
//SCENARIO 2 VARIABLES
$S2P1=$_SESSION["S2P1"];//S2P1 Variable
$S2P2=$_SESSION["S2P2"];//S2P2 Variable
$S2P3=$_SESSION["S2P3"];//S2P3 Variable
//SCENARIO 3 VARIABLES
$S3P1=$_SESSION["S3P1"];//S3P1 Variable
$S3P2=$_SESSION["S3P2"];//S3P2 Variable
$S3P3=$_SESSION["S3P3"];//S3P3 Variable
//SCENARIO 4 VARIABLES
$S4P1=$_SESSION["S4P1"];//S4P1 Variable
$S4P2=$_SESSION["S4P2"];//S4P2 Variable
$S4P3=$_SESSION["S4P3"];//S4P3 Variable
//SCENARIO 5 VARIABLES
$S5P1=$_SESSION["S5P1"];//S5P1 Variable
$S5P2=$_SESSION["S5P2"];//S5P2 Variable
$S5P3=$_SESSION["S5P3"];//S5P3 Variable
//LIKERT VARIABLES
$T1=$_SESSION["T1"];//T1 Variable
$T2=$_SESSION["T2"];;//T2 Variable
$T3=$_SESSION["T3"];//T3 Variable
$T4=$_SESSION["T4"];//T4 Variable
$T5=$_SESSION["T5"];//T5 Variable
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
    <script src="functions.js"></script>
    <body id="cdss-body">
        <header>
            <nav class="navigation-index">
               <a href="index.html"><h1 id="title">ƎE Exploring Ethics</h1></a>
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
  <?php echo "<p class='survey-paragraph'>Thank you for participating in this survey.</p>" ?>
</div>
<div> <!--SQL Login and Query-->
  <?php
  $servername = "domain";
  $username = "username";
  $password = "password";
  $dbname = "username";

  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //SQL Create Table
    /*$sql = "CREATE TABLE IF NOT EXISTS HITResults (
      id INT AUTO_INCREMENT PRIMARY KEY,
      s1p1 VARCHAR(255) NOT NULL,
      s1p2 VARCHAR(255) NOT NULL,
      s1p3 VARCHAR(255) NOT NULL,
      s2p1 VARCHAR(255) NOT NULL,
      s2p2 VARCHAR(255) NOT NULL,
      s2p3 VARCHAR(255) NOT NULL,
      s3p1 VARCHAR(255) NOT NULL,
      s3p2 VARCHAR(255) NOT NULL,
      s3p3 VARCHAR(255) NOT NULL,
      s4p1 VARCHAR(255) NOT NULL,
      s4p2 VARCHAR(255) NOT NULL,
      s4p3 VARCHAR(255) NOT NULL,
      s5p1 VARCHAR(255) NOT NULL,
      s5p2 VARCHAR(255) NOT NULL,
      s5p3 VARCHAR(255) NOT NULL,
      t1 VARCHAR(255) NOT NULL,
      t2 VARCHAR(255) NOT NULL,
      t3 VARCHAR(255) NOT NULL,
      t4 VARCHAR(255) NOT NULL,
      t5 VARCHAR(255) NOT NULL,
      age VARCHAR(255) NOT NULL,
      gender VARCHAR(255) NOT NULL,
      education VARCHAR(255) NOT NULL,
      reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
      )";*/

      //SQL Insert Results
      $sql = "INSERT INTO HITResults (
        s1p1, s1p2, s1p3, s2p1, s2p2, s2p3, s3p1, s3p2, s3p3, s4p1, s4p2, s4p3, s5p1, s5p2, s5p3, t1, t2, t3, t4, t5, age, gender, education) 
        VALUES (
          '$S1P1',
          '$S1P2',
          '$S1P3',
          '$S2P1',
          '$S2P2',
          '$S2P3',
          '$S3P1',
          '$S3P2',
          '$S3P3',
          '$S4P1',
          '$S4P2',
          '$S4P3',
          '$S5P1',
          '$S5P2',
          '$S5P3',
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
    /*echo "<p class='survey-paragraph'>Table CdssResults created successfully";*/
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
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