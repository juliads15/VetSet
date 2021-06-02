-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Jun-2021 às 03:55
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdvetset`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `animal`
--

CREATE TABLE `animal` (
  `ID` int(11) NOT NULL,
  `NOME` varchar(100) NOT NULL,
  `TIPOANIMAL` varchar(100) NOT NULL,
  `RACA` varchar(100) NOT NULL,
  `PESO` varchar(50) NOT NULL,
  `PORTE` varchar(100) NOT NULL,
  `IDADE` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `animal`
--

INSERT INTO `animal` (`ID`, `NOME`, `TIPOANIMAL`, `RACA`, `PESO`, `PORTE`, `IDADE`) VALUES
(1, 'Olivia', 'Cachorro', 'Shitzu com Fox Paulistinha', '6kg', 'Pequeno', '1 ano');

-- --------------------------------------------------------

--
-- Estrutura da tabela `consultas`
--

CREATE TABLE `consultas` (
  `ID` int(11) NOT NULL,
  `TIPOCONSULTA` varchar(150) NOT NULL,
  `DATA` date NOT NULL,
  `HORA` time NOT NULL,
  `PACIENTE` varchar(100) NOT NULL,
  `VETERINARIO` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `consultas`
--

INSERT INTO `consultas` (`ID`, `TIPOCONSULTA`, `DATA`, `HORA`, `PACIENTE`, `VETERINARIO`) VALUES
(3, 'Primeira consulta', '2021-06-02', '14:00:00', 'Olivia', 'Dra. Fernanda');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoque`
--

CREATE TABLE `estoque` (
  `ID` int(11) NOT NULL,
  `DESCRICAO` varchar(200) NOT NULL,
  `TIPOPRODUTO` varchar(150) NOT NULL,
  `QUANTIDADE` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `estoque`
--

INSERT INTO `estoque` (`ID`, `DESCRICAO`, `TIPOPRODUTO`, `QUANTIDADE`) VALUES
(1, 'Shampoo doguinho', 'Shampoo', 25);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `NOME` varchar(100) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `SENHA` varchar(30) NOT NULL,
  `ID` int(11) NOT NULL,
  `TELEFONE` char(11) NOT NULL,
  `CIDADE` varchar(150) NOT NULL,
  `TIPO` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`NOME`, `EMAIL`, `SENHA`, `ID`, `TELEFONE`, `CIDADE`, `TIPO`) VALUES
('Julia Dias Santiago', 'julia@abc.com.br', 'julia@123', 1, '31999999999', 'Belo Horizonte', '1'),
('Gabrielly Kethlin', 'gabrielly@abc.com.br', 'gaby@123', 2, '31988888888', 'Ibirité', '2');

-- --------------------------------------------------------

--
-- Estrutura da tabela `veterinario`
--

CREATE TABLE `veterinario` (
  `ID` int(11) NOT NULL,
  `NOME` varchar(100) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `TELEFONE` char(11) NOT NULL,
  `ESPECIALIZACAO` varchar(150) NOT NULL,
  `CIDADE` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `veterinario`
--

INSERT INTO `veterinario` (`ID`, `NOME`, `EMAIL`, `TELEFONE`, `ESPECIALIZACAO`, `CIDADE`) VALUES
(1, 'Dra. Fernanda', 'fernanda@def.com.br', '31977777777', 'Clínico geral', 'Belo Horizonte');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`ID`);

--
-- Índices para tabela `consultas`
--
ALTER TABLE `consultas`
  ADD PRIMARY KEY (`ID`);

--
-- Índices para tabela `estoque`
--
ALTER TABLE `estoque`
  ADD PRIMARY KEY (`ID`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID`);

--
-- Índices para tabela `veterinario`
--
ALTER TABLE `veterinario`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `animal`
--
ALTER TABLE `animal`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `consultas`
--
ALTER TABLE `consultas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `estoque`
--
ALTER TABLE `estoque`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `veterinario`
--
ALTER TABLE `veterinario`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
