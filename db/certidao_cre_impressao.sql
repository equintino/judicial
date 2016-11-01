-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 01-Nov-2016 às 19:32
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
-- Estrutura da tabela `certidao_cre_impressao`
--

CREATE TABLE IF NOT EXISTS `certidao_cre_impressao` (
  `Numero_CNJ_Antigo` varchar(28) DEFAULT NULL,
  `Natureza` varchar(6) DEFAULT NULL,
  `UF` varchar(2) DEFAULT NULL,
  `Parte_contraria` varchar(38) DEFAULT NULL,
  `Segurado` varchar(34) DEFAULT NULL,
  `Vlr_deferido` decimal(12,2) DEFAULT NULL,
  `Vlr_da_causa` decimal(12,2) DEFAULT NULL,
  `Vlr_condenacao` decimal(12,2) DEFAULT NULL,
  `Honorarios` decimal(12,2) DEFAULT NULL,
  `Vlr_certidao_de_credito` decimal(12,2) DEFAULT NULL,
  `Aba` varchar(10) DEFAULT NULL,
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `Alteracao` varchar(50) DEFAULT NULL,
  `login` varchar(10) DEFAULT NULL,
  `excluido` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=111 ;

--
-- Extraindo dados da tabela `certidao_cre_impressao`
--

INSERT INTO `certidao_cre_impressao` (`Numero_CNJ_Antigo`, `Natureza`, `UF`, `Parte_contraria`, `Segurado`, `Vlr_deferido`, `Vlr_da_causa`, `Vlr_condenacao`, `Honorarios`, `Vlr_certidao_de_credito`, `Aba`, `id`, `Alteracao`, `login`, `excluido`) VALUES
('0023344-96.2006.8.08.0035', 'Cível', 'ES', 'Admirson Santos', 'Admirson Santos', '0.00', '0.00', '0.00', '11228.48', '112224.80', 'Impressão', 1, '0000-00-00 00:00:00', '', 0),
('0000029-66.2008.8.26.0197', 'Cível', 'Sã', 'Marineide Celestino de Santana Silva', 'Gildo Severino da Silva', NULL, '0.00', '0.00', '50000.00', '123.00', 'IMPRESSÃO', 2, '1477410761', 'equintino', 1),
('0019976-86.2013.8.19.0210', 'Cível', 'RJ', 'Claudia Avila Abreu da Silva', 'Anita de Assis Freitas', '0.00', '0.00', '0.00', '0.00', '3966.18', 'Impressão', 3, '0000-00-00 00:00:00', '', 0),
('192446-47.2008.8.19.0001', 'Cível', 'RJ', 'Nilza de Menezes Meneguetti', 'Aristides Isaias Meneguetti', '0.00', '0.00', '0.00', '0.00', '60912.16', 'Impressão', 4, '0000-00-00 00:00:00', '', 0),
('0117138-49.2001.8.19.0001', 'Cível', 'RJ', 'Augusto Ferreira da C.Filho', 'Augusto Ferreira da Costa Filho', '0.00', '0.00', '0.00', '0.00', '54233.69', 'Impressão', 5, '0000-00-00 00:00:00', '', 0),
('0031443-50.2004.815.2001', 'Cível', 'PB', 'Mariza Ribeiro C Muguett /outros', 'Bruno Rene Roger Muguet', '0.00', '0.00', '0.00', '0.00', '1361127.18', 'Impressão', 6, '0000-00-00 00:00:00', '', 0),
('0227327-40.2014.8.19.0001', 'Cível', 'RJ', 'Julio Adler', 'Cadem Soriano Moussatche', '0.00', '0.00', '0.00', '0.00', '38026.39', 'Impressão', 7, '0000-00-00 00:00:00', '', 0),
('0103502-35.2009.8.19.0001', 'Cível', 'RJ', 'Bruno Leonardo Esteves Derlby e outro', 'Catarina Alves Esteves', '0.00', '0.00', '0.00', '66484.12', '664841.22', 'Impressão', 8, '0000-00-00 00:00:00', '', 0),
('0044928-05.2013.815.2001', 'Cível', 'PB', 'Cicero Pereira da Silva', 'Cicero Pereira da Silva', '0.00', '0.00', '0.00', '4253.95', '28359.65', 'Impressão', 9, '0000-00-00 00:00:00', '', 0),
('2010.01.1.036179-8', 'Cível', 'DF', 'Claudio Aparecido Batista da Silva', 'Claudio Aparecido Batista da Silva', '0.00', '0.00', '0.00', '0.00', '519967.94', 'Impressão', 10, '0000-00-00 00:00:00', '', 0),
('0121086-13.2012.8.19.0001', 'Cível', 'RJ', 'Cristiane Oliveira da Silva', 'Crinaura Viana de Melo', '0.00', '0.00', '0.00', '913.40', '9134.02', 'Impressão', 11, '0000-00-00 00:00:00', '', 0),
('0033697-03.2011.8.19.0202', 'Cível', 'RJ', 'Carlos Roberto Rodrigues Lopes', 'Daila da Cunha Lopes', '0.00', '0.00', '0.00', '0.00', '5227.40', 'Impressão', 12, '0000-00-00 00:00:00', '', 0),
('0116126-82.2010.8.19.0001', 'Cível', 'RJ', 'Jorge Luiz Fraga / outros', 'Domingos Evangelista da Fraga', '0.00', '0.00', '0.00', '0.00', '10342.09', 'Impressão', 13, '0000-00-00 00:00:00', '', 0),
('0023428.02.2011.8.19.0202', 'Cível', 'RJ', 'Arlene José Alves', 'Edson Francisco Alves', '0.00', '0.00', '0.00', '3511.11', '31511.08', 'Impressão', 14, '0000-00-00 00:00:00', '', 0),
('0186225-57.2002.8.26.0100', 'Cível', 'SP', 'Herbene de Souza Lima Barros', 'Enos Ribeiro de Barros', '0.00', '0.00', '0.00', '0.00', '193875.30', 'Impressão', 15, '0000-00-00 00:00:00', '', 0),
('0003459-43.2012.8.16.0139', 'Cível', 'PR', 'Antonia Roth', 'Ercilho Roth', '0.00', '0.00', '0.00', '0.00', '26090.41', 'Impressão', 16, '0000-00-00 00:00:00', '', 0),
('0033080-21.2011.8.17.0001', 'Cível', 'PE', 'Rosemira Alves Correia', 'Fernando Augusto Bezerra Correia', '0.00', '0.00', '0.00', '10303.81', '51519.09', 'Impressão', 17, '0000-00-00 00:00:00', '', 0),
('2009.01.1.018988-2', 'Cível', 'DF', 'Pedro Henrique Silva Mendes', 'Francisca Alves da Silva', '0.00', '0.00', '0.00', '18998.82', '189988.25', 'Impressão', 18, '0000-00-00 00:00:00', '', 0),
('032410009328-9', 'Cível', 'MG', 'Jovelino Lopes / outros', 'Francisco Lopes', '0.00', '0.00', '0.00', '0.00', '6073.37', 'Impressão', 19, '0000-00-00 00:00:00', '', 0),
('0033430-93.2009.8.20.0001', 'Cível', 'RN', 'Maria Rosalia Mapurunga  Pinho Pessoa', 'Geraldo Pinho de Pessoa', '0.00', '0.00', '0.00', '27143.43', '271434.34', 'Impressão', 20, '0000-00-00 00:00:00', '', 0),
('2006.01.1.127608-8', 'Cível', 'SP', 'Gerulina França Lopo', 'Gerulina França Lopo', '0.00', '0.00', '0.00', '0.00', '119499.87', 'Impressão', 21, '0000-00-00 00:00:00', '', 0),
('0408329-50.2008.8.19.0001', 'Cível', 'RJ', 'Zuila Maria Alves P dos Santos', 'Gilton Portela dos Santos', '0.00', '0.00', '0.00', '0.00', '108245.84', 'Impressão', 22, '0000-00-00 00:00:00', '', 0),
('2001.01.1.106.343-4', 'Cível', 'DF', 'Erico Ferreira Lourenço e outros', 'Helena Ferreira de Souza', '0.00', '0.00', '0.00', '0.00', '137989.69', 'Impressão', 23, '0000-00-00 00:00:00', '', 0),
('0103039.29.2007.8.12.0011/01', 'Cível', 'MS', 'Luiz Alberto Costa e outros', 'Helio Lima Costa', '0.00', '0.00', '0.00', '0.00', '34960.43', 'Impressão', 24, '0000-00-00 00:00:00', '', 0),
('0127913-69.2014.8.19.0001', 'Cível', 'RJ', 'Alvaro Marques da Silva', 'Hosana Correa da Silva', '0.00', '0.00', '0.00', '0.00', '24700.00', 'Impressão', 25, '0000-00-00 00:00:00', '', 0),
('0010392.58.2010.8.26.0451', 'Cível', 'SP', 'Thereza Fernandes Cantarelli', 'Idalino Cantareli', '0.00', '0.00', '0.00', '0.00', '49374.72', 'Impressão', 26, '0000-00-00 00:00:00', '', 0),
('0050453-53.2011.8.26.0506/01', 'Cível', 'SP', 'Maria Cecilia Fayao Coppede e outros', 'Ilda Guedes Carneiro Fayao', '0.00', '0.00', '0.00', '0.00', '4496.10', 'Impressão', 27, '0000-00-00 00:00:00', '', 0),
('0001471-25.2012.8.08.0069', 'Cível', 'ES', 'Geraldo Paulo S Pinheiro Junior', 'Ilka Palmeira Pinheiro', '0.00', '0.00', '0.00', '6409.14', '64091.35', 'Impressão', 28, '0000-00-00 00:00:00', '', 0),
('2013.01.1.172893-7', 'Cível', 'DF', 'Ivanoel Gomes da Silva', 'Ivanoel Gomes da Silva', '0.00', '0.00', '0.00', '0.00', '167827.93', 'Impressão', 29, '0000-00-00 00:00:00', '', 0),
('0049780-97.2012.8.08.0030', 'Cível', 'ES', 'Leandro R. Passos / outro', 'Jair Passos', '0.00', '0.00', '0.00', '0.00', '14203.99', 'Impressão', 30, '0000-00-00 00:00:00', '', 0),
('0052906-52.2006.8.19.0001', 'Cível', 'RJ', 'João Barbosa', 'João Barbosa', '0.00', '0.00', '0.00', '0.00', '6657.46', 'Impressão', 31, '0000-00-00 00:00:00', '', 0),
('2007.01.1.093747-5', 'Cível', 'DF', 'Francisca Frota Cavalcante', 'Joaquim Dias Cavalcante', '0.00', '0.00', '0.00', '0.00', '79998.78', 'Impressão', 32, '0000-00-00 00:00:00', '', 0),
('111674-67.2001.8.09.0051', 'Cível', 'GO', 'Rosa Lucia Perilo de Azevedo Camargo', 'Joaquim Marcelino de Camargo', '0.00', '0.00', '0.00', '0.00', '166288.23', 'Impressão', 33, '0000-00-00 00:00:00', '', 0),
('0037601-42.2009.8.21.0009', 'Cível', 'RS', 'Armando Boese Azambuja', 'José Carlos Azambuja', '0.00', '0.00', '0.00', '0.00', '20728.93', 'Impressão', 34, '0000-00-00 00:00:00', '', 0),
('0011856-43.2003.8.12.0002/02', 'Cível', 'MS', 'José Ivan da Silva', 'José Ivan da Silva', '0.00', '0.00', '0.00', '0.00', '515637.16', 'Impressão', 35, '0000-00-00 00:00:00', '', 0),
('0034723-81.2013.8.17.801', 'Cível', 'PE', 'José Ivo ramos de Menezes Filho', 'José Ivo Ramos de Menezes', '0.00', '0.00', '0.00', '0.00', '18092.18', 'Impressão', 36, '0000-00-00 00:00:00', '', 0),
('2012.10.1.001920-8', 'Cível', 'DF', 'Vanderleia Brasil da Costa', 'Leda Brasil da Costa', '0.00', '0.00', '0.00', '0.00', '92894.07', 'Impressão', 37, '0000-00-00 00:00:00', '', 0),
('003329-70.2014.8.19.0213', 'Cível', 'RJ', 'Rute Elena Ferreira Gomes', 'Manoel Ferreira', '0.00', '0.00', '0.00', '0.00', '10927.33', 'Impressão', 38, '0000-00-00 00:00:00', '', 0),
('0017891-80.2012.8.26.0077', 'Cível', 'SP', 'Zelinda Carneiro Gonzaga', 'Manoel Gomes Gonzaga', '0.00', '0.00', '0.00', '0.00', '199261.05', 'Impressão', 39, '0000-00-00 00:00:00', '', 0),
('0217160-61.2014.8.19.0001', 'Cível', 'RJ', 'Mário Sergio dos Santos', 'Maria Auxiliadora dos Santos', '0.00', '0.00', '0.00', '0.00', '28023.87', 'Impressão', 40, '0000-00-00 00:00:00', '', 0),
('045600007368-8', 'Cível', 'MG', 'Iara da Silva e outros', 'Maria das Graças da Silva', '0.00', '0.00', '0.00', '0.00', '114851.61', 'Impressão', 41, '0000-00-00 00:00:00', '', 0),
('0027102-14.2009.8.08.0024', 'Cível', 'ES', 'Maria das Graças F. Lourenço', 'Maria das Graças F. Lourenço', '0.00', '0.00', '0.00', '21061.49', '175513.83', 'Impressão', 42, '0000-00-00 00:00:00', '', 0),
('0284674-02.2012.8.19.0001', 'Cível', 'RJ', 'Rosangela Maria da Silva Motta', 'Maria Marlene da Silva Chagas', '0.00', '0.00', '0.00', '0.00', '71500.00', 'Impressão', 43, '0000-00-00 00:00:00', '', 0),
('0129827.18.2007.8.19.0001', 'Cível', 'RJ', 'Carmem Coutinho S.Moreira/outro', 'Mario Luiz Pellon Santos', '0.00', '0.00', '0.00', '0.00', '313243.17', 'Impressão', 44, '0000-00-00 00:00:00', '', 0),
('0283123-55.2010.8.19.0001', 'Cível', 'RJ', 'Livia Maria C de Almeida/outros', 'Milton Barbosa de Almeida', '0.00', '0.00', '0.00', '0.00', '83279.27', 'Impressão', 45, '0000-00-00 00:00:00', '', 0),
('2012.01.1.133487-7', 'Cível', 'DF', 'Anna Carolina Lima Pereira', 'Moyses Julio Pereira', '0.00', '0.00', '0.00', '17037.72', '170377.22', 'Impressão', 46, '0000-00-00 00:00:00', '', 0),
('0005779-43.2009.26.0220', 'Cível', 'SP', 'Clovis José de Lima Castilho/ outros', 'Neuza Pereira de Lima Castilho', '0.00', '0.00', '0.00', '0.00', '167153.22', 'Impressão', 47, '0000-00-00 00:00:00', '', 0),
('0231428-57.2013.8.19.0001', 'Cível', 'RJ', 'Tania Moreira da Silva/ outros', 'Nilza Gama de Andrade', '0.00', '0.00', '0.00', '0.00', '32500.00', 'Impressão', 48, '0000-00-00 00:00:00', '', 0),
('0001935-61.2014.8.26.0042', 'Cível', 'SP', 'Patricia Vicentini Viccari', 'Odamir Vicentini', '0.00', '0.00', '0.00', '0.00', '46292.07', 'Impressão', 49, '0000-00-00 00:00:00', '', 0),
('0021059-35.2011.8.19.0202', 'Cível', 'RJ', 'Michel Cunha Daher e outro', 'Odete Mendes Cunha', '0.00', '0.00', '0.00', '0.00', '12856.80', 'Impressão', 50, '0000-00-00 00:00:00', '', 0),
('0120038-58.2008.8.19.0001', 'Cível', 'RJ', 'Nila Rezende N Martins/ outros', 'Odiceia Rezende Martins', '0.00', '0.00', '0.00', '0.00', '234274.62', 'Impressão', 51, '0000-00-00 00:00:00', '', 0),
('0006887-46.2010.8.26.0132/01', 'Cível', 'SP', 'Valeria Aparecida B.F.Maniezzo', 'Oswaldo Fernandes ', '0.00', '0.00', '0.00', '881.36', '4406.83', 'Impressão', 52, '0000-00-00 00:00:00', '', 0),
('00330119-09.2013.8.19.0001', 'Cível', 'RJ', 'Jorge Reis', 'Paulo Reis', '0.00', '0.00', '0.00', '0.00', '14577.00', 'Impressão', 53, '0000-00-00 00:00:00', '', 0),
('9018868.70.2014.813.0024', 'Cível', 'MG', 'Maria Julisse dos Santos', 'Rubens dos Santos', '0.00', '0.00', '0.00', '0.00', '33852.28', 'Impressão', 54, '0000-00-00 00:00:00', '', 0),
('0003468-47.2009.8.26.0457', 'Cível', 'SP', 'Karen Alessandra B.Dutra/outros', 'Sebastiana Ap.Barone Dutra', '0.00', '0.00', '0.00', '0.00', '123098.32', 'Impressão', 55, '0000-00-00 00:00:00', '', 0),
('2005.01.1.058789-7', 'Cível', 'DF', 'Manoel Eleutério da Silva', 'Sebastiana Silvestre Martins', '0.00', '0.00', '0.00', '0.00', '40987.10', 'Impressão', 56, '0000-00-00 00:00:00', '', 0),
('0015720-83.2012.8.08.0035', 'Cível', 'ES', 'Sarah Leal dos Santos Selva', 'Vanessa Leal', '0.00', '0.00', '0.00', '0.00', '74607.66', 'Impressão', 57, '0000-00-00 00:00:00', '', 0),
('1626145-30.2011.8.19.0004', 'Cível', 'RJ', 'Vera Lucia de Souza Guerra', 'Walter Guerra de Castro', '0.00', '0.00', '0.00', '0.00', '15148.17', 'Impressão', 58, '0000-00-00 00:00:00', '', 0),
('0023526.38.2014.808.0347', 'Cível', 'ES', 'Wanderson Mota Vaz  (RIT)', 'Wanderson Mota Vaz', '0.00', '0.00', '0.00', '0.00', '6000.00', 'Impressão', 59, '0000-00-00 00:00:00', '', 0),
('0844081-82.2008.8.21.3001', 'Cível', 'RS', 'Ricardo Ribeiro dos Anjos', 'Celma dos Anjos', '0.00', '0.00', '0.00', '0.00', '84659.38', 'Impressão', 60, '0000-00-00 00:00:00', '', 0),
('2002.01.1.103191-4', 'Cível', 'DF', 'Edimeia Lima dos Reis', 'Nilton dos Reis', '0.00', '0.00', '0.00', '0.00', '141516.42', 'Impressão', 61, '0000-00-00 00:00:00', '', 0),
('0080569-29.2013.8.19.0001', 'Cível', 'RJ', 'Vanessa Cristina Pereira', 'Vivalda Guanais Neiva', '0.00', '0.00', '0.00', '0.00', '27079.51', 'Impressão', 62, '0000-00-00 00:00:00', '', 0),
('2013.01.1.022514-9', 'Cível', 'DF', 'Lucia Vania Aparecida Costa', 'Fabio de Novaes', '0.00', '0.00', '0.00', '0.00', '23038.25', 'Impressão', 63, '0000-00-00 00:00:00', '', 0),
('0144643-28.2012.8.26.0100', 'Cível', 'SP', 'Marilea das Neves Nogueira/outros', 'Joana das Neves Nogueira', '0.00', '0.00', '0.00', '0.00', '193144.71', 'Impressão', 64, '0000-00-00 00:00:00', '', 0),
('0005877-55.2011.815.2001', 'Cível', 'PB', 'Luiz Mota de Oliveira', 'Maria Luiza dos Santos Mota', '0.00', '0.00', '0.00', '0.00', '45369.37', 'Impressão', 65, '0000-00-00 00:00:00', '', 0),
('3983-33.2002.811.0041', 'Cível', 'MT', 'Juscelino Matias de Albuquerque', 'Juscelino Matias de Albuquerque', '0.00', '0.00', '0.00', '0.00', '255497.66', 'Impressão', 66, '0000-00-00 00:00:00', '', 0),
('1006919-57.2014.8.26.0079', 'Cível', 'SP', 'Marcia Aparecida Favaro Bravin', 'Jose Bravin Filho', '0.00', '0.00', '0.00', '0.00', '10000.00', 'Impressão', 67, '0000-00-00 00:00:00', '', 0),
('0062784-11.2000.8.19.0001', 'Cível', 'RJ', 'Jorge Inacio Sinflorio', 'Jorge Inacio Sinflorio', '0.00', '0.00', '0.00', '0.00', '118462.08', 'Impressão', 68, '0000-00-00 00:00:00', '', 0),
('0001701-27.2014.8.26.0415/01', 'Cível', 'SP', 'Reinaldo de Almeida Toral/outros', 'Jose Augusto de Oliveira Toral', '0.00', '0.00', '0.00', '0.00', '12343.97', 'Impressão', 69, '0000-00-00 00:00:00', '', 0),
('18830.93.2009.811.0041', 'Cível', 'MT', 'Celsita Rosa P da Silva', 'Jonas Pinheiro da Silva', '0.00', '0.00', '0.00', '0.00', '256749.25', 'Impressão', 70, '0000-00-00 00:00:00', '', 0),
('123', '123', '12', '12', '312', '312.00', '312.00', '31.00', '2312.00', '3.20', 'IMPRESSÃO', 109, '1476452061', 'equintino', 1),
('123', '', '', '', '', '0.00', '0.00', '0.00', '0.00', '0.00', 'IMPRESSÃO', 110, '1476983365', 'equintino', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
