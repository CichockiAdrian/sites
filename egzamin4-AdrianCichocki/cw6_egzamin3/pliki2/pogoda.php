<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pronoza pogody Wrocław</title>
    <link rel="stylesheet" href="styl2.css">
</head>
<body>
    <header>
        <div id="d1"><img src="logo.png" alt="meteo"></div>
        <div id="d2"><h1>Prognoza dla Wrocławia</h1></div>
        <dib id="d3"><p>maj, 2019 r.</p></div>
</header>
    <main>
        <table>
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "prognoza";
            $conn = new mysqli($servername, $username, $password, $dbname);


            $sql = "SELECT * FROM pogoda p WHERE p.miasta_id=1 ORDER BY 3 ASC";
            $result = mysqli_query($conn, $sql);


            echo "<tr><th>Data prognozy</th><th>Temperatura w dzień</th><th>Temperatura w nocy</th><th>Opady[mm/h]</th><th>Ciśnienie</th></tr>";
            while($row = mysqli_fetch_array($result)) {
                echo "<tr><td>".$row["data_prognozy"]."</td><td>".$row["temperatura_noc"]."</td><td>".$row["temperatura_dzien"]."</td><td>".$row["opady"]."</td><td>".$row["cisnienie"]."</td></tr>";
            }
        ?>
        </table>
    </main>
    <article>
        <section><img src="obraz.jpg" alt="Polska, Wrocław"></section>
        <aside><a href="kwerendy.txt">Pobierz kwerendy</a></aside>
    </article>

    <footer>Stronę wykonał: Adrian Cichocki</footer>
</body>
</html>