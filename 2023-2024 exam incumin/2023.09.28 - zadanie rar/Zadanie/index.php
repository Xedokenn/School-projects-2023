<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <title>Newsletter - zapisz się!</title>
    <meta http-equiv="X-Ua-Compatible" content="IE=edge">

    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster|Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
</head>

<body>
    <div class="container">

        <header>
            <h1>Newsletter</h1>
        </header>

        <main>
            <article>
                <form method="post" action="save.php">
                    <label>Podaj adres e-mail
                        <input type="email" name="email" value="">
                        <p style='color:red; margin:0; font-size:12px; padding:0;'>
                        <?php
                        if(isset($_SESSION['message'])){
                            echo $_SESSION['message'];
                            unset($_SESSION['message']);
                        }
                        ?></p>
                    </label>
                    <input type="submit" value="Zapisz się!">
                </form>
            </article>
        </main>

    </div>
</body>
</html>