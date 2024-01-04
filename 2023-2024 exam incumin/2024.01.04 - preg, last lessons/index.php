<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php regular exppressions</title>
</head>
<body>
    <header>
        <h1> php regular exppressions</h1>
    </header>
    <main>
        <form acion="index.php" method="post">
            login: <input type="text" id="login" name="login"> <br><br>
            mail: <input type="text" id="mail" name="mail"> <br><br>
            haslo: <input type="password" id="password" name="password"> <br><br>
            <input type="submit">
        </form>

        <?php
            $login = $_POST['login'];
            $mail = $_POST['mail'];
            $password = $_POST['password'];
            if (preg_match('/^[a-zA-Z0-9_]{8,255}$/',$login)){
                echo "match found";
            } else {
                echo "error, aint no way";
            }
            


        ?>
    </main>
    
</body>
</html>