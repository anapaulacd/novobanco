<?php
*/ inclui o arquivo `conexao.php`, que provavelmente contém a lógica de conexão com o banco de dados.
include('controller/conexao.php');
*/ metodo post
$descricao = $_POST['descricao'];

echo "<h3>Descrição: $descricao</h3>";

$cad_marca= "INSERT INTO marca(Descricao) VALUES ('$descricao')";
*/ mysqli_query() em PHP executa uma consulta SQL em um banco de dados MySQL. Faz parte da extensão MySQLi
if(mysqli_query($mysqli, $cad_marca)){
    echo "<h1>marca cadastrada com sucesso!</h1><br>";
    
}else{
    echo "Error: " . $cad_marca . "<br>" . mysqli_error($mysqli);
}
mysqli_close($mysqli);
?>
