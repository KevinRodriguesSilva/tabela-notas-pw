<?php
    require './conexao.php';

    $conexao = abrirConexao();

    $idAluno = $_POST['id'];
    $nomeAluno = $_POST['nome'];
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];


    $sql = "INSERT INTO tb_aluno_pw values ($nome, $nota1, $nota2, $nota3)";
    mysqli_query($conexao, $sql) or die ("Erro ao tentar deletar");

    fecharConexao();

?>