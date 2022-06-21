<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            // require return a fatal error if file does not exist.
            // _once include avoid to include many time same thing
            require_once $_SERVER['DOCUMENT_ROOT'].'/Learn-PHP/php_elements/functions.php';
        ?>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="style.css" rel="stylesheet" type="text/css" />    </head>
    <body>
        <?php
            include_once $_SERVER['DOCUMENT_ROOT'].'/Learn-PHP/php_elements/header.php';
            include_once $_SERVER['DOCUMENT_ROOT'].'/Learn-PHP/php_elements/nav_bar.php';
        ?>
        <h1>hello you</h1>
        <a href="https://www.youtube.com/watch?v=cGwSm8xDSwI">link to the course<br></a>
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
            
            echo "<h2>Associative array</h2>";
            $assos_array = array("car" => 1, "ship" => 4.5);
            echo $assos_array["car"];
            foreach ($assos_array as $element => $value) {
                echo "my ", $element, " has ", $value, "score<br>";
            }

            echo "<h2>Multidimensional arrays</h2>";
            $multi_array = array(
                "Exepensive" => array("Peugeot", "Mercedes"),
                "Inexpensive" => array("Volvo", "Renaud")
            );
            foreach ($multi_array as $elem1 => $value1) {
                echo "colomn is : {$elem1}<br>";
                foreach ($value1 as $elem3 => $value2) {
                    echo $elem3, ' is ', $value2, "<br>"; 
                }
            }

            echo "<h2>Assignment operators</h2>";
            $str = "sentence 1";

            echo "normal operators : +=, -=, *=, *=, /=.<br>";
            echo "but there is also .= that is concatenate and asign.<br>";
            $str .= "sentence 2"; 
            echo $str;

            echo "<h2>Comparison operators</h2>";
            $nbr1 = 11;
            $nbr2 = 10;

            echo "normal operators : <, >, <=, >=, ==, !=.<br>";
            echo "but there is also <> that is same as !=.<br>";
            echo "and there is also === that check if egal and check if same type too.<br>";

            if ($nbr1 === $nbr2) {
                echo "same value and same type<br>";
            } else {
                echo "not same value or same type<br>";
            }

            echo "there is also the Spaceship operator : <=>.<br>";
            $result = $nbr1 <=> $nbr2;
            if ($result == -1)
                echo "nbr1 is less than nbr2";
            if ($result == 0)
                echo "the two values are egal";
            if ($result == 1)
                echo "nbr2 is less than nbr1";

            echo "<h2>Logical operators</h2>";
            echo "And == &&, Or == ||, Xor, !...<br>";
            if (TRUE And TRUE && TRUE)
                echo "is TRUE<br>";

            echo "<h2>Functions</h2>";
            echo "to create function, use the keyword function.<br>";
            function exempleFunction($num1 = 1) {
                for ($cnt = 0; $cnt < $num1; $cnt++)
                    echo "exemple<br>";
                return $num1;
            }
            exempleFunction(2);
            echo "you can ask for reference with &.<br>";
            function referenceExemple(&$x) {
                $x += 10;
            }
            $y = 1;
            echo "before y = {$y}<br>";
            referenceExemple($y);
            echo "after y = {$y}<br>";

            echo "<h2>Macros</h2>";
            echo "use define(arg1,arg2);<br>";
            define("MY_MACRO", "value");
            echo MY_MACRO;

            echo "<h2>Superglobals</h2>";
            $globals = array("GLOBALS", "\$_POST", "\$_GET", "\$_SERVER", "\$_COOKIE", "\$_SESSION", "\$_FILES");

            foreach ($globals as $element => $value) {
                echo "{$value}<br>";
            }
            $GLOBALS['variableName'] = 0;
            function add() {
                $GLOBALS['variableName'] += 1;
            }
            add();
            echo $GLOBALS['variableName'];
        ?>
        <?php
            include_once $_SERVER['DOCUMENT_ROOT'].'/Learn-PHP/php_elements/footer.php';
        ?>
    </body>
</html>
