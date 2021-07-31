<?php session_start(); ?>
<?php 
$_SESSION["S4P1"]=$_POST["S4P1"];//S4P1 Variable
$_SESSION["S4P2"]=$_POST["S4P2"];//S4P2 Variable
$_SESSION["S4P3"]=$_POST["S4P3"];//S4P3 Variable
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
    <script src="scenarios copy.js"></script>
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
<div id="cdss-container">
    <form method="POST" action="likert.php">
      <!--Scenario 5 Part 1-->
    <div id="scenario13">
        <P class="survey-paragraph">An artificial intelligence has been developed to support clinicians, by analysing data on current and previous patients and assigning treatment for mental health conditions or offering services that may be beneficial. Data provided to the artificial intelligence about a specific patient shows they have previously suffered with poor mental health, and data indicates similar individuals have greatly benefited from counselling sessions. However, appointments for these sessions are normally reserved for those currently suffering from severe mental health issues, and there are very few left available. The artificial intelligence responsible for making these decisions has two options: </P>
        <input type="radio" id="scenario5-part1-utilitarian" name="S5P1" value="S5P1-UTILITARIAN" required></input>
          <label class="scenario-option" for="scenario5-part1-utilitarian">The artificial intelligence identifies the benefits to the specific patient and assigns them one of the available counselling sessions, even though they are not currently being treated for a severe mental health condition</label><br>
        <input type="radio" id="scenario5-part1-deontology" name="S5P1" value="S5P1-DEONTOLOGY">
          <label class="scenario-option" for="scenario5-part1-deontology" >The artificial intelligence does not assign the specific patient a counselling session, because they do not currently have a severe mental health condition. This will allow more counselling sessions to remain available for those who require them</label><br>
      </div>
      <div>
              <button id="s5p1-button" class="confirm-button" onclick="s5p1Lock()">Confirm Choice</button>
            </div>
      <!--Scenario 5 Part 2-->
      <div id="scenario14" style="display: none;">
        <P class="survey-paragraph">It is in fact your brother who has previously suffered from mental health conditions, and an artificial intelligence has identified that he might benefit from counselling sessions, as individuals currently suffering from similar conditions have greatly benefited from these sessions. However, appointments for these sessions are normally reserved for those currently suffering from severe mental health issues, and there are very few left available. The artificial intelligence responsible for making these decisions has two options: </P>
        <input type="radio" id="scenario5-part2-utilitarian" name="S5P2" value="S5P2-UTILITARIAN"required></input>
          <label class="scenario-option" for="scenario5-part2-utilitarian">The artificial intelligence identifies the benefits to your brother, and assigns him one of the available counselling sessions, even though he is not currently being treated for a severe mental health condition</label><br>
        <input type="radio" id="scenario5-part2-deontology" name="S5P2" value="S5P2-DEONTOLOGY">
          <label class="scenario-option" for="scenario5-part2-deontology">The artificial intelligence does not assign your brother a counselling session, because he is not currently being treated for a severe mental health condition. This will allow more counselling sessions to remain available for those who require them</label><br>
      </div>
      <div>
              <button id="s5p2-button" class="confirm-button" style="display: none;" onclick="s5p2Lock()">Confirm Choice</button>
            </div>
      <!--Scenario 5 Part 3-->
      <div id="scenario15" style="display: none;">
        <P class="survey-paragraph">Built into the artificial intelligence is the ability to provide an explanation on how it made its decision. You would like the artificial intelligence to explain why it has decided to assign your brother a counselling session. Please select the explanation that you feel is the most appropriate and can understand: </P>
        <input type="radio" id="scenario5-part3-detailed" name="S5P3" value="S5P3-DETAILED" onclick="submitScenarios5()" required></input>
          <label class="scenario-option" for="scenario5-part3-detailed" onclick="submitScenarios5()">Individuals currently suffering from mental health conditions like your brothers have benefitted from counselling sessions. That is because they regain wellbeing and often leave with better decision making. It ultimately can help to stop or reduce the impact of mental health conditions</label><br>
        <input type="radio" id="scenario5-part3-simple" name="S5P3" value="S5P3-SIMPLE" onclick="submitScenarios5()">
          <label class="scenario-option" for="scenario5-part3-simple" onclick="submitScenarios5()">Individuals currently suffering from mental health conditions, like your brothers, have benefitted from counselling sessions</label><br>
      </div>
      <div>
      <button class="start-button" id="s5-submit" style="display: none;">Next Page</button>
      </div>
</form>
    </div>
</main>
</body>
</html>