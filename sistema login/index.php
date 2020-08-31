<?php

	if(isset(session_start($_SESSION['id']) && empty($_SESSION['id']) == false){
		
		echo "Area restrita...";	
		
	}else{
		
		header("Location: login.php");
	
	}
?>
