<?php

use core\classes\Functions; ?>
<div style="background-color: #282744">
    <div class="nav">
        <li class="nav-item">
            <a href="?a=inicio" class="nav-link btn btn-dark mr-1">
                Início
            </a>
        </li>
        <li class="nav-item">
            <a href="?a=listas" class="nav-link btn btn-dark mr-1">
                Questões
            </a>
        </li>
        </li>
        <li class="nav-item">
            <a href="?a=lista1" class="nav-link btn btn-dark mr-1">
                Lista 01
            </a>
        </li>
        <?php if (Functions::isLogged()) : ?>
            <li class="nav-item">
                <a href="?a=lista2" class="nav-link btn btn-dark mr-1">
                    Lista 02
                </a>
            </li>
            <li class="nav-item">
                <a href="?a=lista3" class="nav-link btn btn-dark mr-1">
                    Lista 03
                </a>
            </li>
            <li class="nav-item">
                <a href="?a=lista4" class="nav-link btn btn-dark mr-1">
                    Lista 04
                </a>
            </li>
            <li class="nav-item">
                <a href="?a=listaFinal" class="nav-link btn btn-dark mr-1">
                    Lista Final
                </a>
            </li>
        <?php endif; ?>
    </div>
</div>