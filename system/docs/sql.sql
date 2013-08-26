-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2013 at 03:02 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `shadow`
--

-- --------------------------------------------------------


--
-- Table structure for table `shdw_admin`
--

CREATE TABLE IF NOT EXISTS `shdw_options` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `siteName` varchar(100) NOT NULL,
  `siteTagline` varchar(100) NOT NULL DEFAULT 'A super amazing site.',
  `siteSummary` text NULL,
  `currentApp` varchar(150) NOT NULL DEFAULT 'ninjablack',
  `language` ENUM(
  				'Afrikaans', -- AF
				'Albanian', -- SQ
				'Arabic', -- AR
				'Armenian', -- HY
				'Basque', -- EU
				'Bengali', -- BN
				'Bulgarian', -- BG
				'Catalan', -- CA
				'Cambodian', -- KM
				'Chinese (Mandarin)', -- ZH
				'Croatian', -- HR
				'Czech', -- CS
				'Danish', -- DA
				'Dutch', -- NL
				'English', -- EN
				'Estonian', -- ET
				'Fiji', -- FJ
				'Finnish', -- FI
				'French', -- FR
				'Georgian', -- KA
				'German', -- DE
				'Greek', -- EL
				'Gujarati', -- GU
				'Hebrew', -- HE
				'Hindi', -- HI
				'Hungarian', -- HU
				'Icelandic', -- IS
				'Indonesian', -- ID
				'Irish', -- GA
				'Italian', -- IT
				'Japanese', -- JA
				'Javanese', -- JW
				'Korean', -- KO
				'Latin', -- LA
				'Latvian', -- LV
				'Lithuanian', -- LT
				'Macedonian', -- MK
				'Malay', -- MS
				'Malayalam', -- ML
				'Maltese', -- MT
				'Maori', -- MI
				'Marathi', -- MR
				'Mongolian', -- MN
				'Nepali', -- Nepali
				'Norwegian', -- NO
				'Persian', -- FA
				'Polish', -- PL
				'Portuguese', -- PT
				'Punjabi', -- PA
				'Quechua', -- QU
				'Romanian', -- RO
				'Russian', -- RU
				'Samoan', -- SM
				'Serbian', -- SR
				'Slovak', -- SK
				'Slovenian', -- SL
				'Spanish', -- ES
				'Swahili', -- SW
				'Swedish ', -- SV
				'Tamil', -- TA
				'Tatar', -- TT
				'Telugu', -- TE
				'Thai', -- TH
				'Tibetan', -- BO
				'Tonga', -- TO
				'Turkish', -- TR
				'Ukrainian', -- UK
				'Urdu', -- UR
				'Uzbek', -- UZ
				'Vietnamese', -- VI
				'Welsh', -- CY
				'Xhosa' -- XH
				) NOT NULL DEFAULT 'English',
  `timezone` ENUM(
  				'GMTMINUS1200INTERNATIONALDATELINEWEST', -- (GMT-12:00) International Date Line West
				'GMTMINUS1100MIDWAYISLAND_SAMOA', -- (GMT-11:00) Midway Island, Samoa
				'GMTMINUS1000HAWAII', -- (GMT-10:00) Hawaii
				'GMTMINUS0900ALASKA', -- (GMT-09:00) Alaska
				'GMTMINUS0800PACIFICTIME', -- (GMT-08:00) Pacific Time (US & Canada)
				'GMTMINUS0800TIJUANA_BAJACALIFORNIA', -- GMT-08:00) Tijuana, Baja California
				'GMTMINUS0700ARIZONA', -- (GMT-07:00) Arizona
				'GMTMINUS0700MOUNTAINTIME', -- (GMT-07:00) Mountain Time (US & Canada)
				'GMTMINUS0700CHIHUAHUA_LAPAZ_MAZATLAN', -- (GMT-07:00) Chihuahua, La Paz, Mazatlan
				'GMTMINUS0600CENTRALAMERICA', -- (GMT-06:00) Central America
				'GMTMINUS0600CENTRALTIME', -- (GMT-06:00) Central Time (US & Canada)
				'GMTMINUS0600GUADALAJARA_MEXICOCITY', -- (GMT-06:00) Guadalajara, Mexico City, Monterrey
				'GMTMINUS0600SASKATCHEWAN', -- (GMT-06:00) Saskatchewan
				'GMTMINUS0500BOGOTA_LIMA_QUITO_RIOBRANCO', -- (GMT-05:00) Bogota, Lima, Quito, Rio Branco
				'GMTMINUS0500EASTERNTIME', -- GMT-05:00) Eastern Time (US & Canada)
				'GMTMINUS0500INDIANA', -- (GMT-05:00) Indiana (East)
				'GMTMINUS0430CARACAS', -- (GMT-04:30) Caracas
				'GMTMINUS0400ASUNCION', -- (GMT-04:00) Asuncion
				'GMTMINUS0400ATLANTICTIME', -- (GMT-04:00) Atlantic Time (Canada)
				'GMTMINUS0400LAPAZ', -- (GMT-04:00) La Paz
				'GMTMINUS0400MANAUS', -- (GMT-04:00) Manaus
				'GMTMINUS0400SANTIAGO', -- (GMT-04:00) Santiago
				'GMTMINUS0330NEWFOUNDLAND', -- (GMT-03:30) Newfoundland
				'GMTMINUS0300BRASILIA', -- (GMT-03:00) Brasilia
				'GMTMINUS0300BUENOSAIRES', -- (GMT-03:00) Buenos Aires
				'GMTMINUS0300BUENOSAIRES_GEORGETOWN', -- (GMT-03:00) Buenos Aires, Georgetown
				'GMTMINUS0300GREENLAND', -- (GMT-03:00) Greenland
				'GMTMINUS0300MONTEVIDEO', -- (GMT-03:00) Montevideo
				'GMTMINUS0300_SALVADOR', -- (GMT-03:00) Salvador
				'GMTMINUS0200MIDATLANTIC', -- (GMT-02:00) Mid-Atlantic
				'GMTMINUS0100AZORES', -- (GMT-01:00) Azores
				'GMTMINUS0100CAPEVERDIS', -- (GMT-01:00) Cape Verde Is.
				'GMT_CASABLANCA', -- (GMT) Casablanca
				'GMT_COORDINATEDUNIVERSALTIME', -- (GMT) Coordinated Universal Time
				'GMT_CASABLANCA_MONTROVIA_REYKJAVIK', -- (GMT) Casablanca, Monrovia, Reykjavik
				'GMT_DUBLIN_EDINBURGH_LISBON_LONDON', -- (GMT) Greenwich Mean Time : Dublin, Edinburgh, Lisbon, London
				'GMTPLUS0100_AMSTERDAM_BERLIN_BERN_ROME', -- (GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna
				'GMTPLUS0100BELGRADE_BRATISLAVA_BUDAPEST', -- (GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague
				'GMTPLUS0100BRUSSELS_COPENHAGEN_MADRID', -- (GMT+01:00) Brussels, Copenhagen, Madrid, Paris
				'GMTPLUS0100SARAJEVO_SKOPJE_WARSAW_ZAGREB', -- (GMT+01:00) Sarajevo, Skopje, Warsaw, Zagreb
				'GMTPLUS0100WESTCENTRALAFRICA', -- (GMT+01:00) West Central Africa
				'GMTPLUS0200AMMAN', -- (GMT+02:00) Amman
				'GMTPLUS0200ATHENS_BUCHAREST_ISTANBUL', -- (GMT+02:00) Athens, Bucharest, Istanbul
				'GMTPLUS0200BEIRUT', -- (GMT+02:00) Beirut
				'GMTPLUS0200MINSK', -- (GMT+02:00) Minsk
				'GMTPLUS0200CAIRO', -- (GMT+02:00) Cairo
				'GMTPLUS0200_DAMASCUS', -- (GMT+02:00) Damascus
				'GMTPLUS0200HARARE_PRETORIA', -- (GMT+02:00) Harare, Pretoria
				'GMTPLUS0200HELSINKI_KYIV_RIGA_VILNIUS', -- (GMT+02:00) Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius
				'GMTPLUS0200JERUSALEM', -- (GMT+02:00) Jerusalem
				'GMTPLUS0200WINDHOEK', -- (GMT+02:00) Windhoek
				'GMTPLUS0300BAGHDAD', -- (GMT+03:00) Baghdad
				'GMT_PLUS0300KALININGRAD_MINSK', -- (GMT+03:00) Kaliningrad, Minsk
				'GMTPLUS0300KUWAIT_RIYADH', -- (GMT+03:00) Kuwait, Riyadh
				'GMTPLUS0300MOSCOW_STPETERSBURG_VOLGOGRAD', -- (GMT+04:00) Moscow, St. Petersburg, Volgograd
				'GMTPLUS0400PORTLOUIS', -- (GMT+04:00) Port Louis
				'GMTPLUS0300NAIROBI', -- (GMT+03:00) Nairobi
				'GMTPLUS0300TBILISI', -- (GMT+03:00) Tbilisi
				'GMTPLUS0330TEHRAN', -- (GMT+03:30) Tehran
				'GMTPLUS0400ABUDHABI_MUSCAT', -- (GMT+04:00) Abu Dhabi, Muscat
				'GMTPLUS0400BAKU', -- (GMT+04:00) Baku
				'GMTPLUS0400CAUCASUSSTANDARDTIME', -- (GMT+04:00) Caucasus Standard Time
				'GMTPLUS0400CAUCASUSSTANDARDTIME', -- (GMT+04:00) Caucasus Standard Time
				'GMTPLUS0400YEREVAN', -- (GMT+04:00) Yerevan
				'GMTPLUS0430KABUL', -- (GMT+04:30) Kabul
				'GMTPLUS0500EKATERINBURG', -- (GMT+05:00) Ekaterinburg
				'GMTPLUS0500ISLAMABAD_KARACHI', -- (GMT+05:00) Islamabad, Karachi
				'GMTPLUS0500ISLAMABAD_KARACHI_TASHKENT', -- (GMT+05:00) Tashkent
				'GMTPLUS0530CHENNAI_KOLKATA_MUMBAI', -- (GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi
				'GMTPLUS0530SRIJAYAWARDENEPURA', -- (GMT+05:30) Sri Jayawardenepura
				'GMTPLUS0545KATHMANDU', -- (GMT+05:45) Kathmandu
				'GMTPLUS0600ALMATY_NOVOSIBIRSK', -- (GMT+06:00) Almaty, Novosibirsk
				'GMTPLUS0600ASTANA_DHAKA', -- (GMT+06:00) Astana, Dhaka
				'GMTPLUS0600DHAKA', -- (GMT+06:00) Dhaka
				'GMTPLUS0630_YANGON', -- (GMT+06:30) Yangon (Rangoon)
				'GMTPLUS0700_BANGKOK_HANOI_JAKARTA', -- (GMT+07:00) Bangkok, Hanoi, Jakarta
				'GMTPLUS0700KRASNOYARSK', -- (GMT+07:00) Krasnoyarsk
				'GMTPLUS0800BEIJING_CHONGQING_HONGKONG', -- (GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi
				'GMTPLUS0800IRKUTSK_ULAANBATAAR', -- (GMT+08:00) Irkutsk, Ulaan Bataar
				'GMTPLUS0800_ULAANBAATAR', -- (GMT+08:00) Ulaanbaatar
				'GMTPLUS0800KUALALUMPUR_SINGAPORE', -- (GMT+08:00) Kuala Lumpur, Singapore
				'GMTPLUS0800PERTH', -- (GMT+08:00) Perth
				'GMTPLUS0800TAIPEI', -- (GMT+08:00) Taipei
				'GMTPLUS0900OSAKA_SAPPORO_TOKYO', -- (GMT+09:00) Osaka, Sapporo, Tokyo
				'GMTPLUS0900SEOUL', -- (GMT+09:00) Seoul
				'GMTPLUS0900YAKUTSK', -- (GMT+09:00) Yakutsk
				'GMTPLUS0930ADELAIDE', -- (GMT+09:30) Adelaide
				'GMTPLUS0930DARWIN', -- (GMT+09:30) Darwin
				'GMTPLUS1000BRISBANE', -- (GMT+10:00) Brisbane
				'GMTPLUS1000CANBERRA_MELBOURNE_SYDNEY', -- (GMT+10:00) Canberra, Melbourne, Sydney
				'GMTPLUS1000GUAM_PORTMORESBY', -- (GMT+10:00) Guam, Port Moresby
				'GMTPLUS1000HOBART', -- (GMT+10:00) Hobart
				'GMTPLUS1000VLADIVOSTOK', -- (GMT+10:00) Vladivostok
				'GMTPLUS0600MAGADAN', -- (GMT+12:00) Magadan
				'GMTPLUS1100MAGADAN_SOLOMONIS', -- (GMT+11:00) Magadan, Solomon Is., New Caledonia
				'GMTPLUS1200AUCKLAND_WELLINGTON', -- (GMT+12:00) Auckland, Wellington
				'GMTPLUS1200FIJI_KAMCHATKA_MARSHALLIS', -- (GMT+12:00) Fiji, Kamchatka, Marshall Is.
				'GMTPLUS1300NUKU_ALOFA' -- (GMT+13:00) Nuku'alofa
				) NOT NULL DEFAULT 'GMT_COORDINATEDUNIVERSALTIME',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------


--
-- Table structure for table `shdw_users`
--

CREATE TABLE IF NOT EXISTS `shdw_users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `role` enum('master','admin','member', 'author','designer','developer','affiliate') NOT NULL DEFAULT 'member',
  `prefix` varchar(40) NULL,
  `firstName` varchar(40) NOT NULL,
  `middleName` varchar(40) NULL,
  `maiden` VARCHAR(40) NULL,
  `lastName` varchar(80) NOT NULL,
  `suffix` varchar(40) NULL,
  `username` varchar(30) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `securityQuestion1` TINYTEXT NULL,
  `securityQuestion2` TINYTEXT NULL,
  `securityQuestion3` TINYTEXT NULL,
  `dateRegistered` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastLoginDate` TIMESTAMP NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lastLoginIp` VARCHAR(39) NOT NULL,
  `dateModified` TIMESTAMP NOT NULL DEFAULT '0000-00-00 00:00:00',
  `releaseLevel` ENUM('alpha','beta','standard') DEFAULT 'standard',
  `dateExpires` date DEFAULT NULL,
  `birthdate` DATE NULL,
  `sex` ENUM('male','female') NULL,
  `primaryEmail` VARCHAR(80) NOT NULL,
  `additionalEmails` TINYTEXT NULL, -- stored as serialized array for multiple emails
  `phone` TINYTEXT NULL, -- stored as serialized array for multiple phones
  `address` TEXT NULL, -- stored as serialized array for multiple addresses
  `profilePictureImg` VARCHAR(2056) NOT NULL DEFAULT 'default-profile-picture.jpg',
  `spreadImg` TEXT NOT NULL, -- stored as serialized array for multiple spread images
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `primaryEmail` (`primaryEmail`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1000000000;

-- --------------------------------------------------------


--
-- Table structure for table `shdw_login_failed_attempts`
--

CREATE TABLE IF NOT EXISTS `shdw_login_failed_attempts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` VARCHAR( 2056 ) NULL,
  `email` VARCHAR( 2056 ) NULL,
  `pass` VARCHAR(2056) NOT NULL,
  `datetimeFailed` DATETIME NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `shdw_carts`
--

CREATE TABLE IF NOT EXISTS `shdw_carts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `quantity` tinyint(3) unsigned NOT NULL,
  `userSessionId` char(32) NOT NULL,
  `productType` enum('coffee','other') NOT NULL,
  `productId` mediumint(8) unsigned NOT NULL,
  `dateCreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dateModified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `product_type` (`productType`,`productId`),
  KEY `user_session_id` (`userSessionId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `shdw_categories`
--

CREATE TABLE IF NOT EXISTS `shdw_categories` (
  `id` tinyint(5) unsigned NOT NULL AUTO_INCREMENT,
  `category` varchar(40) NOT NULL,
  `description` tinytext,
  `image` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

-- --------------------------------------------------------

--
-- Table structure for table `shdw_customers`
--

CREATE TABLE IF NOT EXISTS `shdw_customers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(80) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(40) NOT NULL,
  `address1` varchar(80) NOT NULL,
  `address2` varchar(80) DEFAULT NULL,
  `city` varchar(60) NOT NULL,
  `state` char(2) NOT NULL,
  `zip` mediumint(5) unsigned zerofill NOT NULL,
  `phone` int(10) NOT NULL,
  `dateCreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `shdw_orders`
--

CREATE TABLE IF NOT EXISTS `shdw_orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `customerId` int(10) unsigned NOT NULL,
  `total` decimal(7,2) unsigned DEFAULT NULL,
  `shipping` decimal(5,2) unsigned NOT NULL,
  `ccNumber` mediumint(4) unsigned NOT NULL,
  `orderDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `customer_id` (`customerId`),
  KEY `order_date` (`orderDate`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `shdw_order_contents`
--

CREATE TABLE IF NOT EXISTS `shdw_order_contents` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `orderId` int(10) unsigned NOT NULL,
  `productType` enum('coffee','other','sale') DEFAULT NULL,
  `productId` mediumint(8) unsigned NOT NULL,
  `quantity` tinyint(3) unsigned NOT NULL,
  `pricePer` decimal(5,2) unsigned NOT NULL,
  `shipDate` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ship_date` (`shipDate`),
  KEY `product_type` (`productType`,`productId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `shdw_pages`
--

CREATE TABLE IF NOT EXISTS `shdw_pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parentId` int(10) unsigned DEFAULT NULL,
  `creatorId` int(10) unsigned NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `slug` varchar(100) NOT NULL,
  `dateUpdated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `dateAdded` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `shdw_products`
--

CREATE TABLE IF NOT EXISTS `shdw_products` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` tinytext NOT NULL,
  `category` varchar(50) NOT NULL,
  `potencies` tinytext NOT NULL,
  `activeIngred` tinytext NOT NULL,
  `description` tinytext NOT NULL,
  `inactiveIngred` tinytext NOT NULL,
  `availability` enum('Available for sale','Hidden but available for sale','Coming soon','Disabled') NOT NULL DEFAULT 'Available for sale',
  `weight` decimal(5,2) unsigned NOT NULL,
  `image` varchar(45) NOT NULL,
  `price` decimal(5,2) unsigned NOT NULL,
  `SKU` int(10) unsigned DEFAULT NULL,
  `UPC` int(10) unsigned DEFAULT NULL,
  `stock` mediumint(8) unsigned NOT NULL DEFAULT '1',
  `dateCreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `SKU` (`SKU`),
  UNIQUE KEY `UPC` (`UPC`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=245 ;

-- --------------------------------------------------------

--
-- Table structure for table `shdw_sales`
--

CREATE TABLE IF NOT EXISTS `shdw_sales` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `productType` enum('coffee','other') DEFAULT NULL,
  `productId` mediumint(8) unsigned NOT NULL,
  `price` decimal(5,2) unsigned NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `start_date` (`startDate`),
  KEY `product_type` (`productType`,`productId`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

-- --------------------------------------------------------

--
-- Table structure for table `shdw_sizes`
--

CREATE TABLE IF NOT EXISTS `shdw_sizes` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `size` varchar(40) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `size` (`size`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Table structure for table `shdw_transactions`
--

CREATE TABLE IF NOT EXISTS `shdw_transactions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `orderId` int(10) unsigned NOT NULL,
  `type` varchar(18) NOT NULL,
  `amount` decimal(7,2) NOT NULL,
  `responseCode` tinyint(1) unsigned NOT NULL,
  `responseReason` tinytext,
  `transactionId` bigint(20) unsigned NOT NULL,
  `response` text NOT NULL,
  `dateCreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `order_id` (`orderId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------


--
-- Table structure for table `shdw_wish_lists`
--

CREATE TABLE IF NOT EXISTS `shdw_wish_lists` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `quantity` tinyint(3) unsigned NOT NULL,
  `userSessionId` char(32) NOT NULL,
  `productType` enum('coffee','other','sale') DEFAULT NULL,
  `productId` mediumint(8) unsigned NOT NULL,
  `dateCreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dateModified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `product_type` (`productType`,`productId`),
  KEY `user_session_id` (`userSessionId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
