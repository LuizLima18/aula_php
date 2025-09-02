<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Formulário Simples</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <form id="formulario">
			<div>
				<h3>Formulário de Cadastro</h3>
			</div>
      <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" required>
      </div>

      <div class="form-group">
        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" required>
      </div>

      <div class="form-group">
        <label for="telefone">Telefone</label>
        <input type="text" id="telefone" name="telefone" placeholder="(00) 00000-0000" required>
      </div>

      <div class="form-group">
        <label for="endereco">Endereço</label>
        <input type="text" id="endereco" name="endereco">
      </div>

      <div class="form-group">
        <label>Gênero</label>
        <div class="radio-group">
          <label><input type="radio" name="genero" value="Masculino" checked> Masculino</label>
          <label><input type="radio" name="genero" value="Feminino"> Feminino</label>
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
        </tr>
      </thead>
      <tbody>
        <!-- Dados aparecerão aqui -->
      </tbody>
    </table>
  </div>
</body>
</html>
