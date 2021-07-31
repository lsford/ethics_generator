<?php session_start(); ?>
<?php 
$_SESSION["S2P1"]=$_POST["S2P1"];//S2P1 Variable
$_SESSION["S2P2"]=$_POST["S2P2"];//S2P2 Variable
$_SESSION["S2P3"]=$_POST["S2P3"];//S2P3 Variable
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
    <form method="POST" action="scenario4.php">
      <!--Scenario 3 Part 1-->
      <div id="scenario7">
        <P class="survey-paragraph">An artificial intelligence has analysed data from the past 10 years and identified a trend suggesting an incoming flu pandemic. Unfortunately, there are not enough flu vaccines available to vaccinate everyone, so only people above 67 and below 18 are eligible to be vaccinated, as they are deemed to be most at risk. Two individuals, both aged 65-years-old, visit their local GP to receive their flu vaccine. The patients explain that they own and work in a small shop, and are extremely worried about catching the flu at work and becoming seriously ill. The artificial intelligence in-charge of deciding who the vaccine is given to produces two options: </P>
        <input type="radio" id="scenario3-part1-utilitarian" name="S3P1" value="S3P1-UTILITARIAN" required></input>
          <label class="scenario-option" for="scenario3-part1-utilitarian">The artificial intelligence decides to give the two 65-year-old patients a flu vaccine, even though they are not eligible, as it means more people have been vaccinated against the flu</label><br>
        <input type="radio" id="scenario3-part1-deontology" name="S3P1" value="S3P1-DEONTOLOGY">
          <label class="scenario-option" for="scenario3-part1-deontology">The artificial intelligence decides not to give the two 65-year-old patients the flu vaccine, to avoid running out of vaccines for those most at risk</label><br>
      </div>
      <div>
          <button id="s3p1-button" class="confirm-button" onclick="s3p1Lock()">Confirm Choice</button>
        </div>
      <!--Scenario 3 Part 2-->
      <div id="scenario8" style="display: none;">
        <P class="survey-paragraph">It is your two 65-year-old grandparents who are extremely worried about catching the flu at work and becoming seriously ill. The artificial intelligence in-charge of deciding who the vaccine is given to produces two options: </P>
        <input type="radio" id="scenario3-part2-utilitarian" name="S3P2" value="S3P2-UTILITARIAN"required></input>
          <label class="scenario-option" for="scenario3-part2-utilitarian">The artificial intelligence decides to give your grandparents a flu vaccine, even though they are not eligible.</label><br>
        <input type="radio" id="scenario3-part2-deontology" name="S3P2" value="S3P2-DEONTOLOGY">
          <label class="scenario-option" for="scenario3-part2-deontology">The artificial intelligence decides not to give your grandparents the flu vaccine, as they are not eligible, to avoid running out of vaccines for those most at risk</label><br>
      </div>
      <div>
              <button id="s3p2-button" class="confirm-button" style="display: none;" onclick="s3p2Lock()">Confirm Choice</button>
            </div>
      <!--Scenario 3 Part 3-->
      <div id="scenario9" style="display: none;">
        <P class="survey-paragraph">Built into the artificial intelligence is the ability to provide an explanation on how it made its decision. You would like the artificial intelligence to explain why it has decided not to give your grandparents the vaccine. Please select the explanation that you feel is the most appropriate and can understand: </P>
        <input type="radio" id="scenario3-part3-detailed" name="S3P3" value="S3P3-DETAILED" onclick="submitScenarios3()" required></input>
          <label class="scenario-option" for="scenario3-part3-detailed" onclick="submitScenarios3()">Due to the limited supply of vaccines available, vaccines are being reserved for those most at risk. This is because complications, hospitalisations and deaths because of the flu are more likely to occur to individuals in the high risk category</label><br>
        <input type="radio" id="scenario3-part3-simple" name="S3P3" value="S3P3-SIMPLE" onclick="submitScenarios3()">
          <label class="scenario-option" for="scenario3-part3-simple" onclick="submitScenarios3()">To avoid running out of vaccines for those most at risk </label><br>
      </div>
      <div>
        <button class="start-button" id="s3-submit" style="display: none;">Next Page</button>
      </div>
</form>
    </div>
</main>
</body>
</html>