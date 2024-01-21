<?php

    // 1º Pilar da OO - ABSTRAÇÃO
    // aula - https://www.udemy.com/course/web-completo/learn/lecture/10543246#overview
    /*
      É a forma que entendemos uma entidade no mundo real e a transportamos para às aplicações.
      Para compreensão da ABSTRAÇÃO, também é necessário compreender o que é Entidade, Identidade, Características, Ações
      
      Entidade - é a compreensão que o objeto no mundo real precisa ser representado na aplicação. Essa representação é feita por meio de uma classe (modelo)
      
      Identidade - é a criação/instância de um objeto com base nas classes baseadas na abstração da Entidade que podemos criar o processo de identidade. Ou seja, estabelecer uma referência que vai permitir que acessemos esse objeto no futuro.
      
      Características - São atributos dessa entidade. Variam de acordo com a regra de negócio.
      
      Ações - São métodos/comportamentos da entidade.
    */

    // modelo/classe
    class Funcionario {
        
        //atributos
        public $nome = 'Marcus Mazza';
        public $telefone = '(13) 98107-4396';
        public $numFilhos = 0;

        
        //métodos
        function resumirCadFunc() {
            return "$this->nome tem $this->numFilhos filho(s)";
        }
        function modificarNumFilhos($numFilhos){
            $this->numFilhos = $numFilhos;
        }

    }

    $x = new Funcionario(); //criação de um objeto do tipo Funcionário atribuido à variavel $x.
    echo $x->resumirCadFunc(); //printando o resumo do funcionário 
    echo '<br>';
    $x->modificarNumFilhos(14); //alterando um comportamento
    echo $x->resumirCadFunc(); //imprimindo o novo valor setado

    echo '<hr>';
    $y = new Funcionario();
    echo $y->resumirCadFunc();
    echo '<br>';
    $x->modificarNumFilhos(1);
    echo $x->resumirCadFunc();
?>