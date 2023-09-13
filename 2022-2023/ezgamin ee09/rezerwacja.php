<?php

if(isset($_POST['data']) && isset($_POST['losob']) && isset($_POST['telefon']) && isset($_POST['zgoda'])){

$data = $_POST['data'];
$losob = $_POST['losob'];
$telefon = $_POST['telefon'];

$zapytanie = "insert into rezerwacje(data_rez,liczba_osob,telefon) value ('$data','$losob','$telefon')";
$connect = mysqli_connect("localhost","root","","baza");

if($connect)
{
    $wynik_zaptania = mysqli_query($connect, $zapytanie);
    if(!$wynik_zaptania) echo "Rezerwacja nie została dodana";
    else echo "Rezerwacja została dodana";
    
    mysqli_close($connect);
};

}
else  echo "Nie podano danych";
?>