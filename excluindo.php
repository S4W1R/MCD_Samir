<?php 
    require 'conexao.php'; 
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $id = $_POST['id'];

    $sql = $pdo->prepare("DELETE from usuario WHERE id = :id");
    $sql->bindValue(':id',$id);
   
    $sql->execute();
    
header("Location:index.php");

?>