<?php session_start(); ?>
<?php 

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
    <div>
      <h3 id="title-cdss">Health Information Technology Survey</h3>
      <p id="description">Here you will be presented with a series of questions regarding the use of autonomous artificial intelligence in healthcare. For some questions you will be shown a written description of a scenario, as well as the scenario outcomes. You are asked to select which of the two outcomes you prefer. The other questions ask you to rate how strongly you agree or disagree with a statement. No knowledge of the topic is required to answer the questions. Please answer honestly.</p>
      <p id="description">Please select whether you agree or disagree with the statements below. When you have made your decision, please click <b>Confirm Choice</b>. This will lock in your answer. Please press <b>Next Page</b> to move onto the next set of questions. </p> 
    </div>
    <div id="line">
    </div>
    <div>
    <h3 id="title-cdss">HIT Survey</h3>
    </div>
<div id="cdss-container">
<form method="POST" action="#">
        <div id="likert1">
          <p class="survey-paragraph">An action is always morally correct if the consequences produce more happiness than harm</p>
          <div>
           <input class="likert" type="radio" id="OPTION-1" name="L1" value="1" required>
             <label class="scenario-option" for="OPTION-1">AGREE</label>
           <input class="likert" type="radio" id="OPTION-2" name="L1" value="0">
             <label class="scenario-option" for="OPTION-2">DISAGREE</label><br>
          </div>
        </div> 
      <!--Likert 2-->
      <div id="likert2">
        <p class="survey-paragraph">Rules should always be followed, even if breaking the rules could produce more happiness</p>
        <div>
         <input class="likert" type="radio" id="OPTION-3" name="L2" value="1" required>
           <label class="scenario-option" for="OPTION-3">AGREE</label>
         <input class="likert" type="radio" id="OPTION-4" name="L2" value="0">
           <label class="scenario-option" for="OPTION-4">DISAGREE</label><br>
        </div>
       </div>
      <!--Likert 3-->
      <div id="likert3">
        <p class="survey-paragraph">The consequences of an action are irrelevant when deciding if the action was morally right</p>
        <div>
         <input class="likert" type="radio" id="OPTION-5" name="L3" value="0" required>
           <label class="scenario-option" for="OPTION-5">AGREE</label>
         <input class="likert" type="radio" id="OPTION-6" name="L3" value="1">
           <label class="scenario-option" for="OPTION-6">DISAGREE</label><br>
        </div>
       </div>
       <input class="start-button" id="confirm" type="button" onclick="displayRadioValue()" style="display: block;" value="Confirm choice"><br>
    </form>    
    <div>
        <p class="survey-paragraph" id="target" style="display: none;"></p>
    </div>
    <!-- Deontology Form -->
    <div>
        <form action="deontology1.php" method="POST">
            <button class="start-button" id="deontology" style="display: none;">Next Page</button>
            <input type="hidden" name="path1" value="deontology-path">
            <input type="hidden" name="total" id="deon-score" value="">
        </form>
    </div>
    <!-- Utilitarian Form -->
    <div>
        <form action="utilitarian1.php" method="POST">
            <button class="start-button" id="utilitarian" style="display: none;">Next Page</button>
            <input type="hidden" name="path1" value="utilitarian-path">
            <input type="hidden" name="total" id="util-score" value="">
        </form>
    </div>
</div>
</main>
</body>
</html>