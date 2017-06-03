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
<form action="cgpa.php" method="post">
<div class="container">
<div class="form-group">
<ol class="breadcrumb">
  <li><a href="cgpa.html">GPA</a></li>
  <li><a href="cgpa1.html">CGPA</a></li>
</ol>
	<h2>GPA calculator</h2> 
	<fieldset style="width: 500px;">
		<legend>Note:</legend>
		For Grade: 
			S=10,A=9,B=8,C=7,D=6,E=5,F=4
	</fieldset><br><hr>
	<label for="sub1">Credits</label>
	<input type="text" name="sub1" value="0" id="sub1" placeholder="Credits">
	<label for="grade1">Grade</label>
	<input type="text" name="garde1" value="0" id="grade1" placeholder="Grade">
<br><br>
	<label for="sub2">Credits</label>
	<input type="text" name="sub2" value="0" id="sub2" placeholder="Credits">
	<label for="grade2">Grade</label>
	<input type="text" name="garde2" value="0" id="grade2" placeholder="Grade">
<br><br>
	<label for="sub3">Credits</label>
	<input type="text" name="sub3" value="0" id="sub3" placeholder="Credits">
	<label for="grade3">Grade</label>
	<input type="text" name="garde3" value="0" id="grade3" placeholder="Grade">
<br><br>
	<label for="sub4">Credits</label>
	<input type="text" name="sub4" value="0" id="sub4" placeholder="Credits">
	<label for="grade4">Grade</label>
	<input type="text" name="garde4" value="0" id="grade4" placeholder="Grade">
<br><br>
	<label for="sub5">Credits</label>
	<input type="text" name="sub5" value="0" id="sub5" placeholder="Credits">
	<label for="grade5">Grade</label>
	<input type="text" name="garde5" value="0" id="grade5" placeholder="Grade">
<br><br>
	<label for="sub6">Credits</label>
	<input type="text" name="sub6" value="0" id="sub6" placeholder="Credits">
	<label for="grade6">Grade</label>
	<input type="text" name="garde6" value="0" id="grade6" placeholder="Grade">
<br><br>
	<label for="sub7">Credits</label>
	<input type="text" name="sub7" value="0" id="sub7" placeholder="Credits">
	<label for="grade7">Grade</label>
	<input type="text" name="garde7" value="0" id="grade7" placeholder="Grade">
<br><br>
	<label for="sub8">Credits</label>
	<input type="text" name="sub8" value="0" id="sub8" placeholder="Credits">
	<label for="grade8">Grade</label>
	<input type="text" name="garde8" value="0" id="grade8" placeholder="Grade">
<br><br>
	<label for="sub9">Credits</label>
	<input type="text" name="sub9" value="0" id="sub9" placeholder="Credits">
	<label for="grade9">Grade</label>
	<input type="text" name="garde9" value="0" id="grade9" placeholder="Grade">
<br><br>
	<label for="sub10">Credits</label>
	<input type="text" name="sub10" value="0" id="sub10" placeholder="Credits">
	<label for="grade10">Grade</label>
	<input type="text" name="garde10" value="0" id="grade10" placeholder="Grade">
<br><br>
<input type="button" class="btn btn-default btn-md" name="send" value="calculate" onclick="calc();">	
<br><hr>
<h2><p id="gpa"></p></h2>
</div>
</form>
<h3><a href="cgpa1.html">Click here to calculte CGPA!</a></h3>
</body>
<br>
<script type="text/javascript" src="script.js"></script>
</body>
</html>