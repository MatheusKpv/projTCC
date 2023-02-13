-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Fev-2023 às 23:08
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_estoque`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_auditoria`
--

CREATE TABLE `tb_auditoria` (
  `id_auditoria` int(11) NOT NULL,
  `nm_tabela` varchar(55) NOT NULL,
  `dt_evento` date NOT NULL,
  `evento` varchar(55) NOT NULL,
  `vl_anterior` varchar(255) DEFAULT NULL,
  `vl_novo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_auditoria`
--

INSERT INTO `tb_auditoria` (`id_auditoria`, `nm_tabela`, `dt_evento`, `evento`, `vl_anterior`, `vl_novo`) VALUES
(514, 'tb_cliente', '2022-11-21', 'INSERT', NULL, '2|Jonas|638.128.540-86|1991-06-11|2022-11-21|rua 1|4875|compl 1|99734000|1|48|98854287|48|988542877|jonas@gmail.com| obs 1'),
(515, 'tb_cidade', '2022-11-23', 'INSERT', NULL, '4|Imbituba|1'),
(516, 'tb_cliente', '2022-11-23', 'UPDATE', '2|Jonas|638.128.540-86|1991-06-11|2022-11-21|rua 1|4875|compl 1|99734000|1|48|98854287|48|988542877|jonas@gmail.com| obs 1', '2|Jonas|638.128.540-86|1991-06-11|2022-11-21|rua|4875|compl|99734000|1|48|98854287|48|988542877|jonas@gmail.com| obs 1 '),
(517, 'tb_cliente', '2022-11-23', 'UPDATE', '2|Jonas|638.128.540-86|1991-06-11|2022-11-21|rua|4875|compl|99734000|1|48|98854287|48|988542877|jonas@gmail.com| obs 1 ', '2|Jonas|638.128.540-86|1991-06-11|2022-11-21|rua marc|4875|compl|99734000|1|48|98854287|48|988542877|jonas@gmail.com| obs 1  '),
(518, 'tb_cliente', '2022-11-23', 'UPDATE', '2|Jonas|638.128.540-86|1991-06-11|2022-11-21|rua marc|4875|compl|99734000|1|48|98854287|48|988542877|jonas@gmail.com| obs 1  ', '2|Jonas|638.128.540-86|1991-06-11|2022-11-21|a|4875|compl|99734000|1|48|98854287|48|988542877|jonas@gmail.com| obs 1   '),
(519, 'tb_compra', '2022-11-23', 'UPDATE', '4|2022-11-18|1|1|0.00', '4|2022-11-18|1|1|0.00'),
(520, 'tb_compra', '2022-11-23', 'UPDATE', '4|2022-11-18|1|1|0.00', '4|2022-11-18|1|1|0.00'),
(521, 'tb_produto', '2022-11-23', 'UPDATE', '1|Carrinho||5.00|12.00|25|2022-10-20|2|hot wheels ', '1|Carrinho||5.00|12.00|33|2022-10-20|2|hot wheels '),
(522, 'tb_itens_compra', '2022-11-23', 'INSERT', NULL, '22|1|4|8'),
(523, 'tb_compra', '2022-11-23', 'UPDATE', '4|2022-11-18|1|1|0.00', '4|2022-11-18|1|1|40.00'),
(524, 'tb_venda', '2022-11-23', 'UPDATE', '11|2022-11-18|1|1|1200.00', '11|2022-11-18|1|1|1200.00'),
(525, 'tb_compra', '2022-11-24', 'UPDATE', '4|2022-11-18|1|1|40.00', '4|2022-11-18|1|1|40.00'),
(526, 'tb_compra', '2022-11-24', 'INSERT', NULL, '7|2022-11-24|1|1|0.00'),
(527, 'tb_compra', '2022-11-24', 'UPDATE', '7|2022-11-24|1|1|0.00', '7|2022-11-24|1|1|0.00'),
(528, 'tb_produto', '2022-11-24', 'UPDATE', '2|avião||110.00|200.00|46|2022-11-18|2|controle remoto ', '2|avião||110.00|200.00|50|2022-11-18|2|controle remoto '),
(529, 'tb_itens_compra', '2022-11-24', 'INSERT', NULL, '23|2|7|4'),
(530, 'tb_compra', '2022-11-24', 'UPDATE', '7|2022-11-24|1|1|0.00', '7|2022-11-24|1|1|440.00'),
(531, 'tb_produto', '2022-11-24', 'UPDATE', '2|avião||110.00|200.00|50|2022-11-18|2|controle remoto ', '2|avião||110.00|200.00|46|2022-11-18|2|controle remoto '),
(532, 'tb_itens_compra', '2022-11-24', 'DELETE', '23|2|7|4', NULL),
(533, 'tb_compra', '2022-11-24', 'UPDATE', '7|2022-11-24|1|1|440.00', '7|2022-11-24|1|1|0.00'),
(534, 'tb_compra', '2022-11-24', 'UPDATE', '7|2022-11-24|1|1|0.00', '7|2022-11-24|1|1|0.00'),
(535, 'tb_produto', '2022-11-24', 'UPDATE', '2|avião||110.00|200.00|46|2022-11-18|2|controle remoto ', '2|avião||110.00|200.00|50|2022-11-18|2|controle remoto '),
(536, 'tb_itens_compra', '2022-11-24', 'INSERT', NULL, '24|2|7|4'),
(537, 'tb_compra', '2022-11-24', 'UPDATE', '7|2022-11-24|1|1|0.00', '7|2022-11-24|1|1|440.00'),
(538, 'tb_venda', '2022-11-24', 'UPDATE', '12|2022-11-17|1|1|110.00', '12|2022-11-17|1|1|110.00'),
(539, 'tb_venda', '2022-11-24', 'UPDATE', '12|2022-11-17|1|1|110.00', '12|2022-11-17|1|1|110.00'),
(540, 'tb_venda', '2022-11-24', 'DELETE', '12|2022-11-17|1|1|110.00', NULL),
(541, 'tb_produto', '2022-11-24', 'UPDATE', '3|Caderno||6.00|10.00|9|2022-11-18|1| Tilivra', '3|Caderno||6.00|10.00|14|2022-11-18|1| Tilivra'),
(542, 'tb_itens_venda', '2022-11-24', 'DELETE', '26|12|3|5', NULL),
(543, 'tb_produto', '2022-11-24', 'UPDATE', '1|Carrinho||5.00|12.00|33|2022-10-20|2|hot wheels ', '1|Carrinho||5.00|12.00|38|2022-10-20|2|hot wheels '),
(544, 'tb_itens_venda', '2022-11-24', 'DELETE', '27|12|1|5', NULL),
(545, 'tb_venda', '2022-11-24', 'INSERT', NULL, '13|2022-11-24|2|1|0.00'),
(546, 'tb_venda', '2022-11-24', 'UPDATE', '13|2022-11-24|2|1|0.00', '13|2022-11-24|2|1|0.00'),
(547, 'tb_produto', '2022-11-24', 'UPDATE', '3|Caderno||6.00|10.00|14|2022-11-18|1| Tilivra', '3|Caderno||6.00|10.00|12|2022-11-18|1| Tilivra'),
(548, 'tb_itens_venda', '2022-11-24', 'INSERT', NULL, '29|13|3|2'),
(549, 'tb_venda', '2022-11-24', 'UPDATE', '13|2022-11-24|2|1|0.00', '13|2022-11-24|2|1|20.00'),
(550, 'tb_produto', '2022-11-24', 'UPDATE', '3|Caderno||6.00|10.00|12|2022-11-18|1| Tilivra', '3|Caderno||6.00|10.00|10|2022-11-18|1| Tilivra'),
(551, 'tb_itens_venda', '2022-11-24', 'INSERT', NULL, '30|13|3|2'),
(552, 'tb_venda', '2022-11-24', 'UPDATE', '13|2022-11-24|2|1|20.00', '13|2022-11-24|2|1|40.00'),
(553, 'tb_venda', '2022-11-24', 'DELETE', '13|2022-11-24|2|1|40.00', NULL),
(554, 'tb_produto', '2022-11-24', 'UPDATE', '3|Caderno||6.00|10.00|10|2022-11-18|1| Tilivra', '3|Caderno||6.00|10.00|12|2022-11-18|1| Tilivra'),
(555, 'tb_itens_venda', '2022-11-24', 'DELETE', '29|13|3|2', NULL),
(556, 'tb_produto', '2022-11-24', 'UPDATE', '3|Caderno||6.00|10.00|12|2022-11-18|1| Tilivra', '3|Caderno||6.00|10.00|14|2022-11-18|1| Tilivra'),
(557, 'tb_itens_venda', '2022-11-24', 'DELETE', '30|13|3|2', NULL),
(558, 'tb_venda', '2022-11-24', 'INSERT', NULL, '14|2022-11-24|2|1|0.00'),
(559, 'tb_venda', '2022-11-24', 'UPDATE', '14|2022-11-24|2|1|0.00', '14|2022-11-24|2|1|0.00'),
(560, 'tb_produto', '2022-11-24', 'UPDATE', '2|avião||110.00|200.00|50|2022-11-18|2|controle remoto ', '2|avião||110.00|200.00|48|2022-11-18|2|controle remoto '),
(561, 'tb_itens_venda', '2022-11-24', 'INSERT', NULL, '31|14|2|2'),
(562, 'tb_venda', '2022-11-24', 'UPDATE', '14|2022-11-24|2|1|0.00', '14|2022-11-24|2|1|400.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cidade`
--

CREATE TABLE `tb_cidade` (
  `id_cidade` int(11) NOT NULL,
  `nm_cidade` varchar(55) NOT NULL,
  `fk_id_estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_cidade`
--

INSERT INTO `tb_cidade` (`id_cidade`, `nm_cidade`, `fk_id_estado`) VALUES
(1, 'Laguna', 1),
(2, 'Tubarão', 1),
(3, 'Capivari de Baixo', 1),
(4, 'Imbituba', 1);

--
-- Acionadores `tb_cidade`
--
DELIMITER $$
CREATE TRIGGER `trg_cidade_del` AFTER DELETE ON `tb_cidade` FOR EACH ROW BEGIN
INSERT INTO tb_auditoria (nm_tabela, dt_evento, evento, vl_anterior, vl_novo) 
VALUES ('tb_cidade', NOW(), 'DELETE', CONCAT(OLD.id_cidade,'|', OLD.nm_cidade, '|', OLD.`fk_id_estado`), NULL
        );
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trg_cidade_ins` AFTER INSERT ON `tb_cidade` FOR EACH ROW BEGIN
INSERT INTO tb_auditoria (nm_tabela, dt_evento, evento, vl_anterior, vl_novo) 
VALUES ('tb_cidade', NOW(), 'INSERT', NULL, CONCAT(NEW.id_cidade,'|', NEW.nm_cidade, '|', NEW.`fk_id_estado`)
        );
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trg_cidade_upd` AFTER UPDATE ON `tb_cidade` FOR EACH ROW BEGIN
INSERT INTO tb_auditoria (nm_tabela, dt_evento, evento, vl_anterior, vl_novo) 
VALUES ('tb_cidade', NOW(), 'UPDATE', CONCAT(OLD.id_cidade,'|', OLD.nm_cidade, '|', OLD.`fk_id_estado`), CONCAT(NEW.id_cidade,'|', NEW.nm_cidade, '|', NEW.`fk_id_estado`)
        );
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cliente`
--

CREATE TABLE `tb_cliente` (
  `id_cliente` int(11) NOT NULL,
  `nm_cliente` varchar(55) NOT NULL,
  `cpf` varchar(14) DEFAULT NULL,
  `dt_nasc` date DEFAULT NULL,
  `dt_cadastro` date DEFAULT NULL,
  `end_rua` varchar(55) DEFAULT NULL,
  `end_nro` varchar(10) DEFAULT NULL,
  `end_compl` varchar(20) DEFAULT NULL,
  `end_cep` varchar(8) DEFAULT NULL,
  `fk_id_cidade` int(11) DEFAULT NULL,
  `ddd_fone` varchar(2) DEFAULT NULL,
  `fone` varchar(8) DEFAULT NULL,
  `ddd_celular` varchar(2) DEFAULT NULL,
  `celular` varchar(9) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `obs` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_cliente`
--

INSERT INTO `tb_cliente` (`id_cliente`, `nm_cliente`, `cpf`, `dt_nasc`, `dt_cadastro`, `end_rua`, `end_nro`, `end_compl`, `end_cep`, `fk_id_cidade`, `ddd_fone`, `fone`, `ddd_celular`, `celular`, `email`, `obs`) VALUES
(1, 'Lucia', '638.198.890-86', '1998-06-09', '2022-10-09', 'rua', '1545', 'complemento', '88945-00', 3, '48', '99999999', '47', '988776655', 'lucia@gmail.com', ' obs'),
(2, 'Jonas', '638.128.540-86', '1991-06-11', '2022-11-21', 'a', '4875', 'compl', '99734000', 1, '48', '98854287', '48', '988542877', 'jonas@gmail.com', ' obs 1   ');

--
-- Acionadores `tb_cliente`
--
DELIMITER $$
CREATE TRIGGER `trg_cliente_del` AFTER DELETE ON `tb_cliente` FOR EACH ROW BEGIN
INSERT INTO tb_auditoria (nm_tabela, dt_evento, evento, vl_anterior, vl_novo) 
VALUES ('tb_cliente', NOW(), 'DELETE', CONCAT(OLD.id_cliente,'|', OLD.nm_cliente, '|', OLD.`cpf`, '|', OLD.`dt_nasc`, '|', OLD.`dt_cadastro`,'|', OLD.`end_rua`, '|', OLD.`end_nro`,'|', OLD.`end_compl`, '|', OLD.`end_cep`,'|', OLD.`fk_id_cidade`, '|', OLD.`ddd_fone`,'|', OLD.`fone`, '|', OLD.`ddd_celular`,'|', OLD.`celular`, '|', OLD.`email`,'|', OLD.`obs`), NULL
        );
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trg_cliente_ins` AFTER INSERT ON `tb_cliente` FOR EACH ROW BEGIN
INSERT INTO tb_auditoria (nm_tabela, dt_evento, evento, vl_anterior, vl_novo) 
VALUES ('tb_cliente', NOW(), 'INSERT', NULL, CONCAT(NEW.id_cliente,'|', NEW.nm_cliente, '|', NEW.`cpf`, '|', NEW.`dt_nasc`, '|', NEW.`dt_cadastro`,'|', NEW.`end_rua`, '|', NEW.`end_nro`, '|', NEW.`end_compl`,'|', NEW.`end_cep`, '|', NEW.`fk_id_cidade`, '|', NEW.`ddd_fone`,'|', NEW.`fone`, '|', NEW.`ddd_celular`, '|', NEW.`celular`,'|', NEW.`email`, '|', NEW.`obs`)
        );
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trg_cliente_upd` AFTER UPDATE ON `tb_cliente` FOR EACH ROW BEGIN
INSERT INTO tb_auditoria (nm_tabela, dt_evento, evento, vl_anterior, vl_novo) 
VALUES ('tb_cliente', NOW(), 'UPDATE', CONCAT(OLD.id_cliente,'|', OLD.nm_cliente, '|', OLD.`cpf`, '|', OLD.`dt_nasc`, '|', OLD.`dt_cadastro`,'|', OLD.`end_rua`, '|', OLD.`end_nro`,'|', OLD.`end_compl`, '|', OLD.`end_cep`,'|', OLD.`fk_id_cidade`, '|', OLD.`ddd_fone`,'|', OLD.`fone`, '|', OLD.`ddd_celular`,'|', OLD.`celular`, '|', OLD.`email`,'|', OLD.`obs`), CONCAT(NEW.id_cliente,'|', NEW.nm_cliente, '|', NEW.`cpf`, '|', NEW.`dt_nasc`, '|', NEW.`dt_cadastro`,'|', NEW.`end_rua`, '|', NEW.`end_nro`, '|', NEW.`end_compl`,'|', NEW.`end_cep`, '|', NEW.`fk_id_cidade`, '|', NEW.`ddd_fone`,'|', NEW.`fone`, '|', NEW.`ddd_celular`, '|', NEW.`celular`,'|', NEW.`email`, '|', NEW.`obs`)
        );
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_compra`
--

CREATE TABLE `tb_compra` (
  `id_compra` int(11) NOT NULL,
  `dt_compra` date DEFAULT NULL,
  `fk_id_comprador` int(11) DEFAULT NULL,
  `fk_id_fornecedor` int(11) DEFAULT NULL,
  `vl_total` double(12,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_compra`
--

INSERT INTO `tb_compra` (`id_compra`, `dt_compra`, `fk_id_comprador`, `fk_id_fornecedor`, `vl_total`) VALUES
(4, '2022-11-18', 1, 1, 40.00),
(5, '2022-11-17', 1, 1, 10.00),
(6, '2022-11-21', 1, 1, 244.00),
(7, '2022-11-24', 1, 1, 440.00);

--
-- Acionadores `tb_compra`
--
DELIMITER $$
CREATE TRIGGER `trg_comp_del_itens` AFTER DELETE ON `tb_compra` FOR EACH ROW BEGIN
DELETE FROM tb_itens_compra 
WHERE OLD.id_compra = tb_itens_compra.fk_id_compra;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trg_compra_del` AFTER DELETE ON `tb_compra` FOR EACH ROW BEGIN
INSERT INTO tb_auditoria (nm_tabela, dt_evento, evento, vl_anterior, vl_novo) 
VALUES ('tb_compra', NOW(), 'DELETE', CONCAT(OLD.`id_compra`,'|', OLD.`dt_compra`, '|', OLD.`fk_id_comprador`,'|', OLD.`fk_id_fornecedor`, '|', OLD.`vl_total`), NULL
        );
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trg_compra_ins` AFTER INSERT ON `tb_compra` FOR EACH ROW BEGIN
INSERT INTO tb_auditoria (nm_tabela, dt_evento, evento, vl_anterior, vl_novo) 
VALUES ('tb_compra', NOW(), 'INSERT', NULL, CONCAT(NEW.`id_compra`,'|', NEW.`dt_compra`, '|', NEW.`fk_id_comprador`,'|', NEW.`fk_id_fornecedor`, '|', NEW.`vl_total`)
        );
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trg_compra_upd` AFTER UPDATE ON `tb_compra` FOR EACH ROW BEGIN
INSERT INTO tb_auditoria (nm_tabela, dt_evento, evento, vl_anterior, vl_novo) 
VALUES ('tb_compra', NOW(), 'UPDATE', CONCAT(OLD.`id_compra`,'|', OLD.`dt_compra`, '|', OLD.`fk_id_comprador`,'|', OLD.`fk_id_fornecedor`, '|', OLD.`vl_total`), CONCAT(NEW.`id_compra`,'|', NEW.`dt_compra`, '|', NEW.`fk_id_comprador`,'|', NEW.`fk_id_fornecedor`, '|', NEW.`vl_total`)
        );
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_comprador`
--

CREATE TABLE `tb_comprador` (
  `id_comprador` int(11) NOT NULL,
  `nm_comprador` varchar(55) NOT NULL,
  `perc_comissao` double(9,2) DEFAULT NULL,
  `ddd_fone` varchar(2) DEFAULT NULL,
  `fone` varchar(8) DEFAULT NULL,
  `ddd_celular` varchar(2) DEFAULT NULL,
  `celular` varchar(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_comprador`
--

INSERT INTO `tb_comprador` (`id_comprador`, `nm_comprador`, `perc_comissao`, `ddd_fone`, `fone`, `ddd_celular`, `celular`) VALUES
(1, 'Jhulia Alcantino', 0.99, '14', '96666666', '14', '923232323');

--
-- Acionadores `tb_comprador`
--
DELIMITER $$
CREATE TRIGGER `trg_comprador_del` AFTER DELETE ON `tb_comprador` FOR EACH ROW BEGIN
INSERT INTO tb_auditoria (nm_tabela, dt_evento, evento, vl_anterior, vl_novo) 
VALUES ('tb_comprador', NOW(), 'DELETE', CONCAT(OLD.`id_comprador`,'|', OLD.`nm_comprador`, '|', OLD.`perc_comissao`, '|', OLD.`ddd_fone`,'|', OLD.`fone`, '|', OLD.`ddd_celular`,'|', OLD.`celular`), NULL
        );
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trg_comprador_ins` AFTER INSERT ON `tb_comprador` FOR EACH ROW BEGIN
INSERT INTO tb_auditoria (nm_tabela, dt_evento, evento, vl_anterior, vl_novo) 
VALUES ('tb_comprador', NOW(), 'INSERT', NULL, CONCAT(NEW.`id_comprador`,'|', NEW.`nm_comprador`, '|', NEW.`perc_comissao`, '|', NEW.`ddd_fone`,'|', NEW.`fone`, '|', NEW.`ddd_celular`, '|', NEW.`celular`)
        );
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trg_comprador_upd` AFTER UPDATE ON `tb_comprador` FOR EACH ROW BEGIN
INSERT INTO tb_auditoria (nm_tabela, dt_evento, evento, vl_anterior, vl_novo) 
VALUES ('tb_comprador', NOW(), 'UPDATE', CONCAT(OLD.`id_comprador`,'|', OLD.`nm_comprador`, '|', OLD.`perc_comissao`, '|', OLD.`ddd_fone`,'|', OLD.`fone`, '|', OLD.`ddd_celular`,'|', OLD.`celular`), CONCAT(NEW.`id_comprador`,'|', NEW.`nm_comprador`, '|', NEW.`perc_comissao`, '|', NEW.`ddd_fone`,'|', NEW.`fone`, '|', NEW.`ddd_celular`, '|', NEW.`celular`)
        );
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_estado`
--

CREATE TABLE `tb_estado` (
  `id_estado` int(11) NOT NULL,
  `nm_estado` varchar(55) NOT NULL,
  `sigla` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_estado`
--

INSERT INTO `tb_estado` (`id_estado`, `nm_estado`, `sigla`) VALUES
(1, 'Santa Catarina', 'SC');

--
-- Acionadores `tb_estado`
--
DELIMITER $$
CREATE TRIGGER `trg_estado_del` AFTER DELETE ON `tb_estado` FOR EACH ROW BEGIN
INSERT INTO tb_auditoria (nm_tabela, dt_evento, evento, vl_anterior, vl_novo) 
VALUES ('tb_estado', NOW(), 'DELETE', CONCAT(OLD.id_estado,'|', OLD.nm_estado, '|', OLD.sigla), NULL
        );
        
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trg_estado_ins` AFTER INSERT ON `tb_estado` FOR EACH ROW BEGIN
INSERT INTO tb_auditoria (nm_tabela, dt_evento, evento, vl_anterior, vl_novo) 
VALUES ('tb_estado', NOW(), 'INSERT', NULL, CONCAT(NEW.id_estado,'|', NEW.nm_estado, '|', NEW.sigla)
        );
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trg_estado_upd` AFTER UPDATE ON `tb_estado` FOR EACH ROW BEGIN
INSERT INTO tb_auditoria (nm_tabela, dt_evento, evento, vl_anterior, vl_novo) 
VALUES ('tb_estado', NOW(), 'UPDATE', CONCAT(OLD.id_estado,'|', OLD.nm_estado, '|', OLD.sigla), CONCAT(NEW.id_estado,'|', NEW.nm_estado, '|', NEW.sigla)
        );
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_fornecedor`
--

CREATE TABLE `tb_fornecedor` (
  `id_forn` int(11) NOT NULL,
  `nm_forn` varchar(55) NOT NULL,
  `cnpj` varchar(18) DEFAULT NULL,
  `dt_ini_ativ` date DEFAULT NULL,
  `dt_cadastro` date DEFAULT NULL,
  `end_rua` varchar(255) DEFAULT NULL,
  `end_nro` varchar(10) DEFAULT NULL,
  `end_compl` varchar(55) DEFAULT NULL,
  `end_cep` varchar(9) DEFAULT NULL,
  `end_bairro` varchar(55) DEFAULT NULL,
  `fk_id_cidade` int(11) DEFAULT NULL,
  `ddd_fone` varchar(2) DEFAULT NULL,
  `fone` varchar(8) DEFAULT NULL,
  `ddd_celular` varchar(2) DEFAULT NULL,
  `celular` varchar(9) DEFAULT NULL,
  `email` varchar(55) DEFAULT NULL,
  `obs` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_fornecedor`
--

INSERT INTO `tb_fornecedor` (`id_forn`, `nm_forn`, `cnpj`, `dt_ini_ativ`, `dt_cadastro`, `end_rua`, `end_nro`, `end_compl`, `end_cep`, `end_bairro`, `fk_id_cidade`, `ddd_fone`, `fone`, `ddd_celular`, `celular`, `email`, `obs`) VALUES
(1, 'Malcom', '83.872.972/0001-01', '2022-09-26', '2022-10-09', 'rua', '4875', 'compl', '66122-00', 'bairro', 1, '47', '97744444', '47', '911111111', 'ggw@gmail.com', ' obs');

--
-- Acionadores `tb_fornecedor`
--
DELIMITER $$
CREATE TRIGGER `trg_fornecedor_del` AFTER DELETE ON `tb_fornecedor` FOR EACH ROW BEGIN
INSERT INTO tb_auditoria (nm_tabela, dt_evento, evento, vl_anterior, vl_novo) 
VALUES ('tb_fornecedor', NOW(), 'DELETE', CONCAT(OLD.`id_forn`,'|', OLD.`nm_forn`, '|', OLD.`cnpj`, '|', OLD.`dt_ini_ativ`, '|', OLD.`dt_cadastro`,'|', OLD.`end_rua`, '|', OLD.`end_nro`,'|', OLD.`end_compl`, '|', OLD.`end_cep`,'|', OLD.`end_bairro`, '|', OLD.`fk_id_cidade`, '|', OLD.`ddd_fone`,'|', OLD.`fone`, '|', OLD.`ddd_celular`,'|', OLD.`celular`, '|', OLD.`email`,'|', OLD.`obs`), NULL
        );
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trg_fornecedor_ins` AFTER INSERT ON `tb_fornecedor` FOR EACH ROW BEGIN
INSERT INTO tb_auditoria (nm_tabela, dt_evento, evento, vl_anterior, vl_novo) 
VALUES ('tb_fornecedor', NOW(), 'INSERT', NULL, CONCAT(NEW.`id_forn`,'|', NEW.`nm_forn`, '|', NEW.`cnpj`, '|', NEW.`dt_ini_ativ`, '|', NEW.`dt_cadastro`,'|', NEW.`end_rua`, '|', NEW.`end_nro`, '|', NEW.`end_compl`,'|', NEW.`end_cep`, '|', NEW.`end_bairro`,'|', NEW.`fk_id_cidade`, '|', NEW.`ddd_fone`,'|', NEW.`fone`, '|', NEW.`ddd_celular`, '|', NEW.`celular`,'|', NEW.`email`, '|', NEW.`obs`)
        );
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trg_fornecedor_upd` AFTER UPDATE ON `tb_fornecedor` FOR EACH ROW BEGIN
INSERT INTO tb_auditoria (nm_tabela, dt_evento, evento, vl_anterior, vl_novo) 
VALUES ('tb_fornecedor', NOW(), 'UPDATE', CONCAT(OLD.`id_forn`,'|', OLD.`nm_forn`, '|', OLD.`cnpj`, '|', OLD.`dt_ini_ativ`, '|', OLD.`dt_cadastro`,'|', OLD.`end_rua`, '|', OLD.`end_nro`,'|', OLD.`end_compl`, '|', OLD.`end_cep`,'|', OLD.`end_bairro`, '|', OLD.`fk_id_cidade`, '|', OLD.`ddd_fone`,'|', OLD.`fone`, '|', OLD.`ddd_celular`,'|', OLD.`celular`, '|', OLD.`email`,'|', OLD.`obs`), CONCAT(NEW.`id_forn`,'|', NEW.`nm_forn`, '|', NEW.`cnpj`, '|', NEW.`dt_ini_ativ`, '|', NEW.`dt_cadastro`,'|', NEW.`end_rua`, '|', NEW.`end_nro`, '|', NEW.`end_compl`,'|', NEW.`end_cep`, '|', NEW.`end_bairro`,'|', NEW.`fk_id_cidade`, '|', NEW.`ddd_fone`,'|', NEW.`fone`, '|', NEW.`ddd_celular`, '|', NEW.`celular`,'|', NEW.`email`, '|', NEW.`obs`)
        );
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_grupo`
--

CREATE TABLE `tb_grupo` (
  `id_grupo` int(11) NOT NULL,
  `nm_grupo` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_grupo`
--

INSERT INTO `tb_grupo` (`id_grupo`, `nm_grupo`) VALUES
(1, 'Material Escolar'),
(2, 'Brinquedos'),
(3, 'Variedades');

--
-- Acionadores `tb_grupo`
--
DELIMITER $$
CREATE TRIGGER `trg_grupo_del` AFTER DELETE ON `tb_grupo` FOR EACH ROW BEGIN
INSERT INTO tb_auditoria (nm_tabela, dt_evento, evento, vl_anterior, vl_novo) 
VALUES ('tb_grupo', NOW(), 'DELETE', CONCAT(OLD.id_grupo,'|', OLD.nm_grupo), NULL 
        );
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trg_grupo_ins` AFTER INSERT ON `tb_grupo` FOR EACH ROW BEGIN
INSERT INTO tb_auditoria (nm_tabela, dt_evento, evento, vl_anterior, vl_novo) 
VALUES ('tb_grupo', NOW(), 'INSERT', NULL, CONCAT(NEW.id_grupo,'|', NEW.nm_grupo)
        );
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trg_grupo_upd` AFTER UPDATE ON `tb_grupo` FOR EACH ROW BEGIN
INSERT INTO tb_auditoria (nm_tabela, dt_evento, evento, vl_anterior, vl_novo) 
VALUES ('tb_grupo', NOW(), 'UPDATE', CONCAT(OLD.id_grupo,'|', OLD.nm_grupo), CONCAT(NEW.id_grupo,'|', NEW.nm_grupo)
        );
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_itens_compra`
--

CREATE TABLE `tb_itens_compra` (
  `id_itens_compra` int(11) NOT NULL,
  `fk_id_produto` int(11) DEFAULT NULL,
  `fk_id_compra` int(11) DEFAULT NULL,
  `qtidade` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_itens_compra`
--

INSERT INTO `tb_itens_compra` (`id_itens_compra`, `fk_id_produto`, `fk_id_compra`, `qtidade`) VALUES
(19, 3, 6, 2),
(20, 3, 6, 2),
(21, 2, 6, 2),
(22, 1, 4, 8),
(24, 2, 7, 4);

--
-- Acionadores `tb_itens_compra`
--
DELIMITER $$
CREATE TRIGGER `trg_estoque_comp_del` AFTER DELETE ON `tb_itens_compra` FOR EACH ROW BEGIN
    UPDATE tb_produto SET qtd_estoque = qtd_estoque - OLD.qtidade
	WHERE OLD.fk_id_produto = id_produto; 
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trg_estoque_comp_ins` AFTER INSERT ON `tb_itens_compra` FOR EACH ROW BEGIN
    UPDATE tb_produto SET qtd_estoque = qtd_estoque + NEW.qtidade
	WHERE NEW.fk_id_produto = id_produto; 
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trg_estoque_comp_upd` AFTER UPDATE ON `tb_itens_compra` FOR EACH ROW BEGIN
	IF OLD.qtidade<NEW.qtidade THEN
    UPDATE tb_produto SET qtd_estoque=qtd_estoque+(NEW.qtidade-OLD.qtidade)
    WHERE NEW.fk_id_produto=id_produto;
    END IF;
    
    IF OLD.qtidade>NEW.qtidade THEN
    UPDATE tb_produto SET qtd_estoque=qtd_estoque-(OLD.qtidade-NEW.qtidade)
    WHERE NEW.fk_id_produto=id_produto;
    END IF;
    END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trg_it_compra_del` AFTER DELETE ON `tb_itens_compra` FOR EACH ROW BEGIN
INSERT INTO tb_auditoria (nm_tabela, dt_evento, evento, vl_anterior, vl_novo) 
VALUES ('tb_itens_compra', NOW(), 'DELETE', CONCAT(OLD.`id_itens_compra`,'|', OLD.`fk_id_produto`, '|', OLD.`fk_id_compra`, '|', OLD.`qtidade`), NULL
        );
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trg_it_compra_ins` AFTER INSERT ON `tb_itens_compra` FOR EACH ROW BEGIN
INSERT INTO tb_auditoria (nm_tabela, dt_evento, evento, vl_anterior, vl_novo) 
VALUES ('tb_itens_compra', NOW(), 'INSERT', NULL, CONCAT(NEW.`id_itens_compra`,'|', NEW.`fk_id_produto`, '|', NEW.`fk_id_compra`,'|', NEW.`qtidade`)
        );
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trg_it_compra_upd` AFTER UPDATE ON `tb_itens_compra` FOR EACH ROW BEGIN
INSERT INTO tb_auditoria (nm_tabela, dt_evento, evento, vl_anterior, vl_novo) 
VALUES ('tb_itens_compra', NOW(), 'UPDATE', CONCAT(OLD.`id_itens_compra`,'|', OLD.`fk_id_produto`, '|', OLD.`fk_id_compra`, '|', OLD.`qtidade`), CONCAT(NEW.`id_itens_compra`,'|', NEW.`fk_id_produto`, '|', NEW.`fk_id_compra`,'|', NEW.`qtidade`)
        );
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_itens_venda`
--

CREATE TABLE `tb_itens_venda` (
  `id_itens_venda` int(11) NOT NULL,
  `fk_id_venda` int(11) DEFAULT NULL,
  `fk_id_produto` int(11) DEFAULT NULL,
  `qtidade` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_itens_venda`
--

INSERT INTO `tb_itens_venda` (`id_itens_venda`, `fk_id_venda`, `fk_id_produto`, `qtidade`) VALUES
(23, 11, 2, 5),
(24, 11, 2, 1),
(31, 14, 2, 2);

--
-- Acionadores `tb_itens_venda`
--
DELIMITER $$
CREATE TRIGGER `trg_estoque_vend_del` AFTER DELETE ON `tb_itens_venda` FOR EACH ROW BEGIN
    UPDATE tb_produto SET qtd_estoque = qtd_estoque + OLD.qtidade
	WHERE OLD.fk_id_produto = id_produto; 
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trg_estoque_vend_ins` AFTER INSERT ON `tb_itens_venda` FOR EACH ROW BEGIN
    UPDATE tb_produto SET qtd_estoque = qtd_estoque - NEW.qtidade
	WHERE NEW.fk_id_produto = id_produto; 
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trg_estoque_vend_upd` AFTER UPDATE ON `tb_itens_venda` FOR EACH ROW BEGIN
	IF OLD.qtidade<NEW.qtidade THEN
    UPDATE tb_produto SET qtd_estoque=qtd_estoque-(NEW.qtidade-OLD.qtidade)
    WHERE NEW.fk_id_produto=id_produto;
    END IF;
    
    IF OLD.qtidade>NEW.qtidade THEN
    UPDATE tb_produto SET qtd_estoque=qtd_estoque+(OLD.qtidade-NEW.qtidade)
    WHERE NEW.fk_id_produto=id_produto;
    END IF;
    END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trg_it_venda_del` AFTER DELETE ON `tb_itens_venda` FOR EACH ROW BEGIN
INSERT INTO tb_auditoria (nm_tabela, dt_evento, evento, vl_anterior, vl_novo) 
VALUES ('tb_itens_venda', NOW(), 'DELETE', CONCAT(OLD.`id_itens_venda`,'|', OLD.`fk_id_venda`, '|', OLD.`fk_id_produto`, '|', OLD.`qtidade`), NULL
        );
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trg_it_venda_ins` AFTER INSERT ON `tb_itens_venda` FOR EACH ROW BEGIN
INSERT INTO tb_auditoria (nm_tabela, dt_evento, evento, vl_anterior, vl_novo) 
VALUES ('tb_itens_venda', NOW(), 'INSERT', NULL, CONCAT(NEW.`id_itens_venda`,'|', NEW.`fk_id_venda`, '|', NEW.`fk_id_produto`,'|', NEW.`qtidade`)
        );
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trg_it_venda_upd` AFTER UPDATE ON `tb_itens_venda` FOR EACH ROW BEGIN
INSERT INTO tb_auditoria (nm_tabela, dt_evento, evento, vl_anterior, vl_novo) 
VALUES ('tb_itens_venda', NOW(), 'UPDATE', CONCAT(OLD.`id_itens_venda`,'|', OLD.`fk_id_venda`, '|', OLD.`fk_id_produto`, '|', OLD.`qtidade`), CONCAT(NEW.`id_itens_venda`,'|', NEW.`fk_id_venda`, '|', NEW.`fk_id_produto`,'|', NEW.`qtidade`)
        );
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_produto`
--

CREATE TABLE `tb_produto` (
  `id_produto` int(11) NOT NULL,
  `nm_produto` varchar(55) NOT NULL,
  `uni_produto` varchar(11) DEFAULT NULL,
  `precocompra` float(9,2) DEFAULT NULL,
  `precovenda` float(9,2) DEFAULT NULL,
  `qtd_estoque` int(10) DEFAULT NULL,
  `dt_cadastro` date DEFAULT NULL,
  `fk_id_grupo` int(11) DEFAULT NULL,
  `obs` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_produto`
--

INSERT INTO `tb_produto` (`id_produto`, `nm_produto`, `uni_produto`, `precocompra`, `precovenda`, `qtd_estoque`, `dt_cadastro`, `fk_id_grupo`, `obs`) VALUES
(1, 'Carrinho', '', 5.00, 12.00, 38, '2022-10-20', 2, 'hot wheels '),
(2, 'avião', '', 110.00, 200.00, 48, '2022-11-18', 2, 'controle remoto '),
(3, 'Caderno', '', 6.00, 10.00, 14, '2022-11-18', 1, ' Tilivra');

--
-- Acionadores `tb_produto`
--
DELIMITER $$
CREATE TRIGGER `trg_produto_del` AFTER DELETE ON `tb_produto` FOR EACH ROW BEGIN
INSERT INTO tb_auditoria (nm_tabela, dt_evento, evento, vl_anterior, vl_novo) 
VALUES ('tb_produto', NOW(), 'DELETE', CONCAT(OLD.id_produto,'|', OLD.nm_produto, '|', OLD.`uni_produto`, '|', OLD.precocompra, '|', OLD.precovenda, '|', OLD.`qtd_estoque`, '|', OLD.`dt_cadastro`, '|', OLD.`fk_id_grupo`, '|', OLD.`obs`), NULL
        );
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trg_produto_ins` AFTER INSERT ON `tb_produto` FOR EACH ROW BEGIN
INSERT INTO tb_auditoria (nm_tabela, dt_evento, evento, vl_anterior, vl_novo) 
VALUES ('tb_produto', NOW(), 'INSERT', NULL, CONCAT(NEW.id_produto,'|', NEW.nm_produto, '|', NEW.`uni_produto`, '|', NEW.precocompra, '|', NEW.precovenda, '|', NEW.`qtd_estoque`, '|', NEW.`dt_cadastro`, '|', NEW.fk_id_grupo, '|', NEW.`obs`)
        );
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trg_produto_upd` AFTER UPDATE ON `tb_produto` FOR EACH ROW BEGIN
INSERT INTO tb_auditoria (nm_tabela, dt_evento, evento, vl_anterior, vl_novo) 
VALUES ('tb_produto', NOW(), 'UPDATE', CONCAT(OLD.id_produto,'|', OLD.nm_produto, '|', OLD.`uni_produto`, '|', OLD.precocompra, '|', OLD.precovenda, '|', OLD.`qtd_estoque`, '|', OLD.`dt_cadastro`, '|', OLD.`fk_id_grupo`, '|', OLD.`obs`), CONCAT(NEW.id_produto,'|', NEW.nm_produto, '|', NEW.`uni_produto`, '|', NEW.precocompra, '|', NEW.precovenda, '|', NEW.`qtd_estoque`, '|', NEW.`dt_cadastro`, '|', NEW.fk_id_grupo, '|', NEW.`obs`)
        );
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `id_usuario` int(11) NOT NULL,
  `login` varchar(255) DEFAULT NULL,
  `senha` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`id_usuario`, `login`, `senha`) VALUES
(1, 'a1@g', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'a2@g', '202cb962ac59075b964b07152d234b70'),
(3, 'a3@g', '827ccb0eea8a706c4c34a16891f84e7b'),
(4, 'a4@g', 'e10adc3949ba59abbe56e057f20f883e'),
(5, 'a5@g', '827ccb0eea8a706c4c34a16891f84e7b'),
(6, 'a6@g', 'e10adc3949ba59abbe56e057f20f883e'),
(7, 'farias@g', 'ff1b5fb9258e207a772fd9df29d414ca'),
(8, 'a9', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_venda`
--

CREATE TABLE `tb_venda` (
  `id_venda` int(11) NOT NULL,
  `dt_venda` date DEFAULT NULL,
  `fk_id_cliente` int(11) DEFAULT NULL,
  `fk_id_vendedor` int(11) DEFAULT NULL,
  `vl_total` double(12,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_venda`
--

INSERT INTO `tb_venda` (`id_venda`, `dt_venda`, `fk_id_cliente`, `fk_id_vendedor`, `vl_total`) VALUES
(11, '2022-11-18', 1, 1, 1200.00),
(14, '2022-11-24', 2, 1, 400.00);

--
-- Acionadores `tb_venda`
--
DELIMITER $$
CREATE TRIGGER `trg_venda_del` AFTER DELETE ON `tb_venda` FOR EACH ROW BEGIN
INSERT INTO tb_auditoria (nm_tabela, dt_evento, evento, vl_anterior, vl_novo) 
VALUES ('tb_venda', NOW(), 'DELETE', CONCAT(OLD.id_venda,'|', OLD.`dt_venda`,'|', OLD.fk_id_cliente, '|', OLD.fk_id_vendedor, '|', OLD.`vl_total`), NULL
        );
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trg_venda_del_itens` AFTER DELETE ON `tb_venda` FOR EACH ROW BEGIN
DELETE FROM tb_itens_venda 
WHERE OLD.id_venda = tb_itens_venda.fk_id_venda;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trg_venda_ins` AFTER INSERT ON `tb_venda` FOR EACH ROW BEGIN
INSERT INTO tb_auditoria (nm_tabela, dt_evento, evento, vl_anterior, vl_novo) 
VALUES ('tb_venda', NOW(), 'INSERT', NULL, CONCAT(NEW.id_venda, '|', NEW.`dt_venda`,'|', NEW.fk_id_cliente, '|', NEW.fk_id_vendedor, '|', NEW.`vl_total`)
        );
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trg_venda_upd` AFTER UPDATE ON `tb_venda` FOR EACH ROW BEGIN
INSERT INTO tb_auditoria (nm_tabela, dt_evento, evento, vl_anterior, vl_novo) 
VALUES ('tb_venda', NOW(), 'UPDATE', CONCAT(OLD.id_venda,'|', OLD.`dt_venda`,'|', OLD.fk_id_cliente, '|', OLD.fk_id_vendedor, '|', OLD.`vl_total`), CONCAT(NEW.id_venda, '|', NEW.`dt_venda`,'|', NEW.fk_id_cliente, '|', NEW.fk_id_vendedor, '|', NEW.`vl_total`)
        );
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_vendedor`
--

CREATE TABLE `tb_vendedor` (
  `id_vendedor` int(11) NOT NULL,
  `nm_vendedor` varchar(55) NOT NULL,
  `perc_comissao` double(9,2) DEFAULT NULL,
  `ddd_fone` varchar(2) DEFAULT NULL,
  `fone` varchar(8) DEFAULT NULL,
  `ddd_celular` varchar(2) DEFAULT NULL,
  `celular` varchar(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_vendedor`
--

INSERT INTO `tb_vendedor` (`id_vendedor`, `nm_vendedor`, `perc_comissao`, `ddd_fone`, `fone`, `ddd_celular`, `celular`) VALUES
(1, 'Carlos', 2.99, '48', '97878787', '48', '966663333');

--
-- Acionadores `tb_vendedor`
--
DELIMITER $$
CREATE TRIGGER `trg_vendedor_del` AFTER DELETE ON `tb_vendedor` FOR EACH ROW BEGIN
INSERT INTO tb_auditoria (nm_tabela, dt_evento, evento, vl_anterior, vl_novo) 
VALUES ('tb_vendedor', NOW(), 'DELETE', CONCAT(OLD.`id_vendedor`,'|', OLD.`nm_vendedor`, '|', OLD.`perc_comissao`, '|', OLD.`ddd_fone`,'|', OLD.`fone`, '|', OLD.`ddd_celular`,'|', OLD.`celular`), NULL
        );
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trg_vendedor_ins` AFTER INSERT ON `tb_vendedor` FOR EACH ROW BEGIN
INSERT INTO tb_auditoria (nm_tabela, dt_evento, evento, vl_anterior, vl_novo) 
VALUES ('tb_vendedor', NOW(), 'INSERT', NULL, CONCAT(NEW.`id_vendedor`,'|', NEW.`nm_vendedor`, '|', NEW.`perc_comissao`, '|', NEW.`ddd_fone`,'|', NEW.`fone`, '|', NEW.`ddd_celular`, '|', NEW.`celular`)
        );
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trg_vendedor_upd` AFTER UPDATE ON `tb_vendedor` FOR EACH ROW BEGIN
INSERT INTO tb_auditoria (nm_tabela, dt_evento, evento, vl_anterior, vl_novo) 
VALUES ('tb_vendedor', NOW(), 'UPDATE', CONCAT(OLD.`id_vendedor`,'|', OLD.`nm_vendedor`, '|', OLD.`perc_comissao`, '|', OLD.`ddd_fone`,'|', OLD.`fone`, '|', OLD.`ddd_celular`,'|', OLD.`celular`), CONCAT(NEW.`id_vendedor`,'|', NEW.`nm_vendedor`, '|', NEW.`perc_comissao`, '|', NEW.`ddd_fone`,'|', NEW.`fone`, '|', NEW.`ddd_celular`, '|', NEW.`celular`)
        );
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura stand-in para vista `v_lista_cidades`
-- (Veja abaixo para a view atual)
--
CREATE TABLE `v_lista_cidades` (
`nm_cidade` varchar(55)
,`nm_estado` varchar(55)
,`sigla` varchar(2)
);

-- --------------------------------------------------------

--
-- Estrutura para vista `v_lista_cidades`
--
DROP TABLE IF EXISTS `v_lista_cidades`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_lista_cidades`  AS  select `cid`.`nm_cidade` AS `nm_cidade`,`est`.`nm_estado` AS `nm_estado`,`est`.`sigla` AS `sigla` from (`tb_cidade` `cid` join `tb_estado` `est` on(`est`.`id_estado` = `cid`.`fk_id_estado`)) ;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_auditoria`
--
ALTER TABLE `tb_auditoria`
  ADD PRIMARY KEY (`id_auditoria`);

--
-- Índices para tabela `tb_cidade`
--
ALTER TABLE `tb_cidade`
  ADD PRIMARY KEY (`id_cidade`),
  ADD KEY `fk_estado_id` (`fk_id_estado`);

--
-- Índices para tabela `tb_cliente`
--
ALTER TABLE `tb_cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Índices para tabela `tb_compra`
--
ALTER TABLE `tb_compra`
  ADD PRIMARY KEY (`id_compra`);

--
-- Índices para tabela `tb_comprador`
--
ALTER TABLE `tb_comprador`
  ADD PRIMARY KEY (`id_comprador`);

--
-- Índices para tabela `tb_estado`
--
ALTER TABLE `tb_estado`
  ADD PRIMARY KEY (`id_estado`);

--
-- Índices para tabela `tb_fornecedor`
--
ALTER TABLE `tb_fornecedor`
  ADD PRIMARY KEY (`id_forn`);

--
-- Índices para tabela `tb_grupo`
--
ALTER TABLE `tb_grupo`
  ADD PRIMARY KEY (`id_grupo`);

--
-- Índices para tabela `tb_itens_compra`
--
ALTER TABLE `tb_itens_compra`
  ADD PRIMARY KEY (`id_itens_compra`);

--
-- Índices para tabela `tb_itens_venda`
--
ALTER TABLE `tb_itens_venda`
  ADD PRIMARY KEY (`id_itens_venda`),
  ADD KEY `fk_id_venda` (`fk_id_venda`);

--
-- Índices para tabela `tb_produto`
--
ALTER TABLE `tb_produto`
  ADD PRIMARY KEY (`id_produto`);

--
-- Índices para tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Índices para tabela `tb_venda`
--
ALTER TABLE `tb_venda`
  ADD PRIMARY KEY (`id_venda`);

--
-- Índices para tabela `tb_vendedor`
--
ALTER TABLE `tb_vendedor`
  ADD PRIMARY KEY (`id_vendedor`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_auditoria`
--
ALTER TABLE `tb_auditoria`
  MODIFY `id_auditoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=563;

--
-- AUTO_INCREMENT de tabela `tb_cidade`
--
ALTER TABLE `tb_cidade`
  MODIFY `id_cidade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tb_cliente`
--
ALTER TABLE `tb_cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tb_compra`
--
ALTER TABLE `tb_compra`
  MODIFY `id_compra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `tb_comprador`
--
ALTER TABLE `tb_comprador`
  MODIFY `id_comprador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tb_estado`
--
ALTER TABLE `tb_estado`
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tb_fornecedor`
--
ALTER TABLE `tb_fornecedor`
  MODIFY `id_forn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tb_grupo`
--
ALTER TABLE `tb_grupo`
  MODIFY `id_grupo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tb_itens_compra`
--
ALTER TABLE `tb_itens_compra`
  MODIFY `id_itens_compra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de tabela `tb_itens_venda`
--
ALTER TABLE `tb_itens_venda`
  MODIFY `id_itens_venda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de tabela `tb_produto`
--
ALTER TABLE `tb_produto`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `tb_venda`
--
ALTER TABLE `tb_venda`
  MODIFY `id_venda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `tb_vendedor`
--
ALTER TABLE `tb_vendedor`
  MODIFY `id_vendedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tb_cidade`
--
ALTER TABLE `tb_cidade`
  ADD CONSTRAINT `fk_estado_id` FOREIGN KEY (`fk_id_estado`) REFERENCES `tb_estado` (`id_estado`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
