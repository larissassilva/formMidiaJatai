<?php
/*
  header('Access-Control-Allow-Origin: *');
  header("Access-Control-Allow-Methods", 'GET,PUT,POST,DELETE');
  header('Content-Type: charset=utf-8');
  ini_set('display_errors', 0 );
  error_reporting(0);*/
  session_start();
  ob_start();
  
?> 
<!Doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="icon.ico">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

    <title>Formulário Google Ads</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrapmin.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <!--<link href="cover2.css" rel="stylesheet">-->
    <link href="css/login.css" rel="stylesheet">
  </head>

  <body class="text-center">    
        <header class="masthead">
            <div class="inner">
            <h1 class=""></h1>
            <br>
            </div>
        </header>
    
        <main role="main" class="inner cover">     
            <div class="" style="border:1px solid white;  border-radius: 50px 20px; margin-left: 10px; margin-right: 10px; width:250px;"> 
                <br>
                <img src="logo.png" width="70%" class="logo logoCel">
                <br>  
                <h1><br>Login</h1>
                <br> 
                <form id="form-logar" method="POST">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                            <label style="text-align: left; align-items: left; float:left; margin-left:25px;"><i class="fa fa-envelope-o" style="text-align: left; align-items: left"></i>&nbsp;Usuário:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type="email" id="usuario" name="usuario" placeholder="usuario@email.com.br" required="required" style="width:200px;  height: 33px;" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                            <label style="text-align: left; align-items: left; float:left; margin-left:25px; margin-top: 10px;"><i class="fa fa-lock" aria-hidden="true"></i>&nbsp;Senha:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type="password" id="senha" name="senha" placeholder="&#8226;&#8226;&#8226;&#8226;&#8226;&#8226;" required="required" style="width:160px; height: 34px; align-items: center" />
                            <button type="button" id="showPassword" onclick="mostrar()" class="btnHover btnVer" > 
                            <i class="fa fa-eye" class="olho"></i>
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                            <button type="button" id="login" class="btn " style='margin-top: 20px; margin-bottom: 20px; background-color: #00346D; color: #fff; width: 200px; align-items: center;
                                justify-content: center;' onclick="logar()">Entrar</button>
                        </div>
                    </div>
                </form>
                <br> 
            </div>
           <!-- <div class="inner f">
                <p class="f">Todos os direitos reservados a <a href="#">TDH Websites © 2024</a>.</p>
            </div>-->
        </main>

        <footer class="f" style="margin: bottom 0px; position: fixed;">
            <div class="inner ">
            <p class="">Todos os direitos reservados a <a href="#">MidiaJatai © 2024</a>.</p>
            </div>
        </footer>

    <!-- Modal Sucesso-->
    <div class="modal fade" id="myModalSucesso" role="dialog">
        <div class="modal-dialog">
        
            <!-- Modal content Sucesso-->
            <div class="modal-content">
                <div class="modal-header btn-success">
                    <button type="button" class="close" data-dismiss="modal" style="color:white;" >&times;</button>                   
                </div>
                <div><h4 class="modal-title" style="text-align:center; align-items: center;background-color: #28a745;">Sucesso</h4></div>
                <div class="modal-body" style="text-align:center; align-items: center;background-color: #28a745;">
                    <p>Login realizado com sucesso!</p>
                    <p>Você será redirecionado em breve.</p>
                    <div class="spinner-border" style="color:white;"></div>
                </div>
                <div class="modal-footer btn-success">
                    <button type="button" class="btn btn-default" data-dismiss="modal" style="color:white;" >Fechar</button>
                </div>
            </div>      
        </div>
    </div>
  
    <!-- -- Modal Erro-->
    <div class="modal fade" id="myModalErro" role="dialog" width=100%>
        <div class="modal-dialog">
    
            <!---- Modal content Erro-->
            <div class="modal-content ">
                <div class="modal-header btn-danger">
                    <button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button>          
                </div>
                <div><h4 class="modal-title" style="text-align:center; align-items: center;background-color: #dc3545;">Erro</h4></div>
                <div class="modal-body" style="text-align:center; align-items: center;background-color: #dc3545;">
                    <p>Erro ao realizar o Login!</p>
                </div>
                <div class="modal-footer btn-danger">
                    <button type="button" class="btn btn-default" data-dismiss="modal" style="color:white;" >Fechar</button>
                </div>
            </div>
        </div>
    </div> 

        <script src="login.js" charset="utf-8"></script>
  </body>
</html>