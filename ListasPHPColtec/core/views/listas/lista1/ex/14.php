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
            Nº de 4 dígitos: <input type="number" name="n"/><br>
            <input type="submit" value="Calcular">
    </form>
    <?php
        if(isset($_POST["n"])){
            $n = $_POST["n"];
            if($n < 1000 || $n > 9999){
                die();
            }
            
            settype($n, "string");
            $n1 = $n[0];
            $n1 .= $n[1];
            $n2 = $n[2];
            $n2 .= $n[3];

            echo "$n1 <br>";
            echo" $n2 <br>";

            settype($n1, "int");
            settype($n2, "int");

            echo pow(($n1 + $n2),2);
        }
    ?>
    <a href="../../../../../public/index.php?a=lista1"><button>Voltar</button></a>
</body>
</html>