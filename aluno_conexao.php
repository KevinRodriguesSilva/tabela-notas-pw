<?php
    require ('./conexao.php');
    require ('./fecharConexao.php');


    $link = abrirConexao();

    $sql = "SELECT * FROM tb_pw_aluno";
    $resultado = mysqli_query($link, $sql) or die("Erro na consulta");

    while($registro = mysqli_fetch_array($resultado)){

        $nomeAluno = $registro['nome'];
        $nota1 = $registro['nota1'];
        $nota2 = $registro['nota2'];
        $nota3 = $registro['nota3'];

        echo 'nome: ' . $nomeAluno . "<br>" . 'nota 1: ' . $nota1 . "<br>" . 'nota 2: ' . $nota2 .
        "<br>" . 'nota 3: ' . $nota3 . "<br>";
        echo "<br>";

    }
    
        fecharConexao($link);
        echo 'ok';

?>