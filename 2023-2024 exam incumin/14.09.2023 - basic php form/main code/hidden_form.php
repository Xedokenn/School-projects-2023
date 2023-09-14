<?php
    $connection = mysqli_connect("localhost","root","","w3schools");
    $query = "SELECT CustomerName, Country FROM customers where 1 limit 10";
    $exit_list = "";

    if (!$connection) {
        die("Connection failed: ". mysqli_connect_error());
    };

    $resault = mysqli_query($connection, $query);
    if(isset($_POST['submit'])){
        while($row = mysqli_fetch_array($resault)){
            $exit_list.= "$row[0],$row[1],<br>";


    }echo '<input hidden type"text" name="list" id="list" value="'.$exit_list.'">';
    mysqli_close($connection);
}
?>