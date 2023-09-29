<?php
$connect = mysqli_connect('localhost','root','','firma');
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sekretariat</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <section id="left">
        <h1>Akta Pracownicze</h1>
        <?php
            $zapytanie = "select imie, nazwisko, adres, miasto, czyRODO, czyBadania from pracownicy where id='2'";
            

        
        ?>
        <h3>Dokumenty pracownika</h3>
        <a href"zad1/cv.txt">Pobierz</a>
        <?php
        ?>
    </section>
    <section id="right">
        <?php
        ?>

    </section>
    <footer>

    </footer>
</body>
</html>