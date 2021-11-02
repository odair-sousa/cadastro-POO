<?php

require_once 'config.php';

class FichaConsulta extends Config {

    public function __construct(){
        parent::__construct();
        $this->smarty->display('../view/ficha_consulta.tpl');
    }

}

new FichaConsulta();