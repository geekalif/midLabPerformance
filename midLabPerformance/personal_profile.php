<!DOCTYPE html>
<html>
<head>
	<title>Person Profile</title>
</head>
<body>
	<h1>Personal Profile</h1>
	<form method="POST" action="check.php">
		<table border="1">
			<tr>
				<td colspan="3">
					<center><h3>PERSON PROFILE</h3></center>
				</td>
				
			</tr>
			<tr>
				<td>Name </td>
				<td><input type="text" name="name" value=""/></td>
				<td> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>
			</tr>
			<tr>
				<td>Email </td>
				<td><input type="email" name="email" value=""/></td>
				<td>  </td>
			</tr>
			<tr>
				<td>Gender: </td>
				<td> 
					<input type="radio" name="gender" value="male">Male 
					<input type="radio" name="gender" value="female">Female
					<input type="radio" name="gender" value="other">Other
				</td>
				<td>  </td>
			</tr>
			<tr>
				<td>Date Of Birth</td>
				<td>
					<input type="text" name="dd" value=""> / <input type="text" name="mm" value=""> / <input type="text" name="yy" value="">
				</td>
				<td>  </td>
			</tr>
<!-- 			<tr>
				<td>Blood Gtroup</td>
				<td>
					<select name="blood" id="blood">
						<option>A+</option>
						<option>A-</option>
						<option>B+</option>
						<option>B-</option>
						<option>O+</option>
						<option>O-</option>
						<option>AB+</option>
						<option>AB-</option>


						
					</select>
				</td>
				<td>  </td>
			</tr>
			<tr>
				<td>Degree</td>
				<td>
					<input type="checkbox" name="degree">SSC
					<input type="checkbox" name="degree">HSC
					<input type="checkbox" name="degree">BSc.
					<input type="checkbox" name="degree">MSc.
				</td>
				<td>  </td>
			</tr>
			<tr>
				<td>
					Photo
				</td>
				<td>
					<input type="file" name="fileupload" value="fileupload" id="fileupload">
				</td>
				<td>  </td>
			</tr>
			<tr>
				<td colspan="3">
					<br>
				</td>
			</tr> -->

			<tr>
				<td colspan="3">
					&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="submit" name="submit" value="Submit">
					<input type="reset" name="" value="Reset">
				</td>
			</tr>



	</table>
	</form>
	
</body>
</html>

