<!doctype html>
<html lang="en">
  <head>
    <title>Cadastro de Clientes</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <style>
        .teste {
            margin-left: auto;
        }
    </style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body class="bg-secondary">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">Cadastro de Clientes</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="listaclientes.php">Início</a>
      </li>
   
      
    </ul>

    </ul>
    <ul class="navbar-nav teste">
      
    <li class="nav-item">
      <a class="nav-link">Usuário logado: User</a> <!-- Provisório teste, arrumar--> 
      
      </li>
      <li class="nav-item">
        <a class="nav-link" href="sair.php">Sair</a>
      </li>
      
      
    </ul>
  </div>

  <script>

function mascararg(i){
   
   var v = i.value;
   
   if(isNaN(v[v.length-1])){ 
      i.value = v.substring(0, v.length-1);
      return;
   }
   
   i.setAttribute("maxlength", "12");
   if (v.length == 2 || v.length == 6) i.value += ".";
   if (v.length == 10) i.value += "-";

}

function mascaracpf(i){
   
   var v = i.value;
   
   if(isNaN(v[v.length-1])){ 
      i.value = v.substring(0, v.length-1);
      return;
   }
   
   i.setAttribute("maxlength", "14");
   if (v.length == 3 || v.length == 7) i.value += ".";
   if (v.length == 11) i.value += "-";

}

  </script>
</nav>
