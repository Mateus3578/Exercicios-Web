<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $S = 4;
        $cima = 4;
        $baixo = 3;
        for($i = 0; $i < 100000; $i++){
            $S -= $cima/$baixo;
            $baixo += 2;
            $S += $cima/$baixo;
            $baixo += 2;
        }
        echo "Calculado: " . $S;
        echo '<br>';
        echo "Real: " . M_PI;
    ?>
    <a href="../../../../../public/index.php?a=lista1"><button>Voltar</button></a>
</body>
</html>