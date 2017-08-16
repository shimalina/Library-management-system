<?php
		include("library/connection.php");
		if(isset($_POST['updateuser'])){
				$id=$_GET['id'];
				$username=$_POST['username'];
				$password = $_POST['password'];
				//updating database from your table
				$sql="UPDATE user set username='$username',password='$password' 
				where id='".$id."'";
				mysql_query($sql) or die('Error');
				header("Location: userslist.php");
			}
			?>
