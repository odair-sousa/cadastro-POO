<?php

require_once "Conexao.class.php";

class JogadorDAO extends Conexao{

    public function __contruct(){
        parent::__construct();
    }

    public function cads(){
        $sql = "INSERT INTO usuario () VALUES () ";
        //o $sql vem do arquivo ConexaoDAO.class.php
        //sql utilizado p/ cadastrar novo usuário//
    }

    public function atualizar(){

        $sql = "UPDATE usuario SET coluna1 = resposta1, WHERE id = : id";
    
    }

    public function view(){

        $sql = "SELECT * FROM usuario";

    }

    public function del(){
        $sql = "DELETE FROM usuario WHERE id = : id ";
    }

}
