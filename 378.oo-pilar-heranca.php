<?php

    // PRINCÍPIO DA HERANÇA
    // aula - https://www.udemy.com/course/web-completo/learn/lecture/10800278#questions

    /**
     * A Herança traz dois grandes benefícios 1) Código Reutilizável / 2) Facilidade na manutenção do código
     */

     

    class Veiculo {

        // atributos em comum 
        public $placa = null;
        public $cor = null;

        // método em comum
        function acelerar() {
            echo 'Acelerar';
        }
        function freiar(){
            echo 'Freiar';
        }

        /**
         * A Herança é um refinamento da abstração. Sua idéia consiste na compreensão do que há em comum nos objetos da aplicação, reuní-los e definí-los
         * em outro modelo/classe, centralizando atributos e objetos comuns aos objetos gerando uma outra classe que possa doar/extender esses atributos 
         * e métodos para modelos/classes especialistas.
         * 
         * Os nomes dessas relação de herança varia dependendo da literatura, mas vamos chamar 
         * a classe que DOA atraibutos e métodos como de SUPERCLASSE e as que RECEBEM atraibutos e métodos de SUBCLASSES
         */
    }

    class Carro extends Veiculo {

        // atributos
        public $teto_solar = true;
    
        // contrutor
        function __construct($placa, $cor) {
            $this->placa = $placa;
            $this->cor = $cor;
        }
        
        // métodos da classe
        function abrirTetoSolar() {
            echo 'Abrir teto solar';
        }
        function alterarPosicaoVolante() {
            echo 'Alterar posição volante';
        }

    }

    class Moto extends Veiculo {

        // atributos
        public $contra_peso_guidao = true;

        // contrutor
        function __construct($placa, $cor) {
            $this->placa = $placa;
            $this->cor = $cor;
        }

        // métodos da classe
        function empinar() {
            echo 'Empinar';
        }

    }

    $carro = new Carro('ABC1234', 'azul');
    $moto = new Moto('DEF1122', 'preto');

    echo '<pre>';
    print_r($carro);
    echo '<br><br>';
    print_r($moto);
    echo '</pre>';
    echo '<hr>';
    
    $carro->abrirTetoSolar();
    echo '<br>';
    $carro->acelerar();
    echo '<br>';
    $carro->freiar();
    
    echo '<hr>';

    $moto->empinar();
    echo '<br>';
    $moto->acelerar();
    echo '<br>';
    $moto->freiar();
    









?>