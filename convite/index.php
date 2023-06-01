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
    <div class="fundo">
        
        <div class="formulario">
            <h1>Convite</h1>
            <p>Convido você e a sua familia para a nossa festa 
                junina que sera dia 17/06/2023 as 20:00 cada 
                convidado com criaça tem a taxa de 50,00 que sera
                 incluso o pula pula para as crianças bricarem e
                  a mesa para acomodar toda familia, convidados sem crianças 
                  tem a taxa de 20,00, cada familia sera responsavel de levar 
                  uma comida tipica.
            </p>
        <form action="agradecimento.php" method="post">
            <div class="nome">
                <label for="nome">Nome: </label>
                <input type="text" id="nome" name="nome">
            </div>

            <div class="pessoas">
                <label for="quantas_pessoas">Quantas pessoas: </label>
                <input class="input_pessoa" type="text" id="quantas_pessoas" name="quantas_pessoas">
            </div>

            <div class="prato">
                <label for="prato">Escolha o prato para levar: </label>
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
            </div>

            <div class="butao">
                <input class="input_butao" type="submit" value="Confirma">
            </div>
            <p>OBS: Convidado não convida.</p>
        </form>
        </div>
    </div>

</body>

</html>