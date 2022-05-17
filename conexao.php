<?php
    function abrirConexao(){
        $host = 'fdb25.awardspace.net';
        $usuario = '3451219_crud';
        $senha = '07200407kR';
        $bd = '3451219_crud';

        $mysql = new mysqli($host, $usuario, $senha, $bd) or die(mysqli_connect_erro());
        return $mysql;
    }
?>