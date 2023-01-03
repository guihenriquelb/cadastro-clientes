<?php
session_start();

if(isset($_SESSION['adm'])){
}else if(isset($_SESSION['nor'])){
  echo '<script type"text/javascript">window.location = "listaclientes.php"</script>';
}else{
  echo '<script type"text/javascript">window.location = "index.html"</script>';
}

require 'app/db.php';
$message = '';
if (isset ($_POST['nome'])  && isset($_POST['email']) && isset($_POST['cpf']) && isset($_POST['rg'])  ) {
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $cpf = $_POST['cpf'];
  $rg = $_POST['rg'];
  $sql = 'INSERT INTO cliente(nome, email, cpf, rg) VALUES(:nome, :email, :cpf, :rg)';
  $statement = $connection->prepare($sql);
  if ($statement->execute([':nome' => $nome, ':email' => $email, ':cpf' => $cpf, ':rg' => $rg])) {
    $message = 'Cliente inserido com sucesso!';
  }



}


 ?>
<?php require 'includes/header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Cadastrar Cliente</h2>
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
          <input type="text" name="nome" id="nome" class="form-control">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" class="form-control">
        </div>
        <div class="form-group">
          <label for="cpf">CPF</label>
          <input oninput="mascaracpf(this)" type="cpf" name="cpf" id="cpf" class="form-control">
        </div>
        <div class="form-group">
          <label for="rg">RG</label>
          <input oninput="mascararg(this)" type="rg" name="rg" id="rg" class="form-control">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-info">Cadastrar</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php require 'includes/footer.php'; ?>
