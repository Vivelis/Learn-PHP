<html>
    <head>

    </head>
    <body>
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
    </body>
</html>