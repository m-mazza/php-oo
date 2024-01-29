<?php
    
    // Chamando métodos internamente
    // aula - https://www.udemy.com/course/web-completo/learn/lecture/10635770#overview

    class Funcionario {

        // atributos;
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;
        public $cargo = null;
        public $salario = null;

        // getters/settes mágicos
        function __set($attr, $value){
            $this->$attr = $value;
        }
        function __get($attr) {
            return $this->$attr;
        }

        // métodos
        function resumoCadFunc(){
            return $this->__get('nome').' possui '.$this->__get('numFilhos').' filho(s).<br>
            Seu cargo é: '.$this->__get('cargo').'<br>
            Seu salário é: '.$this->__get('salario').' créditos do Império';
        }
        function modificarNumFilhos($numFilhos) {
            $this->numFilhos = $numFilhos;
        }
    }

    $x = new Funcionario();
    $x->__set('nome', 'Han Solo');
    $x->__set('numFilhos', 2);
    $x->__set('telefone', '(13) 3622-1519');
    $x->__set('cargo', 'Pirata Espacial');
    $x->__set('salario', 500.00);
    echo $x->resumoCadFunc();
?>