CREATE TABLE `shdw_users`(
	`id` BIGINT NOT NULL AUTO_INCREMENT,
	`role` ENUM('member', 'admin', 'writer', 'designer', 'developer', 'affiliate' ),
	`firstName` VARCHAR(40) NOT NULL,
	`lastName` VARCHAR(80) NOT NULL,
	`username` VARCHAR(30) NOT NULL,
	`email` VARCHAR(80) NOT NULL,
	`altEmail` VARCHAR(80),
	`pass` VARBINARY(32) NOT NULL,
	`releaseLevel` ENUM('alpha', 'beta'),
	`dateExpires` DATE,
	`dateCreated` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`dateModified` TIMESTAMP NOT NULL DEFAULT '0000-00-00 00:00:00',
	PRIMARY KEY(`id`),
	UNIQUE KEY `username` (`username`),
	UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
	