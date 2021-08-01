<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
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
<?php 
function connect(){
    $servername = "dragon.ukc.ac.uk";
  $username = "ls748";
  $password = "biog7us";
  $dbname = "ls748";

  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($conn) {
        return $conn;
    } else {
        echo 'Failed to connect.';
    }
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
}
?>
</body>
</html>

