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
<form class="adduserform" method="POST">
	<table>
		<td colspan="2"><strong><h3><center>Add User Account</center></h3></td>
		<tr>
		<td>Username</td><td><input type="text" name ="user" required></td>
		<tr>
		<td>Password</td><td><input type="text" name ="pass" required></td>
		<tr>
			<td>
	<td><button name="adduser"><a class="-buttonform" ><span class="-home">Add user</span></a></button></td>
	<tr>
		<td>
	<?php
		if(isset($_POST['adduser'])){
				include("library/connection.php");
				$user = $_POST['user'];
				$pass = $_POST['pass'];
				$query="INSERT INTO user(username, password) VALUES ('$user','$pass')";
					mysql_query($query);
					if($query){
						echo "<font color='red'><blink>User Inserted!</blink></font>";
					}
					else
					echo "User Connot Insert!";
				}
	?>
	</td>
	</table>
	</form>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<hr width="625">
<strong><h1>List of User Accounts</h1></strong>
<hr width="625">
<br>

<?php
include("library/connection.php");
 $sql = mysql_query("select * from user")
   or die('Error in query : $sql. ' .mysql_error());
   
if (mysql_num_rows($sql) > 0) 
{            
	echo "<table border='1' cellspacing='0' cellpadding='10' class='table' width='600'>";
	echo "<td>Username</td>";
	echo "<td>Password</td>";
	echo "<td colspan='2'>Action</td>";
	echo "<tr>";
		}
else
	echo "No User Record form the Database!";	 
						
while ($row = mysql_fetch_array($sql))
	{
	echo "<tr>";
	echo "<td>".$row['username']."</td>";
	echo "<td>".$row['password']."</td>";
	echo "<td title ='Edit'><a href=\"edituser.php?id=$row[id]\"><center><img src='img/edit.png'></center></a></td>
	<td title ='Delete'><a href=\"deleteuser.php?id=$row[id]\"><center><img src='img/delete.png'></center></a></td>";
}	

mysql_free_result($sql);

?>
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


