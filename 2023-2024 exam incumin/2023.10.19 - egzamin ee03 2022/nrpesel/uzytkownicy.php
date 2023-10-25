<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Społecznościowy</title>
    <link rel="stylesheet" href="styl5.css">
</head>
<body>
    <header id="hlewy">
        <h2>Nasze osiedle</h2>
    </header>
    <header id="hprawy">
        <?php
            $connection = mysqli_connect('localhost','root','','portal');
            $query = "select count(*) from dane";
            $output = mysqli_query($connection,$query);

            while ($row = mysqli_fetch_array($output)){
                echo "<br>Liczba użytkowników portalu $row[0]";
            }mysqli_close($connection)
        ?>
    </header>
    <section id="lewy">
        <h3>Logowanie</h3>
        <form method="post" action="uzytkownicy.php">

            Login:
            <br>
            <input type="text" name="login">
            <br>

            Hasło:
            <br>
            <input type="text" name="haslo">
            <br><br>
            <button type="submit">Zaloguj</button>
        </form>
    </section>



    <section id="prawy">
        <h3>Wizytówka</h3>
        <div id="wizytówka">
            <?php
                $connection = mysqli_connect('localhost','root','','portal');
                if(isset($_POST['login'])){
                    $login = $_POST['login'];
                    $query = "select haslo from uzytkownicy where login='$login'";
                    $output = mysqli_query($connection,$query);

                    $logincheck = mysqli_num_rows($output);
                    

                    if($logincheck > 0) {
                        if(isset($_POST['haslo'])) {
                            $password = $_POST['haslo'];
                            while($row = mysqli_fetch_array($output)) {
                                $passwordcheck = $row[0];
                                $passwordhash = sha1($password);
                            } if ($passwordcheck === $passwordhash) {


                                $query2 = "select u.login, d.rok_urodz, d.przyjaciol, d.hobby, d.zdjecie from uzytkownicy as u inner join dane as d on d.id = u.id where u.login='$login'";
                                $output2 = mysqli_query($connection,$query2);

                                while ($row2 = mysqli_fetch_array($output2)){
                                    $age = date("Y") - $row2[1];


                                    echo "<img src=$row2[4]> <br>
                                    <h4> $row2[0], ($age)<br>
                                    <p>Hobby: $row2[3]
                                    <h1><img src=icon-on.png> $row2[2]
                                    <a href=dane.html><button id=bt1>Więcej informacji</button></a>";
                                };
                            } else {
                                echo " złe hasło";
                            }
                        } else {
                            echo "Nie dałeś hasła";
                        }
                    } else {
                        echo "Login nie istnieje";
                    }

                    
                }mysqli_close($connection);
            ?>
        </div>
    </section>
    <footer>
        Made by Woźniak Jakub 5Ti 😎
    </footer>
</body>
</html>