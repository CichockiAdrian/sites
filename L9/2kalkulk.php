<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" class="form">
        <label for="a">Podaj 1 liczbę:</label> <br><br>
        <input type="number" name="a" id="a"> <br><br>
        <label for="b">Podaj 2 liczbę:</label> <br><br>
        <input type="number" name="b" id="b"> <br><br>
        <input type="radio" name="char" value="+" id="+">+<br>
        <input type="radio" name="char" value="-" id="-">-<br>
        <input type="radio" name="char" value="*" id="*">*<br>
        <input type="radio" name="char" value="/" id="/">/<br>
        <br><br>
        <input type="submit" name="send" value="Wykonaj">
    </form>

    <?php
    unset($a, $b, $char);
    if (isset($_POST["send"])) {
        $a = $_POST["a"];
        $b = $_POST["b"];
        $char = $_POST["char"];

        if (isset($a) && isset($b)) {
            switch ($char) {
                case "+":
                    $res = $a + $b;
                    echo "<b>$a + $b = $res</b>";
                    break;

                case "-":
                    $res = $a - $b;
                    echo "<b>$a - $b = $res</b>";
                    break;

                case "*":
                    $res = $a * $b;
                    echo "<b>$a * $b = $res</b>";
                    break;

                case "/":
                    if ($b != 0) {
                        $res = $a / $b;
                        echo "<b>$a / $b = $res</b>";
                    } else {
                        echo "Nie można dzielić przez zero.";
                    }
                    break;
            }
        } else {
            echo "Podaj obie wartości a i b.";
        }
    unset($a, $b, $char);
    }
    ?>
</body>
</html>
