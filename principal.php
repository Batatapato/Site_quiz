<?php
include('cabecalho.php')
?>
<script>
    const ta_log = localStorage.getItem('ta_logado');

    if (ta_log != 1) {
        console.log(ta_log);
        window.location.href = "../index.php";
    }
</script>


<h1> Lista de Cadastros</h1>

<table class="table table-striped ">
    <thead>                      
<tr>
<th scope="col">Codigo</th>
<th scope="col">nome</th>
<th scope="col">email</th>
<th scope="col">Editar</th>
<th scope="col">apagar</th>


</tr>

</thead>
<tbody class="table-group-divider">
    <?php
    include("conexao.php");
    
    $sql = "select * from usuarios";

    $resp = mysqli_query($conexao, $sql);
    
    while( $linha=mysqli_fetch_assoc($resp)){


    
    ?>
<tr>
    <th scope="row">
            <?php
                echo $linha["codusuario"];
            ?>

    </th>
    <td>
    <?php
                echo $linha["nomeusuario"];
            ?>
    </td>
    <td>
    <?php
                echo $linha["email"];
            ?>
    </td>
    <td>
        <form action="remover-cadastro.php" method="POST">
          <input type="hidden" name="codusuario" value="<?php  echo $linha['codusuario'] ?>">

            <button >
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="red" class="bi bi-trash3-fill" viewBox="0 0 16 16">
  <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/>
</svg>
    </button>

        </form>
    </td>
    <td>
    <form action="editar-cadastro.php" method="POST">
          <input type="hidden" name="codusuario" value="<?php  echo $linha['codusuario'] ?>">

            <button >
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="green" class="bi bi-pen-fill" viewBox="0 0 16 16">
  <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001"/>
</svg>
    </button>
    </td>



    </tr>

    <?php
    }
    ?>
</table>


<?php
include('rodape.php')
?>