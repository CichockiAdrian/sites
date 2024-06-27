<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $arr = range(13,390,13);
        foreach($arr as $num){
            echo "$num=>";
        }
        print_r ($arr);


        if(!file_exists('L2_2funkcje')){
            mkdir("c:/xampp/htdocs/l7_2/L2_2funkcje");
            mkdir("/Applications/XAMPP/xamppfiles/htdocs");//wersja na mac os
            
        }
        $file = fopen('l2_2funkcje/ciag.txt','a+');
        $string=implode("=>",$arr);
        fwrite($file,$string);
        fclose($file);
    ?>
</body>
</html>