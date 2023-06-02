<?php
    $connection = mysqli_connect("localhost", "root", "", "gry2");
    echo "<style> table {border: 2px solid brown;} </style>";
    echo "<style>th {border: 2px solid brown;}</style>";   
    echo "<style>td{border: 2px solid brown;}</style>";

/*
ZAD 1
    $query = "SELECT * FROM gra where nazwa LIKE '%n%' ";
    $wynik = mysqli_query($connection, $query);
    echo"<table>";
    ECHO "<tr>
    <th>N w środku nazwy:</th>
    </tr>";
    while ($wiersz = mysqli_fetch_array($wynik)) {
        echo"<tr>
        <td>$wiersz[1]</td></tr>";
    }    
ZAD 2
    $query = "SELECT * FROM gra where nazwa LIKE 'n%' ";
    $wynik = mysqli_query($connection, $query);
    echo"<table>";
    ECHO "<tr>
    <th>N na początku nazwy:</th>
    </tr>";
    while ($wiersz = mysqli_fetch_array($wynik)) {
        echo"<tr>
        <td>$wiersz[1]</td></tr>";
    }    
ZAD 3
    $query = "SELECT * FROM gra where nazwa LIKE '_o%' ";
    $wynik = mysqli_query($connection, $query);
    echo"<table>";
    ECHO "<tr>
    <th>O jest drugie w nazwie:</th>
    </tr>";
    while ($wiersz = mysqli_fetch_array($wynik)) {
        echo"<tr>
        <td>$wiersz[1]</td></tr>";
    } 

ZAD 4
    $query = "SELECT AVG(wydawca_id) as wydawca FROM gra";
    $wynik = mysqli_query($connection, $query);
    echo"<table>";
    ECHO "<tr>
    <th>Średnia:</th>
    </tr>";
    while ($wiersz = mysqli_fetch_array($wynik)) {
        echo"<tr>
        <td>$wiersz[0]</td></tr>";
    }   
    ZAD 5
     $query = "SELECT count(ID) AS 'liczba gier' FROM `gra`;";
    $wynik = mysqli_query($connection, $query);
    echo"<table>";
    ECHO "<tr>
    <th>Lliczba gier:</th>
    </tr>";
    while ($wiersz = mysqli_fetch_array($wynik)) {
        echo"<tr>
        <td>$wiersz[0]</td></tr>";
    }
#ZAD 6
    $query = "SELECT nazwa FROM `gra`ORDER BY nazwa DESC LImit 5;";
    $wynik = mysqli_query($connection, $query);
    echo"<table>";
    ECHO "<tr>
    <th>5 pierwszych gier w wartości malejącej:</th>
    </tr>";
    while ($wiersz = mysqli_fetch_array($wynik)) {
        echo"<tr>
        <td>$wiersz[0]</td></tr>";
    } 

    $query = "SELECT nazwa FROM gra where nazwa not like '%n%'";
    $wynik = mysqli_query($connection, $query);
    echo"<table>";
    ECHO "<tr>
    <th>Gry bez N:</th>
    </tr>";
    while ($wiersz = mysqli_fetch_array($wynik)) {
        echo"<tr>
        <td>$wiersz[0]</td></tr>";
    }*/

    $query = "SELECT `nazwa` FROM `gra`ORDER BY `data_wydania` DESC LImit 1";
    $wynik = mysqli_query($connection, $query);
    echo"<table>";
    ECHO "<tr>
    <th>Gra wydana ostatnio:</th>
    </tr>";
    while ($wiersz = mysqli_fetch_array($wynik)) {
        echo"<tr>
        <td>$wiersz[0]</td></tr>";
    }

    echo "<table>";
    mysqli_close($connection);

    ?>