/*function scenario2() {
  var a = document.getElementById("scenario2");
  if (a.style.display === "none") {
    a.style.display = "block";
  }
}

function scenario3() {
  var b = document.getElementById("scenario3");
  if (b.style.display === "none") {
    b.style.display = "block";
  }
}

function scenario5() {
  var d = document.getElementById("scenario5");
  if (d.style.display === "none") {
    d.style.display = "block";
  }
}

function scenario6() {
  var e = document.getElementById("scenario6");
  if (e.style.display === "none") {
    e.style.display = "block";
  }
}

function scenario8() {
  var g = document.getElementById("scenario8");
  if (g.style.display === "none") {
    g.style.display = "block";
  }
}

function scenario9() {
  var h = document.getElementById("scenario9");
  if (h.style.display === "none") {
    h.style.display = "block";
  }
}

function scenario11() {
  var j = document.getElementById("scenario11");
  if (j.style.display === "none") {
    j.style.display = "block";
  }
}

function scenario12() {
  var k = document.getElementById("scenario12");
  if (k.style.display === "none") {
    k.style.display = "block";
  }
}

function scenario14() {
  var m = document.getElementById("scenario14");
  if (m.style.display === "none") {
    m.style.display = "block";
  }
}

function scenario15() {
  var n = document.getElementById("scenario15");
  if (n.style.display === "none") {
    n.style.display = "block";
  }
}
*/

//Lock S1P1 and Display S1P2
function s1p1Lock() {
  if (document.getElementById("scenario1-part1-utilitarian").checked) {
    document.getElementById("scenario1-part1-deontology").disabled = true;
  } else if (document.getElementById("scenario1-part1-deontology").checked) {
    document.getElementById("scenario1-part1-utilitarian").disabled = true;
  }

  var a = document.getElementById("scenario2");
  if (a.style.display === "none") {
    a.style.display = "block";
  }
  var aa = document.getElementById("s1p2-button");
  if (aa.style.display === "none") {
    aa.style.display = "block";
  }
}

//Lock S1P2 and Display S1P3
function s1p2Lock() {
  if (document.getElementById("scenario1-part2-utilitarian").checked) {
    document.getElementById("scenario1-part2-deontology").disabled = true;
  } else if (document.getElementById("scenario1-part2-deontology").checked) {
    document.getElementById("scenario1-part2-utilitarian").disabled = true;
  }
  var b = document.getElementById("scenario3");
  if (b.style.display === "none") {
    b.style.display = "block";
  }
}

//Display S1 Submit Button
function submitScenarios1() {
  var z = document.getElementById("s1-submit");
  if (z.style.display === "none") {
    z.style.display = "block";
  }
}

//Lock S2P1 and Display S2P2
function s2p1Lock() {
  if (document.getElementById("scenario2-part1-utilitarian").checked) {
    document.getElementById("scenario2-part1-deontology").disabled = true;
  } else if (document.getElementById("scenario2-part1-deontology").checked) {
    document.getElementById("scenario2-part1-utilitarian").disabled = true;
  }
  var d = document.getElementById("scenario5");
  if (d.style.display === "none") {
    d.style.display = "block";
  }
  var dd = document.getElementById("s2p2-button");
  if (dd.style.display === "none") {
    dd.style.display = "block";
  }
}

//Lock S2P2 and Display S2P3
function s2p2Lock() {
  if (document.getElementById("scenario2-part2-utilitarian").checked) {
    document.getElementById("scenario2-part2-deontology").disabled = true;
  } else if (document.getElementById("scenario2-part2-deontology").checked) {
    document.getElementById("scenario2-part2-utilitarian").disabled = true;
  }
  var e = document.getElementById("scenario6");
  if (e.style.display === "none") {
    e.style.display = "block";
  }
}

//Display S2 Submit Button
function submitScenarios2() {
  var y = document.getElementById("s2-submit");
  if (y.style.display === "none") {
    y.style.display = "block";
  }
}

