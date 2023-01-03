<?php
session_start();

if(isset($_SESSION['nor'])){
} else{
  echo '<script type"text/javascript">window.location = "index.html"</script>';
}
require 'app/db.php';
$sql = 'SELECT * FROM cliente';
$statement = $connection->prepare($sql);
$statement->execute();
$cliente = $statement->fetchAll(PDO::FETCH_OBJ);
 ?>
<?php require 'includes/headerl.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Clientes</h2>
    </div>
    <div class="card-body">
      <table id="lista" class="table table-bordered">
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Email</th>
          <th>CPF</th>
          <th>RG</th>
        
        </tr>
        <?php foreach($cliente as $cadastroclientes): ?>
          <tr>
            <td><?= $cadastroclientes->id; ?></td>
            <td><?= $cadastroclientes->nome; ?></td>
            <td><?= $cadastroclientes->email; ?></td>
            <td><?= $cadastroclientes->cpf; ?></td>
            <td><?= $cadastroclientes->rg; ?></td>
            
          </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
</div>
<?php require 'includes/footer.php'; ?>
