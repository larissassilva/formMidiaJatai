-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 10/05/2024 às 08:29
-- Versão do servidor: 5.7.40
-- Versão do PHP: 8.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `form_midiajatai`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `formulario`
--

CREATE TABLE `formulario` (
  `id` int(11) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `telefone` varchar(14) NOT NULL,
  `whatsapp` varchar(15) NOT NULL,
  `email` varchar(250) NOT NULL,
  `empresa_negocio` varchar(250) NOT NULL,
  `cargo` varchar(250) NOT NULL,
  `site_atual` varchar(250) NOT NULL,
  `responsivo` varchar(20) NOT NULL,
  `segmento_atuacao` varchar(250) NOT NULL,
  `slogan` varchar(250) DEFAULT NULL,
  `historico_empresa` varchar(1500) NOT NULL,
  `como_vende` varchar(250) NOT NULL,
  `experiencia_googleads` varchar(250) NOT NULL,
  `midias_anunciou` varchar(250) NOT NULL,
  `orcamento_medio` varchar(100) NOT NULL,
  `prazo_esperado` varchar(100) NOT NULL,
  `expectativa` varchar(250) NOT NULL,
  `divulgar_prod_serv` varchar(250) NOT NULL,
  `pontos_prod_serv` varchar(800) NOT NULL,
  `reputacao_prod_serv` varchar(800) NOT NULL,
  `diferenciais` varchar(800) NOT NULL,
  `porque_prod_serv` varchar(800) NOT NULL,
  `publico_alvo` varchar(800) NOT NULL,
  `concorrentes` varchar(1500) NOT NULL,
  `regiao_anuncio` varchar(800) NOT NULL,
  `horario_anuncio` varchar(800) NOT NULL,
  `campanha_sazonais` varchar(800) DEFAULT NULL,
  `ajuste_site` varchar(250) NOT NULL,
  `obs_adicional` varchar(1500) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `formulario`
--

INSERT INTO `formulario` (`id`, `nome`, `telefone`, `whatsapp`, `email`, `empresa_negocio`, `cargo`, `site_atual`, `responsivo`, `segmento_atuacao`, `slogan`, `historico_empresa`, `como_vende`, `experiencia_googleads`, `midias_anunciou`, `orcamento_medio`, `prazo_esperado`, `expectativa`, `divulgar_prod_serv`, `pontos_prod_serv`, `reputacao_prod_serv`, `diferenciais`, `porque_prod_serv`, `publico_alvo`, `concorrentes`, `regiao_anuncio`, `horario_anuncio`, `campanha_sazonais`, `ajuste_site`, `obs_adicional`) VALUES
(1, 'Heloise de Melo Teixeira', '01939960369', '+5519998159238', 'administracao@heloiseeisistelecomltda.com.br', 'Heloise e Isis Telecom Ltda', 'Socio Proprietário', 'www.heloiseeisistelecomltda.com.br', 'Sim', 'Telecomunicações', 'Fazemos sua conexão com mundo!', 'Heloise e Isis Telecom Ltda é uma empresa de telecomunicação para proporcionar aos moradores de Campinas uma Internet residencial de qualidade.', 'Loja Física', 'Sim', 'Rádio, TV, Google Ads e Instagram.', '50.800,00', '3 dias', 'Vendas', 'Planos de Internet residencial', 'Planos de Internet residencial de alta velocidade. Estrutura de alto custo.', 'Aprovado por 80% de nossos clientes.', 'Somos exigentes com nossos equipamentos de ponta.', 'Oferecemos a conexão de Internet mais estável da região.', 'Classe média, classe média baixa e a classe média alta.', 'Vivo, Claro e Tim. Investem pesado em propaganda.', 'Campinas São Paulo.', 'De segunda a domingo das 8h30 ás 17h. ', 'Não', 'Temos, mas vocês podem alterar.', 'Não'),
(2, 'Breno Alves Rocha', '09638524459', '+5596994180019', 'contato@brenoececiliamarcenarialtda.com.br', 'Breno e Cecília Marcenaria Ltda', 'Socio Proprietário', 'www.brenoececiliamarcenarialtda.com.br', 'Sim', 'Marcenaria moveis planejados.', 'Fazemos da madeira uma arte.', 'Breno e Cecília Marcenaria Ltda é uma empresa familiar. Com 3 gerações. Fazemos moveis.', 'Loja Física', 'Nunca', 'Rádio.', '4.650,00', '5 dias', 'Vendas', 'Moveis de madeira', 'Fazemos da madeira uma arte.', 'Aprovado pelos nossos clientes.', 'Somos exigentes com nossos produtos.', 'Fazemos da madeira uma arte.', 'Classe média a classe média alta.', 'Zé moveis, atua no mesmo bairro. que a nossa empresa esta localizada. Cobre nossa oferta.', 'Oiapoque Amapá.', 'De segunda a sexta das 8h30 ás 17h. E sábado das 8h as 11h.', 'No dia das mães.', 'Não temos. Vocês podem alterar.', 'Não, queremos vender mais.'),
(3, 'Fabiana Alícia Caldeira', '09239606528', '+5592985283504', 'fabimodas@gmail.com', 'Fabi Modas MEI', 'Proprietária', '', '', 'Moda em Geral', '', 'Surgiu da necessidade de empreender\r\n', 'Loja Física e virtual', 'Nunca', 'Instagram Ads', '1.000,00', '10 dias', 'Vendas', 'Roupas', 'Peças de boa qualidade. A entrega.', 'Os clientes compram recorrente.', 'Peças exclusivas', 'Peças exclusivas', 'Mulheres de 18 anos acima\r\n', 'Lojas de roupas locais, Shopee.\r\n', 'Manaus Amazonas\r\n', 'De segunda a sexta das 9h às 17h.\r\n\r\n', 'Temporada de praia, frio.\r\n', '', 'Quero vender mais.'),
(4, 'Sebastiana Santana Assis', '06128423410', '+5561997309345', 'auditoria@sebastianaedanielesportesme.com.br', 'Sebastiana e Daniel Esportes ME', 'Socia', 'www.sebastianaedanielesportesme.com.br', 'Sim', 'roupas esportivas', 'Vista-se bem', 'Surgiu da necessidade de empreender', 'Loja Física e virtual', 'Nunca', 'Instagram Ads', '1.000,00', '10 dias', 'Vendas', 'Roupas esportivas', 'Peças de boa qualidade. A entrega.', 'Os clientes compram recorrente.', 'Peças exclusivas', 'Peças exclusivas', 'Pessoas acima de  18 anos ', 'Lojas de roupas locais, Shopee.', 'Luziânia Goiás Brasil', 'De segunda a sexta das 9h às 17h.', 'Não', 'Não, podem alterar', 'Nenhuma'),
(5, 'Eduarda Silva', '06436369987', '+5561984483198', 'contato@edus.com.br', 'Edus LTDA', 'Socia', 'www.edus.com.br', 'sim', 'Alimento', 'Biscoito bom demais!', 'Nossa ', 'Física', 'Nunca', 'Instagram', '850,00', '7 dias', 'Vendas', 'Biscoitos', 'Nosso produto é bom', 'Nosso produto é bom', 'Nosso produto é bom', 'Nosso produto é bom', 'Todos', 'Belma', 'Goiás todo.', 'de segunda a sexta das 9h as 16h30', 'Não', 'Não, podem alterar', 'Nada'),
(6, 'Raul Queiros Alves', '07538456097', '+5575996448208', 'estoque@raulemanoeltelasltda.com.br', 'Raul e Manoel Telas Ltda', 'Socio Proprietário', 'www.raulemanoeltelasltda.com.br', 'Não temos o site, so', 'Fabricação de telas contra mosquitos', 'Queremos proteger contra mosquito!', 'Raul e Manoel Telas Ltda surgiu da alta demanda desse produto no Brasil todo, para proteger empresas e casas contra mosquitos.\r\n', 'Vender pelo WhatsApp', 'Não', 'Nenhum', '2.800,00', '5 dias', 'Fortalecimento da Marca', 'Telas de proteção contra mosquitos', 'Produto de alta qualidade, fabricação própria. Estrutura de alto custo.', 'Aprovado pelo nossos clientes.', 'Somos exigentes com a qualidade de nosso produto.', 'Oferecemos um produto de alta qualidade.', 'Todas as classes.', 'Persianas Rios está a mais de 10 anos no mercado e atua em nossa cidade.\r\n', 'Feira de Santana BA, e Brasil todo.', 'De segunda a sexta das 8h30 ás 17h. ', 'Não.', 'Não, vocês podem alterar.', 'Somos uma empresa nova e precisamos de ajuda na divulgação para vender e ser mais reconhecida no Brasil todo.'),
(7, 'Alice Lopez Assis', '07735961623', '+5577982832404', 'aliceepriscilalavanderialtda@gmail.com', 'Alice e Priscila Lavanderia Ltda', 'Socio Proprietário', '', 'Não temos o site', 'Lavanderia', 'Suas roupas limpas e secas!', 'A Lavanderia surgiu da alta demanda desse serviço.', 'Pessoas irem ao local lavar roupas.', 'Não', 'Folhetos', '1.800,00', '15 dias', 'Vendas', 'Lavagem de roupas.', 'Nossa lavanderia, atendente com muita qualidade. Temos uma área de espera com wifi grátis para os nossos clientes.', 'Aprovado pelo nossos clientes.', 'Somos exigentes com a qualidade do nosso serviço. ', 'Oferecemos qualidade.', 'Todas as classes.', 'Lava&Seca a mais de 10 anos no mercado e atua em nossa cidade.', 'Barreiras Bahia.', 'De segunda a domingo 24 horas. ', 'Não.', 'Não, vocês podem alterar.', 'Queremos que nossos clientes seja do bairro central.'),
(8, 'Eduarda Maria de Jesus', '061996218254', '+5561996218254', 'contato@eduardaalimentosltda.com.br', 'Eduarda Alimentos Ltda', 'Proprietário', 'www.eduardaalimentosltda.com.br', 'Sim', 'Alimentos', 'Comida de qualidade na sua mesa!', 'Um sonho de empreender no ramo alimentício, do interior de goiás para o Brasil.\r\n', 'Vender on-line.', 'Sim', 'TV', '10.500,00', '12 dias', 'Vendas', 'Biscoitos', 'Nossa receita é da vovó. Nosso desafio e alcançar distribuidores, mercados revendedores.', 'Aprovado pelo nossos clientes.\r\n', 'Somos exigentes com a qualidade do nosso biscoito.', 'Oferecemos qualidade.\r\n', 'Todas as classes.', 'Belma empresa de biscoito presente em nosso estado.\r\n', 'Brasil todo.', 'De segunda a domingo 24 horas. \r\n', 'Não.\r\n', 'Sim, mas vocês podem alterar.', 'Queremos clientes no Brasil todo.'),
(9, 'Alice Vanessa Marmelo', '06138119448', '+556138119448', 'sac@alicevanessavidrosme.com.br', 'Alice Vanessa Vidros ME', 'Dona', 'www.alicevanessavidrosme.com.br', 'Sim', 'Fabricação de Vidros Temperados', 'Somos fortes!', 'Alice Vanessa Vidros ME é uma empresa tentando suprir o mercado de vidros brasileiro.', 'Revenda no WhatsApp', 'Google de forma autônoma', 'TV E-mail marketing', '25.000,00', '3 dias', 'Vendas', 'Vidros Temperados', 'Qualidade. Dificuldade de transporte.', 'Satisfeitos', 'Qualidade superior.', 'Qualidade, preço.', 'Empresa para revenda.', 'Vidro SA forte no mercado brasileiro.', 'Brasil todo.', 'De segunda a sábado até as 14h.', 'Não', 'Sim, mas podem fazer.', 'Nada.'),
(10, 'Débora Sirino Ramos', '06736458127', '+5567986229608', 'vendas@deboraeenricoconstrucoesme.com.br', 'Débora e Enrico Construções ME', 'Administradora e Dona', 'www.deboraeenricoconstrucoesme.com.br', 'Sim', 'Construção Civil', 'Transformando sonhos em Realidade', 'Transformando sonhos em Realidade projetos de casa. ', 'Física', 'Google Ads sozinha', 'TV, rádio, folhetos e Google Ads.', '4.580,00', '10 dias', 'Solicitação de orçamentos', 'Projetos de construções.', 'Somos os melhores. Alto custo.', 'Bom', 'Somo especialistas. ', 'Fazemos o melhor com pouco.', 'Pessoas que querem fazer projetos da casa própria.', 'JA Engenharia, atua em Campo Grande.', 'Campo Grande MS Brasil', 'De segunda a sexta das 9h as 16h.', 'Podemos, pode nos indicar.', 'Nós, mas vocês também podem.', 'Queremos alcançar toda a cidade.'),
(11, 'Theo Brandão Romanes Alves', '06739725840', '+556739725840', 'advTheo@theoerauladvocacialtda.com.br', 'Theo e Raul Advocacia Ltda', 'Socio Proprietário', 'www.theoerauladvocacialtda.com.br', 'Sim é responsivo', 'Advocacia Tributária', '', 'Advocacia esta na nossa família desde meu tataravó. A empresa é solida no estado do MS. ', 'Física', 'Nunca', 'E-mail Marketing ', '80.500,00', '5 dias', 'Solicitação de Orçamentos', 'Serviços de consultoria jurídica, representação no ramo tributário do MS. Especializado no Agro.', 'Somos a primeira empresa a se especializar no Agro. conhecemos bem todas as leis do estado do MS. Alto custo.', 'Temos uma impecável reputação. ', 'Especialista, temos muita jurisprudência na área. ', 'Entregamos para vender qualquer ação.', 'Classe alta, empresas do Agro, produtor rural.', 'Laselva ADV cobrem nossa oferta. Rouba nossos clientes.', 'Todo o estado do MS.', 'De segunda a sexta das 8h30 às 17h.', 'Não', 'Não, vocês podem alterar.', 'Queremos fortalecer ainda mais nosso escritório.'),
(12, 'Leandro Souza Sanches', '06335795152', '+5563986710363', 'leandro@flaviaeleandrofotografiasltda.com.br', 'Flávia e Leandro Fotografias Ltda', 'Dono e fotografo', 'www.flaviaeleandrofotografiasltda.com.br', 'Sim', 'Fotografia', 'Eternize Momentos', 'Flávia e Leandro Fotografias Ltda é uma empresa onde eu e minha esposa atuamos, com grande ênfase em casamentos.', 'Física', 'Não', 'Instagram Ads', '45.630,00', '20 dias', ' Solicitação de Orçamentos', 'Cobertura de Casamentos', 'Melhores equipamentos fotográficos uma equipe treinada. ', 'Somo reconhecidos nacionalmente. E ganhamos destaque na revista Noivas. ', 'Estou a mais de 15 anos nesse ramo.', 'Registramos sentimentos em foto.', 'Casais, noivos. Classe Alta.  ', 'Rubia fotografia rouba nossos clientes. Equipamento péssimo. cobram muito barato.', 'Todo o Brasil, principalmente capitais.', 'De domingo a domingo.', 'Mês das noivas', 'Sim.', 'Quero alcançar novos clientes.'),
(13, 'Giovanni Garcia Matos', '06337728226', '+5563997503317', 'fiscal@giovannieiancontabilltda.com.br', 'Giovanni e Ian Contábil Ltda', 'Dono', 'www.giovannieiancontabilltda.com.br', 'Sim', 'Contábil', '', 'Giovanni e Ian Contábil Ltda é uma empresa que fundei assim que concluí a faculdade de contabilidade.', 'Física', 'Nunca', 'TV, rádio, Instagram.', '7.850,00', '12 dias', 'Solicitação de Orçamentos', 'Contabilidade para média e pequenas empresas.', 'Temos um cuidado na parte fiscal empresarial. Alto custo.', 'Boa', 'Temos pós na área financeira.', 'Vamos atuar de forma ética e dentro da lei para você pagar menos imposto.', 'Empresários.', 'Taubaté Contabilidade. ', 'Palmas TO.', 'De segunda a quinta das 8h30 às 16h.', 'Não.', 'Não, site feito na WIX', 'Não'),
(14, 'Lívia NagatoUzumaki', '04129285268', '+5541991487598', 'contabil@liviaenataliarestauranteltda.com.br', 'Lívia e Natália Restaurante Ltda', 'Proprietária', 'www.liviaenataliarestauranteltda.com.br', 'Sim', 'Restaurante de alta gastronomia', 'Descubra o melhor da gastronomia em Curitiba.', 'Lívia e Natália Restaurante Ltda é uma empresa que fundei ao me formar em gastronomia. Trabalho com dedicação.', 'Física.', 'Sim, com outra agência.', 'TV, rádio, Instagram e Google Ads.', '14.550,00', '3 dias', 'Mais reservas no restaurante.', 'Nosso Menu e pratos especiais.', 'Fazemos com todo cuidado e com melhores ingredientes. Alto custo.', 'Somos 4 estrelas no Google meu negócio.', 'Produtos de qualidade, saborosos.', 'eu faço da alimentação uma experiência única na vida de cada cliente.', 'Classe A +, A, B, alta, média alta.', 'Bairros de esquina', 'Curitiba PR', 'Domingo a Domingo das 10h as 12h30. E das 16h as 21h.', 'Sim, em feriados.', 'Não, vocês podem alterar.', 'Não.'),
(15, 'Eduarda Yasmin das Neves', '061996218254', '+5561996218254', 'contato@eduardaalimentosltda.com.br', 'Eduarda Alimentos Ltda', 'Proprietário', 'www.eduardaalimentosltda.com.br', 'Sim', 'Alimentos', 'Comida de qualidade na sua mesa!', 'Um sonho de empreender no ramo alimentício, do interior de goiás para o Brasil.\r\n', 'Vender on-line.', 'Sim', 'TV', '8.500,00', '12 dias', 'Vendas', 'Biscoitos.', 'Nossa receita é da vovó. Nosso desafio e alcançar distribuidores, mercados revendedores.\r\n', 'Aprovado pelo nossos clientes.', 'Somos exigentes com a qualidade do nosso biscoito.', 'Oferecemos qualidade.', 'Todas as classes.', 'Belma empresa de biscoito presente em nosso estado.\r\n', 'Brasil todo.\r\n', 'De segunda a domingo 24 horas. \r\n', 'Não.', 'Sim, mas vocês podem alterar.', 'Queremos clientes no Brasil todo.'),
(133, 'Flávia Tomaz Aquino', '06298654123', '+5562984483194', 'flavia@flaviaeleandrofotografiasltda.com.br', 'Flávia e Leandro Fotografias Ltda', 'Socia', 'www.flaviaeleandrofotografiasltda.com.br', 'Sim', 'Fotografia', 'Fotografe um momento', 'Nossa empresa...', 'Física', 'Nunca', 'Facebook Ads', '1.500,00', '10 dias', 'Venda', 'Fotografia', 'Nossos produtos...', 'Nossos produtos...', 'Nossos produtos...', 'Nossos produtos...', 'Acima de 18 anos', 'KO Fotografia', 'Mineiros - Goias', 'De segunda a sexta das 9h as 16h', 'Não', 'Não. Podem mexer', 'Nada');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `whatsapp` varchar(12) NOT NULL,
  `email` varchar(250) NOT NULL,
  `senha` char(255) NOT NULL,
  `data_criacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `cpf`, `nome`, `whatsapp`, `email`, `senha`, `data_criacao`) VALUES
(1, '48829666033', 'Larissa Silva', '+55623661912', 'larissa@midiajatai.com.br', '$2y$10$a5szpgz3mLe53QxDToLtveVxRJ55SF.fE0aTMWinzOyOd14SLQeJa', '2024-04-17 22:48:41'),
(2, '76652029006', 'Gabriel', '+55623661191', 'Gabriel@midiajatai.com.br', '$2y$10$NQXs4TKjlKpafQB2/BTf1eNIkYMkyKefO9hxXsbSI.N4.eRqxNcK2', '2024-04-17 22:57:31'),
(3, '55867525066', 'Luciana ', '+55623661912', 'luciana@midiajatai.com.br', '$2y$10$B3XK3Hq0dpqO54odZn9qSOs50HtOhMHqtsNCMn5Apd6je3U5WZ7ha', '2024-05-08 17:13:48');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `formulario`
--
ALTER TABLE `formulario`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `formulario`
--
ALTER TABLE `formulario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
