<?php
/*
Autor: Mateus Pereira Damasceno
*/
session_start();
/*
O arquivo index serve apenas para inicializar.
*/

// Carrega o config, arquivo com apenas constantes
require_once("../config.php");

// Carrega o router, que direciona para as páginas
require_once("../vendor/autoload.php");

// carrega o sistema de rotas
require_once("../core/router.php");