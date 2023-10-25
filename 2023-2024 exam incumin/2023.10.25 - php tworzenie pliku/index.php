<?php
    $fh = fopen("testfile.txt", 'w') or die("Nie udało się utworzyć pliku");


    $text = <<<_END
    Linia 1
    Linia 2
    Linia 3
    _END;

    fwrite($fh, $text) or die("nie udało się zapisać danych w pliku");
    fclose($fh);
    echo "Plik 'testfile.txt' został zapisany pomyślnie";
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