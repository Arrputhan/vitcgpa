<!DOCTYPE html>
<html>
<head>
	<title>CGPA caluculator</title>
	<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" href="styles1.css">
</head>
<body>
<form method="post" action="cgpa1.html">
<div class="container">
<ol class="breadcrumb">
  <li><a href="cgpa.html">GPA</a></li>
  <li><a href="cgpa1.html">CGPA</a></li>
</ol>
<h2>CGPA calcultor</h2>
<div class="form-group">
	<label for="credits">Total Credits:</label>
	<input type="text" class="form-control" name="credits" id="credits"><br>
</div>
<div class="form-group">
	<label for="cgpa">CGPA so far:</label>
	<input type="number" class="form-control" name="cgpa" id="cgpa"><br><br>
	</div>
<div class="form-group">
	<label for="currGPA">Current semester GPA:</label>
	<input type="number" class="form-control" name="currGPA" id="currGPA"><br><br>
	</div>
<div class="form-group">
	<label for="currCred">Current semester Credits:</label>
	<input type="text" class="form-control" name="currCred" id="currCred"><br><br>
</div>
	<input type="button" name="cgpa" class="btn btn-default btn-md" value="calculate CGPA" onclick="calcgpa();">
	<br><hr>
	<h2><p id="cgpa5"></p></h2>
</div>
</form>
<script type="text/javascript">
	function calcgpa() {
var totalCred = parseInt(document.getElementById("credits").value);
var cgpa = document.getElementById("cgpa").value;
var currCred = parseInt(document.getElementById("currCred").value);
var currGPA = document.getElementById("currGPA").value;
var x = currCred+totalCred;
var y = totalCred*cgpa;
var z = currCred*currGPA;
var w = y+z;
var realcgpa = ((totalCred*cgpa) + (currCred*currGPA))/(totalCred+currCred);
var cgpa2 = w/x;
	document.getElementById("cgpa5").innerHTML = realcgpa;

}
</script>
</body>
</html>
