<?php
include('controller/conexao.php');

$descricao = $_POST['descricao'];

echo "<h3>Descrição: $descricao</h3>";

$cad_marca= "INSERT INTO marca(Descricao) VALUES ('$descricao')";

if(mysqli_query($mysqli, $cad_marca)){
    echo "<h1>marca cadastrada com sucesso!</h1><br>";
    
}else{
    echo "Error: " . $cad_marca . "<br>" . mysqli_error($mysqli);
}
mysqli_close($mysqli);
?>