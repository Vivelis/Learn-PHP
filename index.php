<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="style.css" rel="stylesheet" type="text/css" />    </head>
    <body>
        <header>
        </header>
        <h1>hello you</h1>
        <?php
            $name = "me";
            $my_array = array("element1", "element2", 3, 4.1);
            $second_array = array("second_array_element");

            echo "Hello World I am {$name}";
            echo nl2br("\nI can use \\ \n like\tthis\n");
            echo "you can use<br>html too", "<br>";
            echo "the type of variables is set automaticly.<br>";
            var_dump($my_array);
            print_r($my_array);
            $my_array = array_merge($my_array, $second_array);
            echo $my_array[0];
            echo $my_array[1];
            echo $my_array[2];
            echo $my_array[3];
            echo $my_array[4];
            
        ?>
    </body>
</html>
