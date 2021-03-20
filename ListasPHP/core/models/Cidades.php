<?php

namespace core\models;

use core\classes\Database;

class Cidades{
// =========================================================    
    
    /* Verifica se já existe uma cidade com o nome indicado no estado indicado */
    public function verificaExistenciaCidade($uf, $cidade){
        $bd = new Database();
        $parametros = [
            ":cidade" => $cidade,
            ":estado" => $uf,
        ];
        $resultados = $bd->select(
            "SELECT nome from cidades WHERE nome = :cidade AND uf = :estado", 
            $parametros, MYSQL_DATABASE_2);
        if(count($resultados) != 0){
            return true;
        }else {
            return false;
        }
    }

// ========================================================= 

    /* Registra uma nova cidade no banco de dados */
    public function registrarCidade($uf, $nome){
        $bd = new Database();
        // pega o numero do estado para a tabela de cidades
        $param = [
            ":uf" => $uf
        ];

        $resultado = $bd->select(
            "SELECT * from estados WHERE uf = :uf",
        $param, MYSQL_DATABASE_2);
        
        if(count($resultado) != 1){
            $resultado[0] = "00";
        }
        $estado = $resultado[0];

        // insere
        $parametros = [
            ":estado" => $estado->id,
            ":uf" => $uf,
            ":nome" => $nome,
        ];

        $bd->insert(
            "INSERT INTO cidades VALUES(
                0,
                :estado,
                :uf,
                :nome
            )",
        $parametros, MYSQL_DATABASE_2);
    }

// ========================================================= 

    /* Busca as cidades do estado informado no banco de dados */
    public function recuperarCidades($uf){

        $bd = new Database();
        $parametros = [
            ":uf" => $uf,
        ];

        $resultados = $bd->select(
            "SELECT * FROM cidades WHERE uf = :uf",
        $parametros, MYSQL_DATABASE_2);

        return $resultados;
    }

// ========================================================= 

    /* Converte uf para nome de estado usando o banco de dados */
    public function ufToName($uf){

        $bd = new Database();
        $parametros = [
            ":uf" => $uf,
        ];

        $resultados = $bd->select(
            "SELECT * FROM estados WHERE uf = :uf",
        $parametros, MYSQL_DATABASE_2);

        return $resultados;
    }

// ========================================================= 
    
}