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
        <h2>Dane osobowe</h2>
        <?php
            $conn = mysqli_connect('localhost','root','','firma');
            $sql1 = 'SELECT * FROM pracownicy';
            $query1 = mysqli_query($conn, $sql1);

            echo "
            <table>
                <tr>
                    <th>ID</th>
                    <th>Nazwisko</th>
                    <th>Imie</th>
                    <th>Pesel</th>
                </tr>
            ";

            while ($row1 = mysqli_fetch_array($query1)) {
                echo "
                <tr>
                    <td>$row1[0]</td>
                    <td>$row1[1]</td>
                    <td>$row1[2]</td>
                    <td>$row1[3]</td>
                <tr>
                ";
            }
            echo "</table>";
            mysqli_close($conn);
        ?>

    </section>
    <footer>
        <h5>AUTOR stron: 213742069</h5>
    </footer>
    
</body>
</html>