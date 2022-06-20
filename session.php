<html>
    <head>

    </head>
    <body>
        Good use for sensitive informtions.<br>
        Session exist as long as the browser is open.<br>
        <?php
        session_start();

        //storing information
        $_SESSION["Name"] = "me";
        $_SESSION["Age"] = 24;

        echo "Hello " . $_SESSION["Name"];

        session_destroy();
        ?> 
    </body>
</html>