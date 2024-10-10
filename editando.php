<?php 
    require 'conexao.php'; 
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $id = $_POST['id'];
    
    $sql = $pdo->prepare("UPDATE usuario SET nome = :nome , email = :email WHERE id = $id");
    $sql->bindValue(':nome',$nome);
    $sql->bindValue(':email',$email);
    $sql->execute();
    
header("Location:index.php");

?>