<?php
include_once("cabecalho_times.php");
?>
<h1> Lista de Times</h1>

<table class="tabelinha">
    <thead>                      
<tr>
<th scope="col">Código</th>
<th scope="col">nome do time</th>
<th scope="col">Mascote</th>
<th scope="col">Estadio</th>
<th scope="col">Escudo</th>
<th scope="col">Adicionar</th>


</tr>

</thead>
<tbody class="table-group-divider">
    <?php
    include("conexao.php");
    
    $sql = "select * from times";

    $resp = mysqli_query($conexao, $sql);
    
    while( $linha=mysqli_fetch_assoc($resp)){


    
    ?>
<tr>
    <th scope="row">
            <?php
                echo $linha["codtime"];
            ?>

    </th>
    <td>
    <?php
                echo $linha["nomeTime"];
            ?>
    </td>
    <td>
    <?php
                echo $linha["mascote"];
            ?>
    </td>
    <td>
    <?php
                echo $linha["estadio"];
            ?>
    </td>
    <div class="sla">
    <td class="imagem"><?php
        echo '<img src="' . $linha["escudo"] . '" />';
   
   
?>
 </div>
    </td>
    <td>
    <form action = "remover.php" method="POST">
        <button>
    <input type="hidden" name="codtime" value="<?php  echo $linha['codtime'] ?>">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="red" class="bi bi-trash3-fill" viewBox="0 0 16 16">
  <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/>
</svg>
    </button>
    </form>

     
    </td>
    </tr>

    <?php
    }
    ?>
</table>

<script>
    const ta_log = localStorage.getItem('ta_logado');

    if (ta_log != 1) {
        console.log(ta_log);
        window.location.href = "../index.php";
    }
</script>

<?php
include_once("../rodape.php");
?>