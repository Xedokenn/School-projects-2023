<?php
    $dbhost = 'localhost'; // To raczej nie będzie wymagało zmiany
    $dbname = ''; // Ale te zmienne...
    $dbuser = ''; // ... zmodyfikuj zgodnie
    $dbpass = 'password'; // ... z parametrami instalacji

    $connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
    if ($connection->connect_error) die("Błąd krytyczny");


    function createTable($name, $query) {
        queryMysql("CREATE TABLE IF NOT EXISTS $name($query)");
        echo "Tabela '$name' została utworzona lub już istnieje.<br>";
    }

    function queryMysql($query) {
        global $connection;
        $result = $connection->query($query);
        if (!$result) die("Błąd krytyczny");
        return $result;
    }

    function destroySession() {
        $_SESSION=array();
        if (session_id() != "" || isset($_COOKIE[session_name()]))
            setcookie(session_name(), '', time()-2592000, '/');
        session_destroy();
    }

    function sanitizeString($var) {
        global $connection;
        $var = strip_tags($var);
        $var = htmlentities($var);
        if (get_magic_quotes_gpc())
            $var = stripslashes($var);
        return $connection->real_escape_string($var);
    }

    function showProfile($user) {
        if (file_exists("$user.jpg"))
            echo "<img src='$user.jpg' style='float:left;'>";
        $result = queryMysql("SELECT * FROM profiles WHERE user='$user'");
        if ($result->num_rows) {  
            $row = $result->fetch_array(MYSQLI_ASSOC);
            echo stripslashes($row['text']) . "<br style='clear:left;'><br>";
        }
        else echo "<p>Nie ma tu jeszcze niczego do oglądania.</p><br>";
    }
?>


<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tit-less</title>
    <script src="script.js" defer></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
</body>
</html>