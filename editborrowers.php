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
	<div class="main">		
		
		<div class="navigation">
		<a href="index.php">HOME</a>
		<a href="reservedlist.php">RESERVED LIST</a>
		<a href="returnbook.php">RETURN BOOK</a>
		<a href="books.php">BOOKS</a>
		<a href="userslist.php">USERS</a>
		<a href="logout.php">LOGOUT</a>
		<div class="clearer"><span></span></div>
	</div>
		
		<div class="content">
			<div class="node">
			<div class="menu">
	<button name="listofborrowers" class="but">|<a href="listofborrowers.php">List of Borrowers</a>|</button>
	<br>
	<br>
<?php
	include("library/connection.php");
	//selecting data from records based on id
	$query = "SELECT * FROM borrowers where id_number='".$_GET['id_number']."'";
	//initializing result as a query
	$result = mysql_query($query);
	//display records from records table 
	while($rows = mysql_fetch_array($result))
	{	
		$transaction_id = $rows['transaction_id'];
		$id_number = $rows['id_number'];
		$name = $rows['name'];
		$course = $rows['course'];
		$year = $rows['year'];		
		$section = $rows['section'];		
		$date_borrow	= $rows['date_borrow'];		
		$date_will_return= $rows['date_will_return'];		
		$book_title	= $rows['book_title'];		
		$no_copies = $rows['no_copies'];			
	}	
?>
<hr width="600">
<strong><h1>Edit <?php echo $name?> information</h1></strong>
<hr width="600">
<table cellspacing="6">
<form class="form" action="updateborrowers.php?transaction_id=<?php echo $transaction_id?>" method="POST">
	<td><label>ID number<label></td>
	<td><input type="text" name="id_number" value="<?php echo $id_number?>" required></td>
	<tr>
	<td>Name</td>
	<td><input type="text" name="name" value='<?php echo $name?>' required></td>
	<tr>
	<td>Course</td>
	<td><select name="course">
		<option value='<?php echo $course?>'><?php echo $course?></option>
		<option value='<?php echo $course?>'>------</option>
		<option value="BSIT">BSIT</option>
		<option value="BSHM">BSHM</option>
		<option value="BSCJ">BSCJ</option>
		<option value="BSA">BSA</option>
		<option value="BSN">BSN</option>
		<option value="BSED">BSED</option>
	</select>
	</td>
	<tr>
	<td>Year</td>
	<td><select name="year">
		<option value='<?php echo $year?>'><?php echo $year?></option>
		<option value='<?php echo $year?>'>------</option>
		<option value="I">I</option>
		<option value="II">II</option>
		<option value="III">III</option>
		<option value="IV">IV</option>
	</select></td>
	<tr>
	<td>Section</td>
	<td><select name="section">
		<option value='<?php echo $section?>'><?php echo $section?></option>
		<option value='<?php echo $section?>'>---------</option>
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
	<td><input type="text" name="date_borrow"  value='<?php echo $date_borrow?>' required></td>
	<tr>
	<td>Date Will Return</td>
	<td><input type="date" name="date_will_return"  value='<?php echo $date_will_return?>' required></td>
	<tr>
	<td>Book Title</td>
	<td><input type="text" name="book_title"  value='<?php echo $book_title?>' required></td>
	<tr>
	<td>No. Copies</td>
	<td><input type="text" name="no_copies"  value='<?php echo $no_copies?>' required></td>
	<tr>
		<td>
	<td><button name="update"><a class="-buttonform" ><span class="">Go</span></a></button></td>
	<tr>
	<td>
	</td>
	</form>
	</table>


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
