/*
Navicat MySQL Data Transfer

Source Server         : 动次打次
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : chendu

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-12-22 17:51:08
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for cd_admin
-- ----------------------------
DROP TABLE IF EXISTS `cd_admin`;
CREATE TABLE `cd_admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `addtime` int(10) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cd_admin
-- ----------------------------
INSERT INTO `cd_admin` VALUES ('1', 'admin', '202cb962ac59075b964b07152d234b70', '0');
INSERT INTO `cd_admin` VALUES ('2', '李狗蛋', '202cb962ac59075b964b07152d234b70', '0');

-- ----------------------------
-- Table structure for cd_article_case
-- ----------------------------
DROP TABLE IF EXISTS `cd_article_case`;
CREATE TABLE `cd_article_case` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `thumb` varchar(255) DEFAULT NULL,
  `addtime` varchar(1000) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `detail` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cd_article_case
-- ----------------------------
INSERT INTO `cd_article_case` VALUES ('3', '第二个', '/uploads/image/20171212/cfafdf4be5cd3c6bbbae0fff7b04d01c.jpg', '1513083777', '\r\n	行政警告处分不到1年 这只大老虎就落马\r\n\r\n\r\n	\r\n		\r\n			\r\n				2017年12月12日 12:34&nb...', '<h1 class=\"main-title\" style=\"font-size:38px;color:#4D4F53;\">\r\n	行政警告处分不到1年 这只大老虎就落马\r\n</h1>\r\n<div class=\"top-bar-wrap\" id=\"top_bar_wrap\" style=\"margin:0px;padding:0px;\">\r\n	<div class=\"top-bar ani\" id=\"top_bar\" style=\"margin:0px;padding:0px;background:#FFFF');
INSERT INTO `cd_article_case` VALUES ('2', '印度', '/uploads/image/20171212/f7b610cac84d41c1542c463761a1e90e.jpg', '1513083423', '\r\n	\r\n\r\n\r\n	2017年12月11日 11:18&nbsp...', '<p style=\"font-size:18px;font-family:&quot;Microsoft Yahei&quot;, Simsun;\">\r\n	<br />\r\n</p>\r\n<div id=\"page-tools\" style=\"font-family:&quot;Microsoft Yahei&quot;, Simsun;font-size:14px;\">\r\n	<span class=\"time-source\"><span class=\"titer\" style=\"font-size:16px');
INSERT INTO `cd_article_case` VALUES ('4', '十九大后首调研,习近平花30元买村民手工香包:\"捧捧场\"', '/uploads/image/20171213/ea4c850d291f9952358046e20cc182d3.jpg', '1513128469', '\r\n	\r\n		【总书记坐进驾驶室 称赞徐工大吊车】\r\n	\r\n	\r\n		\r\n	\r\n	\r\n		12日下午，正在徐工集团考察的习近平总...', '<div class=\"article\" style=\"font-family:&quot;Microsoft YaHei&quot;;font-size:medium;\">\r\n	<p style=\"text-align:justify;text-indent:2em;\">\r\n		<strong>【总书记坐进驾驶室 称赞徐工大吊车】</strong>\r\n	</p>\r\n	<p style=\"text-align:justify;text-indent:2em;\">\r\n		<strong><img src=\"');

-- ----------------------------
-- Table structure for cd_article_news
-- ----------------------------
DROP TABLE IF EXISTS `cd_article_news`;
CREATE TABLE `cd_article_news` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `thumb` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `addtime` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `cid` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cd_article_news
-- ----------------------------
INSERT INTO `cd_article_news` VALUES ('1', '/uploads/image/20171211/4d19d7c9035a3730d6fecb1e4102645b.jpg', '第一段', '1513602527', '第一段哟', '<p>\r\n	啊啊啊1\r\n</p>\r\n<p>\r\n	<br />\r\n</p>', '6');
INSERT INTO `cd_article_news` VALUES ('5', '/uploads/image/20171222\\cbc9d726aa473ce4ae9cdba8537dd35e.jpg', '中央环保督察：40706件环境问题举报已基本办结', '1513929988', '\r\n	据环保部网站消息，截至目前，中央环保督察组交办的40706件环境问题举报已基本办结，共立案处罚10806家，罚款54759万元；立案侦查335件，拘留424人；约谈4855人，问责6471人。第四批中央环境保护督察反馈今起全面启动，实...', '<p style=\"font-size:16px;font-family:SimSun;color:#2B2B2B;\">\r\n	据环保部网站消息，截至目前，中央环保督察组交办的40706件环境问题举报已基本办结，共立案处罚10806家，罚款54759万元；立案侦查335件，拘留424人；约谈4855人，问责6471人。第四批中央环境保护督察反馈今起全面启动，实现督察全覆盖。\r\n</p>\r\n<p style=\"font-size:16px;font-family:SimSun;color:#2B2B2B;\">', '3');
INSERT INTO `cd_article_news` VALUES ('4', '/uploads/image/20171212/cfafdf4be5cd3c6bbbae0fff7b04d01c.jpg', 'end', '1513861724', 'end', '的', '7');
INSERT INTO `cd_article_news` VALUES ('6', '/uploads/image/20171222/659c7f61fe302d52b9a7cc81f3d2d1bejpg', '中泰铁路开工：最晚2022年，坐着高铁去曼谷', '1513930077', '\r\n	原标题:早上吃米线，晚上冬阴功！最晚2022年，坐着高铁去曼谷！\r\n\r\n\r\n	21日下午，中泰铁路合作项目一期工程在泰国呵叻府举行开工仪式。这条铁路是泰国第一条标准轨高速铁路。一期工程全长253公里，设计最高时速250公里。\r\n\r\n\r...', '<p style=\"text-indent:28px;font-size:14px;text-align:justify;color:#2B2B2B;font-family:simsun, arial, helvetica, clean, sans-serif;background-color:#FFFFFF;\">\r\n	原标题:早上吃米线，晚上冬阴功！最晚2022年，坐着高铁去曼谷！\r\n</p>\r\n<p style=\"text-indent:28px;font-size:14px;text-align:j', '3');
INSERT INTO `cd_article_news` VALUES ('7', '/uploads/image/20171222/c033b51acbe35292c95554ed08287124jpg', '工信部支持高校设无人机相关专业 考大学又有新选择', '1513930251', '\r\n	\r\n		\r\n			2017-12-22 12:56:00&nbsp;中国新闻网\r\n		\r\n		\r\n			\r\n				\r\n			\r\n		\r\n	\r\n\r\n\r\n\r\n\r\n	\r\n		\r\n	\r\n	\r\n		资料图：中国-亚欧安防博览会在乌鲁木齐开幕。...', '<div class=\"J-title_detail title_detail\" style=\"color:#333333;font-family:微软雅黑, &quot;Microsoft YaHei&quot;, arial, sans-serif;font-size:14px;background-color:#FFFFFF;\">\r\n	<div class=\"share_cnt_p clearfix\" style=\"font-size:12px;color:#666666;\">\r\n		<div cl', '3');

-- ----------------------------
-- Table structure for cd_article_product
-- ----------------------------
DROP TABLE IF EXISTS `cd_article_product`;
CREATE TABLE `cd_article_product` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `thumb` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `attr` varchar(255) DEFAULT NULL,
  `usein` varchar(255) DEFAULT NULL,
  `bestin` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `addtime` varchar(255) DEFAULT NULL,
  `imgs` varchar(255) DEFAULT NULL,
  `cid` int(12) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `test` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cd_article_product
-- ----------------------------
INSERT INTO `cd_article_product` VALUES ('1', '/uploads/image/20171213/ea4c850d291f9952358046e20cc182d3.jpg', '第三个', '第三个是', '', '啊', '哟', '1513684847', null, '7', null, null);
INSERT INTO `cd_article_product` VALUES ('2', '/uploads/image/20171211/35427d6028159a9758c815dfc1f09ab8.jpg', '第四个', '手动阀', '速度发斯蒂芬', '手动阀', '饭阿瑟发', '1513859988', null, '6', null, null);
INSERT INTO `cd_article_product` VALUES ('3', '/uploads/image/20171211/4d19d7c9035a3730d6fecb1e4102645b.jpg', 'SINCEWEMADEITPOSSIBLE', '', '', '<span style=\"font-family:&quot;Open Sans&quot;;font-size:17.6px;background-color:#FFFFFF;\">超级跑车的灵魂与SUV多功能性的完美结合：这就是兰博基尼Urus，全球首辆超级SUV（运动型多用途车）。传承着极具辨识度的兰博基尼DNA，同时Urus也是一款突破性的车型：尽显气势的车身比例、纯正兰博基尼式设计和出色的性能都是其脱颖而出的原因。Urus的动态流线性独特轮廓尽显其超级跑车的传统，卓越的比例安排又传达着力量、稳固性', '<span style=\"font-family:&quot;Open Sans&quot;;font-size:17.6px;background-color:#FFFFFF;\">超级跑车的灵魂与SUV多功能性的完美结合：这就是兰博基尼Urus，全球首辆超级SUV（运动型多用途车）。传承着极具辨识度的兰博基尼DNA，同时Urus也是一款突破性的车型：尽显气势的车身比例、纯正兰博基尼式设计和出色的性能都是其脱颖而出的原因。Urus的动态流线性独特轮廓尽显其超级跑车的传统，卓越的比例安排又传达着力量、稳固性', '1513930823', 'a:7:{i:0;s:60:\"/uploads/image/20171222\\ecbf0bbf91aea542fcf6ceb9dd651c30.jpg\";i:1;s:60:\"/uploads/image/20171222\\68b805e2599a0283ab126db1075c63a6.jpg\";i:2;s:60:\"/uploads/image/20171222\\29189d9b2d2af821a2bf59b6fad4d08e.jpg\";i:3;s:60:\"/uploads/image/20171222\\', '1', null, null);
INSERT INTO `cd_article_product` VALUES ('4', '/uploads/image/20171211/4d19d7c9035a3730d6fecb1e4102645b.jpg', '李狗蛋', '', '', '<span style=\"font-family:&quot;Open Sans&quot;;font-size:17.6px;background-color:#FFFFFF;\">超级跑车的灵魂与SUV多功能性的完美结合：这就是兰博基尼Urus，全球首辆超级SUV（运动型多用途车）。传承着极具辨识度的兰博基尼DNA，同时Urus也是一款突破性的车型：尽显气势的车身比例、纯正兰博基尼式设计和出色的性能都是其脱颖而出的原因。Urus的动态流线性独特轮廓尽显其超级跑车的传统，卓越的比例安排又传达着力量、稳固性', '<span style=\"font-family:&quot;Open Sans&quot;;font-size:17.6px;background-color:#FFFFFF;\">超级跑车的灵魂与SUV多功能性的完美结合：这就是兰博基尼Urus，全球首辆超级SUV（运动型多用途车）。传承着极具辨识度的兰博基尼DNA，同时Urus也是一款突破性的车型：尽显气势的车身比例、纯正兰博基尼式设计和出色的性能都是其脱颖而出的原因。Urus的动态流线性独特轮廓尽显其超级跑车的传统，卓越的比例安排又传达着力量、稳固性', '1513930914', 'a:7:{i:0;s:60:\"/uploads/image/20171222\\d72b9cbe81698ac7fb0f0d8c4a4cdb30.jpg\";i:1;s:60:\"/uploads/image/20171222\\3fb0ffd1b363e99c6defb19f668dc13f.jpg\";i:2;s:60:\"/uploads/image/20171222\\af0d482fbd1b4f1e719a00b778e7b422.jpg\";i:3;s:60:\"/uploads/image/20171222\\', '1', null, null);
INSERT INTO `cd_article_product` VALUES ('5', '/uploads/image/20171211/885be391d7f630ce8d9428f177ddbc65.jpg', '大鹅', '', '', '<pre>product<span style=\"color:#f92672;\">/</span>index</pre>', '<pre>product<span style=\"color:#f92672;\">/</span>index</pre>', '1513931117', null, '1', null, null);

-- ----------------------------
-- Table structure for cd_category
-- ----------------------------
DROP TABLE IF EXISTS `cd_category`;
CREATE TABLE `cd_category` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cname` varchar(255) NOT NULL,
  `enname` varchar(255) NOT NULL,
  `pid` int(10) DEFAULT '0',
  `thumb` varchar(255) DEFAULT NULL,
  `sort` int(10) NOT NULL DEFAULT '50',
  `status` tinyint(2) DEFAULT '1',
  `addtime` int(10) DEFAULT '0',
  `type` int(2) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `mid` int(6) DEFAULT NULL,
  `tpl` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cd_category
-- ----------------------------
INSERT INTO `cd_category` VALUES ('1', '产品中心', 'product', '0', ' ', '7', '1', '1513131142', '1', null, null, '4', 'product.html');
INSERT INTO `cd_category` VALUES ('2', '项目案例', 'case', '0', ' ', '6', '1', '1513131472', '1', null, null, '2', 'project.html');
INSERT INTO `cd_category` VALUES ('3', '新闻中心', 'news', '0', ' ', '45', '1', '1513131494', '1', null, null, '2', 'news.html');
INSERT INTO `cd_category` VALUES ('4', '关于我们', 'about', '0', ' ', '50', '1', '1513131514', '2', null, null, '2', 'about.html');
INSERT INTO `cd_category` VALUES ('5', '联系我们', 'contact', '0', ' ', '50', '1', '1513131547', '2', null, null, '2', 'contact.html');
INSERT INTO `cd_category` VALUES ('6', '背景音乐', 'bgm', '2', '', '3', '1', '1513236186', '1', '', '', '2', null);
INSERT INTO `cd_category` VALUES ('7', '添加一个小东西', '溜溜溜', '6', '', '50', '1', '1513237285', '1', '小东西', '对方是否', '2', null);

-- ----------------------------
-- Table structure for cd_models
-- ----------------------------
DROP TABLE IF EXISTS `cd_models`;
CREATE TABLE `cd_models` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `detail` varchar(255) DEFAULT NULL,
  `addtime` varchar(255) DEFAULT NULL,
  `field` varchar(2000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cd_models
-- ----------------------------
INSERT INTO `cd_models` VALUES ('2', 'news', 'xinwen', '1513601180', 'a:6:{s:5:\"thumb\";a:5:{s:4:\"name\";s:5:\"thumb\";s:6:\"detail\";s:9:\"缩略图\";s:4:\"type\";s:7:\"varchar\";s:6:\"length\";s:3:\"255\";s:6:\"isnull\";s:4:\"null\";}s:5:\"title\";a:5:{s:4:\"name\";s:5:\"title\";s:6:\"detail\";s:6:\"标题\";s:4:\"type\";s:7:\"varchar\";s:6:\"length\";s:3:\"255\";s:6:\"isnull\";s:4:\"null\";}s:7:\"addtime\";a:5:{s:4:\"name\";s:7:\"addtime\";s:6:\"detail\";s:12:\"添加时间\";s:4:\"type\";s:7:\"varchar\";s:6:\"length\";s:3:\"255\";s:6:\"isnull\";s:4:\"null\";}s:11:\"description\";a:5:{s:4:\"name\";s:11:\"description\";s:6:\"detail\";s:6:\"详情\";s:4:\"type\";s:7:\"varchar\";s:6:\"length\";s:3:\"255\";s:6:\"isnull\";s:4:\"null\";}s:7:\"content\";a:5:{s:4:\"name\";s:7:\"content\";s:6:\"detail\";s:6:\"文章\";s:4:\"type\";s:7:\"varchar\";s:6:\"length\";s:3:\"255\";s:6:\"isnull\";s:4:\"null\";}s:3:\"cid\";a:5:{s:4:\"name\";s:3:\"cid\";s:6:\"detail\";s:6:\"从属\";s:4:\"type\";s:7:\"varchar\";s:6:\"length\";s:3:\"255\";s:6:\"isnull\";s:4:\"null\";}}');
INSERT INTO `cd_models` VALUES ('4', 'product', '标题', '1513601908', 'a:9:{s:5:\"title\";a:5:{s:4:\"name\";s:5:\"title\";s:6:\"detail\";s:6:\"标题\";s:4:\"type\";s:7:\"varchar\";s:6:\"length\";s:3:\"255\";s:6:\"isnull\";s:4:\"null\";}s:4:\"attr\";a:5:{s:4:\"name\";s:4:\"attr\";s:6:\"detail\";s:0:\"\";s:4:\"type\";s:7:\"varchar\";s:6:\"length\";s:3:\"255\";s:6:\"isnull\";s:4:\"null\";}s:5:\"usein\";a:5:{s:4:\"name\";s:5:\"usein\";s:6:\"detail\";s:6:\"用途\";s:4:\"type\";s:7:\"varchar\";s:6:\"length\";s:3:\"255\";s:6:\"isnull\";s:4:\"null\";}s:6:\"bestin\";a:5:{s:4:\"name\";s:6:\"bestin\";s:6:\"detail\";s:6:\"优点\";s:4:\"type\";s:7:\"varchar\";s:6:\"length\";s:3:\"255\";s:6:\"isnull\";s:4:\"null\";}s:7:\"content\";a:5:{s:4:\"name\";s:7:\"content\";s:6:\"detail\";s:6:\"内容\";s:4:\"type\";s:7:\"varchar\";s:6:\"length\";s:3:\"255\";s:6:\"isnull\";s:4:\"null\";}s:4:\"imgs\";a:5:{s:4:\"name\";s:4:\"imgs\";s:6:\"detail\";s:6:\"图爿\";s:4:\"type\";s:7:\"varchar\";s:6:\"length\";s:3:\"255\";s:6:\"isnull\";s:4:\"null\";}s:3:\"cid\";a:5:{s:4:\"name\";s:3:\"cid\";s:6:\"detail\";s:6:\"关联\";s:4:\"type\";s:3:\"int\";s:6:\"length\";s:2:\"12\";s:6:\"isnull\";s:4:\"null\";}s:11:\"description\";a:5:{s:4:\"name\";s:11:\"description\";s:6:\"detail\";s:6:\"描述\";s:4:\"type\";s:7:\"varchar\";s:6:\"length\";s:3:\"255\";s:6:\"isnull\";s:4:\"null\";}s:4:\"test\";a:5:{s:4:\"name\";s:4:\"test\";s:6:\"detail\";s:9:\"成都市\";s:4:\"type\";s:7:\"varchar\";s:6:\"length\";s:3:\"255\";s:6:\"isnull\";s:4:\"null\";}}');
