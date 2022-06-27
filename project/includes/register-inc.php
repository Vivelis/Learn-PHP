<?php
    if (isset($_POST['submit'])) {
        // Add database connection
        require 'database.php';

        $database = 'users';
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];

        if (empty($username) || empty($password) || empty($confirmPassword)) {
            header("Location: /Learn-PHP/project/register.php?error=emptyfields&username={$username}");
            exit();
        } else if (!preg_match("/^[a-zA-Z0-9]*/", $username)) {
            header("Location: /Learn-PHP/project/register.php?error=invalidusername&username={$username}");
            exit();
        } else if ($password !== $confirmPassword) {
            header("Location: /Learn-PHP/project/register.php?error=passwordsdonotmatch&username={$username}");
            exit();
        } else {
            $sql = "SELECT username FROM {$database} WHERE username = ?";
            $statement = mysqli_stmt_init($connection);

            if (!mysqli_stmt_prepare($statement, $sql)) {
                header("Location: /Learn-PHP/project/register.php?error=sqlerror");
                exit();
            } else {
                mysqli_stmt_bind_param($statement, "s", $username);
                mysqli_stmt_execute($statement);
                mysqli_stmt_store_result($statement);
                $rowCount = mysqli_stmt_num_rows($statement);
                if ($rowCount > 0) {
                    header("Location: /Learn-PHP/project/register.php?error=usernametaken");
                    exit(); 
                } else {
                    $sql = "INSERT INTO {$database} (username, password) VALUES (?, ?)";
                    $statement = mysqli_stmt_init($connection);
                    if (!mysqli_stmt_prepare($statement, $sql)) {
                        header("Location: /Learn-PHP/project/register.php?error=sqlerror");
                        exit(); 
                    } else {
                        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                        mysqli_stmt_bind_param($statement, "ss", $username, $hashedPassword);
                        mysqli_stmt_execute($statement);
                        mysqli_stmt_store_result($statement);
                        header("Location: /Learn-PHP/project/register.php?success=registered");
                        exit(); 
                    }
                }
            }
        }
        mysqli_stmt_close($stmt);
        mysqli_close($connection);
    }
?>