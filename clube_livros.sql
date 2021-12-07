-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Dez-2021 às 07:08
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
-- Banco de dados: `clube_livros`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `caixa`
--

CREATE TABLE `caixa` (
  `id` int(5) NOT NULL,
  `cor` varchar(150) NOT NULL,
  `etiqueta` varchar(100) NOT NULL,
  `numero` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `caixa`
--

INSERT INTO `caixa` (`id`, `cor`, `etiqueta`, `numero`) VALUES
(1, 'Verde', '63256', 1),
(2, 'Vermelho', '6777', 2),
(3, 'Azul', '5665', 3),
(4, 'Rosa', '66778', 4),
(5, 'Preto', '43243', 5),
(7, 'Roxo', '77584', 6),
(8, 'Branco', '66773', 7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `emprestimo`
--

CREATE TABLE `emprestimo` (
  `id` int(5) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `nome_revista` varchar(200) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `emprestimo`
--

INSERT INTO `emprestimo` (`id`, `nome`, `nome_revista`, `data`) VALUES
(8, 'Nayara Silva', 'Hulk', '2021-12-14'),
(20, 'Raimunda Francisca Soares da Silva', 'Batman', '2021-12-05'),
(21, 'Alice', 'Venom', '2021-12-07');

-- --------------------------------------------------------

--
-- Estrutura da tabela `registroamigos`
--

CREATE TABLE `registroamigos` (
  `id` int(6) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `nome_mae` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `senha` varchar(25) NOT NULL,
  `telefone` varchar(12) NOT NULL,
  `local` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `registroamigos`
--

INSERT INTO `registroamigos` (`id`, `nome`, `nome_mae`, `email`, `senha`, `telefone`, `local`) VALUES
(1, 'Ana', 'Regina', 'anao@gmail.com', '667324', '1120567382', 'escola'),
(13, 'Gabriel', 'Tatiane', 'galileu@gmail.com', 'gabriel1234', '11985678994', 'escola'),
(15, 'Fabiana', 'Reginao', 'fabi@gmail.com', '8989897', '1120534781', 'escola'),
(16, 'Priscila', 'Priscilão', 'pri@gmail.com', '1234', '1123456789', 'Vizinhos'),
(27, 'Alice Gomes', 'Tatiane', 'alicegomes@gmail.com', 'alice1234', '11987643578', 'Escola');

-- --------------------------------------------------------

--
-- Estrutura da tabela `revista`
--

CREATE TABLE `revista` (
  `id` int(3) NOT NULL,
  `nome_revista` varchar(200) NOT NULL,
  `colecao` varchar(100) NOT NULL,
  `numero_edicao` int(6) NOT NULL,
  `ano` int(4) NOT NULL,
  `caixa_guardada` varchar(90) NOT NULL,
  `disponibilidade` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `revista`
--

INSERT INTO `revista` (`id`, `nome_revista`, `colecao`, `numero_edicao`, `ano`, `caixa_guardada`, `disponibilidade`) VALUES
(2, 'Harley Quinn', 'Power Girl', 1, 2016, 'Vermelha', 1),
(4, 'Hulk', 'Ultimato', 1, 2018, 'Verde', 1),
(5, 'Venom', 'Homem Aranha', 4, 2013, 'Vermelha', 0),
(8, 'Homem Aranha', 'O Espetacular Homem Aranha', 1, 2020, 'Azul', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `caixa`
--
ALTER TABLE `caixa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `numero` (`numero`);

--
-- Índices para tabela `emprestimo`
--
ALTER TABLE `emprestimo`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `registroamigos`
--
ALTER TABLE `registroamigos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Índices para tabela `revista`
--
ALTER TABLE `revista`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nome` (`nome_revista`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `caixa`
--
ALTER TABLE `caixa`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `emprestimo`
--
ALTER TABLE `emprestimo`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `registroamigos`
--
ALTER TABLE `registroamigos`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `revista`
--
ALTER TABLE `revista`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
