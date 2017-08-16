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
				<class="but">|<a href="listofborrowers.php">List of Borrowers</a>| <a href='addbook.php'>Add Books</a> | <a href='booklist.php'>Book List</a>
				<br /><br/><hr />
	 	<table cellspacing="6">
		<form class="form" method="POST" action="insertbook.php">
		<tr>
		<td>Book ID: </td>
		<td><input type="text" name="bookid"></td>
		</tr>
		<tr>
			<td>Book Title</td>
			<td><input type="text" name="bookname"></td>
		</tr>
		<tr>
			<td>Book Category</td>
			<td><input type="text" name="bookcat"></td>
		</tr>
		<tr>
			<td>No. of Copies</td>
			<td><input type="text" name="bookcop"></td>
		</tr>
		<tr>
			<td>Status</td>
			<td><input type="text" name="bookstat"></td>
		</tr>
		<tr>
				<td></td>
				<td><button name="borrowbook"><a class="-buttonform" ><span class="-home">Go</span></a></button></td>
		</tr>
		<tr><td>
		<td>
			<?php
			
    			 if (isset($_POST['bookname'])) { 
					include('library/connection.php');
					$id=$_POST['bookid'];
					$name=$_POST['bookname'];
					$cat=$_POST['bookcat'];
					$cop=$_POST['bookcop'];
					$stat=$_POST['bookstat'];
					$query ="insert into books values('$id','$name','$cat','$cop','$stat')";
					if(mysql_query($query)){
							echo "Book Added Successfuly | <a href='booklist.php'>Book List</a>";
					}
					else{
							echo "Duplicate Entry no books added";
					}
						
			}
		?>
		</td>
		</tr>
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
<!--<script type="text/javascript">
function showUser(str)
{
if (str=="")
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  } 
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","getuser.php?q="+str,true);
xmlhttp.send();
}
</script>-->

