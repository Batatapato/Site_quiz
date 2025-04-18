<?php
include('cabecalho.php');
include('conexao.php');

$codusuario = $_POST['codusuario'];

$sql = "select * from usuarios where codusuario = '{$codusuario}'";

$dados = mysqli_query($conexao, $sql );

$tabusuario = mysqli_fetch_assoc($dados);
?>

<form action="altera-usuario.php" method="POST">

<input type="hidden" name="codusuario" value="<?php echo $tabusuario['codusuario'];?>">



<div class='form'>
        <div class='input'>
        <input class="inputs" type="text" placeholder="nome de usuario" name="nomeusuario" value="<?php echo $tabusuario['nomeusuario']; ?>" required>
            
                <input class="inputs" type="email" placeholder="Coloca porra" name="email"  value = "<?php $tabusuario['email'];?>"require>   
                <input class="inputs" type="password" placeholder="Me mata pelo amor de deus" name="senha"  value = "<?php $tabusuario['senha'];?>" require>
</div>
           
    
    <div class='botao'>
    <input class="btnLogar" type="submit" name="btnedit" value="Editar">
</div>
    </form>
</div>

</form>


<?php
include('rodape.php');
?>