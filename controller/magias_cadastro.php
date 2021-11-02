<?php

require_once 'config.php';

class MagiasCadastro extends Config {

    public function __construct(){
        parent::__construct();
        $this->smarty->display('../view/magias_cadastro.tpl');
    }

}

new MagiasCadastro();