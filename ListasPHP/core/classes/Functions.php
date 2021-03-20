<?php

namespace core\classes;

use Exception;

class Functions{
    /* Constrói o layout da página a partir de um ou mais arquivos
        Recebe:
            $estruturas: um array com o nome dos arquivos;
            $dados: opcionalmente um array com variáveis dentro desses arquivos,
                separados usando a função extract. */
    public static function Layout($estruturas, $dados = null){

        // Verifica se é um array
        if(!is_array($estruturas)){
            throw new Exception("Erro: Estrutura inválida");
            die();
        }

        // Variáveis adicionais
        if(!empty($dados) && is_array($dados)){
            extract($dados);
            /*
                Transforma o array em variáveis, sendo:
                    índice = nome da variável;
                    dado = dado da variável.
            */
        }

        // Inclui os arquivos para construção da página
        foreach($estruturas as $estrutura){
            include("../core/views/$estrutura.php");
        }
    }

// ===================================================================

    /* Verifica se o client está logado */
    public static function isLogged(){
        return isset($_SESSION["user_id"]);
    }

// ===================================================================

    /* Cria uma hash a partir dos caracteres na var chars */
    public static function criarHash($num_caracteres = 12){
        $chars = "1234567890qwertyuiopasdfghjklzxcvbnm1234567890qwertyuiopasdfghjklzxcvbnm1234567890qwertyuiopasdfghjklzxcvbnm1234567890QWERTYUIOPASDFGHJKLZXCVBNM1234567890QWERTYUIOPASDFGHJKLZXCVBNM1234567890QWERTYUIOPASDFGHJKLZXCVBNM";
        return substr(str_shuffle($chars), 0, $num_caracteres);
    }

// ===================================================================
    /* Função para redirecionamentos rápidos */
    public static function redirect($rota = ""){
        header("Location: " . BASE_URL . "?a=$rota");
    }
}