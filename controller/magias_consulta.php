<?php

require_once 'config.php';

class MagiasConsulta extends Config {

    public function __construct(){
        parent::__construct();
        $this->smarty->display('../view/magias_consulta.tpl');
    }

}

new MagiasConsulta();