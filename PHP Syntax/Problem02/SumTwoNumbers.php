<html>
    <head>
        <meta charset="UTF-8">
        <title>Sum two numbers</title>
    </head>
    <body>
    <?php
    $firstNumber = 2;
    $secondNumber = 5;
    $sum = $firstNumber+$secondNumber;
    echo number_format($sum,2);
    ?>
    <br/>
    <?php
    $firstNumber = 1.567808;
    $secondNumber = 0.356;
    $sum = $firstNumber+$secondNumber;
    echo number_format($sum,2);
    ?>
    <br/>
    <?php
    $firstNumber = 1234.5678;
    $secondNumber = 333;
    $sum = $firstNumber+$secondNumber;
    echo number_format($sum,2);
    ?>
    </body>
</html>