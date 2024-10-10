<?php
//cadrasto de pessoas
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $password_con = $_POST["password_con"];
    //comando parab inserir os dados do banco.

    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$password');";

    //teste a conexão com o banco e realize o envio dos dados
    if(mysqli_query($conn, $sql)) {
        echo "<p>Usuario cadrastado com sucesso!<p>";
    }else{
        echo "<p> ocorreu um erro ao tentar cadastar o usuário.<p>";
    }
?>