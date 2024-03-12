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
 

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
     <a href="descubracem.php"><img src="adivinhe.jpg" width="50" height="580" class="d-block w-100" alt="jogo de adivinhe o numero"></a>  
      <div class="carousel-caption d-none d-md-block">
      <br><br>
        <p>
            <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                Saiba mais
            </a>
        </p>
        <div class="collapse" id="collapseExample">
         <div class="card card-body">
            <h4><font color="black">Adivinhe o Número de 1 a 100</font></h4>
            <p><font color="black">Adivinhe o número de um a cem em menos tentativas possíveis e seja lider do ranking.</font></p>
         </div>
        </div>
        
      </div>
    </div>
    <div class="carousel-item">
    <a href="jo_ken_po.php"><img src="Jo-Ken-Po.jpeg" width="50" height="580" class="d-block w-100" alt="jo-ken-po"></a>
      <div class="carousel-caption d-none d-md-block">
      <br><br>
      <p>
            <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                Saiba mais
            </a>
        </p>
        <div class="collapse" id="collapseExample">
         <div class="card card-body">
            <h4><font color="black">Jo Ken Pô</font></h4>
            <p><font color="black">Divirta se num jogo emocionante onde somente os mais fortes sobrevivem. Pedra quebra tesoura, tesoura corta papel e papel embrulha pedra.</font></p>
         </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
    <a href="par_impar.php"><img src="Par_Impar.jpeg" width="50" height="580" class="d-block w-100" alt="par ou impar"></a>
      <div class="carousel-caption d-none d-md-block">
      <br><br>
        <p> 
            <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                Saiba mais
            </a>
        </p>
        <div class="collapse" id="collapseExample">
         <div class="card card-body">
            <h4><font color="black">Par ou Impar</font></h4>
            <p><font color="black">Mostre suas habilidades descobrindo se o número será par ou impar e seja o primeiro do ranking.</font></p>
         </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
    <a href="vinteum.php"><img src="forca.png" width="50" height="580" class="d-block w-100" alt="jogo da forca"></a>
      <div class="carousel-caption d-none d-md-block">
      <br><br>
        <p> 
            <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                Saiba mais
            </a>
        </p>
        <div class="collapse" id="collapseExample">
         <div class="card card-body">
            <h4><font color="black">Vinte e um</font></h4>
            <p><font color="black">Vença fazendo 21 ou chegando mais perto que seu oponente .</font></p>
         </div>
        </div>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
 
</body>
</html>