<html>
    <head>

    </head>
    <body>
        <?php
            include_once $_SERVER['DOCUMENT_ROOT'].'/Learn-PHP/php_elements/header.php';
            include_once $_SERVER['DOCUMENT_ROOT'].'/Learn-PHP/php_elements/nav_bar.php';
        ?>
        be aware, data will be displayed in the URL !<br>
        <form action="get.php" method="get">
            <input type="text" name="name">
            <input type="text" name="age">
            <button type="submit">SUBMIT</button>
        </form>
        <?php
            include_once $_SERVER['DOCUMENT_ROOT'].'/Learn-PHP/php_elements/footer.php';
        ?>
    </body>
</html>