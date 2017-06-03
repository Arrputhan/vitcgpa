function calc() {
var sub1 = parseInt(document.getElementById("sub1").value);
var sub2 = parseInt(document.getElementById("sub2").value);
var sub3 = parseInt(document.getElementById("sub3").value);
var sub4 = parseInt(document.getElementById("sub4").value);
var sub5 = parseInt(document.getElementById("sub5").value);
var sub6 = parseInt(document.getElementById("sub6").value);
var sub7 = parseInt(document.getElementById("sub7").value);
var sub8 = parseInt(document.getElementById("sub8").value);
var sub9 = parseInt(document.getElementById("sub9").value);
var sub10 = parseInt(document.getElementById("sub10").value);

var grade1 = document.getElementById("grade1").value;
var grade2 = document.getElementById("grade2").value;
var grade3 = document.getElementById("grade3").value;
var grade4 = document.getElementById("grade4").value;
var grade5 = document.getElementById("grade5").value;
var grade6 = document.getElementById("grade6").value;
var grade7 = document.getElementById("grade7").value;
var grade8 = document.getElementById("grade8").value;
var grade9 = document.getElementById("grade9").value;
var grade10 = document.getElementById("grade10").value;


	var x = (sub1*grade1) + (sub2*grade2) + (sub3*grade3) + (sub4*grade4) + (sub5*grade5) + 
			(sub6*grade6) + (sub7*grade7) + (sub8*grade8) + (sub9*grade9) + (sub10*grade10);
	var y = sub1+sub2+sub3+sub4+sub5+sub6+sub7+sub8+sub9+sub10;
	var gpa=x/y;
	document.getElementById("gpa").innerHTML = gpa;
}