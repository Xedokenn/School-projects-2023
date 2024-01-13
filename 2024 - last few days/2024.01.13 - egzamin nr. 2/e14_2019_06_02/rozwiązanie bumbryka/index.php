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


    <section id="left">
        <h3>Ceny wybranych artykułów w hurtowni</h3>
        <table>
            <?php
                $con = mysqli_connect('localhost', 'root', '', 'sklep');

                $zap1 = 'SELECT nazwa, cena FROM towary LIMIT 4;';

                $wynik = mysqli_query($con, $zap1);

                while ($row = mysqli_fetch_row($wynik)) {
                    echo "
                        <tr>
                            <td>$row[0]</td>
                            <td>$row[1]</td>
                        </tr>";
                }
            ?>
        </table>
    </section>


    <section id="center">
        <h3>Ile będą kosztować Twoje zakupy?</h3>
        
        <form action="index.php" method="post">
            <br>
            <label for="towary">
                wybierz artykuł
            <select name="opt" id="option">
                <option value="Zeszyt 60 kartek">Zeszyt 60 kartek</option>
                <option value="Zeszyt 32 kartki">Zeszyt 32 kartki </option>
                <option value="Cyrkiel">Cyrkiel</option>
                <option value="Linijka 30 cm">Linijka 30 cm</option>
                <option value="Ekierka">Ekierka</option>
                <option value="Linijka 50 cm">Linijka 50 cm</option>
            </select>
            </label>

            <br>
            <label for="licz">
                Liczba sztuk:
            <input type="number" value="1" name="liczba">
            </label>

            <br>
            <input type="submit" value="oblicz">
            
        </form>

        <?php
                if(isset($_POST['liczba']) && isset($_POST['opt'])){
                    $opt = $_POST['opt'];
                    $liczba = $_POST['liczba'];
                    $zap2 = "SELECT cena FROM towary WHERE nazwa = '$opt';";
                    $wynik2 = mysqli_query($con, $zap2);
                    $kwo = mysqli_fetch_row($wynik2);
                    $cena = round($kwo[0] * $liczba, 1);
                    echo "$cena";
                }
                else{
                    echo "chuj";
                }

                mysqli_close($con);
            ?>
    </section>


    <section id="right">
        <img src="zakupy2.png" alt="hurtownia">
        <h3>Kontakt</h3>
        <br>
        <p>telefon: </p>
        <p>111222333</p>
        <p>e-mail: </p>
        <p><a href="mailto:hurt@wp.pl">hurt@wp.pl</a></p>
    </section>


    <footer>
        <h4>Witrynę wykonał pesel</h4>
    </footer>
</body>
</html>