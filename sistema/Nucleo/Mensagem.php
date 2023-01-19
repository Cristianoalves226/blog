<?php

namespace sistema\Nucleo;

class Mensagem{
    
    private $texto;
    private $css;
    
    public function getTexto() {
        return $this->texto;
    }

    public function getCss() {
        return $this->css;
    }

    public function __toString() {
        $this->renderizar();
    }
    
    public function renderizar() {
        return $this->texto = $this->filtrar('teste mensagem'); 
    }
    
    private function filtrar($mensagem): string {
        return filter_var($mensagem,FILTER_DEFAULT);
    }


    public function alerta($param) {
        return $param;
    }
    
}