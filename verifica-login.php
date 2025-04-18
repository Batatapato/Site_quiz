<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logando garoto</title>
</head>
<body>
<?php
    include("conexao.php");

    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $ta_logado = false;

    $login_success = false;

    // Criando a consulta
    $sql = "SELECT count(*) as total FROM usuarios WHERE email='{$email}' AND senha = '{$senha}'";
    $login = mysqli_query($conexao, $sql);
    $linha = mysqli_fetch_assoc($login);

    if ($linha['total'] == 1) {
        // Gerar código JavaScript para salvar no localStorage
        $ta_logado = true;
        echo "<script>
            localStorage.setItem('email', '$email');
            localStorage.setItem('senha', '$senha');
            localStorage.setItem('ta_logado','$ta_logado');
            alert('Salvo: ' + '$ta_logado');
            window.location.href = 'principal.php'; // redireciona após salvar
        </script>";
 
    } else {
        // Caso o login falhe, redireciona sem salvar nada
        header("Location: index.php");
        exit(); // Para garantir que o redirecionamento aconteça corretamente
    }
?>


</body>
</html>
