<?php    
    class Aluno {
       public $nomeAluno;
       public $nota1;
       public $nota2;
       public $nota3;

            function __construct($nomeAluno, $nota1, $nota2, $nota3){
                $this->nomeAluno=$nomeAluno;
                $this->nota1=$nota1;
                $this->nota2=$nota2;
                $this->nota3=$nota3;
            }
    }
?>