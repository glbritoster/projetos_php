<?php
require 'config.php';

if(isset($_POST['nome']) && empty($_POST['nome'])==false){

    $nome = addslashes($_POST['nome']);
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $senha = md5(addslashes($_POST['senha']));
    $sql1 = "insert into usuario (nome, email, senha) VALUES ('$nome', '$email' ,'$senha')";
    $conn->query($sql1);
    header("Location: index.php");
}
?>



<form method="POST">
  <label>Nome:</label><br>
  <input type="text" name="nome" ><br>
  <label>Email:</label><br>
  <input type="text" name="email" ><br>
  <label>Senha:</label><br>
  <input type="text" name="senha" ><br><br>
  <input type="submit" value="Cadastrar"/>
</form> 