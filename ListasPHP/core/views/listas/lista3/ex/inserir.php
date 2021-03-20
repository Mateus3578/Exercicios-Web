<div class="container-fluid">
    <div class="row my-5">
        <div class="col-sm-6 offset-sm-3 text-center">
            <h2>Sistema de matrizes</h2>
            <h5 class="p-3">Informe a quantidade de linhas e colunas</h5>
            <form action="" method="post">
                <div class="input-group mb-3">
                    <input class="form-control" type="text" name="linhas" placeholder="Linhas" required>
                    <input class="form-control" type="text" name="colunas" placeholder="Colunas" required>
                </div>
                <div class="my-4 text-center">
                    <input class="btn btn-primary" type="submit" value="Abrir campos">
                </div>
            </form>
        </div>
    </div>
</div>

<?php if (isset($_POST["linhas"]) && isset($_POST["colunas"])) { ?>
    <div class="container-fluid">
        <div class="row my-5">
            <div class="col-sm-6 offset-sm-3 text-center">
                <h5 class="p-3">Informe os elementos nas linhas e colunas</h5>
                <form action="?a=salvar" method="post">
                    <div class="input-group mb-3">
                        <?php
                        for ($i = 0; $i < $_POST["linhas"]; $i++) {
                            for ($j = 0; $j < $_POST["colunas"]; $j++) { ?>
                                <input class="form-control" type="text" name="<?= $i ?>, <?= $j ?>" placeholder="<?= $i + 1 ?>, <?= $j + 1 ?>">
                            <?php  } ?>
                                <div class="input-group">
                            <?php } ?>
                            <?php for ($i = 0; $i < $_POST["linhas"]; $i++) { ?>
                            </div>
                            <?php } ?>                       
                    </div>
                    <div class="my-4 text-center">
                        <input class="btn btn-primary" type="submit" value="Inserir">
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php  } ?>