<?php
$nome = $_POST['nome'];
$data_nascimento = $_POST['data_nSCIMENTO'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];
require('conexao.php'); 
$sqlinsert = "INSERT INTO Aluno VALUES ('', '$nome', '$data_nascimento', '$cpf', '$telefone', '$email', '$endereco')";
mysqli_query($db, $sqlinsert) or die('Não foi possível inserir: ' . mysqli_error($db));
echo "<script>alert('Cadastro inserido com sucesso')</script>"; 
?>