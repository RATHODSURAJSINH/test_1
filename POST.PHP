<html>
<head>
	<title>Sessions</title>
	<style >
	form{
	padding : 10px 20px;
	border : double black;
	border-radius: 15px;
	margin: 25px;
	width: 400px;
	background-color: rgb(137, 134, 138);
					}
			h1{
				background-color:  rgb(234, 234, 235);
			}
			</style>
<body>
<center>
	<form method="post" name="From1" action="posttest.php">
	<table>
	<tr>
	<th colspan="2">SIGN IN</th>
	</tr>	
	<tr>
		<td>Enter Enrollment No:</td>
		<td >
		<input type="text" name="EnrollNo"  />
		</td>
	</tr>
	<tr>	
		<td>Enter Your Password:</td>
		<td>	
		<input type="password" name="Pass"  />
		</td>
	</tr>
	<tr>
	<td colspan="2"><center>	
			<input type="submit" name="submit" value="Login" />
		</center>
		</td>
	</tr>
	</table>
	</form></center></body></html>
