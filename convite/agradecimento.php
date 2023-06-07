<style>
    body{
        width: 100vw;
        height: 100vh;
        text-align: center;
        display: flex;
        flex-wrap: wrap;
        flex-direction: column;
        align-content: center;
        justify-content: center;
        align-items: center;
        font-size: xx-large;
        text-shadow: 2px 2px 3px orangered;
    }
</style>
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

// Recebe os dados do formulário
$nome = $_POST["nome"];
$quantaspessoas = $_POST["quantas_pessoas"];
$prato = $_POST["prato"];

// Insere os dados na tabela "contato"
$sql = "INSERT INTO cadastro (nome, quantas_pessoas, cod_prato) VALUES ('$nome', '$quantaspessoas', '$prato')";

if (mysqli_query($conexao, $sql)) {
    echo "Obrigado por se inscrever! Esperamos você na festa!";
} else {
    echo " Erro ao inserir dados: " . mysqli_error($conexao);
}

// Fecha a conexão com o banco de dados
mysqli_close($conexao);
?>