<?php

    // MÉTODOS CONSTRUTOR E MÉTODO DESTRUTOR
    // aula - https://www.udemy.com/course/web-completo/learn/lecture/10581076#overview

    /**
     *  Os métodos __construct() / __destruct() são métodos mágicos, assim sua sixtaxe deve serpre começar com dois underlines.
     *  eles também fazem parte do ciclo de vida de um objeto, ou seja quando um objeto é estanciado, o __construct() é executado para que uma ação seja
     *  tomada na inicialização de um objeto, sendo essa ação disparada automaticamente.
     *  
     *  O __destruct() é chamado automaticamente, quando a instância de um objeto é removida da memória.
     */

    class Pessoa {

        public $nome = null;

        function __construct($nome) {
            echo 'Objeto iniciado';
            $this->nome = $nome;
        }   
        function __destruct() {
            echo 'objeto removido';
        }
        function __get($attr){
            return $this->$attr;
        }

        function correr() {
            return $this->__get('nome').' está correndo.';
        }
    }

    $pessoa = new Pessoa('Marcus Mazza');
    echo '<br>Nome:  '.$pessoa->__get('nome');
    echo '<br>'.$pessoa->correr();

    echo '<br>';
    //unset($pessoa);
?>