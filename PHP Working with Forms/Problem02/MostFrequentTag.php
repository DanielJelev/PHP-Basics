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
    $counts = array_count_values($array);
    arsort($counts);
    foreach($counts as $key=>$value){
        echo "<p>$key : $value time".($value!=1?"s":"")."</p>";
    }
    $arrayKeys = array_keys($counts);
    echo "Most Frequent Tag is: $arrayKeys[0]";

}
?>
</body>
</html>