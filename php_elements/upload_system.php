<?php
    $maxSize = 30000000;
    $isAllowed = array('jpg', 'jpeg', 'png', 'pdf');
    $fileDestination = "{$_SERVER['DOCUMENT_ROOT']}/Learn-PHP/uploads/";

    if (isset($_POST)) {
        $file = $_FILES['file'];
        $name = $_FILES['file']['name'];
        $tmp_name = $_FILES['file']['tmp_name'];
        $size = $_FILES['file']['size'];
        $error = $_FILES['file']['error'];

        // explode : split the string
        $tmpExtension = explode('.', $name);

        // php is case sensitive => take the extension and lower it
        $fileExtension = strtolower(end($tmpExtension));

        if (in_array($fileExtension, $isAllowed)) {
            if ($error === 0) {
                if ($size < $maxSize) {
                    $newFileName = uniqid('', true) . "." . $fileExtension;
                    $newFileDestination = $fileDestination . $newFileName;
                    move_uploaded_file($tmp_name, $newFileDestination);
                    // header("Location:{$_SERVER['REQUEST_URI']}?uploadedsuccess");
                } else {
                    echo "Sorry, file is too big, {$size} > {$maxSize}<br>";
                }
            } else {
                echo "Sorry, there was an error<br>";
            }
        } else {
            echo "Bad type of file : {$fileExtension}<br>";
        }
    }
?>
