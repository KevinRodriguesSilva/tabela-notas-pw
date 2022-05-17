<?php
   require "./conexao.php";

   $id = $_POST['nome'];

   $sql = "DELETE from tb_pw_aluno WHERE nome = $id";

   $conexao = abrirConexao();

   mysqli_query($conexao, $sql) or die ("Erro ao deletar");

   fecharConexao();
?>