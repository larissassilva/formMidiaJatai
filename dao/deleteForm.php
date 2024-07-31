<?php
/*header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods", 'GET,PUT,POST,DELETE');
ini_set('display_errors', 0 );
error_reporting(0);
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

$id = $_POST["id"];
//$id = 13;

    if(empty($id)){

        $d='1';
        echo '1';
        //echo json_encode($d);
        
    }else{

        

            $query_formulario = "DELETE FROM formulario WHERE id = $id";
            $cad_form = $pdo->prepare($query_formulario);
            $cad_form->execute();    
            $rowCount = $cad_form->rowCount();

                //echo 'rowCount: '.$rowCount;
                if($rowCount > 0 ) {
                    //echo 'Sucesso ao Editar!';
                    $d='3';
                    echo '3';
                   // echo json_encode($d);
                } else {
                    //echo 'Erro ao Editar!';
                    $d='2';
                    echo '2';
                   // echo json_encode($d);
                }
            
        
    }
?>