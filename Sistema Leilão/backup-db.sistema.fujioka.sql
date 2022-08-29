-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Dez-2021 às 21:23
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `login`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin`
--

CREATE TABLE `admin` (
  `usuario_id` int(11) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `senha` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `admin`
--

INSERT INTO `admin` (`usuario_id`, `usuario`, `senha`) VALUES
(1, '23104', '202cb962ac59075b964b07152d234b70'),
(2, 'admin', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Estrutura da tabela `lances`
--

CREATE TABLE `lances` (
  `ficha_prod` int(50) NOT NULL,
  `artigo_prod` int(50) NOT NULL,
  `nome_prod` varchar(100) NOT NULL,
  `estado_prod` varchar(100) NOT NULL,
  `matricula_user` int(20) NOT NULL,
  `nome_user` varchar(150) NOT NULL,
  `local_user` varchar(50) NOT NULL,
  `lance_user` varchar(10) NOT NULL,
  `data` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `lances`
--

INSERT INTO `lances` (`ficha_prod`, `artigo_prod`, `nome_prod`, `estado_prod`, `matricula_user`, `nome_user`, `local_user`, `lance_user`, `data`, `hora`) VALUES
(267070, 635241, 'Caixa JBL BOOBOX 450W', 'Funcionando', 23104, 'Danilo Nunes de Araújo', '', '1001', '2021-12-28 12:09:43', '00:00:00'),
(267040, 1, 'Notebook Samsung 01', 'Tela quebrada', 23104, 'Danilo Nunes de Araújo', '', '101', '2021-12-28 12:09:49', '00:00:00'),
(267041, 2, 'Notebook Samsung 02', 'Tela quebrada', 23104, 'Danilo Nunes de Araújo', '', '102', '2021-12-28 12:09:53', '00:00:00'),
(267045, 6, 'Notebook Samsung 06', 'Tela quebrada', 23102, 'Jhonny Jesus', '', '102', '2021-12-28 12:10:12', '00:00:00'),
(267046, 7, 'Notebook Samsung 07', 'Tela quebrada', 23102, 'Jhonny Jesus', '', '104', '2021-12-28 12:10:18', '00:00:00'),
(267070, 635241, 'Caixa JBL BOOBOX 450W', 'Funcionando', 23104, 'Danilo Nunes de Araújo', '', '1500', '2021-12-28 12:52:13', '00:00:00'),
(267070, 635241, 'Caixa JBL BOOBOX 450W', 'Funcionando', 23104, 'Danilo Nunes de Araújo', '', '2001', '2021-12-28 12:53:58', '00:00:00'),
(267042, 3, 'Notebook Samsung 03', 'Tela quebrada', 2525, 'danilo nunes ', '', '200', '2021-12-28 13:34:40', '00:00:00'),
(267060, 21, 'Notebook Samsung 21', 'Tela quebrada', 23104, 'Danilo Nunes de Araújo', '', '555', '2021-12-28 17:03:21', '00:00:00'),
(267070, 635241, 'Caixa JBL BOOBOX 450W', 'Funcionando', 202020, 'Chapeleta Chapellis', '', '1006', '2021-12-28 18:12:27', '00:00:00'),
(267041, 2, 'Notebook Samsung 02', 'Tela quebrada', 202020, 'Chapeleta Chapellis', '', '107', '2021-12-28 18:12:35', '00:00:00'),
(267070, 635241, 'Caixa JBL BOOBOX 450W', 'Funcionando', 968574, 'teste teste teste', '', '2011', '2021-12-28 18:59:21', '00:00:00'),
(267070, 635241, 'Caixa JBL BOOBOX 450W', 'Funcionando', 23104, 'Danilo Nunes', '', '3999', '2021-12-28 19:34:34', '00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id_product` int(11) NOT NULL,
  `ficha` int(11) NOT NULL,
  `artigo` int(50) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `estado` varchar(200) NOT NULL,
  `valor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id_product`, `ficha`, `artigo`, `nome`, `estado`, `valor`) VALUES
(1, 267040, 1, 'Notebook Samsung 01', 'Tela quebrada', '100,00'),
(2, 267041, 2, 'Notebook Samsung 02', 'Tela quebrada', '100,01'),
(3, 267042, 3, 'Notebook Samsung 03', 'Tela quebrada', '100,02'),
(4, 267043, 4, 'Notebook Samsung 04', 'Tela quebrada', '100,03'),
(5, 267044, 5, 'Notebook Samsung 05', 'Tela quebrada', '100,04'),
(6, 267045, 6, 'Notebook Samsung 06', 'Tela quebrada', '100,05'),
(7, 267046, 7, 'Notebook Samsung 07', 'Tela quebrada', '100,06'),
(8, 267047, 8, 'Notebook Samsung 08', 'Tela quebrada', '100,07'),
(9, 267048, 9, 'Notebook Samsung 09', 'Tela quebrada', '100,08'),
(10, 267049, 10, 'Notebook Samsung 10', 'Tela quebrada', '100,09'),
(11, 267050, 11, 'Notebook Samsung 11', 'Tela quebrada', '100,10'),
(12, 267051, 12, 'Notebook Samsung 12', 'Tela quebrada', '100,11'),
(13, 267052, 13, 'Notebook Samsung 13', 'Tela quebrada', '100,12'),
(14, 267053, 14, 'Notebook Samsung 14', 'Tela quebrada', '100,13'),
(15, 267054, 15, 'Notebook Samsung 15', 'Tela quebrada', '100,14'),
(16, 267055, 16, 'Notebook Samsung 16', 'Tela quebrada', '100,15'),
(17, 267056, 17, 'Notebook Samsung 17', 'Tela quebrada', '100,16'),
(18, 267057, 18, 'Notebook Samsung 18', 'Tela quebrada', '100,17'),
(19, 267058, 19, 'Notebook Samsung 19', 'Tela quebrada', '100,18'),
(20, 267059, 20, 'Notebook Samsung 20', 'Tela quebrada', '100,19'),
(21, 267060, 21, 'Notebook Samsung 21', 'Tela quebrada', '100,20'),
(22, 267070, 635241, 'Caixa JBL BOOBOX 450W', 'Funcionando', '1000,00'),
(30, 123456, 78910, 'Chapeletta', 'Chapellis ', '856,00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `usuario` int(200) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `nome_usuario` varchar(150) NOT NULL,
  `local_usuario` varchar(150) NOT NULL,
  `matricula` int(100) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`usuario`, `senha`, `nome_usuario`, `local_usuario`, `matricula`, `id`) VALUES
(23104, '202cb962ac59075b964b07152d234b70', 'Danilo Nunes', 'CD GUANABARA', 23104, 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`usuario_id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id_product`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `admin`
--
ALTER TABLE `admin`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
