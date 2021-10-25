<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Action</title>
</head>
<body>
    <h1>Form Action</h1>
    <hr>
    Firstname: <?php echo $_POST['firstname'];?>
    <br><br>
    Lastname: <?php echo $_POST['lastname'];?>
    <br><br>
    Gender:
    <?php echo $_POST ['gender'];?>
    <br><br>
    DoB:<?php echo $_POST['Dob'];?>
    <br><br>
    Religion:<?php echo $_POST['Religion'];?>

     <br><br>
    <h4>Contact information</h4>
    <br><br>
    Present address:<?php echo $_POST['textarea'];?>
    <br><br>
    Permanent address:<?php echo $_POST['textarea'];?>
    <br><br>
    Phone:<?php echo $_POST['phone'];?>
    <br><br>
    Email:<?php echo $_POST['email'];?>
    <br><br>
    Link:<?php echo $_POST['link'];?>
    <br><br>
    <legend>Account Information:</legend>
    <br><br>
    Username:<?php echo $_POST['Username'];?>
    <br><br>
    Password:<?php echo $_POST['Password'];?>
    <br><br>
    <?php echo $_POST['submit'];?>

    
</body>
</html>