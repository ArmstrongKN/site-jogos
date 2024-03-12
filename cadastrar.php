<!DOCTYPE html>
<html lang="pt-br">
<head>
      <?php
        require("vconect.php");
      ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	  <link rel=”stylesheet” href=”https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css” integrity=”sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB” crossorigin=”anonymous”>
    <title></title>
</head>
<body>
 
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src=Img/EA.jpg width="60" height="35"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">

        <?php /* if ( $usuario != 2 || $usuario != 1 ) { echo "<a class="nav-link active" aria-current="page" href="index.php">Index</a>"
                if ( $usuario == '2') { echo "<a class="nav-link active" aria-current="page" href="paginaInicial.php">Pagina Inicial</a>"*/ ?>
        <a class="nav-link active" aria-current="page" href="paginainicial.php">Página Inicial</a>
        <a class="nav-link" href="cadastrar.php">Criar conta</a>
        <a class="nav-link" href="login.php">Conectar</a>
        <a class="nav-link disabled" aria-disabled="true">Onde a diversão começa</a>
      </div>
    </div>
  </div>
</nav>

<div class = "container">
  <div class = "row">
    <div class ="col-lg-4 offset-lg-4">
      <div class ="card">
        <div class = "card-body">
        
          <form action="valida_cadastro.php" method="POST">
	<fieldset>
	<table>
	   <tr>
	   <td> Nome: </td>
	   <td><input size="15" name="nome"></td>
	  </tr>
	  <tr>
	   <td> E-mail: </td>
	   <td><input size="15" name="email"></td>
	  </tr>
    <tr>
	   <td>Senha: </td>
	   <td><input size="15" name="senha"></td>
	  </tr>
	  <tr>
	   <td colspan=2><input type="SUBMIT"  value="Cadastrar"></td>
	  </tr>
	  </table>
	  </fieldset>
</form>
        </div>
      </div>
    </div>
  </div>
</div>
 
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
 
</body>
</html>

 