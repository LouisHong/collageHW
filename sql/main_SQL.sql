-- Adminer 4.2.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP DATABASE IF EXISTS `main_SQL`;
CREATE DATABASE `main_SQL` /*!40100 DEFAULT CHARACTER SET big5 */;
USE `main_SQL`;

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

DROP TABLE IF EXISTS `member`;
CREATE TABLE `member` (
  `stdID` varchar(9) NOT NULL,
  `name` varchar(20) NOT NULL,
  `sex` char(2) NOT NULL,
  `birthday` date NOT NULL,
  `passwd` varchar(20) NOT NULL,
  `depart` varchar(20) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `reg_time` datetime NOT NULL,
  `log_time` datetime NOT NULL,
  PRIMARY KEY (`stdID`)
) ENGINE=InnoDB DEFAULT CHARSET=big5;

INSERT INTO `member` (`stdID`, `name`, `sex`, `birthday`, `passwd`, `depart`, `mail`, `phone`, `address`, `reg_time`, `log_time`) VALUES
('***',	'***',	'***',	'****-**-**',	'***',	'***',	'*********',	'(**)****-****',	'************',	'****-**-** **:**:**',	'****-**-** **:**:**');

DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `serial` mediumint(5) unsigned NOT NULL AUTO_INCREMENT,
  `sort` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` mediumint(5) unsigned NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB DEFAULT CHARSET=big5;

INSERT INTO `product` (`serial`, `sort`, `name`, `price`) VALUES
(1,	'原味茶品',	'麥香紅茶',	15),
(2,	'原味茶品',	'茉香綠茶',	15),
(3,	'原味茶品',	'高山清茶',	15),
(4,	'原味茶品',	'百香綠茶',	25),
(5,	'原味茶品',	'麥茶',	15),
(6,	'原味茶品',	'珍珠紅茶',	25),
(7,	'原味茶品',	'珍珠綠茶',	25),
(8,	'原味茶品',	'蜂蜜紅茶',	25),
(9,	'原味茶品',	'蜂蜜綠茶',	25),
(10,	'原味茶品',	'百香紅茶',	25),
(11,	'奶茶特調',	'桂圓奶茶',	30),
(12,	'奶茶特調',	'茉香奶茶',	20),
(13,	'奶茶特調',	'仙草奶茶',	20),
(14,	'奶茶特調',	'麥香奶茶',	20),
(15,	'奶茶特調',	'芋香奶茶',	25),
(16,	'奶茶特調',	'黑糖奶茶',	25),
(17,	'奶茶特調',	'蜂蜜奶茶',	25),
(18,	'奶茶特調',	'布丁奶茶',	25),
(19,	'奶茶特調',	'薄荷奶茶',	25),
(20,	'奶茶特調',	'巧克力奶茶',	30),
(21,	'冰沙系列',	'綠豆冰沙',	20),
(22,	'冰沙系列',	'紅豆冰沙',	20),
(23,	'冰沙系列',	'蜂蜜冰沙',	20),
(24,	'冰沙系列',	'芒果冰沙',	20),
(25,	'冰沙系列',	'草莓冰沙',	20),
(26,	'冰沙系列',	'多多冰沙',	20),
(27,	'冰沙系列',	'綠豆沙牛奶',	25),
(28,	'冰沙系列',	'巧克力冰沙',	25),
(29,	'冰沙系列',	'薄荷巧克力冰沙',	30),
(30,	'冰沙系列',	'金桔檸檬冰沙',	25),
(31,	'鮮奶特調',	'鮮奶茶',	30),
(32,	'鮮奶特調',	'鮮綠鮮奶',	35),
(33,	'鮮奶特調',	'麥香鮮奶',	35),
(34,	'鮮奶特調',	'黑糖鮮奶',	35),
(35,	'鮮奶特調',	'芋香鮮奶',	35),
(36,	'鮮奶特調',	'珍珠鮮奶',	35),
(37,	'鮮奶特調',	'仙草鮮奶',	35),
(38,	'鮮奶特調',	'巧克力鮮奶',	35),
(39,	'鮮奶特調',	'布丁鮮奶',	40),
(40,	'鮮奶特調',	'紅豆布丁鮮奶',	50);

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

-- 2016-12-28 15:08:20
