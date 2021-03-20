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
        $cima = $baixo = 1;
        for($i = 0; $i < 50; $i++){
            $S += $cima/$baixo;
            $cima += 2;
            $baixo += 1;
        }
        echo $S;
    ?>
    <br>
    <br>
    <!-- Sei que esse redirecionamento não está muito bom -->
    <a href="../../../../../public/index.php?a=lista1"><button>Voltar</button></a>
</body>
</html>