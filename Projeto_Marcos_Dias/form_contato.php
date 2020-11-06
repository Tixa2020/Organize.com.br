<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<title>Organize.com.br</title>
		<link rel="stylesheet" href="style.css">

	<head>
	<body>
	<div id="login">
	<form action="salva_mensagem.php" method="POST">
			<h1>Cadastro</h1>
			<fieldset>
				
					<div class="campo">
						Marca: <input type="text" name="marca" placeholder="Marca" required></br></br>
					</div>
					<div class="campo">
						Modelo: <input type="text" name="modelo" placeholder="Modelo" required></br></br>
					</div>
				
				<div class="campo">
					ano: <input type="text" name="ano" placeholder="ano" required></br></br>
				</div>
				<div class="campo">
					memoria: <input type="text" name="memoria" placeholder="memoria" required></br></br>
				</div>
				<div class="campo">
					nacionalidade: <input type="text" name="nacionalidade" placeholder="nacionalidade" required></br></br>
				</div>
			
				<input type="submit" value="enviar" hrfe="form_contato.php">
			</fieldset>
		</form>
	</div>
		<p>
			<b>Lista dos aparelhos</b>
			
		</p>
		<?php
		
		include("conexao.php");
			$consulta = $conexao->prepare(" SELECT * FROM marca");
			$consulta->execute();
			$marca = $consulta->fetchAll(PDO::FETCH_OBJ);
		
		   
	

			if(count($marca) < 1) {
               echo "<p>Nenhum aparelho cadastrado.</p>";
           }else {
               echo "<table border>
               <thead>
               <th>Marcas</th>
               
               </thead>
               <tbody>";

            foreach($marca as $marca) {
				echo "<tr> 
				<th>{$marca->marca}</th>
                </tr>";
			}
		}
		include("conexao.php");
			$consulta = $conexao->prepare(" SELECT * FROM modelo");
			$consulta->execute();
			$modelo = $consulta->fetchAll(PDO::FETCH_OBJ);
		
			if(count($modelo) < 1) {
               echo "<p>Nenhum aparelho cadastrado.</p>";
           }else {
               echo "<table border>
               <thead>
               <th>Modelos</th>
               </thead>
               <tbody>";

            foreach($modelo as $modelo) {
				echo "<tr> 
				<th>{$modelo->modelo}</th>
                </tr>";
			}
		}

		include("conexao.php");
			$consulta = $conexao->prepare(" SELECT * FROM modelo");
			$consulta->execute();
			$modelo = $consulta->fetchAll(PDO::FETCH_OBJ);
		
			if(count($modelo) < 1) {
               echo "<p>Nenhum aparelho cadastrado.</p>";
           }else {
               echo "<table border>
               <thead>
               <th>Ano</th>
               </thead>
               <tbody>";

            foreach($modelo as $modelo) {
				echo "<tr> 
				<th>{$modelo->ano}</th>
                </tr>";
			}
		}
		include("conexao.php");
			$consulta = $conexao->prepare(" SELECT * FROM modelo");
			$consulta->execute();
			$modelo = $consulta->fetchAll(PDO::FETCH_OBJ);
		
			if(count($modelo) < 1) {
               echo "<p>Nenhum aparelho cadastrado.</p>";
           }else {
               echo "<table border>
               <thead>
               <th>Memoria</th>
               </thead>
               <tbody>";

            foreach($modelo as $modelo) {
				echo "<tr> 
				<th>{$modelo->memoria}</th>
                </tr>";
			}
		}
		include("conexao.php");
			$consulta = $conexao->prepare(" SELECT * FROM modelo");
			$consulta->execute();
			$modelo = $consulta->fetchAll(PDO::FETCH_OBJ);
		
			if(count($modelo) < 1) {
               echo "<p>Nenhum aparelho cadastrado.</p>";
           }else {
               echo "<table border>
               <thead>
               <th>Nacionalidades</th>
               </thead>
               <tbody>";

            foreach($modelo as $modelo) {
				echo "<tr> 
				<th>{$modelo->nacionalidade}</th>
                </tr>";
			}
		}
?>
	</body>
</html>