//Lock S3P1 and Display S3P2
function s3p1Lock() {
  if (document.getElementById("scenario3-part1-utilitarian").checked) {
    document.getElementById("scenario3-part1-deontology").disabled = true;
  } else if (document.getElementById("scenario3-part1-deontology").checked) {
    document.getElementById("scenario3-part1-utilitarian").disabled = true;
  }
  var s3p1 = document.getElementById("scenario8");
  if (s3p1.style.display === "none") {
    s3p1.style.display = "block";
  }
  var s3p1_nextbutton = document.getElementById("s3p2-button");
  if (s3p1_nextbutton.style.display === "none") {
    s3p1_nextbutton.style.display = "block";
  }
}

//Lock S3P2 and Display S3P3
function s3p2Lock() {
  if (document.getElementById("scenario3-part2-utilitarian").checked) {
    document.getElementById("scenario3-part2-utilitarian").disabled = true;
  } else if (document.getElementById("scenario3-part2-deontology").checked) {
    document.getElementById("scenario3-part2-utilitarian").disabled = true;
  }
  var s3p2 = document.getElementById("scenario9");
  if (s3p2.style.display === "none") {
    s3p2.style.display = "block";
  }
}

//Display S3 Submit Button
function submitScenarios3() {
  var x = document.getElementById("s3-submit");
  if (x.style.display === "none") {
    x.style.display = "block";
  }
}

//Lock S4P1 and Display S4P2
function s4p1Lock() {
  if (document.getElementById("scenario4-part1-utilitarian").checked) {
    document.getElementById("scenario4-part1-deontology").disabled = true;
  } else if (document.getElementById("scenario4-part1-deontology").checked) {
    document.getElementById("scenario4-part1-utilitarian").disabled = true;
  }
  var s4p1 = document.getElementById("scenario11");
  if (s4p1.style.display === "none") {
    s4p1.style.display = "block";
  }
  var s4p1_nextbutton = document.getElementById("s4p2-button");
  if (s4p1_nextbutton.style.display === "none") {
    s4p1_nextbutton.style.display = "block";
  }
}

//Lock S4P2 and Display S4P3
function s4p2Lock() {
  if (document.getElementById("scenario4-part2-utilitarian").checked) {
    document.getElementById("scenario4-part2-deontology").disabled = true;
  } else if (document.getElementById("scenario4-part2-deontology").checked) {
    document.getElementById("scenario4-part2-utilitarian").disabled = true;
  }
  var s4p2 = document.getElementById("scenario12");
  if (s4p2.style.display === "none") {
    s4p2.style.display = "block";
  }
}

//Display S4 Submit Button
function submitScenarios4() {
  var w = document.getElementById("s4-submit");
  if (w.style.display === "none") {
    w.style.display = "block";
  }
}

//Lock S5P1 and Display S5P2
function s5p1Lock() {
  if (document.getElementById("scenario5-part1-utilitarian").checked) {
    document.getElementById("scenario5-part1-deontology").disabled = true;
  } else if (document.getElementById("scenario5-part1-deontology").checked) {
    document.getElementById("scenario5-part1-utilitarian").disabled = true;
  }
  var s5p1 = document.getElementById("scenario14");
  if (s5p1.style.display === "none") {
    s5p1.style.display = "block";
  }
  var s5p1_nextbutton = document.getElementById("s5p2-button");
  if (s5p1_nextbutton.style.display === "none") {
    s5p1_nextbutton.style.display = "block";
  }
}

//Lock S5P2 and Display S5P3
function s5p2Lock() {
  if (document.getElementById("scenario5-part2-utilitarian").checked) {
    document.getElementById("scenario5-part2-deontology").disabled = true;
  } else if (document.getElementById("scenario5-part2-deontology").checked) {
    document.getElementById("scenario5-part2-utilitarian").disabled = true;
  }
  var s5p2 = document.getElementById("scenario15");
  if (s5p2.style.display === "none") {
    s5p2.style.display = "block";
  }
}

//Display S5 Submit Button
function submitScenarios5() {
  var v = document.getElementById("s5-submit");
  if (v.style.display === "none") {
    v.style.display = "block";
  }
}
