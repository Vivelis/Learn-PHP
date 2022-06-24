<html>
    <head>

    </head>
    <body>
        <?php
            include_once $_SERVER['DOCUMENT_ROOT'].'/Learn-PHP/php_elements/header.php';
            include_once $_SERVER['DOCUMENT_ROOT'].'/Learn-PHP/php_elements/nav_bar.php';
        ?>
        Upload to the root.<br>
        move it to the Database.<br>
        <!-- <?php
            echo $name = $_FILES['file']['name'] . "<br>";
            echo $type = $_FILES['file']['type'] . "<br>";
            echo $size = $_FILES['file']['size'] . "ko<br>";
        ?>  -->
        <!--    enctype="multipart/form-data
                Specifies how the form data should be encoded -->
        <form action="/Learn-PHP/php_elements/upload_system.php" method="post" enctype="multipart/form-data">
            <input type="file" name="file">
            <button type="submit">SUBMIT</button>
        </form>
        <?php
            include_once $_SERVER['DOCUMENT_ROOT'].'/Learn-PHP/php_elements/footer.php';
        ?>
    </body>
</html>