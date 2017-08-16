<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="imagetoolbar" content="no" />	
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1"/>
<meta name="description" content="description"/>
<meta name="keywords" content="keywords"/> 
<meta name="author" content="author"/> 
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen"/>

<script language="Javascript" src="js/CalendarControl.js" ></script>
<title>Library System</title>

</head>

<?php

// Inialize session
session_start();

// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['username'])) {
header('Location: login.php');
}

?>

<body>

</div>

<div class="container">	
<?php
	include("library/header.php");
?>
<div class="navigation">
		<a href="index.php">HOME</a>
		<a href="reservedlist.php">RESERVED LIST</a>
		<a href="returnbook.php">RETURN BOOK</a>
		<a href="books.php">BOOKS</a>
		<a href="userslist.php">USERS</a>
		<a href="logout.php">LOGOUT</a>
		<div class="clearer"><span></span></div>
	</div>
	<div class="main">		
		
		<div class="content">
			
			<div class="node">
			<div class="menu">
	<class="but">|<a href="listofborrowers.php">List of Borrowers</a>|
	<br>
	<br>
<hr width="600">
<strong><h1>Borrow Form</h1></strong>
<hr width="600">
<table cellspacing="6">
<form class="form" action="library/borrowedbookprocess.php" method="POST" name="t1">
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
	<td><input type="text" name="book_title" value="<?php echo $_GET['name'];?>" readonly></td>
	<tr>
	<td>No. Copies</td>
	<td><input type="text" name="no_copies" value='1' readonly></td>
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
document.getElementById('date').value = day + '/' + month + '/' + year;
}
}
</script>
<body onload="addDate();">
	</div>
	</div>
	  </div>
	  


<div class="sidenav">
		<div class="right-menu">
		<h2>Calendar</h2>
		</div>
	<div class="right-content">
		<?php include("library/calendar.php");?>
</table>
</td>
</tr>

</table>


	</div>
	
</div>
	
		<div class="clearer"><span></span></div>

	</div>

	
		<div class="clearer"><span></span></div>
<footer>	
		<div class="copyright">
			<!--
			Copyright 2012 &#174; <a href="http://webgeekresources.com" target="_blank">webgeekresources.com</a>. All Rights Reserved.
			-->
			</div>
	</footer>
	</div>

</div>
</body>

</html>






   
   

