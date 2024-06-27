<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "Witamy dnia ".date("d.m.Y")."<br>";
    $day=date("l");
    $months=date("F");

    switch($day){
        case "Monday":
            $day = "Poniedziałek";
            break;    
        case "Tuesday":
            $day = "Wtorek";
            break;
        case "Wednesday":
            $day = "Środę";
            break;
        case "Thursday":
            $day = "Czwartek";
            break;    
        case "Friday":
            $day = "Piątek";
            break;
        case "Saturday":
            $day = "Sobota";
            break;
        case "Sunday":
            $day = "Niedziela";
            break;
        default:
            $day="###";
            break;

        }

    switch($months){
        case "January":
            $months="Styczenia";
            break;
        case "February":
            $months="Luty";
            break;
        case "March":
            $months="Marca";
            break;
        case "April":
            $months="Kwietnia";
            break;
        case "May":
            $months="Maja";
            break;
        case "June":
            $months="Czerwieca";
            break;
        case "July":
            $months="Lipca";
            break;
        case "August":
            $months="Sierpnia";
            break;
        case "September":
            $months="Wrzesinia";
            break;
        case "October":
            $months="Października";
            break;
        case "November":
            $months="Listopada";
            break;
        case "December":
            $months="Grudnia";
            break;
        default:
            $day="###";
            break;
    }

    echo "Witamy w ".$day.", dnia ".date("d")." ".$months." ".date("Y")." roku";
        

    ?>
</body>
</html>