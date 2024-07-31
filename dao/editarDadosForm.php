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

	
	//Cadastrar dados 
    $id = $_POST["id"];
    $nome = $_POST["nome"];
	  $telefone = $_POST["telefone"];
    $whatsapp = $_POST["whatsapp"];
    $email = $_POST["email"];
    $empresa_negocio = $_POST["empresa_negocio"];
    $cargo = $_POST["cargo"];
    $site_atual = $_POST["site_atual"];//pode ser vazio
    $responsivo = $_POST["responsivo"];//pode ser vazio
    $segmento_atuacao = $_POST["segmento_atuacao"];
    $slogan = $_POST["slogan"];//pode ser vazio
    $historico_empresa = $_POST["historico_empresa"];
    $como_vende = $_POST["como_vende"];
    $experiencia_googleads = $_POST["experiencia_googleads"];
    $midias_anunciou = $_POST["midias_anunciou"];
    $orcamento_medio = $_POST["orcamento_medio"];
    $prazo_esperado = $_POST["prazo_esperado"];
    $expectativa = $_POST["expectativa"];
    $divulgar_prod_serv = $_POST["divulgar_prod_serv"];
    $pontos_prod_serv = $_POST["pontos_prod_serv"];
    $reputacao_prod_serv = $_POST["reputacao_prod_serv"];
    $diferenciais = $_POST["diferenciais"];
    $porque_prod_serv = $_POST["porque_prod_serv"];
    $publico_alvo = $_POST["publico_alvo"];
    $concorrentes = $_POST["concorrentes"];
    $regiao_anuncio = $_POST["regiao_anuncio"];
    $horario_anuncio = $_POST["horario_anuncio"];
    $campanha_sazonais = $_POST["campanha_sazonais"];//pode ser vazio
    $ajuste_site = $_POST["ajuste_site"];//pode ser vazio
    $obs_adicional = $_POST["obs_adicional"];//pode ser vazio
    /* 
    $id = 1;
    $nome = "Larissa7 Silva";
	  $telefone = "06236619121";
    $whatsapp = "+5562993397034";
    $email = "contato@midiajatai.com.br";
    $empresa_negocio = "Agência MPrado";
    $cargo = "Gerente de Projetos";
    $site_atual = "https://www.midiajatai.com.br/";
    $responsivo = "Sim";
    $segmento_atuacao = "Gerenciamento de Campanhas Google Ads.";
    $slogan = "Somos especialista em Google Ads.";//pode ser vazio
    $historico_empresa = "Nossa empresa começou em uma linda tarde de verão...";
    $como_vende = "Loja física e virtual";
    $experiencia_googleads = "Anúncios no Google Ads com a MidiaJatai.";
    $midias_anunciou = "Google Ads e Camiseta de Time";
    $orcamento_medio = "9.550,00";
    $prazo_esperado = "10 dias";
    $expectativa = "Muitas solicitações de orçamento.";
    $divulgar_prod_serv = "Gerenciamento de Campanhas Google Ads. Criação de Sites e Hospedagem.";
    $pontos_prod_serv = "Nossa produto ajuda empresas a alcançar clientes em potenciais, mas precisamos de tempo e investimento financeiro.";
    $reputacao_prod_serv = "Nossos clientes relatam alto grau de satisfação, nos avaliando com cinco estrelas, nas avaliações do Google meu negócio.";
    $diferenciais = "Como parceiros Google conseguimos utilizar as melhores técnicas ...";
    $porque_prod_serv = "Empresas e ou negócios precisam de cliente e nós conseguimos juntar os dois.";
    $publico_alvo = "Nosso público alvo são empresas de pequeno e médio porte.";
    $concorrentes = "Fulano Marketing Digital atua na mesma cidade e tem em média 150 clientes.";
    $regiao_anuncio = "Cidade de Goiânia, estado de Goias, País Brasil. Lugares no mundo que falam português";
    $horario_anuncio = "De segunda a sexta, a partir dàs 8h30 até as 17h30. Horário de Brasília.";
    $campanha_sazonais = "Queremos uma campanha focada na semana do consumidor.";//pode ser vazio
    $ajuste_site = "Nós temos um programador o BK.";
    $obs_adicional = "Não temos maiores informações.";//pode ser vazio
    */

	if(empty($id) || empty($nome) || empty($telefone) || empty($whatsapp) || empty($email) || empty($empresa_negocio) || empty($cargo)
        || empty($segmento_atuacao) || empty($historico_empresa) || empty($como_vende) || empty($experiencia_googleads) 
        || empty($midias_anunciou) || empty($orcamento_medio) || empty($prazo_esperado) || empty($expectativa) 
        || empty($divulgar_prod_serv)|| empty($pontos_prod_serv) || empty($reputacao_prod_serv) || empty($diferenciais) 
        || empty($porque_prod_serv) || empty($publico_alvo) || empty($concorrentes) || empty($regiao_anuncio) 
        || empty($horario_anuncio)){

        $d='1';
        //echo json_encode($d);
        echo "1";
	}else{
        

            $query_formulario = "UPDATE formulario SET
                                    nome=?, telefone=?, whatsapp=?, email=?, empresa_negocio=?,
                                    cargo=?, site_atual=?, responsivo=?, segmento_atuacao=?, slogan=?, 
                                    historico_empresa=?, como_vende=?, experiencia_googleads=?, 
                                    midias_anunciou=?, orcamento_medio=?, prazo_esperado=?, 
                                    expectativa=?, divulgar_prod_serv=?, pontos_prod_serv=?,
                                    reputacao_prod_serv=?, diferenciais=?, porque_prod_serv=?, publico_alvo=?,
                                    concorrentes=?, regiao_anuncio=?, horario_anuncio=?, campanha_sazonais=?,
                                    ajuste_site=?, obs_adicional=?
                                    WHERE id=?";

            //pdo
            $cad_form = $pdo->prepare($query_formulario);
            $cad_form->execute([$nome, $telefone, $whatsapp, $email, $empresa_negocio,
                                $cargo, $site_atual, $responsivo, $segmento_atuacao, $slogan, 
                                $historico_empresa, $como_vende, $experiencia_googleads, $midias_anunciou,
                                $orcamento_medio, $prazo_esperado, $expectativa, $divulgar_prod_serv,
                                $pontos_prod_serv, $reputacao_prod_serv, $diferenciais, $porque_prod_serv,
                                $publico_alvo, $concorrentes, $regiao_anuncio, $horario_anuncio, 
                                $campanha_sazonais, $ajuste_site, $obs_adicional, $id        
        
                    ]);
        
            $rowCount = $cad_form->rowCount();
            //echo 'rowCount: '.$rowCount;
            if($rowCount > 0 ) {
                //echo 'Sucesso ao Editar!';
                $d='3';
                echo '3';
             } else {
                //echo 'Erro ao Editar!';
                $d='2';
                echo '2';
             }

        
    }
          
?>