CREATE DATABASE IF NOT EXISTS shadow;
USE `shadow`;

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
	`user_id`            BIGINT(20) NOT NULL AUTO_INCREMENT,
	`username`           VARCHAR(60) NOT NULL UNIQUE,
	`email`              VARCHAR(100) NOT NULL UNIQUE,
	`pass`               VARCHAR(64) NOT NULL,
	`reg_date`           DATETIME,
	`first_name`         VARCHAR(20) NOT NULL,
	`last_name`          VARCHAR(40) NOT NULL,
	`middle_name`        VARCHAR(20) NULL,
	`name_title`         VARCHAR(20) NULL,
	`suffix`             VARCHAR(10) NULL,
	`maiden_name`        VARCHAR(40) NULL,
	`display_name`       VARCHAR(100),
	`user_status`        INT(11) DEFAULT 0,
	`dob`                DATE NULL,
	`personality_type`   VARCHAR(4) NULL,
	`picture`            VARCHAR(255) NOT NULL DEFAULT 'sw_includes/media/profile_holder.jpg',
	`active`             BOOLEAN NOT NULL DEFAULT 1,
	`online`             TINYINT(3) NOT NULL DEFAULT 1,
	PRIMARY KEY ( `user_id` ));
	

DROP TABLE IF EXISTS `sw_options`;
CREATE TABLE `sw_options` (
	`option_id`           INT NOT NULL AUTO_INCREMENT,
	`siteurl`             VARCHAR(800) NOT NULL,
	`site_name`           VARCHAR(100) NOT NULL,
	`tagline`             MEDIUMTEXT NULL,
	`site_description`    MEDIUMTEXT NULL,
	`users_can_register`  TINYINT(1) DEFAULT 1,
	`admin_email`         VARCHAR(100) NOT NULL,
	`start_of_week`       TINYINT(1) NOT NULL DEFAULT 1,
	`default_category`    VARCHAR(100),
	`default_comment_status` TINYINT(1) DEFAULT 1,
	`posts_per_page`      INT(3) DEFAULT 10,
	`date_format`         VARCHAR(50) DEFAULT "F j. Y",
	`time_format`         VARCHAR(50) DEFAULT "g i a",
	`permalink_structure`  VARCHAR(100),
	PRIMARY KEY ( `option_id` ));
	


