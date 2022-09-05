-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Jun-2022 às 04:31
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `controle`
--

-- --------------------------------------------------------
--Estrutura da tabela `usuario`

CREATE TABLE `usuario` (
  `usuario_id` INT NOT NULL AUTO_INCREMENT,
  `usuario` VARCHAR(200) NOT NULL,
  `senha` VARCHAR(32) NOT NULL,
  PRIMARY KEY (`usuario_id`));

--
--Inserindo os dados da tabela `usuario`
--

INSERT INTO `usuario` (`usuario_id`,`usuario`,`senha`) VALUES (1,'Gb5',md5('senha'));

--
-- Estrutura da tabela `cc`
--

CREATE TABLE `cc` (
  `id_cc` int(10) UNSIGNED NOT NULL,
  `centro_de_custo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Inserindo os dados da tabela `cc`
--

INSERT INTO `cc` (`id_cc`, `centro_de_custo`) VALUES
(8, 8262),
(9, 8299),
(10, 8564);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pa`
--

CREATE TABLE `pa` (
  `id` int(10) UNSIGNED NOT NULL,
  `cc_id_cc` int(11) NOT NULL,
  `solicitacao` int(11) NOT NULL,
  `pedido` int(11) NOT NULL,
  `valor` decimal(10,0) NOT NULL,
  `data1` date NOT NULL,
  `nome` varchar(45) NOT NULL,
  `situacao` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Inserindo dados da tabela `pa`
--

INSERT INTO `pa` (`id`, `cc_id_cc`, `solicitacao`, `pedido`, `valor`, `data1`, `nome`, `situacao`) VALUES
(5, 0, 254895, 221564, '651', '2002-06-05', 'Julio Cesar', 'Paga'),
(6, 0, 215356, 235652, '36562', '2022-06-05', 'Matheus Cordeiro GonÃ§alves', 'paga'),
(7, 0, 201564, 254362, '534', '2022-06-05', 'Matheus', 'Paga'),
(8, 0, 254232, 235423, '231', '2022-12-12', 'Matheus', 'Paga'),
(9, 0, 235423, 235423, '235423', '2021-12-12', 'Matheus', 'Paga'),
(10, 8, 235423, 235423, '325', '2022-02-14', 'Matheus', 'Paga');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cc`
--
ALTER TABLE `cc`
  ADD PRIMARY KEY (`id_cc`);

--
-- Índices para tabela `pa`
--
ALTER TABLE `pa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cc`
--
ALTER TABLE `cc`
  MODIFY `id_cc` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `pa`
--
ALTER TABLE `pa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
