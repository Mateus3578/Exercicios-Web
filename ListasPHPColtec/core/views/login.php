<div class="container">
    <div class="row my-5">
        <div class="col-sm-4 offset-sm-4">
            <div class="text-center">
                <h3>LOGIN</h3>
                <form action="?a=login_submit" method="post">
                    <div class="my-3">
                        <input type="text" name="text_user" required placeholder="Usuário">
                    </div>
                    <div class="my-3">
                        <input type="password" name="text_pass" required placeholder="Senha">
                    </div>
                    <div class="my-3">
                        <input type="submit" value="Entrar" class="btn btn-primary">
                    </div>
                </form>
                <?php if(isset($_SESSION["erro"])): ?>
                    <div class="alert alert-danger text-center">
                        <?= $_SESSION["erro"] ?>
                        <?php unset($_SESSION["erro"]); ?>
                    </div>
                    <?php endif; ?>
            </div>
        </div>
    </div>
</div>