<?php

// conexao
$servidor = 'localhost';
$banco = 'receitas';
$usuario = 'root';
$senha = '';

$conexao = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);

echo "Conectado!<br>";

echo "Recebido: <br>";
echo $_GET['nome'];
echo "<br>";
echo $_GET['url'];
echo "<br>";
echo $_GET['decricao'];
echo "<br>";
echo $_GET['preco'];


$codigoSQL = "INSERT INTO `produto` (`id`, `nome`, `decricao`,'preco', 'URL') VALUES (NULL, :nm, :pre, :urls, :de,)";

try {
    $comando = $conexao->prepare($codigoSQL);

    $resultado = $comando->execute(array('nm' => $_GET['nome'], 'pre' => $_GET['preco'],  'urls' => $_GET['URL'], 'de' => $_GET['decricao']))     ;

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