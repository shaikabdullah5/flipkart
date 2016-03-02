<?php
echo $subcname=$_POST['subcategoryname'];
$subcdesc=$_POST['subcategorydesc'];
$con=mysqli_connect("localhost","root","","flipkart");
$qry=" insert into subcategorydb values (null,'$subcname','$subcdesc')";
mysqli_query($con,$qry);
//header("Location:managesubcategory.php?");
?>