<html>
    <head>
        <meta charset="UTF-8">
        <title>Non-Repeating Digits</title>
    </head>
    <body>
    <?php
    function nonRepeatingDigits($num) {
        if($num <100){
            echo "no";
        } else if($num >=100 && $num<=9999999999) {
            $output = "";
            for ($i = 100; $i <= $num; $i++) {
                $arr = array();
                $count = 0;
                $j = $i;
                while($j!=0){
                    $index = $j%10;
                    if(isset($arr[$index])== false){
                        $arr[$index] = true;
                    } else {
                        $count++;
                        break;
                    }
                    $j = (int)($j/10);
                }
                if($count==0){
                    $output.= $i.", ";
                }
            }
            $output = substr_replace($output, "", -1);
            $output = substr_replace($output, "", -1);
            echo $output;
        }else {
            echo "no";
        }
    }
    nonRepeatingDigits(1234);
    ?>
    </body>
</html>