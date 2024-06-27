<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Ulubiony samochód</h2>

<form method="post" action="">
    <label>Podaj imię:</label>
    <input type="text" name="name" id="name" required>
    <br>
    <label>Wybierz markę:</label><br>
    <input type="radio" id="html" name="marka" value="BMW">BMW</input><br>
    <input type="radio" id="html" name="marka"  value="#">VW</input><br>
    <input type="radio" id="html" name="marka"  value="%">Skoda</input><br>
    <input type="radio" id="html" name="marka"  value="§">Volvo</input><br>
    <input type="radio" id="html" name="marka"  value="§">Honda</input><br>
    <input type="radio" id="html" name="marka" value="§">Seat</input><br>

    <br>
    <input type="submit" name = "send" value="Prześlij">
    <?php
    if (isset($_POST["send"])) {
        
        
    }

    ?>
</form>

</body>
</html>

</body>
</html>