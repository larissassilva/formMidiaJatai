<?php
//   header('Access-Control-Allow-Origin: *');
//   header("Access-Control-Allow-Methods", 'GET,PUT,POST,DELETE');
 // header('Content-Type: charset=utf-8');
//   ini_set('display_errors', 0 );
//   error_reporting(0);
?> 
<!Doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="icon.ico">
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

    <title>Formulário Google Ads</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrapmin.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/cover2.css" rel="stylesheet">
    
  </head>

  <body class="text-center">
    <div>
      <header class="masthead">
        <div class="inner">
          <h1 class=""></h1>
          <img src="logo.png" width="20%" class="logo logoCel">
        </div>
      </header>

      <main role="main" class="inner cover">
        <br>
        <h1 class=""><i class="fa-solid fa-rectangle-list"></i>&nbsp;Formulário Google Ads</h1>
        <p class="lead"> <small>&nbsp; * Campos obrigatórios!</small></p>

        <form class=" lead form2" id="form-cadastrar" action="" method="">            
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
                      <label>*&nbsp;Telefone:</label>
                      <input type="text" id="telefone" name="telefone" class="telefone input2 input3" placeholder="06236619121" required>
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
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12"  style="text-align: left;">  
                      <label>*&nbsp;Nome da Empresa / Negócio:</label>
                      <input type="text" id="empresa_negocio" name="empresa_negocio" class="empresa_negocio input2 " placeholder="MidiaJatai" required>
                  </div>
            </div>
          </div>
          <div class="row">
            <div class="form-group">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12" style="text-align: left;">  
                      <label>*&nbsp;Cargo:</label>
                      <input type="text" id="cargo" name="cargo" class="cargo input2 " placeholder="Administrador" required>
                  </div>
            </div>
          </div>
          <div class="row">
            <div class="form-group">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12" style="text-align: left;">  
                      <label>Endereço do Site Atual (caso tenha):</label>
                      <input type="text" id="site_atual" name="site_atual" class="site_atual input2 " placeholder="www.marioprado.com.br" >
                  </div>
            </div>
          </div>
          <div class="row">
            <div class="form-group">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12" style="text-align: left;">  
                      <label>Seu site é otimizado para celulares?</label>
                      <input type="text" id="responsivo" name="responsivo" class="responsivo input2 " placeholder=" Sim, Não" >
                  </div>
            </div>
          </div>
          <div class="row">
            <div class="form-group">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12" style="text-align: left;">  
                      <label>*&nbsp;Qual o segmento de atuação da empresa?</label>
                      <input type="text" id="segmento_atuacao" name="segmento_atuacao" class="segmento_atuacao input2 " placeholder=" Anúncios Google Ads" required>
                  </div>
            </div>
          </div>
          <div class="row">
            <div class="form-group">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12" style="text-align: left;">  
                      <label>Qual é o Slogan da Empresa? (se houver)</label>
                      <input type="text" id="slogan" name="slogan" class="slogan input2 " placeholder="Somos especialista em Ads">
                  </div>
            </div>
          </div>
          <div class="row">
            <div class="form-group">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12" style="text-align: left;">  
                  <label>*&nbsp;Breve Histórico da Empresa:</label>
                  <textarea type="text" id="historico_empresa" name="historico_empresa" class="historico_empresa input2 " oninput="limitaTextarea('historico_empresa', 1500, 'contador1')" 
                  onchange="limitaTextarea('historico_empresa', 1500, 'contador1')" placeholder="Nossa empresa começou ..." maxlength="1500" rows="10"  required></textarea>                     
                  <small>&nbsp; Faltam <span id="contador1">1500</span> caracteres.</small>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="form-group">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12" style="text-align: left;">  
                <label>*&nbsp;Como você vende (Ex: Loja Física, Virtual, Física e Virtual, Outros)?</label>
                <input type="text" id="como_vende" name="como_vende" class="como_vende input2 " placeholder="Loja Virtual" required>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="form-group">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12" style="text-align: left;">  
                <label style="text-align: left;"><b>*&nbsp;Experiências como Anunciante Google:</b></label><br>
                <label style="text-align: left;">&nbsp;&nbsp;Anuncia ou anunciou no Google via agência Google Ads?</label><br>
                <label style="text-align: left;">&nbsp;&nbsp;Anuncia ou anunciou no Google de forma autônoma, sem ajuda de terceiros?</label><br>
                <label style="text-align: left;">&nbsp;&nbsp;Nunca anunciou no Google?</label>
                <input type="text" id="experiencia_googleads" name="experiencia_googleads" class="experiencia_googleads input2 " placeholder="Faço Google Ads na MidiaJatai" required>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="form-group">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12" style="text-align: left;">  
                <label>*&nbsp;Em quais mídias já anuncia ou já anunciou?</label><br>
                <label style="text-align: left;">&nbsp;&nbsp; Ex: TV, Rádio, Revistas, Outdoor, Folhetos, Facebook, Instagram, Google, E-mail Marketing ou Nunca.</label>
                <input type="text" id="midias_anunciou" name="midias_anunciou" class="midias_anunciou input2 " placeholder="Google Ads" required>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="form-group">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12" style="text-align: left;">  
                <label>*&nbsp;Qual é a média de investimento mensal que você faz ou qual será seu orçamento disponível para anúncios?</label>
                <input type="text" id="orcamento_medio" name="orcamento_medio" class="orcamento_medio input2 " placeholder="2.500,00" required>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="form-group">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12" style="text-align: left;">  
                <label>*&nbsp;Qual é o prazo esperado para entrega desse projeto?</label>
                <input type="text" id="prazo_esperado" name="prazo_esperado" class="prazo_esperado input2 " placeholder="15 dias" required>
              </div>
            </div>
          </div>
          <div class="row">
          <div class="form-group">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12" style="text-align: left;">  
              <label>*&nbsp;Quais são os Resultados Esperados? (Expectativa)</label><br>
              <label style="text-align: left;">&nbsp;&nbsp; Ex: Fortalecimento da Marca, Aumento de Ligações Telefônicas, Visitas na Empresa, Solicitação de
                      Orçamentos, Vendas Online.
              </label>
              <input type="text" id="expectativa" name="expectativa" class="expectativa input2 " placeholder="Solicitação de Orçamentos" required>
            </div>
          </div>
        </div>
        <div class="row">
            <div class="form-group">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12" style="text-align: left;">  
                <label>*&nbsp;Quais produtos/serviços sua empresa quer divulgar?</label>
                <input type="text" id="divulgar_prod_serv" name="divulgar_prod_serv" class="divulgar_prod_serv input2 " placeholder="Google Ads. Sites e Hospedagem." required>
              </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12"  style="text-align: left;">  
                  <label>*&nbsp;Descreva os pontos positivos e negativos de seu produto/serviço:</label>
                  <textarea type="text" id="pontos_prod_serv" name="pontos_prod_serv" class="pontos_prod_serv input2 " oninput="limitaTextarea('pontos_prod-serv',800,'contador2')" 
                  onchange="limitaTextarea('pontos_prod_serv',800,'contador2')" placeholder="Nosso serviço ajuda empresas a alcançar clientes em potenciais ..." maxlength="800" rows="10"  required></textarea>                     
                  <small>&nbsp; Faltam <span id="contador2">800</span> caracteres.</small>
              </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12"  style="text-align: left;">  
                  <label>*&nbsp;Qual a reputação de seu produto/serviço perante o mercado atual?</label>
                  <textarea type="text" id="reputacao_prod_serv" name="reputacao_prod_serv" class="reputacao_prod_serv input2 " oninput="limitaTextarea('reputacao_prod-serv',800,'contador3')" 
                  onchange="limitaTextarea('reputacao_prod_serv',800,'contador3')" placeholder="Nossos clientes relatam alto grau de satisfação ..." maxlength="800" rows="10"  required></textarea>                     
                  <small>&nbsp; Faltam <span id="contador3">800</span> caracteres.</small>
              </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12" style="text-align: left;">  
                  <label>*&nbsp;Quais os diferenciais de seu produto ou serviço?</label>
                  <textarea type="text" id="diferenciais" name="diferenciais" class="diferenciais input2 " oninput="limitaTextarea('diferenciais', 800, 'contador4')" 
                  onchange="limitaTextarea('diferenciais', 800, 'contador4')" placeholder="Como parceiros Google conseguimos ..." maxlength="800" rows="10"  required></textarea>                     
                  <small>&nbsp; Faltam <span id="contador4">800</span> caracteres.</small>
              </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12"  style="text-align: left;">  
                  <label>*&nbsp;Explique o(s) motivo(s) para que seu cliente compre o seu produto ou serviço:</label>
                  <textarea type="text" id="porque_prod_serv" name="porque_prod_serv" class="porque_prod_serv input2 " oninput="limitaTextarea('porque_prod-serv',800,'contador5')" 
                  onchange="limitaTextarea('porque_prod_serv',800,'contador5')" placeholder="Empresas e ou negócios precisam de cliente e nós ..." maxlength="800" rows="10"  required></textarea>                     
                  <small>&nbsp; Faltam <span id="contador5">800</span> caracteres.</small>
              </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12"  style="text-align: left;">  
                  <label>*&nbsp;Fale tudo que sabe sobre o seu público-alvo:</label>
                  <textarea type="text" id="publico_alvo" name="publico_alvo" class="publico_alvo input2 " oninput="limitaTextarea('publico_alvo',800,'contador6')" 
                  onchange="limitaTextarea('publico_alvo',800,'contador6')" placeholder="Nosso público alvo são empresas ..." maxlength="800" rows="10"  required></textarea>                     
                  <small>&nbsp; Faltam <span id="contador6">800</span> caracteres.</small>
              </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12"  style="text-align: left;">  
                  <label>*&nbsp;Relacione os principais concorrentes e informações úteis:</label>
                  <textarea type="text" id="concorrentes" name="concorrentes" class="concorrentes input2 " oninput="limitaTextarea('concorrentes',1500,'contador7')" 
                  onchange="limitaTextarea('concorrentes',1500,'contador7')" placeholder="Nossos concorrentes são ..." maxlength="1500" rows="10"  required></textarea>                     
                  <small>&nbsp; Faltam <span id="contador7">1500</span> caracteres.</small>
              </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12"  style="text-align: left;">  
                  <label>*&nbsp;Em quais regiões deseja anunciar (Cidade, Estado(s), Setores ou Nacional)?</label>
                  <textarea type="text" id="regiao_anuncio" name="regiao_anuncio" class="regiao_anuncio input2 " oninput="limitaTextarea('regiao_anuncio',800,'contador8')" 
                  onchange="limitaTextarea('regiao_anuncio',800,'contador8')" placeholder="Nós anunciaremos em Goiânia, Goiás no Brasil ..." maxlength="800" rows="10"  required></textarea>                     
                  <small>&nbsp; Faltam <span id="contador8">800</span> caracteres.</small>
              </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12" style="text-align: left;">  
                  <label style="text-align: left;">*&nbsp;Quais são os melhores horários para anunciar em sua opinião?</label><br>
                  <label style="text-align: left;">&nbsp;&nbsp;Ex: Dias da semana, finais de semana, faixa de horário.</label>
                  <textarea type="text" id="horario_anuncio" name="horario_anuncio" class="horario_anuncio input2 " oninput="limitaTextarea('horario_anuncio',800,'contador9')" 
                  onchange="limitaTextarea('horario_anuncio',800,'contador9')" placeholder="Nós anunciaremos segunda dás 8h às 18h, terça ..." maxlength="800" rows="10"  required></textarea>                     
                  <small>&nbsp; Faltam <span id="contador9">800</span> caracteres.</small>
              </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12" style="text-align: left;">  
                  <label style="text-align: left;">Precisa de campanhas sazonais?</label><br>
                  <label style="text-align: left;">&nbsp;&nbsp; Ex: Carnaval, Dia das mães, Black Friday etc.</label>
                  <textarea type="text" id="campanha_sazonais" name="campanha_sazonais" class="campanha_sazonais input2 " oninput="limitaTextarea('campanha_sazonais',800,'contador10')" 
                  onchange="limitaTextarea('campanha_sazonais',800,'contador10')" placeholder="Nós queremos fazer uma ação na semana ..." maxlength="800" rows="10"  required></textarea>                     
                  <small>&nbsp; Faltam <span id="contador10">800</span> caracteres.</small>
              </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12" style="text-align: left;">  
                <label style="text-align: left;">Se for necessário realizar alguns ajustes no código do seu site, quem fará essa função?</label><br>
                  <label style="text-align: left;">&nbsp;&nbsp;Ex:Possui programador, Você mesmo, Nós podemos alterar.</label>
                <input type="text" id="ajuste_site" name="ajuste_site" class="ajuste_site input2 " placeholder="Nós temos um programador ...">
              </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12" style="text-align: left;">  
                  <label>Alguma observação adicional?</label>
                  <textarea type="text" id="obs_adicional" name="obs_adicional" class="obs_adicional input2 " oninput="limitaTextarea('obs_adicional',1500,'contador11')" 
                  onchange="limitaTextarea('obs_adicional',1500,'contador11')" placeholder="A observação adicional é ..." maxlength="1500" rows="10"  ></textarea>                     
                  <small>&nbsp; Faltam <span id="contador11">1500</span> caracteres.</small>
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
    <script src="main.js" charset="utf-8"></script>
  </body>
</html>