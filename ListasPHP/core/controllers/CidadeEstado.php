<?php

namespace core\controllers;

use core\classes\Functions;
use core\models\Cidades;

class CidadeEstado {

    
// ========================================================= 
    public function registrar(){ 
        // Verifica se está logado
        if (!Functions::isLogged()) {
            Functions::redirect();
            return;
        }

        // Verifica se recebeu um post
        if ($_SERVER["REQUEST_METHOD"] != "POST") {
            Functions::redirect();
            return;
        }

        // Verifica se a cidade existe
        $city = $_POST["text_city"];
        $uf = $_POST["text_uf"];
        $cidade = new Cidades();
        $resultado = $cidade->verificaExistenciaCidade($uf, $city);

        // Se ela existir informa que existe, se não, cadastra
        if($resultado){
            $_SESSION["erro"] = "Cidade já cadastrada";
            Functions::redirect("insere_cidade");
            return;
        }else{
            $cidade->registrarCidade($uf, $city);
        }

        // Constroi a pagina
        $dados = [
            "titulo_aba" => "Dados inseridos",
        ];
    
        Functions::Layout([
            "layouts/header",
            "layouts/navbar",
            "listas/lista4/ex/insere",
            "layouts/footer_lista4",
        ], $dados);
    }
// ========================================================= 
    public function preparaexibicao(){
        // Verifica se está logado
        if (!Functions::isLogged()) {
            Functions::redirect();
            return;
        }

        // Verifica se recebeu um post
        if ($_SERVER["REQUEST_METHOD"] != "POST") {
            Functions::redirect();
            return;
        }
        
        $uf = ($_POST["text_uf"]);
        $cidade = new Cidades();
        $resultados = $cidade->recuperarCidades($uf);

        return $resultados;
    }
// ========================================================= 
public function exibir(){
    
    $resultados = $this->preparaexibicao();
    $uf = new Cidades();
    $estado = $uf->ufToName($_POST["text_uf"]);
    
    $dados = [
        "titulo_aba" => "Consulta",
        "estado" => $estado,
        "resultados" => $resultados,
    ];

    Functions::Layout([
        "layouts/header",
        "layouts/navbar",
        "listas/lista4/ex/tabela",
        "layouts/footer_lista4",
    ], $dados);
}
// =========================================================

}