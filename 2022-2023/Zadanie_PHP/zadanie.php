<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<title>Kup mieszkanie</title>
	<style>
		body,html{
			margin: 0px;
			padding: 0px;
		}
		#lewy{
			width: 40%;
			height: 600px;
			background-color: #FF8989;
			float: left;
		}
		#prawy{
			width: 60%;
			height: 600px;
			background-color:  #7872D9;
			float: left;
		}
		h1{
			text-align: center;
		}
        table{
            border:solid;
        }
	</style>
</head>
<body>
	<div id="lewy">
		<h1>INFORMACJE Z TABELI</h1>
        
		<?php
        $query = 'select lastname, firstname, notes from employees';
		$connection = new mysqli("localhost","root","","w3schools2");

			$out1 = $connection -> query($query);
			while($out2 = $out1 -> fetch_row()){
                echo "<table>
                <tr>
                    <td>$out2[0]</td>
                    <td>$out2[1]</td>
                    <td>$out2[2]</td>
                </tr>
                </table>";
			}
			$connection -> close();
		?>
	</div>
	<div id="prawy">
		<h1>OBLICZENIA</h1>
        <input type="submit"><br><br>
        <select name="text"><br><br>

        
        <input type="checkbox" id="check">Zaznacz <br><br>
        <input type="submit" value="operacja" id="przycisk"><br><br>
        <p id="wynik"></p>
        <label>Imię</label>
        <textarea name="name"></textarea><br>
        <label>Nazwisko</label>
        <textarea name="surn"></textarea><br>
        <label>Data urodzenia</label>
        <textarea name="date"></textarea><br>
        <label>Plik ze zdjęciem</label>
        <textarea name="photo"></textarea><br>
        <label>Dodatkowa informacja</label>
        <textarea name="addi"></textarea><br>
        <input type="submit" value="dodaj">

        <?php
        
        if(isset($_POST["name"]) and isset($_POST["surn"]) and isset($_POST["date"]) and isset($_POST["photo"]) and isset($_POST["addi"])){
            $connection = new mysqli("localhost","root","","w3schools2");

            $name = $_POST["name"];
            $surn = $_POST["surn"];
            $date = $_POST["date"];
            $photo = $_POST["photo"];
            $addi = $_POST["addi"];

            $ask2 = "insert into employees (firstname, lastname, birrthdate, photo, notes value $name, $surn, $date, $photo, $addi)";
            if($connection -> query($ask2)){
                echo "dodanie pracownika";
            }else{
                echo "nie dodano";
            }
            $connection -> close();
        }
        ?>
        </form>
	</div>
</body>
</html>