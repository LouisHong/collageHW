-- Adminer 4.2.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `sub_list`;
CREATE TABLE `sub_list` (
  `stdID` varchar(20) NOT NULL,
  `date` datetime NOT NULL,
  `total` mediumint(10) unsigned NOT NULL,
  `buyName` varchar(50) NOT NULL,
  `buyPhone` varchar(20) NOT NULL,
  `buyEmail` varchar(100) NOT NULL,
  `buyAddress` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=big5;

INSERT INTO `sub_list` (`stdID`, `date`, `total`, `buyName`, `buyPhone`, `buyEmail`, `buyAddress`) VALUES
('***',	'****-**-** **:**:**',	0,	'***',	'(**)****-****',	'************',	'************');

-- 2016-12-28 15:09:22
