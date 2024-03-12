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
        <a class="nav-link active" aria-current="page" href="paginaInicial.php">Página Inicial</a>
        <a class="nav-link" href="cadastrar.php">Crie sua conta</a>
        <a class="nav-link" href="login.php">Conectar</a>
        <a class="nav-link disabled" aria-disabled="true">Onde a diversão começa</a>
      </div>
    </div>
  </div>
</nav>
 
<!-- sem permissão -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="adivinhe.jpg" width="50" height="580" class="d-block w-100" alt="jogo de adivinhe o numero">
      <div class="carousel-caption d-none d-md-block">
        <h5>Adivinhe o Número de 1 a 100</h5>
        <p>Adivinhe o número de um a cem em menos tentativas possiveis seja lider do ranking.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="Jo-Ken-Po.jpeg" width="50" height="580" class="d-block w-100" alt="jo-ken-po">
      <div class="carousel-caption d-none d-md-block">
        <h5><b>Jo Ken Pô</b></h5>
        <p><b>Divirta se num jogo emocionante somente os mais fortes sobrevivem. Pedra quebra tesoura, tesoura corta papel e papel embrulha pedra.</b></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="Par_Impar.jpeg" width="50" height="580" class="d-block w-100" alt="par ou impar">
      <div class="carousel-caption d-none d-md-block">
        <h5><b>Par ou Impar</b></h5>
        <p><b>Mostre suas habilidades descobrindo se o número será par ou impar e seja o primeiro do ranking.</b></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="forca.png" width="50" height="580" class="d-block w-100" alt="jogo da forca">
      <div class="carousel-caption d-none d-md-block">
        <h5><b>Jogo da Forca</b></h5>
        <p><b>Pense rápido e descubra qual é a palavra antes que a forca elimine suas chances.</b></p>
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