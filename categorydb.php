<?php
echo $cname= $_POST['categoryname'];
$cdesc= $_POST['categorydesc'];
$con=mysqli_connect("localhost","root","","flipkart");
$qry=" insert into categorydb values (null,'$cname','$cdesc')";
mysqli_query($con,$qry);
header("Location:managecategory.php?");
?>