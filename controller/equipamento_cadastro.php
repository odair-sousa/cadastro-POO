<?php

require_once 'config.php';

class EquipamentoCadastro extends Config {

    public function __construct(){
        parent::__construct();
        $this->smarty->display('../view/equipamento_cadastro.tpl');
    }

}

new EquipamentoCadastro();
