<?php

namespace core\controllers;

use core\classes\Functions;
use core\models\Users;

/* Estrutura das páginas */

/* 
Todas as funções/métodos da classe Main são rotas definidas,
onde ao acessá-la são indicadas algumas ações e/ou quais arquivos 
carregar para construção da página. 
*/

/*
Consulte:
core/classes/Functions.php => para a função de construção e outras;
core/classes/Database.php => para funções relacionadas ao banco de dados;
core/models/Users.php => para comunicação com o bd;
*/

class Main
{
// =========================================================    
    public function index(){
        $dados = [
            "titulo_aba" => "Introdução a banco de dados - COLTEC",
        ];

        Functions::Layout([
            "layouts/header",
            "layouts/navbar",
            "inicio",
            "layouts/footer"
        ], $dados);
    }
// =========================================================     
    public function cadastro(){
        // Verifica se já está logado
        if (Functions::isLogged()) {
            $this->index();
            return;
        }

        $dados = [
            "titulo_aba" => "Criar conta",
        ];

        Functions::Layout([
            "layouts/header",
            "layouts/navbar",
            "cadastro",
            "layouts/footer"
        ], $dados);
    }
// ========================================================= 
    public function cadastrado(){
        // Verifica se já está logado
        if (Functions::isLogged()) {
            $this->index();
            return;
        }
        
        // Verifica se veio um formulário
        if ($_SERVER["REQUEST_METHOD"] != "POST") {
            $this->index();
            return;
        }
        
        // Verifica se Senha 1 = Senha 2
        if ($_POST["text_pass1"] !== $_POST["text_pass2"]) {
            $_SESSION["erro"] = "As senhas não estão iguais.";
            $this->cadastro();
            return;
        }
        
        // Verifica se a conta já existe
        $usuario = new Users();
        if ($usuario->verificaExistencia()) {
            $_SESSION["erro"] = "Cliente já cadastrado.";
            $this->cadastro();
            return;
        }
        
        // Criação do cadastro
        // var usuario pode ser tratada por ser do tipo boolean
        $usuario->registrarUsuario();
        $dados = [
            "titulo_aba" => "Cadastro",
        ];

        Functions::Layout([
            "layouts/header",
            "layouts/navbar",
            "cadastrado",
            "layouts/footer"
        ], $dados);
    }
// =========================================================
    public function cadastroAlterado(){
        // Verifica está logado
        if (!Functions::isLogged()) {
            Functions::redirect();
            return;
        }

        // Verifica se veio um formulário
        if ($_SERVER["REQUEST_METHOD"] != "POST") {
            Functions::redirect();
            return;
        }
        
        
 
        // Verifica no bd se o usuario existe
        $user = trim(strtolower($_POST["login_confirm"]));
        $pass = $_POST["pass_confirm"];
        $usuario =new Users();
        $resultado = $usuario->validarLogin($user, $pass);

        // Se ele existe, continua, se não, mostra erro e volta
        if(is_bool($resultado)){
            $_SESSION["erro"] = "Login inválido".
            $this->areaUsuario();
            return;
        }

        // Verifica se a nova senha foi confirmada
        $senha_alterada = false;
        if(isset($_POST["text_pass1"]) || isset($_POST["text_pass2"])){        
            if ($_POST["text_pass1"] !== $_POST["text_pass2"]) {
                $_SESSION["erro"] = "As senhas não estão iguais.";
                $this->areaUsuario();
                return;
            }else{
                $senha_alterada = true;
            }
        }
        // Adiciona/altera os dados
        if($senha_alterada){
            $usuario->alterarDados($_POST["text_pass1"]);
        }else{
            $usuario->alterarDados();
        }
        
        // Construção da página
        $dados = [
            "titulo_aba" => "Cadastro",
        ];

        Functions::Layout([
            "layouts/header",
            "layouts/navbar",
            "cadastroAlterado",
            "layouts/footer"
        ], $dados);
    }
// ========================================================= 
    public function login(){
        if (Functions::isLogged()) {
            Functions::redirect();
            return;
        }

        $dados = [
            "titulo_aba" => "Login",
        ];

        Functions::Layout([
            "layouts/header",
            "layouts/navbar",
            "login",
            "layouts/footer"
        ], $dados);
    }
// ========================================================= 
    public function login_submit(){
        // Verifica se já está logado
        if (Functions::isLogged()) {
            Functions::redirect();
            return;
        }

        // Verifica se recebeu um post
        if ($_SERVER["REQUEST_METHOD"] != "POST") {
            Functions::redirect();
            return;
        }

        // Verifica se recebeu login e senha
        if (!isset($_POST["text_user"]) || !isset($_POST["text_pass"])) {
                $_SESSION["erro"] = "Login inválido".
                Functions::redirect("login");
                return;
        }

        // Verifica no bd se o usuario existe
        $user = trim(strtolower($_POST["text_user"]));
        $pass = $_POST["text_pass"];
        $usuario =new Users();
        $resultado = $usuario->validarLogin($user, $pass);

        // Se ele existe, loga, se não, mostra erro e volta pro login
        if(is_bool($resultado)){
            $_SESSION["erro"] = "Login inválido".
            Functions::redirect("login");
            return;
        } else {
            $_SESSION["user_id"] = $resultado->id;
            $_SESSION["user_nick"] = $resultado->nickname;
            Functions::redirect();
            return;
        }
    }
// ========================================================= 
    public function logout(){
        unset($_SESSION["user_id"]);
        unset($_SESSION["user_nick"]);
        unset($_SESSION["user_email"]);
        unset($_SESSION["user_createdAt"]);
        unset($_SESSION["user_nome"]);
        unset($_SESSION["user_telefone"]);
        unset($_SESSION["user_cpf"]);
        unset($_SESSION["user_sexo"]);
        unset($_SESSION["user_endereco"]);
        unset($_SESSION["user_data_nascimento"]);
        unset($_SESSION["user_nome_mae"]);
        unset($_SESSION["user_nome_pai"]);

        Functions::redirect();
         return;
    }
// ========================================================= 
    public function areaUsuario(){
        if (!Functions::isLogged()) {
            Functions::redirect();
            return;
        }

        $classe = new Users();
        $usuario = $classe->recuperarDados($_SESSION["user_id"]);
        
        $dados = [
            "titulo_aba" => "Área do usuário",
            "usuario" => $usuario,
        ];

        Functions::Layout([
            "layouts/header",
            "layouts/navbar",
            "areaUsuario",
            "layouts/footer"
        ], $dados);
    }
// =========================================================  
    public function listas(){
        $dados = [
            "titulo_aba" => "Listas PHP",
        ];

        Functions::Layout([
            "layouts/header",
            "layouts/navbar",
            "listas",
            "layouts/footer"
        ], $dados);
    }  
// ========================================================= 
}
