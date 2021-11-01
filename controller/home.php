<?php

require_once 'config.php';

class Home extends config{

    public function __construct(){
        parent::__construct();

        $this->smarty->display('../view/home.tpl');
    }

}

new Home();