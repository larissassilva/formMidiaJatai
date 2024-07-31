<?php
/*
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods", 'GET,PUT,POST,DELETE');
header('Character-Encoding: utf-8');
header('Content-Type: text/html; charset=utf-8');
ini_set('display_errors', 0 );
error_reporting(0);*/
session_start();
ob_start();

 
  if ( empty($_SESSION['id']) && empty($_SESSION['nome']) ){
    
    header("Location: ../login.php");        
    
    //echo $_SESSION['id'];
    //echo $_SESSION['nome'];
     
  }
  
include_once 'conexao.php';
	
	$id = $_POST["id"];
	$s = $_POST["senha2"];	

    //$id = 1;
	//$s = "12345678";

/*
    $cpf = "48829666033";
    $nome = "Larissa Silva";
    $whatsapp = "+556236619121";    
    $email = "larissa@midiajatai.com.br";
    $s = "123456";	*/
	$senha = password_hash($s, PASSWORD_DEFAULT, ['cost' => 10]);
    //se o $s não existir será null e dará um erro no PHP 8
	//$senha = $_POST["senha"];//password_hash($dados['senha'], PASSWORD_DEFAULT);
    //echo $senha;

	if(empty($id) || empty($s)){
		//echo(1);
        echo "1";

	}else{
		
        /*
            //novo jeito - melhor jeito de criar conexão
            // para o servidor
            $host = "localhost";
            $user = "root";
            $password =	"";
            $dbname = "Nome do banco";
            $port = 3306;

            //dentro do try
            $pdo = new PDO("mysql:host=$host;port=$port;dbname=" . $dbname, $user, $password);
        */
		
            

            $query_usuario = "UPDATE usuarios SET senha=? 
            WHERE id=?";

            //pdo
            $cad_user = $pdo->prepare($query_usuario);
            $cad_user->execute([$senha,$id]);
            $rowCount = $cad_user->rowCount();
            //echo 'rowCount: '.$rowCount;
            
            if($rowCount > 0){

                echo "3";

            }else{
                
                echo "2";

            }		
        
    }
?>