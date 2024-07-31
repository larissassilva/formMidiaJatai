<?php
  /*header('Access-Control-Allow-Origin: *');
  header("Access-Control-Allow-Methods", 'GET,PUT,POST,DELETE');
  header('Content-Type: charset=utf-8');
  ini_set('display_errors', 0 );
  error_reporting(0);*/
  session_start();
  ob_start();

 
if ( empty($_SESSION['id']) && empty($_SESSION['nome']) ){
  
  header("Location: login.php");        
  
  //echo $_SESSION['id'];
  //echo $_SESSION['nome'];
   
}

?> 
<!Doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../icon.ico">
    <script src="https://kit.fontawesome.com/1841f711c9.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

    <title>Formulários Google Ads</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrapmin.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/cover23.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <div>
        <header class="masthead">
            <br>
            <p style="float: right; margin-right: 10px;">
                <a href="sair.php">
                    <button style='margin-top: 20px; margin-bottom: 20px; margin-right: 10px; background-color: #00346D; color: #fff;' id="sair"  class="btn btn-xs">
                        <i class="fas fa-sign-out-alt" style="color: #fff;"></i></i>&nbsp;Sair
                    </button>
                </a>
            </p>
            <div class="inner">
            <h1 class=""></h1>
            <img src="../logo.png" width="20%" class="logo logoCel">
            </div>
        </header>

        <main role="main" class="inner cover">
        <br>
        <h1 class=""><i class="fa-solid fa-user" style="color: #fff;"></i>&nbsp;Cadastrar Usuário</h1>
        <br>
          <?php echo '<h3 class="lead" style="color: #fff;"> Olá &nbsp;'.$_SESSION['nome'].' </h3>';?> 
        <br>
        <p class="lead"> <small>&nbsp; * Campos obrigatórios!</small></p>
            <form class=" lead form2" id="form-cadastrar" action="" method="" style="padding:10px">
                <div class="row">
                    <div class="form-group">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12" style="text-align: left;">  
                        <label>*&nbsp;CPF:</label>
                            <input type="text" id="cpf" name="cpf" class="cpf input2 " placeholder="Digite somente números" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12" style="text-align: left;">  
                            <label>*&nbsp;Nome:</label>
                            <input type="text" id="nome" name="nome" class="nome input2 " placeholder="Nome completo" required>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="form-group ">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12" style="text-align: left;">
                            <label>*&nbsp;WhatsApp:</label>
                            <input type="text" id="whatsapp" name="whatsapp" class="whatsapp input2 input3" placeholder="+5562993397034" required>
                        </div> 
                    </div> 
                </div>
                <div class="row ">
                    <div class="form-group ">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12" style="text-align: left;">
                            <label>*&nbsp;E-mail:</label>
                            <input type="email" id="email" name="email" class="email input2" placeholder="email@marioprado.com.br" required>
                        </div> 
                    </div> 
                </div>
                <div class="row">
                    <div class="form-group">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12" style="text-align: left;">  
                            <label>*&nbsp;Senha:</label>
                            <p class="lead">
                              <input type="password" id="senha" name="senha" class="senha" placeholder="&#8226;&#8226;&#8226;&#8226;&#8226;&#8226;" required style=" height: 34px;" >
                              <button type="button" id="showPassword" onclick="mostrar2()" class="btnHover btnVer"> 
                                <i class="fa fa-eye" class="olho"></i>
                              </button>
                            </p>
                        </div>
                    </div>
                </div>
                <br>
                <p class="lead">
                    <Button type="button" class="btn btn-lg btn-success" onclick="salvar()">  Enviar </Button>
                    <Button id="btnLimpar2" class="btn btn-lg btn-secondary" onclick="limpar()"> Limpar </Button>
                </p>          
            </form>
            <br>
            <div class="col-lg-12">
                <a href="adm.php"> <button style='margin-top: 20px; margin-bottom: 20px; background-color: #00346D; color: #fff;'  
                id=""  class="btn btn-lg">&nbsp;&nbsp;&nbsp;&nbsp;Voltar&nbsp;&nbsp;&nbsp;&nbsp;</button></a>
            </div>
            <br>
        
        </main>

      <footer class="mastfoot mt-auto f">
        <div class="inner">
          <p>Todos os direitos reservados a <a href="#">MidiaJatai © 2024</a>.</p>
        </div>
      </footer>
    <div>     
    <!-- bbb
 Estrutura para mensagens de Sucesso e Erro, mas não aceita sobreposição
<div class="container">
   Modal -->
  <div class="modal fade" id="myModalSucesso" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content Sucesso-->
      <div class="modal-content">
        <div class="modal-header btn-success">
          <button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button>                   
        </div>
        <div><h4 class="modal-title" style="text-align:center; align-items: center;background-color: #28a745;">Sucesso</h4></div>
        <div class="modal-body" style="text-align:center; align-items: center;background-color: #28a745;">
          <p>Cadastro realizado com sucesso!</p>
        </div>
        <div class="modal-footer btn-success">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="color:white;">Fechar</button>
        </div>
      </div>
      
    </div>
  </div>
  
  <!-- -- Modal -->
  <div class="modal fade" id="myModalErro" role="dialog" width=100%>
    <div class="modal-dialog">
    
      <!---- Modal content Erro-->
      <div class="modal-content ">
        <div class="modal-header btn-danger">
          <button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button>          
        </div>
        <div><h4 class="modal-title" style="text-align:center; align-items: center;background-color: #dc3545;">Erro</h4></div>
        <div class="modal-body" style="text-align:center; align-items: center;background-color: #dc3545;">
          <p>Erro ao realizar o cadastro!</p>
        </div>
        <div class="modal-footer btn-danger">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="color:white;">Fechar</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
    <script src="../js/usuario.js" charset="utf-8"></script>
  </body>
</html>