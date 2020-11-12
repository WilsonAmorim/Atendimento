-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Nov-2020 às 20:07
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `atendimento`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `atendimento`
--

CREATE TABLE `atendimento` (
  `Id_Atendimento` int(11) NOT NULL,
  `Id_TipoAtendimento` int(11) NOT NULL,
  `Id_Usuario` int(11) NOT NULL,
  `Id_Tecnico` int(11) NOT NULL,
  `DataExecucao` date NOT NULL,
  `Observacao` text DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE `empresa` (
  `id_empresa` int(11) NOT NULL,
  `Descricao` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`id_empresa`, `Descricao`) VALUES
(4, 'PITANGUEIRA MANUTENÇÃO DE HARDWARE LTDA');


-- --------------------------------------------------------

--
-- Estrutura da tabela `tipoatendimento`
--

CREATE TABLE `tipoatendimento` (
  `Id_TipoAtendimento` int(11) NOT NULL,
  `Descricao` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tipoatendimento`
--

INSERT INTO `tipoatendimento` (`Id_TipoAtendimento`, `Descricao`) VALUES
(1, 'Placa de Video'),
(2, 'Placa de Rede'),
(3, 'Botão Power');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipousuario`
--

CREATE TABLE `tipousuario` (
  `Id_TipoUsuario` int(11) NOT NULL,
  `Id_Permissao` int(11) NOT NULL,
  `Descrica` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tipousuario`
--

INSERT INTO `tipousuario` (`Id_TipoUsuario`, `Id_Permissao`, `Descrica`) VALUES
(2, 1, 'Gestor'),
(3, 2, 'Técnico'),
(4, 3, 'Cliete');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `Id_Usuario` int(11) NOT NULL,
  `Nome` varchar(30) NOT NULL,
  `Email` char(50) NOT NULL,
  `Id_TipoUsuario` int(11) NOT NULL,
  `DataAtualiza` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`Id_Usuario`, `Nome`, `Email`, `Id_TipoUsuario`, `DataAtualiza`) VALUES
(4, 'Wil', 'email', 3, '0000-00-00'),
(7, 'Amorim', 'wilamsa@gmail.com', 4, '0000-00-00'),
(8, 'Jose', 'josesite', 3, '0000-00-00'),
(9, 'Maria da Silva', 'maria@site.com', 4, '0000-00-00'),
(10, 'Wilson Lopes de Amorim', 'wilamsa@gmail.com', 2, '0000-00-00');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `atendimento`
--
ALTER TABLE `atendimento`
  ADD PRIMARY KEY (`Id_Atendimento`),
  ADD KEY `tipo_atende` (`Id_TipoAtendimento`),
  ADD KEY `cliente_atende` (`Id_Usuario`);


--
-- Índices para tabela `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id_empresa`);


--
-- Índices para tabela `tipoatendimento`
--
ALTER TABLE `tipoatendimento`
  ADD PRIMARY KEY (`Id_TipoAtendimento`);

--
-- Índices para tabela `tipousuario`
--
ALTER TABLE `tipousuario`
  ADD PRIMARY KEY (`Id_TipoUsuario`),
  ADD KEY `per_tipo` (`Id_Permissao`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Id_Usuario`),
  ADD KEY `tipo_usu` (`Id_TipoUsuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `atendimento`
--
ALTER TABLE `atendimento`
  MODIFY `Id_Atendimento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id_empresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;


--
-- AUTO_INCREMENT de tabela `tipoatendimento`
--
ALTER TABLE `tipoatendimento`
  MODIFY `Id_TipoAtendimento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tipousuario`
--
ALTER TABLE `tipousuario`
  MODIFY `Id_TipoUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `Id_Usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `atendimento`
--
ALTER TABLE `atendimento`
  ADD CONSTRAINT `atendimento_ibfk_1` FOREIGN KEY (`Id_TipoAtendimento`) REFERENCES `tipoatendimento` (`Id_TipoAtendimento`),
  ADD CONSTRAINT `atendimento_ibfk_2` FOREIGN KEY (`Id_Usuario`) REFERENCES `usuario` (`Id_Usuario`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `tipousuario`
--
ALTER TABLE `tipousuario`
  ADD CONSTRAINT `tipousuario_ibfk_1` FOREIGN KEY (`Id_Permissao`) REFERENCES `permissao` (`Id_Permissao`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`Id_TipoUsuario`) REFERENCES `tipousuario` (`Id_TipoUsuario`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
