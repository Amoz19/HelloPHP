<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Request</title>
</head>
<body>




<form action="_actions/login.php" method="post">
    <?php
    if (isset($_GET["incorect"])): ?>

        <p>Incorrect Password</p>
    <?php endif; ?>
    <input type="text" name="name" placeholder="Name"><br>
    <input type="text" name="age" placeholder="Age"><br>
    <button type="submit">Send Data</button>
    <a href="register.php">New here? Register</a>
</form>

</body>
</html>