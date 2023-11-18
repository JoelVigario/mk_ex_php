<?php

class Conversor {
    private $vel;
    
    public function __construct($vel) {
        $this->vel = $vel;
    }

    
    public function getVel() {
        return $this->vel;
    }

    public function setVel($vel): void {
        $this->vel = $vel;
    }

    public function converta() {
        $m_h = ($this->vel * 10 ** 3); //converte para metros por hora
        $m_s = $m_h / 60 ** 2; // converte o valor para metros por segundos   
        return number_format($m_s, 2, ",", " ");
    }

}

