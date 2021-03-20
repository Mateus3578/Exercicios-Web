<div class="container-fluid">
    <div class="row my-3">
        <h2 class="text-center">Calculadora</h2>
        <div class="my-4 text-center">
            <?php

            // Executa apenas ao clicar em calcular
            if (isset($_POST["calcular"])) {

                // Verifica se são números
                if (is_numeric($_POST["n1"]) && is_numeric($_POST["n2"])) {

                    // Faz a conta
                    if ($_POST["operacao"] == "+") {
                        $total = $_POST["n1"] + $_POST["n2"];
                    }
                    if ($_POST["operacao"] == "-") {
                        $total = $_POST["n1"] - $_POST["n2"];
                    }
                    if ($_POST["operacao"] == "*") {
                        $total = $_POST["n1"] * $_POST["n2"];
                    }
                    if ($_POST["operacao"] == "/") {
                        $total = $_POST["n1"] / $_POST["n2"];
                    }

                    // Mostra o resultado
                    echo "<h1>{$_POST["n1"]} {$_POST["operacao"]} {$_POST["n2"]} = {$total}</h1>";
                } else {

                    // Mostra um erro
                    echo "<h1>Digite números</h1>";
                }
            }
            ?>
        </div>
        <div class="d-flex justify-content-center">
            <form method="post" action="">
                <input name="n1" type="text" class="form-control" style="width: 150px; display: inline" />
                <select class="form-select" name="operacao" style="width: 150px; display: inline">
                    <option value="+">+ (soma)</option>
                    <option value="-">- (subtração)</option>
                    <option value="*">* (multiplicação)</option>
                    <option value="/">/ (divisão)</option>
                </select>
                <input name="n2" type="text" class="form-control" style="width: 150px; display: inline" />
                <div class="my-4 text-center">
                    <input name="calcular" type="submit" value="Calcular" class="btn btn-primary" />
                </div>
            </form>
        </div>
    </div>
</div>