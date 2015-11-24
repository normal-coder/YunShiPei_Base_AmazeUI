-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 09 月 14 日 01:41
-- 服务器版本: 5.5.20
-- PHP 版本: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
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
-- 表的结构 `tp_agent`
--

CREATE TABLE IF NOT EXISTS `tp_agent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `telephone` varchar(255) DEFAULT NULL,
  `qq` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL COMMENT '城市',
  `company` varchar(255) DEFAULT NULL COMMENT '公司名称',
  `url` varchar(255) DEFAULT NULL COMMENT '公司网址',
  `introduct` varchar(255) DEFAULT NULL COMMENT '公司简介',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `tp_agent`
--

INSERT INTO `tp_agent` (`id`, `name`, `telephone`, `qq`, `email`, `city`, `company`, `url`, `introduct`) VALUES
(3, '9y', '13512345678', '123456789', '9y@0hi.org.com', '广州', '成都猿团科技', 'http://www.0hi.cn/', '成都猿团科技有限公司，专注于移动互联网开发者生态服务');

-- --------------------------------------------------------

--
-- 表的结构 `tp_cast`
--

CREATE TABLE IF NOT EXISTS `tp_cast` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `sitename` varchar(255) DEFAULT NULL COMMENT '站点名称',
  `siteurl` varchar(255) DEFAULT NULL COMMENT '站点网址',
  `siteimg` text COMMENT '站点图片',
  `status` int(11) NOT NULL DEFAULT '0' COMMENT '状态',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- 转存表中的数据 `tp_cast`
--

INSERT INTO `tp_cast` (`id`, `sitename`, `siteurl`, `siteimg`, `status`) VALUES
(1, '美国Bellevue市政府', 'http://bellevuecn.com', 'images/case/case1.png', 1),
(3, 'IT桔子', 'http://itjuzi.com/', 'images/case/case3.png', 1),
(4, '中关村管委会', 'http://www.zgc.gov.cn/', 'images/case/case4.png', 1),
(5, '易观智库', 'http://www.enfodesk.com/', 'images/case/case5.png', 0),
(6, '纷享销客', 'http://www.fxiaoke.com/', 'images/case/case6.png', 0),
(7, '中国企业家', 'http://www.iceo.com.cn/', 'images/case/case7.png', 0),
(8, 'CSDN', 'http://csdn.net', 'images/case/case8.png', 0),
(9, '51CTO技术博客', 'http://blog.51cto.com/', 'images/case/case9.png', 0),
(10, '快鲤鱼', 'http://kuailiyu.cyzone.cn/', 'images/case/case10.png', 0),
(11, '中青在线', 'http://www.cyol.net/', 'images/case/case11.png', 1),
(20, 'testZ', 'http://www.baidu.com/', '2015-08-09/55c70b013013f.png', 1);

-- --------------------------------------------------------

--
-- 表的结构 `tp_friendlink`
--

CREATE TABLE IF NOT EXISTS `tp_friendlink` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `linkname` varchar(255) DEFAULT NULL COMMENT '链接名称',
  `url` varchar(255) DEFAULT NULL COMMENT '链接地址',
  `status` int(11) DEFAULT '1' COMMENT '链接状态',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='友情链接表' AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `tp_friendlink`
--

INSERT INTO `tp_friendlink` (`id`, `linkname`, `url`, `status`) VALUES
(1, 'Egret社区', 'http://bbs.egret-labs.org/dsfd', 1),
(3, 'Egret社区', 'http://bbs.egret-labs.org/d', 1),
(4, 'Egret社区', 'http://bbs.egret-labs.org/d', 1),
(5, 'Egret社区', 'http://bbs.egret-labs.org/d', 1),
(8, 'Egret社区', 'http://bbs.egret-labs.org/d', 1);

-- --------------------------------------------------------

--
-- 表的结构 `tp_siteconfig`
--

CREATE TABLE IF NOT EXISTS `tp_siteconfig` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sitename` varchar(255) DEFAULT NULL COMMENT '站点名称',
  `discript` text COMMENT '站点描述',
  `keywords` text COMMENT '站点关键字',
  `title` varchar(255) DEFAULT NULL COMMENT '网站标题',
  `copyright` varchar(255) DEFAULT NULL COMMENT '网站版权',
  `icp` varchar(255) DEFAULT NULL COMMENT '网站备案号',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='站点信息表' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `tp_siteconfig`
--

INSERT INTO `tp_siteconfig` (`id`, `sitename`, `discript`, `keywords`, `title`, `copyright`, `icp`) VALUES
(1, '云适配门户网站', '基于ThinkPHP+AamzeUI高仿云适配门户网站', 'ThinkPHP,AamzeUI,云适配门户网站,9y,cm', '云适配门户网站', '© 2015 9y,cm 猿团科技出品', '京ICP证XXXXXX123号');

-- --------------------------------------------------------

--
-- 表的结构 `tp_user`
--

CREATE TABLE IF NOT EXISTS `tp_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `tp_user`
--

INSERT INTO `tp_user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
