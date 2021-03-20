<div class="container-fluid">
    <div class="row my-3">
        <h2 class="text-center">Calculadora científica</h2>
        <h6 class="text-center">Para seno, cosseno e raiz quadrada, digite o número no campo a, pois o campo b é ignorado</h6>
        <div class="my-3 text-center">
            <?php
            // Executa apenas ao clicar em calcular
            if (isset($_POST["calcular"])) {

                // Verifica se precisa do segundo número
                if ($_POST["operacao"] == "pow" || $_POST["operacao"] == "log") {

                    // Verifica se são números
                    if (is_numeric($_POST["n1"]) && is_numeric($_POST["n2"])) {

                        // Faz a conta
                        if ($_POST["operacao"] == "pow") {
                            $total = pow($_POST["n1"], $_POST["n2"]);
                            echo "<h1>{$_POST["n1"]} elevado à {$_POST["n2"]} = {$total}</h1>";
                        }
                        if ($_POST["operacao"] == "log") {
                            $total = log($_POST["n1"], $_POST["n2"]);
                            echo "<h1>Logaritmo de {$_POST["n1"]} na base {$_POST["n2"]} = {$total}</h1>";
                        }
                    } else {
                        echo "<h1>Digite corretamente</h1>";
                    }
                } else {

                    // Precisa apenas de a (n1)
                    if (is_numeric($_POST["n1"])) {

                        // Faz a conta
                        if ($_POST["operacao"] == "sen") {
                            $total = sin($_POST["n1"]);
                        }
                        if ($_POST["operacao"] == "cos") {
                            $total = cos($_POST["n1"]);
                        }
                        if ($_POST["operacao"] == "sqrt") {
                            $total = sqrt($_POST["n1"]);
                        }
                        // Mostra o resultado
                        echo "<h1>{$_POST["operacao"]} de {$_POST["n1"]} = {$total}</h1>";
                    } else {
                        echo "<h1>Digite corretamente</h1>";
                    }
                }
            }
            ?>
        </div>
        <div class="d-flex justify-content-center">
            <form method="post" action="">
                <input name="n1" type="text" class="form-control" placeholder="a" style="width: 150px; display: inline" />
                <select class="form-select" name="operacao" style="width: 200px; display: inline">
                    <option value="sen">seno</option>
                    <option value="cos">cosseno</option>
                    <option value="pow">a elevado à b</option>
                    <option value="sqrt">raiz quadrada</option>
                    <option value="log">logaritmo de a na base b</option>
                </select>
                <input name="n2" type="text" class="form-control" placeholder="b" style="width: 150px; display: inline" />
                <div class="my-4 text-center">
                    <input name="calcular" type="submit" value="Calcular" class="btn btn-primary" />
                </div>
            </form>
        </div>
    </div>
</div>