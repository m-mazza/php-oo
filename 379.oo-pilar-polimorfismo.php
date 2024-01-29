<?php

    // PRINCÍPIO DO POLIMORFISMO
    // aula - https://www.udemy.com/course/web-completo/learn/lecture/10800308#questions

    /**
     *  Polimorfismo é a sobrescrita de métodos. Isso acontece quando o principio da herança é usado.
     *  O objeto filho herda atributos e métodos do objeto pai, mas não necessariamente, o objeto filho precisa se
     *  comportar igual o objeto pai.
     * 
     *  Assim, a correção do comportamento do objeto filho é feito através da sobrescrita de métodos ou POLIMORFISMO.
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
        function trocarMarcha() {
            echo 'Desengatar embreagem com o pé e engatar marcha com a mão';
        }

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
        // sobrescrita do método da superclasse | Polimorfismo
        function trocarMarcha() {
            echo 'Desengatar embreagem com a mão e engatar marcha com a pé';
        }
    }

    class Caminhao extends Veiculo {}

    $carro = new Carro('ABC1234', 'azul');
    $caminhao = new Caminhao('JJO3412', 'verde');
    $moto = new Moto('DEF1122', 'preto');
    $carro->trocarMarcha();
    echo '<br>';
    $moto->trocarMarcha();
    echo '<br>';
    $caminhao->trocarMarcha();
    
?>