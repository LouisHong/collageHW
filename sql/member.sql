-- Adminer 4.2.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

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
('***', '***',  '***',  '****-**-**', '***',  '***',  '*********',  '(**)****-****',  '************', '****-**-** **:**:**',  '****-**-** **:**:**');

-- 2016-12-28 15:09:06
