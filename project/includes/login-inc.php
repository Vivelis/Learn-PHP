<?php
    if (isset($_POST['submit'])) {
        // Add database connection
        require 'database.php';
        $database = 'users';

        $username = $_POST['username'];
        $password = $_POST['password'];

        if (empty($username) || empty($password)) {
            header("Location /Learn-PHP/project/login.php?error=emptyfields");
            exit();
        } else if (!preg_match("/^[a-zA-Z0-9]*/", $username)) {
            header("Location /Learn-PHP/project/login.php?error=invalidusername");
            exit();
        } else {
            $sql = "SELECT * FROM {$database} WHERE username = ?";
            $statement = mysqli_stmt_init($connection);

            if (!mysqli_stmt_prepare($statement, $sql)) {
                header("Location: /Learn-PHP/project/login.php?error=sqlerror");
                exit();
            } else {
                mysqli_stmt_bind_param($statement, "s", $username);
                mysqli_stmt_execute($statement);
                $result = mysqli_stmt_get_result($statement);

                if ($row = mysqli_fetch_assoc($result)) {
                    $passCheck = password_verify($password, $row['password']);

                    if ($passCheck == false) {
                        header("Location: /Learn-PHP/project/login.php?error=wrongpasswordorusername");
                        exit();
                    } else if ($passCheck == true) {
                        session_start();
                        
                        $_SESSION['sessionId'] = $row['id'];
                        $_SESSION['sessionUser'] = $row['username'];
                        header("Location: /Learn-PHP/project/index.php?success=loggedin");
                        exit();
                    } else {
                        header("Location: /Learn-PHP/project/login.php?error=nopasswordcheck");
                        exit();
                    }
                } else {
                    header("Location: /Learn-PHP/project/login.php?error=nouser");
                    exit();
                }
            }
        }
    } else {
        header("Location /Learn-PHP/project/index.php?error=accessforbiden");
        exit();
    }
?>