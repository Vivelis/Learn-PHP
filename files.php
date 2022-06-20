<html>
    <head>

    </head>
    <body>
        Upload to the root.<br>
        move it to the Database.<br>
        <?php
            echo $name = $_FILES['file']['name'] . "<br>";
            echo $type = $_FILES['file']['type'] . "<br>";
            echo $size = $_FILES['file']['size'] . "ko<br>";
        ?> 
        <!--    enctype="multipart/form-data
                Specifies how the form data should be encoded -->
        <form action="files.php" method="post" enctype="multipart/form-data">
            <input type="file" name="file">
            <button type="submit">SUBMIT</button>
        </form>
    </body>
</html>