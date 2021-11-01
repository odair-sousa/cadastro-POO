<?php

require_once 'config.php';
require_once '../dao/JogadorDAO.class.php';
require_once '../dao/LoginDAO.class.php';


class Login extends Config{
        
    public function __construct(){
        parent:: __construct();
        
        $this->acao();

    }

    private function acao(){
        $acao = ISSET($_POST['acao']) ? $_POST['acao'] : null;
        switch ($acao){
            case 'entrar':
                $this->verificaLogin();
            break;
            default:
                $this->gerarTemplate();
            break;
        }
    }

    private function verificaLogin(){

        $usuario = ISSET($_POST['usuario']) ? $_POST['usuario'] : '';
        $senha = ISSET($_POST['senha']) ? $_POST['senha'] : '';; //dois ;;?

        $logDAO = new LoginDAO();
        $login = $logDAO->login($usuario, $senha);

        if(COUNT($login) > 0){
            header("Location: home.php");
        }else{
            header("Location: login.php");
        }
    }

    private function gerarTemplate(){
        
        $this->smarty->display('../view/login.tpl');
    }

}

new Login();