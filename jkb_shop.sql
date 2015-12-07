/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50611
Source Host           : localhost:3306
Source Database       : jkb_shop

Target Server Type    : MYSQL
Target Server Version : 50611
File Encoding         : 65001

Date: 2015-12-08 00:46:22
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for think_admin
-- ----------------------------
DROP TABLE IF EXISTS `think_admin`;
CREATE TABLE `think_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adm_name` varchar(255) NOT NULL,
  `adm_password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_admin
-- ----------------------------
INSERT INTO `think_admin` VALUES ('1', 'admin', '96e79218965eb72c92a549dd5a330112');

-- ----------------------------
-- Table structure for think_goods
-- ----------------------------
DROP TABLE IF EXISTS `think_goods`;
CREATE TABLE `think_goods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `total_price` double(11,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  `unit_price` decimal(11,2) NOT NULL,
  `number` int(11) NOT NULL,
  `pay_number` int(11) NOT NULL,
  `description` text NOT NULL,
  `creat_time` int(11) NOT NULL,
  `begin_time` int(11) NOT NULL,
  `end_time` int(11) NOT NULL,
  `type` int(11) NOT NULL COMMENT '0表示未开始，1表示进行中，2表示已结束',
  `lucky_number` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `issue` int(11) NOT NULL,
  `publish_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_goods
-- ----------------------------
INSERT INTO `think_goods` VALUES ('1', '4234', '4353.00', '/jkb_shopping/Public/public1/admin/css/editor/editor/attached/image/20151205/20151205120252_51503.jpg', '343.00', '343', '100', '此处填写商品图文详情！', '1449286845', '1449305154', '1449305154', '2', '1213445', '1', '2015121', '1449305154');
INSERT INTO `think_goods` VALUES ('2', '华为手机', '3000.00', '/jkb_shopping/Public/public1/admin/css/editor/editor/attached/image/20151205/20151205120252_51503.jpg', '30.00', '100', '0', '&lt;p&gt;\r\n	此处填写商品图文详情！\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&lt;img src=&quot;/jkb_shopping/Public/public1/admin/css/editor/editor/php/../attached/image/20151205/20151205120310_91705.jpg&quot; alt=&quot;&quot; /&gt;&lt;img src=&quot;/jkb_shopping/Public/public1/admin/css/editor/editor/php/../attached/image/20151205/20151205120311_11661.jpg&quot; alt=&quot;&quot; /&gt;&lt;img src=&quot;/jkb_shopping/Public/public1/admin/css/editor/editor/php/../attached/image/20151205/20151205120311_15498.jpg&quot; alt=&quot;&quot; /&gt;&lt;img src=&quot;/jkb_shopping/Public/public1/admin/css/editor/editor/php/../attached/image/20151205/20151205120311_10447.jpg&quot; alt=&quot;&quot; /&gt;&lt;img src=&quot;/jkb_shopping/Public/public1/admin/css/editor/editor/php/../attached/image/20151205/20151205120312_32236.jpg&quot; alt=&quot;&quot; /&gt;&lt;img src=&quot;/jkb_shopping/Public/public1/admin/css/editor/editor/php/../attached/image/20151205/20151205120312_82666.jpg&quot; alt=&quot;&quot; /&gt;&lt;img src=&quot;/jkb_shopping/Public/public1/admin/css/editor/editor/php/../attached/image/20151205/20151205120312_65629.jpg&quot; alt=&quot;&quot; /&gt;&lt;img src=&quot;/jkb_shopping/Public/public1/admin/css/editor/editor/php/../attached/image/20151205/20151205120312_12809.jpg&quot; alt=&quot;&quot; /&gt;&lt;img src=&quot;/jkb_shopping/Public/public1/admin/css/editor/editor/php/../attached/image/20151205/20151205120313_25325.jpg&quot; alt=&quot;&quot; /&gt;&lt;img src=&quot;/jkb_shopping/Public/public1/admin/css/editor/editor/php/../attached/image/20151205/20151205120313_32557.jpg&quot; alt=&quot;&quot; /&gt;&lt;img src=&quot;/jkb_shopping/Public/public1/admin/css/editor/editor/php/../attached/image/20151205/20151205120313_54412.jpg&quot; alt=&quot;&quot; /&gt;&lt;img src=&quot;/jkb_shopping/Public/public1/admin/css/editor/editor/php/../attached/image/20151205/20151205120313_78277.jpg&quot; alt=&quot;&quot; /&gt;&lt;img src=&quot;/jkb_shopping/Public/public1/admin/css/editor/editor/php/../attached/image/20151205/20151205120314_56911.jpg&quot; alt=&quot;&quot; /&gt;\r\n&lt;/p&gt;', '1449286846', '1449305154', '1449305154', '2', '232434', '2', '2015122', '1449305154');
INSERT INTO `think_goods` VALUES ('3', 'edsfr', '34223.00', '/jkb_shopping/Public/public1/admin/css/editor/editor/attached/image/20151205/20151205123940_38523.jpg', '32.00', '43242', '0', '此处填写商品图文详情！', '1449286847', '1449470960', '0', '0', null, null, '2015123', null);
INSERT INTO `think_goods` VALUES ('4', 'ewrw', '43532.00', '/jkb_shopping/Public/public1/admin/css/editor/editor/attached/image/20151205/20151205120252_51503.jpg', '342.00', '342', '0', '此处填写商品图文详情！', '1449286848', '0', '0', '0', null, null, '0', null);
INSERT INTO `think_goods` VALUES ('5', '324', '32432.00', '/jkb_shopping/Public/public1/admin/css/editor/editor/attached/image/20151205/20151205120252_51503.jpg', '23432.00', '423422', '0', '此处填写商品324图文详情！', '1449287738', '0', '0', '0', null, null, '0', null);
INSERT INTO `think_goods` VALUES ('6', '苹果手机', '6000.00', '/jkb_shopping/Public/public1/admin/css/editor/editor/attached/image/20151205/20151205173322_85602.jpg', '10.00', '600', '0', '&lt;p&gt;\r\n	&lt;img src=&quot;/jkb_shopping/Public/public1/admin/css/editor/editor/attached/image/20151205/20151205173346_63632.jpg&quot; alt=&quot;&quot; /&gt;此处填写商品图文详情！sdfresfretfetrew\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	尔特太热太热\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	而是通过惹人特温柔特务\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	的第三方是热水\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&lt;br /&gt;\r\n&lt;/p&gt;', '1449304449', '0', '0', '0', null, null, '0', null);
INSERT INTO `think_goods` VALUES ('7', '324', '32423.00', '/jkb_shopping/Public/public1/admin/css/editor/editor/attached/image/20151206/20151206110341_72520.jpg', '342.00', '32', '0', '此处填写商品图文详情！&lt;img src=&quot;/jkb_shopping/Public/public1/admin/css/editor/editor/php/../attached/image/20151206/20151206110356_20838.jpg&quot; alt=&quot;&quot; /&gt;&lt;img src=&quot;/jkb_shopping/Public/public1/admin/css/editor/editor/php/../attached/image/20151206/20151206110356_18687.jpg&quot; alt=&quot;&quot; /&gt;&lt;img src=&quot;/jkb_shopping/Public/public1/admin/css/editor/editor/php/../attached/image/20151206/20151206110357_41618.jpg&quot; alt=&quot;&quot; /&gt;&lt;img src=&quot;/jkb_shopping/Public/public1/admin/css/editor/editor/php/../attached/image/20151206/20151206110357_81589.jpg&quot; alt=&quot;&quot; /&gt;', '1449367442', '0', '0', '0', null, null, '0', null);
INSERT INTO `think_goods` VALUES ('8', '3243', '23432.00', '/jkb_shopping/Public/public1/admin/css/editor/editor/attached/image/20151206/20151206113313_83943.jpg', '33.00', '324', '0', '此处填写商品图文详情！&lt;img src=&quot;/jkb_shopping/Public/public1/admin/css/editor/editor/php/../attached/image/20151206/20151206113333_19190.jpg&quot; alt=&quot;&quot; /&gt;&lt;img src=&quot;/jkb_shopping/Public/public1/admin/css/editor/editor/php/../attached/image/20151206/20151206113334_52810.jpg&quot; alt=&quot;&quot; /&gt;&lt;img src=&quot;/jkb_shopping/Public/public1/admin/css/editor/editor/php/../attached/image/20151206/20151206113334_59833.png&quot; alt=&quot;&quot; /&gt;', '1449369219', '0', '0', '0', null, null, '0', null);
INSERT INTO `think_goods` VALUES ('9', '4234', '3242.00', '/jkb_shopping/Public/public1/admin/css/editor/editor/attached/image/20151206/20151206113851_30810.jpg', '34.00', '324', '23', '&lt;p&gt;\r\n	此处填写商品图文详情！\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&lt;img src=&quot;/jkb_shopping/Public/public1/admin/css/editor/editor/php/../attached/image/20151206/20151206113905_62204.jpg&quot; alt=&quot;&quot; /&gt;&lt;img src=&quot;/jkb_shopping/Public/public1/admin/css/editor/editor/php/../attached/image/20151206/20151206113905_99329.jpg&quot; alt=&quot;&quot; /&gt;&lt;img src=&quot;/jkb_shopping/Public/public1/admin/css/editor/editor/php/../attached/image/20151206/20151206113906_88983.png&quot; alt=&quot;&quot; /&gt;&lt;img src=&quot;/jkb_shopping/Public/public1/admin/css/editor/editor/php/../attached/image/20151206/20151206113906_84822.gif&quot; alt=&quot;&quot; /&gt;\r\n&lt;/p&gt;', '1449369550', '1449370097', '0', '1', null, '2', '2015129', null);

-- ----------------------------
-- Table structure for think_order
-- ----------------------------
DROP TABLE IF EXISTS `think_order`;
CREATE TABLE `think_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `notice_sn` varchar(255) NOT NULL,
  `create_time` int(11) NOT NULL,
  `pay_time` int(11) NOT NULL,
  `is_paid` int(11) NOT NULL COMMENT '0表示未支付，1表示支付',
  `user_id` int(11) NOT NULL,
  `goods_id` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `money` decimal(20,0) NOT NULL,
  `out_notice_sn` varchar(255) DEFAULT NULL,
  `lucky_number` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_order
-- ----------------------------
INSERT INTO `think_order` VALUES ('1', '20151208865', '1449305154', '1449305157', '1', '1', '1', '10', '10', '32432432535345444', '');
INSERT INTO `think_order` VALUES ('2', '20151208867', '1449305157', '1449305157', '1', '1', '9', '1', '34', '432535464654654', 'a:9:{s:5:\"appid\";s:18:\"wxb1889d12883a24e9\";s:9:\"appsecret\";s:32:\"f4625eacacb897c8ed9b14d6c335fd3e\";s:5:\"mchid\";s:10:\"1271560101\";s:9:\"partnerid\";s:21:\"1271560101@1271560101\";s:10:\"partnerkey\";s:6:\"493929\";s:3:\"key\";s:32:\"1234abcd1234abcd1234abcd1234abcd\";s:7:\"sslcert\";s:52:\"http://www.5188zc.com/system/cert/apiclient_cert.pem\";s:6:\"sslkey\";s:51:\"http://www.5188zc.com/system/cert/apiclient_key.pem\";s:4:\"type\";s:2:\"V3\";}');
INSERT INTO `think_order` VALUES ('3', '20151207767', '1449305157', '1449305157', '1', '2', '9', '5', '56', '543564643543', '');

-- ----------------------------
-- Table structure for think_user
-- ----------------------------
DROP TABLE IF EXISTS `think_user`;
CREATE TABLE `think_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `wx_openid` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_user
-- ----------------------------
INSERT INTO `think_user` VALUES ('1', '茂林', 'http://wx.qlogo.cn/mmopen/g3MonUZtNHkdmzicIlibx6iaFqAc56vxLSUfpb6n5WKSYVY0ChQKkiaJSgQ1dZuTOgvLLrhJbERQQ4eMsv84eavHiaiceqxibJxCfHe/0', '');
INSERT INTO `think_user` VALUES ('2', '小明', 'http://wx.qlogo.cn/mmopen/g3MonUZtNHkdmzicIlibx6iaFqAc56vxLSUfpb6n5WKSYVY0ChQKkiaJSgQ1dZuTOgvLLrhJbERQQ4eMsv84eavHiaiceqxibJxCfHe/0', '');
