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
        Numero: <input type="number" name="n"/><br>
        Base de entrada
        <select id="entrada">
            <option value="d1">Decimal</option>
            <option value="h1">Hexadecimal</option>
            <option value="b1">Binário</option>
        </select>
        <br>
        Base de saída
        <select id="saida">
            <option value="d2">Decimal</option>
            <option value="h2">Hexadecimal</option>
            <option value="b2">Binário</option>
        </select><br>
        <input type="submit" value="Calcular">
    </form>
    <?php
        if (isset($_POST["n"])) {
            $n = $_POST["n"];

            echo "Decimal: " . $n . "<br>";
            echo "Hexadecimal: " . dechex($n) . "<br>";
            echo "Binário: " . decbin($n) . "<br>";
            echo "<br>";
        }
    ?>
    <a href="../../../../../public/index.php?a=lista1"><button>Voltar</button></a>
</body>
</html>