<?php

    require_once("config.php");

    /*
    $sql = new Sql();
    $usuarios = $sql->select("SELECT * FROM tb_usuarios");
    echo json_encode($usuarios); 
    */

    //Carrega um usuário
    /*
    $root = new Usuario();
    $root->loadbyId(3);
    echo $root; 
    */

    //Carrega uma lista de usuários
    // $lista = Usuario::getList();
    

    // Carrega uma lista de usuaários buscando pelo login
    /*
    $search = Usuario::search("ca");
    echo json_encode($search ); 
    */

    //Carrega um usuário usando login e senha
    /*
    $usuario = new Usuario();
    $usuario->login("joão", "1122"); 
    echo $usuario;
    */

    // Criando um novo usuário
    /* 
    $aluno = new Usuario("brendo","1234");

    $aluno->insert();
    
    echo $aluno;    
    */

    //Alterar usuário 
    /*
    $usuario = new Usuario();

    $usuario->loadById(14);

    $usuario->update("professor","!@#$%¨&*(");

    echo $usuario;
    */

    $usuario = new Usuario();

    $usuario->loadById(9);

    $usuario->delete();

    echo $usuario;
     
?>