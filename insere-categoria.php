<?php
include('controller/conexao.php');

$descricao = $_POST['descricao'];

echo "<h3>Descrição: $descricao</h3>";

$cad_categoria= "INSERT INTO categoria(Descricao) VALUES ('$descricao')";

if(mysqli_query($mysqli, $cad_categoria)){
    echo "<h1>Categoria cadastrada com sucesso!</h1><br>";
    
}else{
    echo "Error: " . $cad_categoria . "<br>" . mysqli_error($mysqli);
}
mysqli_close($mysqli);
?>