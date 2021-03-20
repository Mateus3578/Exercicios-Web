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
            <h2 class="text-center">Cadastro</h2>
            <form action="?a=cadastrado" method="post">
                <div class="my-3">
                    <input class="form-control" type="text" name="text_login" placeholder="Login" required>
                </div>
                <div class="my-3">
                    <input class="form-control" type="password" name="text_pass1" placeholder="Senha" required>
                </div>
                <div class="my-3">
                    <input class="form-control" type="password" name="text_pass2" placeholder="Repetir a senha" required>
                </div>
                <div class="my-3">
                    <input class="form-control" type="text" name="text_nick" placeholder="Apelido/Nickname" required>
                </div>
                <div class="my-3">
                    <input class="form-control" type="email" name="text_email" placeholder="Email">
                </div>
                <div class="my-3 text-center">
                    <p>Você poderá completar seu cadastro na área do usuário.</p>
                </div>
                <div class="my-4 text-center">
                    <input class="btn btn-primary" type="submit" value="Criar conta">
                </div>
            </form>
        </div>
    </div>
</div>