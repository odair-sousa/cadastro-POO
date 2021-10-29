<?php

class Conexao{

    public $instant; //oque é isso?

    public function __construct(){

        $user = "root";
        $password = "255248";

        try{
            $conn = new PDO('mysql:host=127.0.0.1;dbname=rpg', $user, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //oque isso faz?
            $this->instant = $conn;
        }catch(PDOException $e){
            echo 'ERROR: ' . $e->getMessage();
        }

    }

}