

<?php
    require 'config.php';
?>
<a href="adicionar.php">Adicionar Novo Usuário</a>
<p>

<table border="1" width="100%">
           
    <tr>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Ações</th>
    </tr>
    <?php 
    $sql = "SELECT * FROM usuario";
    $sql = $conn->query($sql);
    if($sql->rowCount()>0){
        
        foreach($sql->fetchAll() as $usuarios){

        echo '<tr>';
        //echo '<th>' .$usuarios['Id']. '</th>';
        echo '<th>' .$usuarios['nome']. '</th>';
        echo '<th>' .$usuarios['email']. '</th>';
        echo '<th><a href="editar.php?id='.$usuarios['Id'].'">Editar</a>
               - <a href="excluir.php?id='.$usuarios['Id'].'">Excluir</a></th>';
        echo '</tr>';
        

        }
    }
    
    ?>
</thead>
