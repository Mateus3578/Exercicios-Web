<?php

namespace core\classes;

use Exception;
use PDO;
use PDOException;

class Database{

    private $ligacao;

    /* Conecta à base de dados */
    private function ligar($bdName = MYSQL_DATABASE){
        
        try{
            $this->ligacao = new PDO(
            "mysql:".
            "host=".MYSQL_SERVER.";".
            "dbname=".$bdName.";".
            "charset=".MYSQL_CHARSET,
            MYSQL_USER,
            MYSQL_PASS,
            array(PDO::ATTR_PERSISTENT => true));
        }
        catch(PDOException $erro){
            echo 'Connection failed: ' . $erro->getMessage();
            die();
        }
        
    }
// ==============================================================================    
    /* Desconecta da base de dados */
    private function desligar(){
        $this->ligacao = null;
    }

/*
==============================================================================
Consultas
==============================================================================
*/

    public function select($query, $parametros = null, $bdName = MYSQL_DATABASE){
        // Verifica se é um SELECT
        if(!preg_match("/^SELECT/i", $query)){
            throw new Exception("Erro BD: Não é uma instrução SELECT.");
        }

        // Conecta
        $this->ligar($bdName);
        $resultados = null;
        
        // Faz a query
        try {
            $executar = $this->ligacao->prepare($query);
            if(!empty($parametros)){
                $executar->execute($parametros);
            } else {
                $executar->execute();
            }
            $resultados = $executar->fetchAll(PDO::FETCH_CLASS);

        } catch (PDOException $erro) { 
            echo 'Connection failed: ' . $erro->getMessage();
            die();
            return false;
        }

        // Desconecta
        $this->desligar();

        // Retorna os resultados obtidos
        return $resultados;
    }

// ==============================================================================

    public function insert($query, $parametros = null, $bdName = MYSQL_DATABASE){

        // Verifica se é um INSERT
        if(!preg_match("/^INSERT/i", $query)){
            throw new Exception("Erro BD: Não é uma instrução INSERT.");
        }

        // Conecta
        $this->ligar($bdName);

        // Faz a query
        try {
            $executar = $this->ligacao->prepare($query);
            if(!empty($parametros)){
                $executar->execute($parametros);
            } else {
                $executar->execute();
            }
        } catch (PDOException $erro) {
            echo 'Connection failed: ' . $erro->getMessage();
            die();
            return false;
        }

        // Desconecta
        $this->desligar();
    }

// ==============================================================================

    public function update($query, $parametros = null, $bdName = MYSQL_DATABASE){

        // Verifica se é um UPDATE
        if(!preg_match("/^UPDATE/i", $query)){
            throw new Exception("Erro BD: Não é uma instrução UPDATE.");
        }

        // Conecta
        $this->ligar($bdName);

        // Faz a query
        try {
            
            $executar = $this->ligacao->prepare($query);
            if(!empty($parametros)){
                $executar->execute($parametros);
            } else {
                
                $executar->execute();
            }
        } catch (PDOException $erro) {           
            echo 'Connection failed: ' . $erro->getMessage();
            die();
            return false;
        }

        // Desconecta
        $this->desligar();
    }

// ==============================================================================

    public function delete($query, $parametros = null, $bdName = MYSQL_DATABASE){

        // Verifica se é um DELETE
        if(!preg_match("/^DELETE/i", $query)){
            throw new Exception("Erro BD: Não é uma instrução DELETE.");
        }

        // Conecta
        $this->ligar($bdName);

        // Faz a query
        try {
            $executar = $this->ligacao->prepare($query);
            if(!empty($parametros)){
                $executar->execute($parametros);
            } else {
                $executar->execute();
            }
        } catch (PDOException $erro) {
            echo 'Connection failed: ' . $erro->getMessage();
            die();
            return false;
        }

        // Desconecta
        $this->desligar();
    }

// ==============================================================================

    /* Query genérica */
    public function statement($query, $parametros = null, $bdName = MYSQL_DATABASE){

        // Verifica se é um comando diferente dos anteriores
        if(preg_match("/^(SELECT|INSERT|UPDATE|DELETE)/i", $query)){
            throw new Exception("Erro BD: Instrução inválida.");
        }

        // Conecta
        $this->ligar($bdName);

        // Faz a query
        try { 
            $executar = $this->ligacao->prepare($query);
            if(!empty($parametros)){
                $executar->execute($parametros);
            } else {
                $executar->execute();
            }
        } catch (PDOException $erro) {      
            echo 'Connection failed: ' . $erro->getMessage();
            die();
            return false;
        }

        // Desconecta
        $this->desligar();
    }
}