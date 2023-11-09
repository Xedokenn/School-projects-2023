<!DOCTYPE html>
<?php
	session_start();
	//header("Refresh:2");
?>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Grzybobranie</title>
	<link rel="stylesheet" href="styl5.css" />
	<script src="script.js" type="text/javascript" defer></script>
</head>
<body>
	<div id="miniatura">
		<a href="borowik.jpg"><img src="borowik-miniatura.jpg" alt="Grzybobranie" /></a>
	</div>
	<div id="tytulowy">
		<h1>Idziemy na grzyby</h1>
	</div>
	<div id="lewy">
		<header id="pole" ></header>
			<button onclick="main()">Charge website</button>
			<p id="wynik"></p>
	</div>
	<div id="prawy">
		
	</div>
	<div id="stopka">
		<p>Autor: PESEL</p>
	</div>
</body>
</html>