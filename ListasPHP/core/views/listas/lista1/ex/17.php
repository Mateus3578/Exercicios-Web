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
        while($n < 50){
            echo "Dec: " . $n . "<br>";
            echo "Hex: " . dechex($n) . "<br>";
            echo "Bin: " . decbin($n) . "<br>";
            echo "<br>";
            $n++;
        }
    ?>
    <a href="../../../../../public/index.php?a=lista1"><button>Voltar</button></a>
</body>
</html>