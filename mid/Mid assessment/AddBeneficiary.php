<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Beneficiary</title>
</head>
<body>
    <h1>Page 1 [Add Beneficiary]</h1>
    <p><h2>Digital Wallet</h2></p>
    <a href="./Home.php">1.Home   </a>
    <a href="./AddBeneficiary.php">2.Add Beneficiary   </a>
    <a href="./TansactionHistory.php">3.Tansaction History </a>
    <form action="AddBeneficiaryAction.php" method = "POST">
        <p><h2>Add Beneficiary</h2></p>
        Beneficiary Name:<input type="text"  name="BeneficiaryName"> Mobile No:<input type="text"  name="MobileNo"><input type="submit" value="submit">
    </form> 
</body>
</html>