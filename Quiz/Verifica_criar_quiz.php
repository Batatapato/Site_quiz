<?php

include("conexao.php");

$nomequiz = $_POST['nomequiz'];
$tipoquiz = $_POST['tipoQuiz'];
$foto_upload = $_FILES['imagem'];

$pasta = 'Uploads/';
$nomeImagem = uniqid() . "_" . $nomequiz . $foto_upload['name'];
$caminho_da_imagem = $pasta . $nomeImagem;
move_uploaded_file($foto_upload['tmp_name'], $caminho_da_imagem);

$sql = "Insert into quizes(nomequiz,tipoquiz,foto_quiz) values('$nomequiz', '$tipoquiz', '$caminho_da_imagem')";

if (mysqli_query($conexao, $sql)) {
    $codquiz = mysqli_insert_id($conexao);
    header("Location: Criar_resultados.php?codquiz=" . $codquiz);
} else {
    header("Location:index.php");
}



?>