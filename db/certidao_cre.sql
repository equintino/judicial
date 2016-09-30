-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 30-Set-2016 às 22:04
-- Versão do servidor: 5.6.15-log
-- PHP Version: 5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pj`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `certidao_cre`
--

CREATE TABLE IF NOT EXISTS `certidao_cre` (
  `Numero_CNJ_Antigo_cre` varchar(25) DEFAULT NULL,
  `Natureza_cre` varchar(6) DEFAULT NULL,
  `UF_cre` varchar(19) DEFAULT NULL,
  `Parte_contraria_cre` varchar(42) DEFAULT NULL,
  `Segurado_cre` varchar(39) DEFAULT NULL,
  `Honorarios_cre` varchar(11) DEFAULT NULL,
  `Valor_cre` varchar(15) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `certidao_cre`
--

INSERT INTO `certidao_cre` (`Numero_CNJ_Antigo_cre`, `Natureza_cre`, `UF_cre`, `Parte_contraria_cre`, `Segurado_cre`, `Honorarios_cre`, `Valor_cre`) VALUES
('0023428-02.2011.8.19.0202', 'Cível', 'Rio de Janeiro', 'Arlene Jose Alves', 'Edson Francisco Alves', '', 'R$ 3.151,11'),
('0005588-13.2011.8.19.0029', 'Cível', 'Rio de Janeiro', 'Jane Karla Menezes de Alencar', 'Maria do Patrocínio de Menezes Alencar', '', 'R$ 1.050,00'),
('0011127-74.2010.8.19.0067', 'Cível', 'Rio de Janeiro', 'Denilson Simião', 'Denir Simião Motta', '', 'R$ 5.000,00'),
('0043413-50.2007.8.07.0001', 'Cível', 'Distrito Federal', 'Francisca Frota Cavalcante', 'Joaquim Dias Cavalcante', '', 'R$ 79.997,78'),
('0257651-86.2009.8.19.0001', 'Cível', 'Rio de Janeiro', 'Anderson Luiz Castilho Soares', 'Mario Ribeiro Soares', '', 'R$ 30.068,67'),
('2656109-61.2008.8.13.0024', 'Cível', 'Minas Gerais', 'Nori Lapa Carabajal', 'Nori Lapa Carabajal', '', 'R$ 21.200,11'),
('0081906-28.2009.8.07.0001', 'Cível', 'Distrito Federal', 'Pedro Henrique Silva Mendes', 'Francisca Alves da Silva', '', 'R$ 208.987,07'),
('1046911-62.2011.8.19.0002', 'Cível', 'Rio de Janeiro', 'Walcy Pereira Igreja', 'Walcy Pereira Igreja', '', 'R$ 5.568,34'),
('0427185-62.2008.8.19.0001', 'Cível', 'Rio de Janeiro', 'Ana Lúcia Limaverde', 'Aristides Celso Ferreira', '', 'R$ 7.005,85'),
('0116126-82.2010.8.19.0001', 'Cível', 'Rio de Janeiro', 'Jorge Luis Fraga', 'Domingos Evangelista', '', 'R$ 10.342,09'),
('0043913-87.2005.8.07.0001', 'Cível', 'Distrito Federal', 'Joacir Carneiro De Mesquita', 'Antônio Carneiro de Mesquita', '', 'R$ 32.683,17'),
('0039599-64.2006.8.07.0001', 'Cível', 'Distrito Federal', 'Gerulina Franca Lopo', 'Gerulina Franca Lopo', '', 'R$ 119.499,87'),
('0054397-20.2012.8.07.0001', 'Cível', 'Distrito Federal', 'Paulo Ferreira Pedrosa', 'Paulo Ferreira Pedrosa', '', 'R$ 16.760,99'),
('0001854-13.2012.8.07.0010', 'Cível', 'Distrito Federal', 'Vanderleia Brasil Da Costa', 'Leda Brasil Da Costa', '', 'R$ 92.894,07'),
('0044033-52.2013.8.07.0001', 'Cível', 'Distrito Federal', 'Ivanoel Gomes Da Silva', 'Ivanoel Gomes Da Silva', '', 'R$ 167.827,93'),
('0039334-52.2012.8.07.0001', 'Cível', 'Distrito Federal', 'Sonia Maria Freitas Frade', 'Emmanuel Macias Frade', '', 'R$ 28.804,14'),
('0035185-32.2012.8.19.0210', 'Cível', 'Rio de Janeiro', 'Luis Roberto Lima Carrano', 'Albertina Lima Carraro', '', 'R$ 7.800,00'),
('0285208-77.2011.8.19.0001', 'Cível', 'Rio de Janeiro', 'MARA CRISTINA MEIRELLES', 'OSCARINO GOMES', '', 'R$ 16.000,00'),
('0129827-18.2007.8.19.0001', 'Cível', 'Rio de Janeiro', 'Carmem Coutinho Santos Moreira', 'Mario Luis Pellon Santos', '', ''),
('0261431-83.2013.8.19.0004', 'Cível', 'Rio de Janeiro', 'Marcos Claudio Barros', 'Maria Da Conceição Barroso Azevedo', '', 'R$ 21.000,00'),
('0227327-40.2014.8.19.0001', 'Cível', 'Rio de Janeiro', 'Julio Adler', 'Cadem Soriano Moussatche', '', 'R$ 38.026,39'),
('0033697-03.2011.8.19.0202', 'Cível', 'Rio de Janeiro', 'Carlos Roberto Rodrigues Lopes', 'Daila da Cunha Lopes', '', 'R$ 5.227,40'),
('0004114-09.2008.8.24.0082', 'Cível', 'Santa Catarina', 'Wilma Stuart Garcez', 'Wilson Silveira Garcez', '', 'R$ 7.832,82'),
('0006651-20.2008.8.19.0210', 'Cível', 'Rio de Janeiro', 'Demostenes dos Santos', 'Demostenes dos Santos', '', 'R$ 3.000,00'),
('0076745-04.2009.8.19.0001', 'Cível', 'Rio de Janeiro', 'Alice Adelaide M. Craveiro', 'Jacy Maciel de Azevedo', '', 'R$ 8.510,72'),
('0001174-27.2003.8.26.0297', 'Cível', 'São Paulo', 'Grace Keller Lopes de Moura', 'Júlio de Moura', '', 'R$ 18.729,12'),
('7336325-52.2009.8.13.0024', 'Cível', 'Minas Gerais', 'Maria Margarida Quintao', 'Geraldo de Oliveira Duarte', '', 'R$ 76.227,98'),
('0031551-46.2012.8.19.0204', 'Cível', 'Rio de Janeiro', 'Nair da Silva Nascimento', 'Arlindo Mariano do Nascimento', '', 'R$ 19.000,00'),
('0334279-53.2008.8.19.0001', 'Cível', 'Rio de Janeiro', 'Ubirajara de Menezes', 'Odeya Maia Manezes', '', 'R$ 10.320,00'),
('0003473-62.2010.8.19.0026', 'Cível', 'Rio de Janeiro', 'Haroldo Xavier dos Santos', 'Hilda Xavier dos Santos', '', 'R$ 5.260,00'),
('0001189-08.2007.8.19.0052', 'Cível', 'Rio de Janeiro', 'Vera Lucia Carvalho Soares', 'Vera Lucia Carvalho Soares', '', 'R$ 13.646,82'),
('0057059-97.2008.8.19.0021', 'Cível', 'Rio de Janeiro', 'Alcy Guimarães Nascimento', 'Alcy Guimarães Nascimento', '', ''),
('0002484-31.2013.8.26.0002', 'Cível', 'São Paulo', 'Vera Lucia Pereira Silva', 'Alfredo Pereira Da Silva', '', 'R$ 9.426,56'),
('0048298-58.2011.8.13.0112', 'Cível', 'Minas Gerais', 'Jose Leonardo Ferreira', 'Jose Leonardo Ferreira', '', 'R$ 12.651,98'),
('0005367-16.2005.8.26.0071', 'Cível', 'São Paulo', 'Sandra Regina de França Dionisio', 'Jesus Joana Dionísio', '', 'R$ 96.817,33'),
('0350276-76.2008.8.19.0001', 'Cível', 'Rio de Janeiro', 'Lucia Paulo de Souza', 'Maria do Carmo Gouveia', '', 'R$ 8.000,00'),
('0001147-81.2013.8.26.0042', 'Cível', 'São Paulo', 'Patrícia Vicentini Viccari', 'Odamir Vicentini', '', 'R$ 46.292,07'),
('0127913-69.2014.8.19.0001', 'Cível', 'Rio de Janeiro', 'Alvaro Marques da Silva', 'Hosana Correa da Silva', '', 'R$ 19.000,00'),
('0029855-43.2010.8.19.0204', 'Cível', 'Rio de Janeiro', 'Neves Da Penha Martins', 'Arnaldo Dos Anjos Martins', '', 'R$ 11.116,95'),
('0192446-47.2008.8.19.0001', 'Cível', 'Rio de Janeiro', 'Nilza de Menezes Meneguetti', 'Aristides Isaias Meneguetti', '', 'R$ 22.461,06'),
('0003150-23.2013.8.26.0005', 'Cível', 'São Paulo', 'Urzélia da Conceição Portieri', 'Darcio Portieri', '', 'R$ 11.100,00'),
('1005621-59.2013.8.26.0016', 'Cível', 'São Paulo', 'Marcos Antonio Manno', 'Marcos Antonio Manno', '', 'R$ 9.572,60'),
('0144966-20.2001.8.19.0001', 'Cível', 'Rio de Janeiro', 'Mario Oswaldo Lima do Nascimento', 'Mario Oswaldo Lima do Nascimento', '', ''),
('0015251-69.2008.8.19.0003', 'Cível', 'Rio de Janeiro', 'Dalva Ferreira da Rosa', 'Jose Furtado da Rosa', '', 'R$ 38.712,78'),
('0023344-96.2006.8.08.0035', 'Cível', 'Espírito Santo', 'Admirson Santos', 'Edmirson Santos', '', 'R$ 112.224,80'),
('0000546-82.2012.8.19.0211', 'Cível', 'Rio de Janeiro', 'FABIO DA SILVA LEPAGE', 'FABIO DA SILVA LEPAGE', '', ''),
('0147365-02.2013.8.19.0001', 'Cível', 'Rio de Janeiro', 'Carmem Gomes de Almeida', 'Darli de Almeida', '', 'R$ 53.862,48'),
('0062784-11.2000.8.19.0001', 'Cível', 'Rio de Janeiro', 'Jorge Inacio Sinflorio', 'Jorge Inacio Sinflorio', '', 'R$ 4.117,29'),
('0408329-50.2008.8.19.0001', 'Cível', 'Rio de Janeiro', 'Zuila Maria Alves Portela dos Santos', 'Gilton Portela dos Santos', '', 'R$ 53.236,66'),
('0013715-34.2012.8.21.0033', 'Cível', 'Rio Grande do Sul', 'Alfeu da Silva', 'Bernadete Luiz da Silva', '', 'R$ 16.228,23'),
('0153223-74.2013.8.06.0001', 'Cível', 'Ceará', 'Nilda Maria Fontenelle Peixoto', 'Ilza Fontenelle', '', 'R$ 75.566,37'),
('0033430-93.2009.8.20.0001', 'Cível', 'Rio Grande do Norte', 'Maria Rosalia Mapurunga de Pinho Pessoa', 'Geraldo de Pinho Pessoa', '', 'R$ 298.577,77'),
('0010281-75.2011.8.16.0012', 'Cível', 'Paraná', 'Sergio Fernando Wahrhaftig', 'MATHILDE WAHRHAFTIG', '', 'R$ 1.146,17'),
('0217160-61.2014.8.19.0001', 'Cível', 'Rio de Janeiro', 'Mário Sérgio dos Santos', 'Maria Auxiliadora dos Santos', '', 'R$ 28.023,87'),
('0037989-71.2013.8.05.0001', 'Cível', 'Bahia', 'Maria Cely Rabelo Brito Menezes', 'Avany Rabelo de OLiveira Brito', '', 'R$ 32.101,02'),
('0017187-17.2013.8.19.0210', 'Cível', 'Rio de Janeiro', 'Antonio dos Santos Ferreira', 'Sergio Nascimento Ferreira', '', ''),
('0003983-33.2002.8.11.0041', 'Cível', 'Mato Grosso', 'Juscelino Matias de Albuquerque', 'Juscelino Matias de Albuquerque', '', 'R$ 255.497,66'),
('0225154-43.2014.8.19.0001', 'Cível', 'Rio de Janeiro', 'Fabio Feliciano Barbosa', 'Jeannete Feliciano Barbosa', '', 'R$ 2.500,00'),
('0174219-91.2011.8.05.0001', 'Cível', 'Bahia', 'João Dias Oliveira', 'João Dias Oliveira', '', 'R$ 13.397,57'),
('0095739-21.2012.8.21.0001', 'Cível', 'Rio Grande do Sul', 'Lenira Peixoto Volpatto', 'Alcides Luciano Volpatto', '', 'R$ 14.194,30'),
('0058268-44.2014.8.05.0001', 'Cível', 'Bahia', 'Ezequiel Jose Teixeira Bandeira', 'Ruth de Abreu Teixeira', '', 'R$ 28.800,00'),
('0008043-73.2008.8.16.0017', 'Cível', 'Paraná', 'Maria Iliane Sales de Araújo Cavalcantes', 'Oswaldo Barros Cavalcante', '', 'R$ 25.000,00'),
('0192447-85.2009.8.05.0001', 'Cível', 'Bahia', 'Yolanda Neves dos Santos', 'Yolanda Neves dos Santos', '', 'R$ 1.150,92'),
('0005093-11.2012.8.16.0160', 'Cível', 'Paraná', 'Hamilton da Silva Almeida', 'José Rodrigues de Almeida', '', 'R$ 20.546,92'),
('0007631-88.2010.8.26.0084', 'Cível', 'São Paulo', 'José Rogério Bueno', 'Vera Lucia Bueno', '', 'R$ 59.281,84'),
('0064868-77.2014.8.19.0038', 'Cível', 'Rio de Janeiro', 'Patrícia Ferreira dos Santos', 'Celia Rodrigues Pereira', '', 'R$ 19.724,09'),
('0081128-35.2014.8.19.0038', 'Cível', 'Rio de Janeiro', 'Cicera Monteira Soares', 'Vicente Soares', 'R$ 2.000,00', 'R$ 10.000,00'),
('0574391-74.2005.8.21.0019', 'Cível', 'Rio Grande do Sul', 'Espolio de Noe Nene Silveira', 'Noé Nunes', '', 'R$ 14.114,65'),
('0352420-13.2014.8.19.0001', 'Cível', 'Rio de Janeiro', 'Michele Codeço Carneiro', 'Henrique Gonçalves Codeço Filho', '', 'R$ 26.000,00'),
('0031771-40.2005.8.21.0008', 'Cível', 'Rio Grande do Sul', 'Tania Maria Miranda da Cruz', 'Manoel Jordão De Souza', '', 'R$ 264.734,86'),
('0015142-21.2013.8.07.0001', 'Cível', 'Distrito Federal', 'Matheis Da Rocha Tremendadi', 'Maria Gonçalves Pacheco Da Rocha', '', 'R$ 5.748,96'),
('0106369-62.2007.8.24.0023', 'Cível', 'Santa Catarina', 'Janet Feijo Faoro', 'Alcebiades Faoro', '', 'R$ 10.319,68'),
('0006317-88.2013.8.07.0001', 'Cível', 'Distrito Federal', 'Lucia Vania Parecida Costa', 'Fabio De Novaes', '', 'R$ 23.038,25'),
('0117138-49.2001.8.19.0001', 'Cível', 'Rio de Janeiro', 'Augusto Ferreira da Costa Filho', 'Augusto Ferreira da Costa Filho', '', 'R$ 24.007,61'),
('0057754-48.2007.8.19.0001', 'Cível', 'Rio de Janeiro', 'Maria Jose Marques Pereira', 'Maria Jose Marques Pereira', '', 'R$ 5.175,44'),
('0085636-14.2009.8.19.0001', 'Cível', 'Rio de Janeiro', 'Zulmira Coelho da Silva', 'Terezinha Freire Coelho', '', 'R$ 94.170,64'),
('0395351-07.2009.8.19.0001', 'Cível', 'Rio de Janeiro', 'Marinete da Silva Nascimento', 'Maria das Dores Araujo', '', 'R$ 21.327,70'),
('0280323-88.2009.8.19.0001', 'Cível', 'Rio de Janeiro', 'Espolio de Fatima Faria Castanon', 'Fatima Faria Castanon', '', 'R$ 77.500,00'),
('0120038-58.2008.8.19.0001', 'Cível', 'Rio de Janeiro', 'Nila Rezende Neves Martins', 'Odileia Rezende Martins', '', 'R$ 20.000,00'),
('0413942-12.2012.8.19.0001', 'Cível', 'Rio de Janeiro', 'Rosely Barbosa Freire', 'Jose Bezerra Simões Freire', '', 'R$ 12.000,00'),
('9018868-70.2014.8.13.0024', 'Cível', 'Minas Gerais', 'Maria Julisse dos Santos', 'Rubens dos Santos', '', 'R$ 25.914,19'),
('0185462-71.2013.8.19.0001', 'Cível', 'Rio de Janeiro', 'Clynson Silva de Oliveira', 'Antonio Lucas de Oliveira', '', 'R$ 8.708,43'),
('0003329-70.2014.8.19.0213', 'Cível', 'Rio de Janeiro', 'Rute Elena Ferreira Gomes', 'Manoel Ferreira', '', 'R$ 10.927,33'),
('0006108-20.2012.8.19.0002', 'Cível', 'Rio de Janeiro', 'Nelmyr de Araújo Fogaça', 'Gessy Correa Fogaça', '', 'R$ 2.334,94'),
('0429221-86.2009.8.21.0001', 'Cível', 'Rio Grande do Sul', 'Espolio Werner Soldan', 'Espolio Werner Soldan', 'R$ 500,00', ''),
('0017050-42.2011.8.16.0031', 'Cível', 'Paraná', 'Miroslava Onyszko Alves', 'Janice de Fátima Andrade Gusso Brugg', '', 'R$ 8.944,97'),
('0177531-60.2006.8.26.0100', 'Cível', 'São Paulo', 'Beatriz Costa Tsukamoto', '', '', 'R$ 359.513,31'),
('0080569-29.2013.8.19.0001', 'Cível', 'Rio de Janeiro', 'Vanessa Cristina Pereira', '', '', 'R$ 11.000,00'),
('0116920-68.2011.8.26.0100', 'Cível', 'São Paulo', 'Manoel Soares da Silva', '', 'R$ 1.981,50', 'R$ 19.815,00'),
('0032656-55.2010.8.11.0041', 'Cível', 'Mato Grosso', 'Maria Lygia de Borges Garcia', '', '', 'R$ 102.245,52'),
('0054784-02.2012.8.19.0001', 'Cível', 'Rio de Janeiro', 'Elizabeth Martins dos Santos', '', '', 'R$ 8.700,00'),
('0057827-97.2013.8.05.0001', 'Cível', 'Bahia', 'Normelia Francisca Brito Santana', '', '', 'R$ 16.314,40'),
('0005687-65.2009.8.16.0019', 'Cível', 'Paraná', 'Pedro Melchior Ferreira Prestes', '', 'R$ 0,00', 'R$ 20.491,43'),
('0021059-35.2011.8.19.0202', 'Cível', 'Rio de Janeiro', 'Odete Mendes Da Costa Cunha', '', 'R$ 0,00', 'R$ 8.000,00'),
('0028528-58.2013.820.0001', 'Cível', 'Rio Grande do Norte', 'Maria de Fátima Cruz de Menezes', 'DEBORAH CRUZ', '', 'R$ 27.000,00'),
('0001244-28.2013.8.16.0182', 'Cível', 'Paraná', 'Manoel Aguiar Filho', 'Manoel Aguir Filho', '', 'R$ 13.736,01'),
('0042268-47.2012.8.19.0001', 'Cível', 'Rio de Janeiro', 'Danilo de Aquino Coelho', '', 'R$ 0,00', 'R$ 6.200,00'),
('0019666-02.2009.8.25.0001', 'Cível', 'Sergipe', 'Maria De Fatima Dos Santos', 'Leando Monfradini', 'R$ 0,00', 'R$ 21.662,85'),
('0103191-24.2002.8.07.0001', 'Cível', 'Distrito Federal', 'Edineia Lima Dos Reis', 'Nilton Dos Reis', 'R$ 1.000,00', 'R$ 30.000,00'),
('0000508-64.2013.8.25.0083', 'Cível', 'Sergipe', 'Dilma Carvalho Almeida de Aguiar', 'Antenor Machado De Aguiar', '', 'R$ 27.441,64'),
('0394399-28.2009.8.19.0001', 'Cível', 'Rio de Janeiro', 'Heliana Moreira Vidal Araújo', 'Heliana Moreira Vidal Araújo', '', 'R$ 15,00'),
('0437546-02.2012.8.19.0001', 'Cível', 'Rio de Janeiro', 'Jose Antonio Loureiro Aiello', 'Jose Antonio Loureiro Aiello', '', 'R$ 2.414,00'),
('0030445-82.2010.8.19.0054', 'Cível', 'Rio de Janeiro', 'Geny Tosta Rodrigues', 'Reynaldo Rodrigues', '', 'R$ 13.107,48'),
('0000971-17.2010.8.24.0090', 'Cível', 'Santa Catarina', 'Monica de Oliveira Giovannetti', 'Osvaldo Giovannetti', 'R$ 3.639,30', 'R$ 48.167,20'),
('0005972-81.2013.8.26.0361', 'Cível', 'São Paulo', 'Telma Aparecida Margarido Teixeira Barroso', 'Antonio Rodrigues Teixeira Filho', '', 'R$ 6.877,76'),
('0330119-09.2013.8.19.0001', 'Cível', 'Rio de Janeiro', 'Jorge Reis', 'Paulo Reais', '', 'R$ 14.556,00'),
('1634535-86.2011.8.19.0004', 'Cível', 'Rio de Janeiro', 'Maria Do Carmo Mendes Costa', 'José Chaves Costa', '', ''),
('0356496-51.2012.8.19.0001', 'Cível', 'Rio de Janeiro', 'Leandro Tavares Mourao', 'Neuda Maria Tavares', '', ''),
('0022899-76.2006.8.19.0066', 'Cível', 'Rio de Janeiro', 'Ernani Nascimento Neto', 'Ernani Nascimento Neto', '', 'R$ 10.032,09'),
('0328163-55.2013.8.19.0001', 'Cível', 'Rio de Janeiro', 'CARLOS ANTONIO DA SILVA', 'João José da Silva', '', 'R$ 6.375,44'),
('0049780-97.2012.8.08.0030', 'Cível', 'Espírito Santo', 'Janete da Penha Rodrigues Passos', 'Jair Passos', '', ''),
('0000740-22.2013.8.16.0182', 'Cível', 'Paraná', 'Sonia Maria de Souza Chorchordin', 'Iwan Chorchodin', '', 'R$ 1.066,07'),
('0089990-23.2012.8.21.0001', 'Cível', 'Rio Grande do Sul', 'Geraldo de Souza', 'Yara Luiza de Souza', '', 'R$ 33.425,33'),
('0112522-74.2008.8.05.0001', 'Cível', 'Bahia', 'Espolio de Label Leomar da Luz', 'Label Leomar da Luz', '', 'R$ 2.156,88'),
('0748011-77.2000.8.06.0001', 'Cível', 'Ceará', 'Francisca Maria Jose Vale de Araujo', 'Manoel Machado de Araújo', '', 'R$ 32.898,62'),
('0014525-69.2006.8.19.0002', 'Cível', 'Rio de Janeiro', 'Cristiane da Cruz barreto', 'Joaquim de Mattos', '', ''),
('0000895-79.2010.814.0701', 'Cível', 'Pará', 'Marcel Bruno Araujo Martins', '', '', 'R$ 4.162,27'),
('001.2011.035.074-9', 'Cível', 'Rio Grande do Norte', 'Miriam Gonçalves Da Silva', 'Miriam Gonçalves Da Silva', '', 'R$ 6.740,74'),
('0009006-61.2012.8.17.0810', 'Cível', 'Pernambuco', 'Maria da Penha Pereira da Silva', 'José Pereira da Silva', '', 'R$ 11.546,41'),
('0183043-69.1999.8.19.0001', 'Cível', 'Rio de Janeiro', 'IRB - Brasil Resseguros SA', '', '', 'R$ 5.275.539,12');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
