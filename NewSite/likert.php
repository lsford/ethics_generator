<?php session_start(); ?>
<?php 
$_SESSION["S5P1"]=$_POST["S5P1"];//S5P1 Variable
$_SESSION["S5P2"]=$_POST["S5P2"];//S5P2 Variable
$_SESSION["S5P3"]=$_POST["S5P3"];//S5P3 Variable
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
    <script src="scenarios.js"></script>
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
  <h3 id="title-cdss">HIT Survey</h3>
<div id="cdss-container">
    <form method="POST" action="demographic.php">
        <div id="trust1">
          <p class="survey-paragraph">You would trust an artificial intelligence to make accurate decisions</p>
          <div>
           <input type="radio" id="trust1-1" name="T1" value="T1-1" required>
             <label class="scenario-option" for="trust1-1">STRONGLY AGREE</label>
           <input type="radio" id="trust1-2" name="T1" value="T1-2">
             <label class="scenario-option" for="trust1-2">AGREE</label>
           <input type="radio" id="trust1-3" name="T1" value="T1-3">
             <label class="scenario-option" for="trust1-3">NEUTRAL</label>
           <input type="radio" id="trust1-4" name="T1" value="T1-4">
             <label class="scenario-option" for="trust1-4">DISAGREE</label>
           <input type="radio" id="trust1-5" name="T1" value="T1-5">
           <label class="scenario-option" for="trust1-5">STRONGLY DISAGREE</label><br>
          </div>
        </div> 
      <!--Trust 2-->
      <div id="trust2">
        <p class="survey-paragraph">You would trust an artificial intelligence with access to your private medical data</p>
        <div>
         <input type="radio" id="trust2-1" name="T2" value="T2-1" required>
           <label class="scenario-option" for="trust2-1">STRONGLY AGREE</label>
         <input type="radio" id="trust2-2" name="T2" value="T2-2">
           <label class="scenario-option" for="trust2-2">AGREE</label>
         <input type="radio" id="trust2-3" name="T2" value="T2-3">
           <label class="scenario-option" for="trust2-3">NEUTRAL</label>
         <input type="radio" id="trust2-4" name="T2" value="T2-4">
           <label class="scenario-option" for="trust2-4">DISAGREE</label>
         <input type="radio" id="trust2-5" name="T2" value="T2-5">
         <label class="scenario-option" for="trust2-5">STRONGLY DISAGREE</label><br>
        </div>
       </div>
      <!--Trust 3-->
      <div id="trust3">
        <p class="survey-paragraph">You would trust an artificial intelligence to prescribe you medication and make correct decisions about your medication</p>
        <div>
         <input type="radio" id="trust3-1" name="T3" value="T3-1" required>
           <label class="scenario-option" for="trust3-1">STRONGLY AGREE</label>
         <input type="radio" id="trust3-2" name="T3" value="T3-2">
           <label class="scenario-option" for="trust3-2">AGREE</label>
         <input type="radio" id="trust3-3" name="T3" value="T3-3">
           <label class="scenario-option" for="trust3-3">NEUTRAL</label>
         <input type="radio" id="trust3-4" name="T3" value="T3-4">
           <label class="scenario-option" for="trust3-4">DISAGREE</label>
         <input type="radio" id="trust3-5" name="T3" value="T3-5">
         <label class="scenario-option" for="trust3-5">STRONGLY DISAGREE</label><br>
        </div>
       </div>
      <!--Trust 4-->
      <div id="trust4">
        <p class="survey-paragraph">You would trust an artificial intelligence to make decisions about your medical treatment</p>
        <div>
         <input type="radio" id="trust4-1" name="T4" value="T4-1" required>
           <label class="scenario-option" for="trust4-1">STRONGLY AGREE</label>
         <input type="radio" id="trust4-2" name="T4" value="T4-2">
           <label class="scenario-option" for="trust4-2">AGREE</label>
         <input type="radio" id="trust4-3" name="T4" value="T4-3">
           <label class="scenario-option" for="trust4-3">NEUTRAL</label>
         <input type="radio" id="trust4-4" name="T4" value="T4-4">
           <label class="scenario-option" for="trust4-4">DISAGREE</label>
         <input type="radio" id="trust4-5" name="T4" value="T4-5">
         <label class="scenario-option" for="trust4-5">STRONGLY AGREE</label><br>
        </div>
       </div>
      <!--Trust 5-->
      <div id="trust5">
        <p class="survey-paragraph">You would trust an artificial intelligence's decision making over a doctors</p>
        <div>
         <input type="radio" id="trust5-1" name="T5" value="T5-1" required>
           <label class="scenario-option" for="trust5-1">STRONGLY AGREE</label>
         <input type="radio" id="trust5-2" name="T5" value="T5-2">
           <label class="scenario-option" for="trust5-2">AGREE</label>
         <input type="radio" id="trust5-3" name="T5" value="T5-3">
           <label class="scenario-option" for="trust5-3">NEUTRAL</label>
         <input type="radio" id="trust5-4" name="T5" value="T5-4">
           <label class="scenario-option" for="trust5-4">DISAGREE</label>
         <input type="radio" id="trust5-5" name="T5" value="T5-5">
         <label class="scenario-option" for="trust5-5">STRONGLY DISAGREE</label><br>
        </div>
       </div>
      <div>
      <button class="start-button">Next Page</button>
      </div>
    </form>
</div>
</main>
</body>
</html>