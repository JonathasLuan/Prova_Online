-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17/03/2024 às 18:09
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `prova_online`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `alternativa`
--

CREATE TABLE `alternativa` (
  `alternativa_id` int(11) NOT NULL,
  `questao_id` int(11) DEFAULT NULL,
  `texto_alternativa` text DEFAULT NULL,
  `letra_alternativa` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `alternativa`
--

INSERT INTO `alternativa` (`alternativa_id`, `questao_id`, `texto_alternativa`, `letra_alternativa`) VALUES
(1, 1, 'apresenta uma oposição de ideias entre duas proposições, e representa a operação de negação.', 'A'),
(2, 1, '“soma” as ideias apresentadas por duas proposições, e representa a operação de conjunção.', 'B'),
(3, 1, 'une proposições cujas ideias nunca poderiam ocorrer simultaneamente, e representa a operação de \r\ndisjunção.', 'C'),
(4, 1, 'subordina a ocorrência da segunda proposição à concretização da primeira proposição, e representa a \r\noperação condicional.', 'D'),
(5, 1, 'estabelece a equivalência entre as ideias presentes em ambas as proposições, e representa a operação \r\nbicondicional.', 'E'),
(6, 2, 'o número reduzido de registros gráficos em território nacional impede a realização de estudos sobre a \r\ndiversidade dos grupos humanos do passado.', 'A'),
(7, 2, 'o estudo sistemático dos registros rupestres revelou a existência de um padrão de temática repetitivo, \r\nque se estendeu por todo o território nacional.', 'B'),
(8, 2, 'o significado dos registros rupestres em território nacional varia de acordo com o contexto, a tecnologia \r\ne a organização de cada um dos diferentes povos do passado.', 'C'),
(9, 2, 'os inscritos nas rochas foram realizados por povos que, pela ausência de abstração intelectual, \r\ndesenvolveram técnicas rudimentares para a confecção de registros.', 'D'),
(10, 2, 'os grupos humanos do passado deixaram registros que, pela multiplicidade de interesses, revelam ter \r\nsido produzidos por um único povo.', 'E'),
(11, 3, 'os vários tipos de ferramentas, de resinas, de óleos e de tintas, fabricados e comercializados pelos povos \r\npré-cambrianos , para realizar pinturas e gravuras encontradas nos sítios arqueológicos.', 'A'),
(12, 3, 'as etapas detalhadas dos processos de criação e de domesticação dos animais selvagens, como \r\ncapivaras e onças, os quais eram utilizados nos serviços de tração animal nas plantações.', 'B'),
(13, 3, 'o desenvolvimento das atuações sociais e culturais do homem pré-histórico, e sobre suas práticas e \r\ncostumes representados na caça, na dança e na luta.', 'C'),
(14, 3, 'os conflitos entre os povos indígenas e os europeus, durante as etapas da colonização no Brasil, que \r\ntinham por objetivo a exploração dos recursos naturais do país.', 'D'),
(15, 3, 'os rituais religiosos envolvendo sacrifícios dos grandes animais, como os dinossauros, que eram \r\noferecidos aos deuses junto aos pedidos de chuvas e de boas colheitas.', 'E');

-- --------------------------------------------------------

--
-- Estrutura para tabela `prova`
--

CREATE TABLE `prova` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `pontuacao` int(11) DEFAULT NULL,
  `resultado` enum('aprovado','reprovado') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `questao`
--

CREATE TABLE `questao` (
  `questao_id` int(11) NOT NULL,
  `texto_questao` text DEFAULT NULL,
  `enunciado` text DEFAULT NULL,
  `gabarito` varchar(1) DEFAULT NULL,
  `ponto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `questao`
--

INSERT INTO `questao` (`questao_id`, `texto_questao`, `enunciado`, `gabarito`, `ponto`) VALUES
(1, ' Se a realidade virtual é entendida como a capacidade de criar ambientes que não existem \r\nna natureza, então ela foi uma criação do paleolítico, um exemplo são as pinturas rupestres.  \r\nEntretanto, por volta de 3 500 a.C., surgiu a forma mais poderosa de realidade virtual: a escrita, que \r\ntransformava o registro oral em algo concreto, capaz de durar para sempre. ', ' Ao considerar a frase destacada em negrito no texto, é correto afirmar que o conectivo lógico utilizado \r\n', 'g', 1),
(2, ' A diversidade do registro gráfico rupestre no território nacional é impressionante devido à multiplicidade de \r\nsuas temáticas, ao grau de abstração intelectual das representações e às diversas técnicas de confecção \r\ndos registros rupestres realizados pelos grupos humanos do passado. O que torna evidente, de algum modo, \r\nque os inscritos nas rochas foram realizados por uma multiplicidade de grupos, em tempos imemoriais, \r\ncom seus inúmeros interesses e com suas complexidades artísticas, políticas e socioculturais.', ' De acordo com o texto, é correto afirmar que ', 'g', 1),
(3, ' No Brasil, o Parque Nacional da Serra da Capivara, no Piauí, abriga o maior e mais antigo acervo rupestre \r\nda América do Sul. Essa arte se caracteriza por pinturas e gravuras encontradas nos sítios arqueológicos, \r\nfeitas pelos grupos pré-históricos que habitavam a região. Esses grupos utilizavam, em suas pinturas, \r\ncarvão, argila de várias cores e minerais triturados. Acredita-se ainda que usassem substâncias como \r\nsangue, clara de ovo, resinas vegetais, excrementos e saliva humana para ajudar na fixação dos pigmentos. \r\nEssas pinturas retratavam o cotidiano da época, os rituais religiosos, as práticas humanas em adoração ao \r\nredor de árvores e em representações de danças coletivas, de caças ou de lutas. Além disso, representavam \r\ntambém figuras de animais, como capivaras, tatus, onças, cervos, entre outros.', 'De acordo com o texto, esse importante patrimônio cultural brasileiro auxilia os pesquisadores nos estudos sobre ', 'g', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `resposta`
--

CREATE TABLE `resposta` (
  `resposta_id` int(11) NOT NULL,
  `questao_id` int(11) DEFAULT NULL,
  `alternativa_selecionada_id` int(11) DEFAULT NULL,
  `usuario_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `resposta`
--

INSERT INTO `resposta` (`resposta_id`, `questao_id`, `alternativa_selecionada_id`, `usuario_id`) VALUES
(1, 1, 1, NULL),
(2, 2, 1, NULL),
(3, 3, 1, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `usuario_id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `alternativa`
--
ALTER TABLE `alternativa`
  ADD PRIMARY KEY (`alternativa_id`),
  ADD KEY `questao_id` (`questao_id`);

--
-- Índices de tabela `prova`
--
ALTER TABLE `prova`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Índices de tabela `questao`
--
ALTER TABLE `questao`
  ADD PRIMARY KEY (`questao_id`);

--
-- Índices de tabela `resposta`
--
ALTER TABLE `resposta`
  ADD PRIMARY KEY (`resposta_id`),
  ADD KEY `questao_id` (`questao_id`),
  ADD KEY `alternativa_selecionada_id` (`alternativa_selecionada_id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `alternativa`
--
ALTER TABLE `alternativa`
  MODIFY `alternativa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `prova`
--
ALTER TABLE `prova`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `questao`
--
ALTER TABLE `questao`
  MODIFY `questao_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `resposta`
--
ALTER TABLE `resposta`
  MODIFY `resposta_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `alternativa`
--
ALTER TABLE `alternativa`
  ADD CONSTRAINT `alternativa_ibfk_1` FOREIGN KEY (`questao_id`) REFERENCES `questao` (`questao_id`);

--
-- Restrições para tabelas `prova`
--
ALTER TABLE `prova`
  ADD CONSTRAINT `prova_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`usuario_id`);

--
-- Restrições para tabelas `resposta`
--
ALTER TABLE `resposta`
  ADD CONSTRAINT `resposta_ibfk_1` FOREIGN KEY (`questao_id`) REFERENCES `questao` (`questao_id`),
  ADD CONSTRAINT `resposta_ibfk_2` FOREIGN KEY (`alternativa_selecionada_id`) REFERENCES `alternativa` (`alternativa_id`),
  ADD CONSTRAINT `resposta_ibfk_3` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`usuario_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
