<?php
    require 'conexao.php';

    $conexao = abrirConexao();

        $nome = $_POST ['nomeAluno'];
        $nota1 = $_POST ['nota1'];
        $nota2 = $_POST ['nota2'];
        $nota3 = $_POST ['nota3'];

        $sql = "INSERT INTO tbl_pw_aluno (nome, nota1, nota2, nota3) values". "($nome,
        $nota1, $nota2, $nota3)";

        if(mysqli_query($conexao, $sql)){
            echo 'ok';
        } else {
            echo 'erro';
        }
        mysqli_close($conexao);
?>

