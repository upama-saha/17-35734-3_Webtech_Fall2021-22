<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>FileIo</title>
</head>
<body>

	<h1>FileIo</h1>
	
	<form action="Action.php" method="post">
			
		<fieldset>
			<legend>Basic Information</legend>
			First Name: <input type="text" name="firstname">

			<br><br>

			Last Name: <input type="text" name="lastname">

			<br><br>
			Gender: 
			<input type="radio" name="gender" value="male">Male
			<input type="radio" name="gender" value="female">Female
			<input type="radio" name="gender" value="other">Other
			<br>
			<br>
			DoB:
			<input type="date" name="Dob">
			<br>
			<br>
			Religion:
			<select name="Religion"  id="cars">
				<option value="islam"name="Religion">islam</option>
				<option value="hindu"name="Religion">hindu</option>
				<option value="buddhu"name="Religion">buddhu</option>
				<option value="others"name="Religion">others</option>
			</select>
		</fieldset>
		<br>
		<br>
		<fieldset>
		  <legend>Contact information</legend>
		  Present address:
          <input type="textarea" name="Presentaddress">
          <br>
          <br>
		  Permanent address:
          <input type="textarea" name="Permanentaddress">
          <br>
          <br>
		  Phone:
          <input type="tel" name="phone">
          <br>
          <br>
          Email:
          <input type="email" name="email">
          <br>
          <br>

		</fieldset>
		<br><br><br>
		<fieldset>
			<legend>Account Information:</legend>

			<label for="Username">Username:</label>
			<input type="text" id="Username" name="Username" required><br>

			<label for="Password">Password:</label>
			<input type="Password" id="Password" name="Password" required><br>

		
		</fieldset>
		<input type="submit" name="submit">
	</form>

</body>
</html>