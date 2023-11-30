<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP form</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <h1>Nagłówek</h1>
        </header>

        <main>
            <form action="formularz.php" method="POST">
                <label for="imie">imie</label><br/>
                <input type="text" name="imie"><br/>
                <label for="nazwisko">nazwisko</label><br/>
                <input type="text" name="nazwisko"><br/>
                <label for="pesel">pesel</label><br/>
                <input type="text" name="pesel"><br/><br>
                <input type="submit" value="zapisz"><br><br>
            </form>
                <?php
                    $conn = mysqli_connect('localhost', 'root', '', 'uczen');
                    $sql = 'SELECT * FROM uczen';
                    $query = mysqli_query($conn, $sql);

                    if (isset($_POST['pesel'])) {
                        $imie = $_POST['imie'];
                        $nazwisko = $_POST['nazwisko'];
                        $pesel = $_POST['pesel'];


                        if (strlen($pesel) == 11) {
                            $list = str_split($pesel);
                            $sum = 1*$list[0] + 3*$list[1] + 7*$list[2] + 9*$list[3] + 1*$list[4] + 3*$list[5] + 7*$list[6] + 9*$list[7] + 1*$list[8] + 3*$list[9];
                            echo $sum;
                            $mas = $sum%10;
                        } else {
                            echo 'coś żeś źle napisał';
                        }

                    } else {
                        echo 'pesel zły';
                    }


                    $sql2 = "INSERT INTO uczen(imie,nazwisko,pesel) VALUES ('$imie','$nazwisko','$pesel')";
                    $query_i = mysqli_query($conn, $sql2);


                    




                    mysqli_close($conn);
                ?>
        </main>
        <footer>
            <p>Stopka</p>
        </footer>
    </body>
</html>
