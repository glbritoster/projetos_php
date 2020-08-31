 
 <?php
 session_start();
 
	if(isset($_POST['email']) && empty($_POST['email']) == false){
		
		$email = addslashes($_POST['email']);
		$senha = md5(addslashes($_POST['senha']));		
		
		constantes do banco
		
		try
			$db = new PDO(CONSTANTES);
			$sql = $db->query("SELECT * FROM usuarios WHERE email = '$email' AND senha ='$senha'");
			if($sql->rowCount()>0){
				$dado = $sql->fetch();
				$_SESSION['id'] = $dado['id'];
				header("Location: index.php");
			}
			
			
		}catch(PDOExceotion $e){
			echo "Falhou: " .$e.getMessage();		
		}	
				
	}
		
?>

 <form method="post" >
  
    <label for="uname"><b>E-mail</b></label><br/>
    <input type="text" name="email" required><br/><br/>

    <label for="psw"><b>Senha</b></label><br/>
    <input type="password" placeholder="senha" name="psw" required><br/><br/>

    <button type="submit">Login</button>
   
</form> 