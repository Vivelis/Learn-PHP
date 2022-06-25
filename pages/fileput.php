<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    if (isset($_POST['submit'])) {
        $myFile = fopen("{$_SERVER['DOCUMENT_ROOT']}/Learn-PHP/uploads/file.txt", "a");
        $txt = "name:{$_POST['name']}\n";
        $txt .= "age:{$_POST['age']}\n";

        fwrite($myFile, $txt);
        fclose($myFile);
        echo "Data saved<br>";
    }
    ?>
    <form action="fileput.php" method="post">
        <input type="text" name="name"><br>
        <input type="text" name="age"><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>