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
            Base: <input type="number" name="n1"/><br>
            Expoente: <input type="number" name="n2"/><br>
            <input type="submit" value="Calcular">
    </form>
    <?php
        if(isset($_POST["n1"]) && isset($_POST["n2"])){
            $n1 = $_POST["n1"];
            $n2 = $_POST["n2"];
            if($n1 >= 200 || $n1 >= 200){
                die();
            }          
        
            echo "Potenciação: ". pow($n1, $n2);
        }
    ?>
    <a href="../../../../../public/index.php?a=lista1"><button>Voltar</button></a>
</body>
</html>