<?php
$conn = new mysqli("localhost", "root", "", "wynajem");
$result = $conn->query("SELECT * FROM pokoje;");
$conn->close();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Wynajem pokoi</title>
    <link rel="stylesheet" href="styl2.css">
</head>
<body>
    <header>
        <h1>Pensjonat pod dobrym humorem</h1>
    </header>
    <main>
        <section>
            <a href="index.html">GŁÓWNA</a>
            <img src="1.jpg" alt="pokoje">
        </section>
        <section>
            <a href="cennik.php">CENNIK</a>
            <table>
                <!-- script -->
                <?php
                while ($row = $result->fetch_row()) {
                    ?>
                    <tr>
                        <td><?= $row[0] ?></td>
                        <td><?= $row[1] ?></td>
                        <td><?= $row[2] ?></td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </section>
        <section>
            <a href="kalkulator.html">KALKULATOR</a>
            <img src="3.jpg" alt="pokoje">
        </section>
    </main>
    <footer>
        <p>Stronę opracował: lkata</p>
    </footer>
</body>
</html>