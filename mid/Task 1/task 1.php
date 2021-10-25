<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
</head>
<body>
    <form action="">
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
        <input type="date">
        <br>
        <br>
        Religion:
        <select name="" id="cars">
            <option value="islam">islam</option>
            <option value="hindu">hindu</option>
            <option value="buddhu">buddhu</option>
            <option value="others">others</option>
          </select>
          <h4>Contact information</h4>
          Present address:
          <input type="textarea">
          <br>
          <br>
          Permanent address:
          <input type="textarea">
          <br>
          <br>
          Phone:
          <input type="tel">
          <br>
          <br>
          Email:
          <input type="email">
          <br>
          <br>
          <a href="#">Personal website</a>
          <br>
          <br>
          <input type="submit" name="submit" value="Register">
  
    </form>
</body>
</html>