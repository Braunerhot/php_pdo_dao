<?php

require_once("config.php");

$sql = new Sql();

//$sql->select("INSERT INTO tb_usuarios(deslogin, dessenha) VALUES('Tomas', 'ze123456')");

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);

?>