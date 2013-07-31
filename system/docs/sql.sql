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

CREATE TABLE IF NOT EXISTS `shdw_admin` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `adminEmail` varchar(80) NOT NULL,
  `adminPhone` smallint(15) DEFAULT NULL,
  `adminPhoneExt` smallint(10) DEFAULT NULL,
  `siteName` varchar(100) NOT NULL,
  `siteTagline` varchar(100) NOT NULL,
  `siteSummary` text,
  `currentApp` varchar(150) NOT NULL DEFAULT 'ninjablack1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
-- Table structure for table `shdw_users`
--

CREATE TABLE IF NOT EXISTS `shdw_users` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `role` enum('member','admin','author','designer','developer','affiliate') NOT NULL DEFAULT 'member',
  `firstName` varchar(40) NOT NULL,
  `lastName` varchar(80) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(80) NOT NULL,
  `altEmail` varchar(80) DEFAULT NULL,
  `pass` varchar(100) NOT NULL,
  `releaseLevel` enum('alpha','beta','standard') DEFAULT 'standard',
  `dateExpires` date DEFAULT NULL,
  `dateCreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dateModified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

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
