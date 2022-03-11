-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Tempo de geração: 08-Mar-2022 às 20:19
-- Versão do servidor: 5.7.37
-- versão do PHP: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

DROP DATABASE IF EXISTS funcionarios;

CREATE DATABASE funcionarios CHARACTER SET utf8 COLLATE utf8_general_ci;

use funcionarios;


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `datatable`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `posicao` varchar(255) DEFAULT NULL,
  `salario` varchar(255) DEFAULT NULL,
  `dataInicio` datetime DEFAULT CURRENT_TIMESTAMP,
  `escritorio` varchar(255) DEFAULT NULL,
  `extn` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`id`, `nome`, `posicao`, `salario`, `dataInicio`, `escritorio`, `extn`) VALUES
(1, 'Tiger Nixon', 'System Architect', '$320,800', '2022-03-07 16:28:17', 'Edinburgh', '5421'),
(2, 'Garrett Winters', 'Accountant', '$170,750', '2022-03-07 16:28:17', 'Tokyo', '8422'),
(3, 'Ashton Cox', 'Junior Technical Author', '$86,000', '2022-03-07 16:28:17', 'San Francisco', '1562'),
(4, 'Cedric Kelly', 'Senior Javascript Developer', '$433,060', '2022-03-07 16:28:17', 'Edinburgh', '6224'),
(5, 'Airi Satou', 'Accountant', '$162,700', '2022-03-07 16:28:17', 'Tokyo', '5407'),
(6, 'Brielle Williamson', 'Integration Specialist', '$372,000', '2022-03-07 16:28:17', 'New York', '4804'),
(7, 'Herrod Chandler', 'Sales Assistant', '$137,500', '2022-03-07 16:28:17', 'San Francisco', '9608'),
(8, 'Rhona Davidson', 'Integration Specialist', '$327,900', '2022-03-07 16:28:17', 'Tokyo', '6200'),
(9, 'Colleen Hurst', 'Javascript Developer', '$205,500', '2022-03-07 16:28:17', 'San Francisco', '2360'),
(10, 'Sonya Frost', 'Software Engineer', '$103,600', '2022-03-07 16:28:17', 'Edinburgh', '1667'),
(11, 'Jena Gaines', 'escritorio Manager', '$90,560', '2022-03-07 16:28:17', 'London', '3814'),
(12, 'Quinn Flynn', 'Support Lead', '$342,000', '2022-03-07 16:28:17', 'Edinburgh', '9497'),
(13, 'Charde Marshall', 'Regional Director', '$470,600', '2022-03-07 16:28:17', 'San Francisco', '6741'),
(14, 'Haley Kennedy', 'Senior Marketing Designer', '$313,500', '2022-03-07 16:28:17', 'London', '3597'),
(15, 'Tatyana Fitzpatrick', 'Regional Director', '$385,750', '2022-03-07 16:28:17', 'London', '1965'),
(16, 'Michael Silva', 'Marketing Designer', '$198,500', '2022-03-07 16:28:17', 'London', '1581'),
(17, 'Paul Byrd', 'Chief Financial escritorior (CFO)', '$725,000', '2022-03-07 16:28:17', 'New York', '3059'),
(18, 'Gloria Little', 'Systems Administrator', '$237,500', '2022-03-07 16:28:17', 'New York', '1721'),
(19, 'Bradley Greer', 'Software Engineer', '$132,000', '2022-03-07 16:28:17', 'London', '2558'),
(20, 'Dai Rios', 'Personnel Lead', '$217,500', '2022-03-07 16:28:17', 'Edinburgh', '2290'),
(21, 'Jenette Caldwell', 'Development Lead', '$345,000', '2022-03-07 16:28:17', 'New York', '1937'),
(22, 'Yuri Berry', 'Chief Marketing escritorior (CMO)', '$675,000', '2022-03-07 16:28:17', 'New York', '6154'),
(23, 'Caesar Vance', 'Pre-Sales Support', '$106,450', '2022-03-07 16:28:17', 'New York', '8330'),
(24, 'Doris Wilder', 'Sales Assistant', '$85,600', '2022-03-07 16:28:17', 'Sydney', '3023'),
(25, 'Angelica Ramos', 'Chief Executive escritorior (CEO)', '$1,200,000', '2022-03-07 16:28:17', 'London', '5797'),
(26, 'Gavin Joyce', 'Developer', '$92,575', '2022-03-07 16:28:17', 'Edinburgh', '8822'),
(27, 'Jennifer Chang', 'Regional Director', '$357,650', '2022-03-07 16:28:17', 'Singapore', '9239'),
(28, 'Brenden Wagner', 'Software Engineer', '$206,850', '2022-03-07 16:28:17', 'San Francisco', '8862'),
(29, 'Fiona Green', 'Chief Operating escritorior (COO)', '$850,000', '2022-03-07 16:28:17', 'San Francisco', '2947'),
(30, 'Shou Itou', 'Regional Marketing', '$163,000', '2022-03-07 16:28:17', 'Tokyo', '8899'),
(31, 'Michelle House', 'Integration Specialist', '$95,400', '2022-03-07 16:28:17', 'Sydney', '2769'),
(32, 'Suki Burks', 'Developer', '$114,500', '2022-03-07 16:28:17', 'London', '6832'),
(33, 'Prescott Bartlett', 'Technical Author', '$145,000', '2022-03-07 16:28:17', 'London', '3606'),
(34, 'Gavin Cortez', 'Team Leader', '$235,500', '2022-03-07 16:28:17', 'San Francisco', '2860'),
(35, 'Martena Mccray', 'Post-Sales support', '$324,050', '2022-03-07 16:28:17', 'Edinburgh', '8240'),
(36, 'Unity Butler', 'Marketing Designer', '$85,675', '2022-03-07 16:28:17', 'San Francisco', '5384'),
(37, 'Howard Hatfield', 'escritorio Manager', '$164,500', '2022-03-07 16:28:17', 'San Francisco', '7031'),
(38, 'Hope Fuentes', 'Secretary', '$109,850', '2022-03-07 16:28:17', 'San Francisco', '6318'),
(39, 'Vivian Harrell', 'Financial Controller', '$452,500', '2022-03-07 16:28:17', 'San Francisco', '9422'),
(40, 'Timothy Mooney', 'escritorio Manager', '$136,200', '2022-03-07 16:28:17', 'London', '7580'),
(41, 'Jackson Bradshaw', 'Director', '$645,750', '2022-03-07 16:28:17', 'New York', '1042'),
(42, 'Olivia Liang', 'Support Engineer', '$234,500', '2022-03-07 16:28:17', 'Singapore', '2120'),
(43, 'Bruno Nash', 'Software Engineer', '$163,500', '2022-03-07 16:28:17', 'London', '6222'),
(44, 'Sakura Yamamoto', 'Support Engineer', '$139,575', '2022-03-07 16:28:17', 'Tokyo', '9383'),
(45, 'Thor Walton', 'Developer', '$98,540', '2022-03-07 16:28:17', 'New York', '8327'),
(46, 'Finn Camacho', 'Support Engineer', '$87,500', '2022-03-07 16:28:17', 'San Francisco', '2927'),
(47, 'Serge Baldwin', 'Data Coordinator', '$138,575', '2022-03-07 16:28:17', 'Singapore', '5895'),
(48, 'Zenaida Frank', 'Software Engineer', '$125,250', '2022-03-07 16:28:17', 'New York', '7439'),
(49, 'Zorita Serrano', 'Software Engineer', '$115,000', '2022-03-07 16:28:17', 'San Francisco', '4389'),
(50, 'Jennifer Acosta', 'Junior Javascript Developer', '$75,650', '2022-03-07 16:28:17', 'Edinburgh', '3431');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
