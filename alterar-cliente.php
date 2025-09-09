<?php
require_once 'includes/dbh.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    
    try {
        $query = "SELECT * FROM cliente WHERE id = :id;";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

    } catch (PDOException $e) {
        die("Falha ao buscar cliente: " . $e.getMessage());
    }

}



?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <title>Formulário Simples</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="container">
    <form action="includes/update-user.php" method="post" id="formulario">
      <input type="hidden" name="id" value="<?=$id?>">
      <div>
        <h3>Editar Cliente</h3>
      </div>
      <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" value="<?= $row['nome']?>" required>
      </div>

      <div class="form-group">
        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" value="<?= $row['email']?>" required>
      </div>

      <div class="form-group">
        <label for="telefone">Telefone</label>
        <input type="text" id="telefone" name="telefone" placeholder="(00) 00000-0000" maxlength="11" value="<?= $row['telefone']?>" required>
      </div>

      <div class="form-group">
        <label for="endereco">Endereço</label>
        <input type="text" id="endereco" name="endereco" value="<?= $row['endereco']?>">
      </div>

      <div class="form-group">
        <label>Gênero</label>
        <div class="radio-group">
        <label>
          <input type="radio" name="genero" value="Masculino" <?= $row['genero'] === 'Masculino' ? 'checked' : '' ?>>
          Masculino
        </label>
        <label>
          <input type="radio" name="genero" value="Feminino" <?= $row['genero'] === 'Feminino' ? 'checked' : '' ?>>
          Feminino
        </label>
        </div>
      </div>

      <div class="form-group">
        <button type="submit">Adicionar</button>
      </div>
    </form>

    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>E-mail</th>
          <th>Telefone</th>
          <th>Endereço</th>
          <th>Gênero</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tbody>
        <?php require_once 'includes/show_user.php' ?>
      </tbody>
    </table>
  </div>
</body>

</html>