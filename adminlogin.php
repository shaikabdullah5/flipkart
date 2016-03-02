<html>
<head>
	<title>Admin Login</title>
	<style type="text/css">
	div{
		
		background:#588c7e;
		width:100%;
		}
	#adminlogin{
			margin-left: 65%;
			padding: 15px;
		}
	#adminreg{
		background:#f2e394;
		height:83%;
	}
	#form{
		margin-left:66%;
		width:300px;
		margin-top: -50px;
	}
	#form td{
		padding:10px;
	}
	#form input{
		height:40px;
		border-radius: 5px;
		text-align: center;
	}
	table{
		margin: auto;
	}
	

	</style>
</head>
<body>
	<div>
		<table >
				<tr></tr>
				<tr><td id="heading">ADMIN LOGIN</td></tr>
		</table>
		<table id="adminlogin" border="0" >
			<tr>
				<td  >Email or Phone</td>
				<td>Password</td>
			</tr>
			<tr>
				<form action="login.php" method="post" >			
					<td><input type="text" name="username" autofocus> </td> 
					<td><input type="password" name="password"></td>
					<td><input type="submit" value="Log In"></td>
				</form>
			</tr>
	    </table>
    </div>

   	<div id="adminreg" >
   		
		<table   id="form">
            <form action="adminregistration.php" method="post">
			<tr>
				<td class="admin"><b>ADMIN REGISTRATION FORM</b></td>
			</tr>
			<tr>
				<td ><input type="text" name="name" placeholder="Enter name"></td></tr></td>
			</tr><br>
			<tr>
				<td ><input type="email" name="email" placeholder="Enter email"></td>
			</tr><br>
			<tr>
				<td ><input type="text" name="phone" placeholder="Enter mobile number "></td>
			</tr><br>
			<tr>
				<td ><input type="password" name="password" placeholder="Enter password"></td>
			</tr><br>
			<tr>
				<td class="submit"><input type="submit" value="REGISTER"></td>
			</tr>
			<tr>
				<td>
					<?php
					$msg=isset($_GET['status'])? $_GET['status']:  "";
					if($msg=="success")
					echo "you registered successfully";
				    ?>
				</td>
			</tr>
			
			</form>
		</table>


		?>
	</div>
</body>
</html>