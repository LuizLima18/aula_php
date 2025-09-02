<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nome = $_POST["nome"];
  $email = $_POST["email"];
  $telefone = $_POST["telefone"];
  $endereco = $_POST["endereco"] ?? null;
  $genero = $_POST["genero"];

  try {
    require_once 'dbh.php';

    $query = "INSERT INTO cliente(nome,email,telefone,endereco,genero)
              VALUES (:nome,:email,:telefone,:endereco,:genero);";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":telefone", $telefone);
    $stmt->bindParam(":endereco", $endereco);
    $stmt->bindParam(":genero", $genero);
    $stmt->execute();

    $stmt = null;
    $pdo = null;
    header("Location:../index.php");
    die();
  } catch (PDOException $e) {
    die('Erro ao salvar: ' . $e->getMessage());
  }
}
