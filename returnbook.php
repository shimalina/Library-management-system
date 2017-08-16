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
				<h1>List of Borrowed Book</h1><hr /><br />
				<?php
			include('library/connection.php');
			echo "<table border=1 id='tab' width='100%' cellapdding=10 cellspacing=0>";
			$locate =mysql_query("select * from borrowers");
		if (mysql_num_rows($locate) > 0){
			echo "<tr>";
			echo "<th>ID Number</th>";
			echo "<th>Name</th>";
			echo "<th>Course</th>";
			echo "<th>Year</th>";
			echo "<th>Section</th>";
			echo "<th>Borrowed Date</th>";
			echo "<th>Date to Return</th>";
			echo "<th>Book Title</th>";
			echo "<th>Copies</th>";
			echo "<th>Return</th>";
			echo "</tr>";
		}
		else{
			echo "No current list of borrowers";
		}
			while($rows=mysql_fetch_array($locate)){
				echo "<tr>";
				echo "<td>".$rows['id_number']."</td>";
				echo "<td>".$rows['name']."</td>";
				echo "<td>".$rows['course']."</td>";
				echo "<td>".$rows['year']."</td>";
				echo "<td>".$rows['section']."</td>";
				echo "<td>".$rows['date_borrow']."</td>";
				echo "<td>".$rows['date_will_return']."</td>";
				echo "<td>".$rows['book_title']."</td>";
				echo "<td>".$rows['no_copies']."</td>";
				echo "<td title=Return><a href='returnform.php?book_title=".$rows['book_title']."&id_number=".$rows['id_number']."&cop=".$rows['no_copies']."&name=".$rows['name']."&course=".$rows['course']."&year=".$rows['year']."&section=".$rows['section']."&dob=".$rows['date_borrow']."&dor=".$rows['date_will_return']."'><center><img src='img/return.png'></center></a></td>";
				echo "</tr>";
			}
			echo "</table>";
				
		?>
				
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
			Copyright 2012 &#174; <a href="http://webgeekresources.com" target="_blank">webgeekresources.com</a>. All Rights Reserved.
			
			</div>
	</footer>
	</div>

</div>

</body>

</html>


