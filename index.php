<html>
    <head>
        <title>
            Tabela de notas
        </title>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
    </head>
    <body>
        <table>
            <!--tabela 1-->
            <tr>
                <td> Aluno </td>
                <td> Nota 1 </td>
                <td> Nota 2 </td>
                <td> Nota 3 </td>
                <td> </td>
            </tr>
            <!--tabela 2-->
            <tr>
                <td> Bianca </td>
                <td> 4 </td>
                <td> 3 </td> 
                <td> 2 </td>
                <td> </td>
            </tr>
            <tr>
               <td> Yan Carlos </td>
                <td> 1 </td>
                <td> 2 </td> 
                <td> 2 </td> 
                <td> </td>
            </tr>
            <tr>
                <td> Yan Coutinho </td>
                 <td> 0</td>
                 <td> 1</td> 
                 <td> 3</td>
                 <td> </td>
            </tr>
            <tr>
                <td> Beatriz </td>
                 <td> 5 </td>
                 <td> 2 </td> 
                 <td> 2 </td>
                 <td> </td>
            </tr>
            <tr>
                <td> Kevin Peters </td>
                 <td> 0 </td>
                 <td> 5 </td> 
                 <td> 4 </td>
                 <td> </td>
            </tr>
            <tr>
                <td> Kevin Rodrigues </td>
                 <td> 3 </td>
                 <td> 3 </td> 
                 <td> 3 </td>
                 <td> </td>
            </tr>
        </table>
        <br>
        <form method="post">
            <label class="form-label">Nome </label>
            <input type="text" id="nome" name="nomeAluno">
            <p>
            <label class="form-label">Nota 1 </label>
            <input type="text" id="nota1" name="nota1">
            <p>
            <label class="form-label">Nota 2 </label>
            <input type="text" id="nota2" name="nota2">
            <p>        
            <label class="form-label">Nota 3 </label>
            <input type="text"  id="nota3" name="nota3">
            <p>
            <button class="btnInserir"> Inserir Aluno </button>
        </form>
        <script type="text/javascript" src="js/calcularMedia.js" > </script>
        <script type="text/javascript" src="js/inserirAluno.js" > </script>
    </body>
</html>
