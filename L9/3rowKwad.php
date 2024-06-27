<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rozwiązania równania kwadratowego</title>
</head>
<body>
    <h2>Równanie kwadratowe<br><br> f(x)=ax2+bx+c</h2>

    <?php
    
    if (isset($_POST["send"])) {
        $a = isset($_POST['a']) ? $_POST['a'] : null;
        $b = isset($_POST['b']) ? $_POST['b'] : null;
        $c = isset($_POST['c']) ? $_POST['c'] : null;
        if(is_numeric($a)&&is_numeric($b)&&is_numeric($c)){
        if ($a !== null && $b !== null && $c !== null) {
            $delta = $b ** 2 - 4 * $a * $c;

            if ($delta > 0) {
                $x1 = (-$b - sqrt($delta)) / (2 * $a);
                $x2 = (-$b + sqrt($delta)) / (2 * $a);
                $x1 = number_format($x1,2,",",".");
                $x2 = number_format($x2,2,",",".");
                $a = number_format($a,2,",",".");
                $b = number_format($b,2,",",".");
                $c = number_format($c,2,",",".");
                $delta = number_format($delta,2,",",".");
                echo "<p>a=$a b=$b c=$c<br> delta=$delta <br>Równanie ma dwa pierwiastki: x1 = $x1, x2 = $x2</p>";
            } elseif ($delta === 0) {
                $x = -$b / (2 * $a);
                $x = number_format($x2,2,",",".");
                $a = number_format($a,2,",",".");
                $b = number_format($b,2,",",".");
                $c = number_format($c,2,",",".");
                $delta = number_format($delta,2,",",".");
                echo "<p>Równanie ma jeden pierwiastek podwójny: x = $x</p>";
            } else {
                echo "<p>Równanie nie ma pierwiastków rzeczywistych</p>";
            }
        } else {
            echo "<p>Proszę podać wszystkie współczynniki</p>";
        }}
        else{
            echo "<p><h3>Pola mogą zawierać tylko liczby</h3></p>";
        }
        unset($a, $b, $c);
    }
    ?>

    <form method="post" action="">
        <label for="a">Współczynnik a:</label>
        <input type="text" name="a" id="a" value="<?= $a ?? '' ?>" required>
        <br>

        <label for="b">Współczynnik b:</label>
        <input type="text" name="b" id="b" value="<?= $b ?? '' ?>" required>
        <br>

        <label for="c">Współczynnik c:</label>
        <input type="text" name="c" id="c" value="<?= $c ?? '' ?>" required>
        <br>

        <input type = "submit" name = "send" value="Oblicz">
    </form>
</body>
</html>
