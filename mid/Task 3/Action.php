<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form Action</title>
</head>
<body>

	<h1>Form Action</h1>

	<?php 
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$gender = $_POST['gender'];
		$Dob = $_POST['Dob'];
		$Religion = $_POST['Religion'];
		$Presentaddress = $_POST['Presentaddress'];
		$Permanentaddress = $_POST['Permanentaddress'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$Username = $_POST['Username'];
		$Password = $_POST['Password']; 

		if (empty($firstname) or empty($lastname) or empty($gender) or empty($Dob) or empty($Religion) or empty($Presentaddress) or empty($Permanentaddress) or empty($phone) or empty($email) or empty($Username) or empty($Password)) {
			echo "Fill up the form properly";
		}
		else {
			$firstname = sanitize($firstname);
			$lastname = sanitize($lastname);
			$gender = sanitize($gender);
			$Dob = sanitize($Dob);
			$Religion = sanitize($Religion);
			$Presentaddress = sanitize($Presentaddress);
			$Permanentaddress = sanitize($Permanentaddress);
			$phone = sanitize($phone);
			$email = sanitize($email);
			$Username = sanitize($Username);
			$Password = sanitize($Password); 

			$handle1 = fopen("data.json", "a");

			$arr1 = array('firstname' => $firstname, 'lastname' => $lastname, 'gender' => $gender, 'Dob' =>$Dob, 'Religion' =>$Religion, 'Presentaddress' =>$Presentaddress, 'Permanentaddress' =>$Permanentaddress, 'phone' =>$phone, 'email' =>$email, 'Username' =>$Username, 'Password' =>$Password );
			$encode = json_encode($arr1);

			$res = fwrite($handle1, $encode . "\n");

			if ($res) {
				echo "Successfully saved";
			}
			else {
				echo "Error while saving";
			}
		}

		function sanitize($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
	?>
</body>
</html>