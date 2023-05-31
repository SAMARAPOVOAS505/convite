<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Convite</title>
</head>
<?php
// Dados de conexão com o banco de dados
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "convite";

// Conexão com o banco de dados
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

// Verifica se houve erro na conexão
if (!$conexao) {
    die("Erro de conexão: " . mysqli_connect_error());
}
?>

<body>
    <div class="pagina">
        <div class="bloco-imag">
            <img class="imag" src="assets/img/fundo.jpg" alt="">
        </div>
        <div class="bloco-form">
            <h2>
                Confirme a sua presença
            </h2>
            <form action="agradecimento.php" method="post">
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome">
                <label for="quantas_pessoas">Quantas pessoas </label>
                <input type="text" id="quantas_pessoas" name="quantas_pessoas">
                <label for="prato">Escolha o prato para levar:</label>
                <select name="prato" id="prato" name="prato">
                <?php
            	  // Consulta na tabela de autores
				  $sql = "SELECT * FROM prato";
				  $resultado = mysqli_query($conexao, $sql);
				  // Loop para exibir os resultados e preencher o select
				  while ($autor = mysqli_fetch_array($resultado)) {
					echo "<option value='" . $prato['codigo'] . "'>" . $prato['nome'] . "</option>";
				}
                // Fechar a conexão com o banco de dados
                mysqli_close($conexao);
                ?>
                </select>
                <input type="submit" value="Confirma">
            </form>
        </div>
    </div>
</body>
</html>