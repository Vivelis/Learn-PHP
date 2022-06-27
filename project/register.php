<?php
    include_once 'includes/header.php'
?>

<div id="connect">
    <h1>Register</h1>
    <p>Already ave an account ? <a href="login.php">Login here !</a></p>
    <form action="includes/register-inc.php" method="post">
        <input type="text" name="username" id="Username">
        <input type="text" name="password" id="Password">
        <input type="text" name="confirmPassword" id="ConfirmPassword">
        <button type="submit" name="submit">LOGIN</button>
    </form>
</div>

<?php
    include_once 'includes/footer.php';
?>
