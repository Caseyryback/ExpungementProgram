function answer(total) {
  var score = 0;
  if (document.getElementById('exp_no').checked) {
    score++;
  }
  if (document.getElementById('chg_no').checked) {
    score++;
  }
  if (document.getElementById('mur_no').checked) {
    score++;
  }
    if (document.getElementById('off_no').checked) {
    score++;
  }
    if (document.getElementById('fin_no').checked) {
    score++;
  }
  if (score != 5) {
	  document.getElementById('totalScore').innerHTML = "You may not yet be fully eligible to get your record expunged. Though this test should not be considered as a definite answer. Please call 574-931-2173 or visit our contact page to schedule a meeting for a proper assessment.";
    
  } else {
    document.getElementById('totalScore').innerHTML = "You appear to be eligible for expungment! Please contact 574-931-2173 or visit our contact page to schedule a meeting and to talk to about your next steps!";
	
  }
}