<meta charset="utf-8"> 
<?php
 
    require("vconect.php");
 
    
	$host  = "localhost:3306";
	$user  = "root";
	$pass  = "";
    $base  = "Jogos";
	$con   = mysqli_connect($host, $user, $pass, $base);

	if ( isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha']) ){

		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$senha = $_POST['senha'];
		
		$res = mysqli_query($con,"INSERT INTO player(nm_play, email_play, senha_play, nivel_play) VALUES('$nome', '$email', '$senha', 1)"); 
		echo ("Cadastro realizada com sucesso!");
		
		$res2 = mysqli_query($con,"SELECT * FROM player");
		echo "<table border=3px><tr><td>Nome do Usuário</td><td>Email</td><td>Senha</td></tr>";

		while($escrever=mysqli_fetch_array($res2)){

		/*Escreve cada linha da tabela */
			echo "<tr> <td>" . $escrever['nm_play'] . "</td><td>" . $escrever['email_play'] . "</td><td>" . $escrever['senha_play'] .  "</td> </tr>";

		}

		echo "</br></br>";

	}
	else { echo "Falta-lhe preencher um dos dados no cadastro"; }
	
	mysqli_close($con);
?>




	  