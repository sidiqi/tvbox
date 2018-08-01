-- Adminer 4.6.2 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `console`;
CREATE TABLE `console` (
  `ConsoleID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `model` varchar(30) NOT NULL,
  `placement` int(11) NOT NULL,
  `status` varchar(60) NOT NULL DEFAULT 'Не работает',
  `video` varchar(100) NOT NULL DEFAULT 'https://youtu.be/dQw4w9WgXcQ',
  `time` tinytext NOT NULL,
  `date` tinytext NOT NULL,
  PRIMARY KEY (`ConsoleID`),
  KEY `placement` (`placement`),
  KEY `video` (`video`),
  CONSTRAINT `console_ibfk_2` FOREIGN KEY (`placement`) REFERENCES `placement` (`PlacementID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `console` (`ConsoleID`, `name`, `model`, `placement`, `status`, `video`, `time`, `date`) VALUES
(30,	'SONY',	'B130',	1,	'<font color=\"green\">Работает</font>',	'https://youtu.be/dQw4w9WgXcQ',	' 16:45 ',	' 08-01-2018 '),
(31,	'XIAOMI',	'MI TV BOX 3',	2,	'<font color=\"green\">Работает</font>',	'https://youtu.be/dQw4w9WgXcQ',	' 16:47 ',	' 08-01-2018 '),
(32,	'Rombica',	'Cinema 4k v02',	3,	'<font color=\"green\">Работает</font>',	'https://youtu.be/dQw4w9WgXcQ',	' 16:48 ',	' 08-01-2018 '),
(33,	'iconBIT',	'PC-0035W',	4,	'<font color=\"green\">Работает</font>',	'https://youtu.be/dQw4w9WgXcQ',	' 16:48 ',	' 08-01-2018 '),
(37,	'SONY',	'PS4',	5,	'<font color=\"green\">Работает</font>',	'https://youtu.be/dQw4w9WgXcQ',	' 01:28 ',	' 08-02-2018 ');

DROP TABLE IF EXISTS `placement`;
CREATE TABLE `placement` (
  `PlacementID` int(11) NOT NULL AUTO_INCREMENT,
  `placement_name` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  PRIMARY KEY (`PlacementID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `placement` (`PlacementID`, `placement_name`, `type`) VALUES
(1,	'Омега',	'Торговый центр'),
(2,	'Торговый квартал',	'Кинотеатр'),
(3,	'Сити Молл',	'Торговый центр'),
(4,	'Sunrise',	'Кинотеатр'),
(5,	'Палитра',	'Кафе');

DROP TABLE IF EXISTS `video`;
CREATE TABLE `video` (
  `VideoID` int(11) NOT NULL AUTO_INCREMENT,
  `VideoLink` varchar(100) NOT NULL DEFAULT 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
  PRIMARY KEY (`VideoID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `video` (`VideoID`, `VideoLink`) VALUES
(31,	''),
(32,	'https://youtu.be/dQw4w9WgXcQ'),
(33,	'https://youtu.be/dQw4w9WgXcQ'),
(34,	'https://youtu.be/dQw4w9WgXcQ'),
(35,	'https://youtu.be/dQw4w9WgXcQ'),
(36,	'https://youtu.be/dQw4w9WgXcQ'),
(37,	'https://youtu.be/dQw4w9WgXcQ'),
(38,	'https://youtu.be/dQw4w9WgXcQ'),
(39,	'https://youtu.be/dQw4w9WgXcQ'),
(40,	'https://youtu.be/dQw4w9WgXcQ'),
(41,	'https://youtu.be/dQw4w9WgXcQ');

-- 2018-08-01 22:44:39
