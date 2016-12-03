-- phpMyAdmin SQL Dump
-- version 4.0.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Server version: 5.6.11-log
-- PHP Version: 5.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */; 

--
-- Database: `cheapo_users`
--
CREATE DATABASE IF NOT EXISTS `cheapo_users` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cheapo_users`;

-- --------------------------------------------------------

--
-- Table structure for `message` table
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `body` varchar(250) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `user_id` int(10) NOT NULL,
  `recipient_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for `message_read` table 
--

CREATE TABLE IF NOT EXISTS `message_read` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `message_id` int(10) NOT NULL,
  `reader_id` int(10) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for `users` table
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) NOT NULL DEFAULT '''''',
  `lastname` varchar(30) NOT NULL DEFAULT '''''',
  `pswd` varchar(25) NOT NULL,
  `username` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
