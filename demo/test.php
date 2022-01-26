<?php
if(isset($_POST["submit"])){

$username = $_POST["user"];
$password = $_POST["pass"];

echo "Welcome " . $username . "<br>" . "You're password is " . $password;
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo PHP</title>
</head>
<body>
    
<form action="test.php" method="post">
    <input type="text" placeholder="Enter User" name="user">
    <br>
    <input type="password" placeholder="Enter password" name="pass">
    <br>
    <input type="submit" name="submit">
</form>

</body>
</html>