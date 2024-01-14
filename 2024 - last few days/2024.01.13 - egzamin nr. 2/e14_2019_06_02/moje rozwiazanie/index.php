<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hurtownia papiernicza</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
        <h1>W naszej hurtowni kupisz najtaniej</h1>
    </header>
    <section id="lewy">
        <h3>Ceny wybranych artykułów w hurtowni:</h3>
        <table>
        <?php
            $conn = mysqli_connect('localhost','root','','sklep');
            $zapytanie1 = "select nazwa, cena from towary limit 4";
            $wynik = mysqli_query($conn, $zapytanie1);

            while($row = mysqli_fetch_row($wynik)) {
                echo "
                <tr>
                    <td>$row[0]</td>
                    <td>$row[1]</td>
                </tr>
            ";
            }
        ?>
        </table>
    </section>
    <section id="srodek">
        <h3>Ile będą kosztować Twoje zakupy?</h3>

        <form action="index.php" method="post">
            <label for="lista">wybierz artykuł</label>
            <select id="lista" name="lista">
                <option value="Zeszyt 60 kartek">Zeszyt 60 kartek</option>
                <option value="Zeszyt 32 kartek">Zeszyt 32 kartek</option>
                <option value="Cyrkiel">Cyrkiel</option>
                <option value="Linijka 30 cm">Linijka 30 cm</option>
                <option value="Ekierka">Ekierka</option>
                <option value="Linijka 50 cm">Linijka 50 cm</option>
            </select>
            <br>

            <label for="sztuki">liczba sztuk:</label>
            <input type="number" id="sztuki" value="1" name="sztuki"/>
            <br>

            <button type="submit" id="przycisk">OBLICZ</button>
        </form>

        <?php
            if(isset($_POST['lista']) && isset($_POST['sztuki'])) {
                $lista = $_POST['lista'];
                $sztuki = $_POST['sztuki'];
                $zap2 = "SELECT cena FROM towary WHERE nazwa = '$lista';";
                $wynik2 = mysqli_query($conn, $zap2);
                $kwo = mysqli_fetch_row($wynik2);
                $cena = round($kwo[0] * $sztuki, 1);
                echo "$cena";
            }
            mysqli_close($conn);
        ?>
    </section>
    <section id="prawy">
        <img src="zakupy2.png" alt="hurtownia">
        <h3>Kontakt</h3>
        <p>telefon: 111222333</p>
        <p>e-mail: <a href="mailto:hurt@wp.pl">hurt@wp.pl</a></p>
    </section>
    <footer>
        <h4>Witrynę wykonał: 2137420690</h4>
    </footer>
</body>
</html>