-- --------------------------------------------------------
-- Host:                         us-cdbr-east-02.cleardb.com
-- Versión del servidor:         5.5.62-log - MySQL Community Server (GPL)
-- SO del servidor:              Linux
-- HeidiSQL Versión:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para heroku_28244880fc56a4f
CREATE DATABASE IF NOT EXISTS `heroku_28244880fc56a4f` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `heroku_28244880fc56a4f`;

-- Volcando estructura para tabla heroku_28244880fc56a4f.mc40200
CREATE TABLE IF NOT EXISTS `mc40200` (
  `CURNCYID` char(15) NOT NULL,
  `CURRNIDX` smallint(6) NOT NULL,
  `NOTEINDX` decimal(19,5) NOT NULL,
  `CRNCYDSC` char(31) NOT NULL,
  `CRNCYSYM` char(3) NOT NULL,
  `CNYSYMAR_1` smallint(6) NOT NULL,
  `CNYSYMAR_2` smallint(6) NOT NULL,
  `CNYSYMAR_3` smallint(6) NOT NULL,
  `CYSYMPLC` smallint(6) NOT NULL,
  `INCLSPAC` tinyint(4) NOT NULL,
  `NEGSYMBL` smallint(6) NOT NULL,
  `NGSMAMPC` smallint(6) NOT NULL,
  `NEGSMPLC` smallint(6) NOT NULL,
  `DECSYMBL` smallint(6) NOT NULL,
  `DECPLCUR` smallint(6) NOT NULL,
  `THOUSSYM` smallint(6) NOT NULL,
  `CURTEXT_1` char(25) NOT NULL,
  `CURTEXT_2` char(25) NOT NULL,
  `CURTEXT_3` char(25) NOT NULL,
  `ISOCURRC` char(3) NOT NULL,
  `CURLNGID` smallint(6) NOT NULL,
  `DEX_ROW_TS` datetime NOT NULL,
  `DEX_ROW_ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`DEX_ROW_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla heroku_28244880fc56a4f.mc40200: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `mc40200` DISABLE KEYS */;
/*!40000 ALTER TABLE `mc40200` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
