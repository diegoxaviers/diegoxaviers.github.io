<?php
$host = 'localhost';
$user = 'root';
$senha = '';
$banco = 'quiz';

$conn = new mysql($host, $user, $senha, $banco);

if($conn->connect_error){
    die("falha na conexão" .$conn->connect_error);
}
?>