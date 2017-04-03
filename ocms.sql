-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-04-03 21:51:38
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ocms`
--

-- --------------------------------------------------------

--
-- 表的结构 `column`
--

DROP TABLE IF EXISTS `column`;
CREATE TABLE IF NOT EXISTS `column` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sort` int(11) NOT NULL,
  `content` mediumtext NOT NULL,
  `elink` varchar(255) NOT NULL,
  `ilink` int(11) NOT NULL,
  `attr` int(1) NOT NULL,
  `page` varchar(255) NOT NULL DEFAULT '',
  `list` varchar(255) NOT NULL DEFAULT '',
  `doc` varchar(255) NOT NULL DEFAULT '',
  `url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=44 ;

--
-- 转存表中的数据 `column`
--

INSERT INTO `column` (`id`, `pid`, `name`, `sort`, `content`, `elink`, `ilink`, `attr`, `page`, `list`, `doc`, `url`) VALUES
(29, 0, '投资观点', 100, '', '?c=column&m=col&cat_id=36', 0, 0, 'page', 'list_pro', 'doc', ''),
(30, 0, '财经要闻', 100, '', '', 0, 0, 'page', 'list', 'doc', ''),
(31, 0, '关于我们', 100, '<p style="margin-top: 14px; margin-bottom: 14px; padding: 0px; word-break: normal; word-wrap: break-word; white-space: normal; font-stretch: normal !important; line-height: 30px !important; font-family: &#39;Microsoft Yahei&#39; !important;">对于年轻人而言，传统设计的<a href="http://detail.zol.com.cn/notebook_index/subcate16_list_1.html" class="hui14_line" style="color: rgb(51, 51, 51); margin: 0px 5px; padding: 0px 0px 2px; border-bottom-width: 1px; border-bottom-style: dashed; border-bottom-color: rgb(51, 51, 51);">笔记本</a>显得没有那么具有吸引力了，下面给年轻用户介绍6款热门实用的笔记本，不仅仅拥有出众个性的外观设计，配置也是相当的强劲，在满足娱乐游戏的同时也可以进行日常的办公学习。本文推荐了6款热门实用<a href="http://detail.zol.com.cn/notebook_index/subcate16_list_1.html" class="hui14_line" style="color: rgb(51, 51, 51); margin: 0px 5px; padding: 0px 0px 2px; border-bottom-width: 1px; border-bottom-style: dashed; border-bottom-color: rgb(51, 51, 51);">笔记本电脑</a>，感兴趣的朋友可考虑入手。</p><p style="margin-top: 14px; margin-bottom: 14px; padding: 0px; word-break: normal; word-wrap: break-word; white-space: normal; text-align: center; font-stretch: normal !important; line-height: 30px !important; font-family: &#39;Microsoft Yahei&#39; !important;"><span style="font-size: 0px; line-height: 0; height: 0px; display: block; clear: both;"></span><img id="content-first-img" src="http://article.fd.zol-img.com.cn/t_s640x2000/g5/M00/0B/07/ChMkJlcLRtqIdhmUAAMhnIcXKS4AAPsUQHWO7QAAyG0788.jpg" width="640" height="310" alt="性能外观兼备 市售热门实用笔记本推荐 " align="no" style="border: 1px solid rgb(229, 229, 229); cursor: pointer;"/><br/><strong>性能外观兼备&nbsp;市售热门实用笔记本推荐</strong></p><hr style="margin: 0px; padding: 0px; font-family: &#39;Microsoft YaHei&#39;; line-height: 28px; white-space: normal;"/><p style="margin-top: 14px; margin-bottom: 14px; padding: 0px; word-break: normal; word-wrap: break-word; white-space: normal; font-stretch: normal !important; line-height: 30px !important; font-family: &#39;Microsoft Yahei&#39; !important;"><strong>越好看越凶猛&nbsp;华硕Strix&nbsp;S5</strong><br/></p><p style="margin-top: 14px; margin-bottom: 14px; padding: 0px; word-break: normal; word-wrap: break-word; white-space: normal; font-stretch: normal !important; line-height: 30px !important; font-family: &#39;Microsoft Yahei&#39; !important;">&nbsp;&nbsp;&nbsp;&nbsp;ROG玩家国度一直在为给玩家带来更好的游戏体验而努力，Strix系列便是ROG所推出的一款极具特色的产品。其超轻便的体型，颠覆了以往笔记本厚重的使用体验。最轻可达2.2KG的超轻机身，能使你享受<a href="http://detail.zol.com.cn/notebook_index/subcate16_list_s1229_1.html" class="hui14_line" style="color: rgb(51, 51, 51); margin: 0px 5px; padding: 0px 0px 2px; border-bottom-width: 1px; border-bottom-style: dashed; border-bottom-color: rgb(51, 51, 51);">轻薄笔记本</a>带来的使用快感，即便出门在外也不用考虑过重的行李所带来的巨大负担。</p><p style="margin-top: 14px; margin-bottom: 14px; padding: 0px; word-break: normal; word-wrap: break-word; white-space: normal; font-stretch: normal !important; line-height: 30px !important; font-family: &#39;Microsoft Yahei&#39; !important;">&nbsp;&nbsp;&nbsp;&nbsp;23.5mm的超薄机身，使其不用占据很大空间，便能将其带在身边，随时随地享受游戏带来的震撼与感动。而ROG独有的灯带点缀搭配时尚的黑色外壳，让Strix紧跟时尚潮流，神秘却又不失大气。15.6英寸的全高清广色域显示屏，则能为你带来最为舒适的视觉体验，为你的游戏生涯保驾护航。</p><p style="margin-top: 14px; margin-bottom: 14px; padding: 0px; word-break: normal; word-wrap: break-word; white-space: normal; text-align: center; font-stretch: normal !important; line-height: 30px !important; font-family: &#39;Microsoft Yahei&#39; !important;"><a href="http://detail.zol.com.cn/picture_index_1714/index17136673.shtml" style="color: rgb(31, 79, 136);"></a><a href="http://detail.zol.com.cn/picture_index_1717/index17164661.shtml" style="color: rgb(31, 79, 136);"><img src="http://article.fd.zol-img.com.cn/t_s640x2000/g5/M00/0F/08/ChMkJlb-ISuIHCtrAAG_zpgWqjIAAO8owBWzZYAAb_m151.jpg" width="640" height="401" alt="轻量化新时尚 华硕STRIX S5凶猛游戏本 " align="no" style="border: 1px solid rgb(229, 229, 229);"/></a><br/><strong>华硕STRIX&nbsp;S5</strong></p><p style="margin-top: 14px; margin-bottom: 14px; padding: 0px; word-break: normal; word-wrap: break-word; white-space: normal; font-stretch: normal !important; line-height: 30px !important; font-family: &#39;Microsoft Yahei&#39; !important;">&nbsp;&nbsp;&nbsp;&nbsp;即便这么轻巧的笔记本，但是ROG却赋予了它强于同等级笔记本的超强配置。Strix系列笔记本强大到不可思议的机能配置，即使在笔记本超轻超薄的情况下，照样可以给玩家带来完美的游戏体验。机身自带第六代英特尔酷睿i7处理器，搭配性能卓越的英伟达GTX970M/980M系列显卡，能够使笔记本也能完美运行高水平3A大作，让玩家随时随地都能体验到游戏带来的乐趣。</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br/></p>', '', 0, 1, 'page', 'list', 'doc', ''),
(32, 0, '市场动态', 100, '', '', 0, 0, 'page', 'list', 'doc', ''),
(33, 0, '测试1', 1, '0', 'http://www.baidu.com/', 0, 0, 'page', 'list', 'doc', ''),
(34, 31, '子目录', 10, '', '', 0, 0, 'page.php', 'list.php', 'doc.php', ''),
(35, 34, '子目录的子目录', 10, '', '', 0, 0, 'page.php', 'list.php', 'doc.php', ''),
(36, 29, '投资观点的子目录', 10, '', '', 0, 0, 'page.php', 'list.php', 'doc.php', ''),
(37, 29, '投资观点子目录', 11, '', '', 0, 0, 'page.php', 'list.php', 'doc.php', ''),
(38, 31, '子目录2', 12, '', '', 0, 0, 'page.php', 'list.php', 'doc.php', ''),
(39, 33, '测试88', 101, '', '', 0, 0, 'page', 'list', 'doc', ''),
(40, 0, '栏目名称', 100, '', '', 0, 0, 'page', 'list', 'doc', ''),
(41, 35, '测试', 100, '', '', 0, 0, 'page', 'list', 'doc', ''),
(42, 0, '测试oa', 0, '', 'http://www.baidu.com/', 39, 2, 'page.htm', 'list.htm', 'doc.htm', ''),
(43, 0, 'sadfsafda', 0, '', '', 41, 3, 'page.htm', 'list.htm', 'doc.htm', '');

-- --------------------------------------------------------

--
-- 表的结构 `config`
--

DROP TABLE IF EXISTS `config`;
CREATE TABLE IF NOT EXISTS `config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `copyright` varchar(255) NOT NULL,
  `qq` varchar(255) NOT NULL DEFAULT '',
  `tel` varchar(255) NOT NULL,
  `ishtml` varchar(5) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `config`
