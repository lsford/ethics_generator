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
  <!--Database connection-->
<?php /*
  require ('connect.php'); 
  $conn = connect(); */
?>
<!--Thank you message-->
<div id="php-cpntainer">
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <?php
echo "<p class='survey-paragraph'>Thank you for participating in this survey.</p>"
?>
  </div>
  <!--Create-table-->
<div>
 <?php
$servername = "database";
$username = "username";
$password = "password";
$dbname = "username";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // sql to create table
  /*$sql = "CREATE TABLE IF NOT EXISTS CdssResults (
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

  //sql to insert data table
  $sql = "INSERT INTO CdssResults (
    s1p1, 
    s1p2, 
    s1p3, 
    s2p1, 
    s2p2, 
    s2p3, 
    s3p1, 
    s3p2, 
    s3p3, 
    s4p1, 
    s4p2, 
    s4p3, 
    s5p1, 
    s5p2, 
    s5p3, 
    t1, 
    t2, 
    t3, 
    t4, 
    t5, 
    age, 
    gender, 
    education) 
    VALUES (
      '".$_POST["S1P1"]."',
      '".$_POST["S1P2"]."',
      '".$_POST["S1P3"]."',
      '".$_POST["S2P1"]."',
      '".$_POST["S2P2"]."',
      '".$_POST["S2P3"]."',
      '".$_POST["S3P1"]."',
      '".$_POST["S3P2"]."',
      '".$_POST["S3P3"]."',
      '".$_POST["S4P1"]."',
      '".$_POST["S4P2"]."',
      '".$_POST["S4P3"]."',
      '".$_POST["S5P1"]."',
      '".$_POST["S5P2"]."',
      '".$_POST["S5P3"]."',
      '".$_POST["T1"]."',
      '".$_POST["T2"]."',
      '".$_POST["T3"]."',
      '".$_POST["T4"]."',
      '".$_POST["T5"]."',
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

</div>
</main>
	</body>
</html>