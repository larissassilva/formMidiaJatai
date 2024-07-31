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

    
        $stmt = $pdo->prepare('SELECT * FROM formulario');
        $stmt->execute();      
        $result = $stmt->fetchAll();
       
        if(count($result)){
            foreach($result as $row){
                //print_r($row);
                $rows[] = $row;
                //echo $rows;
            } 
            //echo $rows;
            echo json_encode($rows,  JSON_UNESCAPED_UNICODE, JSON_FORCE_OBJECT); 
        }else{
            echo "Nennhum resultado retornado.";
        }      
         
    

?>