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
        $n = 0;
        while($n < 10){
            $vet[] = $n;
            $n++;
        }
        echo "Normal: <br>";
        for($i = 0; $i < 10; $i++){
            echo  "$vet[$i] <br>";
        }
        
        array_reverse($vet, false);
        
        echo "<br>Invertido: <br>";
        for($i = 0; $i < 10; $i++){
            echo  "$vet[$i] <br>";
        }
    ?>
    <a href="../../../../../public/index.php?a=lista1"><button>Voltar</button></a>
</body>
</html>