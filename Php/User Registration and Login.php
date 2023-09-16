<!DOCTYPE html>
<html>
<head>
    <title>PHP User Registration and Login</title>
</head>
<body>
    <h2>Registration</h2>
    <form method="post" action="">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" name="register" value="Register">
    </form>

    <h2>Login</h2>
    <form method="post" action="">
        <input type="text" name="loginUsername" placeholder="Username" required>
        <input type="password" name="loginPassword" placeholder="Password" required>
        <input type="submit" name="login" value="Login">
    </form>

    <?php
    session_start();

    if(isset($_POST['register'])){
        // Handle user registration here
    }

    if(isset($_POST['login'])){
        // Handle user login here
    }
    ?>
</body>
</html>
