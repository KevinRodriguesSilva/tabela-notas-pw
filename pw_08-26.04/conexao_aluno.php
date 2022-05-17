<?php
    require ('./conexao.php')

    $link = abrirConexao();

    $sql = "SELECT * FROM tb_pw_aluno";
    $resultado = mysqli_query($link, $sql) or die("Erro na consulta");

    while($registro = mysqli_fetch_array($resultado)){

        $nomeAluno = $registro['nomeAluno'];
        $nota1 = $registro['nota1'];
        $nota2 = $registro['nota2'];
        $nota3 = $registro['nota3'];
    }
        
?>