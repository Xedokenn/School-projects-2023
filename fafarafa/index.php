<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Video On Demand</title>
</head>
<body>
    <div class="Left">
        <h1>Internetowa wypożyczalnia filmów</h1>
    </div>
    <div class="Right">
        <table>
            <tr>
                <th>Kryminał</th>
                <th>Horror</th>
                <th>Przygodowy</th>
            </tr>
            <tr>
                <td>20</td>
                <td>30</td>
                <td>20</td>
            </tr>
        </table>
    </div>


    <div class="pol">
        <h3>Polecamy</h3>
        <?php
        $connection = mysqli_connect('localhost', 'root', '', 'dane3');
        $pol = "SELECT id, nazwa, opis, zdjecie FROM produkty WHERE id=18 || id=22 || id=23|| id=25";
        $res = $connection->query($pol);
        while ($row = $res->fetch_array()) {
            echo "<div class='pol-col'> 
                <h4>$row[0].$row[1]</h4>
                <img src='$row[3]' alt='film'>
                <p>$row[2]</p>
                </div>";
        }
        ?>
    </div>
    <div class="fan">
        <h3>Filmy fantastyczne</h3>
        <?php
        $fan = "SELECT id, nazwa, zdjecie, opis FROM produkty WHERE Rodzaje_id=12";
        $res2 = $connection->query($fan);
        while ($row = $res2->fetch_array()) {
            echo "<div class='fan-col'> 
                <h4>$row[0].$row[1]</h4>
                <img src='$row[2]' alt='film'>
                <p>$row[3]</p>
                </div>";
        }
        ?>
    </div>
    <div class="footer">
        <form action="index.php" method="post">
            Usuń film nr.:<input type="number" name="i1" id="i1">
            <input type="submit" value="Usuń film">
        </form>
        <?php
            $connect = mysqli_connect('localhost', 'root','', 'dane3');
            if($connect)
            $id = $_POST['i1'];
            $out3 = 'delete from produkty where id = '.$id;

            mysqli_close($connect);
            ?>
        Stronę wykonał:
        <a href="mailto:ja@poczta.com">213742069</a>
    </div>
</body>

</html>