<form action="editexec.php" method="post">
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("library_system", $con);

$edittable=$_POST['selector'];
$N = count($edittable);
for($i=0; $i < $N; $i++)
{
	$result = mysql_query("SELECT * FROM books where id='$edittable[$i]'");
	while($row = mysql_fetch_array($result))
	  {
	  	echo '
	  	
				<table  class="form">
				<form action="#" class="form">
				<td><label>Borrowers ID<label></td>
				<td><input type="text" value="'.$row['book_id'].'"></td>
				<tr>
				<td>Lastname</td>
				<td><input type="isbn"></td>
				<tr>
				<td>Firstname</td>
				<td><input type="title"></td>
				<tr>
				<td>Middlename</td>
				<td><input type="book_id"></td>
				<tr>
				<td>Contact</td>
				<td><input type="book_id"></td>
				<tr>
				<td>Cathegory</td>
				<td><input type="book_id"></td>
				<tr>
				<td>Violation</td>
				<td><input type="book_id"></td>
				<tr>
				<td>Created By</td>
				<td><input type="book_id"></td>
				<tr>
				<td>Date Added</td>
				<td><input type="book_id"></td>
				<tr>
				<td>Date Modyfy</td>
				<td><input type="book_id"></td>
				<tr>
				<td>Last Modify By</td>
				<td><input type="book_id"></td>
				<tr>
				</form>
				</table>
				<table>
					<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
					<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
					<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
				<td><button name="home"><a class="-button silver" >Add Book</a></button></td>
				<td><button name="borrowbooksinfo"><a class="-button silver" >Go Home</a></button></td>	
				</table>
';


	  	
	  }
}
mysql_close($con);
?>
<input name="" type="submit" value="Edit">
</form>
