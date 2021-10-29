<?php

require_once 'Conexao.class.php';

Class LoginDAO extends Conexao{

    public function __construct(){
        parent::__construct();

    }

    public function login($usuario, $senha){

        $sql = "
            SELECT
                *
            FROM
                login
            WHERE
                usuario = :usuario
            AND
                senha = :senha ";
        $prep = $this->instant->prepare($sql);
        $prep->bindValue(':usuario', $usuario );
        $prep->bindValue(':senha', $senha );
        $prep->execute();
        $return = $prep->fetchAll(PDO::FETCH_ASSOC); //oque isso faz?
        return $return;
    }

}