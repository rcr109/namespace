<?php
    namespace Cliente;//informando o diretório para ser usado no autoload

    // o sinal \ abaixo é usado para descer um diretório na hierarquia e buscar a classa Cadastro
    class Cadastro extends \Cadastro {
        public function registraVenda(){
            echo 'Foi  registrada uma venda para o cliente '.$this->getNome();
        }
    }

?>