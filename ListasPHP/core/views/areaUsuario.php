<?php $na = "Não informado" ?>
<div class="container">
    <div class="row p-3">
        <div class="col-sm-8 offset-sm-2">
            <?php if (isset($_SESSION["erro"])) : ?>
                <div class="alert alert-danger text-center">
                    <?= $_SESSION["erro"] ?>
                    <?php unset($_SESSION["erro"]); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="row justify-content-center">
        <h1 class="text-center">Dados Cadastrados</h1>
        <div class="col-auto">
            <div class="table table-responsive">
                <table class="table table-bordered text-light" style="color:white">
                    <tr>
                        <td>Nome</td>
                        <td><?php echo is_null($usuario->nome) ? $na : $usuario->nome; ?></td>
                    </tr>
                    <tr>
                        <td>Apelido</td>
                        <td><?= $usuario->nickname; ?></td>
                    </tr>                    
                        <td>e-mail</td>
                        <td><?php echo is_null($usuario->email) ? $na : $usuario->email; ?></td>
                    </tr>
                    <tr>
                        <td>Endereço</td>
                        <td><?php echo is_null($usuario->endereco) ? $na : $usuario->endereco; ?></td>
                    </tr>
                    <tr>
                        <td>Telefone</td>
                        <td><?php echo is_null($usuario->telefone) ? $na : $usuario->telefone; ?></td>
                    </tr>
                    <tr>
                        <td>Data de nascimento</td>
                        <td><?php echo is_null($usuario->data_nascimento) ? $na : (new DateTime($usuario->data_nascimento))->format("d/m/Y"); ?></td>
                    </tr>
                    <tr>
                        <td>CPF</td>
                        <td><?php echo is_null($usuario->cpf) ? $na : $usuario->cpf; ?></td>
                    </tr>
                    <tr>
                    <tr>
                        <td>Nome da mãe</td>
                        <td><?php echo is_null($usuario->nome_mae) ? $na : $usuario->nome_mae; ?></td>
                    </tr>
                    <tr>
                        <td>Nome do pai</td>
                        <td><?php echo is_null($usuario->nome_pai) ? $na : $usuario->nome_pai; ?></td>
                    </tr>
                    <tr>
                        <td>Sexo</td>
                        <td><?php echo is_null($usuario->sexo) ? $na : $usuario->sexo; ?></td>
                    </tr>
                    
                    <tr>
                        <td>Data de criação da conta</td>
                        <td><?= (new DateTime($usuario->createdAt))->format("d/m/Y - H:i:s"); ?></td>
                    </tr>
                    <tr>
                        <td>Data da última alteração dos dados</td>
                        <td><?= (new DateTime($usuario->updatedAt))->format("d/m/Y - H:i:s"); ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="row my-5">
        <div class="col-sm-8 offset-sm-2">
            <div class="text-center">
                <h1>Alterar dados</h1>
                <p>Preencha os campos que deseja alterar</p>
            </div>
            <form action="?a=recadastrado" method="post" class="p-3">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="user_nick" placeholder="Apelido">
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" name="text_pass1" placeholder="Nova senha">
                    <input type="password" class="form-control" name="text_pass2" placeholder="Confirmação da nova senha">
                </div>
                <div class="input-group mb-3">
                    <input type="email" class="form-control" name="user_email" placeholder="e-mail">
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="user_nome" placeholder="Nome">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Sexo</span>
                    <select class="form-select" name="user_sexo">
                        <option selected>Escolha...</option>
                        <option value="masculino">Masculino</option>
                        <option value="feminino">Feminino</option>
                        <option value="não informado">Não desejo informar</option>
                    </select>
                    <input type="text" class="form-control" name="user_telefone" placeholder="Telefone">
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="user_endereco" placeholder="Endereço">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Data de nascimento</span>
                    <input type="date" class="form-control" name="user_data_nascimento" placeholder="Data de nascimento">
                    <input type="text" class="form-control" name="user_cpf" placeholder="CPF">
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="user_nome_mae" placeholder="Nome da mãe">
                    <input type="text" class="form-control" name="user_nome_pai" placeholder="Nome do pai">
                </div>
                <p class="my-4 text-center">Confirme sua senha para validar as alterações (senha antiga caso tenha inserido uma nova)</p>
                <div class="input-group mb-3 my-4 text-center">
                    <input type="test" class="form-control" name="login_confirm" placeholder="Confirme seu login" required>
                    <input type="password" class="form-control" name="pass_confirm" placeholder="Confirme sua senha" required>
                </div>
                <div class="my-4 text-center">
                    <input class="btn btn-primary" type="submit" value="Alterar">
                </div>
            </form>
        </div>
    </div>
</div>