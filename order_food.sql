-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2015-06-06 11:15:26
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `order_food`
--

-- --------------------------------------------------------

--
-- 表的结构 `buyer`
--

CREATE TABLE IF NOT EXISTS `buyer` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `buyer`
--

INSERT INTO `buyer` (`id`, `name`) VALUES
(1, 'Aaron Lau'),
(2, 'Pipi');

-- --------------------------------------------------------

--
-- 表的结构 `food`
--

CREATE TABLE IF NOT EXISTS `food` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `merchant_id` int(11) NOT NULL COMMENT '商户编号',
  `price` float(10,2) NOT NULL COMMENT '单价',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `food`
--

INSERT INTO `food` (`id`, `name`, `merchant_id`, `price`) VALUES
(1, '披萨', 1, 39.00),
(2, '寿司', 1, 12.00);

-- --------------------------------------------------------

--
-- 表的结构 `merchant`
--

CREATE TABLE IF NOT EXISTS `merchant` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL COMMENT '餐厅名称',
  `address` varchar(255) DEFAULT NULL COMMENT '地址',
  `tel` varchar(255) DEFAULT NULL COMMENT '电话',
  `info` text COMMENT '店铺信息',
  `worktime` int(11) DEFAULT NULL COMMENT '营业时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `merchant`
--

INSERT INTO `merchant` (`id`, `name`, `address`, `tel`, `info`, `worktime`) VALUES
(1, '肯德基', '光谷大道', '1050101023', '快餐速食', 11111),
(2, '必胜客', '民族大道', '1001023012', '23123123123\r\n', 22222);

-- --------------------------------------------------------

--
-- 表的结构 `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `food_id` text,
  `merchant_id` int(11) DEFAULT NULL,
  `buyer_id` int(11) DEFAULT NULL,
  `order_time` int(11) DEFAULT NULL,
  `kind` int(4) DEFAULT '0' COMMENT '0，已下单，1，配送中， 2已完成,3,退单',
  `complete_time` int(11) DEFAULT NULL,
  `total` float(10,2) NOT NULL COMMENT '金额',
  `num` text NOT NULL COMMENT '食品数量',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `order`
--

INSERT INTO `order` (`id`, `food_id`, `merchant_id`, `buyer_id`, `order_time`, `kind`, `complete_time`, `total`, `num`) VALUES
(1, '1,2', 1, 1, 123213123, 1, 12323, 56.90, '2,3'),
(2, '2', 1, 1, 123123, 2, 321434, 24.00, '1'),
(3, '1', 1, 1, 12323, 0, 43443, 36.50, '4');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
