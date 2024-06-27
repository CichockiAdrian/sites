<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3> Wybór kolor strony </h3>
    <form  method = "post" class="form">
        <label for="color"> Wybierz kolor tła strony </label> <br><br>
        <select name = "color" id = "color">
            <option value = "white"> Biały </option>
            <option value = "black"> Czarny </option>
            <option value = "red"> Czerwony </option>
            <option value = "blue"> Niebieski </option>
            <option value = "green"> Zielony </option>
            <option value = "pink"> Różowy </option>
            <option value = "orange">Pomarańczowy </option>
            <option value = "yellow"> Żółty </option>
        </select>  <br><br>
        <input type = "submit" name = "send" value = "Zmień kolor strony">
</form>


    <?php
        $color = '';
        if (isset($_POST["send"])) 
        {
            if(isset($_POST["color"]))
            {
                $color = $_POST["color"];
            }
        }

        echo "<body style ='background-color: $color'>";

        ?>
        
    
</body>
</html>