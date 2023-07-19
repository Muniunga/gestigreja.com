-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Jul-2023 às 22:43
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `gestao_igreja`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `dizimo`
--

CREATE TABLE `dizimo` (
  `id` int(11) NOT NULL,
  `membro` int(11) NOT NULL,
  `valor` float NOT NULL,
  `descricao` varchar(200) DEFAULT NULL,
  `estado` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `dizimo`
--

INSERT INTO `dizimo` (`id`, `membro`, `valor`, `descricao`, `estado`, `created_at`, `updated_at`, `data`) VALUES
(1, 4, 50000, 'Culto de ceia', 1, '2023-05-29 16:30:01', '2023-05-29 16:36:28', '2023-05-28'),
(2, 5, 6000, 'Dizimo especial', 1, '2023-07-04 20:16:51', '2023-07-04 20:16:51', '2023-07-02');

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

CREATE TABLE `endereco` (
  `id` int(11) NOT NULL,
  `Provincia` varchar(250) NOT NULL,
  `Municipio` varchar(250) NOT NULL,
  `casa` varchar(100) DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `endereco`
--

INSERT INTO `endereco` (`id`, `Provincia`, `Municipio`, `casa`, `updated_at`, `created_at`, `estado`) VALUES
(1, 'Luanda', 'Kilamba-Kiaxi', '12', '2023-05-06 13:40:48', '2023-05-06 13:40:48', 1),
(2, 'Benguela', 'Benguela', '300', '2023-05-06 15:06:35', '2023-05-06 14:09:07', 2),
(3, 'Luanda', 'Cazenga', '130', '2023-05-28 07:31:46', '2023-05-28 07:31:46', 1),
(4, 'Benguela', 'Benguela', '20', '2023-05-29 17:44:23', '2023-05-29 17:44:23', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `estado`
--

CREATE TABLE `estado` (
  `idEstado` int(11) NOT NULL,
  `descricao` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `estado`
--

INSERT INTO `estado` (`idEstado`, `descricao`) VALUES
(1, 'Ativo'),
(2, 'Inativo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `genero`
--

CREATE TABLE `genero` (
  `id` int(11) NOT NULL,
  `descricao` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `genero`
--

INSERT INTO `genero` (`id`, `descricao`) VALUES
(1, 'Masculino'),
(2, 'Feminino');

-- --------------------------------------------------------

--
-- Estrutura da tabela `membro`
--

CREATE TABLE `membro` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `idade` int(11) NOT NULL,
  `paroquia` int(11) NOT NULL,
  `endereco` int(11) NOT NULL,
  `telefone` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1,
  `genero` int(11) NOT NULL,
  `profile_pic` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `membro`
--

INSERT INTO `membro` (`id`, `name`, `idade`, `paroquia`, `endereco`, `telefone`, `created_at`, `updated_at`, `estado`, `genero`, `profile_pic`) VALUES
(1, 'André Pedro', 25, 1, 1, 954222154, '2023-05-06 20:01:44', '2023-05-06 20:13:17', 1, 1, ''),
(2, 'Joana A', 17, 1, 1, 954789456, '2023-05-06 20:14:36', '2023-05-21 12:42:20', 1, 1, ''),
(3, 'José Rodrigo', 45, 1, 1, 954222154, '2023-05-21 18:29:32', '2023-05-21 18:43:25', 1, 1, 'man-three.jpg'),
(4, 'Aderito Peres', 24, 1, 1, 954222154, '2023-05-21 18:58:01', '2023-05-21 18:58:01', 1, 1, NULL),
(5, 'Amelia', 27, 1, 1, 954222154, '2023-05-21 19:29:27', '2023-05-28 17:14:43', 2, 1, 'man-two.jpg'),
(6, 'Amadeu', 23, 1, 2, 945585521, '2023-05-29 17:45:34', '2023-07-04 18:14:32', 1, 1, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `motivo`
--

CREATE TABLE `motivo` (
  `id` int(11) NOT NULL,
  `descricao` varchar(250) DEFAULT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `motivo`
--

INSERT INTO `motivo` (`id`, `descricao`, `estado`) VALUES
(1, 'Adultério', 1),
(2, 'Homicídio ', 1),
(3, 'Roubo', 1),
(4, 'Idolatria', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `oferta`
--

CREATE TABLE `oferta` (
  `id` int(11) NOT NULL,
  `descricao` varchar(250) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1,
  `valor` float NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `membro` int(11) DEFAULT NULL,
  `data` date NOT NULL,
  `paroquia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `oferta`
--

INSERT INTO `oferta` (`id`, `descricao`, `estado`, `valor`, `created_at`, `updated_at`, `membro`, `data`, `paroquia`) VALUES
(1, 'Culto  de domingo', 1, 5000, '2023-05-28 06:29:28', '2023-05-28 06:29:28', 4, '2023-05-14', 1),
(2, 'TESTE!', 1, 7000, '2023-06-27 09:43:15', '2023-06-27 09:43:15', 4, '2023-06-27', 1),
(3, 'Culto de quarta-feira', 1, 25000, '2023-06-27 17:50:33', '2023-06-27 17:50:33', NULL, '2023-06-28', 1),
(4, 'Novo Culto', 1, 50000, '2023-06-27 18:04:47', '2023-06-27 18:04:47', NULL, '2023-06-01', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `paroquia`
--

CREATE TABLE `paroquia` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `endereco` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `paroquia`
--

INSERT INTO `paroquia` (`id`, `name`, `endereco`, `created_at`, `updated_at`, `estado`) VALUES
(1, 'Bom Deus', 1, '2023-05-06 18:48:34', '2023-05-06 18:57:12', 1),
(2, 'Jesus Cristo', 3, '2023-05-28 07:41:08', '2023-05-28 07:41:08', 1),
(3, 'Jerusalém', 3, '2023-07-01 17:07:35', '2023-07-01 17:07:35', 1),
(4, 'Israel', 4, '2023-07-01 17:12:55', '2023-07-01 17:12:55', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sancao`
--

CREATE TABLE `sancao` (
  `id` int(11) NOT NULL,
  `descricao` varchar(250) DEFAULT NULL,
  `motivo` int(11) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1,
  `membro` int(11) NOT NULL,
  `dataFim` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `dataInicio` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `sancao`
--

INSERT INTO `sancao` (`id`, `descricao`, `motivo`, `estado`, `membro`, `dataFim`, `created_at`, `updated_at`, `dataInicio`) VALUES
(1, 'Pecou muito', 1, 1, 1, '2023-07-01 00:00:00', '2023-05-27 17:50:49', '2023-05-27 17:50:49', NULL),
(2, 'Pecou muito', 2, 1, 3, '2023-08-23 00:00:00', '2023-05-29 15:47:12', '2023-05-29 15:47:12', '2023-05-11 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `user_type` int(11) NOT NULL DEFAULT 3 COMMENT '1 admin, 2 secretario, 3 tesoureiro',
  `profile_pic` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_delete` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0:Não apagado, 1:apagado'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `user_type`, `profile_pic`, `created_at`, `updated_at`, `is_delete`) VALUES
(1, 'Peres', 'peres@gmail.com', NULL, '$2y$10$t1rcirDCC9Aca1chgqO18uhjQaglZjCbG4NC9r10q6UhrKZJRKwbG', NULL, 1, NULL, '2023-04-17 04:43:20', '2023-04-17 04:43:20', 0),
(2, 'Secretario', 'secretario@gmail.com', NULL, '$2y$10$t1rcirDCC9Aca1chgqO18uhjQaglZjCbG4NC9r10q6UhrKZJRKwbG', NULL, 2, NULL, '2023-04-17 04:43:20', '2023-04-17 04:43:20', 0),
(3, 'Tesoureiro', 'tesoureiro@gmail.com', NULL, '$2y$10$t1rcirDCC9Aca1chgqO18uhjQaglZjCbG4NC9r10q6UhrKZJRKwbG', NULL, 3, NULL, '2023-04-17 04:43:20', '2023-04-17 04:43:20', 0),
(4, 'Aderito Peres', 'muniunga2000@gmail.com', NULL, '$2y$10$IIj8qg0YbY1K3iew4S8yUOQ8DtdKSDWIy/x0yo8vfbTTRe9KOmbMu', NULL, 1, NULL, '2023-04-22 14:39:16', '2023-04-22 14:39:16', 0),
(5, 'Adérito Peres Muniunga', 'aderitopm@gmail.com', NULL, '$2y$10$NKVt4tkTIQk551H3fLKT5uG7VQqW1i8WBkQAU60CmtNL3hCcZtSrG', NULL, 1, NULL, '2023-04-22 14:42:45', '2023-07-13 10:21:25', 0),
(6, 'Pedro', 'bruno@mail.com', NULL, '$2y$10$m7jgaqfHAuPgIFJPRDcBNeYRNUjQKK6wveDwOwJ37/QYqwCozRney', NULL, 1, NULL, '2023-04-22 14:43:18', '2023-04-25 00:07:11', 0),
(7, 'teste8', 'teste@mail.com', NULL, '$2y$10$AozVSHm.dn1HuEXfYGa6geA5RbrKPqmQfss0cTc0ycizNYz5IqkRW', NULL, 1, NULL, '2023-04-24 20:16:51', '2023-04-25 00:03:03', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `user_type`
--

CREATE TABLE `user_type` (
  `id_type` int(11) NOT NULL,
  `descType` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `user_type`
--

INSERT INTO `user_type` (`id_type`, `descType`) VALUES
(1, 'Pastor'),
(2, 'Secretario'),
(3, 'Tesoureiro');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `dizimo`
--
ALTER TABLE `dizimo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idMembro` (`membro`),
  ADD KEY `estado` (`estado`);

--
-- Índices para tabela `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`id`),
  ADD KEY `estado` (`estado`);

--
-- Índices para tabela `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`idEstado`);

--
-- Índices para tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Índices para tabela `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `membro`
--
ALTER TABLE `membro`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idEndereco` (`endereco`),
  ADD KEY `idParoquia` (`paroquia`),
  ADD KEY `genero` (`genero`),
  ADD KEY `estado` (`estado`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `motivo`
--
ALTER TABLE `motivo`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `oferta`
--
ALTER TABLE `oferta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `estado` (`estado`),
  ADD KEY `membro` (`membro`),
  ADD KEY `paroquia` (`paroquia`);

--
-- Índices para tabela `paroquia`
--
ALTER TABLE `paroquia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idEndereco` (`endereco`),
  ADD KEY `estado` (`estado`);

--
-- Índices para tabela `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Índices para tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Índices para tabela `sancao`
--
ALTER TABLE `sancao`
  ADD PRIMARY KEY (`id`),
  ADD KEY `estado` (`estado`),
  ADD KEY `membro` (`membro`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `user_type` (`user_type`);

--
-- Índices para tabela `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`id_type`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `dizimo`
--
ALTER TABLE `dizimo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `endereco`
--
ALTER TABLE `endereco`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `estado`
--
ALTER TABLE `estado`
  MODIFY `idEstado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `genero`
--
ALTER TABLE `genero`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `membro`
--
ALTER TABLE `membro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `motivo`
--
ALTER TABLE `motivo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `oferta`
--
ALTER TABLE `oferta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `paroquia`
--
ALTER TABLE `paroquia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `sancao`
--
ALTER TABLE `sancao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `user_type`
--
ALTER TABLE `user_type`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `dizimo`
--
ALTER TABLE `dizimo`
  ADD CONSTRAINT `dizimo_ibfk_1` FOREIGN KEY (`membro`) REFERENCES `membro` (`id`),
  ADD CONSTRAINT `dizimo_ibfk_2` FOREIGN KEY (`estado`) REFERENCES `estado` (`idEstado`);

--
-- Limitadores para a tabela `endereco`
--
ALTER TABLE `endereco`
  ADD CONSTRAINT `endereco_ibfk_1` FOREIGN KEY (`estado`) REFERENCES `estado` (`idEstado`);

--
-- Limitadores para a tabela `membro`
--
ALTER TABLE `membro`
  ADD CONSTRAINT `membro_ibfk_1` FOREIGN KEY (`endereco`) REFERENCES `endereco` (`id`),
  ADD CONSTRAINT `membro_ibfk_2` FOREIGN KEY (`paroquia`) REFERENCES `paroquia` (`id`),
  ADD CONSTRAINT `membro_ibfk_3` FOREIGN KEY (`genero`) REFERENCES `genero` (`id`),
  ADD CONSTRAINT `membro_ibfk_4` FOREIGN KEY (`estado`) REFERENCES `estado` (`idEstado`);

--
-- Limitadores para a tabela `oferta`
--
ALTER TABLE `oferta`
  ADD CONSTRAINT `oferta_ibfk_1` FOREIGN KEY (`estado`) REFERENCES `estado` (`idEstado`),
  ADD CONSTRAINT `oferta_ibfk_2` FOREIGN KEY (`paroquia`) REFERENCES `paroquia` (`id`);

--
-- Limitadores para a tabela `paroquia`
--
ALTER TABLE `paroquia`
  ADD CONSTRAINT `paroquia_ibfk_1` FOREIGN KEY (`estado`) REFERENCES `estado` (`idEstado`);

--
-- Limitadores para a tabela `sancao`
--
ALTER TABLE `sancao`
  ADD CONSTRAINT `sancao_ibfk_1` FOREIGN KEY (`estado`) REFERENCES `estado` (`idEstado`),
  ADD CONSTRAINT `sancao_ibfk_2` FOREIGN KEY (`membro`) REFERENCES `membro` (`id`);

--
-- Limitadores para a tabela `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`user_type`) REFERENCES `user_type` (`id_type`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
