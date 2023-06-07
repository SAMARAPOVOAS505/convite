<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
    <style>
        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            justify-items: center;
            align-items: center;
            align-content: center;
        }
        table, tr, td {
            border: 2px  solid black;
            border-collapse: collapse;
            text-align: center;
        }
        td {
            padding-left: 0.5em;
            padding-right: 0.5em;
        }
    </style>
</head>
<body>
<table>
		<thead>
			<tr>
				<th>Código</th>
				<th>Nome</th>
				<th>Pessoas</th>
				<th>Prato</th>
			</tr>
		</thead>
		<tbody>
			<?php
			// Dados de conexão com o banco de dados
            $servidor = "localhost";
            $usuario = "root";
            $senha = "";
            $banco = "convite";

            // Conexão com o banco de dados
            $conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

			// Consulta na tabela de produtos
			$sql = "SELECT p.codigo, p.nome, c.codigo, c.nome, c.quantas_pessoas, c.cod_prato AS prato FROM cadastro c, prato p WHERE c.cod_prato = p.codigo";
			$resultado = mysqli_query($conexao, $sql);

			// Loop para exibir os resultados
			while ($cadastro = mysqli_fetch_array($resultado)) {
				echo "<tr>";
				echo "<td>" . $cadastro['codigo'] . "</td>";
				echo "<td>" . $cadastro['nome'] . "</td>";
				echo "<td>" . $cadastro['quantas_pessoas'] . "</td>";
				echo "<td>" . $cadastro['prato'] . "</td>";
				echo "</tr>";
			}

			// Fechar a conexão com o banco de dados
			mysqli_close($conexao);
			?>
		</tbody>
	</table>
</div>
</div>
</body>
</html>