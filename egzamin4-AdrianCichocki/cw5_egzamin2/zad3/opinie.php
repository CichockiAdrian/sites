<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opinie klientów</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
    
    <header>

        <h1>Hurtownia spożywcza</h1>

    </header>


    <main>

        <h2>Opinie naszych klientów</h2>
        <?php
		$connect = mysqli_connect('localhost', 'root', '', 'hurtownia');
		$sql = "SELECT klienci.zdjecie, klienci.imie, opinie.opinia FROM klienci, opinie, typy WHERE klienci.id = opinie.klienci_id AND typy.id = klienci.typy_id AND typy.id IN (2,3);";
		$result = mysqli_query($connect, $sql);
		while($row = mysqli_fetch_array($result)) {
			echo "<div class='kl_op'>
					<img src='$row[0]' alt='klient' />
					<p>$row[2]</p>
					<h4>$row[1]</h4>
				</div>";
		}
		?>

    </main>


    <footer>

        <div>

            <h3>Współpracują z nami</h3>
            <a href="http://sklep.pl/">Sklep 1</a>

        </div>

        <div>

            <h3>Nasi top klienci</h3>

			<ol>
				<?php
				$sql = "SELECT imie, nazwisko, punkty FROM klienci ORDER BY punkty DESC LIMIT 3;";
				$result = mysqli_query($connect, $sql);
				while($row = mysqli_fetch_array($result)) {
					echo "<li>$row[0] $row[1], $row[2]</li>";
				}
				?>
			</ol>

        </div>

        <div>

            <h3>Skontaktuj się</h3>
            <p>Telefon: 111222333</p>

        </div>

        <div>

            <h3>Autor: Adrian Cichocki</h3>

        </div>

    </footer>
    
	<?php
	mysqli_close($connect);
	?>

</body>
</html>