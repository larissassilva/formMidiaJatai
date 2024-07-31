<?php
/*header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods", 'GET,PUT,POST,DELETE');
header('Content-Type: application/json');
header('Character-Encoding: utf-8');
header('Content-Type: application/json; charset=utf-8');
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

	
	//Editar dados
    $id = $_POST["id"]; 
    $cpf = $_POST["cpf"];
	$nome = $_POST["nome"];
    $whatsapp = $_POST["whatsapp"];    
	$email = $_POST["email"];	

/*
    $cpf = "48829666033";
    $nome = "Larissa Silva";
    $whatsapp = "+556236619121";    
    $email = "larissa@midiajatai.com.br";
    $s = "123456";	*/
	//$senha = password_hash($s, PASSWORD_DEFAULT);


    //resolver a criptografia da senha antes de editar
/*
    $verifica = password_verify($senha , $senhaBanco);
    //echo $verifica;
    if($verifica == 1){

    }*/
   

	if(empty($id)  || empty($cpf) || empty($nome) || empty($whatsapp) || empty($email)){

        $d='1';
        //echo json_encode($d);
        echo "1";

	}else{

            $query_usuario = "UPDATE usuarios SET cpf=?, nome=?,  whatsapp=?,
                                 email=? 
                                WHERE id=?";

            //pdo
            $cad_user = $pdo->prepare($query_usuario);
            $cad_user->execute([ $cpf, $nome, $whatsapp, $email, $id]);
        
            $rowCount = $cad_user->rowCount();
            //echo 'rowCount: '.$rowCount;
            if($rowCount > 0 ) {
                //echo 'Sucesso ao Editar!';
                $d='3';
                echo "3";
             } else {
                //echo 'Erro ao Editar!';
                $d='2';
                echo "2";
             }
       
    }
          
?>