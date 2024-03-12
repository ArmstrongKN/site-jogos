 <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
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
        <a class="nav-link active" aria-current="page" href="index.php">Página Inicial</a>
        <a class="nav-link" href="Cadastrar.php">Cadastrar</a>
        <a class="nav-link" href="login.php">Login</a>
        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
      </div>
    </div>
  </div>
</nav>
 
 

            <meta charset="UTF-8">

            <meta name="viewport" 
                  content="width=device-width, 
                           initial-scale=1.0">

            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" 
                  rel="stylesheet" 
                  integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" 
                  crossorigin="anonymous">

            <title>Ranking Mundial</title>

            <style>

                .tabela {width: 96%; border-style: groove; margin-left: 2%; }
                
                .categorias { display: flex; background-color: rgb(0, 0, 0); color: rgb(255, 255, 255); justify-content: space-around; }

                .categoria { display: flex; margin: 4%;  }

                .jogador { display: flex; justify-content: space-around; }

                .item { display: flex; }

                @media screen and ( min-width: 980px ) {

                    .tabela { width: 50%;  margin-left: 23%; margin-top: 3%; }

                }

            </style>

        </head>

        <body>

            <h1>Ranking Mundial</h1>

            <div class="tabela">

                <div class="categorias">

                    <div class="categoria">Jogador</div>
                    <div class="categoria">Adivinhe 1-100</div>
                    <div class="categoria">Jo-Ken-Po</div>
                    <div class="categoria">Par ou Ímpar</div>
                    <div class="categoria">Forca</div>
                    <div class="categoria">Total</div>

                </div>

                <div class="jogador">

                    <?php

                        $host = "localhost:3306";
                        $usuario = "root";
                        $senha = "";
                        $bd = "EAtec";
                        $conexao = mysqli_connect($host, $usuario, $senha, $bd);

                        $selectJogadores = mysqli_query($conexao, "select * from player;");
                        $selectPontuacao = mysqli_query($conexao, "select * from pontuacao;");

                        while ( $escreverJogadores = mysqli_fetch_array($selectJogadores) ) {
                            $escreverPontuacao = mysqli_fetch_array($selectPontuacao);

                            $total = $escreverPontuacao['pont_adivinha'] + 
                                     $escreverPontuacao['pont_jokenpo'] + 
                                     $escreverPontuacao['pont_parimpar'] + 
                                     $escreverPontuacao['pont_forca'];

                            echo "<div class='item'>" . $escreverJogadores['nm_play'] . "</div>" . 
                                 "<div class='item'>" . $escreverPontuacao['pont_adivinha'] . "</div>" . 
                                 "<div class='item'>" . $escreverPontuacao['pont_jokenpo'] . "</div>" . 
                                 "<div class='item'>" . $escreverPontuacao['pont_parimpar'] . "</div>" . 
                                 "<div class='item'>" . $escreverPontuacao['pont_forca'] . "</div>" . 
                                 "<div class='item'>" . $total . "</div>";

                        }
 
                        mysqli_close($conexao);

                    ?>

                </div>
            </div>
            
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" 
                    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" 
                    crossorigin="anonymous">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" 
                    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" 
                    crossorigin="anonymous">

            </script>

        </body>

    </html>