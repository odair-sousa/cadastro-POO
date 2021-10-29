<?php

require_once 'config.php';

class Home extends Config{

    public function __contruct(){
        parent::__construct();

        $this->smarty->display('..view/home.tpl');
    }

}

new Home();