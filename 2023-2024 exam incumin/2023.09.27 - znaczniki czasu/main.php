<?php

#$poczatek = strtotime('January 01 2021');
#$koniec = mktime(0,0,0,2,1,2021);

$poczatek = new DateTime('2023-01-01 00:00');
$koniec = date_create_from_format('Y-m-d H:i', '2023-01-01 00:00');

$data_poczatkowa = date('l, d M Y, $poczatek');
$data_koncowa = date('l, d M Y, $koniec');


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>27.09.2023r.+</title>
</head>
<body>
    <p><b>Wyprzedaż: zaczyna sie</b> <?php echo $data_poczatkowa;?></p>
    <p><b>Wyprzedaż: kończy sie</b> <?php echo $data_koncowa;?></p>
</body>
</html>