<?php use core\classes\Functions; ?>
<div class="container">
    <div class="text-center row my-4 col-sm-8 offset-sm-2">
    <?php if (Functions::isLogged()) : ?>
        <h1 class="text-center">Seja bem vindo, <?= $_SESSION["user_nick"] ?>!</h1>
    <?php else : ?>
        <h1 class="text-center">Olá,</h1>
    <?php endif; ?>
        <div class="row my-3">
        <?php if (Functions::isLogged()) : ?>
            <p>Para alterar ou incluir mais dados na sua conta, como email e telefone, clique no ícone de usuário com o apelido cadastrado no canto superior direito.</p>
            <p>Para fazer logoff, clique no ícone ao lado do ícone de usuário.</p>
        <?php else : ?>
            <p>Todos os exercícios que envolvem banco de dados pedem um controle de usuário.</p>
            <p>Por isso, o acesso aos exercícios só é liberado ao logar em uma conta existente.</p>
            <p>Só é possível acessar a lista 01 sem fazer login na página .</p>
            <p>Use a opção Criar conta no canto superior direito para criar uma conta, e faça login para acessar os exercícios.</p>
        <?php endif; ?> 
            <p>Consulte o GUIA.txt para mais detalhes sobre o projeto.</p>
            <p>(Guia disponível apenas acessando os arquivos do projeto, na pasta principal)</p>
            <p>(Todos os arquivos também foram enviados pelo Google Classrom)</p>
        </div>
    </div>
</div>