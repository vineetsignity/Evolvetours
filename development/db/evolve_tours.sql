-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2015 at 06:58 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `evolve_tours`
--

-- --------------------------------------------------------

--
-- Table structure for table `acos`
--

CREATE TABLE IF NOT EXISTS `acos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT '',
  `foreign_key` int(10) unsigned DEFAULT NULL,
  `alias` varchar(255) DEFAULT '',
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_acos_lft_rght` (`lft`,`rght`),
  KEY `idx_acos_alias` (`alias`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `acos`
--

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, NULL, NULL, 'controllers', 1, 62),
(2, 1, NULL, NULL, 'Pages', 2, 7),
(3, 2, NULL, NULL, 'display', 3, 4),
(4, 2, NULL, NULL, 'isAuthorized', 5, 6),
(5, 1, NULL, NULL, 'Roles', 8, 11),
(6, 5, NULL, NULL, 'isAuthorized', 9, 10),
(7, 1, NULL, NULL, 'Users', 12, 31),
(8, 7, NULL, NULL, 'login', 13, 14),
(9, 7, NULL, NULL, 'logout', 15, 16),
(10, 7, NULL, NULL, 'initDB', 17, 18),
(11, 7, NULL, NULL, 'admin_index', 19, 20),
(12, 7, NULL, NULL, 'admin_view', 21, 22),
(13, 7, NULL, NULL, 'admin_add', 23, 24),
(14, 7, NULL, NULL, 'admin_edit', 25, 26),
(15, 7, NULL, NULL, 'admin_delete', 27, 28),
(16, 7, NULL, NULL, 'isAuthorized', 29, 30),
(17, 1, NULL, NULL, 'AclExtras', 32, 33),
(18, 1, NULL, NULL, 'Schools', 34, 47),
(19, 18, NULL, NULL, 'admin_index', 35, 36),
(20, 18, NULL, NULL, 'admin_view', 37, 38),
(21, 18, NULL, NULL, 'admin_add', 39, 40),
(22, 18, NULL, NULL, 'admin_edit', 41, 42),
(23, 18, NULL, NULL, 'admin_delete', 43, 44),
(24, 18, NULL, NULL, 'isAuthorized', 45, 46),
(25, 1, NULL, NULL, 'Teachers', 48, 61),
(26, 25, NULL, NULL, 'admin_index', 49, 50),
(27, 25, NULL, NULL, 'admin_view', 51, 52),
(28, 25, NULL, NULL, 'admin_add', 53, 54),
(29, 25, NULL, NULL, 'admin_edit', 55, 56),
(30, 25, NULL, NULL, 'admin_delete', 57, 58),
(31, 25, NULL, NULL, 'isAuthorized', 59, 60);

-- --------------------------------------------------------

--
-- Table structure for table `aros`
--

CREATE TABLE IF NOT EXISTS `aros` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT '',
  `foreign_key` int(10) unsigned DEFAULT NULL,
  `alias` varchar(255) DEFAULT '',
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_aros_lft_rght` (`lft`,`rght`),
  KEY `idx_aros_alias` (`alias`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `aros`
--

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, 'Role', 1, 'Admin', 1, 4),
(2, NULL, '', NULL, 'Teacher', 5, 6),
(3, NULL, '', NULL, 'Guide', 7, 8),
(4, NULL, '', NULL, 'Parents', 9, 10),
(5, 1, 'Role', 1, 'Admin', 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `aros_acos`
--

CREATE TABLE IF NOT EXISTS `aros_acos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `aro_id` int(10) unsigned NOT NULL,
  `aco_id` int(10) unsigned NOT NULL,
  `_create` char(2) NOT NULL DEFAULT '0',
  `_read` char(2) NOT NULL DEFAULT '0',
  `_update` char(2) NOT NULL DEFAULT '0',
  `_delete` char(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_aco_id` (`aco_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `aros_acos`
--

INSERT INTO `aros_acos` (`id`, `aro_id`, `aco_id`, `_create`, `_read`, `_update`, `_delete`) VALUES
(1, 1, 1, '1', '1', '1', '1'),
(2, 2, 1, '-1', '-1', '-1', '-1'),
(3, 2, 7, '1', '1', '1', '1'),
(4, 3, 1, '-1', '-1', '-1', '-1'),
(5, 3, 11, '1', '1', '1', '1'),
(6, 3, 13, '1', '1', '1', '1'),
(7, 3, 9, '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `title`, `status`, `created`, `modified`) VALUES
(1, 'Admin', '1', '2015-04-14 09:05:04', '2015-04-14 09:06:11'),
(2, 'Teacher', '1', '2015-04-14 09:05:32', '2015-04-14 09:06:41'),
(3, 'Guide', '1', '2015-04-14 09:05:53', '2015-04-14 09:05:53'),
(4, 'Parents', '1', '2015-06-17 00:00:00', '2015-06-17 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE IF NOT EXISTS `schools` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `school_name` varchar(250) DEFAULT NULL,
  `city` varchar(250) DEFAULT NULL,
  `state` varchar(250) DEFAULT NULL,
  `zip` varchar(250) DEFAULT NULL,
  `address` text,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`id`, `school_name`, `city`, `state`, `zip`, `address`, `status`, `created`, `modified`) VALUES
(1, 'S.A Jain School', 'Austin', 'Tx', '78785', 'Austin, Tx', 0, '2015-06-17 15:03:36', '2015-06-17 09:33:36');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE IF NOT EXISTS `teachers` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `school_id` int(11) NOT NULL,
  `bio` text NOT NULL,
  `image` text NOT NULL,
  `doc` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `user_id`, `first_name`, `last_name`, `school_id`, `bio`, `image`, `doc`, `status`, `created`, `modified`) VALUES
(1, 6, 'Vineet', 'Verma', 1, 't is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', '', '', 0, '2015-06-17 15:09:21', '2015-06-17 09:39:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(255) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role_id`, `created`, `modified`) VALUES
(5, 'admin', '$2a$10$1D5FlNqSsPYYNqKG8aAYNuIzVPzPnTZ7RQoaN6hsJiMhSyPdH8X92', 1, '2015-06-17 13:29:52', '2015-06-17 07:59:52'),
(6, 'vineetverma', '$2a$10$pSUoVm9sUUQzB7vKcTI6vOFlOgSBxKTwm5WbQZneDh7kGkoHIxIx6', 2, '2015-06-17 14:55:07', '2015-06-17 09:25:07');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
