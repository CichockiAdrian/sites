<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        table,td,tr{border: 1px solid black;
                border-collapse: collapse;}
        table{
            width: 30%;
        }
    </style>
    <h2>Tabliczka mnożenia</h2>
<?php

if (isset($_POST["send"])) {
    $a = $_POST["a"];
    $b = $_POST["b"];
    if(is_numeric($a)&&is_numeric($b)){
        if($a>0&&$b>0){
        if($b>$a){
        echo "<table>";
        echo "<td>*";
        for ($i = $a; $i <= $b; $i++) {
            echo "<td>$i";}
        for ($i = $a; $i <= $b; $i++) {
            echo "<tr><td>$i";
            for ($j = $a; $j <= $b; $j++) {
                echo "<td>" . ($i * $j) . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    } else{
        $form_err="<p><h3>Początkowa wartość musi być mniejsza od końcowej!!!</h3></p>";
    }
    }
    else {
        $form_err= "<p><h3>Pola mogą zawierać tylko liczby większe od zera</h3></p>";
    }
    }
    else {
        $form_err= "<p><h3>Pola mogą zawierać tylko liczby</h3></p>";
    } }
?>

<form method="post" action="">
    <label for="a">Podaj liczbę początkową:</label>
    <input type="text" name="a" id="a" required>
    <br>
    <label for="b">Podaj liczbę końcową:</label>
    <input type="text" name="b" id="b" required>
    <br>
    <input type="submit" name = "send" value="Tabliczka">
    <?php
        echo $form_err;
    ?>
</form>

</body>
</html>