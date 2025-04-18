<?php
include("conexao.php");


$vcod = $_POST["codusuario"];

$sql = "delete from usuarios where codusuario = '{$vcod}'";

if(mysqli_query($conexao, $sql)){

    header("Location: principal.php");
    die();
}else{

header("Location: Criar_conta.php");
}

?>