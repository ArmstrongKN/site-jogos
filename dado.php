<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Vamos jogar dados</title>
        
        <link rel="stylesheet" href="estilo.css">
        
    </head>
    <body>
    
    
        <?php
            $dado1 = 0;
            $dado2 = 0;
            $resultado = "- -";

            if(isset($_POST["geranum"])){
                $dado1 = rand(1, 6);
                $dado2 = rand(1, 6);
                if($dado1 == $dado2){
                  $resultado = "Empate";
                }elseif($dado1 > $dado2){
                  $resultado = "Jogador ganhou ";   
                }else{
                    $resultado = "Computador ganhou";
                }
            }
        ?>
        <h1>Vamos jogar dados</h1>
        <div class="global">
            <h1>A sorte está lançada</h1>
            <img src="dados1.png" alt="dados" width="200" height="130">
            <form method="POST">
                <input type="submit" name="geranum" value="Jogar os dados">
            </form>
            <div class="dupla">
                <div class="twice">
                    <header>
                        <h1>Jogador</h1>
                    </header>
                    <p><?php echo $dado1;?>
                  </p>
                </div>
                <h1>OU</h1>
                <div class="twice">
                    <header>
                        <h1>Computador</h1>
                    </header>
                    <p><?php echo $dado2;?></p>
                </div>
            </div>
            <div class="resultado">
                <p>Resultado: <?php echo $resultado;?></p>
            </div>
        </div>
    </body>
</html>