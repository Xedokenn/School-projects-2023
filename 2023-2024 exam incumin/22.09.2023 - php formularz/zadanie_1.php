<?php
$napis = "nie ma pliku";
$plik = "";

if (isset($_FILES['plik'])) {
    $plik = $_FILES['plik'];
    if ($plik != "") {
        echo "plik jest";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tit-less</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <form method="post" action="zadanie_1.php">
        <label>wybierz plik</label><br><br>
        <input type="file" name="plik"><br><br>
        <input type="submit" value="Wyślij">
    </form>


</body>
</html>