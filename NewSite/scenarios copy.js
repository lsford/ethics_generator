//Show S1P1
function s1l1Lock(){
  var showScenario = document.getElementById("scenario1");
  if (showScenario.style.display === "none"){
    showScenario.style.display = "block";
  }
  var showButton = document.getElementById("s1p1-button");
  if (showButton.style.display === "none"){
    showButton.style.display = "block";
  }
}

//Lock S1P1 and Display S1P2
function s1p1Lock() {
  if (document.getElementById("scenario1-part1-utilitarian").checked) {
    document.getElementById("scenario1-part1-deontology").disabled = true;
  } else if (document.getElementById("scenario1-part1-deontology").checked) {
    document.getElementById("scenario1-part1-utilitarian").disabled = true;
  }

  var showScenario = document.getElementById("scenario2");
  if (showScenario.style.display === "none") {
    showScenario.style.display = "block";
  }
  var showButton = document.getElementById("s1p2-button");
  if (showButton.style.display === "none") {
    showButton.style.display = "block";
  }
}

//Lock S1P2 and Show Next Page Button
function s1p2Lock() {
  if (document.getElementById("scenario1-part2-utilitarian").checked) {
    document.getElementById("scenario1-part2-deontology").disabled = true;
  } else if (document.getElementById("scenario1-part2-deontology").checked) {
    document.getElementById("scenario1-part2-utilitarian").disabled = true;
  }
  var showScenario = document.getElementById("scenario3");
  if (showScenario.style.display === "none") {
    showScenario.style.display = "block";
  }
}

//Show S2P1
function s2l1Lock(){
  var showScenario = document.getElementById("scenario4");
  if (showScenario.style.display === "none"){
    showScenario.style.display = "block";
  }
  var showButton = document.getElementById("s2p1-button");
  if (showButton.style.display === "none"){
    showButton.style.display = "block";
  }
}

//Lock S2P1 and Display S2P2
function s2p1Lock() {
  if (document.getElementById("scenario2-part1-utilitarian").checked) {
    document.getElementById("scenario2-part1-deontology").disabled = true;
  } else if (document.getElementById("scenario2-part1-deontology").checked) {
    document.getElementById("scenario2-part1-utilitarian").disabled = true;
  }
  var showScenario = document.getElementById("scenario5");
  if (showScenario.style.display === "none") {
    showScenario.style.display = "block";
  }
  var showButton = document.getElementById("s2p2-button");
  if (showButton.style.display === "none") {
    showButton.style.display = "block";
  }
}

//Lock S2P2 and Show Next Page Button
function s2p2Lock() {
  if (document.getElementById("scenario2-part2-utilitarian").checked) {
    document.getElementById("scenario2-part2-deontology").disabled = true;
  } else if (document.getElementById("scenario2-part2-deontology").checked) {
    document.getElementById("scenario2-part2-utilitarian").disabled = true;
  }
  var showScenario = document.getElementById("scenario6");
  if (showScenario.style.display === "none") {
    showScenario.style.display = "block";
  }
}

//Show S3P1
function s3l1Lock(){
  var showScenario = document.getElementById("scenario7");
  if (showScenario.style.display === "none"){
    showScenario.style.display = "block";
  }
  var showButton = document.getElementById("s3p1-button");
  if (showButton.style.display === "none"){
    showButton.style.display = "block";
  }
}

//Lock S3P1 and Display S3P2
function s3p1Lock() {
  if (document.getElementById("scenario3-part1-utilitarian").checked) {
    document.getElementById("scenario3-part1-deontology").disabled = true;
  } else if (document.getElementById("scenario3-part1-deontology").checked) {
    document.getElementById("scenario3-part1-utilitarian").disabled = true;
  }
  var showScenario = document.getElementById("scenario8");
  if (showScenario.style.display === "none") {
    showScenario.style.display = "block";
  }
  var showButton = document.getElementById("s3p2-button");
  if (showButton.style.display === "none") {
    showButton.style.display = "block";
  }
}

//Lock S3P2 and Show Next Page Button
function s3p2Lock() {
  if (document.getElementById("scenario3-part2-utilitarian").checked) {
    document.getElementById("scenario3-part2-deontology").disabled = true;
  } else if (document.getElementById("scenario3-part2-deontology").checked) {
    document.getElementById("scenario3-part2-utilitarian").disabled = true;
  }
  var showScenario = document.getElementById("scenario9");
  if (showScenario.style.display === "none") {
    showScenario.style.display = "block";
  }
}

//Show S4P1
function s4l1Lock(){
  var showScenario = document.getElementById("scenario10");
  if (showScenario.style.display === "none"){
    showScenario.style.display = "block";
  }
  var showButton = document.getElementById("s4p1-button");
  if (showButton.style.display === "none"){
    showButton.style.display = "block";
  }
}

//Lock S4P1 and Display S4P2
function s4p1Lock() {
  if (document.getElementById("scenario4-part1-utilitarian").checked) {
    document.getElementById("scenario4-part1-deontology").disabled = true;
  } else if (document.getElementById("scenario4-part1-deontology").checked) {
    document.getElementById("scenario4-part1-utilitarian").disabled = true;
  }
  var showScenario = document.getElementById("scenario11");
  if (showScenario.style.display === "none") {
    showScenario.style.display = "block";
  }
  var showButton = document.getElementById("s4p2-button");
  if (showButton.style.display === "none") {
    showButton.style.display = "block";
  }
}

//Lock S4P2 and Show Next Page Button
function s4p2Lock() {
  if (document.getElementById("scenario4-part2-utilitarian").checked) {
    document.getElementById("scenario4-part2-deontology").disabled = true;
  } else if (document.getElementById("scenario4-part2-deontology").checked) {
    document.getElementById("scenario4-part2-utilitarian").disabled = true;
  }
  var showScenario = document.getElementById("scenario12");
  if (showScenario.style.display === "none") {
    showScenario.style.display = "block";
  }
}

//Show S5P1
function s5l1Lock(){
  var showScenario = document.getElementById("scenario13");
  if (showScenario.style.display === "none"){
    showScenario.style.display = "block";
  }
  var showButton = document.getElementById("s5p1-button");
  if (showButton.style.display === "none"){
    showButton.style.display = "block";
  }
}

//Lock S5P1 and Display S5P2
function s5p1Lock() {
  if (document.getElementById("scenario5-part1-utilitarian").checked) {
    document.getElementById("scenario5-part1-deontology").disabled = true;
  } else if (document.getElementById("scenario5-part1-deontology").checked) {
    document.getElementById("scenario5-part1-utilitarian").disabled = true;
  }
  var showScenario = document.getElementById("scenario14");
  if (showScenario.style.display === "none") {
    showScenario.style.display = "block";
  }
  var showButton = document.getElementById("s5p2-button");
  if (showButton.style.display === "none") {
    showButton.style.display = "block";
  }
}

//Lock S5P2 and Show Next Page Button
function s5p2Lock() {
  if (document.getElementById("scenario5-part2-utilitarian").checked) {
    document.getElementById("scenario5-part2-deontology").disabled = true;
  } else if (document.getElementById("scenario5-part2-deontology").checked) {
    document.getElementById("scenario5-part2-utilitarian").disabled = true;
  }
  var showScenario = document.getElementById("scenario15");
  if (showScenario.style.display === "none") {
    showScenario.style.display = "block";
  }
}
