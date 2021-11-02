<?php

require_once "Conexao.class.php";

class EquipamentoDAO extends Conexao{

    public function __construct(){
        parent::__construct();
    }

    public function cadastra(){
        $sql = "INSERT INTO equipamento () VALUES () ";
    }

    public function atualiza(){
        $sql ="UPDATE equipamento SET coluna1 = resposta1, WHERE id = : id";
    }

    public function view(){
        $sql ="SELECT * FROM equipamento";
    }

    public function del(){
        $sql ="DELETE FROM equipamento WHERE id = : id";
    }
}