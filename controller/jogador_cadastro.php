<?php

require_once 'config.php';

class JogadorCadastro extends Config {

    public function __construct(){
        parent::__construct();
        $this->smarty->display('../view/jogador_cadastro.tpl');
    }

}

new JogadorCadastro();