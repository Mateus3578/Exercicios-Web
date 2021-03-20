<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 25%;
            }

            td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
            }

            tr:nth-child(even) {
            background-color: #dddddd;
            }
    </style>
</head>
<body>
    <form method="post">
        Nome completo: <input type="text" name="name"/><br>
        Endereço completo: <input type="text" name="end"/><br>
        Data de nascimento:  <input type="date" name="nasc"/><br>
        Nome da Mãe: <input type="text" name="mae"/><br>
        Escolaridade da Mãe: <input type="text" name="escmae"/><br>
        Nome do pai: <input type="text" name="pai"/><br>
        Escolaridade do Pai: <input type="text" name="escpai"/><br>
        <input type="submit" value="Enviar"><br>
    </form>
    <?php
        isset($_POST["name"]) ? $n[0] = $_POST["name"] : $n[0] = null;
        isset($_POST["end"]) ? $n[1] = $_POST["end"] : $n[1] = null;
        isset($_POST["nasc"]) ? $n[2] = $_POST["nasc"] : $n[2] = null;
        isset($_POST["mae"]) ? $n[3] = $_POST["mae"] : $n[3] = null;
        isset($_POST["escmae"]) ? $n[4] = $_POST["escmae"] : $n[4] = null;
        isset($_POST["pai"]) ? $n[5] = $_POST["pai"] : $n[5] = null;
        isset($_POST["escpai"]) ? $n[6] = $_POST["escpai"] : $n[6] = null;

        $f = fopen("dadosEx22.txt", "a");
        
        for($i = 0; $i < 7; $i++){   
            fwrite($f, $n[$i]);
            if($n[$i] != null){
                fwrite($f, "\n");
            }
        }
        fclose($f);
    ?>
    <form method="post">
        <input type="submit" value="Ver dados" name="a"><br>
    </form>

    <?php
        if (isset($_POST["a"])){
            $f = fopen("dadosEx22.txt", "r");
            echo "<table>";
            echo "<th> Dados </th>";
            for($i = 0; $i < 7; $i++){
                echo "<tr><td>" . fgets($f) . "</td></td>";
            }
            echo "</table>";
            fclose($f);
        }
    ?>
    <a href="../../../../../public/index.php?a=lista1"><button>Voltar</button></a>
</body>
</html>