// JavaScript Document
function circle() {
	let circle = document.getElementsByClassName('bullet')
	for (i = 0; i < circle.length; i++) {
		circle[i].innerHTML = "&#xf111;";
	}	
}
function check() {
	let check = document.getElementsByClassName('check')
	for (i = 0; i < check.length; i++) {
		check[i].innerHTML = "&#xf00c;";
	}
}
circle();
check();