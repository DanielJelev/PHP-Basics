<html>
    <head>
        <meta charset="UTF-8">
        <title>Print Tags</title>
    </head>
    <body>
    <p>Enter Tags</p>
    <form method="post">
        <input type="text" placeholder="Enter Input" name="input"/>
        <input type="submit" value="Submit" name="submit" />
    </form>


    <?php

    if(isset($_POST['submit']))
    {
        $input = $_POST['input'];
        $array = explode(", ",$input);
        //var_dump($array);
        for($i=0;$i<count($array);$i++){

            echo $i." : ".$array[$i];
            echo "<br/>";

        }
    }
    ?>
    </body>
</html>