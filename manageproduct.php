<?php
include("header.php");
echo "<h1 align='center'>Manage Product</h1>";
?>
	
<form action="productdb.php" method="POST">
		<table border="0" align="center">
		<tr>
			<td>Category Name:</td>
			<td>
				<?php
				$con=mysqli_connect("localhost","root","","flipkart");
				$qry="select * from categorydb";
				$result=mysqli_query($con,$qry);
				?>
				<select>
					<?php
					while($fetch=mysqli_fetch_array($result))
					{
						$name=$fetch[1];
						?>
						<option><?php echo $name; ?></option>
						<?php
					}
					?>
				</select>
			</td>
	    </tr> <br>

	    <tr>
			<td>Subcategory Name:</td>
			<td>
				<?php
				$con=mysqli_connect("localhost","root","","flipkart");
				$qry="select * from subcategorydb";
				$result=mysqli_query($con,$qry);
				?>
				<select>
					<?php
					while($fetch=mysqli_fetch_array($result))
					{
						$name=$fetch[1];
						?>
						<option><?php echo $name; ?></option>
						<?php
					}
					?>
				</select>
			</td>
	    </tr> <br>
		
		<tr>
			<td>Product Name:</td>
			<td><input type="text" name="productname"><br></td>
	    </tr>

		<tr>
			<td>Product Description:</td>
			<td><textarea rows="5" column="8" name="productdesc">
		    </textarea>	</td>
	    </tr> <br>

		<tr>
			<td></td>
			<td ><input type="submit" value="submit"></td>
	</tr>
	</form>
<?php
include("footer.php");
?>