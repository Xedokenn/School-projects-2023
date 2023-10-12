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

                for($i=$n;$i>=0;$i--){      
                    for($j=0;$j<$i-1;$j++){
                        if($tabela[$j]>$tabela[$j+1]){
                            $tmp=$tabela[$j];
                            $tabela[$j]=$tabela[$j+1];
                            $tabela[$j+1]=$tmp;
                        }
                    }
                }

                for($i=0;$i<$n;$i++){
                    echo($tabela[$i].', ');
                }
            ?>

            <h5> Zaawansowane sortowanie (Heap Sort) : </h5>
            <?php
                $tabela = array('12','123','1','5','756','234','43','24');
                $n = count($tabela);




                for($i=0;$i<$n;$i++){
                    echo($tabela[$i].', ');
                }
            ?>
        </main>
    </div>
</body>
</html>