--

INSERT INTO `config` (`id`, `title`, `keywords`, `description`, `copyright`, `qq`, `tel`, `ishtml`) VALUES
(1, '网站标题1', '网站关键字1', '网站描述网站描述网站描述', '版权信息版权信息版权信息1', '2134213', '234124321', 'on');

-- --------------------------------------------------------

--
-- 表的结构 `doc`
--

DROP TABLE IF EXISTS `doc`;
CREATE TABLE IF NOT EXISTS `doc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cate` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` mediumtext,
  `AddTime` int(10) DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  `hit` int(11) NOT NULL DEFAULT '0',
  `thumbnail` varchar(255) DEFAULT NULL,
  `url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- 转存表中的数据 `doc`
--

INSERT INTO `doc` (`id`, `cate`, `title`, `content`, `AddTime`, `sort`, `hit`, `thumbnail`, `url`) VALUES
(1, 39, '儒雅的刽子手！宏碁掠夺者17游戏本评测', '<p>				</p><p>				</p><p>				</p><p>				</p><p>				</p><p>				</p><p>				</p><p>				</p><p>				</p><p>				</p><p style="margin-top: 20px; margin-bottom: 20px; padding: 0px; height: auto; overflow: visible; font-stretch: normal; font-size: 16px; line-height: 30px; font-family: &#39;Microsoft Yahei&#39;; word-break: break-all; color: rgb(51, 51, 51); white-space: normal;">每当国内厂发布高价低配置的新品，都会引起了不少网友的谩骂，“国产手机也敢卖这么贵，XX手机才卖1XXX”、“美帝良心”之类的话语不断充斥在评论中，以至于有网友专门为此写了题为《在中国，批评手机高价是“政治正确”的事情》的评论，回击当下网络中流行的无理谩骂国产机心态。</p><p style="margin-top: 20px; margin-bottom: 20px; padding: 0px; height: auto; overflow: visible; font-stretch: normal; font-size: 16px; line-height: 30px; font-family: &#39;Microsoft Yahei&#39;; word-break: break-all; color: rgb(51, 51, 51); white-space: normal; text-align: center;"><a href="http://www.pconline.com.cn/images/html/viewpic_pconline.htm?http://img0.pconline.com.cn/pconline/1512/01/7258024_PSD.jpg&channel=8956" target="_blank" style="color: rgb(51, 51, 51);"><img alt="三星A8" data-height="605" data-width="600" src="http://img0.pconline.com.cn/pconline/1512/01/7258024_PSD_thumb.jpg" title="三星A8" style="border: 1px solid rgb(204, 204, 204); vertical-align: top; transition: opacity 0.2s; max-width: 600px;"/></a></p><p style="margin-top: 20px; margin-bottom: 20px; padding: 0px; height: auto; overflow: visible; font-stretch: normal; font-size: 16px; line-height: 30px; font-family: &#39;Microsoft Yahei&#39;; word-break: break-all; color: rgb(51, 51, 51); white-space: normal;">　　但这就是目前国产手机面临的状况：出货量都是由利润不高的千元机和售价两千配置旗舰的互联手机拉动，中端、高端机型的占比越来越低，尤其是精品中端机处境更是尴尬，因为其和千元机差不多的配置售价却要高上一千多。按理说，比价格不如千元机、比配置被2K段互联网机型秒杀的传统中端手机早就应该退出市场，但实际情况是很多厂商却在这个价位段活得相当如鱼得水，那这究竟是怎么一回事呢？面对近期来势汹汹的所谓千元旗舰，它们还招架得住吗？</p><p>				</p><p>				</p><p>				</p><p>				</p><p>				</p><p>				</p><p>				</p><p>				</p><p>				</p><p>				</p>', 1458403200, NULL, 0, 'b0e97fae21dcc51d4e337683d8a131c6.jpg', ''),
(2, 29, '说起游戏本，戴尔外星人１', '<p>				</p><p>				</p><p>				</p><p>				</p><p>				</p><p>				</p><p>				</p><p>				</p><p>				</p><p>				</p><p>				</p><p style="margin-top: 20px; margin-bottom: 20px; padding: 0px; height: auto; overflow: visible; font-stretch: normal; font-size: 16px; line-height: 30px; font-family: &#39;Microsoft Yahei&#39;; word-break: break-all; color: rgb(51, 51, 51); white-space: normal;">PC行业发展至今，早已过了主流本称霸的年代，而在笔记本之下的几大分支中，游戏本无疑是其中表现最为活跃的。俗话说背靠大树好乘凉，得益于电子竞技行业的蓬勃发展，游戏本迎来了全新的发展机遇，面对这个令人垂涎的大蛋糕，各大PC厂商对于旗下游戏本产品的支持自然也是不遗余力，无论在做工、硬件配置还是在游戏体验方面，游戏本产品可以说都达到了自诞生以来的最高水准。１</p><p style="margin-top: 20px; margin-bottom: 20px; padding: 0px; height: auto; overflow: visible; font-stretch: normal; font-size: 16px; line-height: 30px; font-family: &#39;Microsoft Yahei&#39;; word-break: break-all; color: rgb(51, 51, 51); white-space: normal; text-align: center;"><a href="http://www.pconline.com.cn/djpc_pic/724/7242852_pic.html?imgsrc=http://img0.pconline.com.cn/pconline/1511/25/7212161_tt.jpg&channel=179" target="_blank" style="color: rgb(51, 51, 51);"><img alt="宏碁" data-height="605" data-width="600" src="http://img0.pconline.com.cn/pconline/1511/25/7212161_tt_thumb.jpg" title="宏碁" style="border: 1px solid rgb(204, 204, 204); vertical-align: top; transition: opacity 0.2s; max-width: 600px;"/></a><br/><a href="http://product.pconline.com.cn/notebook/acer/608048.html" target="_blank" title="宏碁掠夺者G9-791-7530" style="color: rgb(51, 51, 51);">宏碁 Predator掠夺者G9-791-7530</a><span style="color: rgb(34, 34, 34);">&nbsp;&nbsp;</span><a href="http://product.pconline.com.cn/pdlib/608048_picture.html" rel="nofollow" target="_blank" title="宏碁掠夺者G9-791-7530图片" style="color: rgb(51, 51, 51);">图片</a><span style="color: rgb(34, 34, 34);">&nbsp;&nbsp;</span><a href="http://product.pconline.com.cn/notebook/series/418804.html" target="_blank" title="宏碁掠夺者G9-791-7530系列" style="color: rgb(51, 51, 51);">系列</a><span style="color: rgb(34, 34, 34);">&nbsp;&nbsp;</span><a href="http://product.pconline.com.cn/notebook/acer/608048_review.html" rel="nofollow" target="_blank" title="宏碁掠夺者G9-791-7530评测" style="color: rgb(51, 51, 51);">评测</a><span style="color: rgb(34, 34, 34);">&nbsp;&nbsp;</span><a href="http://itbbs.pconline.com.cn/notebook/f301582.html" target="_blank" title="宏碁掠夺者G9-791-7530论坛" style="color: rgb(51, 51, 51);">论坛</a><span style="color: rgb(34, 34, 34);">&nbsp;&nbsp;</span><a href="http://product.pconline.com.cn/notebook/acer/608048_price.html" rel="nofollow" target="_blank" title="宏碁掠夺者G9-791-7530报价" style="color: rgb(51, 51, 51);">报价</a></p><p style="margin-top: 20px; margin-bottom: 20px; padding: 0px; height: auto; overflow: visible; font-stretch: normal; font-size: 16px; line-height: 30px; font-family: &#39;Microsoft Yahei&#39;; word-break: break-all; color: rgb(51, 51, 51); white-space: normal;">　　说起游戏本，戴尔外星人、华硕玩家国度等游戏本系列都是大家耳熟能详的。不管是出于何种考虑，作为传统PC行业大厂的宏碁自然没有任何理由落后，在今年的柏林消费性电子展(IFA 2015)上，宏碁推出了旗下另一款定位于高端游戏本系列的Predator掠夺者，今天我们拿到手的就是掠夺者17（G9-791），那么作为著名电子竞技俱乐部EDG的比赛、训练专用机，它到底有着怎样的不同之处呢？接下来我们就来全面了解一下这款来自Acer的游戏杀手。</p><p><br/></p><p>				</p><p>				</p><p>				</p><p>				</p><p>				</p><p>				</p><p>				</p><p>				</p><p>				</p><p>				</p><p>				</p>', 1458403200, NULL, 0, 'ec5ae9305c2a4c03a4e88d7c6b4b7f59.jpg', ''),
(3, 29, '1游戏本作为针对游戏发烧友所打造的笔记本产品1', '<p>				</p><p>				</p><p>				</p><p>				</p><p style="margin-top: 20px; margin-bottom: 20px; padding: 0px; height: auto; overflow: visible; font-stretch: normal; font-size: 16px; line-height: 30px; font-family: &#39;Microsoft Yahei&#39;; word-break: break-all; color: rgb(51, 51, 51); white-space: normal;"><strong>宏碁掠夺者17游戏本：精致的细节处理 堪称业界典范</strong></p><p style="margin-top: 20px; margin-bottom: 20px; padding: 0px; height: auto; overflow: visible; font-stretch: normal; font-size: 16px; line-height: 30px; font-family: &#39;Microsoft Yahei&#39;; word-break: break-all; color: rgb(51, 51, 51); white-space: normal; text-align: center;"><a href="http://www.pconline.com.cn/djpc_pic/724/7242852_pic.html?imgsrc=http://img0.pconline.com.cn/pconline/1511/24/7212161_zhengm.jpg&channel=179" target="_blank" style="color: rgb(51, 51, 51);"><img alt="宏碁" data-height="801" data-width="600" src="http://img0.pconline.com.cn/pconline/1511/24/7212161_zhengm_thumb.jpg" title="宏碁" style="border: 1px solid rgb(204, 204, 204); vertical-align: top; transition: opacity 0.2s; max-width: 600px;"/></a></p><p style="margin-top: 20px; margin-bottom: 20px; padding: 0px; height: auto; overflow: visible; font-stretch: normal; font-size: 16px; line-height: 30px; font-family: &#39;Microsoft Yahei&#39;; word-break: break-all; color: rgb(51, 51, 51); white-space: normal;">　　游戏本作为针对游戏发烧友所打造的笔记本产品，炫酷且个性张扬的外观设计是必不可少的，掠夺者17自然深得其中精髓。它采用了游戏本产品一贯棱角分明的线条设计，搭配经典的红黑配色，整体外观显得十分硬朗且透漏着丝丝跑车的动感</p><p><br/></p><p>				</p><p>				</p><p>				</p><p>				</p>', 1458403200, NULL, 0, NULL, ''),
(4, 29, '游戏本作为针对游戏发烧友所打造的笔记本产品', '<p>				</p><p>				</p><p style="margin-top: 20px; margin-bottom: 20px; padding: 0px; height: auto; overflow: visible; font-stretch: normal; font-size: 16px; line-height: 30px; font-family: &#39;Microsoft Yahei&#39;; word-break: break-all; color: rgb(51, 51, 51); white-space: normal;"><strong>宏碁掠夺者17游戏本：精致的细节处理 堪称业界典范</strong></p><p style="margin-top: 20px; margin-bottom: 20px; padding: 0px; height: auto; overflow: visible; font-stretch: normal; font-size: 16px; line-height: 30px; font-family: &#39;Microsoft Yahei&#39;; word-break: break-all; color: rgb(51, 51, 51); white-space: normal; text-align: center;"><a href="http://www.pconline.com.cn/djpc_pic/724/7242852_pic.html?imgsrc=http://img0.pconline.com.cn/pconline/1511/24/7212161_zhengm.jpg&channel=179" target="_blank" style="color: rgb(255, 136, 0); text-decoration: underline;"><img alt="宏碁" data-height="801" data-width="600" src="http://img0.pconline.com.cn/pconline/1511/24/7212161_zhengm_thumb.jpg" title="宏碁" style="border: 1px solid rgb(204, 204, 204); vertical-align: top; transition: opacity 0.2s; max-width: 600px; opacity: 1;"/></a></p><p style="margin-top: 20px; margin-bottom: 20px; padding: 0px; height: auto; overflow: visible; font-stretch: normal; font-size: 16px; line-height: 30px; font-family: &#39;Microsoft Yahei&#39;; word-break: break-all; color: rgb(51, 51, 51); white-space: normal;">　　游戏本作为针对游戏发烧友所打造的笔记本产品，炫酷且个性张扬的外观设计是必不可少的，掠夺者17自然深得其中精髓。它采用了游戏本产品一贯棱角分明的线条设计，搭配经典的红黑配色，整体外观显得十分硬朗且透漏着丝丝跑车的动感</p><p><br/></p><p>				</p><p>				</p>', 1458403200, NULL, 0, NULL, ''),
(5, 30, '保力生产系统8大策略', '<p>				</p><p>				</p><p>				</p><p style="margin-top: 14px; margin-bottom: 14px; padding: 0px; word-break: normal; word-wrap: break-word; font-size: 16px; line-height: 28px; font-family: simsun; color: rgb(51, 51, 51); white-space: normal; font-stretch: normal !important;">林斌在微博中提到“让小米4朋友们久等了，12月3日，Win10刷机包来了。”相信众米粉看到这个消息一定都很激动，但笔者不免有一些疑惑，换成Windows&nbsp;10&nbsp;Mobile系统后的软件问题要怎么解决？</p><p style="margin-top: 14px; margin-bottom: 14px; padding: 0px; word-break: normal; word-wrap: break-word; font-size: 16px; line-height: 28px; font-family: simsun; color: rgb(51, 51, 51); white-space: normal; text-align: center; font-stretch: normal !important;"><a href="http://detail.zol.com.cn/picture_index_1680/index16790245.shtml" style="color: rgb(31, 79, 136);"><img src="http://article.fd.zol-img.com.cn/t_s640x2000/g5/M00/09/01/ChMkJ1ZdERCIRMFQAAEyYWibAZMAAFjsgBR_vMAATJ5614.jpg" width="440" height="782" alt="12.3公测版首发 小米4即将可运行Win10 " align="no" style="border: 1px solid rgb(229, 229, 229);"/></a><br/><strong>小米4&nbsp;Win10系统宣传海报（图片引自新浪微博）</strong></p><p style="margin-top: 14px; margin-bottom: 14px; padding: 0px; word-break: normal; word-wrap: break-word; font-size: 16px; line-height: 28px; font-family: simsun; color: rgb(51, 51, 51); white-space: normal; font-stretch: normal !important;">&nbsp;&nbsp;小米4是小米公司在2014年7月发布的一款旗舰产品，在配置方面该机使用了一块<a href="http://detail.zol.com.cn/cell_phone_index/subcate57_list_s5023_1.html" class="hui14_line" style="color: rgb(51, 51, 51); margin: 0px 5px; padding: 0px 0px 2px; border-bottom-width: 1px; border-bottom-style: dashed; border-bottom-color: rgb(51, 51, 51);">5英寸</a>1080P屏幕，搭载高通骁龙801处理器，内置2GB/3GB运行内存和16GB起的本地存储空间，采用前置800万和后置1300万像素的摄像头组合，配有3080mAh容量电池。</p><p><br/></p><p>				</p><p>				</p><p>				</p>', 1458403200, NULL, 0, NULL, ''),
(6, 30, '保力营销业绩提升10大策略顾问班', '<p>				</p><p>				</p><p class="indent-fix" style="margin-top: 14px; margin-bottom: 14px; padding: 0px; word-break: normal; word-wrap: break-word; font-size: 16px; line-height: 28px; font-family: simsun; text-indent: -2em; color: rgb(51, 51, 51); white-space: normal; font-stretch: normal !important;">OPPO&nbsp;R7s是OPPO最新发布的一款智能手机产品，该机在外观依旧延续了之前OPPO&nbsp;R7的外观设计，其中该的机身厚度为6.9mm，手感纤薄的同时也比较适合单手掌控，而在机身背部依旧是采用三段式的结构，它使用了全新的阳极氧化工艺，喷涂时采用了细腻的锆砂，有着顺滑的金属手感。此外在拍照方面采用了1300万像素后置+800万像素前置镜头组合，获得了德国施耐德光学专业认证。自拍方面还搭载极致美颜3.0系统，支持语音美颜。</p><p sizset="false" sizcache031946910134098316="66 127 58" style="margin-top: 14px; margin-bottom: 14px; padding: 0px; word-break: normal; word-wrap: break-word; font-size: 16px; line-height: 28px; font-family: simsun; color: rgb(51, 51, 51); white-space: normal; text-align: center; font-stretch: normal !important;"><a href="http://detail.zol.com.cn/picture_index_1663/index16620170.shtml" sizset="false" sizcache031946910134098316="55 102 3" style="color: rgb(31, 79, 136);"><img alt="有性能有颜值 “11.11”不容错过的8机型 " src="http://i3.pro.fd.zol-img.com.cn/t_s640x2000_w1/g5/M00/0E/0E/ChMkJlYnLsOIYAO_AAOm_uKoKd4AAD7NwOGrooAA6cW419.jpg" width="640" height="480" style="border: 1px solid rgb(229, 229, 229);"/></a><br/><strong>图为&nbsp;OPPO&nbsp;R7s</strong></p><p class="indent-fix" style="margin-top: 14px; margin-bottom: 14px; padding: 0px; word-break: normal; word-wrap: break-word; font-size: 16px; line-height: 28px; font-family: simsun; text-indent: -2em; color: rgb(51, 51, 51); white-space: normal; font-stretch: normal !important;">&nbsp;&nbsp;&nbsp;&nbsp;OPPO&nbsp;R7s正面采用一块<a href="http://detail.zol.com.cn/cell_phone_index/subcate57_list_s5024_1.html" class="hui14_line" style="color: rgb(51, 51, 51); margin: 0px 5px; padding: 0px 0px 2px; border-bottom-width: 1px; border-bottom-style: dashed; border-bottom-color: rgb(51, 51, 51);">5.5英寸</a>AMOLED显示屏，分辨率为FHD级别的1920X1080像素。核心方面内置一颗64位骁龙615八核处理器（移动版为MT6752八核），以及3GB/4GB&nbsp;RAM+32GB&nbsp;ROM的内存组合，流畅运行Color&nbsp;OS&nbsp;2.1（基于Android&nbsp;4.4/5.1），同时内置3070mAh容量电池。而在机身背部还设有一枚1300万像素堆栈式后置镜头，包含LED补光灯，及其对应的800万像素前置镜头。</p><p sizset="false" sizcache031946910134098316="66 127 59" style="margin-top: 14px; margin-bottom: 14px; padding: 0px; word-break: normal; word-wrap: break-word; font-size: 16px; line-height: 28px; font-family: simsun; color: rgb(51, 51, 51); white-space: normal; text-align: center; font-stretch: normal !important;"><a href="http://detail.zol.com.cn/picture_index_1663/index16620174.shtml" sizset="false" sizcache031946910134098316="55 102 4" style="color: rgb(31, 79, 136);"><img alt="有性能有颜值 “11.11”不容错过的8机型 " src="http://i2.pro.fd.zol-img.com.cn/t_s640x2000_w1/g5/M00/0E/0E/ChMkJ1YnLsqIKf2eAAM2eqU3dUIAAD7NwPN0kUAAzaS062.jpg" width="640" height="480" style="border: 1px solid rgb(229, 229, 229);"/></a><br/><strong>图为&nbsp;OPPO&nbsp;R7s</strong></p><p><br/></p><p>				</p><p>				</p>', 1458403200, NULL, 0, NULL, ''),
(7, 30, '每日快报', '<p>				</p><p style="margin-top: 14px; margin-bottom: 14px; padding: 0px; word-break: normal; word-wrap: break-word; font-size: 16px; line-height: 28px; font-family: simsun; color: rgb(51, 51, 51); white-space: normal; font-stretch: normal !important;">自Skylake及Z170<a href="http://detail.zol.com.cn/motherboard/" class="hui14_line" style="color: rgb(51, 51, 51); margin: 0px 5px; padding: 0px 0px 2px; border-bottom-width: 1px; border-bottom-style: dashed; border-bottom-color: rgb(51, 51, 51);">主板</a>正式发布后，<span class="zol-shop-pro">SY-Z170&nbsp;ZEUS</span>主板陆续登陆各大电商平台，新一代产品在设计，用料，性能以及技术创新优势明显，硬件支持上也无可取代。梅捷Z170&nbsp;ZEUS号称梅捷旗舰新品，定位中高端游戏玩家。</p><p class="goto-dealer" style="margin-top: 14px; margin-bottom: 14px; padding: 0px; text-align: center; word-break: normal; word-wrap: break-word; font-family: simsun; color: rgb(51, 51, 51); white-space: normal; width: 642px; font-stretch: normal !important; font-size: 12px !important; line-height: 23px !important;"><span style="font-size: 0px; line-height: 0; height: 0px; display: block; clear: both;"></span><img id="content-first-img" width="640" height="473" align="no" alt="致命吸引力 梅捷Z170宙斯强力扩展解析 " src="http://article.fd.zol-img.com.cn/t_s640x2000/g5/M00/0B/08/ChMkJlZhAQOIGLQXAAdIAPsrCN4AAFtSgI7CoIAB0gY669.jpg" class="nomotu" style="border: 1px solid rgb(229, 229, 229); border-image-source: none; display: block; margin: 0px auto; cursor: pointer;"/><span class="goto-dealer-con" style="display: block; padding: 7px 10px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-style: none solid solid; border-right-color: rgb(229, 229, 229); border-bottom-color: rgb(229, 229, 229); border-left-color: rgb(229, 229, 229); text-align: left; position: relative;"><strong style="display: block; font-size: 14px !important;"><a href="http://detail.zol.com.cn/motherboard/index1104398.shtml" style="color: rgb(51, 51, 51);">梅捷 SY-Z170 ZEUS</a></strong><span class="goto-dealer-more" style="color: rgb(204, 204, 204);"><a class="goto-dealer-more-first" href="http://detail.zol.com.cn/motherboard/index1104398.shtml" style="color: rgb(31, 79, 136); margin: 0px 10px 0px 0px;">产品综述</a>|<a href="http://detail.zol.com.cn/1105/1104398/pic.shtml" class="temp_pro_picNum" style="color: rgb(31, 79, 136); margin: 0px 10px;">图片</a>|<a href="http://detail.zol.com.cn/1105/1104398/param.shtml" style="color: rgb(31, 79, 136); margin: 0px 10px;">参数</a>|<a href="http://detail.zol.com.cn/1105/1104398/price.shtml" style="color: rgb(31, 79, 136); margin: 0px 10px;">报价</a>|<a href="http://detail.zol.com.cn/1105/1104398/review.shtml" class="temp_pro_commNum" style="color: rgb(31, 79, 136); margin: 0px 10px;">点评</a></span><span class="goto-dealer-price" style="position: absolute; width: 200px; top: 16px; right: 10px; text-align: right;"><a href="http://detail.zol.com.cn/1105/1104398/price.shtml" style="color: rgb(31, 79, 136);">本地参考底价</a>&nbsp;<a class="goto-dealer-price-word" href="http://detail.zol.com.cn/1105/1104398/price.shtml" style="color: rgb(255, 76, 76); text-decoration: underline;"><span class="goto-dealer-price-num" style="font-size: 18px; font-weight: bold; margin-right: 1px;">999.00</span>元</a>&nbsp;<span class="goto-dealer-price-down" style="color: rgb(0, 102, 0);">↓0%</span></span></span><br/></p><p style="margin-top: 14px; margin-bottom: 14px; padding: 0px; word-break: normal; word-wrap: break-word; font-size: 16px; line-height: 28px; font-family: simsun; color: rgb(51, 51, 51); white-space: normal; font-stretch: normal !important;">　　梅捷Z170基于Intel&nbsp;Z170芯片组设计，支持LGA&nbsp;1151接口的Intel第六代Skylake处理器。内存条方面为100系主板标配的双通道DDR4设计，四根内存插槽足够发烧级用户的拓展需求，主机性能可大幅提升。</p><p style="margin-top: 14px; margin-bottom: 14px; padding: 0px; word-break: normal; word-wrap: break-word; font-size: 16px; line-height: 28px; font-family: simsun; color: rgb(51, 51, 51); white-space: normal; text-align: center; font-stretch: normal !important;"><a href="http://detail.zol.com.cn/picture_index_1681/index16803968.shtml" style="color: rgb(31, 79, 136);"><img width="618" height="467" align="no" alt="致命吸引力 梅捷Z170宙斯强力扩展解析 " src="http://article.fd.zol-img.com.cn/t_s640x2000/g5/M00/0B/08/ChMkJ1ZhAQSIHNh9AAIC1pVXyo4AAFtSgJDSEoAAgLu874.jpg" style="border: 1px solid rgb(229, 229, 229); border-image-source: none;"/></a><br/></p><p style="margin-top: 14px; margin-bottom: 14px; padding: 0px; word-break: normal; word-wrap: break-word; font-size: 16px; line-height: 28px; font-family: simsun; color: rgb(51, 51, 51); white-space: normal; font-stretch: normal !important;">　　磁盘接口方面，带有6个SATA&nbsp;3.0接口，其中包括SATA&nbsp;Express接口。同时，在PCI-E插槽中间，还有一个最高32Gb/S高速M.2接口。</p><p><br/></p><p>				</p>', 1458403200, NULL, 0, NULL, ''),
(8, 35, 'safsadf', '<p>asfdsadfads</p>', 1489734012, NULL, 0, NULL, ''),
(9, 35, '测试哇', '<p>测试哇测试哇测试哇测试哇测试哇测试哇测试哇</p>', 1489734362, NULL, 0, '30e2f114ad80827b473c279b22429b57.jpg', ''),
(10, 35, 'sadfsafas', '<p>fasfdasfdasfd</p>', 1489747485, NULL, 0, NULL, ''),
(11, 39, 'asdfsad', '<p>fasdfasfdsafa</p>', 1489747508, NULL, 0, NULL, ''),
(12, 36, '投资观点的子目录文章', '<p>投资观点的子目录文章投资观点的子目录文章投资观点的子目录文章投资观点的子目录文章投资观点的子目录文章投资观点的子目录文章</p>', 1489907154, NULL, 0, NULL, ''),
(13, 37, '投资观点子目录文章', '<p>投资观点子目录文章投资观点子目录文章投资观点子目录文章投资观点子目录文章投资观点子目录文章投资观点子目录文章投资观点子目录文章</p>', 1489907173, NULL, 0, NULL, '');

