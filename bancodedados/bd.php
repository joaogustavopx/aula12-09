<?php

//config. do banco de dados

$host = 'localhost';
$dbname = 'livro';
$username = 'root';
$password = '';

//criar conexão com o Banco de dados

$conn = new mysqli($host, $username, $password, $dbname);

//verifica se houve erro de conexão

if($conn->connect_error){
    die("Falha na conexão" .$conn->connect_error);
}

echo "Conexão realizada com sucesso!";

//dados a serem inseridos

$sql = "INSERT INTO autores (nome, nacionalidade, dataNascimento) 
VALUES ('Machado de Assis', 'Brasil', '1839/06/21')";

//executo a intrução e verifico erro

if($conn->query($sql) === TRUE){
    Echo "DADOS INSERIDOS COM SUCESSO";
}

else{
    echo "Erro ao inserir dados" .$conn->error;
}

$conn->close();

?>
