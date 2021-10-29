<?php

    require '../libs/smarty/libs/Smarty.class.php';

    class Config {

        public $smarty;

        public function __construct(){

            $this->smarty = new Smarty;
            $this->smarty->debugging = false;
            $this->smarty->caching = false;
            $this->smarty->cache_lifetime = 0;
        }

    }

    new Config();
    
