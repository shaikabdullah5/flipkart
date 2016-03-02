<?php
$username=$_POST['username'];
$password=$_POST['password'];
$con=mysqli_connect("localhost","root","","flipkart");
$qry="select * from admin where (admin_email='$username' or admin_phone='$username') and admin_password='$password' ";
$result=mysqli_query($con,$qry);
while($fetch=mysqli_fetch_array($result))
{
	$id=$fetch[0];
}
if($id>0)
{
	header("Location:home.php");
}
else
{
	header("Location:adminlogin.php?");

}


?>