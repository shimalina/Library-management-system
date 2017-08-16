	<form method="POST" action="index.php">
	<strong><h1>Category Option</h1></strong>
	<button name="addbookcathegroy" class="but">|<a>Add Book Bategory</a>|</button><button name="addbookcathegroy" class="but">|<a>Add Book Bategory</a>|</button>
	</form>
	<br>
	<br>
<hr width="600">
<strong><h1>Search Category</h1></strong>
<hr width="600">
<table cellspacing="6">
<form class="form" method="POST">
	<td>Cathegory</td>
	<td><select name="cathegory">
	<?php
include("library/connection.php");
$sql = mysql_query("select * from book_category")
   or die('Error in query : $sql. ' .mysql_error());
   
if (mysql_num_rows($sql) > 0) 
{            
while ($row = mysql_fetch_array($sql))
	{
	echo "
	<option value=".$row['category_name']."> ".$row['category_name']."</option>
	";
	}
} 			 

	mysql_free_result($sql);
		
?>
	</select></td>
	<tr>
		<td>
	<td><button name="borrowedbook"><a class="-buttonform" ><span class="-home">Go</span></a></button></td>
	</form>
	</table>

 
   
   
   






