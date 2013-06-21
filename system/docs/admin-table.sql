CREATE TABLE `admin`(
	`id` BIGINT NOT NULL AUTO_INCREMENT,
	`admin_email` VARCHAR(80) NOT NULL,
	`admin_phone` SMALLINT(15),
	`admin_phone_ext` SMALLINT(10),
	`site_name` VARCHAR(100) NOT NULL,
	`site_tagline` VARCHAR(100) NOT NULL,
	`site_summary` TEXT,
	`current_app` VARCHAR(150) NOT NULL DEFAULT 'ninjablack1',
	PRIMARY KEY(`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
	