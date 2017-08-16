<?php
include("library/connection.php");
//get the id frin delete.php 
$id_number = $_GET['id_number'];
//delete record based on selected id from delete.php
		$query = "Delete from reserve_books where id_number=$id_number";
		mysql_query($query);
		header("Location: reservedlist.php");
?>
