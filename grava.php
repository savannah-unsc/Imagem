<?php

include("conexao.php");

$imagem = $_FILES["imagem"];
$nome=$_POST["nome"];

if($imagem != NULL) {
	$nomeFinal = time().'.jpg';
	if (move_uploaded_file($imagem['tmp_name'], $nomeFinal)) {
		$tamanhoImg = filesize($nomeFinal);

		$mysqlImg = addslashes(fread(fopen($nomeFinal, "r"), $tamanhoImg));
		
		$sql=("INSERT INTO pessoa (foto,nome) VALUES ('$mysqlImg','$nome')");
		
		$query = mysqli_query($conn, $sql) or die ("Erro");

		if (mysqli_affected_rows($conn)){
			echo " <script> window.alert('imagem cadastrada com sucesso') </script>";
			echo " <script> location.href='index.html' </script>";
		}
		else{
			echo " <script> window.alert('Erro ao cadastrar imagem') </script>";
		}

		unlink($nomeFinal);

		//header("location:exibe.php");
	}
}

?>