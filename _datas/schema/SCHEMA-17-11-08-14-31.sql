# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Hôte: 127.0.0.1 (MySQL 5.7.18)
# Base de données: ndl
# Temps de génération: 2017-11-08 19:31:18 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Affichage de la table ndl_events
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ndl_events`;

CREATE TABLE `ndl_events` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Affichage de la table ndl_involves
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ndl_involves`;

CREATE TABLE `ndl_involves` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(128) DEFAULT NULL,
  `lastname` varchar(128) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `employer` varchar(128) DEFAULT NULL,
  `job_title` varchar(128) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `appointment` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Affichage de la table ndl_membership
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ndl_membership`;

CREATE TABLE `ndl_membership` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(128) DEFAULT NULL,
  `lastname` varchar(11) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `job_title` varchar(128) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Affichage de la table ndl_pending_users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ndl_pending_users`;

CREATE TABLE `ndl_pending_users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(128) DEFAULT NULL,
  `lastname` varchar(128) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `profession` varchar(128) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `username` varchar(128) DEFAULT NULL,
  `password` varchar(128) DEFAULT NULL,
  `validation_token` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Affichage de la table ndl_questions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ndl_questions`;

CREATE TABLE `ndl_questions` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(128) DEFAULT NULL,
  `lastname` varchar(128) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `profession` varchar(128) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `phone` varchar(128) DEFAULT NULL,
  `object` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Affichage de la table ndl_sessions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ndl_sessions`;

CREATE TABLE `ndl_sessions` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `start_time` varchar(128) DEFAULT NULL,
  `end_time` varchar(128) DEFAULT NULL,
  `user_ip` varchar(128) DEFAULT '',
  `token` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Affichage de la table ndl_stamps
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ndl_stamps`;

CREATE TABLE `ndl_stamps` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Affichage de la table ndl_users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ndl_users`;

CREATE TABLE `ndl_users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(128) DEFAULT NULL,
  `password` varchar(128) DEFAULT NULL,
  `firstname` varchar(128) DEFAULT NULL,
  `lastname` varchar(128) DEFAULT NULL,
  `city` varchar(128) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `is_log` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
