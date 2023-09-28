<?php

session_start();

?>
<!DOCTYPE html>
<html lang="pl">
<head>

    <meta charset="utf-8">
    <title>Zapisanie się do newslettera</title>

    <meta http-equiv="X-Ua-Compatible" content="IE=edge">

    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster|Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
</head>

<body>
    <?php
        $db_config = array(
                'host' => 'localhost', 
                'port' => '3306', 
                'user' => 'root', 
                'pass' => '', 
                'db' => 'newsletter', 
                'db_type' => 'mysql', 
                'encoding' => 'utf-8' 
            );
        try 
        { 
            $dsn = $db_config['db_type'] . 
            ':host=' . $db_config['host'] . 
            ';port=' . $db_config['port'] . 
            ';encoding=' . $db_config['encoding'] . 
            ';dbname=' . $db_config['db']; 
            $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION); 
            $dbh = new PDO($dsn, $db_config['user'],  $db_config['pass'], 
        $options);
        define('DB_CONNECTED', true); 
        echo '<h1>Connection success!</h1>'; 

        $saved = false;
        if(!isset($_POST['email']) || empty($_POST['email'])){
            header('location: index.php');
            exit();
        }
        $email = $_POST['email'];
        $eagle = $dbh -> query('Select email from users');

        foreach($eagle as $row){
            if($email == $row[0]) $saved = true;
        }

        $eagle -> closeCursor();
        unset($eagle);

        if(!$saved){
            $eagle = $dbh -> prepare('insert into users values(null, :email)');
            $eagle -> bindvalue(':email', $email, PDO::PARAM_STR);
            $eagle -> execute();
        }
        unset($eagle);
        $dbh = null;

        } catch(PDOException $error) 
        { 
            die('Unable to connect: ' . $error->getMessage()); 
        }
        $message = 'zapisanie do newslettera';
    ?>

    <div class="container">

        <header>
            <h1>Newsletter</h1>
        </header>
        <main>
            <article>
                <p><?php
                    if($saved){
                        $_SESSION['message'] = 'ten email jest juz zapisany w bazie';
                        header('location: index.php');
                        exit();
                    }
                    echo $message;
                    ?></p>
            </article>
        </main>

    </div>

</body>
</html>