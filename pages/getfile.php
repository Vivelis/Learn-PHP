<html>
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        <?php
            $filePath = "{$_SERVER['DOCUMENT_ROOT']}/Learn-PHP/uploads/file.txt";
            $output = file_get_contents($filePath);
            $lines = explode("\n", $output);

            foreach ($lines as $line) {
                echo $line . "<br>";
            }
        ?>
    </body>
</html>