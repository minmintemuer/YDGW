/*
Navicat MySQL Data Transfer

Source Server         : xampp
Source Server Version : 50611
Source Host           : localhost:3306
Source Database       : tb_ydgw

Target Server Type    : MYSQL
Target Server Version : 50611
File Encoding         : 65001

Date: 2017-03-25 22:16:31
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `tb_activety`
-- ----------------------------
DROP TABLE IF EXISTS `tb_activety`;
CREATE TABLE `tb_activety` (
  `activety_id` int(11) NOT NULL AUTO_INCREMENT,
  `activety_name` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '活动主题',
  `activety_content` text CHARACTER SET utf8 COMMENT '活动内容',
  `activety_start_time` int(11) DEFAULT NULL COMMENT '活动开始时间戳',
  `activety_end_time` int(11) DEFAULT NULL COMMENT '活动结束时间戳',
  `activety_crowd` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '面向人群',
  `activety_img` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `is_show` enum('0','1') CHARACTER SET utf8 DEFAULT '0',
  `activety_admin` int(11) DEFAULT NULL,
  `is_del` enum('0','1') CHARACTER SET utf8 DEFAULT '0',
  `activety_time` int(11) DEFAULT NULL,
  `activety_introduction` text CHARACTER SET utf8,
  PRIMARY KEY (`activety_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_activety
-- ----------------------------
INSERT INTO tb_activety VALUES ('3', '456', '<p>撒旦覅啥的看法和课件撒看见了啥的反馈菊花盛开的卷发好看啦收到付款了是阿卡看了撒交话费的艰苦拉萨航空界撒旦覅啥的看法和课件撒看见了啥的反馈菊花盛开的卷发好看啦收到付款了是阿卡看了撒交话费的艰苦拉萨航空界撒旦覅啥的看法和课件撒看见了啥的反馈菊花盛开的卷发好看啦收到付款了是阿卡看了撒交话费的艰苦拉萨航空界撒旦覅啥的看法和课件撒看见了啥的反馈菊花盛开的卷发好看啦收到付款了是阿卡看了撒交话费的艰苦拉萨航空界撒旦覅啥的看法和课件撒看见了啥的反馈菊花盛开的卷发好看啦收到付款了是阿卡看了撒交话费的艰苦拉萨航空界撒旦覅啥的看法和课件撒看见了啥的反馈菊花盛开的卷发好看啦收到付款了是阿卡看了撒交话费的艰苦拉萨航空界撒旦覅啥的看法和课件撒看见了啥的反馈菊花盛开的卷发好看啦收到付款了是阿卡看了撒交话费的艰苦拉萨航空界撒旦覅啥的看法和课件撒看见了啥的反馈菊花盛开的卷发好看啦收到付款了是阿卡看了撒交话费的艰苦拉萨航空界撒旦覅啥的看法和课件撒看见了啥的反馈菊花盛开的卷发好看啦收到付款了是阿卡看了撒交话费的艰苦拉萨航空界&nbsp;</p>', '1483200000', '1483286400', '1', '/production/image/image/2017-03-23/58d374132684d.jpg', '1', '3', '0', '1490252784', '活动摘要9');
INSERT INTO tb_activety VALUES ('4', '456', '<p>坷拉似的发可垃圾啊是劳动纠纷了撒旦覅啥的看法和课件撒看见了啥的反馈菊花盛开的卷发好看啦收到付款了是阿卡看了撒交话费的艰苦拉萨航空界撒旦覅啥的看法和课件撒看见了啥的反馈菊花盛开的卷发好看啦收到付款了是阿卡看了撒交话费的艰苦拉萨航空界撒旦覅啥的看法和课件撒看见了啥的反馈菊花盛开的卷发好看啦收到付款了是阿卡看了撒交话费的艰苦拉萨航空界撒旦覅啥的看法和课件撒看见了啥的反馈菊花盛开的卷发好看啦收到付款了是阿卡看了撒交话费的艰苦拉萨航空界撒旦覅啥的看法和课件撒看见了啥的反馈菊花盛开的卷发好看啦收到付款了是阿卡看了撒交话费的艰苦拉萨航空界撒旦覅啥的看法和课件撒看见了啥的反馈菊花盛开的卷发好看啦收到付款了是阿卡看了撒交话费的艰苦拉萨航空界撒旦覅啥的看法和课件撒看见了啥的反馈菊花盛开的卷发好看啦收到付款了是阿卡看了撒交话费的艰苦拉萨航空界撒旦覅啥的看法和课件撒看见了啥的反馈菊花盛开的卷发好看啦收到付款了是阿卡看了撒交话费的艰苦拉萨航空界撒旦覅啥的看法和课件撒看见了啥的反馈菊花盛开的卷发好看啦收到付款了是阿卡看了撒交话费的艰苦拉萨航空界撒旦覅啥的看法和课件撒看见了啥的反馈菊花盛开的卷发好看啦收到付款了是阿卡看了撒交话费的艰苦拉萨航空界撒旦覅啥的看法和课件撒看见了啥的反馈菊花盛开的卷发好看啦收到付款了是阿卡看了撒交话费的艰苦拉萨航空界撒旦覅啥的看法和课件撒看见了啥的反馈菊花盛开的卷发好看啦收到付款了是阿卡看了撒交话费的艰苦拉萨航空界撒旦覅啥的看法和课件撒看见了啥的反馈菊花盛开的卷发好看啦收到付款了是阿卡看了撒交话费的艰苦拉萨航空界撒旦覅啥的看法和课件撒看见了啥的反馈菊花盛开的卷发好看啦收到付款了是阿卡看了撒交话费的艰苦拉萨航空界撒旦覅啥的看法和课件撒看见了啥的反馈菊花盛开的卷发好看啦收到付款了是阿卡看了撒交话费的艰苦拉萨航空界撒旦覅啥的看法和课件撒看见了啥的反馈菊花盛开的卷发好看啦收到付款了是阿卡看了撒交话费的艰苦拉萨航空界撒旦覅啥的看法和课件撒看见了啥的反馈菊花盛开的卷发好看啦收到付款了是阿卡看了撒交话费的艰苦拉萨航空界撒旦覅啥的看法和课件撒看见了啥的反馈菊花盛开的卷发好看啦收到付款了是阿卡看了撒交话费的艰苦拉萨航空界撒旦覅啥的看法和课件撒看见了啥的反馈菊花盛开的卷发好看啦收到付款了是阿卡看了撒交话费的艰苦拉萨航空界撒旦覅啥的看法和课件撒看见了啥的反馈菊花盛开的卷发好看啦收到付款了是阿卡看了撒交话费的艰苦拉萨航空界</p>', '1483200000', '1483286400', '2', '/production/image/image/2017-03-23/58d374132684d.jpg', '1', '3', '0', '1490252829', '活动');
INSERT INTO tb_activety VALUES ('5', '456', '<p>阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见</p>', '1483200000', '1483372800', '3', '/production/image/image/2017-03-23/58d374132684d.jpg', '1', '3', '0', '1490252864', '45646');
INSERT INTO tb_activety VALUES ('6', '456', '<p>阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见</p>', '1483200000', '1483372800', '4', '/production/image/image/2017-03-23/58d374132684d.jpg', '1', '3', '0', '1490252864', '45646');
INSERT INTO tb_activety VALUES ('7', '456', '<p>阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见</p>', '1483200000', '1483372800', '5', '/production/image/image/2017-03-23/58d374132684d.jpg', '0', '3', '0', '1490252864', '45646');
INSERT INTO tb_activety VALUES ('8', '456', '<p>阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见</p>', '1483200000', '1483372800', '6', '/production/image/image/2017-03-23/58d374132684d.jpg', '0', '3', '0', '1490252864', '45646');
INSERT INTO tb_activety VALUES ('9', '456', '<p>阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见</p>', '1483200000', '1483372800', '7', '/production/image/image/2017-03-23/58d374132684d.jpg', '0', '3', '0', '1490252864', '45646');
INSERT INTO tb_activety VALUES ('10', '456', '<p>阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见阿斯蒂芬库里哈瞌睡的回复可见</p>', '1483200000', '1483372800', '8', '/production/image/image/2017-03-23/58d374132684d.jpg', '0', '3', '0', '1490252864', '45646');

-- ----------------------------
-- Table structure for `tb_class`
-- ----------------------------
DROP TABLE IF EXISTS `tb_class`;
CREATE TABLE `tb_class` (
  `class_id` int(11) NOT NULL AUTO_INCREMENT,
  `class_name` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '课程名称',
  `class_content` text CHARACTER SET utf8 COMMENT '课程内容',
  `class_price` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '课程价格',
  `class_teacher` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '教师名字',
  `class_time` int(11) DEFAULT NULL,
  `class_img` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `is_del` enum('0','1') CHARACTER SET utf8 DEFAULT '0',
  `class_introduction` text CHARACTER SET utf8,
  PRIMARY KEY (`class_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_class
-- ----------------------------
INSERT INTO tb_class VALUES ('6', 'PHP', '<p>阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了</p>', '200', '曾鑫', '1490253518', '/production/image/image/2017-03-23/58d376c5a16ae.jpg', '0', '456');
INSERT INTO tb_class VALUES ('7', 'PHP', '<p>阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了</p>', '200', '蔡正军', '1490253518', '/production/image/image/2017-03-23/58d376c5a16ae.jpg', '0', '456');
INSERT INTO tb_class VALUES ('8', 'PHP', '<p>阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了</p>', '200', '胡钱玲', '1490253518', '/production/image/image/2017-03-23/58d376c5a16ae.jpg', '0', '456');
INSERT INTO tb_class VALUES ('9', 'PHP', '<p>阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了</p>', '200', '李顺', '1490253518', '/production/image/image/2017-03-23/58d376c5a16ae.jpg', '0', '456');
INSERT INTO tb_class VALUES ('10', 'PHP', '<p>阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了</p>', '200', '张玉亭', '1490253518', '/production/image/image/2017-03-23/58d376c5a16ae.jpg', '0', '456');
INSERT INTO tb_class VALUES ('11', 'PHP', '<p>阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了</p>', '200', '老大', '1490253518', '/production/image/image/2017-03-23/58d376c5a16ae.jpg', '0', '456');
INSERT INTO tb_class VALUES ('12', 'PHP', '<p>阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了</p>', '300', '刘云鹏', '1490253518', '/production/image/image/2017-03-23/58d376c5a16ae.jpg', '0', '456');
INSERT INTO tb_class VALUES ('13', 'PHP', '<p>阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了阿斯蒂芬就卡死的付款了</p>', '500', '师傅', '1490253518', '/production/image/image/2017-03-23/58d376c5a16ae.jpg', '0', '456');

-- ----------------------------
-- Table structure for `tb_customer_service`
-- ----------------------------
DROP TABLE IF EXISTS `tb_customer_service`;
CREATE TABLE `tb_customer_service` (
  `customer_service_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_service_name` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '客服名称',
  `customer_service_tel` varchar(11) DEFAULT NULL COMMENT '客服电话',
  `customer_service_user` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '客户登录名',
  `customer_service_password` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '客户登录密码',
  `customer_service_sale` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '客户密码盐值',
  `is_use` enum('0','1') CHARACTER SET utf8 DEFAULT '0',
  `is_shenhe` enum('0','1') CHARACTER SET utf8 DEFAULT '0' COMMENT '通过管理员审核没有',
  `customer_service_id_number` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '身份证',
  `is_del` enum('0','1') CHARACTER SET utf8 DEFAULT '0',
  PRIMARY KEY (`customer_service_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_customer_service
-- ----------------------------
INSERT INTO tb_customer_service VALUES ('0', '123', '15736369960', 'aa', '957a78f5ddc130a3ff359acf26e5805e202cb962ac59075b964b07152d234b70', '957a78f5ddc130a3ff359acf26e5805e', '1', '1', '500228199709010', '0');

-- ----------------------------
-- Table structure for `tb_img`
-- ----------------------------
DROP TABLE IF EXISTS `tb_img`;
CREATE TABLE `tb_img` (
  `img_id` int(11) NOT NULL AUTO_INCREMENT,
  `img_url` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `is_del` enum('0','1') CHARACTER SET utf8 DEFAULT '0',
  `img_title` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `is_show` enum('0','1') CHARACTER SET utf8 DEFAULT '0',
  PRIMARY KEY (`img_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_img
-- ----------------------------
INSERT INTO tb_img VALUES ('7', '/production/image/image/2017-03-23/58d37aee9ff1c.jpg', '0', '公司活动', '0');
INSERT INTO tb_img VALUES ('8', '/production/image/image/2017-03-23/58d37afc382b0.jpg', '0', '首页大图2', '0');
INSERT INTO tb_img VALUES ('9', '/production/image/image/2017-03-23/58d38171e813b.jpg', '0', '公司活动', '1');
INSERT INTO tb_img VALUES ('10', '/production/image/image/2017-03-23/58d3817e54d2f.jpg', '0', '行业资讯', '1');
INSERT INTO tb_img VALUES ('11', '/production/image/image/2017-03-23/58d3818eb5ae3.jpg', '0', '教师风采', '1');

-- ----------------------------
-- Table structure for `tb_introduction`
-- ----------------------------
DROP TABLE IF EXISTS `tb_introduction`;
CREATE TABLE `tb_introduction` (
  `introduction_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '简介ID',
  `introduction_content` text CHARACTER SET utf8 NOT NULL COMMENT '简介内容',
  `introduction_time` int(11) DEFAULT NULL COMMENT '简介时间戳',
  `introduction_admin_id` int(11) DEFAULT NULL COMMENT '简介上传人',
  `is_show` enum('0','1') DEFAULT '0',
  `is_del` enum('0','1') CHARACTER SET utf8 DEFAULT '0',
  PRIMARY KEY (`introduction_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_introduction
-- ----------------------------
INSERT INTO tb_introduction VALUES ('19', '<p>啊开了士大夫艰苦撒谎的看法卡拉看见撒旦回复快乐哈撒看见就看撒好的发啊开了士大夫艰苦撒谎的看法卡拉看见撒旦回复快乐哈撒看见就看撒好的发啊开了士大夫艰苦撒谎的看法卡拉看见撒旦回复快乐哈撒看见就看撒好的发啊开了士大夫艰苦撒谎的看法卡拉看见撒旦回复快乐哈撒看见就看撒好的发啊开了士大夫艰苦撒谎的看法卡拉看见撒旦回复快乐哈撒看见就看撒好的发啊开了士大夫艰苦撒谎的看法卡拉看见撒旦回复快乐哈撒看见就看撒好的发啊开了士大夫艰苦撒谎的看法卡拉看见撒旦回复快乐哈撒看见就看撒好的发啊开了士大夫艰苦撒谎的看法卡拉看见撒旦回复快乐哈撒看见就看撒好的发啊开了士大夫艰苦撒谎的看法卡拉看见撒旦回复快乐哈撒看见就看撒好的发啊开了士大夫艰苦撒谎的看法卡拉看见撒旦回复快乐哈撒看见就看撒好的发啊开了士大夫艰苦撒谎的看法卡拉看见撒旦回复快乐哈撒看见就看撒好的发啊开了士大夫艰苦撒谎的看法卡拉看见撒旦回复快乐哈撒看见就看撒好的发啊开了士大夫艰苦撒谎的看法卡拉看见撒旦回复快乐哈撒看见就看撒好的发啊开了士大夫艰苦撒谎的看法卡拉看见撒旦回复快乐哈撒看见就看撒好的发啊开了士大夫艰苦撒谎的看法卡拉看见撒旦回复快乐哈撒看见就看撒好的发啊开了士大夫艰苦撒谎的看法卡拉看见撒旦回复快乐哈撒看见就看撒好的发啊开了士大夫艰苦撒谎的看法卡拉看见撒旦回复快乐哈撒看见就看撒好的发啊开了士大夫艰苦撒谎的看法卡拉看见撒旦回复快乐哈撒看见就看撒好的发啊开了士大夫艰苦撒谎的看法卡拉看见撒旦回复快乐哈撒看见就看撒好的发啊开了士大夫艰苦撒谎的看法卡拉看见撒旦回复快乐哈撒看见就看撒好的发啊开了士大夫艰苦撒谎的看法卡拉看见撒旦回复快乐哈撒看见就看撒好的发</p>', '1490252737', '3', '0', '0');
INSERT INTO tb_introduction VALUES ('20', '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style: none; color: rgb(79, 93, 65); font-family: Simsun; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255); text-indent: 37px;\"><span style=\"font-family: 宋体; font-size: 19px;\">一提到“沙漠”，大家的脑海里会浮现出什么样的情景呢？寸草不生的干旱之地？没有生物的死亡世界？其实，都不是的，在那里，有美轮美奂的自然景象，也有数以万计的珍稀植物和动物。</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style: none; color: rgb(79, 93, 65); font-family: Simsun; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255); text-indent: 37px;\"><span style=\"font-family: 宋体; font-size: 19px;\"><img src=\"/ueditor/php/upload/image/20170323/1490254783124267.jpg\" title=\"1490254783124267.jpg\" alt=\"下载.jpg\"/></span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style: none; color: rgb(79, 93, 65); font-family: Simsun; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255); text-indent: 37px;\"><span style=\"font-family: 宋体; font-size: 19px;\"><br/></span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style: none; color: rgb(79, 93, 65); font-family: Simsun; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255); text-indent: 37px;\"><span style=\"font-family: 宋体; font-size: 19px;\">一望无际的沙漠里，简直就是一个极度喧嚣的世界，一幕幕优美的画面和热闹的舞台剧总是在轮番登场，令人心醉神怡。可是，它们的生存，却给人们留下了太多、太深、太久远的启示和忠告。不信？你看，在沙漠里，有一种植物叫胡杨，它是沙漠地区特有的珍贵森林资源，因其超顽强的生命力，还被人们赞誉为“长着千年不死，死后千年不倒，倒地千年不腐”的英雄树。</span><span style=\"font-family: 宋体; font-size: 19px;\">为了近观胡杨的独特风范，我和我的同伴曾走向塔克拉玛干沙漠的深处，在那荒凉的戈壁滩里，映入眼帘的是晶莹剔透的飞沙，迎接我们的是难忍的饥渴和孤独，以及炽热的煎熬，动物、植被的残骸四处呈现，而胡杨则展现出与天地抗争的勇气和执着！</span><span style=\"font-family: 宋体; font-size: 20px;\">它们顽强的生命，实在是悲壮又令人惊叹！</span><span style=\"font-family: 宋体; font-size: 19px;\">还有一种叫百岁兰的植物，它一生只生长两片</span><span style=\"font-family: 宋体; font-size: 19px;\">叶子，但每一片叶子都可以活到百余年甚至上千年的时间；当然，譬如</span><span style=\"font-family: 宋体; font-size: 20px;\">仙人掌、</span><span style=\"font-family: &quot;Times New Roman&quot;; font-size: 20px;\"><span style=\"font-family: 宋体;\">梭梭</span></span><span style=\"font-family: 宋体; font-size: 20px;\">、</span><span style=\"font-family: &quot;Times New Roman&quot;; font-size: 20px;\"><span style=\"font-family: 宋体;\">红柳树</span></span><span style=\"font-family: 宋体; font-size: 20px;\">……无不让人惊奇和赞颂！</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style: none; color: rgb(79, 93, 65); font-family: Simsun; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255); text-indent: 37px;\"><span style=\"font-family: 宋体; font-size: 19px;\">在沙漠里，更生活着一群特殊的动物，如蜥蜴、骆驼、蒙古原羚、蛙、兔子、鼠类、蛇……你知道吗？蒙古原羚为了寻找水源会迁徒数百千米；有一种生活在沙漠里的蛙，如果没有下雨，它们能够在土壤里静静地休眠好几年，一旦雨落，马上爬出来在水里产卵；骆驼也是沙漠中的勇者，它们可以在沙漠中几天不吃不喝，能闻出地下流淌的水流，能在逆风中嗅到一百千米外的青草，能记得十几年甚至几十年前走过的路、经历的环境以及役用过它们的你，可它们从来不彰显自己对人的超长记忆和由此而生的感情依恋，从来都不彰显……它们就是那么的平凡、不起眼，却都有着勇者才具有的超强毅力。这些动物，平凡而伟大，相比起人类，真的就是道高一尺，魔高一丈。</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style: none; color: rgb(79, 93, 65); font-family: Simsun; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255); text-indent: 37px;\"><span style=\"font-family: 宋体; font-size: 19px;\">沙漠里的动植物，它们总会利用时机，总能创造时机，会感恩周围的世界，因为它们很清楚自己恶劣的生存环境，也接纳随时可能失去一切的事实，不管人生的得与失，总是要让自已珍贵的生命里充满了亮丽与光彩；它们从来不为过去掉泪，努力地让自己活出的生命得到更多的精彩和荣光；它们的青春常在！它们的青春永恒！它们都是地球上最美的天使，因为它们把自己看得很轻！更因为它们懂得珍惜！</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style: none; color: rgb(79, 93, 65); font-family: Simsun; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255); text-indent: 37px;\"><span style=\"font-family: 宋体; font-size: 19px;\">沙漠里是个奇妙的世界，关于它们各自的形成，众说云云，</span><span style=\"font-family: 宋体; font-size: 19px;\">传说很久以前，一位神仙给了沙漠人民一柄金斧子</span><span style=\"font-family: 宋体; font-size: 19px;\">和</span><span style=\"font-family: 宋体; font-size: 19px;\">一把金钥匙，金斧子用来劈开阿尔泰山，引来天山的雪水，再用金钥匙打开塔木里的宝库，让沙漠得到生命的宝藏；不幸的是钥匙被神仙的小女儿在护送的时候丢失，从此盆地中央就成了塔克拉玛干沙漠</span><span style=\"font-family: 宋体; font-size: 19px;\">。</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style: none; color: rgb(79, 93, 65); font-family: Simsun; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255); text-indent: 45px;\"><span style=\"font-family: 宋体; font-size: 19px;\">看到这些，你的内心是不是有了更多的感慨和感动？和这些珍贵又顽强的生命相比，我们应该对自己反思些什么？是不是更应该马上行动起来，脚踏实地地做些什么呢？</span><span style=\"font-family: 宋体; font-size: 19px;\">（作者简介：黄宏宣，男，中国散文家协会会员，中国东方作家创作中心会员，江苏省作家协会会员，国家三级创作员，在各类刊物、网站上发表作品</span><span style=\"font-family: 宋体; font-size: 19px;\">千</span><span style=\"font-family: 宋体; font-size: 19px;\">余篇，十多篇散文在各级评比中获奖，并出版散文集《我这十年》和长篇小说《深深叹息》）</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style: none; color: rgb(79, 93, 65); font-family: Simsun; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255); text-indent: 37px;\"><span style=\"font-family: 宋体; font-size: 19px;\">&nbsp;</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style: none; color: rgb(79, 93, 65); font-family: Simsun; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);\"><span style=\"font-family: 宋体; font-size: 19px;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style=\"font-family: 宋体; font-size: 19px;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style=\"font-family: 宋体; font-size: 19px;\">&nbsp;&nbsp;</span><span style=\"font-family: 宋体; font-size: 19px;\">南京育英第二外国语学校（大厂区育英路</span><span style=\"font-family: 宋体; font-size: 19px;\">57</span><span style=\"font-family: 宋体; font-size: 19px;\">号）</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style: none; color: rgb(79, 93, 65); font-family: Simsun; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255); text-indent: 37px;\"><span style=\"font-family: 宋体; font-size: 19px;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style=\"font-family: 宋体; font-size: 19px;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style=\"font-family: 宋体; font-size: 19px;\">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style=\"font-family: 宋体; font-size: 19px;\">邮编：</span><span style=\"font-family: 宋体; font-size: 19px;\">210044 &nbsp;</span><span style=\"font-family: 宋体; font-size: 19px;\">电话：</span><span style=\"font-family: 宋体; font-size: 19px;\">13057576807</span></p><p><br/></p>', '1490254791', '3', '1', '0');

-- ----------------------------
-- Table structure for `tb_manager`
-- ----------------------------
DROP TABLE IF EXISTS `tb_manager`;
CREATE TABLE `tb_manager` (
  `manager_id` int(11) NOT NULL AUTO_INCREMENT,
  `manager_name` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '管理员名称',
  `manager_user` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '管理员登录号',
  `manager_password` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '管理员密码',
  `manager_sale` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '管理员密码盐值',
  `is_del` enum('0','1') CHARACTER SET utf8 DEFAULT '0',
  PRIMARY KEY (`manager_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_manager
-- ----------------------------
INSERT INTO tb_manager VALUES ('3', '二胖', 'admin', 'c87a522bbafe29e239b7cfadfeb8ca50202cb962ac59075b964b07152d234b70', 'c87a522bbafe29e239b7cfadfeb8ca50', '0');

-- ----------------------------
-- Table structure for `tb_news`
-- ----------------------------
DROP TABLE IF EXISTS `tb_news`;
CREATE TABLE `tb_news` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `news_categroy` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '新闻标题',
  `news_hits` int(11) DEFAULT NULL COMMENT '点击量',
  `news_content` text CHARACTER SET utf8 COMMENT '内容',
  `news_img` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '图片',
  `news_time` int(11) DEFAULT NULL COMMENT '更新时间',
  `news_admin` int(11) DEFAULT NULL COMMENT '更新人ID',
  `is_show` enum('0','1') DEFAULT '0',
  `is_del` enum('0','1') CHARACTER SET utf8 DEFAULT '0',
  `news_introduction` text CHARACTER SET utf8,
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_news
-- ----------------------------
INSERT INTO tb_news VALUES ('14', '新闻1', null, '<p>这是测试数据1</p>', '/production/image/image/2017-03-23/58d37259d1686.jpg', '1490252394', '3', '1', '0', '新闻摘要1');
INSERT INTO tb_news VALUES ('15', '新闻2', null, '<p>测试数据2</p>', '/production/image/image/2017-03-23/58d372c4cbc84.jpg', '1490252490', '3', '1', '0', '新闻摘要2');
INSERT INTO tb_news VALUES ('16', '新闻', null, '<p><sub>测试数据3</sub><br/></p>', '/production/image/image/2017-03-23/58d372db82fbe.jpg', '1490252525', '3', '1', '0', '新闻摘要3');
INSERT INTO tb_news VALUES ('17', '新闻4', null, '<p>测试数据4</p><p>3</p>', '/production/image/image/2017-03-23/58d372fe1be01.jpg', '1490252553', '3', '0', '0', '新闻摘要4');
INSERT INTO tb_news VALUES ('18', '新闻', null, '<p>啊士大夫金龙卡</p>', '/production/image/image/2017-03-23/58d373200c99d.jpg', '1490252580', '3', '0', '0', '新闻摘要5');
INSERT INTO tb_news VALUES ('19', '新闻', null, '<p>撒地方撒地方啊是&nbsp;</p>', '/production/image/image/2017-03-23/58d37335a3079.jpg', '1490252602', '3', '0', '0', '新闻摘要6');
INSERT INTO tb_news VALUES ('20', '新闻', null, '<p>撒地方撒旦飞洒的</p>', '/production/image/image/2017-03-23/58d3734e0b47c.jpg', '1490252640', '3', '0', '0', '新闻摘要7');
INSERT INTO tb_news VALUES ('21', '564', '1', '<p>撒地方阿斯蒂芬阿斯顿发射点发射点</p>', '/production/image/image/2017-03-23/58d3736c7459d.jpg', '1490252657', '3', '0', '0', '新闻摘要8');
INSERT INTO tb_news VALUES ('22', '564654', '1', '<p>阿斯蒂芬阿历克斯酱豆腐卡拉斯的</p>', '/production/image/image/2017-03-23/58d373811dd94.jpg', '1490252677', '3', '0', '0', '新闻摘要9');
INSERT INTO tb_news VALUES ('23', '新闻123456', '2', '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style: none; color: rgb(79, 93, 65); font-family: Simsun; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255); text-indent: 37px;\"><span style=\"font-family: 宋体; font-size: 19px;\">一提到“沙漠”，大家的脑海里会浮现出什么样的情景呢？寸草不生的干旱之地？没有生物的死亡世界？其实，都不是的，在那里，有美轮美奂的自然景象，也有数以万计的珍稀植物和动物。</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style: none; color: rgb(79, 93, 65); font-family: Simsun; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255); text-indent: 37px;\"><span style=\"font-family: 宋体; font-size: 19px;\"><img src=\"/ueditor/php/upload/image/20170323/1490255103604037.jpg\" title=\"1490255103604037.jpg\" alt=\"下载.jpg\"/></span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style: none; color: rgb(79, 93, 65); font-family: Simsun; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255); text-indent: 37px;\"><span style=\"font-family: 宋体; font-size: 19px;\">一望无际的沙漠里，简直就是一个极度喧嚣的世界，一幕幕优美的画面和热闹的舞台剧总是在轮番登场，令人心醉神怡。可是，它们的生存，却给人们留下了太多、太深、太久远的启示和忠告。不信？你看，在沙漠里，有一种植物叫胡杨，它是沙漠地区特有的珍贵森林资源，因其超顽强的生命力，还被人们赞誉为“长着千年不死，死后千年不倒，倒地千年不腐”的英雄树。</span><span style=\"font-family: 宋体; font-size: 19px;\">为了近观胡杨的独特风范，我和我的同伴曾走向塔克拉玛干沙漠的深处，在那荒凉的戈壁滩里，映入眼帘的是晶莹剔透的飞沙，迎接我们的是难忍的饥渴和孤独，以及炽热的煎熬，动物、植被的残骸四处呈现，而胡杨则展现出与天地抗争的勇气和执着！</span><span style=\"font-family: 宋体; font-size: 20px;\">它们顽强的生命，实在是悲壮又令人惊叹！</span><span style=\"font-family: 宋体; font-size: 19px;\">还有一种叫百岁兰的植物，它一生只生长两片</span><span style=\"font-family: 宋体; font-size: 19px;\">叶子，但每一片叶子都可以活到百余年甚至上千年的时间；当然，譬如</span><span style=\"font-family: 宋体; font-size: 20px;\">仙人掌、</span><span style=\"font-family: &quot;Times New Roman&quot;; font-size: 20px;\"><span style=\"font-family: 宋体;\">梭梭</span></span><span style=\"font-family: 宋体; font-size: 20px;\">、</span><span style=\"font-family: &quot;Times New Roman&quot;; font-size: 20px;\"><span style=\"font-family: 宋体;\">红柳树</span></span><span style=\"font-family: 宋体; font-size: 20px;\">……无不让人惊奇和赞颂！</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style: none; color: rgb(79, 93, 65); font-family: Simsun; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255); text-indent: 37px;\"><span style=\"font-family: 宋体; font-size: 19px;\">在沙漠里，更生活着一群特殊的动物，如蜥蜴、骆驼、蒙古原羚、蛙、兔子、鼠类、蛇……你知道吗？蒙古原羚为了寻找水源会迁徒数百千米；有一种生活在沙漠里的蛙，如果没有下雨，它们能够在土壤里静静地休眠好几年，一旦雨落，马上爬出来在水里产卵；骆驼也是沙漠中的勇者，它们可以在沙漠中几天不吃不喝，能闻出地下流淌的水流，能在逆风中嗅到一百千米外的青草，能记得十几年甚至几十年前走过的路、经历的环境以及役用过它们的你，可它们从来不彰显自己对人的超长记忆和由此而生的感情依恋，从来都不彰显……它们就是那么的平凡、不起眼，却都有着勇者才具有的超强毅力。这些动物，平凡而伟大，相比起人类，真的就是道高一尺，魔高一丈。</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style: none; color: rgb(79, 93, 65); font-family: Simsun; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255); text-indent: 37px;\"><span style=\"font-family: 宋体; font-size: 19px;\">沙漠里的动植物，它们总会利用时机，总能创造时机，会感恩周围的世界，因为它们很清楚自己恶劣的生存环境，也接纳随时可能失去一切的事实，不管人生的得与失，总是要让自已珍贵的生命里充满了亮丽与光彩；它们从来不为过去掉泪，努力地让自己活出的生命得到更多的精彩和荣光；它们的青春常在！它们的青春永恒！它们都是地球上最美的天使，因为它们把自己看得很轻！更因为它们懂得珍惜！</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style: none; color: rgb(79, 93, 65); font-family: Simsun; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255); text-indent: 37px;\"><span style=\"font-family: 宋体; font-size: 19px;\">沙漠里是个奇妙的世界，关于它们各自的形成，众说云云，</span><span style=\"font-family: 宋体; font-size: 19px;\">传说很久以前，一位神仙给了沙漠人民一柄金斧子</span><span style=\"font-family: 宋体; font-size: 19px;\">和</span><span style=\"font-family: 宋体; font-size: 19px;\">一把金钥匙，金斧子用来劈开阿尔泰山，引来天山的雪水，再用金钥匙打开塔木里的宝库，让沙漠得到生命的宝藏；不幸的是钥匙被神仙的小女儿在护送的时候丢失，从此盆地中央就成了塔克拉玛干沙漠</span><span style=\"font-family: 宋体; font-size: 19px;\">。</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style: none; color: rgb(79, 93, 65); font-family: Simsun; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255); text-indent: 45px;\"><span style=\"font-family: 宋体; font-size: 19px;\">看到这些，你的内心是不是有了更多的感慨和感动？和这些珍贵又顽强的生命相比，我们应该对自己反思些什么？是不是更应该马上行动起来，脚踏实地地做些什么呢？</span><span style=\"font-family: 宋体; font-size: 19px;\">（作者简介：黄宏宣，男，中国散文家协会会员，中国东方作家创作中心会员，江苏省作家协会会员，国家三级创作员，在各类刊物、网站上发表作品</span><span style=\"font-family: 宋体; font-size: 19px;\">千</span><span style=\"font-family: 宋体; font-size: 19px;\">余篇，十多篇散文在各级评比中获奖，并出版散文集《我这十年》和长篇小说《深深叹息》）</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style: none; color: rgb(79, 93, 65); font-family: Simsun; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255); text-indent: 37px;\"><span style=\"font-family: 宋体; font-size: 19px;\">&nbsp;</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style: none; color: rgb(79, 93, 65); font-family: Simsun; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);\"><span style=\"font-family: 宋体; font-size: 19px;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style=\"font-family: 宋体; font-size: 19px;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style=\"font-family: 宋体; font-size: 19px;\">&nbsp;&nbsp;</span><span style=\"font-family: 宋体; font-size: 19px;\">南京育英第二外国语学校（大厂区育英路</span><span style=\"font-family: 宋体; font-size: 19px;\">57</span><span style=\"font-family: 宋体; font-size: 19px;\">号）</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; list-style: none; color: rgb(79, 93, 65); font-family: Simsun; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255); text-indent: 37px;\"><span style=\"font-family: 宋体; font-size: 19px;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style=\"font-family: 宋体; font-size: 19px;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style=\"font-family: 宋体; font-size: 19px;\">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style=\"font-family: 宋体; font-size: 19px;\">邮编：</span><span style=\"font-family: 宋体; font-size: 19px;\">210044 &nbsp;</span><span style=\"font-family: 宋体; font-size: 19px;\">电话：</span><span style=\"font-family: 宋体; font-size: 19px;\">13057576807</span></p><p><br/></p>', '/production/image/image/2017-03-23/58d37cef740d6.jpg', '1490255107', '3', '0', '0', '这是新闻123456');
INSERT INTO tb_news VALUES ('24', '新闻新闻123321', '9', '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; line-height: 34px; color: rgb(76, 75, 75); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);\">&nbsp;重庆优大文化传播有限公司，简称：优大文化，由诸辉、贾斌、郑建辉、秦文龙发起并联合创办，方永建、汤小英、高鹏等高层管理相继加入。公司位于重庆市南岸区长江国际写字楼。<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 优大文化一直秉持着五年内帮助十万学员实现财富自由这一愿景，坚持以为社会传播信用，传播财商，为选择相信我们的客户创造价值为宗旨，帮助更多信用卡用户提升信用等级，根据学员自身信用情况打造个人信用资产0-300万不等；帮助小微企业规划企业信用打造备用资金0-1000万不等，解决企业出现的资金链断裂的问题，帮助企业上市。</p><p><img src=\"/ueditor/php/upload/image/20170323/1490256512520254.jpg\"/><span style=\"color: rgb(76, 75, 75); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\"></span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; line-height: 34px; color: rgb(76, 75, 75); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);\">&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 当今世界经济正在发生巨变，经济全球化与一体化已成为不可逆转的趋势。这是一个巨变的时代。从“商品稀缺”到“商品过剩”只用了短短不到二十年时间。而还没适应“生产过剩”的企业家们又将迎来更大的一波“资本过剩”的浪潮。过去所有的成功经验，今天都将成为你失败的根源。时代变革注定会让世界财富重新分配。如何在变革中应对企业的今日和未来？如何让你的资产实现几何级数的增长？在中国金融市场不断开放，推进改革中，优大文化应运而生。<br/>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 秉持着五年内帮助十万学员实现财富自由这一愿景，优大文化每月都会在重庆各地举办大型活动——财商解码专场，金融巨头、经济学家、企业巨子齐聚一堂、激荡思想、规划未来。直接影响人数超过数十万人，VIP学员超过上万人，代理商遍布北京、上海、深圳、武汉、成都的等36个省市。</p><p><img src=\"/ueditor/php/upload/image/20170323/1490256513983534.jpg\"/><span style=\"color: rgb(76, 75, 75); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\"></span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; line-height: 34px; color: rgb(76, 75, 75); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);\">&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 肩负实现财富自由的使命，为中国亿万企业家掀起金融的神秘面纱。专业，是优大文化唯一致胜的法宝；创新，才能永保公司的市场竞争力。为了将金融的智慧更系统直接的影响中国的企业家，优大文化的导师团先后研发出：《信用财商~信用融资0-1000万》等涉及投资、融资、资本运作等领域的专业课程。让企业通过专业系统的课程培训，直接、有效、全面的认知金融的核心，帮助中国企业走出经济寒冬。在优大文化的会场里，有思考，有激动，有欢笑，也有喜悦的泪水。一张张收获的面孔汇聚成为优大文化腾飞的翅膀，也汇聚成所有企业家的财富梦想。<br/>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 在中国金融市场大开放，大变革的今天，优大文化人锐意进取，不断创新，为中国的企业家奉献出更多的商业智慧，让更多的企业家实现真正的财富自由。面向未来，所有优大文化人始终向着5年内帮助十万学员实现财富自由这一愿景坚实前行。</p><p><br/></p>', '/production/image/image/2017-03-23/58d382653afee.jpg', '1490256514', '3', '1', '0', '新闻新闻新闻123321');

-- ----------------------------
-- Table structure for `tb_order`
-- ----------------------------
DROP TABLE IF EXISTS `tb_order`;
CREATE TABLE `tb_order` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `class_id` int(11) DEFAULT NULL COMMENT '课程ID',
  `tourists_id` int(11) DEFAULT NULL COMMENT '游客ID',
  `customer_service_id` int(11) DEFAULT NULL COMMENT '客服处理ID',
  `is_chuli` enum('1','0') CHARACTER SET utf8 DEFAULT '0',
  `is_del` enum('0','1') CHARACTER SET utf8 DEFAULT '0',
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_order
-- ----------------------------

-- ----------------------------
-- Table structure for `tb_seo`
-- ----------------------------
DROP TABLE IF EXISTS `tb_seo`;
CREATE TABLE `tb_seo` (
  `seo_keyword` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '关键字',
  `seo_author` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '作者',
  `seo_id` int(11) NOT NULL AUTO_INCREMENT,
  `seo_description` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `seo_live_entry` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '直播入口 地址',
  `seo_wechat` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '微信公众号图片',
  `seo_online_qq` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '在线客服qq',
  PRIMARY KEY (`seo_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_seo
-- ----------------------------
INSERT INTO tb_seo VALUES ('优大', '蔡正军', '1', '优大官网', 'http://localhost/company/YD/', '/production/image/image/2017-03-25/58d6755a258ef.jpg', '1634621150');

-- ----------------------------
-- Table structure for `tb_soft_text`
-- ----------------------------
DROP TABLE IF EXISTS `tb_soft_text`;
CREATE TABLE `tb_soft_text` (
  `soft_text_id` int(11) NOT NULL AUTO_INCREMENT,
  `soft_text_img` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `soft_text_admin` int(11) DEFAULT NULL COMMENT '鸡汤更新管理员ID',
  `soft_text_content` text CHARACTER SET utf8,
  `soft_text_time` int(11) DEFAULT NULL COMMENT '更新时间戳',
  `is_show` enum('1','0') CHARACTER SET utf8 DEFAULT '0',
  `soft_text_title` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `is_del` enum('0','1') CHARACTER SET utf8 DEFAULT '0',
  `soft_text_introduction` text CHARACTER SET utf8,
  PRIMARY KEY (`soft_text_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_soft_text
-- ----------------------------
INSERT INTO tb_soft_text VALUES ('5', '/production/image/image/2017-03-23/58d377b14a09f.jpg', '3', '<p><sup><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span></sup><br/></p>', '1490253755', '1', '案例', '0', '4564654');
INSERT INTO tb_soft_text VALUES ('6', '/production/image/image/2017-03-23/58d377b14a09f.jpg', '3', '<span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span></sup><br/></p>', '1490253755', '1', '案例', '0', '4564654');
INSERT INTO tb_soft_text VALUES ('7', '/production/image/image/2017-03-23/58d377b14a09f.jpg', '3', '<span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span></sup><br/></p>', '1490253755', '1', '案例', '0', '4564654');
INSERT INTO tb_soft_text VALUES ('8', '/production/image/image/2017-03-23/58d377b14a09f.jpg', '3', '<span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span></sup><br/></p>', '1490253755', '1', '案例', '0', '4564654');
INSERT INTO tb_soft_text VALUES ('9', '/production/image/image/2017-03-23/58d377b14a09f.jpg', '3', '<span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span></sup><br/></p>', '1490253755', '0', '案例', '0', '4564654');
INSERT INTO tb_soft_text VALUES ('10', '/production/image/image/2017-03-23/58d377b14a09f.jpg', '3', '<span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span></sup><br/></p>', '1490253755', '0', '案例', '0', '4564654');
INSERT INTO tb_soft_text VALUES ('11', '/production/image/image/2017-03-23/58d377b14a09f.jpg', '3', '<span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span></sup><br/></p>', '1490253755', '0', '案例', '0', '4564654');
INSERT INTO tb_soft_text VALUES ('12', '/production/image/image/2017-03-23/58d377b14a09f.jpg', '3', '<span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span><span style=\"font-size: 13.3333px;\">阿斯蒂芬阿斯蒂芬</span></sup><br/></p>', '1490253755', '0', '案例', '0', '4564654');
INSERT INTO tb_soft_text VALUES ('13', '/production/image/image/2017-03-25/58d612524d7af.jpg', null, '<p>测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据测试数据</p>', '1490424430', '0', 'jsajdf', '0', '蔡正军 测试个');

-- ----------------------------
-- Table structure for `tb_teacher`
-- ----------------------------
DROP TABLE IF EXISTS `tb_teacher`;
CREATE TABLE `tb_teacher` (
  `teacher_id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_name` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '教师名字',
  `teacher_features` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '教师特点',
  `teacher_class_name` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '课程名',
  `teacher_img` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '教师头像',
  `is_del` enum('0','1') CHARACTER SET utf8 DEFAULT '0',
  `teacher_introduction` text CHARACTER SET utf8,
  PRIMARY KEY (`teacher_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_teacher
-- ----------------------------
INSERT INTO tb_teacher VALUES ('5', '李顺', '<p>asdf asdf sad sadf&nbsp;asdf asdf sad sadf&nbsp;asdf asdf sad sadf&nbsp;asdf asdf sad sadf asdf asdf sad sadf&nbsp;asdf asdf sad sadf&nbsp;asdf asdf sad sadf&nbsp;asdf asdf sad sadf&nbsp;asdf asdf sad sadf&nbsp;asdf asdf sad sadf&nbsp;asdf asdf sad sad', 'web,php', '/production/image/image/2017-03-23/58d375cfd9b7d.jpg', '0', '4564564');
INSERT INTO tb_teacher VALUES ('6', '蔡正军', '<p>asdf asdf sad sadf&nbsp;asdf asdf sad sadf&nbsp;asdf asdf sad sadf&nbsp;asdf asdf sad sadf asdf asdf sad sadf&nbsp;asdf asdf sad sadf&nbsp;asdf asdf sad sadf&nbsp;asdf asdf sad sadf&nbsp;asdf asdf sad sadf&nbsp;asdf asdf sad sadf&nbsp;asdf asdf sad sad', 'web,php', '/production/image/image/2017-03-23/58d375cfd9b7d.jpg', '0', '456456');
INSERT INTO tb_teacher VALUES ('7', '胡钱玲', '<p>asdf asdf sad sadf&nbsp;asdf asdf sad sadf&nbsp;asdf asdf sad sadf&nbsp;asdf asdf sad sadf asdf asdf sad sadf&nbsp;asdf asdf sad sadf&nbsp;asdf asdf sad sadf&nbsp;asdf asdf sad sadf&nbsp;asdf asdf sad sadf&nbsp;asdf asdf sad sadf&nbsp;asdf asdf sad sad', 'web,php', '/production/image/image/2017-03-23/58d375cfd9b7d.jpg', '0', '456456');
INSERT INTO tb_teacher VALUES ('8', '老大', '<p>asdf asdf sad sadf&nbsp;asdf asdf sad sadf&nbsp;asdf asdf sad sadf&nbsp;asdf asdf sad sadf asdf asdf sad sadf&nbsp;asdf asdf sad sadf&nbsp;asdf asdf sad sadf&nbsp;asdf asdf sad sadf&nbsp;asdf asdf sad sadf&nbsp;asdf asdf sad sadf&nbsp;asdf asdf sad sad', 'web,php', '/production/image/image/2017-03-23/58d375cfd9b7d.jpg', '0', '456456');
INSERT INTO tb_teacher VALUES ('9', '刘云鹏', '<p>asdf asdf sad sadf&nbsp;asdf asdf sad sadf&nbsp;asdf asdf sad sadf&nbsp;asdf asdf sad sadf asdf asdf sad sadf&nbsp;asdf asdf sad sadf&nbsp;asdf asdf sad sadf&nbsp;asdf asdf sad sadf&nbsp;asdf asdf sad sadf&nbsp;asdf asdf sad sadf&nbsp;asdf asdf sad sad', 'web,php', '/production/image/image/2017-03-23/58d375cfd9b7d.jpg', '0', '1564654');
INSERT INTO tb_teacher VALUES ('10', '张玉亭', '<p>asdf asdf sad sadf&nbsp;asdf asdf sad sadf&nbsp;asdf asdf sad sadf&nbsp;asdf asdf sad sadf asdf asdf sad sadf&nbsp;asdf asdf sad sadf&nbsp;asdf asdf sad sadf&nbsp;asdf asdf sad sadf&nbsp;asdf asdf sad sadf&nbsp;asdf asdf sad sadf&nbsp;asdf asdf sad sad', 'web,php', '/production/image/image/2017-03-23/58d375cfd9b7d.jpg', '0', '1564654');
INSERT INTO tb_teacher VALUES ('11', '曾鑫', '<p>asdf asdf sad sadf&nbsp;asdf asdf sad sadf&nbsp;asdf asdf sad sadf&nbsp;asdf asdf sad sadf asdf asdf sad sadf&nbsp;asdf asdf sad sadf&nbsp;asdf asdf sad sadf&nbsp;asdf asdf sad sadf&nbsp;asdf asdf sad sadf&nbsp;asdf asdf sad sadf&nbsp;asdf asdf sad sad', 'web,php', '/production/image/image/2017-03-23/58d375cfd9b7d.jpg', '0', '1564654');
INSERT INTO tb_teacher VALUES ('12', '师傅', '<p>asdf asdf sad sadf&nbsp;asdf asdf sad sadf&nbsp;asdf asdf sad sadf&nbsp;asdf asdf sad sadf asdf asdf sad sadf&nbsp;asdf asdf sad sadf&nbsp;asdf asdf sad sadf&nbsp;asdf asdf sad sadf&nbsp;asdf asdf sad sadf&nbsp;asdf asdf sad sadf&nbsp;asdf asdf sad sad', 'web,php', '/production/image/image/2017-03-23/58d375cfd9b7d.jpg', '0', '1564654');

-- ----------------------------
-- Table structure for `tb_tourists`
-- ----------------------------
DROP TABLE IF EXISTS `tb_tourists`;
CREATE TABLE `tb_tourists` (
  `tourists_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '游客ID',
  `tourists_name` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '游客名称',
  `tourists_tel` varchar(11) CHARACTER SET utf8 DEFAULT NULL,
  `tourists_id_number` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `tourists_address` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `tourists_email` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `is_del` enum('0','1') CHARACTER SET utf8 DEFAULT '0',
  PRIMARY KEY (`tourists_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_tourists
-- ----------------------------
