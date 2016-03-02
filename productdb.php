<?php
echo $productname=$_POST['productname'];
$productdesc=$_POST['productdesc'];
$con=mysqli_connect("localhost","root","","flipkart");
$qry=" insert into subcategorydb values (null,'$productname','$productdesc')";
mysqli_query($con,$qry);
header("Location:manageproduct.php?");
?>