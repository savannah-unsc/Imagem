<?php
include("conexao.php");
$nome=$_POST["pesquisa"];

$sql="Select * from pessoa where nome like '%".$nome."%' ";

$result=mysqli_query($conn,$sql)  or die ("Erro");;

while($row=mysqli_fetch_object($result)) {
	echo "<center> <img src='pegaimagem.php?PicNum=$row->codigo' \"> </center>";
}
echo "<br>";
echo " <center> $nome </center>";

?>
