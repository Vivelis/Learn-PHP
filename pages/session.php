<html>
    <head>

    </head>
    <body>
        <?php
            include_once $_SERVER['DOCUMENT_ROOT'].'/Learn-PHP/php_elements/header.php';
            include_once $_SERVER['DOCUMENT_ROOT'].'/Learn-PHP/php_elements/nav_bar.php';
        ?>
        Good use for sensitive informtions.<br>
        Session exist as long as the browser is open.<br>
        <?php
        session_start();

        //storing information
        $_SESSION["Name"] = "me";
        $_SESSION["Age"] = 24;

        echo "Hello " . $_SESSION["Name"];

        session_destroy();
        ?>
        <?php
            include_once $_SERVER['DOCUMENT_ROOT'].'/Learn-PHP/php_elements/footer.php';
        ?>
    </body>
</html>