<?php
session_start();
include("conexao.php");

$mci = mysqli_real_escape_string($conexao, $_GET['mci']);
$nome = mysqli_real_escape_string($conexao, trim($_GET['nome']));
$email = mysqli_real_escape_string($conexao, trim($_GET['email']));
$telefone = mysqli_real_escape_string($conexao, trim($_GET['telefone']));

$sql = "SELECT * FROM contato";

if($conexao->query($sql) === TRUE) {
	$_SESSION['status_consultar'] = true;
}

$conexao->close();

header('Location: home.php');
exit;
?>