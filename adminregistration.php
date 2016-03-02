<?php
$name= $_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST['password'];
$con=mysqli_connect("localhost","root","","flipkart");
$qry="insert into admin values (null,'$name','$email','$phone','$password')";
mysqli_query($con,$qry);
header("Location:adminlogin.php?status=success");

?>