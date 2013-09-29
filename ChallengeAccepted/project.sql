-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 29, 2013 at 01:18 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `comment_id` int(12) NOT NULL,
  `comment_body` text NOT NULL,
  `comment_user` varchar(255) NOT NULL,
  `comment_date` varchar(255) NOT NULL,
  `comment_image_id` int(11) NOT NULL AUTO_INCREMENT,
  `comment_image_name` varchar(255) NOT NULL,
  `comment_image` blob NOT NULL,
  PRIMARY KEY (`comment_image_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_body`, `comment_user`, `comment_date`, `comment_image_id`, `comment_image_name`, `comment_image`) VALUES
(16, 'I got 5 shawarma wraps, do I win?', 'judy', '2013/09/29', 29, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `feed`
--

CREATE TABLE IF NOT EXISTS `feed` (
  `feed_id` int(11) NOT NULL AUTO_INCREMENT,
  `feed_user` varchar(255) NOT NULL,
  `feed_title` varchar(255) NOT NULL,
  `feed_content` text NOT NULL,
  `feed_time` varchar(255) NOT NULL,
  `feed_point` int(11) NOT NULL,
  `feed_prize` varchar(255) NOT NULL,
  PRIMARY KEY (`feed_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `feed`
--

INSERT INTO `feed` (`feed_id`, `feed_user`, `feed_title`, `feed_content`, `feed_time`, `feed_point`, `feed_prize`) VALUES
(16, 'jack', 'Get as many hot dogs from the hackathon as possible', 'Be sneaky', '2013/09/29', 6, ''),
(17, 'judy', 'Impersonate your favourite superhero', 'winner gets a cape', '2013/09/29', 5, ''),
(18, 'Tiger', 'Hug a stranger', 'Take a photo', '2013/09/29', 2, ''),
(19, 'Tiger', 'MAKE GAINS', 'gains, gains, scartan dragonboat rep. GAINS', '2013/09/29', 0, ''),
(20, 'judy', 'Dance and sing in the rain', '', '2013/09/29', 1, ''),
(21, 'judy', 'For all the girls out there: Don''t put on makeup for a day', '10 Bucks say you can''t do it!', '2013/09/29', 1, ''),
(22, 'judy', 'Juggle 3 different items', '', '2013/09/29', 0, ''),
(23, 'judy', 'Shave your head and donate your hair', 'http://www.cancer.ca/en/support-and-services/support-services/hair-donations/?region=on', '2013/09/29', 7, ''),
(24, 'judy', 'Spend less than one dollar on food for today', 'Tell us what you ate and how much you spent', '2013/09/29', 0, ''),
(25, 'judy', 'Go without internet for a day', '', '2013/09/29', 3, ''),
(26, 'judy', 'Only eat food that starts with the letters A or B for today', '', '2013/09/29', 1, ''),
(27, 'judy', 'Play ULTIMATE TIC TAC TOE with someone', 'http://mathwithbaddrawings.com/2013/06/16/ultimate-tic-tac-toe/', '2013/09/29', 1, ''),
(28, 'testuser', 'Explain Particle Filtering in less than 10 words', '', '2013/09/29', 6, '');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE IF NOT EXISTS `photos` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `image` blob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `name`, `image`) VALUES
(1, 'barback.PNG', 0x89504e470d0a1a0a0000000d49484452000000640000000f08020000009db3fd9a0000000467414d410000b18f0bfc610500000059494441545847edd2b10d002110c440beffa2e14bb0d39511a1931ddd774f0f0bfc587d289094101029e41fcec21202221d3e19382d2c212052c83f9c852504443a7c32705a584240a4907f380b4b088874f864e0b4b084c0036d8573d4909b1daf0000000049454e44ae426082);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_password`, `user_email`) VALUES
(1, 'test', 'test', 'email@hotmail.com'),
(5, 'yichen', 'password', 'yichenzhu1337@gmail.com'),
(7, 'jack', 'jack', 'jack'),
(8, 'judy', 'judy', 'judy'),
(9, 'example', 'example', 'example'),
(10, 'testuser', 'testuser', 'testuser'),
(11, 'Tiger', 'Tiger', 'tiger');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
