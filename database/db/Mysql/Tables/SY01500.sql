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

-- Volcando estructura para tabla heroku_28244880fc56a4f.sy01500
CREATE TABLE IF NOT EXISTS `sy01500` (
  `LSTUSRED` char(15) NOT NULL,
  `CREATDDT` datetime NOT NULL,
  `MODIFDT` datetime NOT NULL,
  `CMPANYID` smallint(6) NOT NULL,
  `CMPNYNAM` char(65) NOT NULL,
  `TAXEXMT1` char(25) NOT NULL,
  `TAXEXMT2` char(25) NOT NULL,
  `TAXREGTN` char(25) NOT NULL,
  `COPTXSCH` char(15) NOT NULL,
  `COSTXSCH` char(15) NOT NULL,
  `LOCATNNM` char(31) NOT NULL,
  `ADRCNTCT` char(61) NOT NULL,
  `ADDRESS1` char(61) NOT NULL,
  `ADDRESS2` char(61) NOT NULL,
  `ADDRESS3` char(61) NOT NULL,
  `CITY` char(35) NOT NULL,
  `COUNTY` char(61) NOT NULL,
  `STATE` char(29) NOT NULL,
  `ZIPCODE` char(11) NOT NULL,
  `PHONE1` char(21) NOT NULL,
  `PHONE2` char(21) NOT NULL,
  `PHONE3` char(21) NOT NULL,
  `FAXNUMBR` char(21) NOT NULL,
  `USESCRTY` tinyint(3) unsigned NOT NULL,
  `UDCOSTR1` char(31) NOT NULL,
  `UDCOSTR2` char(31) NOT NULL,
  `CMPCNTRY` char(61) NOT NULL,
  `NOTEINDX` decimal(19,5) NOT NULL,
  `PPSFRNUM` char(25) NOT NULL,
  `PPSTAXRT` smallint(6) NOT NULL,
  `PPSVNDID` char(15) NOT NULL,
  `VATMODE` tinyint(3) unsigned NOT NULL,
  `LOCATNID` char(15) NOT NULL,
  `INTERID` char(5) NOT NULL,
  `ACSEGSEP` char(1) NOT NULL,
  `SECOPTS` binary(4) NOT NULL,
  `DisplayRegisteredPalette` tinyint(3) unsigned NOT NULL,
  `Company_Options` binary(4) NOT NULL,
  `Vets100CompanyNumber` char(21) NOT NULL,
  `TYPEOFBUSINESS` char(31) NOT NULL,
  `DUNS_Number` char(21) NOT NULL,
  `SICNUMBER` char(15) NOT NULL,
  `GOVCRPID` char(31) NOT NULL,
  `BRNCHNMBR` char(21) NOT NULL,
  `DFLTTXDTLID` char(15) NOT NULL,
  `PurchasesTaxDetailID` char(15) NOT NULL,
  `CCode` char(7) NOT NULL,
  `IVTRFDOCFMT` smallint(6) NOT NULL,
  `Offline_User` char(15) NOT NULL,
  `WORKFLOWENABLED` tinyint(3) unsigned NOT NULL,
  `CrmCredentialsMethod` smallint(6) NOT NULL,
  `CrmOrganizationName` char(255) NOT NULL,
  `CrmServiceUrl` char(255) NOT NULL,
  `EnableGLReporting` tinyint(3) unsigned NOT NULL,
  `EnableAAReporting` tinyint(3) unsigned NOT NULL,
  `UseDateEffectiveTax` tinyint(3) unsigned NOT NULL,
  `DateToUse` smallint(6) NOT NULL,
  `DEX_ROW_ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`DEX_ROW_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla heroku_28244880fc56a4f.sy01500: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `sy01500` DISABLE KEYS */;
/*!40000 ALTER TABLE `sy01500` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
