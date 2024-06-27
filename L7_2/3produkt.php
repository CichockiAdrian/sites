<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $arr = array("prezenty","czekoladki","telefon","samochód","banany");
    
    print_r($arr);
    print "<br>";
    var_dump($arr);
    print "<br>";
    var_export($arr);
    print "<br><br>";
    //////////////////////////
    sort($arr);
    print_r($arr);
    print "<br><br>";
    /////////////////////////
    array_unshift($arr,"woda");
    print count($arr);
    print "<br><br>";
    ////////////////////////
    array_pop($arr);
    rsort($arr);
    print_r($arr);
    print "<br><br>";
    ////////////////////////
    print "<h2>Lista zakupów</h2><ol>";
    foreach($arr as $element) {
        print "<li>$element</li>";
    }
    print "</ol>";


    ?>
</body>
</html>