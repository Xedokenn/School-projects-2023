<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Salon urody VENUS</title>
    <script src="script.js" defer></script>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
        <h1>Salon urody VENUS</h1>
    </header>
    <main>
        <section>
            <img src="1.jpg">
            <img src="2.jpg">
            <img src="3.jpg">
            <img src="4.jpg">
            <img src="5.jpg">
            <img src="6.jpg">
        </section>
    </main>
    <section id="lewy">
        <form action="salon.php" method="post">
            <h3>Cennik</h3>
            <br><br>
            <?php
                $connect = mysqli_connect('localhost','root','','egzamin');
                $query = 'select id, Nazwa, Opis, Cena from zabiegi';
                $output = mysqli_query($connect,$query);
                echo "
                <table>
                    <tr>
                        <td><b>Nazwa</b></td>
                        <td><b>Opis</b></td>
                        <td><b>Cena</b></td>
                    </tr>
                </table>
                <hr>
                ";

                while ($row = mysqli_fetch_array($output)){
                    echo "
                    <table>
                        <tr>
                            <td>$row[1]</td>
                            <td>$row[2]</td>
                            <td>$row[3]</td>
                        </tr>
                    </table>
                    <hr>";
                }mysqli_close($connect);
            ?>
        </form>
    </section>
    <section id="prawy">
        Zabieg:
        <input list='zabieg'>
        <datalist id='zabieg'>
        <?php
            $connect = mysqli_connect('localhost','root','','egzamin');
            $query2 = 'select id, Nazwa from zabiegi';
            $output2 = mysqli_query($connect,$query2);
            
            while ($row2 = mysqli_fetch_array($output2)) {
                echo "<option value='$row2[1]'/>";
            }
            echo "</datalist>";
            mysqli_close($connect);
        ?>
        <form action="salon.php" method="post">
            <br><br>
            Wybierz date:
            <input type="date" id="D" name"D" />
            <br><br>
            <label>8:00<input type="radio" name="H" /><br><br></label>
            <label>9:00<input type="radio" name="H"/><br><br></label>
            <label>10:00<input type="radio" name="H" /><br><br></label>
            <label>11:00<input type="radio" name="H" /><br><br></label>
            <label>12:00<input type="radio" name="H" /><br><br></label>
            <label>13:00<input type="radio" name="H" /><br><br></label>
            <label>14:00<input type="radio" name="H" /><br><br></label>
            <label>15:00<input type="radio" name="H" /><br><br></label>
            <input type="submit" name="Prześlij" />
        </form>
        <?php
            $connect = mysqli_connect('localhost','root','','egzamin');
            $query3 = 'select id, Nazwa from zabiegi';
            $output3 = mysqli_query($connect,$query2);



        ?>
    </section>
    <footer>
        <p>NR PESEL : 213742069</p>
    </footer>
</body>
</html>