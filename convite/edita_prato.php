<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Editar autor</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <?php
  // Verifica se o código do produto foi passado via GET
  if (isset($_GET['codigo'])) {
    $codigo = $_GET['codigo'];

    // Conexão com o banco de dados
  
    include "conecta_banco.php";
    include "controla_acesso.php";

    // Consulta na tabela de autor
    $sql = "SELECT * FROM autores WHERE codigo='$codigo'";
    $resultado = mysqli_query($conexao, $sql);

    // Verifica se o categoria foi encontrado
    if (mysqli_num_rows($resultado) > 0) {
      $autor = mysqli_fetch_array($resultado);
      ?>
      <div class="pagina">
        <div class="bloco-imag">
          <img class="imag" src="" alt="">
        </div>

        <div class="bloco-form">
          <h2>Edita autor</h2>
          <form action="salva_autor.php" method="post">
            <input type="hidden" name="codigo" value="<?php echo $autor['codigo']; ?>">
            <label for="nome">Descrição:</label>
            <input type="text" name="nome" id="nome" value="<?php echo $autor['nome']; ?>"><br><br>
            <input type="submit" value="Salvar">
          </form>
        </div>
      </div>
      <?php
    } else {
      echo "Categoria não encontrada.";
    }

    // Fechar a conexão com o banco de dados
    mysqli_close($conexao);
  } else {
    echo "Código da categoria não informado.";
  }
  ?>
</body>

</html>