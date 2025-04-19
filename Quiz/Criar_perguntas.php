<?php
include("cabecalho.php");
$codquiz_fk = $_GET['codquiz'];
?>
<?php
if (isset($_GET['Quantidade_perguntas'])) {
    $Quantidade_perguntas = $_GET['Quantidade_perguntas'];
} else {
    $Quantidade_perguntas = 1;
}
?>
<div class="Contador_Perguntas">

</div>

<form action="Verifica_criar_perguntas.php" method="POST">

    <input type="text" placeholder="Pergunta" name="pergunta" required>
    <input type="hidden" name="codquiz_fk" value="<?php echo $codquiz_fk; ?>">
    <input type="hidden" name="Quantidade_perguntas" value="<?php echo $Quantidade_perguntas; ?>">

    <div id="respostasContainer">
        <input type="text" placeholder="Resposta" name="Resposta[]" required>
        <h3>O quanto essa resposta favorece a pergunta</h3>
        <input type="radio" name="pontos_resposta[]">
        <label for="1">&#128531 </label>
        <input type="radio" name="pontos_resposta[]">
        <label for="2">&#128517</label>
        <input type="radio" name="pontos_resposta[]">
        <label for="3">&#128512 </label>
        <input type="radio" name="pontos_resposta[]">
        <label for="4">&#128525 </label>


        <button type="button" onclick="adicionarResposta()">+ Adicionar outra resposta à pergunta</button><br>

    </div>

    <input type="text" placeholder="Resposta " name="Resposta[]" required>
    <h3>O quanto essa resposta favorece a pergunta</h3>
    <input type="radio" name="pontos_resposta[]">
    <label for="1">&#128531 </label>
    <input type="radio" name="pontos_resposta[]">
    <label for="2">&#128517</label>
    <input type="radio" name="pontos_resposta[]">
    <label for="3">&#128512 </label>
    <input type="radio" name="pontos_resposta[]">
    <label for="4">&#128525 </label>
    <input type="submit" name="Ir" value="Criar Pergunta">
</form>
<script>

    const quantidade_perguntas = <?php echo $Quantidade_perguntas; ?>;
    let quantidade_perguntas_agora = 0;

    function adicionar_quantidade_perguntas() {

        quantidade_perguntas_agora += 1;
        const container = document.querySelector('.Contador_Perguntas');
        const botao = document.createElement('button');
        botao.innerText = quantidade_perguntas_agora;
        container.appendChild(botao);

    }

    for (let i = 0; i < quantidade_perguntas; i++) {
        adicionar_quantidade_perguntas();
    }



</script>
<script>
    let quantidade_respostas = 1;
    const respostas_maximo = 6;
    function adicionarResposta() {
        if (quantidade_respostas < respostas_maximo) {
            quantidade_respostas += 1;
            const container = document.getElementById('respostasContainer');

            const novaResposta = document.createElement('div');
            novaResposta.classList.add('resposta');
            novaResposta.innerHTML = `
                <input type="text" placeholder="Resposta" name="Resposta[]" required>
                <input type = "radio" name="pontos_resposta[]">
                <label for="1">&#128531 </label> 
                <input type = "radio" name="pontos_resposta[]">
                <label for="2">&#128517</label> 
                <input type = "radio" name="pontos_resposta[]">
                <label for="3">&#128512 </label> 
                <input type = "radio" name="pontos_resposta[]">
                <label for="4">&#128525 </label> 
                <hr>
            `;

            container.appendChild(novaResposta);
        }
    }
    <?php
    include("rodape.php");
    ?>