<html>
	<head>
	</head>
	<body>
		<form method="post" action="employee.php">
			<table>
				<tr>
					<td>Id</td> 						
					<td>First Name</td>
					<td>Last Name</td>
					<td>Department Id</td>
					<td>Joining date</td>
					<td>Salary</td>
					<td>Commission</td>
					<td>joining month</td>
				</tr>
				<tr>
					<td><input type="number" name="id"></td>
					<td><input type="text" name="first name"></td>
					<td><input type="text" name="last name"></td>
					<td><input type="number" name="department id"></td>
					<td><input type="date" name="joining date"></td>
					<td><input type="number" name="salary"></td>
					<td><input type="number" name="commission"></td>
					<td><input type="timestamp" name="joining month"></td>
				</tr>
				<tr>
					<td><input type="Submit"></td>
				</tr>
			</table>	
		</form>	
	</body>
</html>