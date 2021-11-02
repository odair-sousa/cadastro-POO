<?php

require_once "Conexao.class.php";

class FichaDAO extends Conexao{

    public function __construct(){
        parent::__construct();
    }

    public function cadastra(){
        $sql = "INSERT INTO ficha () VALUES () ";
    }

    public function atualiza(){
        $sql ="UPDATE ficha SET coluna1 = resposta1, WHERE id = : id";
    }

    public function view(){
        $sql ="SELECT * FROM ficha";
    }

    public function del(){
        $sql ="DELETE FROM ficha WHERE id = : id";
    }
}