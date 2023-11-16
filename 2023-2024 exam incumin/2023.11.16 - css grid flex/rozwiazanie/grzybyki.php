<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Grzybobranie</title>
	<link href="style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
	<div id="miniatura">
		<a href="borowik.jpg"><img src="borowik-miniatura.jpg" alt="Grzybobranie" /></a>
	</div>
	<div id="tytulowy">
		<h1>Idziemy na grzyby</h1>
	</div>
	<nav class="menu">
		<div class="dropdown">
			<a href="#">Aktualności</a>
				<ul>
					<li><a href="https://wiadomosci.onet.pl/tylko-w-onecie/ustalenia-onetu-jest-faworyt-na-nowego-rzecznika-praw-dziecka-ma-imponujace-poparcie/1nl1v8q" target="_blank">Onet</a></li>
					<li><a href="https://wyborcza.pl/magazyn/7,124059,30407658,prezes-starzeje-sie-i-naprawde-wierzy-w-spisek-znamy-plany.html" target="_blank">Wyborcza</a></li>
					<li><a href="https://www.gazetaprawna.pl/wiadomosci/kraj/artykuly/9351572,co-polacy-sadza-o-aborcji-najnowszy-sondaz.html" target="_blank">Gazeta</a></li>
				</ul>
		</div>
		<div class="dropdown">
			<a href="#">Koszty</a>
					<ul>
						<li><a href="https://mfiles.pl/pl/index.php/Koszty">mfiles</a></li>
						<li><a href="https://www.bibbyfinancialservices.pl/centrum-wiedzy/poradnik-przedsiebiorcy/2020/koszty-w-przedsiebiorstwie-rodzaje-charakterystyka">Bibby</a></li>
						<li><a href="https://pl.wikipedia.org/wiki/Koszty">wiki</a></li>
					</ul>
		</div>
		<div class="dropdown">
			<a href="#">Reklama</a>
				<ul>
					<li><a href="#">Logo</a></li>
					<li><a href="#">Wizytówki</a></li>
					<li><a href="#">Reklama</a></li>
				</ul>
		</div>
		<a href="#">O Nas</a>
		<a href="#">Kontakt</a>
	</nav>
	<div id="lewy">
		<?php
		$con = mysqli_connect('localhost', 'root', '', 'dane2');
		$kw1 = "SELECT nazwa_pliku, potoczna FROM grzyby;";
		$res1 = mysqli_query($con, $kw1);
		while($tab = mysqli_fetch_row($res1)) {
			echo "<img src='$tab[0]' title='$tab[1]' />";
		}
		?>
	</div>
	<div id="prawy">
		<h2>Grzyby jadalne</h2>
		<?php
		$kw2 = "SELECT nazwa, potoczna FROM grzyby WHERE jadalny = 1;";
		$res2 = mysqli_query($con, $kw2);
		while($tab = mysqli_fetch_row($res2)) {
			echo "<p>$tab[0] ($tab[1])</p>";
		}
		?>
		<h2>Polecamy do sosów</h2>
		<?php
		$kw3 = "SELECT grzyby.nazwa, grzyby.potoczna, rodzina.nazwa FROM grzyby, rodzina, potrawy WHERE grzyby.rodzina_id = rodzina.id AND grzyby.potrawy_id = potrawy.id AND potrawy.nazwa = 'sos';";
		$res3 = mysqli_query($con, $kw3);
		echo "<ol>";
		while($tab = mysqli_fetch_row($res3)) {
			echo "<li>$tab[0] ($tab[1]), rodzina: $tab[2]</li>";
		}
		echo "</ol>";
		mysqli_close($con);
		?>
		
	</div>
	<div id="stopka">
		<p>Autor: PESEL</p>
		
	</div>
</body>
</html>
