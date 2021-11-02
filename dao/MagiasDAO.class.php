<?php

require_once "Conexao.class.php";

class MagiasDAO extends Conexao{

    public function __construct(){
        parent::__construct();
    }

    public function cadastra(){
        $sql = "INSERT INTO magias () VALUES () ";
    }

    public function atualiza(){
        $sql ="UPDATE magias SET coluna1 = resposta1, WHERE id = : id";
    }

    public function view(){
        $sql ="SELECT * FROM magias";
    }

    public function del(){
        $sql ="DELETE FROM magias WHERE id = : id";
    }
}