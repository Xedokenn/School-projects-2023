<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Kochamy PHP</title>
        <style>
            table, th, td, tr {
                border: 0.1vmin solid black;
                border-collapse: collapse;
            }
        </style>
    </head>
    <body>
        <form action="formularz.php" method="POST">
            <label for="login">Login</label><br/>
            <input type="text" name="login"><br/>
            <label for="psswd">Hasło</label><br/>
            <input type="text" name="psswd"><br/>
            <input type="submit" value="Loguj">
        </form>
        <table>
            <tr>
                <th>Ulica</th>
                <th>Miasto</th>
            </tr>
            <?php
                $login = $_POST['login'];
                $conn = mysqli_connect('localhost', 'root', '', 'tiabd');
                $sql = 'SELECT * FROM adres';
                $query = mysqli_query($conn, $sql);

                // tabela
                while($array = mysqli_fetch_array($query)) {
                    echo '<tr>';
                    echo '<td>'.$array['adr_miasto'].'</td>';
                    echo '<td>'.$array['adr_ul'].'</td>';
                    echo'</tr>';
                    echo $array['adr_ul'];
                };

                // Wysylanie form do bazy php
                $sql2 = "INSERT INTO `dzial`(`id_dzial`, `nazwa_dz`) VALUES ('10', 'Php gurom')";
                $query_i = mysqli_query($conn, $sql2);


                // Hashowanie
                echo hash('sha256', 'Kotek');
                echo '<br/>';


                // Ciasteczka
                setcookie('klucz', 'wartosc', time()+60);
                if (isset($_COOKIE['klucz'])) {
                    echo $_COOKIE['klucz'];
                };

                mysqli_close($conn);
            ?>
        </table>
    </body>
</html>
