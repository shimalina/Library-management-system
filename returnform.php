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
	$strdate = $_GET['dor'];
	$endate = date("Y-m-d");
	
	function dateDiff($start, $end) {

		$start_ts = strtotime($start);

		$end_ts = strtotime($end);

		$difference = $end_ts - $start_ts;

		return round($difference / 86400);

	}
	if($strdate>=$endate){
		$penalty = 0;
	}
	else{
		$diff = dateDiff("$strdate", "$endate");
		$penalty = $diff * 5;
	}

	
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
<strong><h1>Return Book</h1></strong>
<hr width="600">
<table cellspacing="6">
<form class="form" action="returned.php" method="POST" name="t1">
	<td><label>ID number<label></td>
	<td><input type="text" name="id_num" value="<?php echo $_GET['id_number'];?>" readonly></td>
	<tr>
	<td>Name</td>
	<td><input type="text" name="name" value="<?php echo $_GET['name'];?>" readonly></td>
	<tr>
	<td>Course</td>
	<td><select name="course">
		<option><?php echo $_GET['course'];?></option>
	</select>
	</td>
	<tr>
	<td>Year</td>
	<td><select name="year">
		<option><?php echo $_GET['year'];?></option>
	</select></td>
	<tr>
	<td>Section</td>
	<td><select name="section">
		<option><?php echo $_GET['section'];?></option>
	</select></td>
	<tr>
	<td>Date Borrowed</td>
	<td><input type="text" id="date" name="date_borrow" value="<?php echo $_GET['dob'];?>" readonly></td>
	<tr>
	<td>Date Will Return</td>
	<td><input type="date" name="date_will_return" value="<?php echo $_GET['dor']; ?>" readonly></td>
	<tr>
	<td>Book Title</td>
	<td><input type="text" name="book_title" value="<?php echo $_GET['book_title'];?>" readonly></td>
	<tr>
	<td>No. Copies</td>
	<td><input type="text" name="no_copies" value="<?php echo $_GET['cop'];?>" readonly></td>
	<tr>
	<td>Fine</td>
	<td><input type="text" name="penalty" value="<?php echo $penalty;?>" readonly><font color=red size="5px">(Php)</font</td>
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






   
   

