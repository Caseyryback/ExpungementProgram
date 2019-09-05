function answer2(total) {
  var score = 0;
  if (document.getElementById('arr_1').checked) {
    score = 1;
  }
  if (document.getElementById('arr_2').checked) {
    score = 2;
  }
  if (document.getElementById('arr_3').checked) {
    score = 4;
  }
  if (document.getElementById('arr_4').checked) {
    score = 8;
  }
  if (document.getElementById('arr_5').checked) {
    score = 10;
  }
  if (document.getElementById('been1').checked) {
    score = score *9 ;
  }
  if (document.getElementById('been2').checked) {
    score = score * 7;
  }
  if (document.getElementById('been3').checked) {
    score = score * 13;
  }
  if (document.getElementById('been4').checked) {
    score = score * 15;
  }
  if (document.getElementById('been5').checked) {
    score = score * 16;
  }
  if (score == 9) {
    document.getElementById('finalScore').innerHTML = "You are eligible for expungment! Please contact 574-931-2173 or visit our contact page to schedule a meeting and to talk to about your next steps!";
  } else if (score == 14){
    document.getElementById('finalScore').innerHTML = "You are eligible for expungment! You will need to pay $156 filing fee. You may apply to have the fee waived or reduced. Please contact 574-931-2173 or visit our contact page to schedule a meeting and to talk to about your next steps!";
  } else if (score == 52){
    document.getElementById('finalScore').innerHTML = "You are eligible for expungment! You will need to pay $156 filing fee. You may apply to have the fee waived or reduced. Please contact 574-931-2173 or visit our contact page to schedule a meeting and to talk to about your next steps!";
  } else if (score == 120){
    document.getElementById('finalScore').innerHTML = "You are eligible for expungment! You will need to pay $156 filing fee. Expungment is subject to the Courts discretion. You may apply to have the fee waived or reduced. Please contact 574-931-2173 or visit our contact page to schedule a meeting and to talk to about your next steps!";
  } else if (score == 160){
    document.getElementById('finalScore').innerHTML = "You are eligible for expungment! You will need to pay $156 filing fee. Expungment is subject to the Courts discretion. Prosecutor MUST consent in writing writing to this expungement. You may apply to have the fee waived or reduced. Please contact 574-931-2173 or visit our contact page to schedule a meeting and to talk to about your next steps!";
  }
  else{
	  document.getElementById('finalScore').innerHTML = "It appears you may have answered with something that may make you ineligable.";
	  }
  document.getElementById('message').innerHTML = "This test is only meant to give you an idea of your expungement eligiblity. It should not be taken as a final decision. Please contact us at 574-931-2173 or visit our contact page to schedule a meeting to talk to a representitive about your eligibility for expungment.";

  }