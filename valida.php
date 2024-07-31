<?php
/*header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods", 'GET,PUT,POST,DELETE');
header('Character-Encoding: utf-8');
header('Content-Type: text/html; charset=utf-8');
ini_set('display_errors', 0 );
error_reporting(0);*/


include_once 'dao/conexao.php';

	
	$email = $_POST['usuario'];
	$senha = $_POST['senha'];
	

	if(empty($email) || empty($senha)){
		
		echo "1";
		
	}else{

            $query_usuario =  "SELECT id, nome, email, senha FROM usuarios 
                                WHERE email='$email' LIMIT 1";
		    		
            
            $cad_user = $pdo->prepare($query_usuario);
            $cad_user->execute();
            $rowCount = $cad_user->rowCount();
            

            if(($cad_user) AND ($rowCount != 0)){

                $row_usuario = $cad_user->fetch(PDO::FETCH_ASSOC);
                $senhaBanco= $row_usuario['senha'];

                if(password_verify($senha , $senhaBanco)){
                    
                    session_start();
                    
                    $_SESSION['id'] = $row_usuario['id'];
                    $_SESSION['nome'] = $row_usuario['nome'];
                    $_SESSION['email'] = $row_usuario['email'];

                    echo "3";

                }else{
                    
                    echo "2";

                }
            }else{
                
                echo "2";

            }           
           
    }	