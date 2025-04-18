<?php
include("cabecalho.php");
include('conexao.php');

$codusuario = $_POST["codusuario"];
$nomeusuario = $_POST['nomeusuario'];

$sql = "update usuarios set nomeusuario = ('{$nomeusuario}') where codusuario = {$codusuario}";

if(mysqli_query($conexao, $sql)){

header("Location: principal.php");

}

else{

    header("Location: editar-cadastro.php");
}
?>







<?php
include("rodape.php");

?>