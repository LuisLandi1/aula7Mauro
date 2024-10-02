<?php

// conexao
$servidor = 'localhost';
$banco = 'livro';
$usuario = 'root';
$senha = '';

$conexao = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);

echo "Conectado!<br>";

echo "Recebido: <br>";
echo $_GET['nome'];
echo "<br>";
echo $_GET['idioma'];
echo "Recebido: <br>";
echo $_GET['QuatPG'];
echo "<br>";
echo $_GET['editora'];
echo "<br>";
echo $_GET['data'];
echo "<br>";
echo $_GET['idioma'];
echo "<br>";
echo $_GET['ISBN'];

$codigoSQL = "INSERT INTO `livro` (`id`, `nome`, `DatDePubli` , `editora`, 'QuantidadeDePagina', 'idioma') VALUES (NULL, :nm, :edit ,:QP ,:dt ,ido)";

try {
    $comando = $conexao->prepare($codigoSQL);

    $resultado = $comando->execute(array('nm' => $_GET['nome'], 'dt' => $_GET['data']) 'edit' => $_GET['editora'] 'QP' => $_GET['QuatPG'] 'ido' => $_GET['idioma']);

    if($resultado) {
	echo "Comando executado!";
    } else {
	echo "Erro ao executar o comando!";
    }
} catch (Exception $e) {
    echo "Erro $e";
}

$conexao = null;

?>