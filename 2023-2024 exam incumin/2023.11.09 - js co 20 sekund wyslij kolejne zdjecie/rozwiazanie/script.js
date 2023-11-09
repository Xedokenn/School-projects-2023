function main() {
    document.getElementById("wynik").innerHTML = "Taki trójkąt nie istnieje";
    alert("<?php
		$con = mysqli_connect('localhost', 'root', '', 'dane2');

		$querry2 = "SELECT id FROM grzyby";
		if ($result = mysqli_query($con, $querry2)) {
		    $rowcount = mysqli_num_rows($result);
		} else {
			echo "broken";
		}

		if(isset($_SESSION['views']) && $_SESSION['views'] < $rowcount){
			$_SESSION['views'] = $_SESSION['views']+ 1;
		 }else{
			$_SESSION['views'] = 1;
		 }
		 $var = $_SESSION['views'];

		$querry1 = "SELECT nazwa_pliku, opis FROM grzyby where id = $var";
		$output = mysqli_query($con, $querry1);
		$row0 = mysqli_fetch_row($output);
		echo "<img src='$row0[0]'/>";
	?>");
}