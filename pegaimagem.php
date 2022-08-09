<?php

    include("conexao.php");
	$PicNum = $_GET["PicNum"];

	$sql=("SELECT * FROM pessoa WHERE codigo=$PicNum");

	$result=mysqli_query($conn,$sql)  or die ("Erro");

	$row=mysqli_fetch_object($result);
	Header( "Content-type: image/gif");
	echo $row->foto;
?>
