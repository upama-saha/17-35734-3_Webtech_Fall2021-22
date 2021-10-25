<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
</head>
<body>
    <form action="Action.php" method="POST">
        <h4>Basic information</h4>
        First Name: <input type="text" name="firstname">
		<br>
		<br>
		Last Name: <input type="text" name="lastname">
		<br>
		<br>

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
          <h4>Contact information</h4>
          Present address:
          <input type="textarea" name="textarea">
          <br>
          <br>
          Permanent address:
          <input type="textarea" name="textarea">
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
             <input type="url" id="link" name="link"><br>

          <br>
          <fieldset>
				<legend>Account Information:</legend>

				<label for="Username">Username:</label>
				<input type="text" id="Username" name="Username" required><br>

				<label for="Password">Password:</label>
				<input type="Password" id="Password" name="Password" required><br>

			</fieldset>
          <input type="submit" name="submit" value="Register">
  
    </form>
</body>
</html>