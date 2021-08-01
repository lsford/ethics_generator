<?php session_start(); ?>
<?php 
$_SESSION["S3P1"]=$_POST["S3P1"];//S3P1 Variable
$_SESSION["S3P2"]=$_POST["S3P2"];//S3P2 Variable
$_SESSION["S3P3"]=$_POST["S3P3"];//S3P3 Variable
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
    <form method="POST" action="scenario5.php">
      <!--Scenario 4 Part 1-->
    <div id="scenario10">
        <P class="survey-paragraph">Your local hospital uses artificial intelligence to help with cancer detection and care. The artificial intelligence can detect cancer from scans, predict the risk of cancer developing, and assign the most appropriate treatment options. A woman, aged 35-years-old, has recently had a cancer screening after a work colleague’s family member was diagnosed with breast cancer. The artificial intelligence has not-detected signs of cancer in this woman. However, based on this woman’s current lifestyle and personal and family medical history, the artificial intelligence has predicted this woman has a higher-than-average chance of developing cancer in the next 15-years. The artificial intelligence has produced two options: </P>
        <input type="radio" id="scenario4-part1-utilitarian" name="S4P1" value="S4P1-UTILITARIAN" required></input>
          <label class="scenario-option" for="scenario4-part1-utilitarian">The artificial intelligence decides this woman should have yearly breast cancer screenings to help detect cancer if it appears. This is normally only for women aged 50+, and could mean appointments will be unavailable to these women. It could also result in unnecessary extra tests that use vital hospital resources</label><br>
        <input type="radio" id="scenario4-part1-deontology" name="S4P1" value="S4P1-DEONTOLOGY">
          <label class="scenario-option" for="scenario4-part1-deontology">The artificial intelligence decides that because this woman does not yet have breast-cancer, she should alter her lifestyle to reduce the risk of her getting cancer in the future. This will include limiting alcohol, being physically active and maintaining a healthy weight and altering her diet</label><br>
      </div>
      <div>
              <button id="s4p1-button" class="confirm-button" onclick="s4p1Lock()">Confirm Choice</button>
            </div>
      <!--Scenario 4 Part 2-->
      <div id="scenario11" style="display: none;">
        <P class="survey-paragraph">Your sister, aged 35-years-old, has recently had a cancer screening after a friend of a friend is diagnosed with breast cancer. The artificial intelligence has not-detected signs of cancer in your sister. However, based on your sister’s current lifestyle and personal and family medical history, the artificial intelligence has predicted your sister has a higher-than-average chance of developing cancer in the next 15-years. The artificial intelligence has produced two options: </P>
        <input type="radio" id="scenario4-part2-utilitarian" name="S4P2" value="S4P2-UTILITARIAN"required></input>
          <label class="scenario-option" for="scenario4-part2-utilitarian">The artificial intelligence decides your sister should have yearly breast cancer screenings to help detect cancer if it appears. This is normally only for women aged 50+, and could mean appointments will be unavailable to these women. It could also result in unnecessary extra tests that use vital hospital resources</label><br>
        <input type="radio" id="scenario4-part2-deontology" name="S4P2" value="S4P2-DEONTOLOGY">
          <label class="scenario-option" for="scenario4-part2-deontology">The artificial intelligence decides that because your sister does not yet have breast-cancer, she should alter her lifestyle to reduce the risk of her getting cancer in the future. This will include limiting alcohol, being physically active and maintaining a healthy weight and altering her diet</label><br>
      </div>
      <div>
              <button id="s4p2-button" class="confirm-button" style="display: none;"onclick="s4p2Lock()">Confirm Choice</button>
            </div>
      <!--Scenario 4 Part 3-->
      <div id="scenario12" style="display: none;">
        <P class="survey-paragraph">Built into the artificial intelligence is the ability to provide an explanation on how it made its decision. You would like the artificial intelligence to explain why it has decided to recommend your sister changes her lifestyle to reduce the risk of cancer. Please select the explanation that you feel is the most appropriate and can understand: </P>
        <input type="radio" id="scenario4-part3-detailed" name="S4P3" value="S4P3-DETAILED" onclick="submitScenarios4()" required></input>
          <label class="scenario-option" for="scenario4-part3-detailed" onclick="submitScenarios4()">Data indicates certain lifestyle changes can reduce the risk of having breast cancer. These changes include regular exercise, which can reduce the risk of cancer by up to one third, and maintaining a healthy weight, resulting in reduced oestrogen production. Other beneficial changes include a healthier diet, such as limiting saturated fat, and reduced alcohol consumption</label><br>
        <input type="radio" id="scenario4-part3-simple" name="S4P3" value="S4P3-SIMPLE" onclick="submitScenarios4()">
          <label class="scenario-option" for="scenario4-part3-simple" onclick="submitScenarios4()">Changes in lifestyle can help to reduce the risk of breast cancer</label><br>
      </div>
      <div>
      <button class="start-button" id="s4-submit" style="display: none;" >Next Page</button>
      </div>
</form>
    </div>
</main>
</body>
</html>