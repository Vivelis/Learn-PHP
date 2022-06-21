<html>
    <head>

    </head>
    <body>
        <?php
            include_once $_SERVER['DOCUMENT_ROOT'].'/Learn-PHP/php_elements/header.php';
            include_once $_SERVER['DOCUMENT_ROOT'].'/Learn-PHP/php_elements/nav_bar.php';
        ?>
        <?php
            if (isset($_POST)) {
                echo $_POST['name'] . ', your form is submitted.<br>';
                echo print_r($_POST);
            }
        ?>
        <form action="post.php" method="post">
            <input type="text" name="name">
            <input type="text" name="age">
            <button type="submit">SUBMIT</button>
        </form>
        <?php
            include_once $_SERVER['DOCUMENT_ROOT'].'/Learn-PHP/php_elements/footer.php';
        ?>
    </body>
</html>