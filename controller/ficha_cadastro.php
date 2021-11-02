<?php

require_once 'config.php';

class FichaCadastro extends Config {

    public function __construct(){
        parent::__construct();
        $this->smarty->display('../view/ficha_cadastro.tpl');
    }

}

new FichaCadastro();