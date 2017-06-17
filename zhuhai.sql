-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2017 年 06 月 16 日 08:17
-- 服务器版本: 5.5.20
-- PHP 版本: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `zhuhai`
--

-- --------------------------------------------------------

--
-- 表的结构 `think_image`
--

CREATE TABLE IF NOT EXISTS `think_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image_name` char(50) NOT NULL,
  `image` varchar(200) NOT NULL,
  `create_time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=60 ;

--
-- 转存表中的数据 `think_image`
--

INSERT INTO `think_image` (`id`, `image_name`, `image`, `create_time`) VALUES
(58, 'zh1', 'zh1.jpg', 0),
(59, 'zh2', 'zh2.jpg', 0);

-- --------------------------------------------------------

--
-- 表的结构 `think_tour`
--

CREATE TABLE IF NOT EXISTS `think_tour` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(50) NOT NULL,
  `city` char(50) NOT NULL,
  `src` char(50) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `think_tour`
--

INSERT INTO `think_tour` (`id`, `name`, `city`, `src`, `text`) VALUES
(2, '珠海渔女', '珠海', 'zh1.html', '珠海渔女雕像是珠海城市的象征。渔女姿态优雅，神情喜悦，手擎明珠，向人类奉献珍宝，向世界昭示光明。雕像是中国著名雕塑家潘鹤的杰作。建成于1982年，用花岗岩石材10吨，分70件组合而成，通高9.9米。渔女形象蓝本源自于珠海一个美丽的爱情传说，渔女雕像的成功创作，开创了中国大型海滨雕像之先河。'),
(3, '长隆海洋王国', '珠海', 'zh2.html', '长隆海洋王国位于珠海长隆国际海洋度假区内，是长隆集团采用世界顶尖公司的设计，吸取全球主题公园的精华，运用高科技和长隆特有的创意，全面整合珍稀的海洋动物、顶级的游乐设备和新奇的大型演艺，全力建设和打造的中国人自主研发、拥有自主知识产权的世界顶级主题公园。'),
(4, '圆明新园', '珠海', 'zh3.html', '圆明新园于公元1997年2月2日正式建成并对外开放，它坐落于珠海九洲大道石林山下，占地面积为1.39平方公里，以北京圆明园为原稿，按1：1比例精选圆明园四十景中的十八景修建而成，投资6亿元人民币，是中国首批AAAA级景区之一。圆明新园融古典皇家建筑群、江南古典园林建筑群和西洋建筑群为一体，为游客再现圆明园。'),
(5, '会同村', '珠海', 'zh4.html', '会同村，位于珠海市金鼎镇。村内是清一色岭南民居，家家都是灰瓦、青砖、飞檐，建筑布局整齐，外形色调一致，嵌填在“棋盘式”方格网形成的整齐的宅基地中。2006年，会同古村被颁布为区级文物保护单位，并申报市级文物保护单位。'),
(6, '唐绍仪故居', '珠海', 'zh5.html', '首任民国总理唐绍仪故居，位于唐家古镇山房路99号。由并连成一整楼的前后两座组成，后座为唐绍仪祖父于清朝所建，前座为唐绍仪于1929年所扩建。'),
(7, '01', '1', '', '1');

-- --------------------------------------------------------

--
-- 表的结构 `think_user`
--

CREATE TABLE IF NOT EXISTS `think_user` (
  `userid` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `account` varchar(20) NOT NULL,
  `password` char(20) NOT NULL,
  `user_image` varchar(200) NOT NULL,
  `create_time` int(11) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `think_user`
--

INSERT INTO `think_user` (`userid`, `username`, `account`, `password`, `user_image`, `create_time`) VALUES
(1, 'admin', 'admin', '123', 'cd3.jpg', 1497589298),
(2, '蜡笔小新', 'xiaoxin', '123456', '', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
