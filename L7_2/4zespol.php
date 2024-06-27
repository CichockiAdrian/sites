<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $m1 = array("Białas","Kronkel Dom","Avi","Diho","Kaz Bałagane");
    $m2 = array("Hologram","Agnieszka","Ora et Labora","Yabadu","Ciach bajera");
    $as=array_combine($m1,$m2);
    /////////////////////////////
    krsort($as);
    print "<pre>";
    print_r($as);
    print "</pre>";
    ////////////////////////////
    array_push($as,"Fortnite Battle Pass");
    asort($as);
    foreach($as as $wyk => $num) {
        echo $wyk. " - " . $num;
        echo "<br>";
    }
    ?>
</body>
</html>