<?php

namespace core\controllers;

use core\classes\Functions;

/* Estrutura das páginas */

class Listas
{ 
// ========================================================= 
    public function lista1(){
        $dados = [
            "titulo_aba" => "Lista 1 PHP",
        ];

        Functions::Layout([
            "layouts/header",
            "layouts/navbar",
            "listas/lista1/lista1",
            "layouts/footer"
        ], $dados);
    }
// ========================================================= 
    public function lista2(){
        $dados = [
            "titulo_aba" => "Lista 2 PHP",
        ];

        Functions::Layout([
            "layouts/header",
            "layouts/navbar",
            "listas/lista2/lista2",
            "layouts/footer"
        ], $dados);
    }
// =========================================================
    public function app2_1(){
        $dados = [
            "titulo_aba" => "Calculadora",
        ];

        Functions::Layout([
            "layouts/header",
            "layouts/navbar",
            "listas/lista2/ex/app1",
            "layouts/footer"
        ], $dados);
    }
// =========================================================
    public function app2_2(){
        $dados = [
            "titulo_aba" => "Calculadora Científica",
        ];

        Functions::Layout([
            "layouts/header",
            "layouts/navbar",
            "listas/lista2/ex/app2",
            "layouts/footer"
        ], $dados);
    }
// ========================================================= 
    public function lista3(){
        $dados = [
            "titulo_aba" => "Lista 3 PHP",
        ];

        Functions::Layout([
            "layouts/header",
            "layouts/navbar",
            "listas/lista3/lista3",
            "layouts/footer"
        ], $dados);
    }
// =========================================================
    public function app3(){
        $dados = [
            "titulo_aba" => "Programa de Matrizes",
        ];

        Functions::Layout([
            "layouts/header",
            "layouts/navbar",
            "listas/lista3/ex/inserir",
            "layouts/footer"
        ], $dados);
    }
// =========================================================
    public function app3_1(){
        $dados = [
            "titulo_aba" => "Programa de Matrizes",
        ];

        Functions::Layout([
            "layouts/header",
            "layouts/navbar",
            "listas/lista3/ex/inserir",
            "layouts/footer"
        ], $dados);
    }
// =========================================================
    public function app_3_salvar(){
        
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

        //Insere no BD


        // Constroi a pagina       
        $dados = [
            "titulo_aba" => "Programa de Matrizes",
        ];

        Functions::Layout([
            "layouts/header",
            "layouts/navbar",
            "listas/lista3/ex/salvar",
            "layouts/footer"
        ], $dados);
    }
// ========================================================= 
    public function lista4(){
        $dados = [
            "titulo_aba" => "Lista 4 PHP",
        ];

        Functions::Layout([
            "layouts/header",
            "layouts/navbar",
            "listas/lista4/lista4",
            "layouts/footer_lista4",
        ], $dados);
    }
// =========================================================
    public function app4_1(){
        $dados = [
            "titulo_aba" => "Consulta",
        ];

        Functions::Layout([
            "layouts/header",
            "layouts/navbar",
            "listas/lista4/ex/app1",
            "layouts/footer_lista4",
        ], $dados);
    }
// =========================================================
    public function app4_2(){
        $dados = [
            "titulo_aba" => "Inserir dados",
        ];

        Functions::Layout([
            "layouts/header",
            "layouts/navbar",
            "listas/lista4/ex/app2",
            "layouts/footer_lista4",
        ], $dados);
    }
// ========================================================= 
    public function listaFinal(){
        $dados = [
            "titulo_aba" => "Lista Final PHP",
        ];

        Functions::Layout([
            "layouts/header",
            "layouts/navbar",
            "listas/listaFinal/listaFinal",
            "layouts/footer"
        ], $dados);
    }

}