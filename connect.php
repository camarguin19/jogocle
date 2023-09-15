<?php
require_once 'pdoconfig.php';
try {
  $conn = new PDO("mysql:host=$host;dbname=$site", $username, $password);
  echo "Conectado a $site em $host com sucesso.";
} catch (PDOException $pe) {
  die("Não foi possível se conectar ao banco de dados $site :" . $pe->getMessage());
}

$sql = "INSERT INTO usuario (coluna1, coluna2, coluna3, coluna4, coluna5, coluna6) VALUES (:valor1, :valor2, :valor3, :valor4, :valor5, :valor6)";

$valor1 = "valor_da_coluna1";
$valor2 = "valor_da_coluna2";
$valor3 = "valor_da_coluna3";
$valor4 = "valor_da_coluna4";
$valor5 = "valor_da_coluna5";
$valor6 = "valor_da_coluna6";

$stmt = $conn->prepare($sql);

$stmt->bindParam(':valor1', $valor1);
$stmt->bindParam(':valor2', $valor2);
$stmt->bindParam(':valor3', $valor3);
$stmt->bindParam(':valor4', $valor4);
$stmt->bindParam(':valor5', $valor5);
$stmt->bindParam(':valor6', $valor6);

$stmt->execute();

echo "Dados inseridos com sucesso!";
 catch (PDOException $e) {
echo "Erro ao inserir dados: " . $e->getMessage();
}
?>
