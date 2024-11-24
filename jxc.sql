-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2023 年 11 月 20 日 09:33
-- 服务器版本: 5.5.40
-- PHP 版本: 5.3.29

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `jxc`
--

-- --------------------------------------------------------

--
-- 表的结构 `bm`
--

CREATE TABLE IF NOT EXISTS `bm` (
  `bmno` int(11) NOT NULL AUTO_INCREMENT,
  `bmname` varchar(50) NOT NULL,
  `bmaddress` varchar(50) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `fzr` varchar(50) NOT NULL,
  PRIMARY KEY (`bmno`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `bm`
--

INSERT INTO `bm` (`bmno`, `bmname`, `bmaddress`, `phone`, `fzr`) VALUES
(2, '2号车间', '海沧区', '05926188023', '李四');

-- --------------------------------------------------------

--
-- 表的结构 `cf`
--

CREATE TABLE IF NOT EXISTS `cf` (
  `cfno` int(4) NOT NULL AUTO_INCREMENT,
  `ckno` int(4) NOT NULL,
  `wlno` int(4) NOT NULL,
  `cfsj` date NOT NULL,
  `cfsl` int(4) NOT NULL,
  PRIMARY KEY (`cfno`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=22 ;

--
-- 转存表中的数据 `cf`
--

INSERT INTO `cf` (`cfno`, `ckno`, `wlno`, `cfsj`, `cfsl`) VALUES
(21, 1, 1, '2023-11-20', 0);

-- --------------------------------------------------------

--
-- 表的结构 `ck`
--

CREATE TABLE IF NOT EXISTS `ck` (
  `ckno` int(4) NOT NULL AUTO_INCREMENT,
  `ckname` varchar(50) NOT NULL,
  `ckaddress` varchar(50) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `fzr` varchar(50) NOT NULL,
  PRIMARY KEY (`ckno`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `ck`
--

INSERT INTO `ck` (`ckno`, `ckname`, `ckaddress`, `phone`, `fzr`) VALUES
(1, '1号仓库', '集美区', '05926188024', '程某');

-- --------------------------------------------------------

--
-- 表的结构 `gy`
--

CREATE TABLE IF NOT EXISTS `gy` (
  `rkno` int(4) NOT NULL AUTO_INCREMENT,
  `gysno` int(4) NOT NULL,
  `wlno` int(4) NOT NULL,
  `rksj` date NOT NULL,
  `rksl` int(4) NOT NULL,
  `rk` varchar(1) NOT NULL,
  PRIMARY KEY (`rkno`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=13 ;

--
-- 转存表中的数据 `gy`
--

INSERT INTO `gy` (`rkno`, `gysno`, `wlno`, `rksj`, `rksl`, `rk`) VALUES
(12, 2, 1, '2023-11-20', 100, '1'),
(11, 1, 1, '2023-11-20', 100, '1');

-- --------------------------------------------------------

--
-- 表的结构 `gys`
--

CREATE TABLE IF NOT EXISTS `gys` (
  `gysno` int(4) NOT NULL AUTO_INCREMENT,
  `gysname` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lxr` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`gysno`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `gys`
--

INSERT INTO `gys` (`gysno`, `gysname`, `address`, `phone`, `lxr`) VALUES
(1, '诚毅学院', '集美大道199号', '13000000000', '姚院长'),
(2, '集美大学', '集美大道198号', '13000000001', '李校长'),
(3, '', '', '05926188023', '张三');

-- --------------------------------------------------------

--
-- 表的结构 `ly`
--

CREATE TABLE IF NOT EXISTS `ly` (
  `ckno` int(4) NOT NULL AUTO_INCREMENT,
  `bmno` int(4) NOT NULL,
  `wlno` int(4) NOT NULL,
  `cksj` date NOT NULL,
  `cksl` int(4) NOT NULL,
  PRIMARY KEY (`ckno`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `ly`
--

INSERT INTO `ly` (`ckno`, `bmno`, `wlno`, `cksj`, `cksl`) VALUES
(3, 2, 1, '2023-11-20', 100),
(2, 2, 1, '2023-11-20', 100),
(4, 2, 1, '2023-11-20', 100);

-- --------------------------------------------------------

--
-- 表的结构 `wl`
--

CREATE TABLE IF NOT EXISTS `wl` (
  `wlno` int(4) NOT NULL AUTO_INCREMENT,
  `wlname` varchar(20) NOT NULL,
  `gg` varchar(20) NOT NULL,
  `dj` varchar(4) NOT NULL,
  PRIMARY KEY (`wlno`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `wl`
--

INSERT INTO `wl` (`wlno`, `wlname`, `gg`, `dj`) VALUES
(1, 'CPU', '2.0G', '1000'),
(2, '键盘', '罗技', '100');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
