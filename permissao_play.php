<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	  <link rel=”stylesheet” href=”https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css” integrity=”sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB” crossorigin=”anonymous”>
    <title></title>
</head>
<body>
<div style="background-image: url('minecraft.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    width: 100%;
    height: 100%;">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src=Img/EA.jpg width="60" height="35"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="paginainicial.php">Página Inicial</a>    
        <a class="nav-link" href="cadastrar.php">Criar conta</a>
        <a class="nav-link" href="login.php">Conectar</a>
        <a class="nav-link disabled" aria-disabled="true">Onde a diversão começa</a>
      </div>
    </div>
  </div>
</nav>

<?php
	//$login = $_POST['login'];
	//$senha = $_POST['senha'];
	$host  = "localhost:3306";
	$user  = "root";
	$pass  = "";
    $base  = "Jogos";
	$con   = mysqli_connect($host, $user, $pass, $base);
	//$res = mysqli_query($con,"select RA from tb_aluno");
	$res = mysqli_query($con,"select * from player"); 
	/*Executa o comando SQL, no caso para pegar todos os usuarios
	do sistema e retorna o valor da consulta em uma variavel ($res)  */
	echo "<table border=3px><tr><td>  id player   .</td><td>  Nome do Player   .  </td><td> E-mail player   .  </td><td>  Nivel do player  </td></tr>";

	/*Enquanto houver dados na tabela para serem mostrados será executado tudo que esta dentro do while */
	while($escrever=mysqli_fetch_array($res)){
	/*Escreve cada linha da tabela*/
	echo "</td><td>".$escrever['id_play']."</td><td>".$escrever['nm_play']."</td><td>".$escrever['email_play']."</td><td>".$escrever['nivel_play']."</td></tr>";
	}/*Fim do while*/

	echo "</table>"; /*fecha a tabela apos termino de impressão das linhas*/

	echo "</br></br>";

	mysqli_close($con);
?>

 
	<form action="exibe_alteracao.php" method="POST">
		<fieldset>
		<table>
		<tr>
		<td> Digite o id do player: </td>
		<td><input size="15" name="id_play"></td>
		</tr>	
		<tr>
		<td> Digite o nivel player: </td>
		<td><input size="15" name="nivel_play"></td>
		</tr>
		<tr>
		<td colspan=2><input type="SUBMIT"  value="Alterar"></td>
		</tr>
		</table>
		</fieldset>
	</form>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src=”https://code.jquery.com/jquery-3.3.1.slim.min.js” integrity=”sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo” crossorigin=”anonymous”></script>
<script src=”https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js” integrity=”sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49″ crossorigin=”anonymous”></script>
<script src=”https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js” integrity=”sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T” crossorigin=”anonymous”></script>
</body>
</html>