<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $endereco = $_POST["endereco"] ?? null;
    $genero = $_POST["genero"];
  
    try {
      require_once 'dbh.php';
  
      $query = "UPDATE cliente SET nome = :nome, email = :email, telefone = :telefone, endereco = :endereco, genero = :genero WHERE id = :id";
      $stmt = $pdo->prepare($query);
      $stmt->bindParam(":id", $id);
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