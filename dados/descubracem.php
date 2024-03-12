<!DOCTYPE html>
<html lang="pt-br">
<head>
      <?php
        require("vconect.php");
      ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title></title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src=EA.jpg width="60" height="35"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="jogar.php">Jogos</a>
        <a class="nav-link" href="login.php">Login</a>
        <a class="nav-link" href="cadastrar.php">Cadastrar-se</a>
        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
      </div>
    </div>
  </div>
</nav>
 

<?php 
    //inicia a sessão para guardar o número escolhido pelo PC 
    session_start(); 
    //cria o formulário para interação 
    echo "
        <p>Adivinhe o Número que eu estou pensando entre 1 e 100.</p>
        <form action='#' method='post'>
            <input type='text' name='entrada'>
            <input type='submit' value='Tentar'>
        </form><br/>
    "; 
 
    //se o jogo não foi iniciado ainda, inicia a contagem de tentativas e sorteia o número
    if (!isset($_SESSION['tentativa'])) { 
        $_SESSION['tentativa'] = 1; 
        $_SESSION['numero'] = rand(1,100); 
    }
 
    //se o usuário digitou algo e não foi a letra s 
    if (isset($_POST['entrada']) && $_POST['entrada'] != "s") { 
        //lê a entrada do usuário 
        $entrada = $_POST['entrada'];
        //se o número digitado for o mesmo que o sorteado exibe mensagem para reinício 
        if ($_SESSION['numero'] == $entrada) { 
            echo "
                Parabéns, você acertou! O número era <strong>".$_SESSION['numero']."</strong>.<br/> 
                Você usou <strong>".$_SESSION['tentativa']."</strong> tentativas.<br/>
                Para jogar novamente digite <strong>s</strong>. 
            "; 
        //se o número digitado for menor... } 
        }elseif ($_SESSION['numero'] > $entrada) { 
            echo "O número é maior que ".$entrada."!"; 
            //se o número digitado for maior... 
        } else { 
            echo "O número é menor que ".$entrada."!"; 
        } 
 
        //incrementa a tentativa 
        $_SESSION['tentativa']++; 
    //se o usuário digitou a letra s para começar de novo, destroi a variável de sessão com o número sorteado 
    } elseif (isset($_POST['entrada']) && $_POST['entrada'] == "s") { 
        unset($_SESSION['numero']); session_destroy(); 
    } 

?>

 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
 
</body>
</html>