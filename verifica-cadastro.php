<?php

 include("conexao.php");

    $nome_usuario = $_POST['nome'];
    $email=$_POST["email"];
    $senha=$_POST["senha"];

        //criando a consulta
        
        $sql = "insert into usuarios(nomeusuario,senha,email) values('{$nome_usuario}','{$senha}','{$email}') ";
        //retorna a consulta para a variavel login
        if(mysqli_query($conexao, $sql))
            header("Location: index.php");
        else
       header("Location:Criar_conta.php");
        

?>