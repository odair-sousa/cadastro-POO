<?php

require_once 'config.php';

class JogadorConsulta extends Config{

    public function __construct(){
        parent::__construct();
            $this->smarty->display('../view/jogadores_consulta.tpl');
    }

}

new JogadorConsulta();