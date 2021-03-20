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
        $S = 0;
        $cima = 480;
        $baixo = 10;
        for($i = 0; $i < 30; $i++){
            $S += $cima/$baixo;
            $cima -= 5;
            $baixo++;
            $S -= $cima/$baixo;
            $cima -= 5;
            $baixo++;
        }
        echo $S;
    ?>
    <a href="../../../../../public/index.php?a=lista1"><button>Voltar</button></a>
</body>
</html>