-- phpMyAdmin SQL Dump
-- version 4.0.10.1
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1
-- 生成日期: 2015-07-23 12:51:27
-- 服务器版本: 5.1.73
-- PHP 版本: 5.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `yunshipei`
--

-- --------------------------------------------------------

--
-- 表的结构 `tp_cast`
--

CREATE TABLE IF NOT EXISTS `tp_cast` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `sitename` varchar(255) DEFAULT NULL COMMENT '站点名称',
  `siteurl` varchar(255) DEFAULT NULL COMMENT '站点网址',
  `siteimg` text COMMENT '站点图片',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- 转存表中的数据 `tp_cast`
--

INSERT INTO `tp_cast` (`id`, `sitename`, `siteurl`, `siteimg`) VALUES
(1, '美国Bellevue市政府', 'http://bellevuecn.com', 'images/case/case1.png'),
(2, '老板电器', 'http://www.robam.com/', 'images/case/case2.png'),
(3, 'IT桔子', 'http://itjuzi.com/', 'images/case/case3.png'),
(4, '中关村管委会', 'http://www.zgc.gov.cn/', 'images/case/case4.png'),
(5, '易观智库', 'http://www.enfodesk.com/', 'images/case/case5.png'),
(6, '纷享销客', 'http://www.fxiaoke.com/', 'images/case/case6.png'),
(7, '中国企业家', 'http://www.iceo.com.cn/', 'images/case/case7.png'),
(8, 'CSDN', 'http://csdn.net', 'images/case/case8.png'),
(9, '51CTO技术博客', 'http://blog.51cto.com/', 'images/case/case9.png'),
(10, '快鲤鱼', 'http://kuailiyu.cyzone.cn/', 'images/case/case10.png'),
(11, '中青在线', 'http://www.cyol.net/', 'images/case/case11.png'),
(12, '创业邦', 'http://www.cyzone.cn', 'images/case/case12.png');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
