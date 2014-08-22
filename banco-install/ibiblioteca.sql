-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 22/08/2014 às 08h02min
-- Versão do Servidor: 5.5.16
-- Versão do PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `ibiblioteca`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `autores`
--

CREATE TABLE IF NOT EXISTS `autores` (
  `id_autor` int(6) NOT NULL,
  `nome` varchar(20) DEFAULT NULL,
  `sobrenome` varchar(30) DEFAULT NULL,
  `data_nascimento` varchar(15) DEFAULT NULL,
  `data_obito` varchar(15) DEFAULT NULL,
  `data_cri` varchar(10) DEFAULT NULL,
  `data_edit` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_autor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `editoras`
--

CREATE TABLE IF NOT EXISTS `editoras` (
  `id_editora` int(5) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `data_fundacao` varchar(15) DEFAULT NULL,
  `data_cri` varchar(15) DEFAULT NULL,
  `data_edit` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_editora`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `livros`
--

CREATE TABLE IF NOT EXISTS `livros` (
  `id_livros` int(6) NOT NULL,
  `titulo` varchar(45) DEFAULT NULL,
  `descricao` varchar(45) DEFAULT NULL,
  `categoria` varchar(45) DEFAULT NULL,
  `autor` varchar(45) DEFAULT NULL,
  `editora` varchar(45) DEFAULT NULL,
  `data_lacamento` varchar(15) DEFAULT NULL,
  `data_cri` varchar(15) DEFAULT NULL,
  `data_edit` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_livros`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
