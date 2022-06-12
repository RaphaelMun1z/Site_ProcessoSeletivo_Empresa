-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 12-Jun-2022 às 02:58
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_rgb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_cards`
--

DROP TABLE IF EXISTS `tbl_cards`;
CREATE TABLE IF NOT EXISTS `tbl_cards` (
  `cdg_id` int(11) NOT NULL AUTO_INCREMENT,
  `txt_titulo` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `txt_descricao` varchar(100) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`cdg_id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `tbl_cards`
--

INSERT INTO `tbl_cards` (`cdg_id`, `txt_titulo`, `txt_descricao`) VALUES
(1, 'Nome do Álbum Lorem Ipsum Dolor Amed', 'Descrição...'),
(2, 'Nome do Álbum Lorem Ipsum Dolor Amed', 'Descrição...'),
(3, 'Nome do Álbum Lorem Ipsum Dolor Amed', 'Descrição...'),
(4, 'Nome do Álbum Lorem Ipsum Dolor Amed 	', 'Descrição...'),
(5, 'Nome do Álbum Lorem Ipsum Dolor Amed', 'Descrição...'),
(6, 'Nome do Álbum Lorem Ipsum Dolor Amed', 'Descrição...'),
(7, 'Nome do Álbum Lorem Ipsum Dolor Amed', 'Descrição...'),
(8, 'Nome do Álbum Lorem Ipsum Dolor Amed', 'Descrição...'),
(9, 'Nome do Álbum Lorem Ipsum Dolor Amed', 'Descrição...'),
(10, 'Nome do Álbum Lorem Ipsum Dolor Amed', 'Descrição...'),
(11, 'Nome do Álbum Lorem Ipsum Dolor Amed', 'Descrição...'),
(12, 'Nome do Álbum Lorem Ipsum Dolor Amed', 'Descrição...'),
(13, 'Nome do Álbum Lorem Ipsum Dolor Amed', 'Descrição...'),
(14, 'Nome do Álbum Lorem Ipsum Dolor Amed', 'Descrição...'),
(15, 'Nome do Álbum Lorem Ipsum Dolor Amed', 'Descrição...'),
(16, 'Nome do Álbum Lorem Ipsum Dolor Amed', 'Descrição...'),
(17, 'Nome do Álbum Lorem Ipsum Dolor Amed', 'Descrição...'),
(18, 'Nome do Álbum Lorem Ipsum Dolor Amed', 'Descrição...'),
(19, 'Nome do Álbum Lorem Ipsum Dolor Amed', 'Descrição...'),
(20, 'Nome do Álbum Lorem Ipsum Dolor Amed', 'Descrição...');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
