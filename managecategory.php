<?php
include("header.php");
echo "<h1 align='center'>Manage Category</h1>";
?>
	
	<form action="categorydb.php" method="POST">
		<table border="0" align="center">
			
		<tr>
			<td>Category Name:</td>
			<td><input type="text" name="categoryname" ></td>
		</tr> <br>
		<tr>
			<td>Category Description:</td>
			<td><textarea rows="5" column="10"  name="categorydesc" ></textarea></td>
		</tr> <br>
		<tr>
			<td></td>
			<td><input type="submit" value="submit"></td>
		</tr>
		</table>
	</form>
	
<?php
include("footer.php");
?>