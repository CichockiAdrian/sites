<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl4.css">
    <title>Wycieczki krajoznawcze</title>
</head>
<body>
    <header><h1>WITAMY W BIURZE PODRÓŻY</h1></header>
    <nav>
        <h3>ARCHIWUM WYCIECZEK</h3>
        <?php
        $con=mysqli_connect('localhost','root','','egzamin4');
        $zap=mysqli_query($con, "Select id,cel,cena from wycieczki w where w.dostepna like 0");
   
        while($row=mysqli_fetch_array($zap)){
            echo $row['id'].". ".$row['cel'].", cena: ".$row['cena']."<br>";
        };
        ?>
    </nav>
    <main>
        <section>
            <h3>NAJTANIEJ...</h3>
            <table>
            <tr><td>Włochy</td><td>od 1200 zł</td></tr>
            <tr><td>Francja</td><td>od 1200 zł</td></tr>
            <tr><td>Hiszpania</td><td>od 1400 zł</td></tr>
            </table>
        </section>
        <article>
            <h3>TU BYLIŚMY</h3>
                <?php
                    $zap2=mysqli_query($con, "Select nazwaPliku, podpis from zdjecia group by 2 desc");
                        while($row=mysqli_fetch_array($zap2)){
                            echo "<img src=".$row['nazwaPliku']." alt=".$row['podpis'].">";
                        }

                    mysqli_close($con);
                ?>
        </article>
        <aside>
            <h3>SKONTAKTUJ SIĘ</h3>
            <a href="wycieczki@wycieczki.pl">napisz do nas</a>
            <p>telefon: 555666777</p>
        </aside>

    </main>
    <footer>Stronę wykonał: Adrian Cichocki</footer>
</body>
</html>