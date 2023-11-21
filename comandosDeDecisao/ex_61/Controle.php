<?php
    
class Controle {
    private $menu;
    
    public function __construct() {
        $this->menu = "1 - Cliente<br>2 - Fornecedor<br>3 - Encomendas<br>4 - Sair";
    }

    public function getMenu() {
        return $this->menu;
    }


}