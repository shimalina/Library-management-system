<?php
	include('library/connection.php');
	$id_num = $_POST['id_num'];
	$name = $_POST['name'];
	$course = $_POST['course'];
	$year = $_POST['year'];
	$section = $_POST['section'];
	$year = $_POST['year'];
	$date_borrow = $_POST['date_borrow'];
	$date_will_return = $_POST['date_will_return'];
	$book_title = $_POST['book_title'];
	$no_copies = $_POST['no_copies'];

	$deleteres ="delete from reserve_books where id_number=$id_num";
	mysql_query($deleteres) or die('Error Deleting reserved book');
	
		$query="INSERT INTO borrowers (id_number,name, course,year ,section, date_borrow, date_will_return, book_title, no_copies ) VALUES ('$id_num','$name', '$course','$year' ,'$section','$date_borrow', '$date_will_return', '$book_title','$no_copies')";
		mysql_query($query);
		if($query){
			header("Location:listofborrowers.php");
		}
?>
