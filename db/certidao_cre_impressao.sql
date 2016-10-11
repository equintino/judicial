-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11-Out-2016 às 02:35
-- Versão do servidor: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pj`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `certidao_cre_impressao`
--

CREATE TABLE `certidao_cre_impressao` (
  `Numero_CNJ_Antigo` varchar(28) DEFAULT NULL,
  `Natureza` varchar(5) DEFAULT NULL,
  `UF` varchar(2) DEFAULT NULL,
  `Parte_contraria` varchar(38) DEFAULT NULL,
  `Segurado` varchar(34) DEFAULT NULL,
  `Vlr_deferido` decimal(12,2) DEFAULT NULL,
  `Vlr_da_causa` decimal(12,2) DEFAULT NULL,
  `Vlr_condenacao` decimal(12,2) DEFAULT NULL,
  `Honorarios` decimal(12,2) DEFAULT NULL,
  `Vlr_certidao_de_credito` decimal(12,2) DEFAULT NULL,
  `Aba` varchar(9) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `Alteracao` varchar(18) NOT NULL,
  `login` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `certidao_cre_impressao`
--

INSERT INTO `certidao_cre_impressao` (`Numero_CNJ_Antigo`, `Natureza`, `UF`, `Parte_contraria`, `Segurado`, `Vlr_deferido`, `Vlr_da_causa`, `Vlr_condenacao`, `Honorarios`, `Vlr_certidao_de_credito`, `Aba`, `id`, `Alteracao`, `login`) VALUES
('0023344-96.2006.8.08.0035', 'Cível', 'ES', 'Admirson Santos', 'Admirson Santos', '0.00', '0.00', '0.00', '11228.48', '112224.80', 'Impressão', 1, '11/10/2016 00:55', ''),
('0021900-18.2011.8.19.0206', 'Cível', 'RJ', 'Miguel Angelo Madeira Peixoto e outros', 'Angelo Francisco P. Filho', '0.00', '0.00', '0.00', '0.00', '48556.75', 'Impressão', 2, '11/10/2016 00:55', ''),
('0019976-86.2013.8.19.0210', 'Cível', 'RJ', 'Claudia Avila Abreu da Silva', 'Anita de Assis Freitas', '0.00', '0.00', '0.00', '0.00', '3966.18', 'Impressão', 3, '11/10/2016 00:55', ''),
('192446-47.2008.8.19.0001', 'Cível', 'RJ', 'Nilza de Menezes Meneguetti', 'Aristides Isaias Meneguetti', '0.00', '0.00', '0.00', '0.00', '60912.16', 'Impressão', 4, '11/10/2016 00:55', ''),
('0117138-49.2001.8.19.0001', 'Cível', 'RJ', 'Augusto Ferreira da C.Filho', 'Augusto Ferreira da Costa Filho', '0.00', '0.00', '0.00', '0.00', '54233.69', 'Impressão', 5, '11/10/2016 00:55', ''),
('0031443-50.2004.815.2001', 'Cível', 'PB', 'Mariza Ribeiro C Muguett /outros', 'Bruno Rene Roger Muguet', '0.00', '0.00', '0.00', '0.00', '1361127.18', 'Impressão', 6, '11/10/2016 00:55', ''),
('0227327-40.2014.8.19.0001', 'Cível', 'RJ', 'Julio Adler', 'Cadem Soriano Moussatche', '0.00', '0.00', '0.00', '0.00', '38026.39', 'Impressão', 7, '11/10/2016 00:55', ''),
('0103502-35.2009.8.19.0001', 'Cível', 'RJ', 'Bruno Leonardo Esteves Derlby e outro', 'Catarina Alves Esteves', '0.00', '0.00', '0.00', '66484.12', '664841.22', 'Impressão', 8, '11/10/2016 00:55', ''),
('0044928-05.2013.815.2001', 'Cível', 'PB', 'Cicero Pereira da Silva', 'Cicero Pereira da Silva', '0.00', '0.00', '0.00', '4253.95', '28359.65', 'Impressão', 9, '11/10/2016 00:55', ''),
('2010.01.1.036179-8', 'Cível', 'DF', 'Claudio Aparecido Batista da Silva', 'Claudio Aparecido Batista da Silva', '0.00', '0.00', '0.00', '0.00', '519967.94', 'Impressão', 10, '11/10/2016 00:55', ''),
('0121086-13.2012.8.19.0001', 'Cível', 'RJ', 'Cristiane Oliveira da Silva', 'Crinaura Viana de Melo', '0.00', '0.00', '0.00', '913.40', '9134.02', 'Impressão', 11, '11/10/2016 00:55', ''),
('0033697-03.2011.8.19.0202', 'Cível', 'RJ', 'Carlos Roberto Rodrigues Lopes', 'Daila da Cunha Lopes', '0.00', '0.00', '0.00', '0.00', '5227.40', 'Impressão', 12, '11/10/2016 00:55', ''),
('0116126-82.2010.8.19.0001', 'Cível', 'RJ', 'Jorge Luiz Fraga / outros', 'Domingos Evangelista da Fraga', '0.00', '0.00', '0.00', '0.00', '10342.09', 'Impressão', 13, '11/10/2016 00:55', ''),
('0023428.02.2011.8.19.0202', 'Cível', 'RJ', 'Arlene José Alves', 'Edson Francisco Alves', '0.00', '0.00', '0.00', '3511.11', '31511.08', 'Impressão', 14, '11/10/2016 00:55', ''),
('0186225-57.2002.8.26.0100', 'Cível', 'SP', 'Herbene de Souza Lima Barros', 'Enos Ribeiro de Barros', '0.00', '0.00', '0.00', '0.00', '193875.30', 'Impressão', 15, '11/10/2016 00:55', ''),
('0003459-43.2012.8.16.0139', 'Cível', 'PR', 'Antonia Roth', 'Ercilho Roth', '0.00', '0.00', '0.00', '0.00', '26090.41', 'Impressão', 16, '11/10/2016 00:55', ''),
('0033080-21.2011.8.17.0001', 'Cível', 'PE', 'Rosemira Alves Correia', 'Fernando Augusto Bezerra Correia', '0.00', '0.00', '0.00', '10303.81', '51519.09', 'Impressão', 17, '11/10/2016 00:55', ''),
('2009.01.1.018988-2', 'Cível', 'DF', 'Pedro Henrique Silva Mendes', 'Francisca Alves da Silva', '0.00', '0.00', '0.00', '18998.82', '189988.25', 'Impressão', 18, '11/10/2016 00:55', ''),
('032410009328-9', 'Cível', 'MG', 'Jovelino Lopes / outros', 'Francisco Lopes', '0.00', '0.00', '0.00', '0.00', '6073.37', 'Impressão', 19, '11/10/2016 00:55', ''),
('0033430-93.2009.8.20.0001', 'Cível', 'RN', 'Maria Rosalia Mapurunga  Pinho Pessoa', 'Geraldo Pinho de Pessoa', '0.00', '0.00', '0.00', '27143.43', '271434.34', 'Impressão', 20, '11/10/2016 00:55', ''),
('2006.01.1.127608-8', 'Cível', 'SP', 'Gerulina França Lopo', 'Gerulina França Lopo', '0.00', '0.00', '0.00', '0.00', '119499.87', 'Impressão', 21, '11/10/2016 00:55', ''),
('0408329-50.2008.8.19.0001', 'Cível', 'RJ', 'Zuila Maria Alves P dos Santos', 'Gilton Portela dos Santos', '0.00', '0.00', '0.00', '0.00', '108245.84', 'Impressão', 22, '11/10/2016 00:55', ''),
('2001.01.1.106.343-4', 'Cível', 'DF', 'Erico Ferreira Lourenço e outros', 'Helena Ferreira de Souza', '0.00', '0.00', '0.00', '0.00', '137989.69', 'Impressão', 23, '11/10/2016 00:55', ''),
('0103039.29.2007.8.12.0011/01', 'Cível', 'MS', 'Luiz Alberto Costa e outros', 'Helio Lima Costa', '0.00', '0.00', '0.00', '0.00', '34960.43', 'Impressão', 24, '11/10/2016 00:55', ''),
('0127913-69.2014.8.19.0001', 'Cível', 'RJ', 'Alvaro Marques da Silva', 'Hosana Correa da Silva', '0.00', '0.00', '0.00', '0.00', '24700.00', 'Impressão', 25, '11/10/2016 00:55', ''),
('0010392.58.2010.8.26.0451', 'Cível', 'SP', 'Thereza Fernandes Cantarelli', 'Idalino Cantareli', '0.00', '0.00', '0.00', '0.00', '49374.72', 'Impressão', 26, '11/10/2016 00:55', ''),
('0050453-53.2011.8.26.0506/01', 'Cível', 'SP', 'Maria Cecilia Fayao Coppede e outros', 'Ilda Guedes Carneiro Fayao', '0.00', '0.00', '0.00', '0.00', '4496.10', 'Impressão', 27, '11/10/2016 00:55', ''),
('0001471-25.2012.8.08.0069', 'Cível', 'ES', 'Geraldo Paulo S Pinheiro Junior', 'Ilka Palmeira Pinheiro', '0.00', '0.00', '0.00', '6409.14', '64091.35', 'Impressão', 28, '11/10/2016 00:55', ''),
('2013.01.1.172893-7', 'Cível', 'DF', 'Ivanoel Gomes da Silva', 'Ivanoel Gomes da Silva', '0.00', '0.00', '0.00', '0.00', '167827.93', 'Impressão', 29, '11/10/2016 00:55', ''),
('0049780-97.2012.8.08.0030', 'Cível', 'ES', 'Leandro R. Passos / outro', 'Jair Passos', '0.00', '0.00', '0.00', '0.00', '14203.99', 'Impressão', 30, '11/10/2016 00:55', ''),
('0052906-52.2006.8.19.0001', 'Cível', 'RJ', 'João Barbosa', 'João Barbosa', '0.00', '0.00', '0.00', '0.00', '6657.46', 'Impressão', 31, '11/10/2016 00:55', ''),
('2007.01.1.093747-5', 'Cível', 'DF', 'Francisca Frota Cavalcante', 'Joaquim Dias Cavalcante', '0.00', '0.00', '0.00', '0.00', '79998.78', 'Impressão', 32, '11/10/2016 00:55', ''),
('111674-67.2001.8.09.0051', 'Cível', 'GO', 'Rosa Lucia Perilo de Azevedo Camargo', 'Joaquim Marcelino de Camargo', '0.00', '0.00', '0.00', '0.00', '166288.23', 'Impressão', 33, '11/10/2016 00:55', ''),
('0037601-42.2009.8.21.0009', 'Cível', 'RS', 'Armando Boese Azambuja', 'José Carlos Azambuja', '0.00', '0.00', '0.00', '0.00', '20728.93', 'Impressão', 34, '11/10/2016 00:55', ''),
('0011856-43.2003.8.12.0002/02', 'Cível', 'MS', 'José Ivan da Silva', 'José Ivan da Silva', '0.00', '0.00', '0.00', '0.00', '515637.16', 'Impressão', 35, '11/10/2016 00:55', ''),
('0034723-81.2013.8.17.801', 'Cível', 'PE', 'José Ivo ramos de Menezes Filho', 'José Ivo Ramos de Menezes', '0.00', '0.00', '0.00', '0.00', '18092.18', 'Impressão', 36, '11/10/2016 00:55', ''),
('2012.10.1.001920-8', 'Cível', 'DF', 'Vanderleia Brasil da Costa', 'Leda Brasil da Costa', '0.00', '0.00', '0.00', '0.00', '92894.07', 'Impressão', 37, '11/10/2016 00:55', ''),
('003329-70.2014.8.19.0213', 'Cível', 'RJ', 'Rute Elena Ferreira Gomes', 'Manoel Ferreira', '0.00', '0.00', '0.00', '0.00', '10927.33', 'Impressão', 38, '11/10/2016 00:55', ''),
('0017891-80.2012.8.26.0077', 'Cível', 'SP', 'Zelinda Carneiro Gonzaga', 'Manoel Gomes Gonzaga', '0.00', '0.00', '0.00', '0.00', '199261.05', 'Impressão', 39, '11/10/2016 00:55', ''),
('0217160-61.2014.8.19.0001', 'Cível', 'RJ', 'Mário Sergio dos Santos', 'Maria Auxiliadora dos Santos', '0.00', '0.00', '0.00', '0.00', '28023.87', 'Impressão', 40, '11/10/2016 00:55', ''),
('045600007368-8', 'Cível', 'MG', 'Iara da Silva e outros', 'Maria das Graças da Silva', '0.00', '0.00', '0.00', '0.00', '114851.61', 'Impressão', 41, '11/10/2016 00:55', ''),
('0027102-14.2009.8.08.0024', 'Cível', 'ES', 'Maria das Graças F. Lourenço', 'Maria das Graças F. Lourenço', '0.00', '0.00', '0.00', '21061.49', '175513.83', 'Impressão', 42, '11/10/2016 00:55', ''),
('0284674-02.2012.8.19.0001', 'Cível', 'RJ', 'Rosangela Maria da Silva Motta', 'Maria Marlene da Silva Chagas', '0.00', '0.00', '0.00', '0.00', '71500.00', 'Impressão', 43, '11/10/2016 00:55', ''),
('0129827.18.2007.8.19.0001', 'Cível', 'RJ', 'Carmem Coutinho S.Moreira/outro', 'Mario Luiz Pellon Santos', '0.00', '0.00', '0.00', '0.00', '313243.17', 'Impressão', 44, '11/10/2016 00:55', ''),
('0283123-55.2010.8.19.0001', 'Cível', 'RJ', 'Livia Maria C de Almeida/outros', 'Milton Barbosa de Almeida', '0.00', '0.00', '0.00', '0.00', '83279.27', 'Impressão', 45, '11/10/2016 00:55', ''),
('2012.01.1.133487-7', 'Cível', 'DF', 'Anna Carolina Lima Pereira', 'Moyses Julio Pereira', '0.00', '0.00', '0.00', '17037.72', '170377.22', 'Impressão', 46, '11/10/2016 00:55', ''),
('0005779-43.2009.26.0220', 'Cível', 'SP', 'Clovis José de Lima Castilho/ outros', 'Neuza Pereira de Lima Castilho', '0.00', '0.00', '0.00', '0.00', '167153.22', 'Impressão', 47, '11/10/2016 00:55', ''),
('0231428-57.2013.8.19.0001', 'Cível', 'RJ', 'Tania Moreira da Silva/ outros', 'Nilza Gama de Andrade', '0.00', '0.00', '0.00', '0.00', '32500.00', 'Impressão', 48, '11/10/2016 00:55', ''),
('0001935-61.2014.8.26.0042', 'Cível', 'SP', 'Patricia Vicentini Viccari', 'Odamir Vicentini', '0.00', '0.00', '0.00', '0.00', '46292.07', 'Impressão', 49, '11/10/2016 00:55', ''),
('0021059-35.2011.8.19.0202', 'Cível', 'RJ', 'Michel Cunha Daher e outro', 'Odete Mendes Cunha', '0.00', '0.00', '0.00', '0.00', '12856.80', 'Impressão', 50, '11/10/2016 00:55', ''),
('0120038-58.2008.8.19.0001', 'Cível', 'RJ', 'Nila Rezende N Martins/ outros', 'Odiceia Rezende Martins', '0.00', '0.00', '0.00', '0.00', '234274.62', 'Impressão', 51, '11/10/2016 00:55', ''),
('0006887-46.2010.8.26.0132/01', 'Cível', 'SP', 'Valeria Aparecida B.F.Maniezzo', 'Oswaldo Fernandes ', '0.00', '0.00', '0.00', '881.36', '4406.83', 'Impressão', 52, '11/10/2016 00:55', ''),
('00330119-09.2013.8.19.0001', 'Cível', 'RJ', 'Jorge Reis', 'Paulo Reis', '0.00', '0.00', '0.00', '0.00', '14577.00', 'Impressão', 53, '11/10/2016 00:55', ''),
('9018868.70.2014.813.0024', 'Cível', 'MG', 'Maria Julisse dos Santos', 'Rubens dos Santos', '0.00', '0.00', '0.00', '0.00', '33852.28', 'Impressão', 54, '11/10/2016 00:55', ''),
('0003468-47.2009.8.26.0457', 'Cível', 'SP', 'Karen Alessandra B.Dutra/outros', 'Sebastiana Ap.Barone Dutra', '0.00', '0.00', '0.00', '0.00', '123098.32', 'Impressão', 55, '11/10/2016 00:55', ''),
('2005.01.1.058789-7', 'Cível', 'DF', 'Manoel Eleutério da Silva', 'Sebastiana Silvestre Martins', '0.00', '0.00', '0.00', '0.00', '40987.10', 'Impressão', 56, '11/10/2016 00:55', ''),
('0015720-83.2012.8.08.0035', 'Cível', 'ES', 'Sarah Leal dos Santos Selva', 'Vanessa Leal', '0.00', '0.00', '0.00', '0.00', '74607.66', 'Impressão', 57, '11/10/2016 00:55', ''),
('1626145-30.2011.8.19.0004', 'Cível', 'RJ', 'Vera Lucia de Souza Guerra', 'Walter Guerra de Castro', '0.00', '0.00', '0.00', '0.00', '15148.17', 'Impressão', 58, '11/10/2016 00:55', ''),
('0023526.38.2014.808.0347', 'Cível', 'ES', 'Wanderson Mota Vaz  (RIT)', 'Wanderson Mota Vaz', '0.00', '0.00', '0.00', '0.00', '6000.00', 'Impressão', 59, '11/10/2016 00:55', ''),
('0844081-82.2008.8.21.3001', 'Cível', 'RS', 'Ricardo Ribeiro dos Anjos', 'Celma dos Anjos', '0.00', '0.00', '0.00', '0.00', '84659.38', 'Impressão', 60, '11/10/2016 00:55', ''),
('2002.01.1.103191-4', 'Cível', 'DF', 'Edimeia Lima dos Reis', 'Nilton dos Reis', '0.00', '0.00', '0.00', '0.00', '141516.42', 'Impressão', 61, '11/10/2016 00:55', ''),
('0080569-29.2013.8.19.0001', 'Cível', 'RJ', 'Vanessa Cristina Pereira', 'Vivalda Guanais Neiva', '0.00', '0.00', '0.00', '0.00', '27079.51', 'Impressão', 62, '11/10/2016 00:55', ''),
('2013.01.1.022514-9', 'Cível', 'DF', 'Lucia Vania Aparecida Costa', 'Fabio de Novaes', '0.00', '0.00', '0.00', '0.00', '23038.25', 'Impressão', 63, '11/10/2016 00:55', ''),
('0144643-28.2012.8.26.0100', 'Cível', 'SP', 'Marilea das Neves Nogueira/outros', 'Joana das Neves Nogueira', '0.00', '0.00', '0.00', '0.00', '193144.71', 'Impressão', 64, '11/10/2016 00:55', ''),
('0005877-55.2011.815.2001', 'Cível', 'PB', 'Luiz Mota de Oliveira', 'Maria Luiza dos Santos Mota', '0.00', '0.00', '0.00', '0.00', '45369.37', 'Impressão', 65, '11/10/2016 00:55', ''),
('3983-33.2002.811.0041', 'Cível', 'MT', 'Juscelino Matias de Albuquerque', 'Juscelino Matias de Albuquerque', '0.00', '0.00', '0.00', '0.00', '255497.66', 'Impressão', 66, '11/10/2016 00:55', ''),
('1006919-57.2014.8.26.0079', 'Cível', 'SP', 'Marcia Aparecida Favaro Bravin', 'Jose Bravin Filho', '0.00', '0.00', '0.00', '0.00', '10000.00', 'Impressão', 67, '11/10/2016 00:55', ''),
('0062784-11.2000.8.19.0001', 'Cível', 'RJ', 'Jorge Inacio Sinflorio', 'Jorge Inacio Sinflorio', '0.00', '0.00', '0.00', '0.00', '118462.08', 'Impressão', 68, '11/10/2016 00:55', ''),
('0001701-27.2014.8.26.0415/01', 'Cível', 'SP', 'Reinaldo de Almeida Toral/outros', 'Jose Augusto de Oliveira Toral', '0.00', '0.00', '0.00', '0.00', '12343.97', 'Impressão', 69, '11/10/2016 00:55', ''),
('18830.93.2009.811.0041', 'Cível', 'MT', 'Celsita Rosa P da Silva', 'Jonas Pinheiro da Silva', '0.00', '0.00', '0.00', '0.00', '256749.25', 'Impressão', 70, '11/10/2016 00:55', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `certidao_cre_impressao`
--
ALTER TABLE `certidao_cre_impressao`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `certidao_cre_impressao`
--
ALTER TABLE `certidao_cre_impressao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
