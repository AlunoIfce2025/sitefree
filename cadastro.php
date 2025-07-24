<?php
//Conectar banco de dados online

$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "cadastroItens";

$conn = new mysqlite($host, $usuario, $senha, $banco);

if($conn->connect_error){
    die ("Erro na conexão: " .$conn->connect_error);
}
//Consultar os nomes do banco
$sql = "SELECT id, nome FROM cadastroItens";
$result = $conn->query($sql);
?>