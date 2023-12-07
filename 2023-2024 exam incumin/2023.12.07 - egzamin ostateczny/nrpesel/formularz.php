<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dane osobowe</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section id="baner">
        <h1>Dane osobowe pacowników</h1>

    </header>
    <section id="lewy">
        <ul>
            <li><a href="index.php">index</a></li><br><br>
            <li><a href="formularz.php">formularz</a></li>
        </ul>
    </section>
    <section id="prawy">
        <h2>Podaj dane</h2>
        <form method="post" action="formularz.php">
            <label for="imie">Imie:</label> <br>
            <input type="text" name="imie" id="imie"> <br> <br>
            <label for="nazwisko">Nazwisko:</label> <br>
            <input type="text" name="nazwisko" id="nazwisko"> <br> <br>
            <label for="pesel">Pesel:</label> <br>
            <input type="text" name="pesel" id="pesel"> <br> <br>
            <button type="submit" id="zapisz">Sprawdź i zapisz</button>
        </form>

        <?php
            $conn = mysqli_connect('localhost','root','','firma');
            $sql2 = 'SELECT * FROM pracownicy';
            $query2 = mysqli_query($conn, $sql2);

            if (isset($_POST['imie']) && !empty($_POST['imie'])) {
                $imie = $_POST['imie'];
                echo "imie: ".$imie."<br>";
            } else {
                echo "brak imienia <br>";
            }

            if (isset($_POST['nazwisko']) && !empty($_POST['nazwisko'])) {
                $nazwisko = $_POST['nazwisko'];
                echo "nazwisko: ".$nazwisko."<br>";
            } else {
                echo "brak nazwiska <br>";
            }

            if (isset($_POST['pesel']) && !empty($_POST['pesel'])) {
                $pesel = $_POST['pesel'];
                echo "pesel: ".$pesel."<br>";
            } else {
                echo 'zły pesel <br>';
            }
            

            if (!empty($_POST['imie']) && !empty($_POST['nazwisko']) && !empty($_POST['pesel'])) {
                $imie = $_POST['imie'];
                $nazwisko = $_POST['nazwisko'];
                $pesel = $_POST['pesel'];


                if (strlen($pesel) == 11) {
                    $list = str_split($pesel);
                    $sum = 1*$list[0] + 3*$list[1] + 7*$list[2] + 9*$list[3] + 1*$list[4] + 3*$list[5] + 7*$list[6] + 9*$list[7] + 1*$list[8] + 3*$list[9];
                    $mas = $sum%10;
                    $end = 10 - $mas;
                    if ($mas == 0 || $list[10] = $end) {
                        $sql3 = "SELECT pesel from pracownicy where pesel = $pesel";
                        $query3 = mysqli_query($conn,$sql3);
                        $row3 = mysqli_fetch_row($query3);
                        if ($row3 > 0) {
                            echo "już taki pesel jest";
                        } else {
                            $sql4 = "INSERT INTO pracownicy (imie, nazwisko, PESEL) values ('$imie', '$nazwisko', '$pesel')";
                            $query4 = mysqli_query($conn, $sql4);
                            
                            echo "wysłane do bazy, dziekujemy";
                        }
                    } else {
                        echo "zły pesel";
                    }
                } else {
                    echo "zły pesel";
                }
            } else {
                echo "usupełnij wszstkie okna <br>";
            }
            mysqli_close($conn);
        ?>
    </section>
    <footer>
        <h5>AUTOR stron: 213742069</h5>
    </footer>
    
</body>
</html>