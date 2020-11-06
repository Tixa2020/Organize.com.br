<?php
//conexão

  try {
    $conexao = new PDO("mysql:host=127.0.0.1;dbname=cadastro_informa", "root", "");

    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexao->exec('set names utf8');

  } catch(PDOException $e) {
    die('Erro de conexão com o MySQL: ' . $e->getMessage());
  }


?>