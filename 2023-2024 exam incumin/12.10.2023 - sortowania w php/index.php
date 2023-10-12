<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <title>algorytmy sortujące</title>
    <meta http-equiv="X-Ua-Compatible" content="IE=edge">
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <div class="container">

        <header>
            <h1>Sort!</h1>
        </header>
        <main>
            <h5> Podstawowe sortowanie (bombelkowe) : </h5>
            <?php
                $tabela = array('12','123','1','5','756','234','43','24');
                $n = count($tabela);


                for ($i = $n; $i >= 0; $i--) {      
                    for ($j = 0; $j < $i - 1; $j++) {
                        if ($tabela[$j] > $tabela[$j + 1]) {
                            $g = $tabela[$j];
                            $tabela[$j] = $tabela[$j + 1];
                            $tabela[$j + 1] = $g;
                        }
                    }
                }

                for ($i = 0; $i < $n; $i++) {
                    echo($tabela[$i].', ');
                }
            ?>


            <br><br>
            <h5> Zaawansowane sortowanie (Quick Sort) : </h5>
            <?php
                $tabela = array('12','123','1','5','756','234','43','24');
                $n = count($tabela);

                function sort1($tab){
                    $loe = $gt = array();

                    if(count($tab) < 2){
                       return $tab;
                    }
                    $klucz = key($tab);
                    $drift = array_shift($tab);


                    foreach($tab as $wartosc) {
                       if($wartosc <= $drift) {
                          $loe[] = $wartosc;

                       }elseif ($wartosc > $drift) {
                          $gt[] = $wartosc;
                       }
                    }
                    return array_merge(sort1($loe),array($klucz=>$drift), sort1($gt));
                 }

                 $sorted = sort1($tabela);
                 print_r($sorted);
            ?>
        </main>
    </div>
</body>
</html>