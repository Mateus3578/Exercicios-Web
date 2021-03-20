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
            N1: <input type="number" name="n1"/><br>
            N2: <input type="number" name="n2"/><br>
            N3: <input type="number" name="n3"/><br>
            N4: <input type="number" name="n4"/><br>
            N5: <input type="number" name="n5"/><br>
            <input type="submit" value="Calcular"><br>
    </form>
    <?php
        if(isset($_POST["n1"]) && isset($_POST["n2"]) && isset($_POST["n3"]) && isset($_POST["n4"]) && isset($_POST["n5"])){
            $n[] = $_POST["n1"];
            $n[] = $_POST["n2"];
            $n[] = $_POST["n3"];
            $n[] = $_POST["n4"];
            $n[] = $_POST["n5"];

            $media = array_sum($n) / count($n);

            echo "Média: $media";
        }
    ?>
    <a href="../../../../../public/index.php?a=lista1"><button>Voltar</button></a>
</body>
</html>