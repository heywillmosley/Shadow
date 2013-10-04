CREATE TABLE `shdw_errorlog` (
  `id` int AUTO_INCREMENT NOT NULL,
  `severity` int(1) NOT NULL,
  `message` text NOT NULL,
  `filename` text NOT NULL,
  `lineno` smallint NOT NULL,
  `time` DATETIME NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;