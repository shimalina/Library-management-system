<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="imagetoolbar" content="no" />	
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1"/>
<meta name="description" content="description"/>
<meta name="keywords" content="keywords"/> 
<meta name="author" content="Harold" /> 
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
<font color=red>Note: 1 Reservation at a time, Duplicate Student Id will not Inserted into the Reservation</font>
<br>
<br>
<hr width="600">
<strong><h1>Reserved List</h1></strong>
<hr width="600">
<br>
			<?php
include("library/connection.php");
 $sql = mysql_query("select * from reserve_books")
   or die('Error in query : $sql. ' .mysql_error());
   
if (mysql_num_rows($sql) > 0) 
{            
	echo "<table border='1' cellspacing='0' cellpadding='10' class='table' width='600'>";
	echo "<td>ID Number</td>";
	echo "<td>Name</td>";
	echo "<td>Course</td>";
	echo "<td>Year</td>";
	echo "<td>Sectiom</td>";
	echo "<td>Date To be Borrow</td>";
	echo "<td>Book Title</td>";
	echo "<td>No of Copies</td>";
	echo "<td colspan='3'>Action</td>";
	echo "<tr>";
		}
else
	echo "No Reserved Book from the Database!";		
while ($row = mysql_fetch_array($sql))
	{
	echo "<tr>";
	echo "<td>".$row['id_number']."</td>";
	echo "<td>".$row['name']."</td>";
	echo "<td>".$row['course']."</td>";
	echo "<td>".$row['year']."</td>";
	echo "<td>".$row['section']."</td>";
	echo "<td>".$row['date_tobe_borrow']."</td>";
	echo "<td>".$row['book_title']."</td>";
	echo "<td>".$row['no_copies']."</td>
	<td title ='Edit'><a href=\"editreserved.php?id_number=$row[id_number]\"><center><img src='img/edit.png'></center></a></td>
	<td title ='Delete'><a href=\"deletereserved.php?id_number=$row[id_number]\"><center><img src='img/delete.png'></center></a></td>
	<td title ='Borrow'><a href='borrowreserve.php?id_number=".$row['id_number']."&name=".$row['name']."&course=".$row['course']."&year=".$row['year']."&section=".$row['section']."&dob=".$row['date_tobe_borrow']."&book_title=".$row['book_title']."&copies=".$row['no_copies']."'><center><img src='img/brow.png'></center></a></td>";
}			 
mysql_free_result($sql);

?>

</form>
</table>

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






   
   






