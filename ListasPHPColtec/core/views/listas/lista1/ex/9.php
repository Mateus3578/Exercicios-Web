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

        for($i = 0; $i < 11; $i++){
            echo"$i: ";
            for($j = 0; $j < 11; $j++){
                echo $i * $j . " ";
            }
            echo"<br>";
        }

    ?>
    <a href="../../../../../public/index.php?a=lista1"><button>Voltar</button></a>
</body>
</html>