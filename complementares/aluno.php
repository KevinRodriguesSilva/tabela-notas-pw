<?php    
    
    class Aluno {
        private $nomeAluno;
        private $nota1;
        private $nota2;
        private $nota3;
    }
    //gets e sets
    function setNomeAluno($nomeAluno){
        $this->nomeAluno = $nomeAluno;
    }

    function getNomeAluno(){
        return $this->nomeAluno;
    }

    function setNota1($nota1){
        $this->nota1 = $nota1;
    }

    function getNota1(){
        return $this->nota1;
    }

    function setNota2($nota2){
        $this->nota2 = $nota2;
    }

    function getNota2(){
        return $this->nota2;
    }

    function setNota3($nota3){
        $this->nota3 = $nota3;
    }

    function getNota3(){
        return $this->nota3;
    }

    function __construct($nomeAluno, $nota1, $nota2, $nota3){
        $this->nomeAluno=$nomeAluno;
        $this->nota1=$nota1;
        $this->nota2=$nota2;
        $this->nota3=$nota3;
    }




?>