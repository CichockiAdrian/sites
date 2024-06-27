<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$text = "Oo, ale jazz!
Hardkorowo pada deszcz
Tak na maksa wieje też
Ja łagodnie uśmiechnięta
Błyska gdzieś
Na mej dłoni czuję dreszcz
Moje oczy błyszczą też
Ja łagodnie uśmiechnięta
Ooooo, hardkorowo pada deszcz
Ja łagodnie uśmiechnięta";
//////////////////////////////////////////////
    echo "<br><br><b>a)</b><br><br>";
    print nl2br($text);
//////////////////////////////////////////////
    echo "<br><br><b>b)</b><br><br>";
    $c=mb_strlen($text);
    $c_words=str_word_count($text);
    vprintf("ten tekst składa sie z %.2f znaków oraz %.3f słów", array($c,$c_words));
//////////////////////////////////////////////
    echo "<br><br><b>c)</b><br><br>";
    $search=rtrim(strstr($text,"deszcz",true));
    print $search;
//////////////////////////////////////////////
    echo "<br><br><b>d)</b><br><br>";
    if (strpos($text, 'ą') !== false){
        echo 'jest ą';
    }
    else{
        echo 'brak litery ą';
    }
//////////////////////////////////////////////
    echo "<br><br><b>e)</b><br><br>";
    $last24=mb_substr($text,-24);
    print $last24;
//////////////////////////////////////////////
    echo "<br><br><b>f)</b><br><br>";
    $index=mb_strripos($text, 'J');
    print "Ostatni index 'J': $index<br>";
    print strrev(strstr(strrev($text),"z",true));
//////////////////////////////////////////////
    echo "<br><br><b>g)</b><br><br>";
    print nl2br(str_replace("łagodnie","krzywo",$text));
//////////////////////////////////////////////
    echo "<br><br><b>h)</b><br><br>";
    print nl2br(str_replace("Oo, ","",$text));
//////////////////////////////////////////////
    echo "<br><br><b>i)</b><br><br>";
    print nl2br(str_replace("Ja łagodnie uśmiechnięta","",$text));
//////////////////////////////////////////////
    echo "<br><br><b>j)</b><br><br>";
    $add = "To piosenka Sanah:
    ";
    $text2=$add.$text;
    print nl2br($text2);
//////////////////////////////////////////////
    echo "<br><br><b>k)</b><br><br>";
    print nl2br(strtoupper($text));
//////////////////////////////////////////////
    echo "<br><br><b>l)</b><br><br>";
    print_r (explode(" ",$text));
    print "<br><br>";
    $split = preg_split('/ /', $text);
    print_r($split);
//////////////////////////////////////////////
    echo "<br><br><b>m)</b><br><br>";
    print nl2br(str_replace(" ","***",$text));
//////////////////////////////////////////////
    echo "<br><br><b>n)</b><br><br>";
    print nl2br(strstr($text, 'B', true));
    print "<br><br>";
    $id=mb_stripos($text,'B');
    print(nl2br(mb_substr($text,0,$id)));
?>
</body>
</html>