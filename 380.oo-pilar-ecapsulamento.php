<?php


    // PRINCÍPIO DO ENCAPSULAMENTO
    // PARTE 1 - aula - https://www.udemy.com/course/web-completo/learn/lecture/10800312#questions

    /**
     *  Encapsulamento consiste em ecapsular um objeto, de tal modo que o objeto esteja seguro.
     *  Isso signfica, que o objeto terá condições de dizer o que dentro dele está disponível para sistema.
     *  
     *  O Encapuslamento é a forma de controlar a visibilidade de atributos e métodos, de acordo com as necessidades de negócio.
     *  Na prática, podemos determinar se um atributo/método é privado ou público ou até mesmo se esse atributo/método pode ser
     *  herdados para suas subclasses. Criando um camada de segurança dos obejtos da aplicação.
     * 
     *  OPERADORES DE VISIBILIDADE ->   public / protected / private
     * 
     *  atributos definidos como protectd ou private não estão acessíveis à aplicação.
     *  entretanto, eles se comportam de maneira diferente na herança
     *
     */


    

    class Pai {

        // atributos
        private $nome = 'Marcus';
        protected $sobrenome = 'Mazza';
        public $humor = 'Feliz';


        public function __get($attr){
            return $this->$attr;
        }
        public function __set($attr, $value){
            $this->$attr = $value;
        }


        // métodos da classe
        /**
         * Métodos privados e publico funcionam de forma semelhante aos atributos.
         * Métodos públicos estão disponíveis para a aplicação e outros objetos
         * Métodos privates/protect estão disponíveis para apenas para o próprio objeto, quando nos referimos à relação entre
         * objeto e aplicação.
         */
        private function executarMania(){
            echo "Assobiar";
        }
        protected function responder(){
            echo "oi";
        }
        public function executarAcao() {
           
            $x = rand(1, 10);
            if($x >=1 && $x <= 8){
                $this->responder();
            }else {
                $this->executarMania();
            }

            // para executar métodos privados/protected também precisamos de um método público que faça a interface entre a aplicação e o objeto
        }

        /**
        *  public function getNome(){
        *    return $this->nome;
        *  }
        *  public function setNome($nome) {
        *       if(strlen($nome) >= 3) {
        *           $this->nome = $nome;
        *           // pode-se criar meios de proteger a mudança de estado do artibuto
        *       }
        *  }
        *        
        *  atributos private ou protected não estão disponíveis para a a aplicação sem uma interface definida
        *  ou seja, métodos públicos que acessam esses atributos.
        *  essa forma de trabalho visa manter a integridade de atributo, visto que a alteração do 
        *  seu estado precisar seguir regra pré-estabelecidas pelo modelo de negócio. Assim sendo, o atributo precisa ser protegido
        *  para que a regra de negocio prevaleça e seja respeitada.   
        */

    }


    $pai = new Pai();
    echo $pai->executarAcao();











?>