<html>
    <head>
        <meta charset="UTF-8">
        <title>Lazy Sundays</title>
    </head>
    <body>
    <?php
    date_default_timezone_set('UTC');
    $date = '2015-04-01';
    // End date
    $end_date = '2015-04-31';
    while (strtotime($date) <= strtotime($end_date)) {
        if(strftime("%A",strtotime($date))== 'Sunday'){
            echo date("jS F, Y", strtotime($date))."<br/>";
        }
        $date = date ("Y-m-d", strtotime("+1 day", strtotime($date)));
    }
    ?>
    </body>
</html>