-- --------------------------------------------------------

--
-- 表的结构 `flink`
--

DROP TABLE IF EXISTS `flink`;
CREATE TABLE IF NOT EXISTS `flink` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tit` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `addtime` int(10) NOT NULL,
  `lastedit` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `flink`
--

INSERT INTO `flink` (`id`, `tit`, `url`, `thumb`, `addtime`, `lastedit`) VALUES
(1, '网站设计3', 'http://www.baidu.com3', '', 1489887780, 1489891060),
(2, '百度', 'http://www.baidu.com/', '', 1489887802, 1489891025),
(3, '中关村在线', 'http://www.baidu.com/', '', 1489888626, 1489891051),
(5, '测试', 'www.baidu.com1', '', 1489889282, 1489891055),
(6, '再次测试', 'http://www.baidu.com', '9476d38c1df326da8ea6fab52d018a5f.jpg', 1489901669, 1489902486),
(7, '测试图标修改', 'http://www.baidu.com', 'aba8675b6c64b9774e7795b1ed238f13.png', 1489901950, 1489902461),
(8, '名称测试2', 'http://www.baidu.com2/', '415de006aa55399b5b9fcc163b381555.jpg', 1489906973, 1489907050);

-- --------------------------------------------------------

--
-- 表的结构 `link`
--

DROP TABLE IF EXISTS `link`;
CREATE TABLE IF NOT EXISTS `link` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `order_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `link`
--

