function answer(total) {
  var score = 0;
  if (document.getElementById('exp_no').checked) {
    score++;
  }
  if (document.getElementById('chg_no').checked) {
    score++;
  }
  if (document.getElementById('sus_no').checked) {
    score++;
  }
  if (score != 3) {
	  document.getElementById('totalScore').innerHTML = "It appears you may have answered with something that may make you ineligable. his test should not be considered as a definite answer.  Please call 574-931-2173 or visit our contact page to schedule a meeting for a proper assessment.";
    toggletab();
  } else {
    document.getElementById('totalScore').innerHTML = "Please answer the next two questions";
	toggletab2();
  }
}