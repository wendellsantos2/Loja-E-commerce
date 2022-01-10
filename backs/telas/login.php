<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Projeto Objeto</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="estilo.css">


</head>
<body>
      
    <div class="container">
      <header>
      <h1>Painel de Controle</h1>
    </header>


    <div class="row">
      <div class="col">
       
      </div>
      <div class="col">
        <fieldset>
          <legend>Login Administrador</legend>
            <div class="formulario">
              <form action="#" method="POST">
                <div class="mb-3">
                  <label for="login" class="form-label">Login</label>
                  <input type="text" class="form-control" id="login" name="login">
                  <div id="emailHelp" class="form-text">Esta área é restrita aos adms.</div>
                </div>
                <div class="mb-3">
                  <label for="senha" class="form-label">Senha</label>
                  <input type="password" class="form-control" id="senha" name="senha">
                </div>
                <button type="submit" class="btn btn-primary" name="logar">Entrar</button>
              </form>
            </div>
        </fieldset>
        <label>Se você não é administrador, clique em <a href="../../index.php">Sair</a></label>
      </div>
      <div class="col">        
      </div>
    </div>
    </div>
    <?php
      if(isset($_POST['logar'])){
        session_start();

        include '../../php/conexao.php';

        $usuario = $_POST['login'];
        $senha = $_POST['senha'];

        $sql = mysqli_query( $conn, "select * from usuarioadmin where   loginUsuario = '$usuario' and senha = '$senha'" );

        if ( $linha = mysqli_fetch_array( $sql ) ) {
            $usu = $linha['loginUsuario'];
            $sen = $linha['senha'];
            $nomeFunc = $linha['nomeUsuario'];

            $_SESSION['loginUsuario'] = $usu;
            $_SESSION['senha'] = $sen;
            $_SESSION['nomeUsuario'] = $nomeFunc;

            echo

            "<script>alert('Seja bem vindo $usuario')
                location.href = 'painel.php'</script>";

            } else {
            echo "<script>alert('Erro ao Logar ')
                location.href = 'login.php'</script>";
          }

      }
      
    ?>
    

</body>
</html>