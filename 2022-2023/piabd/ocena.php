<?php

if(isset($_POST['miasto'])){
    
    $connection = mysqli_connect("localhost","root","gry2");
    if($connection){
        $miasto = $_POST['miasto'];
        $query2 = "UPDATE miasta SET miasto = '$miasto' WHERE termin = '2020-07-13";
        if(mysqli_query($connection,$query2)){
            echo "Wartość została dodana";           
        }else{
            echo "Wartość została dodana";
        }
        mysqli_close($connection);
    }
    else echo "Nie udało się połączyć z bazą";
}
?>