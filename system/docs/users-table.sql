CREATE TABLE `users`(
	`id` BIGINT NOT NULL AUTO_INCREMENT,
	`role` ENUM('member', 'admin', 'writer', 'designer', 'developer', 'affiliate' ),
	`first_name` VARCHAR(40) NOT NULL,
	`last_name` VARCHAR(80) NOT NULL,
	`username` VARCHAR(30) NOT NULL,
	`email` VARCHAR(80) NOT NULL,
	`alt_email` VARCHAR(80),
	`pass` VARBINARY(32) NOT NULL,
	`release_level` ENUM('alpha', 'beta'),
	`date_expires` DATE,
	`date_created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`date_modified` TIMESTAMP NOT NULL DEFAULT '0000-00-00 00:00:00',
	PRIMARY KEY(`id`),
	UNIQUE KEY `username` (`username`),
	UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
	