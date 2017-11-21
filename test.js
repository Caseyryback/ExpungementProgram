/*

document.getElementById('myForm').addEventListener('click', function(event) {
   var score=0;
    var total1=valueOf(field1);
    var total2 =valueOf(field2);
    var total3=valueOf(field3);
    document.getElementById("totalScore"). innerHTML=("totalScore");
    score = total1+total2+total3;
   
    function checkTotal() {
		document.myForm.total.value = '';
		var sum = 0;
		for (i=0;i<document.myForm.field1.length;i++) {
		  if (document.myForm.field1[i].checked) {
		  	sum = sum + parseInt(document.myForm.field1[i].value);
		  }
		}
		document.myForm.total.value = sum;
	}
	
    
    
}

function showHideTab() {
  var tabdisplay = document.getElementById('tab');
  if (tabdisplay.style.display!=='block') {
    tabdisplay.style.display='block';
    }
  else {
    tabdisplay.style.display='none';
    }
  } */

var theForm = document.forms["myForm"];

//array radio set 1
var set1 = new Array[];
score1[0] = 0;
score1[1] = 1;
//array radio set 2
var set2 = new Array[];
score2[0] = 0;
score2[1] = 1;

//check to see if checked

function getscores1()
{
var field1Score = 0;
  var theForm = document.forms["myForm"];
  var selectedChoice = theForm.elements["field1"];
  for(var i = 0; i < selectedChoice.length; i++){
   if(field1[i].checked)
   {
   field1Score = score1[selectedChoice[i].value];
   break;
   }
}
return field1Score;
}

//second set of radios
function getscores2()
{
var field2Score = 0;
  var theForm = document.forms["myForm"];
  var selectedChoice = theForm.elements["field2"];
  for(var i = 0; i < selectedChoice.length; i++){
   if(selectedChoice[i].checked)
   {
   field2Score = score2[selectedChoice[i].value];
   break;
   }
}
return field2Score;
}


//calculates total
function getTotal()
{
var total = getscores1()+ getscores2();
document.getElementById('totalPrice').innerHTML = "Total Score is " + total;
}
