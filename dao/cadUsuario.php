<?php
/*header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods", 'GET,PUT,POST,DELETE');
header('Character-Encoding: utf-8');
header('Content-Type: text/html; charset=utf-8');
ini_set('display_errors', 0 );
error_reporting(0);*/
session_start();

 
  if ( empty($_SESSION['id']) && empty($_SESSION['nome']) ){
    
    header("Location: ../login.php");        
    
    //echo $_SESSION['id'];
    //echo $_SESSION['nome'];
     
  }
  
include_once 'conexao.php';
		
	$cpf = $_POST["cpf"];
	$nome = $_POST["nome"];
    $whatsapp = $_POST["whatsapp"];    
	$email = $_POST["email"];
	$s = $_POST["senha"];	

/*
    $cpf = "48829666033";
    $nome = "Larissa Silva";
    $whatsapp = "+556236619121";    
    $email = "larissa@midiajatai.com.br";
    $s = "123456";	*/
	$senha = password_hash($s, PASSWORD_DEFAULT);
	//$senha = $_POST["senha"];//password_hash($dados['senha'], PASSWORD_DEFAULT);

	if(empty($cpf) || empty($nome) || empty($whatsapp) || empty($email) || empty($senha)){
		//echo(1);
        echo "1";

	}else{

            $query_usuario = "INSERT INTO usuarios (cpf, nome, whatsapp, email, senha) 
            VALUES ( '$cpf', '$nome', '$whatsapp', '$email','$senha')";

            //pdo
            $cad_user = $pdo->prepare($query_usuario );
            $cad_user->execute();
            $rowCount = $cad_user->rowCount();
            //echo 'rowCount: '.$rowCount;
            
            if($rowCount > 0){

                 echo "3";

            }else{
                
                echo "2";

            }		
        
    }
?>