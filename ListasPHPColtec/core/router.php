<?php

/*
Basicamente uma lista de caminhos construídos a partir de uma query string (.../?a=texto).
Segue a regra controller@function, onde é chamada uma função de uma classe controller.
*/

// Array de rotas - controller@function
$rotas = [
    /* Rotas principais */
    "inicio" => "Main@index",
    "listas" => "Main@listas",
    "area_do_usuario" => "Main@areaUsuario",

    /* Rotas dos exercícios */
    "lista1" => "Listas@lista1",
    "lista2" => "Listas@lista2",
    "lista3" => "Listas@lista3",
    "lista4" => "Listas@lista4",
    "listaFinal" => "Listas@listaFinal",
    
    /* Rotas da lista 2 */
    "calculadora" => "Listas@app2_1",
    "calculadora_cientifica" => "Listas@app2_2",

    /* Rotas da lista 3 */
    "matrizes" => "Listas@app3",
    "matrizes_recuperar" => "Listas@app3_1",
    "salvar" => "Listas@app_3_salvar",

    /* Rotas da lista 4 */
    "consulta_cidade" => "Listas@app4_1",
    "insere_cidade" => "Listas@app4_2",
    "inserido" => "CidadeEstado@registrar",
    "query" => "CidadeEstado@exibir",

    /* Rotas do Trabalho final */

    /* Rotas relacionadas a cadastro/login */
    "cadastro" => "Main@cadastro",
    "cadastrado" => "Main@cadastrado",
    "login" => "Main@login",
    "login_submit" => "Main@login_submit",
    "logout" => "Main@logout",
    "recadastrado" => "Main@cadastroAlterado",
];

// Rota default
$acao = "inicio";

// Verifica se existe uma rota/ação na query string/url
if(isset($_GET["a"])){

    // Verifica se a ação existe. Se não, redireciona para o início
    if(!key_exists($_GET["a"], $rotas)){
        $acao = "inicio";
    } else {
        $acao = $_GET["a"];
    }
}

// Prepara a rota
$partes = explode("@",$rotas[$acao]);
$classe = "core\\controllers\\" . $partes[0];
$metodo = $partes[1];

//Executa a rota. Consulte os controllers para mais informações
$ctrl = new $classe();
$ctrl->$metodo();
