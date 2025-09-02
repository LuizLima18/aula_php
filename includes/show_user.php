<?php

try {
  require_once 'dbh.php';

  $query = "SELECT * FROM cliente;";
  $stmt = $pdo->prepare($query);
  $stmt->execute();
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

  if (count($result) > 0) {
    foreach ($result as $row) {
      //<?= row['id'] is the same as 
      //<?php echo row['id']
?>
      <tr>
        <td><?= htmlspecialchars($row['id']) ?></td>
        <td><?= htmlspecialchars($row['nome']) ?></td>
        <td><?= htmlspecialchars($row['email']) ?></td>
        <td><?= htmlspecialchars($row['telefone']) ?></td>
        <td><?= htmlspecialchars($row['endereco']) ?></td>
        <td><?= htmlspecialchars($row['genero']) ?></td>
      </tr>

<?php
    }
  }
} catch (PDOException $e) {
  die('Erro ao exibir clientes: ' . $e->getMessage());
}
