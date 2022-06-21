<html>
    <head>

    </head>
    <body>
        <?php
            include_once $_SERVER['DOCUMENT_ROOT'].'/Learn-PHP/php_elements/header.php';
            include_once $_SERVER['DOCUMENT_ROOT'].'/Learn-PHP/php_elements/nav_bar.php';
        ?>
        Store data on the user computer.<br>
        Do not use for secure data.<br>
        <?php
        $cookiesArguments = array("Name", "Value", "Expire", "Path", "Domain", "Security");
        $expireDate = time() + 86400 * 30;

        // if no expire, the cookie will be destroy at the end of the session
        setcookie("name", "myName", $expireDate);
        print_r($_COOKIE);
        echo "name = " . $_COOKIE['name'] . "<br>";
        ?> 
        <?php
            include_once $_SERVER['DOCUMENT_ROOT'].'/Learn-PHP/php_elements/footer.php';
        ?>
    </body>
</html>