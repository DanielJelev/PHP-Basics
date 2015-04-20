<html>
    <head>
        <meta charset="UTF-8">
        <title>Calculate Interest</title>
    </head>
    <body>
    <form method="post">
        Enter Amount
        <input type="text" name="amount"/> <br/>
        <input type="checkbox" name="USD" value="USD"/>USD
        <input type="checkbox" name="EURO" value="EURO"/>EUR
        <input type="checkbox" name="BGN" value="BGN"/>BGN <br/>
        Compound Interest Amount
        <input type="text" name="interest"/> <br/>
        <select name="time">
            <option value="6" name="six">6 Months</option>
            <option value="12" name="one">1 Year</option>
            <option value="24" name="two">2 Year</option>
            <option value="60" name="five">5 Year</option>
        </select>
        <input type="submit" value="Submit" name="submit" />
    </form>
    <?php
    if(isset($_POST['submit'])){
        $amount = $_POST['amount'];
        $interest = $_POST['interest'];
        $percent = $interest/1200;
        $time = $_POST['time'];
        for($i=0;$i<$time;$i++){
            $amount = $amount+$amount*$percent;
        }
        if(isset($_POST['USD'])){
            echo "$ ".round($amount,2);
        }
        else{
            echo round($amount,2);
        }
    }
    ?>
    </body>
</html>