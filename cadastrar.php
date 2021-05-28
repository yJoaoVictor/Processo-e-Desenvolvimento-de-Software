<?php
include_once "conexao.php";
$nome = $_POST['usuario'];
$senha = $_POST['senha'];
$query = "INSERT INTO `usuario` (`usuario_id`, `usuario`, `senha`) VALUES (NULL, '".$nome."', '".md5($senha)."') ";
mysqli_query($conexao, $query);
