-- phpMyAdmin SQL Dump
-- version 4.0.10.12
-- http://www.phpmyadmin.net
--
-- Máquina: mysql01.veromath.com.br
-- Data de Criação: 30-Mar-2016 às 20:21
-- Versão do servidor: 5.1.54-rel12.6-log
-- versão do PHP: 5.6.14-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `veromath1`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `backup`
--

CREATE TABLE IF NOT EXISTS `backup` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `backup_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tabela` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `insert` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3177 ;

--
-- Extraindo dados da tabela `backup`
--

INSERT INTO `backup` (`id`, `backup_name`, `tabela`, `insert`) VALUES
(3020, 'Backup Teste (15/10/2014)', 'index_rows', '(2, ''Servico'', ''caminhao_munck_com_cesta_aerea_5.jpg'', ''Serviços'', ''Oferecemos serviços de alta qualidade, para atender as necessidades de nossos clientes.                                                                        '')'),
(3019, 'Backup Teste (15/10/2014)', 'index_rows', '(1, ''Equipamento'', ''caminhao_munck_ 50T_4.jpg'', ''Equipamentos'', '' A Veromath oferece o que há de mais moderno em equipamentos.                                                                                                                                                                                                                                '')'),
(3018, 'Backup Teste (15/10/2014)', 'index_news', '(5, ''Guindaste Bi-Articulado para Locação'', '''', ''                         <p>A Hyva Crane do Brasil entregou em outubro o Guindaste Bi-articulado HB 230 para a Veromath Transportes. Trata-se do primeiro Guindaste Bi-Articulado da Hyva Crane na Região Sudeste. /p>\r\n\r\n<p>Este guindaste é equipado com 5 lanças hidráulicas na primeira seção e mais 3 lanças hidráulicas na segunda seção. O alcance total deste Guindaste Bi-articualdo-munck é de 26 metros. A grande vantagem deste guindaste está no quesito segurança que hoje é muito exigido pelos clientes. O guindaste possui gerenciamento eletrônico da capacidade de elevação de carga. Quando o guindaste excede sua capacidade de elevação, o comando bloqueia todos as ações que possam trazer riscos à operação. Trata-se, portanto, de um guindaste articulado-munck com nível de segurança muito acima dos padrões dos guindastes articulados-munck nacionais, que normalmente só são equipados com válvulas de segurança nos cilindros, não possuem válvula de momento de carga e muito menos o gerenciamento eletrônico de carga. - Com a aquisição de guindastes com este sistema de segurança, a empresa visa uma redução significativa nos custos de manutenção preventiva e corretiva dos guindastes visto que eles não estarão mais expostos a operações de elevação com sobrecarga. </p>\r\n\r\n<p>A Madal Palfinger também oferece este equipamento de segurança como acessório em seus guindastes articulados-munck. O acessório é chamado de válvula OSK. </p>\r\n                                                '', ''2010-03-10'')'),
(3017, 'Backup Teste (15/10/2014)', 'index_news', '(4, ''Guindaste Articulado HC 361 Surpreende'', '''', ''            <p>O Novo Guindaste Articulado da Hyva Crane com capacidade para 36 toneladas métricas e alcance vertical de 28 metros, surpreendeu a equipe do Rodoanel no serviço de lançamento de lajes pré-moldadas nos Viadutos que estão sendo contruídos. O Serviço era executado anteriormente por um guindaste telescópico que tem um custo bem maior. O guindaste articulado (munck) da Hyva se destacou pela sua versatilidade pois além de lançar as lajes o guindaste ainda consegue transportá-las na obra. </p>\r\n\r\n<p>A Veromath aposta em soluções de elevação de carga que traga vantagem competitiva para seus clientes economizando tempo e custo. Os guindastes articulados especiais trazem vantagens nos quesitos de segurança agilidade e alcance. </p>                   '', ''2010-03-25'')'),
(3016, 'Backup Teste (15/10/2014)', 'index_news', '(3, ''Veromath recebe seus novos Guindastes Palfinger '', '''', ''            <p>A Veromath acaba de fechar com a Palfinger a compra de novos guindastes articulados para sua frota. Destaca-se o guindaste articulado da Madal Panfinger da linha PK que tem alcance de 26 metros. Este equipamento é extremamente eficiente na execução de serviços que demandam movimentos precisos. Seu alcance e sua rapidez o diferem em relação aos guindastes articulados - munck convencionais disponiveis no mercado de locação. </p>\r\n\r\n<p>O guindaste é dotado de sistemas de segurança que o impedem de elevar cargas acima de sua capacidade. O menor peso desse guindaste articulado é outro diferencial, pois aumenta a capacidade de carga do caminhão. </p>\r\n\r\n<p>A Veromath Transportes está sempre em busca da invoção e modernização de sua frota guindastes e encontrou na Madal Palfinger aquilo que buscava, uma empresa séria que preza pela qualidade e mordernização dos guindastes que fabrica. "Seguramente a Madal Palfinger produz os guindastes mais modernos e completos do País" comenta o diretor da Veromath, Renato Malheiro. </p>\r\n\r\n<p>Para informações adicionais entre em: www.madalpalfinger.com.br</p>\r\n\r\n                                    '', ''2010-07-09'')'),
(3015, 'Backup Teste (15/10/2014)', 'index_news', '(1, ''HYVA CRANE investe no Brasil.'', '''', ''                                                                        <p>Com matriz na Holanda, a Hyva possui fábricas no Brasil, China, Alemanha, Índia, Itália e Países Baixos. O grupo, fundado em 1979 opera em mais de 130 países, responde pela colocação de cerca de 1.600 funcionários que trabalham nas 35 subsidiárias e nas 11 plantas fabris. Principal provedor mundial de soluções em transporte para caminhões e implementos rodoviários, a Hyva – que possui mais de 25.000 clientes ativos – desenvolve, produz e distribui guindastes e componentes hidráulicos para sistemas de carregamento e descarregamento hidráulico para caminhões e semi-reboques. </p>\r\n\r\n<p>A Hyva do Brasil foi fundada em agosto de 1995, em maio de 2007 inaugurou uma nova planta fabril com 8.000 m2 de área construída e 12.000 m2 de área total, localizada no Bairro Santa Catarina em Caxias do Sul, hoje conta com uma força de trabalho de aproximadamente 180 funcionários. A Hyva do Brasill fabrica e comercializa cilindros hidráulicos telescópicos, kits hidráulicos e pisos móveis. Em fevereiro de 2008 expandiu seu portfólio e passou também a comercializar guindastes. </p>\r\n\r\n<p>Os guindastes da marca são fabricados na Itália pela Hyva Crane - antiga Amco Veba Ferrari, empresa adquirida pelo grupo Hyva em 2006 - uma das quatro maiores fabricantes de guindastes do mundo, que utiliza as mais avançadas tecnologias de processo e materiais com padrão de qualidade e precisão elevados. A companhia atua no mercado de fabricação de guindastes desde 1978 com penetração em mais de 100 países nos cinco continentes. Alguns dos diferenciais dos guindastes da marca são: guindaste compacto feito com aço de liga com alta resistência tornando-se um equipamento leve, ágil e veloz; possui um avançado sistema de segurança; possibilidade de operação do equipamento através de controle remoto; inova no mercado disponibilizando a FLY-JIB em todos os equipamentos possibilitando a operação do guindaste nos mais difíceis locais de acesso; possui um sistema de deslocamento suave; possui uma unidade de controle total que controla todos os aspectos de operação do guindaste, incluindo o controle de todos os acessórios; possui uma gama de capacidade de 1 a 74 Tm (tonelada/metro) e, inova mais uma vez no mercado oferecendo guindastes de 1 a 2 Tm (tonelada/metro). “Nossa estratégia de desenvolvimento no mercado de guindastes foi traçada em meados de 2007. Iniciamos com a comercialização dos produtos importados e a próxima fase é a fabricação de guindastes no Brasil para 2009, ainda estamos em fase de desenvolvimento de mercados e seleção de distribuidores, porém, já contamos com uma estrutura montada na própria fábrica para assistência técnica e peças de reposição. O fato é que estamos lançando no mercado um produto inovador, de alta qualidade, excelente custo X benefício e principalmente com características diferenciais que agregam valor ao produto, com garantia de fábrica”, sinaliza o diretor das operações da Hyva, no Brasil e Américas, Rogério De Antoni. </p>\r\n\r\n<p>Segundo o executivo, em agosto deste ano, a empresa participou da Equipo Mining em Minas Gerais - feira direcionada à indústria de mineração – “onde mostramos, pela primeira vez, os guindastes ao mercado do Sudeste do Brasil. Nossa participação nesta exposição só veio a confirmar que os setores de mineração e construção civil estão em ascensão. A demonstração dinâmica do guindaste, feita na ocasião, confirmou que é um produto inovador de excelente aceitação no mercado”, finaliza. </p>\r\n                                                                                                                        '', ''2010-09-25'')'),
(3014, 'Backup Teste (15/10/2014)', 'index_hr', '(''                 Locação de caminhões Munck e guindastes - Serviços de Içamento de Equipamentos, Montagem Industrial Remoção Técnica, Carga e descarga e Içamento com cesta aérea.\r\n                                                                                                                                                                                '')'),
(3013, 'Backup Teste (15/10/2014)', 'faq_img', '(2, ''Servico'', ''guindaste_articulado _munck_palfinger_3.jpg'')'),
(3012, 'Backup Teste (15/10/2014)', 'faq_img', '(1, ''Equipamento'', ''caminhao_munck_ 50T_1.jpg'')'),
(3010, 'Backup Teste (15/10/2014)', 'faq', '(9, ''servico'', 3, ''O que é Içamento?'', ''Içamento é a movimentação de materiais pesados há uma determinada altura. '')'),
(3011, 'Backup Teste (15/10/2014)', 'faq', '(10, ''servico'', 4, ''Qual a utilização de um guindaste?'', ''Guindaste é utilizado para movimentar equipamentos pesados, para a montagem de máquinas de grande e pequeno porte, e frequentemente utilizado em construções civis.'')'),
(3007, 'Backup Teste (15/10/2014)', 'faq', '(6, ''equipamento'', 5, ''O que é caminhão munck? '', ''Caminhão Munck é um equipamento hidráulico utilizado para carregamento, descarregamento, transporte e movimentação de máquinas e peças pesadas. '')'),
(3008, 'Backup Teste (15/10/2014)', 'faq', '(7, ''servico'', 2, ''O que é equipe de Remoção?'', ''É uma equipe de profissionais especializados e capacitados para remover peças e máquinas de grande e pequeno porte, utilizando-se de ferramentas especiais para o devido deslocamento. '')'),
(3009, 'Backup Teste (15/10/2014)', 'faq', '(8, ''equipamento'', 6, ''O que é Empilhadeira?'', ''Empilhadeira é uma máquina usada para carregar e descarregar mercadorias em geral, paletes, caixas, etc. Existem diversos tipos de empilhadeiras, e são mais utilizados em galpões fechados. Possuem capacidades diversas dependendo de cada empilhadeira. '')'),
(3005, 'Backup Teste (15/10/2014)', 'faq', '(4, ''equipamento'', 4, ''O que é ponte rolante?'', ''Ponte rolante é um equipamento utilizado para transportar cargas dentro de um espaço físico pré-determinado. É constituída de uma viga principal apoiada em suas extremidades por apoios rolantes. '')'),
(3006, 'Backup Teste (15/10/2014)', 'faq', '(5, ''servico'', 1, ''O que é estudo de rigging?'', ''Estudo de rigging é o planejamento da movimentação do equipamento, na qual se é verificado as condições gerais para um trabalho com segurança, considerando o peso da peça, ângulos máximos permitidos na tabela do guindaste para a boa realização dos trabalhos, assim como uma avaliação minuciosa do local e equipamentos necessários para o andamento dos serviços a serem prestados. O estudo do rigging é constituído através de um levantamento criterioso para a garantia de um trabalho com segurança. '')'),
(3000, 'Backup Teste (15/10/2014)', 'equipamentos_imgs', '(8, 37, '''', ''munck_madal_palfinger_modelo_PK_26000_2.jpg'', 1)'),
(3001, 'Backup Teste (15/10/2014)', 'equipamentos_imgs', '(8, 38, '''', ''munck_madal_palfinger_modelo_PK_26000_3.jpg'', 2)'),
(3002, 'Backup Teste (15/10/2014)', 'faq', '(1, ''equipamento'', 1, ''O que é guindaste?'', ''Guindaste é um equipamento utilizado para a elevação, e movimentação de peças e materiais pesados, que disponibiliza de mecanismos mecânicos capaz de movimentar cargas além da capacidade humana. '')'),
(3003, 'Backup Teste (15/10/2014)', 'faq', '(2, ''equipamento'', 2, ''O que é caminhão trucado?'', ''Caminhão trucado é um veículo que possui dois eixos traseiros capaz de suportar uma capacidade maior de peso em sua carroceria. '')'),
(3004, 'Backup Teste (15/10/2014)', 'faq', '(3, ''equipamento'', 3, ''O que é caminhão Toco?'', ''Caminhão toco é um veículo que possui carroceria menor que um caminhão trucado, possui apenas 1 eixo e suporta menos peso que um truck. '')'),
(2991, 'Backup Teste (15/10/2014)', 'equipamentos_imgs', '(4, 28, '''', ''caminhao_munck_com_cesta_aerea_5.jpg'', 4)'),
(2992, 'Backup Teste (15/10/2014)', 'equipamentos_imgs', '(4, 29, '''', ''caminhao_munck_com_cesta_aerea_6.jpg'', 5)'),
(2993, 'Backup Teste (15/10/2014)', 'equipamentos_imgs', '(4, 30, '''', ''caminhao_munck_com_cesta_aerea_7.jpg'', 6)'),
(2994, 'Backup Teste (15/10/2014)', 'equipamentos_imgs', '(5, 31, '''', ''guindaste_articulado _munck_palfinger_2.jpg'', 1)'),
(2995, 'Backup Teste (15/10/2014)', 'equipamentos_imgs', '(5, 32, '''', ''guindaste_articulado _munck_palfinger_3.jpg'', 2)'),
(2996, 'Backup Teste (15/10/2014)', 'equipamentos_imgs', '(5, 33, '''', ''guindaste_articulado _munck_palfinger_4.jpg'', 3)'),
(2997, 'Backup Teste (15/10/2014)', 'equipamentos_imgs', '(5, 34, '''', ''guindaste_articulado _munck_palfinger_5.jpg'', 4)'),
(2998, 'Backup Teste (15/10/2014)', 'equipamentos_imgs', '(5, 35, '''', ''guindaste_articulado _munck_palfinger_6.jpg'', 5)'),
(2999, 'Backup Teste (15/10/2014)', 'equipamentos_imgs', '(7, 36, '''', ''munck_madal_palfinger_modelo_PK_32080_2.jpg'', 1)'),
(2986, 'Backup Teste (15/10/2014)', 'equipamentos_imgs', '(2, 23, '''', ''caminhao_munck_6.jpg'', 5)'),
(2987, 'Backup Teste (15/10/2014)', 'equipamentos_imgs', '(3, 24, '''', ''carreta_com_munck_2.jpg'', 1)'),
(2988, 'Backup Teste (15/10/2014)', 'equipamentos_imgs', '(4, 25, '''', ''caminhao_munck_com_cesta_aerea_2.jpg'', 1)'),
(2989, 'Backup Teste (15/10/2014)', 'equipamentos_imgs', '(4, 26, '''', ''caminhao_munck_com_cesta_aerea_3.jpg'', 2)'),
(2990, 'Backup Teste (15/10/2014)', 'equipamentos_imgs', '(4, 27, '''', ''caminhao_munck_com_cesta_aerea_4.jpg'', 3)'),
(2979, 'Backup Teste (15/10/2014)', 'equipamentos_imgs', '(1, 15, '''', ''guindaste_munck_hyva_HC_501_3.jpg'', 3)'),
(2980, 'Backup Teste (15/10/2014)', 'equipamentos_imgs', '(1, 16, '''', ''caminhao_munck_ 50T_5.jpg'', 4)'),
(2981, 'Backup Teste (15/10/2014)', 'equipamentos_imgs', '(1, 17, '''', ''caminhao_munck_ 50T_6.jpg'', 5)'),
(2982, 'Backup Teste (15/10/2014)', 'equipamentos_imgs', '(2, 19, '''', ''caminhao_munck_2.jpg'', 3)'),
(2983, 'Backup Teste (15/10/2014)', 'equipamentos_imgs', '(2, 20, '''', ''caminhao_munck_3.jpg'', 2)'),
(2984, 'Backup Teste (15/10/2014)', 'equipamentos_imgs', '(2, 21, '''', ''caminhao_munck_4.jpg'', 3)'),
(2985, 'Backup Teste (15/10/2014)', 'equipamentos_imgs', '(2, 22, '''', ''caminhao_munck_5.jpg'', 4)'),
(2978, 'Backup Teste (15/10/2014)', 'equipamentos_imgs', '(1, 14, '''', ''caminhao_munck_ 50T_3.jpg'', 2)'),
(2977, 'Backup Teste (15/10/2014)', 'equipamentos_imgs', '(1, 13, '''', ''caminhao_munck_ 50T_2.jpg'', 1)'),
(2976, 'Backup Teste (15/10/2014)', 'equipamentos_equipamentos', '(8, 1, ''Munck Madal Palfinger modelo PK 26000'', ''munck_madal_palfinger_modelo_PK_26000_1.jpg'', ''Serviço Munck Cesta Aérea '', ''                        Este guindaste articulado possui alcance total de 22 metros e alcance hidrÃ¡ulico de 16 metros. Sï¿½o 4 lanï¿½as hidrÃ¡ulicas e 3 lanï¿½as mecï¿½nicas. Guindaste - munck vem de fï¿½brica equipado com vï¿½lvula HPLS que gerencia eletronicamente a carga que esta sendo elevada, impedindo que o guindaste trabalhe fora do grï¿½fico de carga. Este munck possui guincho de cabo, ideal para montagem de estruturas metï¿½licas e serviï¿½os em altura em geral. O PK 26000 ï¿½ um guindaste leve compacto e muito rï¿½pido ideal para locaï¿½ï¿½o em canteiro de obras, pois possui uma excelente capacidade de elevaï¿½ï¿½o e de carga.                         '', ''serv_caminhao_g.pdf'')'),
(2975, 'Backup Teste (15/10/2014)', 'equipamentos_equipamentos', '(7, 1, ''Munck Madal Palfinger modelo PK 32080'', ''munck_madal_palfinger_modelo_PK_32080_1.jpg'', ''Serviço Munck Cesta Aérea '', ''            Este guindaste articulado possui alcance total de 25 metros e alcance hidrï¿½ulico de 18 metros. Guindaste - munck vem de fï¿½brica equipado com vï¿½lvula HPLS que gerencia eletronicamente a carga que esta sendo elevada, impedindo que o guindaste trabalhe fora do grï¿½fico de carga. Este munck possui guincho de cabo, ideal para montagem de estruturas metï¿½licas e serviï¿½os em altura em geral.             '', ''serv_caminhao_g.pdf'')'),
(2974, 'Backup Teste (15/10/2014)', 'equipamentos_equipamentos', '(6, 2, ''Guindaste Bi- Articulado - Munck Hyva Crane'', ''guindaste_bi_articulado_munck_hyva_crane.jpg'', ''Serviço Munck Cesta Aérea '', ''O Guindaste Bi-Articulado Hyva Crane é um “caminhão munck” com alcance hidráulico de 33 metros de altura. O Guindaste possui 6 lanças hidráulicas e mais uma segunda articulação com 5 lanças, chamada de Fly-jib. Este Guindaste – munck pode ser utilizado com ou sem a Fly-jib.Sem a Fly-Jib o guindastes tem alcance total de 18 metros de altura. Este Guindaste possui bloqueio eletrônico de sobrecarga (o guindaste nunca trabalhará fora do gráfico de carga). Por ser montado na traseira, este guindaste – munck possui um maior aproveitamento do gráfico de carga pois a carga pode ser colocada bem mais próxima do centro de giro do Guindaste – munck. Vale ressaltar que a capacidade de qualquer Guindaste – munck é medida em tonelada métrica. Quanto maior a distância da carga em relação ao centro de giro do guindaste, menor será a sua capacidade, a relação é inversamente proporcional. '', ''serv_caminhao_g.pdf'')'),
(2973, 'Backup Teste (15/10/2014)', 'equipamentos_equipamentos', '(5, 2, ''Guindaste Articulado - Munck Palfinger'', ''guindaste_articulado _munck_palfinger_1.jpg'', ''Serviço Munck Cesta Aérea '', ''A precisão e rapidez de operação dos guindastes articulados - munck da Madal Palfinger possibilitam um ganho de produtividade para operações de içamento. O equipamento conta com um excelente gráfico de içamento de carga, maior alcance do mercado e pode transportar até 11 toneladas. Um dos grandes diferenciais dos Guindastes articulados - munck da Madal Palfinger é o sistema de segurança que permite ao equipamento elevar somente cargas com peso compátivel com o seu gráfico de carga. O equipamento possui alcance vertical de 26 metros. Os guindastes articulados (munck) da Palfinger são equipados com guincho de cabo que faz com que o equipamento execute boa parte dos serviços no qual seria necessário a locação de um guindaste telescópico de alta capacidade. O Guindaste modelo PK 32080 pode executar serviços com cesto aéreo para até duas pessoas ( a capacidade máxima do cesto aéreo é de 380 Kg de carga). '', ''serv_caminhao_g.pdf'')'),
(2972, 'Backup Teste (15/10/2014)', 'equipamentos_equipamentos', '(4, 1, ''Caminhão Munck com Cesta Áerea'', ''caminhao_munck_com_cesta_aerea_1.jpg'', ''Serviço Munck Cesta Aérea '', ''Caminhão guindauto com lança de 32 metros com cesta aérea para elevação de 2 pessoas. Ideal para: - Inspeção de viadutos - Montagem e manutenção de Comunicação Visual totens, fachadas, front light, back light e luminosos. - Inspeção de estruturas metálicas. - Auxílio para filmagens de eventos. '', ''serv_caminhao_g.pdf'')'),
(2971, 'Backup Teste (15/10/2014)', 'equipamentos_equipamentos', '(3, 1, ''Carreta com Munck'', ''carreta_com_munck_1.jpg'', ''Serviço Munck Cesta Aérea '', ''Locação mensal ou esporádica de carreta com munck (cavalo trucado equipado com guindaste articulado (munck para 25 tons/m). Lança de 20 metros na posição vertical. Ideal para: - Transporte e montagem de estruturas metálicas. - Transporte e içamento de postes e estacas. - Transportes de máquinas de até 12 metros de comprimento. '', ''serv_caminhao_g.pdf'')'),
(2955, 'Backup Teste (15/10/2014)', 'banco_de_imagens', '(53, 1, ''Equipamentos'', ''Munck_Madal Palfinger PK2600'', ''munck_madal_palfinger_modelo_PK_26000_2.jpg'', ''Munck Madal Palfinger PK 26000'')'),
(2956, 'Backup Teste (15/10/2014)', 'banco_de_imagens', '(54, 1, ''Equipamentos'', ''Munck_Madal Palfinger PK2600'', ''munck_madal_palfinger_modelo_PK_26000_3.jpg'', ''Munck Madal Palfinger PK 26000'')'),
(2957, 'Backup Teste (15/10/2014)', 'banco_de_imagens', '(55, 1, ''Equipamentos'', ''Guindaste Munck Hyva HC 501'', ''guindaste_munck_hyva_HC_501_2.jpg'', ''Guindaste Munck Hyva HC 501'')'),
(2958, 'Backup Teste (15/10/2014)', 'banco_de_imagens', '(56, 1, ''Equipamentos'', ''Guindaste Munck Hyva HC 501'', ''guindaste_munck_hyva_HC_501_3.jpg'', ''Guindaste Munck Hyva HC 501'')'),
(2959, 'Backup Teste (15/10/2014)', 'banco_de_imagens', '(57, 1, ''Equipamentos'', ''Guindaste Munck Hyva HC 501'', ''guindaste_munck_hyva_HC_501_4.jpg'', ''Guindaste Munck Hyva HC 501'')'),
(2960, 'Backup Teste (15/10/2014)', 'banco_de_imagens', '(58, 1, ''Equipamentos'', ''Guindaste Munck Hyva HC 501'', ''guindaste_munck_hyva_HC_501_5.jpg'', ''Guindaste Munck Hyva HC 501'')'),
(2961, 'Backup Teste (15/10/2014)', 'banco_de_imagens', '(59, 1, ''Equipamentos'', ''Guindaste Munck Hyva HC 501'', ''guindaste_munck_hyva_HC_501_6.jpg'', ''Guindaste Munck Hyva HC 501'')'),
(2962, 'Backup Teste (15/10/2014)', 'banco_de_imagens', '(60, 3, ''Serviços'', ''Remoção Téctica'', ''servico_munck_remocao_tecnica_2.jpg'', ''Serviço Munck Remoção Téctica '')'),
(2963, 'Backup Teste (15/10/2014)', 'banco_de_imagens', '(61, 3, ''Serviços'', ''Remoção Técnica'', ''servico_munck_remocao_tecnica_3.jpg'', ''Serviço Munck Remoção Técnica '')'),
(2964, 'Backup Teste (15/10/2014)', 'banco_de_imagens', '(62, 3, ''Serviços'', ''Carga e Descarga'', ''servico_munck_carga_descarga_2.jpg'', ''Serviço Munck Carga Descarga'')'),
(2965, 'Backup Teste (15/10/2014)', 'banco_de_imagens', '(63, 3, ''Serviços'', ''Cesta Aérea'', ''servico_munck_cesta_aerea_2.jpg'', ''Serviço Munck Cesta Aérea '')'),
(2966, 'Backup Teste (15/10/2014)', 'banco_de_imagens', '(64, 3, ''Serviços'', ''Cesta Aérea'', ''servico_munck_cesta_aerea_3.jpg'', ''Serviço Munck Cesta Aérea '')'),
(2967, 'Backup Teste (15/10/2014)', 'equipamentos_categoria', '(1, ''Caminhões Munk'')'),
(2968, 'Backup Teste (15/10/2014)', 'equipamentos_categoria', '(2, ''Guindastes'')'),
(2969, 'Backup Teste (15/10/2014)', 'equipamentos_equipamentos', '(1, 1, ''Caminhão Munck - até 50 toneladas métricas'', ''caminhao_munck_ 50T_1.jpg'', ''Serviço Munck Cesta Aérea '', ''<p>Caminhão VW 24-250 equipado com Guindaste Articulado (munck) com capacidade para 50 toneladas métricas, Alcance Vertical de 32,80 metros. Gerenciamento eletrônico de elevação de carga. São 11 lanças hidráulicas e uma lança mecânica. Este guindaste possui Fly-jib como acessório, transformando o equipamento em um guindaste Bi-articulado, quando necessário. O guindaste é controlado por controle remoto sem fio. </p>\r\n'', ''serv_caminhao_g.pdf'')'),
(2970, 'Backup Teste (15/10/2014)', 'equipamentos_equipamentos', '(2, 1, ''Caminhão Munck'', ''caminhao_munck_1.jpg'', ''Serviço Munck Cesta Aérea '', ''Caminhões trucados ou toco equipados com guindaste articulado - munck com capacidades entre 10 e 50 toneladas métricas. O alcance vertical pode atingir ate 33 metros. A Frota da Veromath é composta pelos moderníssimos guindastes da Madal Palfinger e da Hyva Crane, ambas lideres mundiais no segmento de guindastes articulados, popularmente conhecidos como munck. A empresa foi pioneira ao adquirir guindastes articulados - munck controlados através de controle remoto sem fio.'', ''serv_caminhao_g.pdf'')'),
(2949, 'Backup Teste (15/10/2014)', 'banco_de_imagens', '(46, 1, ''Equipamentos'', ''Carreta com Munck'', ''carreta_com_munck_2.jpg'', ''Carreta Munck Trucado Guindaste Articulado'')'),
(2950, 'Backup Teste (15/10/2014)', 'banco_de_imagens', '(47, 1, ''Equipamentos'', ''Guindasete Articulado Munck Palfinger '', ''guindaste_articulado _munck_palfinger_2.jpg'', ''Guindaste articulado Munck Palfinger'')'),
(2951, 'Backup Teste (15/10/2014)', 'banco_de_imagens', '(48, 1, ''Equipamentos'', ''Guindasete Articulado Munck Palfinger '', ''guindaste_articulado _munck_palfinger_3.jpg'', ''Guindaste articulado Munck Palfinger'')'),
(2952, 'Backup Teste (15/10/2014)', 'banco_de_imagens', '(49, 1, ''Equipamentos'', ''Guindasete Articulado Munck Palfinger '', ''guindaste_articulado _munck_palfinger_4.jpg'', ''Guindaste articulado Munck Palfinger'')'),
(2953, 'Backup Teste (15/10/2014)', 'banco_de_imagens', '(50, 1, ''Equipamentos'', ''Guindasete Articulado Munck Palfinger '', ''guindaste_articulado _munck_palfinger_5.jpg'', ''Guindaste articulado Munck Palfinger'')'),
(2954, 'Backup Teste (15/10/2014)', 'banco_de_imagens', '(51, 1, ''Equipamentos'', ''Guindasete Articulado Munck Palfinger '', ''guindaste_articulado _munck_palfinger_6.jpg'', ''Guindaste articulado Munck Palfinger'')'),
(2945, 'Backup Teste (15/10/2014)', 'banco_de_imagens', '(42, 1, ''Equipamentos'', ''Caminhão Munck com Cesta Aérea'', ''caminhao_munck_com_cesta_aerea_4.jpg'', ''Caminhão Munck Lança Cesta Aérea'')'),
(2946, 'Backup Teste (15/10/2014)', 'banco_de_imagens', '(43, 1, ''Equipamentos'', ''Caminhão Munck com Cesta Aérea'', ''caminhao_munck_com_cesta_aerea_5.jpg'', ''Caminhão Munck Lança Cesta Aérea'')'),
(2947, 'Backup Teste (15/10/2014)', 'banco_de_imagens', '(44, 1, ''Equipamentos'', ''Caminhão Munck com Cesta Aérea'', ''caminhao_munck_com_cesta_aerea_6.jpg'', ''Caminhão Munck Lança Cesta Aérea'')'),
(2948, 'Backup Teste (15/10/2014)', 'banco_de_imagens', '(45, 1, ''Equipamentos'', ''Caminhão Munck com Cesta Aérea'', ''caminhao_munck_com_cesta_aerea_7.jpg'', ''Caminhão Munck Lança Cesta Aérea'')'),
(2937, 'Backup Teste (15/10/2014)', 'banco_de_imagens', '(34, 1, ''Equipamentos'', ''Caminhão Munck 50 Toneladas'', ''caminhao_munck_ 50T_5.jpg'', ''Caminhão Munk 50 Toneladas Constellation'')'),
(2938, 'Backup Teste (15/10/2014)', 'banco_de_imagens', '(35, 1, ''Equipamentos'', ''Caminhão Munk'', ''caminhao_munck_2.jpg'', ''Caminhão Munck Worker Trucado '')'),
(2939, 'Backup Teste (15/10/2014)', 'banco_de_imagens', '(36, 1, ''Equipamentos'', ''Caminhão Munk'', ''caminhao_munck_3.jpg'', ''Caminhão Munck Worker Trucado '')'),
(2940, 'Backup Teste (15/10/2014)', 'banco_de_imagens', '(37, 1, ''Equipamentos'', ''Caminhão Munk'', ''caminhao_munck_4.jpg'', ''Caminhão Munck Worker Trucado '')'),
(2941, 'Backup Teste (15/10/2014)', 'banco_de_imagens', '(38, 1, ''Equipamentos'', ''Caminhão Munk'', ''caminhao_munck_5.jpg'', ''Caminhão Munck Worker Trucado '')'),
(2942, 'Backup Teste (15/10/2014)', 'banco_de_imagens', '(39, 1, ''Equipamentos'', ''Caminhão Munk'', ''caminhao_munck_6.jpg'', ''Caminhão Munck Worker Trucado '')'),
(2943, 'Backup Teste (15/10/2014)', 'banco_de_imagens', '(40, 1, ''Equipamentos'', ''Caminhão Munck com Cesta Aérea'', ''caminhao_munck_com_cesta_aerea_2.jpg'', ''Caminhão Munck Lança Cesta Aérea'')'),
(2944, 'Backup Teste (15/10/2014)', 'banco_de_imagens', '(41, 1, ''Equipamentos'', ''Caminhão Munck com Cesta Aérea'', ''caminhao_munck_com_cesta_aerea_3.jpg'', ''Caminhão Munck Lança Cesta Aérea'')'),
(2935, 'Backup Teste (15/10/2014)', 'banco_de_imagens', '(32, 1, ''Equipamentos'', ''Caminhão Munck 50 Toneladas'', ''caminhao_munck_ 50T_4.jpg'', ''Caminhão Munk 50 Toneladas Constellation'')'),
(2936, 'Backup Teste (15/10/2014)', 'banco_de_imagens', '(33, 1, ''Equipamentos'', ''Caminhão Munck 50 Toneladas'', ''caminhao_munck_ 50T_6.jpg'', ''Caminhão Munk 50 Toneladas Constellation'')'),
(2933, 'Backup Teste (15/10/2014)', 'banco_de_imagens', '(30, 1, ''Equipamentos'', ''Caminhão Munck 50 Toneladas'', ''caminhao_munck_ 50T_2.jpg'', ''Caminhão Munck 50 Toneladas Constellation'')'),
(2934, 'Backup Teste (15/10/2014)', 'banco_de_imagens', '(31, 1, ''Equipamentos'', ''Caminhão Munck 50 Toneladas'', ''caminhao_munck_ 50T_3.jpg'', ''Caminhão Munk 50 Toneladas Constellation'')'),
(2932, 'Backup Teste (15/10/2014)', 'banco_de_imagens', '(29, 4, ''Serviços Menu'', ''Serviço Cesta Aérea'', ''servico_cesta_aerea.png'', ''Serviço caminhão munck cesta aérea'')'),
(2928, 'Backup Teste (15/10/2014)', 'banco_de_imagens', '(25, 4, ''Serviços Menu'', ''Içamento de Equipamentos'', ''servico_icamento_menu.png'', ''Caminhao munck içamento equipamentos'')'),
(2929, 'Backup Teste (15/10/2014)', 'banco_de_imagens', '(26, 4, ''Serviços Menu'', ''Montagem Industrial'', ''servico_montagem_industrial_menu.png'', ''Caminhão Munck Serviço Montagem Industrial'')'),
(2930, 'Backup Teste (15/10/2014)', 'banco_de_imagens', '(27, 4, ''Serviços Menu'', ''Remoção Técnica'', ''servico_remocao_tecnica_menu.png'', ''Serviço Munck Remoção Técnica'')'),
(2931, 'Backup Teste (15/10/2014)', 'banco_de_imagens', '(28, 4, ''Serviços Menu'', ''Carga e Descarga '', ''servico_carga_descarga_menu.png'', ''Serviço Munck Carga Descarga'')'),
(2924, 'Backup Teste (15/10/2014)', 'banco_de_imagens', '(21, 3, ''Serviços'', ''Montagem Industrial'', ''servico_munck_montagem_industrial_1.jpg'', ''Serviço munck montagem industrial'')'),
(2925, 'Backup Teste (15/10/2014)', 'banco_de_imagens', '(22, 3, ''Serviços'', ''Remoção Téctica'', ''servico_munck_remocao_tecnica_1.jpg'', ''Serviço Tática Munck Remoção '')'),
(2926, 'Backup Teste (15/10/2014)', 'banco_de_imagens', '(23, 3, ''Serviços'', ''Carga e Descarga'', ''servico_munck_carga_descarga_1.jpg'', ''Serviço Munck Carga Descarga'')'),
(2927, 'Backup Teste (15/10/2014)', 'banco_de_imagens', '(24, 3, ''Serviços'', ''Cesta Aérea'', ''servico_munck_cesta_aerea_1.jpg'', ''Serviço Munck Cesta Aerea '')'),
(2919, 'Backup Teste (15/10/2014)', 'banco_de_imagens', '(16, 2, ''Diversos'', ''Caminhão Munck'', ''caminhao_munk_07.jpg'', ''Imagem Caminhão Munck'')'),
(2920, 'Backup Teste (15/10/2014)', 'banco_de_imagens', '(17, 2, ''Diversos'', ''Caminhão Munck'', ''caminhao_munk_08.jpg'', ''Imagem Caminhão Munck'')'),
(2921, 'Backup Teste (15/10/2014)', 'banco_de_imagens', '(18, 2, ''Diversos'', ''Caminhão Munck'', ''caminhao_munk_09.jpg'', ''Imagem Caminhão Munck'')'),
(2922, 'Backup Teste (15/10/2014)', 'banco_de_imagens', '(19, 2, ''Diversos'', ''Caminhão Munck'', ''caminhao_munk_10.jpg'', ''Imagem Caminhão Munck'')'),
(2923, 'Backup Teste (15/10/2014)', 'banco_de_imagens', '(20, 3, ''Serviços'', ''Içamento de Equipamento'', ''servico_munck_icamento_equipamentos_1.jpg'', ''Serviço munck içamento de equipamentos'')'),
(2916, 'Backup Teste (15/10/2014)', 'banco_de_imagens', '(13, 2, ''Diversos'', ''Caminhão Munck'', ''caminhao_munk_04.jpg'', ''Imagem Caminhão Munck'')'),
(2917, 'Backup Teste (15/10/2014)', 'banco_de_imagens', '(14, 2, ''Diversos'', ''Caminhão Munck'', ''caminhao_munk_05.jpg'', ''Imagem Caminhão Munck'')'),
(2918, 'Backup Teste (15/10/2014)', 'banco_de_imagens', '(15, 2, ''Diversos'', ''Caminhão Munck'', ''caminhao_munk_06.jpg'', ''Imagem Caminhão Munck'')'),
(2912, 'Backup Teste (15/10/2014)', 'banco_de_imagens', '(9, 1, ''Equipamentos'', ''Guindaste Munck Hyva HC 501'', ''guindaste_munck_hyva_HC_501_1.jpg'', ''Guindaste Munck Hyva HC 501'')'),
(2913, 'Backup Teste (15/10/2014)', 'banco_de_imagens', '(10, 2, ''Diversos'', ''Caminhão Munck'', ''caminhao_munk_01.jpg'', ''Imagem Caminhão Munck'')'),
(2914, 'Backup Teste (15/10/2014)', 'banco_de_imagens', '(11, 2, ''Diversos'', ''Caminhão Munck'', ''caminhao_munk_02.jpg'', ''Imagem Caminhão Munck'')'),
(2915, 'Backup Teste (15/10/2014)', 'banco_de_imagens', '(12, 2, ''Diversos'', ''Caminhão Munck'', ''caminhao_munk_03.jpg'', ''Imagem Caminhão Munck'')'),
(2911, 'Backup Teste (15/10/2014)', 'banco_de_imagens', '(8, 1, ''Equipamentos'', ''Munck_Madal Palfinger PK2600'', ''munck_madal_palfinger_modelo_PK_26000_1.jpg'', ''Munck Madal Palfinger PK 26000'')'),
(2905, 'Backup Teste (15/10/2014)', 'banco_de_imagens', '(2, 1, ''Equipamentos'', ''Caminhão Munk'', ''caminhao_munck_1.jpg'', ''Caminhão Munk Worker Trucado'')'),
(2906, 'Backup Teste (15/10/2014)', 'banco_de_imagens', '(3, 1, ''Equipamentos'', ''Carreta com Munck'', ''carreta_com_munck_1.jpg'', ''Carreta Munck Trucado Guindaste Articulado'')'),
(2907, 'Backup Teste (15/10/2014)', 'banco_de_imagens', '(4, 1, ''Equipamentos'', ''Caminhão Munck com Cesta Aérea'', ''caminhao_munck_com_cesta_aerea_1.jpg'', ''Caminhão Munck Lança Cesta Aérea'')'),
(2908, 'Backup Teste (15/10/2014)', 'banco_de_imagens', '(5, 1, ''Equipamentos'', ''Guindasete Articulado Munck Palfinger '', ''guindaste_articulado _munck_palfinger_1.jpg'', ''Guindaste articulado Munck Palfinger'')'),
(2909, 'Backup Teste (15/10/2014)', 'banco_de_imagens', '(6, 1, ''Equipamentos'', ''Guindaste Bi Articulado Munck Hyva Crane'', ''guindaste_bi_articulado_munck_hyva_crane_2.jpg'', ''Guindaste articulado munck hyva crane'')'),
(2910, 'Backup Teste (15/10/2014)', 'banco_de_imagens', '(7, 1, ''Equipamentos'', ''Munck Madal Palfunger modelo PK 32080'', ''munck_madal_palfinger_modelo_PK_32080_2.jpg'', ''Munck Madal Palfinger PK 32080'')'),
(2904, 'Backup Teste (15/10/2014)', 'banco_de_imagens', '(1, 1, ''Equipamentos'', ''Caminhão Munck 50 Toneladas'', ''caminhao_munck_ 50T_1.jpg'', ''Caminhão Munk 50 Toneladas Constellation'')'),
(3021, 'Backup Teste (15/10/2014)', 'index_slide', '(215, 1, ''caminhao_munk_01.jpg'')'),
(3022, 'Backup Teste (15/10/2014)', 'index_slide', '(216, 2, ''caminhao_munk_05.jpg'')'),
(3023, 'Backup Teste (15/10/2014)', 'index_slide', '(217, 3, ''caminhao_munk_08.jpg'')'),
(3024, 'Backup Teste (15/10/2014)', 'index_slide', '(218, 4, ''caminhao_munk_06.jpg'')'),
(3025, 'Backup Teste (15/10/2014)', 'servicos_servicos', '(1, 1, `class`, ''servico_icamento_menu.png'', ''servico_munck_icamento_equipamentos_1.jpg'', ''Serviço Munck Içamento de Equi'', ''Içamento de Equipamentos'', ''                                                                                         <p>Guindaste articulado (munck) com alcance de 21,5 metros de altura. Ideal para: - Montagem de estruturas metálicas. - Montagem de estruturas pré-moldadas de concreto. - Instalação e manutenção de cobertura de galpões. - Instalação e manutenção de Luminosos. </p>                                                                                                                                                                                               '')'),
(3026, 'Backup Teste (15/10/2014)', 'servicos_servicos', '(2, 2, `class`, ''servico_montagem_industrial_menu.png'', ''servico_munck_montagem_industrial_1.jpg'', ''Serviço Munk Montagem Industri'', ''Montagem Industrial'', ''            <p>A precisão e rapidez de operação dos guindastes articulados - munck da Madal Palfinger possibilitam um ganho de produtividade para operações de Montagem Industrial trazendo ao cliente uma significativa economia, pois além de executar os serviços de içamento, o munck também transporta a carga. A Veromath Transportes possui guindastes articulados - munck com até 26 metros de lança. O guindaste articulado - munck modelo PK 32080 da Veromath é capaz de elevar cargas com 5750 Kg a 18 metros de altura. Uma performance diferenciada por se tratar de um "munck".\r\n</p>                                                             '')'),
(3027, 'Backup Teste (15/10/2014)', 'servicos_servicos', '(3, 3, `class`, ''servico_remocao_tecnica_menu.png'', ''servico_munck_remocao_tecnica_1.jpg'', ''Serviço Remoção Técnica'', ''Remoção Técnica'', ''                                    <p>A Veromath Transportes possui uma equipe especializada para a execução de remoções técnicas de máquinas e equipamentos, mudança de layout industrial. A Veromath possui um dos guindastes articulados - munck com maior capacidade disponível no mercado, trata-se de um munck com capacidade para 47 toneladas métricas. A empresa possui Know-How na movimentação e transporte de: - Máquinas Injetoras - Grupo Gerador - Máquinas Operatrizes - Prensas - Tornos. </p>                                                 '')'),
(3028, 'Backup Teste (15/10/2014)', 'servicos_servicos', '(4, 4, `class`, ''servico_carga_descarga_menu.png'', ''servico_munck_carga_descarga_2.jpg'', ''Serviço Munck Carga Descarga'', ''Carga e descarga'', ''<p>Execução de serviços de carga e descarga com a utilização de guindastes articulados - munck ou guindastes telescópicos. A Veromath utiliza todos os equipamentos de apoio necessários para que as operações de içamento sejam feitas com segurança, e sem danos à carga. A empresa possui guindastes articulados - munck com capacidade de até 47 toneladas métricas. </p>             '')'),
(3029, 'Backup Teste (15/10/2014)', 'servicos_servicos', '(18, 0, `class`, ''servico_cesta_aerea.png'', ''servico_munck_cesta_aerea_1.jpg'', '''', ''Içamento com cesta aérea'', ''            <p>Içamento de pessoas com a utilização de cesta aérea acoplada em caminhões guindauto (munck) ou guindastes para diversas finalidades, dentre elas: - Inspeção de viadutos. - Montagem e manutenção de Comunicação Visual totens, fachadas, front light, back light e luminosos. - Inspeção e auxílio na montagem de estruturas metálicas. - Auxílio para filmagens de eventos. - Manutenção de máquinas. - Serviços diversos para construção civil.\r\n</p>            '')'),
(3030, 'Backup Teste (15/10/2014)', 'servicos_imgs', '(3, 1, '''', ''servico_munck_remocao_tecnica_2.jpg'', 1)'),
(3031, 'Backup Teste (15/10/2014)', 'servicos_imgs', '(3, 4, '''', ''servico_munck_remocao_tecnica_3.jpg'', 2)'),
(3032, 'Backup Teste (15/10/2014)', 'servicos_imgs', '(4, 6, '''', ''servico_munck_carga_descarga_1.jpg'', 1)'),
(3033, 'Backup Teste (15/10/2014)', 'servicos_imgs', '(18, 7, '''', ''servico_munck_cesta_aerea_2.jpg'', 1)'),
(3034, 'Backup Teste (15/10/2014)', 'servicos_imgs', '(18, 8, '''', ''servico_munck_cesta_aerea_3.jpg'', 2)'),
(3035, 'Backup Teste (15/10/2014)', 'sobre_empresa', '(1, ''A História da Veromath'', ''                        <p>A Veromath é uma empresa de Transportes que atua com excelência na locação de guindastes articulados – munck, guindastes telescópicos, caminhões trucados e carretas. </p>\r\n\r\n<p>A Veromath tem como missão, proporcionar serviços de alta qualidade em movimentação, elevação e transporte de cargas, que atendam as necessidades específicas de seus clientes. Para tanto, a Veromath possui uma equipe engajada com seus valores e objetivos, uma excelente estrutura de tecnologia da informação e guindastes de última geração. </p>\r\n\r\n<p>A empresa possui frota própria de guindastes articulados - munck, guindastes telescópicos, caminhões truck e carretas para carga seca. Dentre os guindastes - munck disponíveis para locação, merecem destaque os Guindaste Articulados da Madal Palfinger com alcance de 26 metros de altura e o Guindaste Bi-Articualdo da Hyva com alcance de 28 metros. </p>                                                             '')'),
(3036, 'Backup Teste (15/10/2014)', 'sobre_imgs', '(1, ''caminhao_munk_10.jpg'')'),
(3037, 'Backup Teste (15/10/2014)', 'sobre_imgs', '(2, ''servico_munck_montagem_industrial_1.jpg'')'),
(3038, 'Backup Teste (15/10/2014)', 'usuarios', '(8, ''Teste'', ''teste@teste.com'', ''teste'', ''Administrador'')'),
(3039, 'Backup2 (15/10/2014)', 'banco_de_imagens', '(53, 1, ''Equipamentos'', ''Munck_Madal Palfinger PK2600'', ''munck_madal_palfinger_modelo_PK_26000_2.jpg'', ''Munck Madal Palfinger PK 26000'')'),
(3040, 'Backup2 (15/10/2014)', 'banco_de_imagens', '(54, 1, ''Equipamentos'', ''Munck_Madal Palfinger PK2600'', ''munck_madal_palfinger_modelo_PK_26000_3.jpg'', ''Munck Madal Palfinger PK 26000'')'),
(3041, 'Backup2 (15/10/2014)', 'banco_de_imagens', '(55, 1, ''Equipamentos'', ''Guindaste Munck Hyva HC 501'', ''guindaste_munck_hyva_HC_501_2.jpg'', ''Guindaste Munck Hyva HC 501'')'),
(3042, 'Backup2 (15/10/2014)', 'banco_de_imagens', '(56, 1, ''Equipamentos'', ''Guindaste Munck Hyva HC 501'', ''guindaste_munck_hyva_HC_501_3.jpg'', ''Guindaste Munck Hyva HC 501'')'),
(3043, 'Backup2 (15/10/2014)', 'banco_de_imagens', '(57, 1, ''Equipamentos'', ''Guindaste Munck Hyva HC 501'', ''guindaste_munck_hyva_HC_501_4.jpg'', ''Guindaste Munck Hyva HC 501'')'),
(3044, 'Backup2 (15/10/2014)', 'banco_de_imagens', '(58, 1, ''Equipamentos'', ''Guindaste Munck Hyva HC 501'', ''guindaste_munck_hyva_HC_501_5.jpg'', ''Guindaste Munck Hyva HC 501'')'),
(3045, 'Backup2 (15/10/2014)', 'banco_de_imagens', '(59, 1, ''Equipamentos'', ''Guindaste Munck Hyva HC 501'', ''guindaste_munck_hyva_HC_501_6.jpg'', ''Guindaste Munck Hyva HC 501'')'),
(3046, 'Backup2 (15/10/2014)', 'banco_de_imagens', '(60, 3, ''Serviços'', ''Remoção Téctica'', ''servico_munck_remocao_tecnica_2.jpg'', ''Serviço Munck Remoção Téctica '')'),
(3047, 'Backup2 (15/10/2014)', 'banco_de_imagens', '(61, 3, ''Serviços'', ''Remoção Técnica'', ''servico_munck_remocao_tecnica_3.jpg'', ''Serviço Munck Remoção Técnica '')'),
(3048, 'Backup2 (15/10/2014)', 'banco_de_imagens', '(62, 3, ''Serviços'', ''Carga e Descarga'', ''servico_munck_carga_descarga_2.jpg'', ''Serviço Munck Carga Descarga'')'),
(3049, 'Backup2 (15/10/2014)', 'banco_de_imagens', '(63, 3, ''Serviços'', ''Cesta Aérea'', ''servico_munck_cesta_aerea_2.jpg'', ''Serviço Munck Cesta Aérea '')'),
(3050, 'Backup2 (15/10/2014)', 'banco_de_imagens', '(64, 3, ''Serviços'', ''Cesta Aérea'', ''servico_munck_cesta_aerea_3.jpg'', ''Serviço Munck Cesta Aérea '')'),
(3051, 'Backup2 (15/10/2014)', 'banco_de_imagens', '(46, 1, ''Equipamentos'', ''Carreta com Munck'', ''carreta_com_munck_2.jpg'', ''Carreta Munck Trucado Guindaste Articulado'')'),
(3052, 'Backup2 (15/10/2014)', 'banco_de_imagens', '(47, 1, ''Equipamentos'', ''Guindasete Articulado Munck Palfinger '', ''guindaste_articulado _munck_palfinger_2.jpg'', ''Guindaste articulado Munck Palfinger'')'),
(3053, 'Backup2 (15/10/2014)', 'banco_de_imagens', '(48, 1, ''Equipamentos'', ''Guindasete Articulado Munck Palfinger '', ''guindaste_articulado _munck_palfinger_3.jpg'', ''Guindaste articulado Munck Palfinger'')'),
(3054, 'Backup2 (15/10/2014)', 'banco_de_imagens', '(49, 1, ''Equipamentos'', ''Guindasete Articulado Munck Palfinger '', ''guindaste_articulado _munck_palfinger_4.jpg'', ''Guindaste articulado Munck Palfinger'')'),
(3055, 'Backup2 (15/10/2014)', 'banco_de_imagens', '(50, 1, ''Equipamentos'', ''Guindasete Articulado Munck Palfinger '', ''guindaste_articulado _munck_palfinger_5.jpg'', ''Guindaste articulado Munck Palfinger'')'),
(3056, 'Backup2 (15/10/2014)', 'banco_de_imagens', '(51, 1, ''Equipamentos'', ''Guindasete Articulado Munck Palfinger '', ''guindaste_articulado _munck_palfinger_6.jpg'', ''Guindaste articulado Munck Palfinger'')'),
(3057, 'Backup2 (15/10/2014)', 'banco_de_imagens', '(42, 1, ''Equipamentos'', ''Caminhão Munck com Cesta Aérea'', ''caminhao_munck_com_cesta_aerea_4.jpg'', ''Caminhão Munck Lança Cesta Aérea'')'),
(3058, 'Backup2 (15/10/2014)', 'banco_de_imagens', '(43, 1, ''Equipamentos'', ''Caminhão Munck com Cesta Aérea'', ''caminhao_munck_com_cesta_aerea_5.jpg'', ''Caminhão Munck Lança Cesta Aérea'')'),
(3059, 'Backup2 (15/10/2014)', 'banco_de_imagens', '(44, 1, ''Equipamentos'', ''Caminhão Munck com Cesta Aérea'', ''caminhao_munck_com_cesta_aerea_6.jpg'', ''Caminhão Munck Lança Cesta Aérea'')'),
(3060, 'Backup2 (15/10/2014)', 'banco_de_imagens', '(45, 1, ''Equipamentos'', ''Caminhão Munck com Cesta Aérea'', ''caminhao_munck_com_cesta_aerea_7.jpg'', ''Caminhão Munck Lança Cesta Aérea'')'),
(3061, 'Backup2 (15/10/2014)', 'banco_de_imagens', '(34, 1, ''Equipamentos'', ''Caminhão Munck 50 Toneladas'', ''caminhao_munck_ 50T_5.jpg'', ''Caminhão Munk 50 Toneladas Constellation'')'),
(3062, 'Backup2 (15/10/2014)', 'banco_de_imagens', '(35, 1, ''Equipamentos'', ''Caminhão Munk'', ''caminhao_munck_2.jpg'', ''Caminhão Munck Worker Trucado '')'),
(3063, 'Backup2 (15/10/2014)', 'banco_de_imagens', '(36, 1, ''Equipamentos'', ''Caminhão Munk'', ''caminhao_munck_3.jpg'', ''Caminhão Munck Worker Trucado '')'),
(3064, 'Backup2 (15/10/2014)', 'banco_de_imagens', '(37, 1, ''Equipamentos'', ''Caminhão Munk'', ''caminhao_munck_4.jpg'', ''Caminhão Munck Worker Trucado '')'),
(3065, 'Backup2 (15/10/2014)', 'banco_de_imagens', '(38, 1, ''Equipamentos'', ''Caminhão Munk'', ''caminhao_munck_5.jpg'', ''Caminhão Munck Worker Trucado '')'),
(3066, 'Backup2 (15/10/2014)', 'banco_de_imagens', '(39, 1, ''Equipamentos'', ''Caminhão Munk'', ''caminhao_munck_6.jpg'', ''Caminhão Munck Worker Trucado '')'),
(3067, 'Backup2 (15/10/2014)', 'banco_de_imagens', '(40, 1, ''Equipamentos'', ''Caminhão Munck com Cesta Aérea'', ''caminhao_munck_com_cesta_aerea_2.jpg'', ''Caminhão Munck Lança Cesta Aérea'')'),
(3068, 'Backup2 (15/10/2014)', 'banco_de_imagens', '(41, 1, ''Equipamentos'', ''Caminhão Munck com Cesta Aérea'', ''caminhao_munck_com_cesta_aerea_3.jpg'', ''Caminhão Munck Lança Cesta Aérea'')'),
(3069, 'Backup2 (15/10/2014)', 'banco_de_imagens', '(32, 1, ''Equipamentos'', ''Caminhão Munck 50 Toneladas'', ''caminhao_munck_ 50T_4.jpg'', ''Caminhão Munk 50 Toneladas Constellation'')'),
(3070, 'Backup2 (15/10/2014)', 'banco_de_imagens', '(33, 1, ''Equipamentos'', ''Caminhão Munck 50 Toneladas'', ''caminhao_munck_ 50T_6.jpg'', ''Caminhão Munk 50 Toneladas Constellation'')'),
(3071, 'Backup2 (15/10/2014)', 'banco_de_imagens', '(30, 1, ''Equipamentos'', ''Caminhão Munck 50 Toneladas'', ''caminhao_munck_ 50T_2.jpg'', ''Caminhão Munck 50 Toneladas Constellation'')'),
(3072, 'Backup2 (15/10/2014)', 'banco_de_imagens', '(31, 1, ''Equipamentos'', ''Caminhão Munck 50 Toneladas'', ''caminhao_munck_ 50T_3.jpg'', ''Caminhão Munk 50 Toneladas Constellation'')'),
(3073, 'Backup2 (15/10/2014)', 'banco_de_imagens', '(29, 4, ''Serviços Menu'', ''Serviço Cesta Aérea'', ''servico_cesta_aerea.png'', ''Serviço caminhão munck cesta aérea'')'),
(3074, 'Backup2 (15/10/2014)', 'banco_de_imagens', '(25, 4, ''Serviços Menu'', ''Içamento de Equipamentos'', ''servico_icamento_menu.png'', ''Caminhao munck içamento equipamentos'')'),
(3075, 'Backup2 (15/10/2014)', 'banco_de_imagens', '(26, 4, ''Serviços Menu'', ''Montagem Industrial'', ''servico_montagem_industrial_menu.png'', ''Caminhão Munck Serviço Montagem Industrial'')'),
(3076, 'Backup2 (15/10/2014)', 'banco_de_imagens', '(27, 4, ''Serviços Menu'', ''Remoção Técnica'', ''servico_remocao_tecnica_menu.png'', ''Serviço Munck Remoção Técnica'')'),
(3077, 'Backup2 (15/10/2014)', 'banco_de_imagens', '(28, 4, ''Serviços Menu'', ''Carga e Descarga '', ''servico_carga_descarga_menu.png'', ''Serviço Munck Carga Descarga'')'),
(3078, 'Backup2 (15/10/2014)', 'banco_de_imagens', '(21, 3, ''Serviços'', ''Montagem Industrial'', ''servico_munck_montagem_industrial_1.jpg'', ''Serviço munck montagem industrial'')'),
(3079, 'Backup2 (15/10/2014)', 'banco_de_imagens', '(22, 3, ''Serviços'', ''Remoção Téctica'', ''servico_munck_remocao_tecnica_1.jpg'', ''Serviço Tática Munck Remoção '')'),
(3080, 'Backup2 (15/10/2014)', 'banco_de_imagens', '(23, 3, ''Serviços'', ''Carga e Descarga'', ''servico_munck_carga_descarga_1.jpg'', ''Serviço Munck Carga Descarga'')'),
(3081, 'Backup2 (15/10/2014)', 'banco_de_imagens', '(24, 3, ''Serviços'', ''Cesta Aérea'', ''servico_munck_cesta_aerea_1.jpg'', ''Serviço Munck Cesta Aerea '')'),
(3082, 'Backup2 (15/10/2014)', 'banco_de_imagens', '(16, 2, ''Diversos'', ''Caminhão Munck'', ''caminhao_munk_07.jpg'', ''Imagem Caminhão Munck'')'),
(3083, 'Backup2 (15/10/2014)', 'banco_de_imagens', '(17, 2, ''Diversos'', ''Caminhão Munck'', ''caminhao_munk_08.jpg'', ''Imagem Caminhão Munck'')'),
(3084, 'Backup2 (15/10/2014)', 'banco_de_imagens', '(18, 2, ''Diversos'', ''Caminhão Munck'', ''caminhao_munk_09.jpg'', ''Imagem Caminhão Munck'')'),
(3085, 'Backup2 (15/10/2014)', 'banco_de_imagens', '(19, 2, ''Diversos'', ''Caminhão Munck'', ''caminhao_munk_10.jpg'', ''Imagem Caminhão Munck'')'),
(3086, 'Backup2 (15/10/2014)', 'banco_de_imagens', '(20, 3, ''Serviços'', ''Içamento de Equipamento'', ''servico_munck_icamento_equipamentos_1.jpg'', ''Serviço munck içamento de equipamentos'')'),
(3087, 'Backup2 (15/10/2014)', 'banco_de_imagens', '(13, 2, ''Diversos'', ''Caminhão Munck'', ''caminhao_munk_04.jpg'', ''Imagem Caminhão Munck'')'),
(3088, 'Backup2 (15/10/2014)', 'banco_de_imagens', '(14, 2, ''Diversos'', ''Caminhão Munck'', ''caminhao_munk_05.jpg'', ''Imagem Caminhão Munck'')'),
(3089, 'Backup2 (15/10/2014)', 'banco_de_imagens', '(15, 2, ''Diversos'', ''Caminhão Munck'', ''caminhao_munk_06.jpg'', ''Imagem Caminhão Munck'')'),
(3090, 'Backup2 (15/10/2014)', 'banco_de_imagens', '(9, 1, ''Equipamentos'', ''Guindaste Munck Hyva HC 501'', ''guindaste_munck_hyva_HC_501_1.jpg'', ''Guindaste Munck Hyva HC 501'')'),
(3091, 'Backup2 (15/10/2014)', 'banco_de_imagens', '(10, 2, ''Diversos'', ''Caminhão Munck'', ''caminhao_munk_01.jpg'', ''Imagem Caminhão Munck'')'),
(3092, 'Backup2 (15/10/2014)', 'banco_de_imagens', '(11, 2, ''Diversos'', ''Caminhão Munck'', ''caminhao_munk_02.jpg'', ''Imagem Caminhão Munck'')'),
(3093, 'Backup2 (15/10/2014)', 'banco_de_imagens', '(12, 2, ''Diversos'', ''Caminhão Munck'', ''caminhao_munk_03.jpg'', ''Imagem Caminhão Munck'')'),
(3094, 'Backup2 (15/10/2014)', 'banco_de_imagens', '(8, 1, ''Equipamentos'', ''Munck_Madal Palfinger PK2600'', ''munck_madal_palfinger_modelo_PK_26000_1.jpg'', ''Munck Madal Palfinger PK 26000'')'),
(3095, 'Backup2 (15/10/2014)', 'banco_de_imagens', '(2, 1, ''Equipamentos'', ''Caminhão Munk'', ''caminhao_munck_1.jpg'', ''Caminhão Munk Worker Trucado'')'),
(3096, 'Backup2 (15/10/2014)', 'banco_de_imagens', '(3, 1, ''Equipamentos'', ''Carreta com Munck'', ''carreta_com_munck_1.jpg'', ''Carreta Munck Trucado Guindaste Articulado'')');
INSERT INTO `backup` (`id`, `backup_name`, `tabela`, `insert`) VALUES
(3097, 'Backup2 (15/10/2014)', 'banco_de_imagens', '(4, 1, ''Equipamentos'', ''Caminhão Munck com Cesta Aérea'', ''caminhao_munck_com_cesta_aerea_1.jpg'', ''Caminhão Munck Lança Cesta Aérea'')'),
(3098, 'Backup2 (15/10/2014)', 'banco_de_imagens', '(5, 1, ''Equipamentos'', ''Guindasete Articulado Munck Palfinger '', ''guindaste_articulado _munck_palfinger_1.jpg'', ''Guindaste articulado Munck Palfinger'')'),
(3099, 'Backup2 (15/10/2014)', 'banco_de_imagens', '(6, 1, ''Equipamentos'', ''Guindaste Bi Articulado Munck Hyva Crane'', ''guindaste_bi_articulado_munck_hyva_crane_2.jpg'', ''Guindaste articulado munck hyva crane'')'),
(3100, 'Backup2 (15/10/2014)', 'banco_de_imagens', '(7, 1, ''Equipamentos'', ''Munck Madal Palfunger modelo PK 32080'', ''munck_madal_palfinger_modelo_PK_32080_2.jpg'', ''Munck Madal Palfinger PK 32080'')'),
(3101, 'Backup2 (15/10/2014)', 'banco_de_imagens', '(1, 1, ''Equipamentos'', ''Caminhão Munck 50 Toneladas'', ''caminhao_munck_ 50T_1.jpg'', ''Caminhão Munk 50 Toneladas Constellation'')'),
(3102, 'Backup2 (15/10/2014)', 'equipamentos_categoria', '(1, ''Caminhões Munk'')'),
(3103, 'Backup2 (15/10/2014)', 'equipamentos_categoria', '(2, ''Guindastes'')'),
(3104, 'Backup2 (15/10/2014)', 'equipamentos_equipamentos', '(8, 1, ''Munck Madal Palfinger modelo PK 26000'', ''munck_madal_palfinger_modelo_PK_26000_1.jpg'', ''Caminhão Munk 50 Toneladas Constellation'', ''                                  Este guindaste articulado possui alcance total de 22 metros e alcance hidráulico de 16 metros. São 4 lanças hidráulicas e 3 lanças mecânicas. Guindaste - munck vem de fábrica equipado com válvula HPLS que gerencia eletronicamente a carga que esta sendo elevada, impedindo que o guindaste trabalhe fora do gráfico de carga. Este munck possui guincho de cabo, ideal para montagem de estruturas metálicas e serviços em altura em geral. O PK 26000 é um guindaste leve compacto e muito rápido ideal para locação em canteiro de obras, pois possui uma excelente capacidade de elevação e de carga.'', ''topicos.pdf'')'),
(3105, 'Backup2 (15/10/2014)', 'equipamentos_equipamentos', '(7, 1, ''Munck Madal Palfinger modelo PK 32080'', ''munck_madal_palfinger_modelo_PK_32080_1.jpg'', ''Caminhão Munk 50 Toneladas Constellation'', ''            Este guindaste articulado possui alcance total de 25 metros e alcance hidrï¿½ulico de 18 metros. Guindaste - munck vem de fï¿½brica equipado com vï¿½lvula HPLS que gerencia eletronicamente a carga que esta sendo elevada, impedindo que o guindaste trabalhe fora do grï¿½fico de carga. Este munck possui guincho de cabo, ideal para montagem de estruturas metï¿½licas e serviï¿½os em altura em geral.             '', ''serv_caminhao_g.pdf'')'),
(3106, 'Backup2 (15/10/2014)', 'equipamentos_equipamentos', '(6, 2, ''Guindaste Bi- Articulado - Munck Hyva Crane'', ''guindaste_bi_articulado_munck_hyva_crane.jpg'', ''Caminhão Munk 50 Toneladas Constellation'', ''O Guindaste Bi-Articulado Hyva Crane é um “caminhão munck” com alcance hidráulico de 33 metros de altura. O Guindaste possui 6 lanças hidráulicas e mais uma segunda articulação com 5 lanças, chamada de Fly-jib. Este Guindaste – munck pode ser utilizado com ou sem a Fly-jib.Sem a Fly-Jib o guindastes tem alcance total de 18 metros de altura. Este Guindaste possui bloqueio eletrônico de sobrecarga (o guindaste nunca trabalhará fora do gráfico de carga). Por ser montado na traseira, este guindaste – munck possui um maior aproveitamento do gráfico de carga pois a carga pode ser colocada bem mais próxima do centro de giro do Guindaste – munck. Vale ressaltar que a capacidade de qualquer Guindaste – munck é medida em tonelada métrica. Quanto maior a distância da carga em relação ao centro de giro do guindaste, menor será a sua capacidade, a relação é inversamente proporcional. '', ''serv_caminhao_g.pdf'')'),
(3107, 'Backup2 (15/10/2014)', 'equipamentos_equipamentos', '(5, 2, ''Guindaste Articulado - Munck Palfinger'', ''guindaste_articulado _munck_palfinger_1.jpg'', ''Caminhão Munk 50 Toneladas Constellation'', ''A precisão e rapidez de operação dos guindastes articulados - munck da Madal Palfinger possibilitam um ganho de produtividade para operações de içamento. O equipamento conta com um excelente gráfico de içamento de carga, maior alcance do mercado e pode transportar até 11 toneladas. Um dos grandes diferenciais dos Guindastes articulados - munck da Madal Palfinger é o sistema de segurança que permite ao equipamento elevar somente cargas com peso compátivel com o seu gráfico de carga. O equipamento possui alcance vertical de 26 metros. Os guindastes articulados (munck) da Palfinger são equipados com guincho de cabo que faz com que o equipamento execute boa parte dos serviços no qual seria necessário a locação de um guindaste telescópico de alta capacidade. O Guindaste modelo PK 32080 pode executar serviços com cesto aéreo para até duas pessoas ( a capacidade máxima do cesto aéreo é de 380 Kg de carga). '', ''serv_caminhao_g.pdf'')'),
(3108, 'Backup2 (15/10/2014)', 'equipamentos_equipamentos', '(4, 1, ''Caminhão Munck com Cesta Áerea'', ''caminhao_munck_com_cesta_aerea_1.jpg'', ''Caminhão Munk 50 Toneladas Constellation'', ''Caminhão guindauto com lança de 32 metros com cesta aérea para elevação de 2 pessoas. Ideal para: - Inspeção de viadutos - Montagem e manutenção de Comunicação Visual totens, fachadas, front light, back light e luminosos. - Inspeção de estruturas metálicas. - Auxílio para filmagens de eventos. '', ''serv_caminhao_g.pdf'')'),
(3109, 'Backup2 (15/10/2014)', 'equipamentos_equipamentos', '(3, 1, ''Carreta com Munck'', ''carreta_com_munck_1.jpg'', ''Caminhão Munk 50 Toneladas Constellation'', ''Locação mensal ou esporádica de carreta com munck (cavalo trucado equipado com guindaste articulado (munck para 25 tons/m). Lança de 20 metros na posição vertical. Ideal para: - Transporte e montagem de estruturas metálicas. - Transporte e içamento de postes e estacas. - Transportes de máquinas de até 12 metros de comprimento. '', ''serv_caminhao_g.pdf'')'),
(3110, 'Backup2 (15/10/2014)', 'equipamentos_equipamentos', '(1, 1, ''Caminhão Munck - até 50 toneladas métricas'', ''caminhao_munck_ 50T_1.jpg'', ''Caminhão Munk 50 Toneladas Constellation'', ''<p>Caminhão VW 24-250 equipado com Guindaste Articulado (munck) com capacidade para 50 toneladas métricas, Alcance Vertical de 32,80 metros. Gerenciamento eletrônico de elevação de carga. São 11 lanças hidráulicas e uma lança mecânica. Este guindaste possui Fly-jib como acessório, transformando o equipamento em um guindaste Bi-articulado, quando necessário. O guindaste é controlado por controle remoto sem fio. </p>\r\n'', ''serv_caminhao_g.pdf'')'),
(3111, 'Backup2 (15/10/2014)', 'equipamentos_equipamentos', '(2, 1, ''Caminhão Munck'', ''caminhao_munck_1.jpg'', ''Caminhão Munk 50 Toneladas Constellation'', ''Caminhões trucados ou toco equipados com guindaste articulado - munck com capacidades entre 10 e 50 toneladas métricas. O alcance vertical pode atingir ate 33 metros. A Frota da Veromath é composta pelos moderníssimos guindastes da Madal Palfinger e da Hyva Crane, ambas lideres mundiais no segmento de guindastes articulados, popularmente conhecidos como munck. A empresa foi pioneira ao adquirir guindastes articulados - munck controlados através de controle remoto sem fio.'', ''serv_caminhao_g.pdf'')'),
(3112, 'Backup2 (15/10/2014)', 'equipamentos_imgs', '(8, 37, '''', ''munck_madal_palfinger_modelo_PK_26000_2.jpg'', 1)'),
(3113, 'Backup2 (15/10/2014)', 'equipamentos_imgs', '(8, 38, '''', ''munck_madal_palfinger_modelo_PK_26000_3.jpg'', 2)'),
(3114, 'Backup2 (15/10/2014)', 'equipamentos_imgs', '(4, 28, '''', ''caminhao_munck_com_cesta_aerea_5.jpg'', 4)'),
(3115, 'Backup2 (15/10/2014)', 'equipamentos_imgs', '(4, 29, '''', ''caminhao_munck_com_cesta_aerea_6.jpg'', 5)'),
(3116, 'Backup2 (15/10/2014)', 'equipamentos_imgs', '(4, 30, '''', ''caminhao_munck_com_cesta_aerea_7.jpg'', 6)'),
(3117, 'Backup2 (15/10/2014)', 'equipamentos_imgs', '(5, 31, '''', ''guindaste_articulado _munck_palfinger_2.jpg'', 1)'),
(3118, 'Backup2 (15/10/2014)', 'equipamentos_imgs', '(5, 32, '''', ''guindaste_articulado _munck_palfinger_3.jpg'', 2)'),
(3119, 'Backup2 (15/10/2014)', 'equipamentos_imgs', '(5, 33, '''', ''guindaste_articulado _munck_palfinger_4.jpg'', 3)'),
(3120, 'Backup2 (15/10/2014)', 'equipamentos_imgs', '(5, 34, '''', ''guindaste_articulado _munck_palfinger_5.jpg'', 4)'),
(3121, 'Backup2 (15/10/2014)', 'equipamentos_imgs', '(5, 35, '''', ''guindaste_articulado _munck_palfinger_6.jpg'', 5)'),
(3122, 'Backup2 (15/10/2014)', 'equipamentos_imgs', '(7, 36, '''', ''munck_madal_palfinger_modelo_PK_32080_2.jpg'', 1)'),
(3123, 'Backup2 (15/10/2014)', 'equipamentos_imgs', '(2, 23, '''', ''caminhao_munck_6.jpg'', 5)'),
(3124, 'Backup2 (15/10/2014)', 'equipamentos_imgs', '(3, 24, '''', ''carreta_com_munck_2.jpg'', 1)'),
(3125, 'Backup2 (15/10/2014)', 'equipamentos_imgs', '(4, 25, '''', ''caminhao_munck_com_cesta_aerea_2.jpg'', 1)'),
(3126, 'Backup2 (15/10/2014)', 'equipamentos_imgs', '(4, 26, '''', ''caminhao_munck_com_cesta_aerea_3.jpg'', 2)'),
(3127, 'Backup2 (15/10/2014)', 'equipamentos_imgs', '(4, 27, '''', ''caminhao_munck_com_cesta_aerea_4.jpg'', 3)'),
(3128, 'Backup2 (15/10/2014)', 'equipamentos_imgs', '(1, 15, '''', ''guindaste_munck_hyva_HC_501_3.jpg'', 3)'),
(3129, 'Backup2 (15/10/2014)', 'equipamentos_imgs', '(1, 16, '''', ''caminhao_munck_ 50T_5.jpg'', 4)'),
(3130, 'Backup2 (15/10/2014)', 'equipamentos_imgs', '(1, 17, '''', ''caminhao_munck_ 50T_6.jpg'', 5)'),
(3131, 'Backup2 (15/10/2014)', 'equipamentos_imgs', '(2, 19, '''', ''caminhao_munck_2.jpg'', 3)'),
(3132, 'Backup2 (15/10/2014)', 'equipamentos_imgs', '(2, 20, '''', ''caminhao_munck_3.jpg'', 2)'),
(3133, 'Backup2 (15/10/2014)', 'equipamentos_imgs', '(2, 21, '''', ''caminhao_munck_4.jpg'', 3)'),
(3134, 'Backup2 (15/10/2014)', 'equipamentos_imgs', '(2, 22, '''', ''caminhao_munck_5.jpg'', 4)'),
(3135, 'Backup2 (15/10/2014)', 'equipamentos_imgs', '(1, 14, '''', ''caminhao_munck_ 50T_3.jpg'', 2)'),
(3136, 'Backup2 (15/10/2014)', 'equipamentos_imgs', '(1, 13, '''', ''caminhao_munck_ 50T_2.jpg'', 1)'),
(3137, 'Backup2 (15/10/2014)', 'equipamentos_imgs', '(8, 39, '''', ''guindaste_munck_hyva_HC_501_6.jpg'', 3)'),
(3138, 'Backup2 (15/10/2014)', 'faq', '(9, ''servico'', 3, ''O que é Içamento?'', ''Içamento é a movimentação de materiais pesados há uma determinada altura. '')'),
(3139, 'Backup2 (15/10/2014)', 'faq', '(10, ''servico'', 4, ''Qual a utilização de um guindaste?'', ''Guindaste é utilizado para movimentar equipamentos pesados, para a montagem de máquinas de grande e pequeno porte, e frequentemente utilizado em construções civis.'')'),
(3140, 'Backup2 (15/10/2014)', 'faq', '(6, ''equipamento'', 5, ''O que é caminhão munck? '', ''Caminhão Munck é um equipamento hidráulico utilizado para carregamento, descarregamento, transporte e movimentação de máquinas e peças pesadas. '')'),
(3141, 'Backup2 (15/10/2014)', 'faq', '(7, ''servico'', 2, ''O que é equipe de Remoção?'', ''É uma equipe de profissionais especializados e capacitados para remover peças e máquinas de grande e pequeno porte, utilizando-se de ferramentas especiais para o devido deslocamento. '')'),
(3142, 'Backup2 (15/10/2014)', 'faq', '(8, ''equipamento'', 6, ''O que é Empilhadeira?'', ''Empilhadeira é uma máquina usada para carregar e descarregar mercadorias em geral, paletes, caixas, etc. Existem diversos tipos de empilhadeiras, e são mais utilizados em galpões fechados. Possuem capacidades diversas dependendo de cada empilhadeira. '')'),
(3143, 'Backup2 (15/10/2014)', 'faq', '(4, ''equipamento'', 4, ''O que é ponte rolante?'', ''Ponte rolante é um equipamento utilizado para transportar cargas dentro de um espaço físico pré-determinado. É constituída de uma viga principal apoiada em suas extremidades por apoios rolantes. '')'),
(3144, 'Backup2 (15/10/2014)', 'faq', '(5, ''servico'', 1, ''O que é estudo de rigging?'', ''Estudo de rigging é o planejamento da movimentação do equipamento, na qual se é verificado as condições gerais para um trabalho com segurança, considerando o peso da peça, ângulos máximos permitidos na tabela do guindaste para a boa realização dos trabalhos, assim como uma avaliação minuciosa do local e equipamentos necessários para o andamento dos serviços a serem prestados. O estudo do rigging é constituído através de um levantamento criterioso para a garantia de um trabalho com segurança. '')'),
(3145, 'Backup2 (15/10/2014)', 'faq', '(1, ''equipamento'', 1, ''O que é guindaste?'', ''Guindaste é um equipamento utilizado para a elevação, e movimentação de peças e materiais pesados, que disponibiliza de mecanismos mecânicos capaz de movimentar cargas além da capacidade humana. '')'),
(3146, 'Backup2 (15/10/2014)', 'faq', '(2, ''equipamento'', 2, ''O que é caminhão trucado?'', ''Caminhão trucado é um veículo que possui dois eixos traseiros capaz de suportar uma capacidade maior de peso em sua carroceria. '')'),
(3147, 'Backup2 (15/10/2014)', 'faq', '(3, ''equipamento'', 3, ''O que é caminhão Toco?'', ''Caminhão toco é um veículo que possui carroceria menor que um caminhão trucado, possui apenas 1 eixo e suporta menos peso que um truck. '')'),
(3148, 'Backup2 (15/10/2014)', 'faq_img', '(2, ''Servico'', ''guindaste_articulado _munck_palfinger_3.jpg'')'),
(3149, 'Backup2 (15/10/2014)', 'faq_img', '(1, ''Equipamento'', ''caminhao_munck_ 50T_1.jpg'')'),
(3150, 'Backup2 (15/10/2014)', 'index_hr', '(''                 Locação de caminhões Munck e guindastes - Serviços de Içamento de Equipamentos, Montagem Industrial Remoção Técnica, Carga e descarga e Içamento com cesta aérea.\r\n                                                                                                                                                                                '')'),
(3151, 'Backup2 (15/10/2014)', 'index_news', '(5, ''Guindaste Bi-Articulado para Locação'', '''', ''                         <p>A Hyva Crane do Brasil entregou em outubro o Guindaste Bi-articulado HB 230 para a Veromath Transportes. Trata-se do primeiro Guindaste Bi-Articulado da Hyva Crane na Região Sudeste. /p>\r\n\r\n<p>Este guindaste é equipado com 5 lanças hidráulicas na primeira seção e mais 3 lanças hidráulicas na segunda seção. O alcance total deste Guindaste Bi-articualdo-munck é de 26 metros. A grande vantagem deste guindaste está no quesito segurança que hoje é muito exigido pelos clientes. O guindaste possui gerenciamento eletrônico da capacidade de elevação de carga. Quando o guindaste excede sua capacidade de elevação, o comando bloqueia todos as ações que possam trazer riscos à operação. Trata-se, portanto, de um guindaste articulado-munck com nível de segurança muito acima dos padrões dos guindastes articulados-munck nacionais, que normalmente só são equipados com válvulas de segurança nos cilindros, não possuem válvula de momento de carga e muito menos o gerenciamento eletrônico de carga. - Com a aquisição de guindastes com este sistema de segurança, a empresa visa uma redução significativa nos custos de manutenção preventiva e corretiva dos guindastes visto que eles não estarão mais expostos a operações de elevação com sobrecarga. </p>\r\n\r\n<p>A Madal Palfinger também oferece este equipamento de segurança como acessório em seus guindastes articulados-munck. O acessório é chamado de válvula OSK. </p>\r\n                                                '', ''2010-03-10'')'),
(3152, 'Backup2 (15/10/2014)', 'index_news', '(4, ''Guindaste Articulado HC 361 Surpreende'', '''', ''            <p>O Novo Guindaste Articulado da Hyva Crane com capacidade para 36 toneladas métricas e alcance vertical de 28 metros, surpreendeu a equipe do Rodoanel no serviço de lançamento de lajes pré-moldadas nos Viadutos que estão sendo contruídos. O Serviço era executado anteriormente por um guindaste telescópico que tem um custo bem maior. O guindaste articulado (munck) da Hyva se destacou pela sua versatilidade pois além de lançar as lajes o guindaste ainda consegue transportá-las na obra. </p>\r\n\r\n<p>A Veromath aposta em soluções de elevação de carga que traga vantagem competitiva para seus clientes economizando tempo e custo. Os guindastes articulados especiais trazem vantagens nos quesitos de segurança agilidade e alcance. </p>                   '', ''2010-03-25'')'),
(3153, 'Backup2 (15/10/2014)', 'index_news', '(3, ''Veromath recebe seus novos Guindastes Palfinger '', '''', ''            <p>A Veromath acaba de fechar com a Palfinger a compra de novos guindastes articulados para sua frota. Destaca-se o guindaste articulado da Madal Panfinger da linha PK que tem alcance de 26 metros. Este equipamento é extremamente eficiente na execução de serviços que demandam movimentos precisos. Seu alcance e sua rapidez o diferem em relação aos guindastes articulados - munck convencionais disponiveis no mercado de locação. </p>\r\n\r\n<p>O guindaste é dotado de sistemas de segurança que o impedem de elevar cargas acima de sua capacidade. O menor peso desse guindaste articulado é outro diferencial, pois aumenta a capacidade de carga do caminhão. </p>\r\n\r\n<p>A Veromath Transportes está sempre em busca da invoção e modernização de sua frota guindastes e encontrou na Madal Palfinger aquilo que buscava, uma empresa séria que preza pela qualidade e mordernização dos guindastes que fabrica. "Seguramente a Madal Palfinger produz os guindastes mais modernos e completos do País" comenta o diretor da Veromath, Renato Malheiro. </p>\r\n\r\n<p>Para informações adicionais entre em: www.madalpalfinger.com.br</p>\r\n\r\n                                    '', ''2010-07-09'')'),
(3154, 'Backup2 (15/10/2014)', 'index_news', '(1, ''HYVA CRANE investe no Brasil.'', '''', ''                                                                        <p>Com matriz na Holanda, a Hyva possui fábricas no Brasil, China, Alemanha, Índia, Itália e Países Baixos. O grupo, fundado em 1979 opera em mais de 130 países, responde pela colocação de cerca de 1.600 funcionários que trabalham nas 35 subsidiárias e nas 11 plantas fabris. Principal provedor mundial de soluções em transporte para caminhões e implementos rodoviários, a Hyva – que possui mais de 25.000 clientes ativos – desenvolve, produz e distribui guindastes e componentes hidráulicos para sistemas de carregamento e descarregamento hidráulico para caminhões e semi-reboques. </p>\r\n\r\n<p>A Hyva do Brasil foi fundada em agosto de 1995, em maio de 2007 inaugurou uma nova planta fabril com 8.000 m2 de área construída e 12.000 m2 de área total, localizada no Bairro Santa Catarina em Caxias do Sul, hoje conta com uma força de trabalho de aproximadamente 180 funcionários. A Hyva do Brasill fabrica e comercializa cilindros hidráulicos telescópicos, kits hidráulicos e pisos móveis. Em fevereiro de 2008 expandiu seu portfólio e passou também a comercializar guindastes. </p>\r\n\r\n<p>Os guindastes da marca são fabricados na Itália pela Hyva Crane - antiga Amco Veba Ferrari, empresa adquirida pelo grupo Hyva em 2006 - uma das quatro maiores fabricantes de guindastes do mundo, que utiliza as mais avançadas tecnologias de processo e materiais com padrão de qualidade e precisão elevados. A companhia atua no mercado de fabricação de guindastes desde 1978 com penetração em mais de 100 países nos cinco continentes. Alguns dos diferenciais dos guindastes da marca são: guindaste compacto feito com aço de liga com alta resistência tornando-se um equipamento leve, ágil e veloz; possui um avançado sistema de segurança; possibilidade de operação do equipamento através de controle remoto; inova no mercado disponibilizando a FLY-JIB em todos os equipamentos possibilitando a operação do guindaste nos mais difíceis locais de acesso; possui um sistema de deslocamento suave; possui uma unidade de controle total que controla todos os aspectos de operação do guindaste, incluindo o controle de todos os acessórios; possui uma gama de capacidade de 1 a 74 Tm (tonelada/metro) e, inova mais uma vez no mercado oferecendo guindastes de 1 a 2 Tm (tonelada/metro). “Nossa estratégia de desenvolvimento no mercado de guindastes foi traçada em meados de 2007. Iniciamos com a comercialização dos produtos importados e a próxima fase é a fabricação de guindastes no Brasil para 2009, ainda estamos em fase de desenvolvimento de mercados e seleção de distribuidores, porém, já contamos com uma estrutura montada na própria fábrica para assistência técnica e peças de reposição. O fato é que estamos lançando no mercado um produto inovador, de alta qualidade, excelente custo X benefício e principalmente com características diferenciais que agregam valor ao produto, com garantia de fábrica”, sinaliza o diretor das operações da Hyva, no Brasil e Américas, Rogério De Antoni. </p>\r\n\r\n<p>Segundo o executivo, em agosto deste ano, a empresa participou da Equipo Mining em Minas Gerais - feira direcionada à indústria de mineração – “onde mostramos, pela primeira vez, os guindastes ao mercado do Sudeste do Brasil. Nossa participação nesta exposição só veio a confirmar que os setores de mineração e construção civil estão em ascensão. A demonstração dinâmica do guindaste, feita na ocasião, confirmou que é um produto inovador de excelente aceitação no mercado”, finaliza. </p>\r\n                                                                                                                        '', ''2010-09-25'')'),
(3155, 'Backup2 (15/10/2014)', 'index_rows', '(2, ''Servico'', ''caminhao_munck_com_cesta_aerea_5.jpg'', ''Serviços'', ''Oferecemos serviços de alta qualidade, para atender as necessidades de nossos clientes.                                                                        '')'),
(3156, 'Backup2 (15/10/2014)', 'index_rows', '(1, ''Equipamento'', ''caminhao_munck_ 50T_4.jpg'', ''Equipamentos'', '' A Veromath oferece o que há de mais moderno em equipamentos.                                                                                                                                                                                                                                '')'),
(3157, 'Backup2 (15/10/2014)', 'index_slide', '(215, 1, ''caminhao_munk_01.jpg'')'),
(3158, 'Backup2 (15/10/2014)', 'index_slide', '(216, 2, ''caminhao_munk_05.jpg'')'),
(3159, 'Backup2 (15/10/2014)', 'index_slide', '(217, 3, ''caminhao_munk_08.jpg'')'),
(3160, 'Backup2 (15/10/2014)', 'index_slide', '(218, 4, ''caminhao_munk_06.jpg'')'),
(3161, 'Backup2 (15/10/2014)', 'servicos_servicos', '(1, 1, `class`, ''servico_icamento_menu.png'', ''servico_munck_icamento_equipamentos_1.jpg'', ''Serviço Munck Içamento de Equi'', ''Içamento de Equipamentos'', ''                                                                                         <p>Guindaste articulado (munck) com alcance de 21,5 metros de altura. Ideal para: - Montagem de estruturas metálicas. - Montagem de estruturas pré-moldadas de concreto. - Instalação e manutenção de cobertura de galpões. - Instalação e manutenção de Luminosos. </p>                                                                                                                                                                                               '')'),
(3162, 'Backup2 (15/10/2014)', 'servicos_servicos', '(2, 2, `class`, ''servico_montagem_industrial_menu.png'', ''servico_munck_montagem_industrial_1.jpg'', ''Serviço Munk Montagem Industri'', ''Montagem Industrial'', ''            <p>A precisão e rapidez de operação dos guindastes articulados - munck da Madal Palfinger possibilitam um ganho de produtividade para operações de Montagem Industrial trazendo ao cliente uma significativa economia, pois além de executar os serviços de içamento, o munck também transporta a carga. A Veromath Transportes possui guindastes articulados - munck com até 26 metros de lança. O guindaste articulado - munck modelo PK 32080 da Veromath é capaz de elevar cargas com 5750 Kg a 18 metros de altura. Uma performance diferenciada por se tratar de um "munck".\r\n</p>                                                             '')'),
(3163, 'Backup2 (15/10/2014)', 'servicos_servicos', '(3, 3, `class`, ''servico_remocao_tecnica_menu.png'', ''servico_munck_remocao_tecnica_1.jpg'', ''Serviço Remoção Técnica'', ''Remoção Técnica'', ''                                    <p>A Veromath Transportes possui uma equipe especializada para a execução de remoções técnicas de máquinas e equipamentos, mudança de layout industrial. A Veromath possui um dos guindastes articulados - munck com maior capacidade disponível no mercado, trata-se de um munck com capacidade para 47 toneladas métricas. A empresa possui Know-How na movimentação e transporte de: - Máquinas Injetoras - Grupo Gerador - Máquinas Operatrizes - Prensas - Tornos. </p>                                                 '')'),
(3164, 'Backup2 (15/10/2014)', 'servicos_servicos', '(4, 4, `class`, ''servico_carga_descarga_menu.png'', ''servico_munck_carga_descarga_2.jpg'', ''Serviço Munck Carga Descarga'', ''Carga e descarga'', ''<p>Execução de serviços de carga e descarga com a utilização de guindastes articulados - munck ou guindastes telescópicos. A Veromath utiliza todos os equipamentos de apoio necessários para que as operações de içamento sejam feitas com segurança, e sem danos à carga. A empresa possui guindastes articulados - munck com capacidade de até 47 toneladas métricas. </p>             '')'),
(3165, 'Backup2 (15/10/2014)', 'servicos_servicos', '(18, 0, `class`, ''servico_cesta_aerea.png'', ''servico_munck_cesta_aerea_1.jpg'', '''', ''Içamento com cesta aérea'', ''            <p>Içamento de pessoas com a utilização de cesta aérea acoplada em caminhões guindauto (munck) ou guindastes para diversas finalidades, dentre elas: - Inspeção de viadutos. - Montagem e manutenção de Comunicação Visual totens, fachadas, front light, back light e luminosos. - Inspeção e auxílio na montagem de estruturas metálicas. - Auxílio para filmagens de eventos. - Manutenção de máquinas. - Serviços diversos para construção civil.\r\n</p>            '')'),
(3166, 'Backup2 (15/10/2014)', 'servicos_imgs', '(3, 1, '''', ''servico_munck_remocao_tecnica_2.jpg'', 1)'),
(3167, 'Backup2 (15/10/2014)', 'servicos_imgs', '(3, 4, '''', ''servico_munck_remocao_tecnica_3.jpg'', 2)'),
(3168, 'Backup2 (15/10/2014)', 'servicos_imgs', '(4, 6, '''', ''servico_munck_carga_descarga_1.jpg'', 1)'),
(3169, 'Backup2 (15/10/2014)', 'servicos_imgs', '(18, 7, '''', ''servico_munck_cesta_aerea_2.jpg'', 1)'),
(3170, 'Backup2 (15/10/2014)', 'servicos_imgs', '(18, 8, '''', ''servico_munck_cesta_aerea_3.jpg'', 2)'),
(3171, 'Backup2 (15/10/2014)', 'servicos_imgs', '(1, 9, '''', ''caminhao_munck_com_cesta_aerea_5.jpg'', 1)'),
(3172, 'Backup2 (15/10/2014)', 'servicos_imgs', '(1, 10, '''', ''munck_madal_palfinger_modelo_PK_26000_3.jpg'', 2)'),
(3173, 'Backup2 (15/10/2014)', 'sobre_empresa', '(1, ''A História da Veromath'', ''                        <p>A Veromath é uma empresa de Transportes que atua com excelência na locação de guindastes articulados – munck, guindastes telescópicos, caminhões trucados e carretas. </p>\r\n\r\n<p>A Veromath tem como missão, proporcionar serviços de alta qualidade em movimentação, elevação e transporte de cargas, que atendam as necessidades específicas de seus clientes. Para tanto, a Veromath possui uma equipe engajada com seus valores e objetivos, uma excelente estrutura de tecnologia da informação e guindastes de última geração. </p>\r\n\r\n<p>A empresa possui frota própria de guindastes articulados - munck, guindastes telescópicos, caminhões truck e carretas para carga seca. Dentre os guindastes - munck disponíveis para locação, merecem destaque os Guindaste Articulados da Madal Palfinger com alcance de 26 metros de altura e o Guindaste Bi-Articualdo da Hyva com alcance de 28 metros. </p>                                                             '')'),
(3174, 'Backup2 (15/10/2014)', 'sobre_imgs', '(1, ''caminhao_munk_10.jpg'')'),
(3175, 'Backup2 (15/10/2014)', 'sobre_imgs', '(2, ''servico_munck_montagem_industrial_1.jpg'')'),
(3176, 'Backup2 (15/10/2014)', 'usuarios', '(8, ''Teste'', ''teste@teste.com'', ''teste'', ''Administrador'')');

-- --------------------------------------------------------

--
-- Estrutura da tabela `banco_de_imagens`
--

CREATE TABLE IF NOT EXISTS `banco_de_imagens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_categoria` int(11) NOT NULL,
  `categoria` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img_titulo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img_arquivo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img_alt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=100 ;

--
-- Extraindo dados da tabela `banco_de_imagens`
--

INSERT INTO `banco_de_imagens` (`id`, `id_categoria`, `categoria`, `img_titulo`, `img_arquivo`, `img_alt`) VALUES
(53, 1, 'Equipamentos', 'Munck_Madal Palfinger PK2600', 'munck_madal_palfinger_modelo_PK_26000_2.jpg', 'Munck Madal Palfinger PK 26000'),
(54, 1, 'Equipamentos', 'Munck_Madal Palfinger PK2600', 'munck_madal_palfinger_modelo_PK_26000_3.jpg', 'Munck Madal Palfinger PK 26000'),
(55, 1, 'Equipamentos', 'Guindaste Munck Hyva HC 501', 'guindaste_munck_hyva_HC_501_2.jpg', 'Guindaste Munck Hyva HC 501'),
(56, 1, 'Equipamentos', 'Guindaste Munck Hyva HC 501', 'guindaste_munck_hyva_HC_501_3.jpg', 'Guindaste Munck Hyva HC 501'),
(57, 1, 'Equipamentos', 'Guindaste Munck Hyva HC 501', 'guindaste_munck_hyva_HC_501_4.jpg', 'Guindaste Munck Hyva HC 501'),
(58, 1, 'Equipamentos', 'Guindaste Munck Hyva HC 501', 'guindaste_munck_hyva_HC_501_5.jpg', 'Guindaste Munck Hyva HC 501'),
(59, 1, 'Equipamentos', 'Guindaste Munck Hyva HC 501', 'guindaste_munck_hyva_HC_501_6.jpg', 'Guindaste Munck Hyva HC 501'),
(60, 3, 'Serviços', 'Remoção Téctica', 'servico_munck_remocao_tecnica_2.jpg', 'Serviço Munck Remoção Téctica '),
(61, 3, 'Serviços', 'Remoção Técnica', 'servico_munck_remocao_tecnica_3.jpg', 'Serviço Munck Remoção Técnica '),
(62, 3, 'Serviços', 'Carga e Descarga', 'servico_munck_carga_descarga_2.jpg', 'Serviço Munck Carga Descarga'),
(63, 3, 'Serviços', 'Cesta Aérea', 'servico_munck_cesta_aerea_2.jpg', 'Serviço Munck Cesta Aérea '),
(64, 3, 'Serviços', 'Cesta Aérea', 'servico_munck_cesta_aerea_3.jpg', 'Serviço Munck Cesta Aérea '),
(46, 1, 'Equipamentos', 'Carreta com Munck', 'carreta_com_munck_2.jpg', 'Carreta Munck Trucado Guindaste Articulado'),
(47, 1, 'Equipamentos', 'Guindaste Articulado Munck Palfinger ', 'guindaste_articulado_munck_palfinger_2.jpg', 'Guindaste articulado Munck Palfinger'),
(48, 1, 'Equipamentos', 'Guindasete Articulado Munck Palfinger ', 'guindaste_articulado_munck_palfinger_3.jpg', 'Guindaste articulado Munck Palfinger'),
(49, 1, 'Equipamentos', 'Guindasete Articulado Munck Palfinger ', 'guindaste_articulado_munck_palfinger_4.jpg', 'Guindaste articulado Munck Palfinger'),
(50, 1, 'Equipamentos', 'Guindasete Articulado Munck Palfinger ', 'guindaste_articulado_munck_palfinger_5.jpg', 'Guindaste articulado Munck Palfinger'),
(51, 1, 'Equipamentos', 'Guindasete Articulado Munck Palfinger ', 'guindaste_articulado_munck_palfinger_6.jpg', 'Guindaste articulado Munck Palfinger'),
(42, 1, 'Equipamentos', 'Caminhão Munck com Cesta Aérea', 'caminhao_munck_com_cesta_aerea_4.jpg', 'Caminhão Munck Lança Cesta Aérea'),
(43, 1, 'Equipamentos', 'Caminhão Munck com Cesta Aérea', 'caminhao_munck_com_cesta_aerea_5.jpg', 'Caminhão Munck Lança Cesta Aérea'),
(44, 1, 'Equipamentos', 'Caminhão Munck com Cesta Aérea', 'caminhao_munck_com_cesta_aerea_6.jpg', 'Caminhão Munck Lança Cesta Aérea'),
(45, 1, 'Equipamentos', 'Caminhão Munck com Cesta Aérea', 'caminhao_munck_com_cesta_aerea_7.jpg', 'Caminhão Munck Lança Cesta Aérea'),
(78, 1, 'Equipamentos', 'Munck 55toneladas Banner', 'Munck_55tons_Banner_(2).JPG', 'Munck 55toneladas Banner'),
(35, 1, 'Equipamentos', 'Caminhão Munk', 'caminhao_munck_2.jpg', 'Caminhão Munck Worker Trucado '),
(36, 1, 'Equipamentos', 'Caminhão Munk', 'caminhao_munck_3.jpg', 'Caminhão Munck Worker Trucado '),
(37, 1, 'Equipamentos', 'Caminhão Munk', 'caminhao_munck_4.jpg', 'Caminhão Munck Worker Trucado '),
(38, 1, 'Equipamentos', 'Caminhão Munk', 'caminhao_munck_5.jpg', 'Caminhão Munck Worker Trucado '),
(39, 1, 'Equipamentos', 'Caminhão Munk', 'caminhao_munck_6.jpg', 'Caminhão Munck Worker Trucado '),
(40, 1, 'Equipamentos', 'Caminhão Munck com Cesta Aérea', 'caminhao_munck_com_cesta_aerea_2.jpg', 'Caminhão Munck Lança Cesta Aérea'),
(41, 1, 'Equipamentos', 'Caminhão Munck com Cesta Aérea', 'caminhao_munck_com_cesta_aerea_3.jpg', 'Caminhão Munck Lança Cesta Aérea'),
(32, 1, 'Equipamentos', 'Caminhão Munck 50 Toneladas', 'caminhao_munck_50T_4.jpg', 'Caminhão Munk 50 Toneladas Constellation'),
(33, 1, 'Equipamentos', 'Caminhão Munck 50 Toneladas', 'caminhao_munck_50T_6.jpg', 'Caminhão Munk 50 Toneladas Constellation'),
(30, 1, 'Equipamentos', 'Caminhão Munck 50 Toneladas', 'caminhao_munck_50T_2.jpg', 'Caminhão Munck 50 Toneladas Constellation'),
(31, 1, 'Equipamentos', 'Caminhão Munck 50 Toneladas', 'caminhao_munck_50T_3.jpg', 'Caminhão Munk 50 Toneladas Constellation'),
(29, 4, 'Serviços Menu', 'Serviço Cesta Aérea', 'servico_cesta_aerea.png', 'Serviço caminhão munck cesta aérea'),
(25, 4, 'Serviços Menu', 'Içamento de Equipamentos', 'servico_icamento_menu.png', 'Caminhao munck içamento equipamentos'),
(26, 4, 'Serviços Menu', 'Montagem Industrial', 'servico_montagem_industrial_menu.png', 'Caminhão Munck Serviço Montagem Industrial'),
(27, 4, 'Serviços Menu', 'Remoção Técnica', 'servico_remocao_tecnica_menu.png', 'Serviço Munck Remoção Técnica'),
(28, 4, 'Serviços Menu', 'Carga e Descarga ', 'servico_carga_descarga_menu.png', 'Serviço Munck Carga Descarga'),
(21, 3, 'Serviços', 'Montagem Industrial', 'servico_munck_montagem_industrial_1.jpg', 'Serviço munck montagem industrial'),
(22, 3, 'Serviços', 'Remoção Téctica', 'servico_munck_remocao_tecnica_1.jpg', 'Serviço Tática Munck Remoção '),
(23, 3, 'Serviços', 'Carga e Descarga', 'servico_munck_carga_descarga_1.jpg', 'Serviço Munck Carga Descarga'),
(24, 3, 'Serviços', 'Cesta Aérea', 'servico_munck_cesta_aerea_1.jpg', 'Serviço Munck Cesta Aerea '),
(16, 2, 'Diversos', 'Caminhão Munck', 'caminhao_munk_07.jpg', 'Imagem Caminhão Munck'),
(17, 2, 'Diversos', 'Caminhão Munck', 'caminhao_munk_08.jpg', 'Imagem Caminhão Munck'),
(18, 2, 'Diversos', 'Caminhão Munck', 'caminhao_munk_09.jpg', 'Imagem Caminhão Munck'),
(19, 2, 'Diversos', 'Caminhão Munck', 'caminhao_munk_10.jpg', 'Imagem Caminhão Munck'),
(20, 3, 'Serviços', 'Içamento de Equipamento', 'servico_munck_icamento_equipamentos_1.jpg', 'Serviço munck içamento de equipamentos'),
(13, 2, 'Diversos', 'Caminhão Munck', 'caminhao_munk_04.jpg', 'Imagem Caminhão Munck'),
(14, 2, 'Diversos', 'Caminhão Munck', 'caminhao_munk_05.jpg', 'Imagem Caminhão Munck'),
(15, 2, 'Diversos', 'Caminhão Munck', 'caminhao_munk_06.jpg', 'Imagem Caminhão Munck'),
(9, 1, 'Equipamentos', 'Guindaste Munck Hyva HC 501', 'guindaste_munck_hyva_HC_501_1.jpg', 'Guindaste Munck Hyva HC 501'),
(10, 2, 'Diversos', 'Caminhão Munck', 'caminhao_munk_01.jpg', 'Imagem Caminhão Munck'),
(11, 2, 'Diversos', 'Caminhão Munck', 'caminhao_munk_02.jpg', 'Imagem Caminhão Munck'),
(12, 2, 'Diversos', 'Caminhão Munck', 'caminhao_munk_03.jpg', 'Imagem Caminhão Munck'),
(8, 1, 'Equipamentos', 'Munck_Madal Palfinger PK2600', 'munck_madal_palfinger_modelo_PK_26000_1.jpg', 'Munck Madal Palfinger PK 26000'),
(2, 1, 'Equipamentos', 'Caminhão Munk', 'caminhao_munck_1.jpg', 'Caminhão Munk Worker Trucado'),
(3, 1, 'Equipamentos', 'Carreta com Munck', 'carreta_com_munck_1.jpg', 'Carreta Munck Trucado Guindaste Articulado'),
(4, 1, 'Equipamentos', 'Caminhão Munck com Cesta Aérea', 'caminhao_munck_com_cesta_aerea_1.jpg', 'Caminhão Munck Lança Cesta Aérea'),
(5, 1, 'Equipamentos', 'Guindasete Articulado Munck Palfinger ', 'guindaste_articulado_munck_palfinger_1.jpg', 'Guindaste articulado Munck Palfinger'),
(6, 1, 'Equipamentos', 'Guindaste Bi Articulado Munck Hyva Crane', 'guindaste_bi_articulado_munck_hyva_crane_2.jpg', 'Guindaste articulado munck hyva crane'),
(7, 1, 'Equipamentos', 'Munck Madal Palfunger modelo PK 32080', 'munck_madal_palfinger_modelo_PK_32080_2.jpg', 'Munck Madal Palfinger PK 32080'),
(1, 1, 'Equipamentos', 'Caminhão Munck 50 Toneladas', 'caminhao_munck_50T_1.jpg', 'Caminhão Munk 50 Toneladas Constellation'),
(65, 0, 'Diversos', 'Guindaste1', 'Guindaste_Banner1.jpg', 'guindaste sany madal'),
(67, 0, 'Diversos', 'Carreta Munck', 'Carreta_Banner1.jpg', 'Carreta_munck'),
(68, 0, 'Diversos', 'Carreta_munck2', 'Carreta_munck_Banner2.JPG', 'Carreta munck'),
(77, 1, 'Equipamentos', 'Munck 55toneladas Banner', 'Munck_55tons_Banner.JPG', 'Munck 55toneladas Banner'),
(70, 1, 'Equipamentos', 'Guindaste_Munck_Hyva_HC361', 'Hyva_HC361.JPG', 'Guindaste articulado Munck Hyva HC361'),
(72, 1, 'Equipamentos', 'munck_guindaste_articulado_55_tons/m', 'Munck_55_toneladas_Banner.JPG', 'Caminhão Munck guindaste articulado 55 tons/m'),
(76, 2, 'Equipamentos', 'Hyva HC361', 'Hyva_HC361_2.jpg', 'Caminhão Munck Hyva HC361'),
(75, 0, 'Equipamentos', 'munck_guindaste_articulado_55_tons/m', 'Munck_55_toneladas.JPG', 'Caminhão Munck guindaste articulado 55 tons/m2'),
(79, 1, 'Equipamentos', 'Caminhão Munck PK 23000', 'Munck_PK_230003.jpg', 'Caminhão Munck PK 23000'),
(80, 0, 'Equipamentos', 'Guindaste articulado 45 toneladas', 'Guindaste_articulado_45_toneladas.jpg', 'guindaste articulado munck 45 toneladas Hyva HBR 450'),
(88, 0, 'Equipamentos', 'Guindaste Sany STC 250', 'IMG_2332.JPG', 'Guindaste Telescópico Sany STC 250'),
(87, 0, 'Equipamentos', 'Guindaste Sany STC 250', 'IMG_2332.JPG', 'Guindaste Telescópico Sany STC 250'),
(89, 0, 'Equipamentos', 'Guindaste Sany STC 250', 'IMG_0689_(2).JPG', 'Guindaste Sany STC 250'),
(90, 0, 'Equipamentos', 'Guindaste Sany STC 250', 'IMG_0689_(2).JPG', 'Guindaste Sany STC 250'),
(91, 0, 'Equipamentos', 'Guindaste Madal MD 250', 'IMG_1652.JPG', 'Guindaste Madal MD 250'),
(92, 0, 'Equipamentos', 'Guindaste Madal MD 250', 'IMG_1654.JPG', 'Guindaste Madal MD 250'),
(93, 0, 'Equipamentos', 'Guindaste Madal MD 250', 'IMG_1657.JPG', 'Guindaste Madal MD 250'),
(94, 0, 'Equipamentos', 'Guindaste MD 250', 'Guindaste_MD_250_4.JPG', 'Guindaste MD 250'),
(95, 0, 'Equipamentos', 'Guindaste MD 250', 'Guindaste_MD_250_2.JPG', 'Guindaste MD 250'),
(96, 0, 'Equipamentos', 'Guindaste MD 250', 'Guindaste_MD_250_1.JPG', 'Guindaste MD 250'),
(97, 0, 'Equipamentos', 'Cavalo com munck com capacidade de 45 toneladas métricas', 'Cavalo_munck_45_toneladas_3.JPG', 'Cavalo com munck com capacidade de 45 toneladas métricas'),
(98, 0, 'Equipamentos', 'Cavalo com munck com capacidade de 45 toneladas métricas', 'Cavalo_munck_45_toneladas_1.JPG', 'Cavalo com munck com capacidade de 45 toneladas métricas'),
(99, 0, 'Equipamentos', 'Cavalo com munck Hyva HBR 450', 'Cavalo_munck_45_toneladas_5.jpg', 'Cavalo com munck Hyva HBR 450');

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipamentos_categoria`
--

CREATE TABLE IF NOT EXISTS `equipamentos_categoria` (
  `id_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `equipamentos_categoria`
--

INSERT INTO `equipamentos_categoria` (`id_categoria`, `nome`) VALUES
(1, 'Caminhões Munck'),
(2, 'Guindastes');

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipamentos_equipamentos`
--

CREATE TABLE IF NOT EXISTS `equipamentos_equipamentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_categoria` int(11) NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img_principal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alt` text COLLATE utf8_unicode_ci NOT NULL,
  `descricao` text COLLATE utf8_unicode_ci NOT NULL,
  `grafico_carga` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `grafico_carga_img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=21 ;

--
-- Extraindo dados da tabela `equipamentos_equipamentos`
--

INSERT INTO `equipamentos_equipamentos` (`id`, `id_categoria`, `nome`, `img_principal`, `alt`, `descricao`, `grafico_carga`, `grafico_carga_img`) VALUES
(8, 1, 'Munck Madal Palfinger modelo PK 26000', 'munck_madal_palfinger_modelo_PK_26000_1.jpg', 'Munck Madal Palfinger PK 26000', 'Este guindaste articulado possui alcance total de 22 metros e alcance hidráulico de 16 metros. São 4 lanças hidráulicas e 3 lanças mecânicas. Guindaste - munck ja vem de fábrica equipado com válvula HPLS que gerencia eletronicamente a carga que esta sendo elevada, impedindo que o guindaste trabalhe fora do gráfico de carga.\r\n\r\nEste munck possui guincho de cabo, ideal para montagem de estruturas metálicas e serviços em altura em geral. O PK 26000 é um guindaste leve compacto e muito rápido ideal para locação em canteiro de obras, pois possui uma excelente capacidade de elevação e de carga.            ', '', NULL),
(7, 1, 'Munck Madal Palfinger modelo PK 32080', 'munck_madal_palfinger_modelo_PK_32080_1.jpg', 'Caminhão Munk 50 Toneladas Constellation', 'Este guindaste articulado possui alcance total de 25 metros e alcance hidráulico de 18 metros. Guindaste - munck vem de fábrica equipado com válvula HPLS que gerencia eletronicamente a carga que esta sendo elevada, impedindo que o guindaste trabalhe fora do gráfico de carga. Este munck possui guincho de cabo, ideal para montagem de estruturas metálicas e serviços em altura em geral.', '', NULL),
(6, 1, 'Guindaste Bi- Articulado - Munck Hyva Crane', 'guindaste_bi_articulado_munck_hyva_crane.jpg', 'Caminhão Munk 50 Toneladas Constellation', 'O Guindaste Bi-Articulado Hyva Crane é um “caminhão munck” com alcance hidráulico de 33 metros de altura. O Guindaste possui 6 lanças hidráulicas e mais uma segunda articulação com 5 lanças, chamada de Fly-jib. Este Guindaste – munck pode ser utilizado com ou sem a Fly-jib.Sem a Fly-Jib o guindastes tem alcance total de 18 metros de altura. Este Guindaste possui bloqueio eletrônico de sobrecarga (o guindaste nunca trabalhará fora do gráfico de carga). Por ser montado na traseira, este guindaste – munck possui um maior aproveitamento do gráfico de carga pois a carga pode ser colocada bem mais próxima do centro de giro do Guindaste – munck. Vale ressaltar que a capacidade de qualquer Guindaste – munck é medida em tonelada métrica. Quanto maior a distância da carga em relação ao centro de giro do guindaste, menor será a sua capacidade, a relação é inversamente proporcional. ', '', NULL),
(5, 1, 'Guindaste Articulado - Munck Palfinger', 'guindaste_articulado_munck_palfinger_1.jpg', 'Caminhão Munk 50 Toneladas Constellation', 'A precisão e rapidez de operação dos guindastes articulados - munck da Madal Palfinger possibilitam um ganho de produtividade para operações de içamento. O equipamento conta com um excelente gráfico de içamento de carga, maior alcance do mercado e pode transportar até 11 toneladas. Um dos grandes diferenciais dos Guindastes articulados - munck da Madal Palfinger é o sistema de segurança que permite ao equipamento elevar somente cargas com peso compátivel com o seu gráfico de carga. O equipamento possui alcance vertical de 26 metros. Os guindastes articulados (munck) da Palfinger são equipados com guincho de cabo que faz com que o equipamento execute boa parte dos serviços no qual seria necessário a locação de um guindaste telescópico de alta capacidade. O Guindaste modelo PK 32080 pode executar serviços com cesto aéreo para até duas pessoas ( a capacidade máxima do cesto aéreo é de 380 Kg de carga). ', '', NULL),
(4, 1, 'Caminhão Munck com Cesta Aérea', 'caminhao_munck_com_cesta_aerea_1.jpg', 'Caminhão Munk 50 Toneladas Constellation', 'Caminhão guindauto com lança de 32 metros com cesta aérea para elevação de 2 pessoas. Ideal para: - Inspeção de viadutos - Montagem e manutenção de Comunicação Visual totens, fachadas, front light, back light e luminosos. - Inspeção de estruturas metálicas. - Auxílio para filmagens de eventos. ', 'grafico_100001.jpg', NULL),
(3, 1, 'Carreta com Munck - Cavalo mecânico equipado com Guindaste articulado', 'Carreta_munck_Banner2.JPG', 'Caminhão Munk 50 Toneladas Constellation', 'Locação mensal ou esporádica de carreta com munck (cavalo trucado equipado com guindaste articulado (munck com capacidade entre 25 e 50 toneladas métricas). Comprimento de lança de 22 metros na posição vertical. Ideal para: - Transporte e montagem de estruturas metálicas, postes, tubos. As carretas disponíveis possuem comprimento entre 12,40 m e 16 m.                                    ', '', NULL),
(1, 1, 'Caminhão Munck - Guindaste Bi-articulado -capacidade: 50 toneladas métricas', 'caminhao_munck_50T_1.jpg', 'Caminhão Munk 50 Toneladas Constellation', '                        Caminhão VW 24-250 equipado com Guindaste Articulado (munck) com capacidade para 50 toneladas métricas, Alcance Vertical de 32,80 metros. Gerenciamento eletrônico de elevação de carga. São 11 lanças hidráulicas e uma lança mecânica. Este guindaste possui Fly-jib como acessório, transformando o equipamento em um guindaste Bi-articulado, quando necessário. O guindaste é controlado por controle remoto sem fio.\r\n                                    ', '', NULL),
(2, 1, 'Caminhão Munck - Guindaste articulado - capacidade 35 toneldas métricas', 'caminhao_munck_1.jpg', 'Caminhão Munk 50 Toneladas Constellation', ' Locação mensal ou esporádica de carreta com munck (cavalo trucado equipado com guindaste articulado (munck com capacidade entre 25 e 50 toneladas métricas). Comprimento de lança de 22 metros na posição vertical. Ideal para: - Transporte e montagem de estruturas metálicas, postes, tubos. As carretas disponíveis possuem comprimento entre 12,40 m e 16 m. ', '', NULL),
(9, 1, 'Cavalo com Munck - Guindaste articulado - capacidade 45 toneladas métricas', 'guindaste_munck_hyva_HC_501_1.jpg', '', '         Cavalo trucado Constellation 25-320 equipado com Guindaste articulado (Munck) com capacidade para 45 toneldas métricas. Ideal para elevação e transporte de cargas com comprimento de até 15 metros.   ', '', NULL),
(10, 1, 'Caminhão Munck - Guindaste articulado - capacidade 55 toneladas métricas', 'Munck_55_toneladas_Banner.JPG', '', '                                    Caminhão Constellation 24-280 equipado com Guindaste Articulado (munck) com capacidade para 55 toneladas métricas com carroceria metálica de 7m x 2,50 e malhal para transporte de ferragens e postes.                        ', '', NULL),
(12, 1, 'Carreta com Munck - Guindaste Articulado - capacidade: 25 à 50 toneladas métricas', 'Carreta_Banner1.jpg', '', '            Temos uma frota de cavalos equipados com Munck (Guindaste Articulado) com capacidades entre 25 à 50 toneladas métricas que podem engatar carretas com comprimentos entre 8 e 16 metros e largura de 2,55 metros. Ideal para transporte de pré-moldados de concreto, postes, estruturas metálicas, ferragens, maquinas e equipamentos.', '', NULL),
(13, 2, 'Guindaste MD 250', 'Guindaste_MD_250_3.JPG', 'Guindaste Madal MD250', 'Guindaste hidráulico sobre caminhão MD 250 com capacidade para 25 Tons métricas a 3000 mm do centro do giro. ', '', NULL),
(18, 1, 'Guindaste articulado - munck cap. 45 toneladas', 'Guindaste_articulado_45_toneladas.jpg', '', 'Caminhão Constellation 31-280 tração 6x4 com capacidade máxima de tração de 63 toneladas equipado com Guindaste Articulado - munck Hyva modelo HBR 450 com capacidade para 45 toneladas métricas e alcance de 22 metros.', NULL, NULL),
(19, 2, 'Guindaste Sany STC 250', 'IMG_2332.JPG', '', 'Guindaste Telescópico Sany STC 250 com alcance de 50 metros sendo 40 metros de lança principal e 10 metros de jib.', NULL, NULL),
(20, 1, 'Cavalo com munck com capacidade para 45 toneladas métricas', 'Cavalo_munck_45_toneladas_3.JPG', '', 'Cavalo mecânico Constellation 25-320 equipado com Guindaste articulado - munck com capacidade de 45 toneladas métricas. Este caminhão possui capacidade de tração de 48,5 toneladas. Pode acoplar diversos tipos de carretas ou trabalhar somente com o cavalo.', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipamentos_imgs`
--

CREATE TABLE IF NOT EXISTS `equipamentos_imgs` (
  `id_produto` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `equipamento` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `imagem_arquivo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `n_ordem` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=46 ;

--
-- Extraindo dados da tabela `equipamentos_imgs`
--

INSERT INTO `equipamentos_imgs` (`id_produto`, `id`, `equipamento`, `imagem_arquivo`, `n_ordem`) VALUES
(8, 41, '', 'munck_madal_palfinger_modelo_PK_26000_2.jpg', 2),
(8, 38, '', 'munck_madal_palfinger_modelo_PK_26000_3.jpg', 2),
(4, 28, '', 'caminhao_munck_com_cesta_aerea_5.jpg', 4),
(4, 29, '', 'caminhao_munck_com_cesta_aerea_6.jpg', 5),
(4, 30, '', 'caminhao_munck_com_cesta_aerea_7.jpg', 6),
(5, 31, '', 'guindaste_articulado_munck_palfinger_2.jpg', 1),
(5, 32, '', 'guindaste_articulado_munck_palfinger_3.jpg', 2),
(5, 33, '', 'guindaste_articulado_munck_palfinger_4.jpg', 3),
(5, 34, '', 'guindaste_articulado_munck_palfinger_5.jpg', 4),
(5, 35, '', 'guindaste_articulado_munck_palfinger_6.jpg', 5),
(7, 36, '', 'munck_madal_palfinger_modelo_PK_32080_2.jpg', 1),
(2, 23, '', 'caminhao_munck_6.jpg', 5),
(3, 24, '', 'carreta_com_munck_2.jpg', 1),
(4, 25, '', 'caminhao_munck_com_cesta_aerea_2.jpg', 1),
(4, 26, '', 'caminhao_munck_com_cesta_aerea_3.jpg', 2),
(4, 27, '', 'caminhao_munck_com_cesta_aerea_4.jpg', 3),
(1, 15, '', 'guindaste_munck_hyva_HC_501_3.jpg', 3),
(1, 16, '', 'caminhao_munck_50T_5.jpg', 4),
(1, 17, '', 'caminhao_munck_50T_6.jpg', 5),
(2, 19, '', 'caminhao_munck_2.jpg', 3),
(2, 20, '', 'caminhao_munck_3.jpg', 2),
(2, 21, '', 'caminhao_munck_4.jpg', 3),
(2, 22, '', 'caminhao_munck_5.jpg', 4),
(1, 14, '', 'caminhao_munck_50T_3.jpg', 2),
(1, 13, '', 'caminhao_munck_50T_2.jpg', 1),
(19, 42, '', 'IMG_0689_(2).JPG', 1),
(19, 43, '', 'Guindaste_Banner1.jpg', 2),
(13, 44, '', 'Guindaste_MD_250_1.JPG', 1),
(13, 45, '', 'Guindaste_MD_250_2.JPG', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `faq`
--

CREATE TABLE IF NOT EXISTS `faq` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `n_ordem` int(11) NOT NULL,
  `pergunta` text COLLATE utf8_unicode_ci NOT NULL,
  `resposta` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `faq`
--

INSERT INTO `faq` (`id`, `tipo`, `n_ordem`, `pergunta`, `resposta`) VALUES
(9, 'servico', 3, 'O que é Içamento', 'Içamento é a movimentação de materiais pesados há uma determinada altura. '),
(10, 'servico', 4, 'Qual a utilização de um guindaste', 'Guindaste é utilizado para movimentar equipamentos pesados, para a montagem de máquinas de grande e pequeno porte, e frequentemente utilizado em construções civis.'),
(6, 'equipamento', 5, 'O que é caminhão munck', 'Caminhão Munck é um equipamento hidráulico utilizado para carregamento, descarregamento, transporte e movimentação de máquinas e peças pesadas. '),
(7, 'servico', 2, 'O que é equipe de Remoção', 'É uma equipe de profissionais especializados e capacitados para remover peças e máquinas de grande e pequeno porte, utilizando-se de ferramentas especiais para o devido deslocamento. '),
(8, 'equipamento', 6, 'O que é Empilhadeira', 'Empilhadeira é uma máquina usada para carregar e descarregar mercadorias em geral, paletes, caixas, etc. Existem diversos tipos de empilhadeiras, e são mais utilizados em galpões fechados. Possuem capacidades diversas dependendo de cada empilhadeira. '),
(4, 'equipamento', 4, 'O que é ponte rolante', 'Ponte rolante é um equipamento utilizado para transportar cargas dentro de um espaço físico pré-determinado. É constituída de uma viga principal apoiada em suas extremidades por apoios rolantes. '),
(5, 'servico', 1, 'O que é estudo de rigging', 'Estudo de rigging é o planejamento da movimentação do equipamento, na qual se é verificado as condições gerais para um trabalho com segurança, considerando o peso da peça, ângulos máximos permitidos na tabela do guindaste para a boa realização dos trabalhos, assim como uma avaliação minuciosa do local e equipamentos necessários para o andamento dos serviços a serem prestados. O estudo do rigging é constituído através de um levantamento criterioso para a garantia de um trabalho com segurança. '),
(1, 'equipamento', 1, 'O que é guindaste', 'Guindaste é um equipamento utilizado para a elevação, e movimentação de peças e materiais pesados, que disponibiliza de mecanismos mecânicos capaz de movimentar cargas além da capacidade humana. '),
(2, 'equipamento', 2, 'O que é caminhão trucado', 'Caminhão trucado é um veículo que possui dois eixos traseiros capaz de suportar uma capacidade maior de peso em sua carroceria. '),
(3, 'equipamento', 3, 'O que é caminhão Toco', 'Caminhão toco é um veículo que possui carroceria menor que um caminhão trucado, possui apenas 1 eixo e suporta menos peso que um truck. ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `faq_img`
--

CREATE TABLE IF NOT EXISTS `faq_img` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `imagem` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `faq_img`
--

INSERT INTO `faq_img` (`id`, `tipo`, `imagem`) VALUES
(2, 'Servico', 'guindaste_articulado_munck_palfinger_3.jpg'),
(1, 'Equipamento', 'caminhao_munck_50T_1.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `index_hr`
--

CREATE TABLE IF NOT EXISTS `index_hr` (
  `id` int(11) NOT NULL,
  `h1` varchar(255) COLLATE utf8_bin NOT NULL,
  `texto` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `index_hr`
--

INSERT INTO `index_hr` (`id`, `h1`, `texto`) VALUES
(0, 'Locação de caminhão Munck (guindaste articulado)', 'Com capacidades entre 8 e 60 toneladas métricas - Locação de Guindastes Telescópicos - Carreta com munck (Guindaste articulado) com capacidades entre 23 e 50 toneladas métricas. Locação de Guindaste Bi-articulado (com Fly-jib e controle remoto) para operações de alta precisão. Carretas e caminhões truck para transporte de máquinas e equipamentos.\r\n                                                                                                                                                                                                                                                     ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `index_news`
--

CREATE TABLE IF NOT EXISTS `index_news` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `imagem` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `texto` text COLLATE utf8_unicode_ci NOT NULL,
  `data` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

--
-- Extraindo dados da tabela `index_news`
--

INSERT INTO `index_news` (`id`, `titulo`, `imagem`, `texto`, `data`) VALUES
(5, 'Guindaste Bi-Articulado para Locação', '', 'A Hyva Crane do Brasil entregou em outubro o Guindaste Bi-articulado HB 230 para a Veromath Transportes. Trata-se do primeiro Guindaste Bi-Articulado da Hyva Crane na Região Sudeste.\r\n\r\nEste guindaste é equipado com 5 lanças hidráulicas na primeira seção e mais 3 lanças hidráulicas na segunda seção. O alcance total deste Guindaste Bi-articualdo-munck é de 26 metros. A grande vantagem deste guindaste está no quesito segurança que hoje é muito exigido pelos clientes. O guindaste possui gerenciamento eletrônico da capacidade de elevação de carga. Quando o guindaste excede sua capacidade de elevação, o comando bloqueia todos as ações que possam trazer riscos à operação. Trata-se, portanto, de um guindaste articulado-munck com nível de segurança muito acima dos padrões dos guindastes articulados-munck nacionais, que normalmente só são equipados com válvulas de segurança nos cilindros, não possuem válvula de momento de carga e muito menos o gerenciamento eletrônico de carga. - Com a aquisição de guindastes com este sistema de segurança, a empresa visa uma redução significativa nos custos de manutenção preventiva e corretiva dos guindastes visto que eles não estarão mais expostos a operações de elevação com sobrecarga. \r\n\r\nA Madal Palfinger também oferece este equipamento de segurança como acessório em seus guindastes articulados-munck. O acessório é chamado de válvula OSK.\r\n                                                                                                                                    ', '2014-09-08'),
(4, 'Guindaste Articulado HC 361 Surpreende', 'Hyva_HC361.JPG', 'O Novo Guindaste Articulado da Hyva Crane com capacidade para 36 toneladas métricas e alcance vertical de 28 metros, surpreendeu a equipe do Rodoanel no serviço de lançamento de lajes pré-moldadas nos Viadutos que estão sendo contruídos. O Serviço era executado anteriormente por um guindaste telescópico que tem um custo bem maior. O guindaste articulado (munck) da Hyva se destacou pela sua versatilidade pois além de lançar as lajes o guindaste ainda consegue transportá-las na obra.\r\n\r\nA Veromath aposta em soluções de elevação de carga que traga vantagem competitiva para seus clientes economizando tempo e custo. Os guindastes articulados especiais trazem vantagens nos quesitos de segurança agilidade e alcance.                                    ', '2014-03-25'),
(3, 'Veromath recebe seus novos Guindastes Palfinger ', '', 'A Veromath acaba de fechar com a Palfinger a compra de novos guindastes articulados para sua frota. Destaca-se o guindaste articulado da Madal Panfinger da linha PK que tem alcance de 26 metros. Este equipamento é extremamente eficiente na execução de serviços que demandam movimentos precisos. Seu alcance e sua rapidez o diferem em relação aos guindastes articulados - munck convencionais disponiveis no mercado de locação. \r\n\r\nO guindaste é dotado de sistemas de segurança que o impedem de elevar cargas acima de sua capacidade. O menor peso desse guindaste articulado é outro diferencial, pois aumenta a capacidade de carga do caminhão. \r\n\r\nA Veromath Transportes está sempre em busca da invoção e modernização de sua frota guindastes e encontrou na Madal Palfinger aquilo que buscava, uma empresa séria que preza pela qualidade e mordernização dos guindastes que fabrica. "Seguramente a Madal Palfinger produz os guindastes mais modernos e completos do País" comenta o diretor da Veromath, Renato Malheiro. \r\n\r\nPara informações adicionais entre em: www.madalpalfinger.com.br .\r\n\r\n                                                ', '2014-02-09'),
(1, 'HYVA CRANE investe no Brasil.', '', 'Com matriz na Holanda, a Hyva possui fábricas no Brasil, China, Alemanha, Índia, Itália e Países Baixos. O grupo, fundado em 1979 opera em mais de 130 países, responde pela colocação de cerca de 1.600 funcionários que trabalham nas 35 subsidiárias e nas 11 plantas fabris. Principal provedor mundial de soluções em transporte para caminhões e implementos rodoviários, a Hyva – que possui mais de 25.000 clientes ativos – desenvolve, produz e distribui guindastes e componentes hidráulicos para sistemas de carregamento e descarregamento hidráulico para caminhões e semi-reboques. \r\n\r\nA Hyva do Brasil foi fundada em agosto de 1995, em maio de 2007 inaugurou uma nova planta fabril com 8.000 m2 de área construída e 12.000 m2 de área total, localizada no Bairro Santa Catarina em Caxias do Sul, hoje conta com uma força de trabalho de aproximadamente 180 funcionários. A Hyva do Brasill fabrica e comercializa cilindros hidráulicos telescópicos, kits hidráulicos e pisos móveis. Em fevereiro de 2008 expandiu seu portfólio e passou também a comercializar guindastes. \r\n\r\nOs guindastes da marca são fabricados na Itália pela Hyva Crane - antiga Amco Veba Ferrari, empresa adquirida pelo grupo Hyva em 2006 - uma das quatro maiores fabricantes de guindastes do mundo, que utiliza as mais avançadas tecnologias de processo e materiais com padrão de qualidade e precisão elevados. A companhia atua no mercado de fabricação de guindastes desde 1978 com penetração em mais de 100 países nos cinco continentes. Alguns dos diferenciais dos guindastes da marca são: guindaste compacto feito com aço de liga com alta resistência tornando-se um equipamento leve, ágil e veloz; possui um avançado sistema de segurança; possibilidade de operação do equipamento através de controle remoto; inova no mercado disponibilizando a FLY-JIB em todos os equipamentos possibilitando a operação do guindaste nos mais difíceis locais de acesso; possui um sistema de deslocamento suave; possui uma unidade de controle total que controla todos os aspectos de operação do guindaste, incluindo o controle de todos os acessórios; possui uma gama de capacidade de 1 a 74 Tm (tonelada/metro) e, inova mais uma vez no mercado oferecendo guindastes de 1 a 2 Tm (tonelada/metro). “Nossa estratégia de desenvolvimento no mercado de guindastes foi traçada em meados de 2007. Iniciamos com a comercialização dos produtos importados e a próxima fase é a fabricação de guindastes no Brasil para 2009, ainda estamos em fase de desenvolvimento de mercados e seleção de distribuidores, porém, já contamos com uma estrutura montada na própria fábrica para assistência técnica e peças de reposição. O fato é que estamos lançando no mercado um produto inovador, de alta qualidade, excelente custo X benefício e principalmente com características diferenciais que agregam valor ao produto, com garantia de fábrica”, sinaliza o diretor das operações da Hyva, no Brasil e Américas, Rogério De Antoni. \r\n\r\nSegundo o executivo, em agosto deste ano, a empresa participou da Equipo Mining em Minas Gerais - feira direcionada à indústria de mineração – “onde mostramos, pela primeira vez, os guindastes ao mercado do Sudeste do Brasil. Nossa participação nesta exposição só veio a confirmar que os setores de mineração e construção civil estão em ascensão. A demonstração dinâmica do guindaste, feita na ocasião, confirmou que é um produto inovador de excelente aceitação no mercado”, finaliza.', '2014-05-25'),
(17, 'Como Surgiram os Guindastes', 'Guindaste_MD_250_1.JPG', 'O guindaste (também chamado de grua e, nos navios pau de carga) é um equipamento utilizado para a elevação e a movimentação de cargas e materiais pesados, assim como, a ponte rolante usando o princípio da física no qual uma ou mais máquinas simples criam vantagem mecânica para mover cargas além da capacidade humana. São comumente empregados nas indústrias, terminais portuários e aeroportuários, onde se exige grande mobilidade no manuseio de cargas e transporte de uma fonte primária à embarcação, trem ou elemento de transporte primário, ou mesmo avião, para uma fonte secundária, um veículo de transportes ou depósitos local. Pode descarregar e carregar containers, organizar material pesado em grandes depósitos, movimentação de cargas pesadas na construção civil e as conhecidas pontes rolantes ou guindastes móveis muito utilizados nas indústrias de laminação e motores pesados.\n\nOs primeiros guindastes foram inventados na Idade Antiga pelos gregos e eram movidos por homens e/ou animais de carga (como os burros). Esses guindastes eram usados para construção de carros e prédios. Guindastes maiores foram desenvolvidos posteriormente usando engrenagens movidas por tração humana, permitindo a elevação de cargas mais pesadas.\n\nNa Alta Idade Média, guindastes portuários foram introduzidos para carregamentos, descarregamentos e construções de embarcações - alguns eram construídos sobre torres de pedra para estabilidade e capacidade extras. Os primeiros guindastes eram feitos de madeira, mas com a Revolução Industrial, passaram a ser produzidos com ferro fundido e aço. Atualmente o guindaste é constituído normalmente por uma torre equipada com cabos e roldanas que é usada para levantar e baixar materiais.\n\nNa construção civil, os guindastes são estruturas temporárias fixadas ao chão ou montadas num veículo especialmente concebido, normalmente ao lado da edificação, usado para elevar cargas pesadas aos andares superiores.\n\nOs guindastes podem ser operados com cabine aonde há um controlador ou operador, por uma pequena unidade de controle que pode comunicar via rádio, por infravermelhos ou ligada por cabo.\n', '0000-00-00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `index_portofolios`
--

CREATE TABLE IF NOT EXISTS `index_portofolios` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `texto` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `index_portofolios`
--

INSERT INTO `index_portofolios` (`id`, `titulo`, `imagem`, `texto`) VALUES
(1, 'Caminhões Munck', 'guindaste_munck_hyva_HC_501_3.jpg', '             A Veromath oferece o que há de mais moderno em equipamentos.                                                                                                                                                                                                                                            '),
(2, 'Guindastes', 'caminhao_munck_com_cesta_aerea_5.jpg', 'Oferecemos serviços de alta qualidade, para atender as necessidades de nossos clientes.                                                                        ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `index_rows`
--

CREATE TABLE IF NOT EXISTS `index_rows` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `imagem` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `titulo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `texto` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `index_rows`
--

INSERT INTO `index_rows` (`id`, `tipo`, `imagem`, `titulo`, `texto`) VALUES
(2, 'Servico', 'caminhao_munck_com_cesta_aerea_5.jpg', 'Serviços', 'Oferecemos serviços de alta qualidade, para atender as necessidades de nossos clientes.                                                                        '),
(1, 'Equipamento', 'caminhao_munck_50T_4.jpg', 'Equipamentos', '             A Veromath oferece o que há de mais moderno em equipamentos.                                                                                                                                                                                                                                            ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `index_slide`
--

CREATE TABLE IF NOT EXISTS `index_slide` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `n_ordem` int(30) NOT NULL,
  `imagem` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `imagem` (`imagem`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=244 ;

--
-- Extraindo dados da tabela `index_slide`
--

INSERT INTO `index_slide` (`id`, `n_ordem`, `imagem`) VALUES
(216, 2, 'Caminhoes_Munck_Banner06.jpg'),
(236, 7, 'Caminhoes_Munck_Banner02.jpg'),
(219, 6, 'caminhao_munk_05.jpg'),
(223, 4, 'Guindaste_MD250.jpg'),
(235, 3, 'Caminhoes_Munck_Banner01.jpg'),
(240, 5, 'Caminhoes_Munck_Banner04.jpg'),
(237, 10, 'Caminhao_Plataforma_Banner01.jpg'),
(238, 9, 'Caminhoes_Munck_Banner03.jpg'),
(243, 8, 'Caminhoes_Munck_Banner07.jpg'),
(242, 1, 'Caminhoes_Munck_Banner05.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos_imgs`
--

CREATE TABLE IF NOT EXISTS `servicos_imgs` (
  `id` int(11) NOT NULL,
  `id_img` int(11) NOT NULL AUTO_INCREMENT,
  `servico` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `imagem_arquivo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `n_ordem` int(10) NOT NULL,
  PRIMARY KEY (`id_img`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `servicos_imgs`
--

INSERT INTO `servicos_imgs` (`id`, `id_img`, `servico`, `imagem_arquivo`, `n_ordem`) VALUES
(3, 1, '', 'servico_munck_remocao_tecnica_2.jpg', 1),
(3, 4, '', 'servico_munck_remocao_tecnica_3.jpg', 2),
(4, 6, '', 'servico_munck_carga_descarga_1.jpg', 1),
(18, 7, '', 'servico_munck_cesta_aerea_2.jpg', 1),
(18, 8, '', 'servico_munck_cesta_aerea_3.jpg', 2),
(1, 9, '', 'caminhao_munck_com_cesta_aerea_5.jpg', 1),
(1, 10, '', 'munck_madal_palfinger_modelo_PK_26000_3.jpg', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos_servicos`
--

CREATE TABLE IF NOT EXISTS `servicos_servicos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `n_ordem` int(10) NOT NULL,
  `class` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img_menu` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img_principal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alt` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `titulo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descricao` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=28 ;

--
-- Extraindo dados da tabela `servicos_servicos`
--

INSERT INTO `servicos_servicos` (`id`, `n_ordem`, `class`, `img_menu`, `img_principal`, `alt`, `titulo`, `descricao`) VALUES
(1, 1, '', 'servico_icamento_menu.png', 'servico_munck_icamento_equipamentos_1.jpg', 'Serviço Munck Içamento de Equi', 'Içamento de Equipamentos', 'Guindaste articulado - munck com alcance de 32 metros de altura. Ideal para: - Montagem de estruturas metálicas. - Montagem de estruturas pré-moldadas de concreto. - Instalação e manutenção de cobertura de galpões. - Instalação e manutenção de Luminosos.                                                                                                                                                     '),
(2, 2, '', 'servico_montagem_industrial_menu.png', 'servico_munck_montagem_industrial_1.jpg', 'Serviço Munk Montagem Industri', 'Montagem Industrial', 'A precisão e rapidez de operação dos guindastes articulados - munck da Madal Palfinger possibilitam um ganho de produtividade para operações de Montagem Industrial trazendo ao cliente uma significativa economia, pois além de executar os serviços de içamento, o munck também transporta a carga. A Veromath Transportes possui guindastes articulados - munck com até 32 metros de lança. O guindaste articulado - munck modelo PK 36080 da Veromath é capaz de elevar cargas com 5750 Kg a 18 metros de altura. Uma performance diferenciada por se tratar de um "munck".               '),
(3, 3, '', 'servico_remocao_tecnica_menu.png', 'servico_munck_remocao_tecnica_1.jpg', 'Serviço Remoção Técnica', 'Remoção Técnica', 'A Veromath Transportes possui uma equipe especializada para a execução de remoções técnicas de máquinas e equipamentos, mudança de layout industrial. A Veromath possui um dos guindastes articulados - munck com maior capacidade disponível no mercado, trata-se de um munck com capacidade para 60 toneladas métricas. A empresa possui Know-How na movimentação e transporte de: - Máquinas Injetoras - Grupo Gerador - Máquinas Operatrizes - Prensas - Tornos.                                               '),
(4, 4, '', 'servico_carga_descarga_menu.png', 'servico_munck_carga_descarga_2.jpg', 'Serviço Munck Carga Descarga', 'Carga e descarga', 'Execução de serviços de carga e descarga com a utilização de guindastes articulados - munck ou guindastes telescópicos. A Veromath utiliza todos os equipamentos de apoio necessários para que as operações de içamento sejam feitas com segurança, e sem danos à carga. A empresa possui guindastes articulados - munck com capacidade de até 60 toneladas métricas.            '),
(18, 5, '', 'servico_cesta_aerea.png', 'servico_munck_cesta_aerea_1.jpg', '', 'Içamento com cesta aérea', 'Içamento de pessoas com a utilização de cesta aérea acoplada em caminhões guindauto - munck ou guindastes para diversas finalidades, dentre elas: - Inspeção de viadutos. - Montagem e manutenção de Comunicação Visual totens, fachadas, front light, back light e luminosos. - Inspeção e auxílio na montagem de estruturas metálicas. - Auxílio para filmagens de eventos. - Manutenção de máquinas. - Serviços diversos para construção civil.          ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sobre_empresa`
--

CREATE TABLE IF NOT EXISTS `sobre_empresa` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `texto` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `sobre_empresa`
--

INSERT INTO `sobre_empresa` (`id`, `titulo`, `texto`) VALUES
(1, 'A História da Veromath', 'A Veromath é uma empresa de Transportes que atua com excelência na locação de guindastes articulados – munck, guindastes telescópicos, caminhões trucados e carretas.\r\n\r\nA Veromath tem como missão, proporcionar serviços de alta qualidade em movimentação, elevação e transporte de cargas, que atendam as necessidades específicas de seus clientes. Para tanto, a Veromath possui uma equipe engajada com seus valores e objetivos, uma excelente estrutura de tecnologia da informação e guindastes de última geração.\r\n\r\nA empresa possui frota própria de guindastes articulados - munck, guindastes telescópicos, caminhões truck e carretas para carga seca. Dentre os guindastes - munck disponíveis para locação, merecem destaque os Guindaste Articulados da Madal Palfinger com alcance de 26 metros de altura e o Guindaste Bi-Articualdo da Hyva com alcance de 28 metros.                                                                ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sobre_imgs`
--

CREATE TABLE IF NOT EXISTS `sobre_imgs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imagem` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `sobre_imgs`
--

INSERT INTO `sobre_imgs` (`id`, `imagem`) VALUES
(1, 'caminhao_munk_10.jpg'),
(2, 'servico_munck_montagem_industrial_1.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tipo_usuario` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `tipo_usuario`) VALUES
(8, 'Teste', 'teste@teste', 'teste', 'Administrador'),
(9, 'Renato', 'renato@renato', 'renato', 'Administrador');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
