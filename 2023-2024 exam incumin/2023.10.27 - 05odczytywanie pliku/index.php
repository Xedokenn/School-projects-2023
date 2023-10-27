<?php
    $fh = fopen("testfile.txt", 'w') or die("Nie udało się utworzyć pliku"); #fopen tworzy plik jak go niema


    $text = <<<_END
    Linia 1
    Linia 2
    Linia 3
    _END;

    fwrite($fh, $text) or die("nie udało się zapisać danych w pliku"); # zapisuje dane, które są podane wyżej (linia 1, 2, 3)
    fclose($fh); # zawsze trzeba zamknąć plik po zapisaniu
    echo "Plik 'testfile.txt' został zapisany pomyślnie";


    echo "<pre>"; # umożliwia uwzględnienie znaków nowego wiersza
    echo file_get_contents("testfile.txt");
    echo "</pre>"; # zamknięcie znacznika pre
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tit-less</title>
    <script src="script.js" defer></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
</body>
</html>