INSERT INTO `link` (`id`, `title`, `url`, `order_id`) VALUES
(1, '网站开发', 'http://www.carterx.com', 3),
(2, '测试金融网址', 'http://www.carterx.com', 2),
(3, '碧海银沙', 'http://www.yinsha.com', 10);

-- --------------------------------------------------------

--
-- 表的结构 `manage`
--

DROP TABLE IF EXISTS `manage`;
CREATE TABLE IF NOT EXISTS `manage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `manage`
--

INSERT INTO `manage` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- 表的结构 `page`
--

DROP TABLE IF EXISTS `page`;
CREATE TABLE IF NOT EXISTS `page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` mediumtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `page`
--

INSERT INTO `page` (`id`, `cat`, `title`, `content`) VALUES
(1, 31, '儒雅的刽子手！宏碁掠夺者17游戏本评测1', '<p>				</p><p>				</p><p>				</p><p>				</p><p>				</p><p>				</p><p>				</p><p>				</p><p style="margin-top: 20px; margin-bottom: 20px; padding: 0px; height: auto; overflow: visible; font-stretch: normal; font-size: 16px; line-height: 30px; font-family: &#39;Microsoft Yahei&#39;; word-break: break-all; color: rgb(51, 51, 51); white-space: normal;">1每当国内厂发布高价低配置的新品，都会引起了不少网友的谩骂，“国产手机也敢卖这么贵，XX手机才卖1XXX”、“美帝良心”之类的话语不断充斥在评论中，以至于有网友专门为此写了题为《在中国，批评手机高价是“政治正确”的事情》的评论，回击当下网络中流行的无理谩骂国产机心态。</p><p style="margin-top: 20px; margin-bottom: 20px; padding: 0px; height: auto; overflow: visible; font-stretch: normal; font-size: 16px; line-height: 30px; font-family: &#39;Microsoft Yahei&#39;; word-break: break-all; color: rgb(51, 51, 51); white-space: normal; text-align: center;"><a href="http://www.pconline.com.cn/images/html/viewpic_pconline.htm?http://img0.pconline.com.cn/pconline/1512/01/7258024_PSD.jpg&channel=8956" target="_blank" style="color: rgb(51, 51, 51);"><img alt="三星A8" data-height="605" data-width="600" src="http://img0.pconline.com.cn/pconline/1512/01/7258024_PSD_thumb.jpg" title="三星A8" style="border: 1px solid rgb(204, 204, 204); vertical-align: top; transition: opacity 0.2s; max-width: 600px;"/></a></p><p style="margin-top: 20px; margin-bottom: 20px; padding: 0px; height: auto; overflow: visible; font-stretch: normal; font-size: 16px; line-height: 30px; font-family: &#39;Microsoft Yahei&#39;; word-break: break-all; color: rgb(51, 51, 51); white-space: normal;">　　但这就是目前国产手机面临的状况：出货量都是由利润不高的千元机和售价两千配置旗舰的互联手机拉动，中端、高端机型的占比越来越低，尤其是精品中端机处境更是尴尬，因为其和千元机差不多的配置售价却要高上一千多。按理说，比价格不如千元机、比配置被2K段互联网机型秒杀的传统中端手机早就应该退出市场，但实际情况是很多厂商却在这个价位段活得相当如鱼得水，那这究竟是怎么一回事呢？面对近期来势汹汹的所谓千元旗舰，它们还招架得住吗？</p><p>				</p><p>				</p><p>				</p><p>				</p><p>				</p><p>				</p><p>				</p><p>				</p>'),
(2, 37, '说起游戏本，戴尔外星人１', '<p>				</p><p>				</p><p>				</p><p>				</p><p>				</p><p>				</p><p>				</p><p>				</p><p>				</p><p>				</p><p>				</p><p style="margin-top: 20px; margin-bottom: 20px; padding: 0px; height: auto; overflow: visible; font-stretch: normal; font-size: 16px; line-height: 30px; font-family: &#39;Microsoft Yahei&#39;; word-break: break-all; color: rgb(51, 51, 51); white-space: normal;">花木城蒂塔万提斯PC行业发展至今，早已过了主流本称霸的年代，而在笔记本之下的几大分支中，游戏本无疑是其中表现最为活跃的。俗话说背靠大树好乘凉，得益于电子竞技行业的蓬勃发展，游戏本迎来了全新的发展机遇，面对这个令人垂涎的大蛋糕，各大PC厂商对于旗下游戏本产品的支持自然也是不遗余力，无论在做工、硬件配置还是在游戏体验方面，游戏本产品可以说都达到了自诞生以来的最高水准。１</p><p style="margin-top: 20px; margin-bottom: 20px; padding: 0px; height: auto; overflow: visible; font-stretch: normal; font-size: 16px; line-height: 30px; font-family: &#39;Microsoft Yahei&#39;; word-break: break-all; color: rgb(51, 51, 51); white-space: normal; text-align: center;"><a href="http://www.pconline.com.cn/djpc_pic/724/7242852_pic.html?imgsrc=http://img0.pconline.com.cn/pconline/1511/25/7212161_tt.jpg&channel=179" target="_blank" style="color: rgb(51, 51, 51);"><img alt="宏碁" data-height="605" data-width="600" src="http://img0.pconline.com.cn/pconline/1511/25/7212161_tt_thumb.jpg" title="宏碁" style="border: 1px solid rgb(204, 204, 204); vertical-align: top; transition: opacity 0.2s; max-width: 600px;"/></a><br/><a href="http://product.pconline.com.cn/notebook/acer/608048.html" target="_blank" title="宏碁掠夺者G9-791-7530" style="color: rgb(51, 51, 51);">宏碁 Predator掠夺者G9-791-7530</a><span style="color: rgb(34, 34, 34);">&nbsp;&nbsp;</span><a href="http://product.pconline.com.cn/pdlib/608048_picture.html" rel="nofollow" target="_blank" title="宏碁掠夺者G9-791-7530图片" style="color: rgb(51, 51, 51);">图片</a><span style="color: rgb(34, 34, 34);">&nbsp;&nbsp;</span><a href="http://product.pconline.com.cn/notebook/series/418804.html" target="_blank" title="宏碁掠夺者G9-791-7530系列" style="color: rgb(51, 51, 51);">系列</a><span style="color: rgb(34, 34, 34);">&nbsp;&nbsp;</span><a href="http://product.pconline.com.cn/notebook/acer/608048_review.html" rel="nofollow" target="_blank" title="宏碁掠夺者G9-791-7530评测" style="color: rgb(51, 51, 51);">评测</a><span style="color: rgb(34, 34, 34);">&nbsp;&nbsp;</span><a href="http://itbbs.pconline.com.cn/notebook/f301582.html" target="_blank" title="宏碁掠夺者G9-791-7530论坛" style="color: rgb(51, 51, 51);">论坛</a><span style="color: rgb(34, 34, 34);">&nbsp;&nbsp;</span><a href="http://product.pconline.com.cn/notebook/acer/608048_price.html" rel="nofollow" target="_blank" title="宏碁掠夺者G9-791-7530报价" style="color: rgb(51, 51, 51);">报价</a></p><p style="margin-top: 20px; margin-bottom: 20px; padding: 0px; height: auto; overflow: visible; font-stretch: normal; font-size: 16px; line-height: 30px; font-family: &#39;Microsoft Yahei&#39;; word-break: break-all; color: rgb(51, 51, 51); white-space: normal;">　　说起游戏本，戴尔外星人、华硕玩家国度等游戏本系列都是大家耳熟能详的。不管是出于何种考虑，作为传统PC行业大厂的宏碁自然没有任何理由落后，在今年的柏林消费性电子展(IFA 2015)上，宏碁推出了旗下另一款定位于高端游戏本系列的Predator掠夺者，今天我们拿到手的就是掠夺者17（G9-791），那么作为著名电子竞技俱乐部EDG的比赛、训练专用机，它到底有着怎样的不同之处呢？接下来我们就来全面了解一下这款来自Acer的游戏杀手。</p><p><br/></p><p>				</p><p>				</p><p>				</p><p>				</p><p>				</p><p>				</p><p>				</p><p>				</p><p>				</p><p>				</p><p>				</p>'),
(3, 42, '系统添加', '内容');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
