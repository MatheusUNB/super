<?php
session_start();
include("conexao.php");

$mci = mysqli_real_escape_string($conexao, $_POST['mci']);
$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$telefone = mysqli_real_escape_string($conexao, trim($_POST['telefone']));

$sql = "select count(*) as total from contato where contato = '$mci'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
	$_SESSION['usuario_existe'] = true;
	header('Location: cadastro.php');
	exit;
}

$sql = "INSERT INTO contato (mci, nome, email, telefone, acao, data_cadastro) VALUES ('$mci', '$nome', '$email', '$telefone', 'Excluir',  NOW())";

if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: home.php');
exit;
?>