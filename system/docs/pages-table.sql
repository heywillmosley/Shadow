CREATE TABLE `shdw_pages`(
	`id` BIGINT NOT NULL AUTO_INCREMENT,
	`creator_id` INT NOT NULL,
	`title` VARCHAR(100) NOT NULL DEFAULT 'Untitled',
	`content` TEXT NOT NULL,
	`date_updated` TIMESTAMP NOT NULL,
	`date_added` TIMESTAMP NOT NULL,
	PRIMARY KEY(`id`),
	INDEX( creator_id ),
	INDEX( date_updated )
);