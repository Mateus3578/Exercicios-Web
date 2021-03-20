<?php

namespace core\models;

use core\classes\Database;

class Users{
// =========================================================    
    
    /* Verifica se já existe uma conta com o email digitado */
    public function verificaExistencia(){
        $bd = new Database();
        $parametros = [
            ":user" => strtolower(trim($_POST["text_login"]))
        ];
        $resultados = $bd->select(
            "SELECT usuario from usuarios WHERE usuario = :user", 
            $parametros);
        if(count($resultados) != 0){
            return true;
        }else {
            return false;
        }
    }

// ========================================================= 

    /* Registra um usuário no banco de dados */
    public function registrarUsuario(){

        // Poderia pedir para validar o email, mas......
        $bd = new Database();
        $parametros = [
            ":user" => trim($_POST["text_login"]),
            ":senha" => password_hash(($_POST["text_pass1"]), PASSWORD_DEFAULT),
            ":email" => strtolower(trim($_POST["text_email"])),
            ":nick" => trim($_POST["text_nick"]),
            ":isAtivo" => 1,
        ];

        $bd->insert(
            "INSERT INTO usuarios VALUES(
                0,
                :user,
                :senha,
                :email,
                :nick,
                :isAtivo,
                NOW(),
                NOW(),
                NULL,
                NULL,
                NULL,
                NULL,
                NULL,
                NULL,
                NULL,
                NULL,
                NULL
            )",
        $parametros);
    }

// ========================================================= 

    /* Valida um login e senha no bd */
    public function validarLogin($usuario, $senha){
        $parametros = [
            ":user" => $usuario
        ];

        $bd = new Database();
        $resultados = $bd->select(
            "SELECT * FROM usuarios 
            WHERE usuario = :user 
            AND isAtivo = 1 
            AND deletedAt IS NULL"
        ,$parametros);

        if(count($resultados) != 1){
            return false;
        } else {
            $usuario = $resultados[0];
            if(!password_verify($senha, $usuario->senha)){
                return false;
            } else {
                return $usuario;
            }
        }
    }

// ========================================================= 

    /* Puxa os dados de um usuário do banco de dados a partir do id */
    public function recuperarDados($id){

        $bd = new Database();
        $parametros = [
            ":id" => $id,
        ];

        $resultados = $bd->select(
            "SELECT 
                nickname,
                email,
                nome,
                telefone,
                cpf,
                sexo,
                endereco,
                data_nascimento,
                createdAt,
                updatedAt,
                nome_mae,
                nome_pai
            FROM usuarios
            WHERE id = :id",
        $parametros);

        if(count($resultados) != 1){
            return false;
        } else {
            return $resultados[0];
        }
    }

// ========================================================= 
    
    /* Altera os dados */
    public function alterarDados($nova_senha = null){
        
        $bd = new Database();
        $sql = "UPDATE usuarios SET ";
                
        if($_POST["user_nick"] != null){
            $sql .= "nickname = '";
            $sql .= ($_POST["user_nick"]);
            $sql .= "', ";
            $_SESSION["user_nick"] = $_POST["user_nick"];
        }
        if($_POST["user_email"] != null){
            $sql .= "email = '";
            $sql .= ($_POST["user_email"]);
            $sql .= "', ";
        }
        if($_POST["user_nome"] != null){
            $sql .= "nome = '";
            $sql .= ($_POST["user_nome"]);
            $sql .= "', ";
        }
        if($_POST["user_telefone"] != null){
            $sql .= "telefone = '";
            $sql .= ($_POST["user_telefone"]);
            $sql .= "', ";
        }
        if($_POST["user_cpf"] != null){
            $sql .= "cpf = '";
            $sql .= ($_POST["user_cpf"]);
            $sql .= "', ";
        }
        if($_POST["user_sexo"] != null && $_POST["user_sexo"] != "Escolha..."){
            $sql .= "sexo = '";
            $sql .= ($_POST["user_sexo"]);
            $sql .= "', ";
        }
        if($_POST["user_endereco"] != null){
            $sql .= "endereco = '";
            $sql .= ($_POST["user_endereco"]);
            $sql .= "', ";
        }
        if($_POST["user_data_nascimento"] != null){
            $sql .= "data_nascimento = '";
            $sql .= ($_POST["user_data_nascimento"]);
            $sql .= "', ";
        }
        if($_POST["user_nome_mae"] != null){
            $sql .= "nome_mae = '";
            $sql .= ($_POST["user_nome_mae"]);
            $sql .= "', ";
        }
        if($_POST["user_nome_pai"] != null){
            $sql .= "nome_pai = '";
            $sql .= ($_POST["user_nome_pai"]);
            $sql .= "', ";
        }
        if($nova_senha != null){
            $sql .= "senha = '";
            $sql .= password_hash(($nova_senha), PASSWORD_DEFAULT);
            $sql .= "', ";
        }

        $sql .= "updatedAt = NOW() ";
        $sql .= "WHERE id = ";
        $sql .= ($_SESSION["user_id"]);

        $bd->update($sql);
    }
}