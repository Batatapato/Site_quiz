<?php
include("cabecalho.php");
?>

<form action="Verifica_criar_perguntas.php" method="POST">

    <input type="text" placeholder="Pergunta" name="pergunta" required>
    <input type = "text" placeholder="Resposta " name="Resposta" required>
    <input type = "radio" name="pontos_resposta">
    <label for="1">&#128531 </label> 
    <input type = "radio" name="pontos_resposta">
    <label for="2">&#128517</label> 
    <input type = "radio" name="pontos_resposta">
    <label for="3">&#128512 </label> 
    <input type = "radio" name="pontos_resposta">
    <label for="4">&#128525 </label> 

    <script>
function adicionarResultado() {
    const container = document.getElementById('resultadosContainer');
    
    const novoResultado = document.createElement('div');
    novoResultado.classList.add('resultado');
    novoResultado.innerHTML = `
        <input type="text" placeholder="Título do seu Resultado" name="Titulo_resultado[]" required>
        <input type="text" placeholder="Descrição do seu resultado" name="Descricao_resultado[]" required>
        <input type="file" name="imagem[]" accept="image/*" />
        <hr>
    `;
    
    container.appendChild(novoResultado);
}
</script>

<?php
include("rodape.php");
?>