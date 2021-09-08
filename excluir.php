<?php
session_start();
include("conexao.php");

$usuario_id = mysqli_real_escape_string($conexao, $_GET['usuario_id']);

$sql = "DELETE * FROM contato WHERE usuario_id = '$usuario_id'";

if($conexao->query($sql) === TRUE) {
	$_SESSION['status_excluir'] = true;
}

$conexao->close();

header('Location: home.php');
exit;
?>