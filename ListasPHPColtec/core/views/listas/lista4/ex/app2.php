<?php if (isset($_SESSION["erro"])) : ?>
    <div>
        <script>
            window.alert("<?= $_SESSION["erro"] ?>");
        </script>
        <?php unset($_SESSION["erro"]) ?>
    </div>
<?php endif; ?>
<div class="container">
    <div class="row my-5">
        <div class="col-sm-6 offset-sm-3">
            <h2 class="text-center">Inserir nova Cidade</h2>
            <form action="?a=inserido" method="post">
                <div class="my-3">
                    <label class="form-label">Cidade</label>
                    <input class="form-control" type="text" name="text_city" placeholder="Nome da cidade" required>
                </div>
                <div class="my-3">
                    <label class="form-label">Estado</label>
                    <select class="form-select" name="text_uf">
                        <option selected disabled>Escolha...</option>
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AM">Amazonas</option>
                        <option value="AP">Amapá</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="PR">Paraná</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SE">Sergipe</option>
                        <option value="SP">São Paulo</option>
                        <option value="TO">Tocantins</option>
                    </select>
                </div>
                <div class="my-4 text-center">
                    <input class="btn btn-primary" type="submit" value="Inserir cidade">
                </div>
            </form>
        </div>
    </div>
</div>