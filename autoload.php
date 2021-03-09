<?php

spl_autoload_register(
    function (string $nameSpaceClasse): void {
        $caminho = "/src";
        $diretorioClasse = str_replace("\\", DIRECTORY_SEPARATOR, $nameSpaceClasse);
        @include_once getcwd() . $caminho . DIRECTORY_SEPARATOR . "{$diretorioClasse}.php";
    }
);
