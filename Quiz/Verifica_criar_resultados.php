<?php
include('conexao.php');

// Corrigido: agora pega via POST
if (!isset($_POST['codquiz_fk'])) {
    die("Erro: codquiz_fk não recebido.");
}

$codquiz_fk = $_POST['codquiz_fk'];

// Verifica se os campos existem
if (isset($_POST['Titulo_resultado'], $_POST['Descricao_resultado'])) {
    
    $titulos = $_POST['Titulo_resultado'];
    $descricoes = $_POST['Descricao_resultado'];
    $temArquivos = isset($_FILES['imagem']) && is_array($_FILES['imagem']['name']);

    for ($i = 0; $i < count($titulos); $i++) {
        $titulo = $titulos[$i];
        $descricao = $descricoes[$i];
        $fotoBinaria = null;

        if ($temArquivos && $_FILES['imagem']['error'][$i] === UPLOAD_ERR_OK) {
            $fotoTmp = $_FILES['imagem']['tmp_name'][$i];
            $fotoBinaria = file_get_contents($fotoTmp);
        }

        $stmt = $conexao->prepare("INSERT INTO resultados (titulo_resultado, descricao_resultado, foto_resultado, codquiz_fk) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("sssi", $titulo, $descricao, $fotoBinaria, $codquiz_fk);
        $stmt->execute();
    }

    echo "Resultados inseridos com sucesso!";
    header("Location: Criar_perguntas.php?codquiz=" . $codquiz_fk);

} else {
    echo "Erro: Campos obrigatórios não foram preenchidos.";
}
?>
