-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 27/09/2020 às 13:57
-- Versão do servidor: 10.4.13-MariaDB
-- Versão do PHP: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `u140601217_porta`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `unidade`
--

CREATE TABLE `unidade` (
  `uniid` int(11) NOT NULL,
  `unitipo` int(11) DEFAULT 0,
  `unidadeGestora` varchar(6) DEFAULT NULL,
  `unitipocodigo` int(5) NOT NULL,
  `uninome` varchar(200) DEFAULT NULL,
  `unilocal` varchar(200) DEFAULT NULL,
  `unibairro` varchar(200) DEFAULT NULL,
  `unisec` int(11) DEFAULT NULL,
  `unifuncao` varchar(200) DEFAULT NULL,
  `unifoto` varchar(200) DEFAULT NULL,
  `uniemail` varchar(200) DEFAULT NULL,
  `unifone` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `unidade`
--

INSERT INTO `unidade` (`uniid`, `unitipo`, `unidadeGestora`, `unitipocodigo`, `uninome`, `unilocal`, `unibairro`, `unisec`, `unifuncao`, `unifoto`, `uniemail`, `unifone`) VALUES
(1, 0, NULL, 0, 'CRAS 2', 'Povoado Buritirana', 'Zona Rural', 1, 'Operacional', '(1)BRASAO 176 13062017093439 3.jpg', 'rosalina.sas@gmail.com', '(89) 3469-1118'),
(3, 0, NULL, 0, 'U E Eustáquio Portela - Estadual', 'Avenida Antonio Tome Soares de Carvalho ', 'Centro', 8, NULL, NULL, NULL, NULL),
(4, 0, NULL, 0, 'Pre E M Mundica Portela - Municipal', 'Rua Sao Nicolau ', 'Centro', 8, NULL, NULL, NULL, NULL),
(5, 0, NULL, 0, 'U E Municipal Rural Edson Queiroz', 'Lagoa das Missões ', 'Zona Rural', 8, NULL, NULL, NULL, NULL),
(6, 0, NULL, 0, 'Gabinete ', 'Prédio da Prefeitura Municipal ', 'Centro', 4, 'Assessor jurídico', '(2)BRASAO 176 13062017093439 3.jpg', 'prefeiturascm@gmail.com', '(89) 3469-1118'),
(7, 1, NULL, 0, '?????', 'Santa Cruz dos Milagres', 'Centro', 10, 'Tesoureiro', 'secmale.jpg', NULL, NULL),
(9, 0, NULL, 0, 'Chefe do Gabinete', 'Sede do Municipío', 'Centro', 166, NULL, NULL, NULL, NULL),
(10, 1, NULL, 0, 'Rosângela Brandim', 'Sede do Municipio', 'Centro', 147, 'Chefe de Gabinete', 'secretario1 brandao.jpg', 'chefiadegabinete.pmdl@gmail.com', '86 9.9417-9167'),
(11, 0, NULL, 0, 'Asssssss Siiiiiiiiiii', 'Sede do Municipio', 'Centro', 175, 'Chefe de Gabinete', 'ampar.jpg', 'jardimdomulato@hotmail.com', '86 3222-2588'),
(12, 0, NULL, 0, 'RIVALDO FEITOSA', 'Sede', 'Centro', 34, 'Chefe de Gabinete', 'ampar.jpg', NULL, '86 3213-6248'),
(13, 0, NULL, 0, 'Maria Uccccch', 'Sede', 'Centro', 64, 'Chefe do Hospital', 'funcionarios da ampar.jpeg', 'lagoasaude@bol.com', '86  9 9988-9988'),
(14, 0, NULL, 0, 'Fran Lim', 'Sede', 'Centro', 184, 'Chefe de Gabinete', 'ampar.jpg', 'lagoina@bol.com', '86 3254-6587'),
(15, 0, NULL, 0, 'Magno Aurélio', 'Teresina', 'Acarape', 44, 'Gerente', 'magnoaur.jpg', 'magnusoft1@hotmail.com', '86 9 9977-7403'),
(16, 0, NULL, 0, 'Marcelo Alves', 'Teresina', NULL, 44, 'Web Developer', 'marcelo.jpg', 'marceloalvessoft@gmail.com', '86 9 9809-4675'),
(18, 1, NULL, 0, 'Fco de Tal', NULL, NULL, 60, 'Tesoureiro', 'ampar.jpg', 'publicapaudarco@gmail.com', '86 3275-0050'),
(19, 0, NULL, 0, 'Jonas Moura', NULL, NULL, 321, 'Presidente', NULL, NULL, NULL),
(20, 1, NULL, 0, 'LEILA PATRÍCIA', 'Rua Dep. Fco, José de Carvalho', 'Centro', 75, 'Assessora Financeira', '(2)FINANCAS.png', NULL, '86 9 .9825-5148'),
(21, 1, NULL, 0, 'Luciana Mara', 'Sede', 'Centro', 317, 'Técnico AS', 'secfemale.jpg', 'lucianamarabarbosa@hotmail.com', '86  3262-1557 9.9932-8333'),
(22, 1, NULL, 0, 'Regilane Maria dos Santos', 'Av. Joao Ferreira, 555', 'Sede - Centro', 79, 'Profissional AS', 'secfemale.jpg', 'regilenemaria@gmail.com', '086 3282-1141/1142'),
(23, 1, NULL, 0, 'Magda Francis', 'CAPS', 'Sede-Centro', 317, 'Profissional AS', '(1)secfemale.jpg', NULL, '(86) 3262-1557'),
(24, 1, NULL, 0, 'Adriana Nunes de A Gomes', 'CAPS', 'Centro', 79, 'Profissional AS', '(1)secfemale.jpg', NULL, NULL),
(25, 1, NULL, 0, 'Márcia Nyanne S Costa', 'CAPS', 'Sede-Centro', 92, 'Profissional AS', 'secfemale.jpg', 'marcianayanne@hotmail.com', '086 3298-1112'),
(26, 1, NULL, 0, 'Francisca Ribeiro', 'CAPS', 'Centro', 317, 'Profissional SUAS', '(2)secfemale.jpg', 'fca_rib@hotmail.com', '(86) 3262-1557'),
(27, 1, NULL, 0, 'Leko Lira Pires', 'CAPS', 'Centro', 317, 'Profissional SUAS', 'secmale.jpg', NULL, '(86) 3262-1557'),
(28, 1, NULL, 0, 'Miriam Franco Pinto', 'CAPS', 'Sede - Centro', 317, 'Profissional SUAS', 'secfemale.jpg', 'miran@hotmail.com', '(86) 3262-1557'),
(29, 1, NULL, 0, 'Francilan S Oliveira', NULL, NULL, 49, 'Profissional SUAS', 'secfemale.jpg', NULL, ' (86) 9.9509-9696'),
(30, 1, NULL, 0, 'Geovânia Cida do Nascimento', 'CAPS', 'Centro', 423, 'Profissional SUAS', 'secfemale.jpg', 'semaslsf@gmail.com', '86 9.8158-3813'),
(31, 1, NULL, 0, 'Eulla Nayanne dos Santos', 'Avenida Tenente Zeli, 1560', 'Centro', 65, 'AS - Assessora CRAS', 'EULA.jpg', 'secretariaas@hotmail.com', '086 3529-1203 3227-4724'),
(32, 1, NULL, 0, 'Andréia Maria da Silva', 'CRAS', 'Centro', 261, 'Profissional CRAS', 'secfemale.jpg', NULL, NULL),
(33, 1, NULL, 0, 'Regina Maria', 'CRAS', 'Centro', 532, 'AS -Profissiona CRAS', 'secfemale.jpg', 'cras-itaueira.ti@hotmail.com', '89 9974-9648'),
(34, 1, NULL, 0, 'Brenda Renata Vieira', 'CRAS', 'Centro', 232, 'AS - Profissional CRAS', 'secfemale.jpg', 'brendacronny@gmail.com', '86 9.9492-8202'),
(35, 1, NULL, 0, 'LUIS HENRIQUE CAMPELO SILVA', 'Hospital ', 'Centro', 105, 'Diretor do Hospital', 'secfemale.jpg', 'san12silva@hotmail.com', ' 86 9.9809-0004'),
(36, 1, NULL, 0, 'EDGAR ARAÚJO COSTA', 'Garagem dos Transportes', 'Centro', 29, 'Chefe dos Transportes', 'secmale.jpg', 'aroazes.pi@gmail.com', '89 9.9987-6040'),
(37, 1, NULL, 0, 'CALIÉLIA PEREIRA SOARES', 'SEMA', 'Centro', 29, 'Gerente de Previdência', '(1)secfemale.jpg', 'calielia07@gmail.com', ' 86 9.9808-1378'),
(38, 1, NULL, 0, 'ANTONIO CARLOS DA PAZ RIBEIRO ', 'Hospital', 'Centro', 160, 'Diretor da  UMSVB', 'secfemale.jpg', NULL, ' (89) 9.9460-7498'),
(39, 1, NULL, 0, 'José Alberto Araujo Nascimento Junior', 'Gabinete do Prefeito', 'Sede - Centro', 205, 'Assessor de Impressa', 'secmale.jpg', 'junyorsound@gmail.com', '086 9.9807-0326'),
(40, 1, NULL, 0, 'Conselho Tutelar', 'Conselho Tutelar', 'Centro', 203, 'Cuidar do Idoso', 'CONSELHO.jpg', 'micaelmgil@gmail.com', '086 9.8100-5325'),
(41, 1, NULL, 0, 'Lhano de Noronha Pessoa', 'HOSPITAL', 'Centro', 202, 'HOSPITAL - Atendimento Médico Hospitalar', '(1)HOSPITAL.jpg', 'micaelmgil@gmail.com', '086 9.8153-8495'),
(42, 1, NULL, 0, 'VERA LUCIA DE LIMA SILVA', 'CPL', 'Centro', 213, 'Licitações e Contrtatos', '(2)VERA.jpg', 'com.pmn@gmail.com', '86 9 9953.2398'),
(43, 1, NULL, 0, 'Lívia Sayonara Barradas Silva', 'Gabinete', 'Centro', 209, 'Assessora de Imprensa', 'LIVIA.jpg', 'lilibarradas@hotmail.com', '86 9.8831-2439'),
(44, 0, NULL, 0, 'IDALIA RODRIGUES DE ABREU', 'CONSELHO TUTELAR', 'Centro', 212, 'IDOSO ', 'secfemale.jpg', 'semid.nazariapi@hotmail.com', '86 9 9987.3219'),
(45, 0, NULL, 0, 'MARIA SALOME BATISTA DOS SANTOS', 'Criança e Adolescente', 'Rua São José 258 - Centro', 212, 'Juventude', '(1)secfemale.jpg', NULL, '86 9 9821.2498'),
(46, 0, NULL, 0, 'SILVANA RODRIGUES DE ABREU SABOIA', 'RH', 'Sede - Centro', 213, 'Recurso Humanos', '(2)secfemale.jpg', 'sil_abreu@hotmail.com', '86 9 9819.3632'),
(47, 0, NULL, 0, 'Leila Cristina de Sousa', 'TESOURARIA', 'Centro', 306, 'Tesoureira', 'LEILA.jpg', 'leila25-@hotmail.com', '(89) 3493-0039'),
(48, 0, NULL, 0, 'Josivan Alencar de Carvalho', 'CPL', 'Sede-Centro', 306, 'Licitações e Contratos', '(1)secmale.jpg', 'pref.acaua@gmail.com', '(89) 3493-0074'),
(49, 0, NULL, 0, 'SOLANGE PEREIRA DOS SANTOS', 'TESOURARIA', 'Centro', 594, 'Tesoureira', 'secfemale.jpg', 'solangepmaa@hotmail.com', ' (89) 3588 1106'),
(50, 1, NULL, 0, 'ANTÔNIO CRISTIAN OLIVEIRA LIMA', 'TESOURARIA GERAL', 'Centro', 619, 'Tesoureiro', 'secmale.jpg', NULL, '086 3254-0054'),
(51, 1, NULL, 0, 'Danilo Cardoso', 'Teresina - Escritório', 'Centro', 43, 'Gerente Responsável', '(1)DANILO.fw.png', NULL, '86 9.9963-1907 *'),
(52, 0, NULL, 0, 'Danilo Cardoso', 'Teresina -PI', 'Centro', 720, 'Sócio Gerente', '(2)DANILO.fw.png', NULL, '86 9.9963-1907'),
(53, 1, NULL, 0, 'Felipe', 'Teresina', 'Vermelha', 33, 'Profissional de TI', 'FELIPE.jpg', NULL, ' 9.9972-2072'),
(54, 1, NULL, 0, 'Vinicius', 'Teresina', 'Vermelha', 33, 'Profissional de TI', '(2)secmale.jpg', NULL, '86 9.9818-0071');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `unidade`
--
ALTER TABLE `unidade`
  ADD PRIMARY KEY (`uniid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
