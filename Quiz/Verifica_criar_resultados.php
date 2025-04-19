<?php
include('conexao.php');

$codquiz_fk = $_POST['codquiz_fk'];



if (isset($_POST['Titulo_resultado'], $_POST['Descricao_resultado'])) {

    $titulos = $_POST['Titulo_resultado'];
    $descricoes = $_POST['Descricao_resultado'];
    $FotoArquivos = $_FILES['imagem'];

    $pasta='Uploads/';
   

    for ($i = 0; $i < count($titulos); $i++) {
        $titulo = $titulos[$i];
        $descricao = $descricoes[$i];

        $caminho_foto = null;
        $nomeImagem = uniqid() . "_" . $codquiz_fk . $FotoArquivos['name'][$i];
        $caminho_da_imagem = $pasta . $nomeImagem;  
        move_uploaded_file($FotoArquivos['tmp_name'][$i], $caminho_da_imagem);



        $sql = "INSERT INTO resultados(titulo_resultado, descricao_resultado, foto_resultado, codquiz_fk) VALUES ('$titulo', '$descricao', '$caminho_da_imagem', '$codquiz_fk');";
        mysqli_query($conexao, $sql);
    }

    echo "Resultados inseridos com sucesso!";
    header("Location: Criar_perguntas.php?codquiz=" . $codquiz_fk);

} else {
    echo "Erro: Campos obrigatórios não foram preenchidos.";
}
?>