<?php

require_once 'dbh.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    try {
        $query = "DELETE FROM cliente WHERE id = :id;";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();

        header("Location: ../index.php");

    } catch (PDOException $e) {
        die("Erro ao excluir cliente: " . $e->getMessage());
    }
}