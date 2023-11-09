<!DOCTYPE html>
<?php
	session_start();
	header("Refresh:2");
?>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Grzybobranie</title>
	<link rel="stylesheet" href="styl5.css" />
</head>
<body>
	<div id="miniatura">
		<a href="borowik.jpg"><img src="borowik-miniatura.jpg" alt="Grzybobranie" /></a>
	</div>
	<div id="tytulowy">
		<h1>Idziemy na grzyby</h1>
	</div>
	<div id="lewy">
		<header id="pole"></header>
		<?php
			$con = mysqli_connect('localhost', 'root', '', 'dane2');

			$querry2 = "SELECT id FROM grzyby";
			if ($result = mysqli_query($con, $querry2)) {
			    $rowcount = mysqli_num_rows($result);
			    echo "Total rows in this table : $rowcount <br>";
			} else {
				echo "broken";
			}

			if(isset($_SESSION['views']) && $_SESSION['views'] < $rowcount){
				$_SESSION['views'] = $_SESSION['views']+ 1;
			 }else{
				$_SESSION['views'] = 1;
			 }
			 $var = $_SESSION['views'];
			 echo $var;

			$querry1 = "SELECT nazwa_pliku, opis FROM grzyby where id = $var";
			$output = mysqli_query($con, $querry1);
			$row0 = mysqli_fetch_row($output);
			echo "<img src='$row0[0]'/>";
		?>
	</div>
	<div id="prawy">
		<?php
		echo $_SESSION['count']=$row0[1];
		?>
	</div>
	<div id="stopka">
		<p>Autor: PESEL</p>
	</div>
</body>
</html>