-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 02-Dez-2020 às 13:33
-- Versão do servidor: 10.3.16-MariaDB
-- versão do PHP: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `id15512619_wda`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `nome`, `descricao`, `created`, `modified`) VALUES
(4, 'Aparelho de Som', 'Som', '2020-06-29 11:16:51', '2020-06-29 11:16:51'),
(5, 'Roda', 'Roda', '2020-06-29 11:16:58', '2020-06-29 11:16:58'),
(6, 'Nitro', 'ZOOOM', '2020-06-29 13:09:37', '2020-06-29 13:09:37');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contatos`
--

CREATE TABLE `contatos` (
  `id` int(11) NOT NULL,
  `cliente` varchar(255) NOT NULL,
  `assunto` varchar(255) NOT NULL,
  `mensagem` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telefone` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `contatos`
--

INSERT INTO `contatos` (`id`, `cliente`, `assunto`, `mensagem`, `created`, `modified`, `email`, `telefone`) VALUES
(7, '123123123123', 'Orçamento', 'Quero Saber o Preço', '2020-12-01 19:04:15', '2020-12-01 19:04:15', '123123123123@d.com', '(11) 222-222222'),
(8, '123123123123', 'Bom Dia', 'Bom dia', '2020-12-01 19:08:02', '2020-12-01 19:08:02', '123123123123@d.com', '(11) 222-222222'),
(11, 'João Bernardo', 'Orçamento', 'Colocar aparelho de som ', '2020-12-01 19:59:30', '2020-12-01 19:59:30', 'joao@joao', '(13) 434-333443');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fotos`
--

CREATE TABLE `fotos` (
  `id` int(11) NOT NULL,
  `endereco` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `marcas`
--

CREATE TABLE `marcas` (
  `id` int(10) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `descricao` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `marcas`
--

INSERT INTO `marcas` (`id`, `nome`, `created`, `modified`, `descricao`) VALUES
(4, 'Sound Spash', '2020-06-29 11:17:22', '2020-06-29 11:17:22', 'Teste'),
(5, 'Rodinha', '2020-07-05 14:08:57', '2020-07-05 14:08:57', 'As mais caras'),
(6, 'Detoner', '2020-07-28 09:34:40', '2020-07-28 09:34:40', 'Teste');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `valor` int(11) NOT NULL,
  `quantidade` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `marca` int(10) NOT NULL,
  `categoria` int(10) NOT NULL,
  `fotos` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `descricao`, `valor`, `quantidade`, `created`, `modified`, `marca`, `categoria`, `fotos`) VALUES
(6, 'Roda Cromada ', 'Ã‰ uma roda, ela anda no chÃ£o', 120, '20', '2020-06-29 11:17:55', '2020-06-29 12:27:23', 5, 2, NULL),
(7, 'Caixinha', 'Bom para multa', 324, '2', '2020-06-29 11:18:58', '2020-06-29 12:27:13', 4, 3, NULL),
(8, 'Roda Cromada ', '22', 212, '5', '2020-06-29 12:31:11', '2020-06-29 12:31:11', 0, 5, NULL),
(9, 'Roda Quebrada', 'Deixa o carro fazer Vrooooooom', 4, '4', '2020-06-29 12:31:20', '2020-06-29 13:15:37', 0, 4, NULL),
(12, 'Trio Sub Detoner Plus', 'Potncia 150 Rms', 123, '1', '2020-07-28 09:35:55', '2020-12-01 21:49:51', 6, 4, NULL),
(14, 'SOM BOMBASTICO', '1221', 442, '1', '2020-10-29 10:15:18', '2020-10-29 10:15:18', 4, 4, NULL),
(15, 'Roda ', 'Dourada', 75, '4', '2020-10-29 17:48:45', '2020-10-29 17:48:45', 5, 5, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `login` char(60) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` char(60) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `acesso` int(2) NOT NULL,
  `pagamento` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `login`, `email`, `senha`, `telefone`, `created`, `modified`, `acesso`, `pagamento`) VALUES
