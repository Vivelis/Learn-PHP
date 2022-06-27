<?php
    include_once 'includes/header.php'
?>

<div id="connect">
    <h1>Log in</h1>
    <p>No account? <a href="register.php">Register here !</a></p>
    <form action="includes/login-inc.php" method="post">
        <input type="text" name="username" id="Username">
        <input type="text" name="password" id="Password">
        <button type="submit" name="submit">LOGIN</button>
    </form>
</div>

<!-- <?php
    $sqlQuery = "SELECT * FROM users WHERE id = 3";
    $result = mysqli_query($connection, $sqlQuery);
    $rowCount = mysqli_num_rows($result);

    if ($rowCount > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['username'] . "<br>";
        }
    } else {
        echo "No results found.<br>";
    }
?> -->
<?php
    include_once 'includes/footer.php';
?>
