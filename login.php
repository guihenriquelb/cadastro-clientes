<?php
$servidor = "localhost";
$usuario = "root";
$pass = "";
$dbname = "cadastroclientes";

$conn = mysqli_connect($servidor, $usuario, $pass, $dbname);


if(isset($_POST['usuario']) && isset ($_POST['senha'])){
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $get = mysqli_query($conn, "SELECT * FROM usuarios WHERE usuario = '$usuario' AND password = '$senha'");
    $num = mysqli_num_rows($get);

    if ($num == 1){
        while($percorrer = mysqli_fetch_array($get)){
            $nivel = $percorrer['niveldeacesso'];
            $id = $percorrer['id'];

            session_start();

            if($nivel == 1){
                $_SESSION['adm'] = $id;
                
            }else{
               $_SESSION['nor'] = $id;
             
            }

            echo '<script type"text/javascript">window.location = "clientes.php"</script>';
        }
    } else{
        
        echo '<script type"text/javascript">alert("Usuário ou senha inválidos. Tente novamente.")</script>';
        echo '<script type"text/javascript">window.location = "index.html"</script>';
    }
}


?>