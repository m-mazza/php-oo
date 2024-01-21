<?php

    // Getters e Setters Mágicos (overloading de atributos e métodos)
    // aula - https://www.udemy.com/course/web-completo/learn/lecture/10581136#overview

    class Funcionario{
        
        // atributos
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;
        public $cargo = null;
        public $salario = null;

        //getters e setters (overloading / sobrecarga)
        function __set($attr, $value){
            $this->$attr = $value;
        }
        function __get($attr) {
            return $this->$attr;
        }

        // métodos
        function resumoCadFunc(){
            return "$this->nome possui $this->numFilhos filho(s). E seu número de telefone é $this->telefone";
        }
        function modificarNumFilhos($numFilhos){
            $this->numFilhos = $numFilhos;
        }
    }

    $x = new Funcionario();
    $x->__set('nome', 'Han Solo');
    $x->__set('numFilhos', 2);
    $x->__set('telefone', '(13) 3622-1519');
    $x->__set('cargo', 'Pirata Espacial');
    $x->__set('salario', 500.00);
    echo $x->__get('nome').' possui '.$x->__get('numFilhos'). ' filho(s).<br>
    Seu número de telefone é: '.$x->__get('telefone').'<br>
    Seu cargo é: '.$x->__get('cargo').'<br>
    Seu salário é: '.$x->__get('salario').' créditos do Império';
    
    echo '<hr>';

    $y = new Funcionario();
    $y->__set('nome', 'Palpatine');
    $y->__set('numFilhos', 1);
    $y->__set('telefone', '(41) 3226-7753');
    $y->__set('cargo', 'Imperador');
    $y->__set('salario', 100000000.00);
    echo $y->__get('nome').' possui '.$y->__get('numFilhos'). ' filho(s).<br>
    Seu número de telefone é: '.$y->__get('telefone').'<br>
    Seu cargo é: '.$y->__get('cargo').'<br>
    Seu salário é: '.$y->__get('salario').' créditos do Império';

?>