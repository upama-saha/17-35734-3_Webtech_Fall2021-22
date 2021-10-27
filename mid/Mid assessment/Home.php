<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Page 1 [Home]</h1>
    <p><h2>Digital Wallet</h2></p>
    <a href="./Home.php">1.Home   </a>
    <a href="./Add Beneficiary.php">2.Add Beneficiary   </a>
    <a href="./Tansaction History.php">3.Tansaction History </a>
    <form action="HomeAction.php" method = "POST">
        <p><h2>Fund Transfer</h2></p>
        Select Catagory:
        <select name="Religion" required >
				<option value="send money"name="Religion">send money</option>
				<option value="cash out"name="Religion">cash out</option>
				<option value="mobile recharge"name="Religion">mobile recharge</option>
				<option value="others"name="Religion">others</option>
        </select>
        <br><br>
        To:
        <input type="text" id="value" name="value"  required>
            <br><br>
        Amount:    
        <input type="text" id="value" name="Amount"  required>
            <br><br>
        <input type="submit" value="submit">
    </form> 
</body>
</html>