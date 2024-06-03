<?php
class Carro{
    private $cor;
    private $marca;
    private $modelo;
    private $ligado = false;

    function ligar(){
        $this->ligado = false;
    }

    function desligar(){
        echo "<h1>Carro Desligado!<h1>";
    }

    function get_cor(){
        return $this->cor;
    }

    function set_cor($nova_cor){
        $this->cor=$nova_cor;
    }

    function get_marca(){
        return $this->marca;
    }

    function set_marca($nova_marca){
        $this->marca=$nova_marca;
    }

    function get_modelo(){
        return $this->modelo;
    }

    function set_modelo($novo_modelo){
        $this->modelo=$novo_modelo;
    }
}

$novo_carro = new carro;

$novo_carro->set_cor("prata");
$novo_carro->set_marca("fiat");
$novo_carro->set_modelo("uno");

?>