<?php include("cabecalho.php");
$codquiz_fk = $_GET['codquiz'];
 ?>

<form action="Verifica_criar_resultados.php" method="POST" enctype="multipart/form-data" id="formResultados">

<input type="hidden" name="codquiz_fk" value="<?php echo $codquiz_fk; ?>">

    <div id="resultadosContainer">
        <div class="resultado">
            <input type="text" placeholder="Título do seu Resultado" name="Titulo_resultado[]" required>
            <input type="text" placeholder="Descrição do seu resultado" name="Descricao_resultado[]" required>
            <input type="file" name="imagem[]" accept="image/*" />
            <hr>
        </div>
    </div>

    <button type="button" onclick="adicionarResultado()">+ Adicionar outro resultado</button>
    <br><br>
    <input type="submit" name="Ir" value="Criar">
</form>

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

<?php include("rodape.php"); ?>
