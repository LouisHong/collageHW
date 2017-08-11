-- Adminer 4.2.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `buy_list`;
CREATE TABLE `buy_list` (
  `itemID` mediumint(8) unsigned NOT NULL,
  `amount` mediumint(8) unsigned NOT NULL,
  `tot` mediumint(8) unsigned NOT NULL,
  `stdID` varchar(20) NOT NULL,
  `buyDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=big5;

INSERT INTO `buy_list` (`itemID`, `amount`, `tot`, `stdID`, `buyDate`) VALUES
(4,	4,	565,	'root',	'2016-12-28 17:48:54'),
(21,	4,	565,	'root',	'2016-12-28 17:48:54'),
(34,	3,	565,	'root',	'2016-12-28 17:48:54'),
(38,	8,	565,	'root',	'2016-12-28 17:48:54'),
(0,	2,	50,	'root',	'2016-12-28 21:42:34'),
(13,	1,	50,	'root',	'2016-12-28 21:42:34'),
(9,	3,	440,	'root',	'2016-12-28 23:01:27'),
(19,	3,	440,	'root',	'2016-12-28 23:01:27'),
(23,	5,	440,	'root',	'2016-12-28 23:01:27'),
(36,	5,	440,	'root',	'2016-12-28 23:01:27');

-- 2016-12-28 15:08:52
