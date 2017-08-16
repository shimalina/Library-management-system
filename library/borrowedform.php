	<form method="POST" action="index.php">
	<button name="listofborrowers" class="but">|<a>List of Borrowers</a>|</button>
	</form>
	<br>
	<br>
<hr width="600">
<strong><h1>Borrow Form</h1></strong>
<hr width="600">
<table cellspacing="6">
<form class="form" action="library/borrowedbookprocess.php" method="POST">
	<td><label>ID number<label></td>
	<td><input type="text" name="id_num"></td>
	<tr>
	<td>Name</td>
	<td><input type="text" name="name"></td>
	<tr>
	<td>Course</td>
	<td><select name="course">
		<option>BSIT</option>
		<option>BSHM</option>
		<option>BSCJ</option>
		<option>BSA</option>
		<option>BSN</option>
		<option>BSED</option>
	</select>
	</td>
	<tr>
	<td>Year</td>
	<td><select name="year">
		<option value="I">I</option>
		<option value="II">II</option>
		<option value="III">III</option>
		<option value="IV">IV</option>
	</select></td>
	<tr>
	<td>Section</td>
	<td><select name="section">
		<option value="A">A</option>
		<option value="B">B</option>
		<option value="C">C</option>
		<option value="D">D</option>
		<option value="D">E</option>
		<option value="D">F</option>
		<option value="D">G</option>
		<option value="D">H</option>
		<option value="D">I</option>
	</select></td>
	<tr>
	<td>Date Borrowed</td>
	<td><input type="text" id="date" name="date_borrow"></td>
	<tr>
	<td>Date Will Return</td>
	<td><input type="date" name="date_will_return"></td>
	<tr>
	<td>Book Title</td>
	<td><input type="text" name="book_title"></td>
	<tr>
	<td>No. Copies</td>
	<td><input type="text" name="no_copies"></td>
	<tr>
		<td>
	<td><button name="borrowbook"><a class="-buttonform" ><span class="-home">Go</span></a></button></td>
	<tr>
	<td>
	<?php
	/*
		if(isset($_POST['borrowbook'])){
		if(empty($id_num) && empty($name) && empty($course) && empty($year) && empty($section) && empty($date_borrow) && empty($date_will_return) && empty($book_title) && empty($no_copies)){
			
		}
		else
			header("Location: library/borrowedbookprocess.php");
	}
	*/?>
	</td>
	</form>
	</table>

<script>
function addDate(){
date = new Date();
var month = date.getMonth()+1;
var day = date.getDate();
var year = date.getFullYear();

if (document.getElementById('date').value == ''){
document.getElementById('date').value = day + '-' + month + '-' + year;
}
}
</script>
<body onload="addDate();">

   
   

