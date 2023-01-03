<?php
require 'app/db.php';
$id = $_GET['id'];
$sql = 'SELECT * FROM cliente WHERE id=:id';
$statement = $connection->prepare($sql);
$statement->execute([':id' => $id ]);
$cadastroclientes = $statement->fetch(PDO::FETCH_OBJ);
if (isset ($_POST['nome'])  && isset($_POST['email']) && isset($_POST['cpf']) && isset($_POST['rg'])  ) {
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $cpf = $_POST['cpf'];
  $rg = $_POST['rg'];
  $sql = 'UPDATE cliente SET nome=:nome, email=:email, cpf=:cpf, rg=:rg WHERE id=:id';
  $statement = $connection->prepare($sql);
  if ($statement->execute([':nome' => $nome, ':email' => $email,':cpf' => $cpf,':rg' => $rg, ':id' => $id])) {
    header("Location: /cadastroclientes/clientes.php");
  }



}


 ?>
<?php require 'includes/header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Editar Cliente</h2>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <form method="post">
        <div class="form-group">
          <label for="nome">Nome</label>
          <input value="<?= $cadastroclientes->nome; ?>" type="text" name="nome" id="nome" class="form-control">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" value="<?= $cadastroclientes->email; ?>" name="email" id="email" class="form-control">
        </div>
        <div class="form-group">
          <label for="cpf">CPF</label>
          <input oninput="mascaracpf(this)" type="cpf" value="<?= $cadastroclientes->cpf; ?>"class="form-control" name="cpf" id="cpf" class="form-control">
        </div>
        <div class="form-group">
          <label for="rg">RG</label>
          <input oninput="mascararg(this)" type="rg" value="<?= $cadastroclientes->rg; ?>" class="form-control" name="rg" id="rg" class="form-control">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-info">Editar</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php require 'includes/footer.php'; ?>
