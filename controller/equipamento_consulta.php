<?php

require_once 'config.php';

class EquipamentoConsulta extends Config {

    public function __construct(){
        parent::__construct();
        $this->smarty->display('../view/equipamento_consulta.tpl');
    }

}

new EquipamentoConsulta();