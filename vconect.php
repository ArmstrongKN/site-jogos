<meta charset="utf-8"> 
<?php

	$host  = "localhost:3306";
	$user  = "root";
	$pass  = "";
    $base  = "Jogos";
	$con   = mysqli_connect($host, $user, $pass, $base);

//echo "<br>";
//echo "Conexao Ok";

mysqli_close($con);
?>