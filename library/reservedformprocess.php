<?php
	include('connection.php');
	$id_num = $_POST['id_num'];
	$name = $_POST['name'];
	$course = $_POST['course'];
	$year = $_POST['year'];
	$section = $_POST['section'];
	$year = $_POST['year'];
	$date_tobe_borrow = $_POST['date_tobe_borrow'];
	$book_title = $_POST['book_title'];
	$no_copies = $_POST['no_copies'];

	$sql = mysql_query("select * from books where book_title='$book_title'");
	while($row=mysql_fetch_array($sql)){
		$curstock=$row['no_copies'];
	}

	$current = $curstock-$no_copies;

	$sql="update books set no_copies = '$current' where book_title = '$book_title'";
	mysql_query($sql) or die ('Error updating no. copies');

		$query="INSERT INTO reserve_books (id_number,name, course,year ,section, date_tobe_borrow, book_title, no_copies ) VALUES ('$id_num','$name', '$course','$year' ,'$section', '$date_tobe_borrow', '$book_title','$no_copies')";
		mysql_query($query);
		if($query){
			header("Location:../reservedlist.php");
		}
?>
