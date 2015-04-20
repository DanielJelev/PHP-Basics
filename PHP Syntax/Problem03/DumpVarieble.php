<html>
    <head>
        <meta charset="UTF-8">
        <title>Dump Variable</title>
    </head>
    <body>
    <?php
    function dump($a){
        if(gettype($a) == "integer" || gettype($a) == "double" || gettype($a) == "float") {
            var_dump($a);
            echo "<br/>";
        } else {
            echo gettype($a);
            echo "<br/>";
        }
    }
    dump('hello');
    dump(15);
    dump(1.234);
    dump(array(1,2,3));
    dump((object)[2,34]);
    ?>
    </body>
</html>