(3, 'JoÃ£o', 'JoÃ£o BRABO', 'joÃ£o@joÃ£o.com', '', '13', '2020-07-06 10:04:15', '2020-07-06 10:04:15', 1, 1),
(6, '3', '$2a$08$FT6k32oQBhMnGAjvN3U2zOvMgaClNn0fpwqNH5QG.BMRvZ/fhJKTe', '32323', '$2a$08$FT6k32oQBhMnGAjvN3U2zOvMgaClNn0fpwqNH5QG.BMRvZ/fhJKTe', '3', '2020-07-06 10:17:55', '2020-07-06 10:17:55', 0, 0),
(7, 'et22', '$2a$08$FT6k32oQBhMnGAjvN3U2zOvMgaClNn0fpwqNH5QG.BMRvZ/fhJKTe', '32323', '$2a$08$FT6k32oQBhMnGAjvN3U2zOvMgaClNn0fpwqNH5QG.BMRvZ/fhJKTe', '3', '2020-07-06 10:18:54', '2020-07-06 10:18:54', 0, 0),
(8, '2', '$2a$08$FT6k32oQBhMnGAjvN3U2zOvMgaClNn0fpwqNH5QG.BMRvZ/fhJKTe', '43', '$2a$08$FT6k32oQBhMnGAjvN3U2zOvMgaClNn0fpwqNH5QG.BMRvZ/fhJKTe', '433', '2020-07-06 10:20:47', '2020-07-06 10:20:47', 0, 0),
(9, '', '$2a$08$FT6k32oQBhMnGAjvN3U2zOvMgaClNn0fpwqNH5QG.BMRvZ/fhJKTe', '', '$2a$08$FT6k32oQBhMnGAjvN3U2zOvMgaClNn0fpwqNH5QG.BMRvZ/fhJKTe', '0', '2020-07-06 10:21:25', '2020-07-06 10:21:25', 0, 0),
(10, '', '$2a$08$FT6k32oQBhMnGAjvN3U2zOvMgaClNn0fpwqNH5QG.BMRvZ/fhJKTe', '', '$2a$08$FT6k32oQBhMnGAjvN3U2zOvMgaClNn0fpwqNH5QG.BMRvZ/fhJKTe', '0', '2020-07-06 10:21:28', '2020-07-06 10:21:28', 0, 0),
(11, '44', '$2a$08$FT6k32oQBhMnGAjvN3U2zOvMgaClNn0fpwqNH5QG.BMRvZ/fhJKTe', '444', '$2a$08$FT6k32oQBhMnGAjvN3U2zOvMgaClNn0fpwqNH5QG.BMRvZ/fhJKTe', '44', '2020-07-06 10:22:58', '2020-07-06 10:22:58', 0, 0),
(12, 'et22', '$2a$08$FT6k32oQBhMnGAjvN3U2zO0BI1cp7vTEfuCCgnSbJKrYYyivLccJm', '2332', '$2a$08$FT6k32oQBhMnGAjvN3U2zOSIt.l7Sk09zPVev9lpm/iZYH6EP1z1K', '2323', '2020-07-06 10:28:57', '2020-07-06 10:28:57', 0, 0),
(13, '1', '1', '1', '', '1', '2020-07-10 08:59:38', '2020-07-10 08:59:38', 1, 1),
(14, '2', '$2a$08$FT6k32oQBhMnGAjvN3U2zOpHv.zKACJWs1EFoDr0.6PDVWR9ifGGW', '2211', '$2a$08$FT6k32oQBhMnGAjvN3U2zOBiYe9p8gYMxGL2/1yBeSpeeA787EfuO', '2', '2020-07-10 09:01:10', '2020-07-10 09:01:10', 1, 1),
(15, 'Bruno', '$2a$08$FT6k32oQBhMnGAjvN3U2zOh2tZeZ3yZusGjlol.wGCHHANpILfjpa', '2', '$2a$08$FT6k32oQBhMnGAjvN3U2zOpHv.zKACJWs1EFoDr0.6PDVWR9ifGGW', '123', '2020-07-10 09:01:26', '2020-07-10 09:01:26', 1, 1),
(19, '123', '$2a$08$FT6k32oQBhMnGAjvN3U2zOpHv.zKACJWs1EFoDr0.6PDVWR9ifGGW', '123', '$2a$08$FT6k32oQBhMnGAjvN3U2zOpHv.zKACJWs1EFoDr0.6PDVWR9ifGGW', '123', '2020-09-30 19:55:26', '2020-09-30 19:55:26', 0, 1),
(20, 'aaaa', '$2a$08$FT6k32oQBhMnGAjvN3U2zOM1tl/CLmrwh4L4CcM4vS7T49hqrr1pq', 'aaaa', '$2a$08$FT6k32oQBhMnGAjvN3U2zOM1tl/CLmrwh4L4CcM4vS7T49hqrr1pq', '0', '2020-09-30 20:02:46', '2020-09-30 20:02:46', 1, 1),
(21, 'aaaaaaaa', '$2a$08$FT6k32oQBhMnGAjvN3U2zOUcvI6n8WS.kegegZI8jQeTu9cu8HNWq', 'aaaaaaaa', '$2a$08$FT6k32oQBhMnGAjvN3U2zOUcvI6n8WS.kegegZI8jQeTu9cu8HNWq', '0', '2020-09-30 20:18:33', '2020-09-30 20:18:33', 1, 1),
(22, 'rewwwwwww', '$2a$08$FT6k32oQBhMnGAjvN3U2zOn26vp.75HZdPyiLkF0cOR2DX7EcZvpS', 'rewwwwwww', '$2a$08$FT6k32oQBhMnGAjvN3U2zOKtKlhzBexVfPI4OP5sxfNlcZ4bpOw7m', '0', '2020-09-30 20:21:08', '2020-09-30 20:21:08', 0, 1),
(23, '123123123', '$2a$08$FT6k32oQBhMnGAjvN3U2zO54mCkdsm0Dd7r6lKCrD.EZhz8lFtfvW', '123123123', '$2a$08$FT6k32oQBhMnGAjvN3U2zO54mCkdsm0Dd7r6lKCrD.EZhz8lFtfvW', '123123123', '2020-09-30 20:29:07', '2020-09-30 20:29:07', 1, 1),
(24, 'aaaaaaaa', '$2a$06$FT6k32oQBhMnGAjvN3U2zOeKDvtxRqe5ARV8pZmEjybDbX0KBQrfK', '2133333333333', '$2a$06$FT6k32oQBhMnGAjvN3U2zOoG86H7K6nPCgs.6G7mh0m/Q6fzEqrZi', '231111', '2020-11-26 10:41:40', '2020-11-26 10:41:40', 1, 1),
(25, 'Bolado', '$2a$06$FT6k32oQBhMnGAjvN3U2zOWk7zML1K9FoDmHwbJ9kcwn6aRUzM3tC', 'Bolado', '$2a$06$FT6k32oQBhMnGAjvN3U2zOWk7zML1K9FoDmHwbJ9kcwn6aRUzM3tC', '123', '2020-11-26 10:44:09', '2020-11-26 10:44:09', 0, 1),
(26, 'c', '$2a$06$FT6k32oQBhMnGAjvN3U2zOH13ikka0dugoSE3J4mfNYycZwfA.WBS', 'c@c', '$2a$06$FT6k32oQBhMnGAjvN3U2zOH13ikka0dugoSE3J4mfNYycZwfA.WBS', '123141234', '2020-11-26 10:44:34', '2020-11-26 10:44:34', 1, 1),
(27, 'Bruno Bernado', '$2a$08$FT6k32oQBhMnGAjvN3U2zOveWNPqg7uS4a0jAhCrHRsOB6C5oGTIS', 'brunobernardohc@gmail.com', '$2a$08$FT6k32oQBhMnGAjvN3U2zOjFvYW5x.U48dSOQ2xDUN40rJFwiCGXe', '(13) 997-036437', '2020-12-01 17:20:50', '2020-12-01 17:20:50', 1, 1),
(28, '123123123123', '$2a$08$FT6k32oQBhMnGAjvN3U2zOqwhfiZcNEJpYpuLqtAgtISrtP.NDIPS', '123123123123@d.com', '$2a$08$FT6k32oQBhMnGAjvN3U2zOqwhfiZcNEJpYpuLqtAgtISrtP.NDIPS', '(11) 222-222222', '2020-12-01 17:22:14', '2020-12-01 17:22:14', 1, 1),
(29, 'Teste', '$2a$08$FT6k32oQBhMnGAjvN3U2zOWMhJsoiQYx0Hs0lhWaZqeXqgjiL8BWW', 'biarsv@hotmail.com', '$2a$08$FT6k32oQBhMnGAjvN3U2zOhSr7iSer5tJqhjSXwxm0Yg1yVdTomei', '(13) 988-818664', '2020-12-01 19:31:51', '2020-12-01 19:31:51', 1, 1),
(30, 'Professor', '$2a$08$FT6k32oQBhMnGAjvN3U2zO3YU65SauKuykMSJ9r7.RRtJx3xxGmV2', 'professor@escola.com', '$2a$08$FT6k32oQBhMnGAjvN3U2zO3YU65SauKuykMSJ9r7.RRtJx3xxGmV2', '(13) 123-456789', '2020-12-01 19:48:09', '2020-12-01 19:48:09', 0, 1),
(31, 'João Bernardo', '$2a$08$FT6k32oQBhMnGAjvN3U2zODbJL1FKGurrJWJCqiUmSaqlLHO56tBe', 'joao@joao', '$2a$08$FT6k32oQBhMnGAjvN3U2zODbJL1FKGurrJWJCqiUmSaqlLHO56tBe', '(13) 434-333443', '2020-12-01 19:58:20', '2020-12-01 19:58:20', 1, 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `contatos`
--
ALTER TABLE `contatos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `contatos`
--
ALTER TABLE `contatos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `fotos`
--
ALTER TABLE `fotos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
