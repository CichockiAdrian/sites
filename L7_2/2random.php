<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $num1=rand(10,99);
    $num2=rand(10,99);
    $divide=$num1/$num2;
    echo "Pierwsza liczba ".$num1."<br> Druga liczba: ".$num2."<br> Iloczyn ".round($divide,3)."<br>Całkowita z góry ".ceil($divide)."<br>Całkowita z dołu ".floor($divide);

    ?>
</body>
</html>