CREATE TABLE `shdw_carts`(
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	`quantity` TINYINT UNSIGNED NOT NULL,
	`user_session_id` CHAR(32) NOT NULL,
	`product_type` ENUM('coffee', 'other') NOT NULL,
	`dateCreated` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`dateModified` TIMESTAMP NOT NULL DEFAULT '0000-00-00 00:00:00',
	PRIMARY KEY(`id`),
	KEY `product_type` (`product_type`, `product_id`),
	KEY `user_session_id` (`user_session_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;