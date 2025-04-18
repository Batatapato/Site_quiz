<?php
include("conexao.php");


$vcod = $_POST["codtime"];

$sql = "delete from times where codtime = '{$vcod}'";

if(mysqli_query($conexao, $sql)){

    header("Location: times.php");
    die();
}else{

header("Location: times.php");
}

?>