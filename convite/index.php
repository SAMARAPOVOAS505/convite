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

        </div>
        <div class="formulario">
      
            <form action="agradecimento.php" method="post">


                <div class="linha">
                <h2>Convite</h2>
                
                </div>
                <div class="linha">
                    <label for="nome">Nome: </label>
                    <input type="text" id="nome" name="nome">
                </div>

                <div class="linha">
                    <label for="quantas_pessoas">Quantas pessoas: </label>
                    <input type="text" id="quantas_pessoas" name="quantas_pessoas">
                </div>

                <div class="linha">
                    <label for="prato">Escolha o prato para levar: </label>
                    <select name="prato" id="prato" name="prato">
                        <?php
                        // Consulta na tabela de autores
                        $sql = "SELECT codigo, nome FROM prato";
                        $resultado = mysqli_query($conexao, $sql);
                        // Loop para exibir os resultados e preencher o select
                        while ($prato = mysqli_fetch_array($resultado)) {
                            echo "<option value='" . $prato['codigo'] . "'>" . $prato['nome'] . "</option>";
                        }
                        // Fechar a conexão com o banco de dados
                        mysqli_close($conexao);
                        ?>
                    </select>
                </div>

                <div class="linha">
                    <button type="submit">Confirmar</button>
                </div>
                <a href="https://chat.whatsapp.com/ItszX6zNNczLQgxYzdzzqY">Entrar no Grupo</a><br>
                <p> Convido você e a sua família para a nossa festa junina, que será dia 17/06/2023 às 20:00.
                 Cada família com criaça pagaram a taxa de R$50,00 que está incluso o pula-pula, piscina de bolinhas e a mesa para acomodar toda família. 
                 Convidados sem crianças pagaram a taxa de R$20,00 que será a mesa para se acomodar.
                 Cada família  terá a responsabilidade de levar uma comida típica para a festa.</p><br>
                   
                <p>OBS: Convidado não convida.</p>
            </form>
            <div>
            </div>
</body>

</html>