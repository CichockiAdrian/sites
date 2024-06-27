<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Piramida</h2>
<?php


if (isset($_POST["send"])) {
    $znak = $_POST["znak"];
    $poziom = $_POST["poziom"];
    if(is_numeric($poziom)){
        if($poziom>0){

        for ($i = 1; $i <= $poziom; $i++) {
            for ($j = 1; $j <= $i; $j++){
                echo "$znak";
            }
            
            echo "<br>";
        }
    }
    else {
        $form_err= "<p><h3>Ilość poziomów musi być większa od zera</h3></p>";
    }
    }
    else{
        $form_err= "<p><h3>Ilość poziomów musi być liczbą</h3></p>";
        
    }
    
}
?>


<form method="post" action="">
    <label>Wybierz znak:</label>
    <select name="znak" id="znak" required>
        <option value="*">*</option>
        <option value="#">#</option>
        <option value="%">%</option>
        <option value="§">§</option>
        <option value="@">@</option>
        <option value="$">$</option>
        <option value="^">^</option>

    </select>
    <br>
    <label>Ile poziomów:</label>
    <input type="text" name="poziom" id="poziom" required>
    <br>
    <input type="submit" name = "send" value="Piramida">
    <?php
        echo $form_err;
    ?>
</form>

</body>
</html>
