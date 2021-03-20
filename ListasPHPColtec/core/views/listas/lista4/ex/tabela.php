<?php $i = 0;
foreach ($resultados as $r) {
    $i++;
} ?>
<div class="container" style="margin-bottom:100px">
    <div class="row my-5">
        <h2 class="text-center">Resultados para o estado <?= $estado[0]->nome ?> </h2>
        <p class="text-center text-light">
            <?= $i ?> cidades cadastradas no banco de dados.
        </p>
        <div class="col-sm-6 offset-sm-3 text-center">
        </div>
        <div class="row justify-content-center">
            <div class="col-auto">
                <div class="table table-responsive">
                    <table class="table table-dark table-striped table-bordered text-center">
                        <tr>
                            <td colspan="2">Cidades</td>
                        </tr>
                        <?php $i = 1 ?>
                        <?php foreach ($resultados as $r) { ?>
                            <tr>
                                <td>
                                    <?= $i ?>
                                </td>
                                <td>
                                    <?= $r->nome ?>
                                </td>
                            </tr>
                        <?php $i++;
                        } ?>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-sm-6 offset-sm-3 text-center">
            <a href="?a=lista4" class="btn btn-primary">Voltar</a>
        </div>
    </div>
</div>