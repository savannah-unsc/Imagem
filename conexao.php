<?php

  $servername = "localhost";
  $database = "imagem";
  $username = "root";
  $password = "";

  //criando conexão
  $conn = mysqli_connect($servername,$username, $password, $database);

if(!$conn){
    die("Falha na conexão: ".mysqli_connect_error());
}
?>
