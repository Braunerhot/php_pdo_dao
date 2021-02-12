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
$usuario = new Usuario();
$usuario->login("root", "!@#12309");

echo $usuario;

?>