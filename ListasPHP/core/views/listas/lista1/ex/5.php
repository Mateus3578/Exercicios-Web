<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
            Precisão: <input type="number" name="n"/>
            <input type="submit" value="Calcular">
    </form>
    <?php
        if(isset($_POST["n"])){
            $n = $_POST["n"];
            $S = 4;
            $cima = 4;
            $baixo = 3;
            for($i = 0; $i < $n; $i++){
                $S -= $cima/$baixo;
                $baixo += 2;
                $S += $cima/$baixo;
                $baixo += 2;
            }
            echo "Calculado: $S";
            echo '<br>';
            echo "Real: " . M_PI;
        }
    ?>
    <a href="../../../../../public/index.php?a=lista1"><button>Voltar</button></a>
</body>
</html>