<?php
    //tdhweb_form_mprado
    //port 3306
	//$dsn = 'mysql:dbname=form_mprado;host=localhost;';
    $dsn = 'mysql:dbname=form_midiajatai;host=localhost;';
    //$user =	'root';
    //$password =	'';
    $user =	'root';
    $password =	'jwwhdL!#^Ol~2!';
      
    try{
        //Criar a conexao
        $pdo= new PDO($dsn, $user, $password);
        // Definir o charset para utf8mb4 
         $pdo->exec('SET CHARACTER SET utf8');
       //echo'Sucesso!';
    }catch(PDOException $ex){
        echo 'Erro: '.$ex->getMessage();
    }
?>