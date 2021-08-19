<?php session_start(); ?>
<?php 
$_SESSION["T3"]=$_POST["T3"];//Likert 3 Variable
$_SESSION["S3P1"]=$_POST["S3P1"];//S3P1 Variable
$_SESSION["S3P2"]=$_POST["S3P2"];//S3P2 Variable
$_SESSION["variable5"]=$_POST["variable5"];//Random variable 5
$_SESSION["variable6"]=$_POST["variable6"];//Random variable 6
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
    <script src="function.js"></script>
    <body id="cdss-body">
        <header>
            <nav class="navigation-index">
               <a href="../index.html"><h1 id="title">Ethics Explored</h1></a>
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
<div>
      <h3 id="title-cdss">Health Information Technology Survey</h3>
      <p id="description">Please select whether you agree or disagree with the statements below. When you have made your decision, please click <b>Confirm Choice</b>. This will lock in your answer. Please press <b>Next Page</b> to move onto the next set of questions. </p> 
    </div>
    <div id="line">
    </div>
  <h3 id="title-cdss">HIT Survey</h3>
<div id="cdss-container">
<form method="POST" action="#">
        <div id="likert4">
          <p class="survey-paragraph">A hospital should focus on helping as many individuals as possible, even if it means some people do not benefit</p>
          <div>
           <input class="likert2" type="radio" id="OPTION-7" name="L4" value="1" required>
             <label class="scenario-option" for="OPTION-7">AGREE</label>
           <input class="likert2" type="radio" id="OPTION-8" name="L4" value="0">
             <label class="scenario-option" for="OPTION-8">DISAGREE</label><br>
          </div>
        </div> 
      <!--Likert 2-->
      <div id="likert5">
        <p class="survey-paragraph">A hospital should always follow set procedures and rules, even if it means some people cannot be helped </p>
        <div>
         <input class="likert2" type="radio" id="OPTION-9" name="L5" value="1" required>
           <label class="scenario-option" for="OPTION-9">AGREE</label>
         <input class="likert2" type="radio" id="OPTION-10" name="L5" value="0">
           <label class="scenario-option" for="OPTION-10">DISAGREE</label><br>
        </div>
       </div>
      <!--Likert 3-->
      <div id="likert6">
        <p class="survey-paragraph">A hospital has a duty to save everyone no matter the cost </p>
        <div>
         <input class="likert2" type="radio" id="OPTION-11" name="L6" value="0" required>
           <label class="scenario-option" for="OPTION-11">AGREE</label>
         <input class="likert2" type="radio" id="OPTION-12" name="L6" value="1">
           <label class="scenario-option" for="OPTION-12">DISAGREE</label><br>
        </div>
       </div>
       <input class="start-button" id="confirm2" type="button" onclick="displayRadioValue2()" style="display: block;" value="Confirm choice"><br>
    </form>    
    <div>
        <p class="survey-paragraph" id="target2" style="display: none;"></p>
    </div>
    <!--Utilitarian Form-->
    <div>
        <form action="utilitarian4.php" method="POST">
            <button class="start-button" id="deontology2" style="display: none;">Next Page</button>
            <input type="hidden" name="path2" value="deontology-path">
            <input type="hidden" name="total2" id="deon-score2" value="">
        </form>
    </div>
    <!--Deontology Form-->
    <div>
        <form action="deontology4.php" method="POST">
            <button class="start-button" id="utilitarian2" style="display: none;">Next Page</button>
            <input type="hidden" name="path2" value="utilitarian-path">
            <input type="hidden" name="total2" id="util-score2" value="">
        </form>
    </div>
</div>
</main>
</body>
</html>