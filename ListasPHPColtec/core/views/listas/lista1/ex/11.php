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
            N: <input type="number" name="n"/>
            <input type="submit" value="Calcular">
    </form>
    <?php
        if(isset($_POST["n"])){
            $n = $_POST["n"];
            if($n > 1000){
                die();
            }
            if($n % 2 == 0){
                $n++;
            }

            while($n < 1000){
                echo "$n ";
                $n += 2;
            }
        }
    ?>
    <a href="../../../../../public/index.php?a=lista1"><button>Voltar</button></a>
</body>
</html>