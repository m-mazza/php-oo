<?php

    // Getters e Setters
    // aula - https://www.udemy.com/course/web-completo/learn/lecture/10581092#overview

    class Funcionario {
        
        //atributos
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;


        //getters e setters
            // a finalidade de um setter é definir valores aos atributos dos objetos. São métodos do tipo void, ou seja, não retornam valores. A finalidade do método é altearar o estado do atributo.
            // a finaliade de um getter é recuperar os valores dos atributos. São métodos de que necessitam de um retorno.
        function setNome($nome){
            $this->nome = $nome;
        }
        function setNumFilhos($numFilhos){
            $this->numFilhos = $numFilhos;
        }
        function setTelefone($telefone){
            $this->telefone = $telefone;
        }

        function getNome(){
            return $this->nome;
        }        
        function getNumFilhos(){
            return $this->numFilhos;
        }
        function getTelefone(){
            return $this->telefone;
        }

        //métodos
        function resumirCadFunc() {
            return "$this->nome tem $this->numFilhos filho(s). Seu número de telefone é $this->telefone.";
        }
        function modificarNumFilhos($numFilhos){
            $this->numFilhos = $numFilhos;
        }

    }

    $x = new Funcionario();
    $x->setNome('Darth Vader');
    $x->setNumFilhos(2);
    $x->setTelefone('(21) 99124-8815');
    echo $x->getNome().' tem '. $x->getNumFilhos().' filho(s). Seu número de telefone é: '.$x->getTelefone();

    echo '<hr>';
    
    $y = new Funcionario();
    $y->setNome('Luke Skywalker');
    $y->setNumFilhos(3);
    $y->setTelefone('(11) 99891-4121');
    echo $y->getNome().' tem '. $y->getNumFilhos().' filho(s). Seu número de telefone é: '.$y->getTelefone();

?>