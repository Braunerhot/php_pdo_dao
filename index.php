<?php

require_once("config.php");

//Carrega um usuario.
/*$root = new Usuario();
$root->loadbyId(4);
echo $root;*/

// Carrega uma lista de usuarios.
/*$lista = Usuario::getList();
echo json_encode($lista);*/

// Carrega uma lista de usuarios pelo login.
/*$search = Usuario::search("ju");
echo json_encode($search);*/

// Carrega um usuario usando o login e a senha.
/*$usuario = new Usuario();
$usuario->login("root", "!@#12309");
echo $usuario;*/

// Dando um insert no banco de dados atraves de store-procedure.
/*$aluno = new Usuario("Maria Bianca", "snowBoard34");
$aluno->insert();
echo $aluno;*/

$usuario = new Usuario();

$usuario->loadById(2);

$usuario->update("Gonçalves Dias", "lima86");

echo $usuario;

?>