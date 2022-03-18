<?php
    class tarefas{

        public $nome;
        public $descricao;
        public $data;


        public function __construct($nome, $descricao, $data){
            
            $this->nome = $nome;
            $this->descricao = $descricao;
            $this->data = $data;
        }
    }
?>