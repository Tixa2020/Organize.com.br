<?php
	var_dump($_POST);
	include_once('conexao.php');
	$marca = $_POST['marca'];
	$modelo = $_POST['modelo'];
	$ano = $_POST['ano'];
	$memoria = $_POST['memoria'];
	$nacionalidade = $_POST['nacionalidade'];
	
	
	
	$consulta = $conexao->prepare("INSERT INTO marca (marca) VALUES (:marca)");
	
	$consulta->bindValue(':marca', $marca);
	$consulta->execute();

	
	$consulta = $conexao->prepare("INSERT INTO modelo (modelo, ano, memoria, nacionalidade) VALUES (:modelo, :ano, :memoria, :nacionalidade)");
	
	$consulta->bindValue(':modelo', $modelo);
	$consulta->bindValue(':ano', $ano);
	$consulta->bindValue(':memoria', $memoria);
	$consulta->bindValue(':nacionalidade', $nacionalidade);
	$consulta->execute();
	
?>

