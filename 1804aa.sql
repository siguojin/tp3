/*
Navicat MySQL Data Transfer

Source Server         : 1804A
Source Server Version : 50553
Source Host           : 127.0.0.1:3306
Source Database       : 1804a

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2018-10-09 16:20:23
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for jy_privileges
-- ----------------------------
DROP TABLE IF EXISTS `jy_privileges`;
CREATE TABLE `jy_privileges` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '自增id',
  `type_name` varchar(15) DEFAULT NULL COMMENT '分类名称',
  `pid` int(10) DEFAULT NULL COMMENT '父级id 0为顶级',
  `status` int(5) DEFAULT NULL COMMENT '0 权限信息 1品牌信息',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=gbk COMMENT='导航分类表';

-- ----------------------------
-- Records of jy_privileges
-- ----------------------------
INSERT INTO `jy_privileges` VALUES ('1', '网站管理员', '0', '0');
INSERT INTO `jy_privileges` VALUES ('2', '角色管理', '0', '0');
INSERT INTO `jy_privileges` VALUES ('3', '权限管理', '0', '0');
INSERT INTO `jy_privileges` VALUES ('4', '商品管理', '0', '0');
INSERT INTO `jy_privileges` VALUES ('5', '物流管理', '0', '0');
INSERT INTO `jy_privileges` VALUES ('6', '订单管理', '0', '0');

-- ----------------------------
-- Table structure for jy_roleprivileges
-- ----------------------------
DROP TABLE IF EXISTS `jy_roleprivileges`;
CREATE TABLE `jy_roleprivileges` (
  `rid` int(10) DEFAULT NULL COMMENT '角色id',
  `pid` int(11) DEFAULT NULL COMMENT '权限id'
) ENGINE=MyISAM DEFAULT CHARSET=gbk COMMENT='角色权限关联表';

-- ----------------------------
-- Records of jy_roleprivileges
-- ----------------------------
INSERT INTO `jy_roleprivileges` VALUES ('2', '4');
INSERT INTO `jy_roleprivileges` VALUES ('2', '6');
INSERT INTO `jy_roleprivileges` VALUES ('1', '1');
INSERT INTO `jy_roleprivileges` VALUES ('3', '5');

-- ----------------------------
-- Table structure for jy_roles
-- ----------------------------
DROP TABLE IF EXISTS `jy_roles`;
CREATE TABLE `jy_roles` (
  `rid` int(10) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(15) DEFAULT NULL COMMENT '角色名称',
  `create_time` varchar(20) DEFAULT NULL COMMENT '创建时间',
  `status` int(10) DEFAULT NULL COMMENT '角色状态',
  PRIMARY KEY (`rid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=gbk COMMENT='角色表';

-- ----------------------------
-- Records of jy_roles
-- ----------------------------
INSERT INTO `jy_roles` VALUES ('1', '网站管理员角色', '2018-10-09 15:45:37', '1');
INSERT INTO `jy_roles` VALUES ('2', '商城管理员角色', '2018-10-09 15:45:59', '1');
INSERT INTO `jy_roles` VALUES ('3', '物流管理角色', '2018-10-09 15:46:23', '1');

-- ----------------------------
-- Table structure for jy_user
-- ----------------------------
DROP TABLE IF EXISTS `jy_user`;
CREATE TABLE `jy_user` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `email` varchar(20) DEFAULT NULL COMMENT '电子邮箱',
  `username` varchar(15) DEFAULT NULL COMMENT '用户名',
  `password` varchar(50) DEFAULT NULL COMMENT '密码',
  `telphone` varchar(11) DEFAULT NULL COMMENT '手机号',
  `address` varchar(50) DEFAULT NULL COMMENT '家庭住址',
  `create_time` varchar(50) DEFAULT NULL COMMENT '创建时间',
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=gbk COMMENT='用户注册表';

-- ----------------------------
-- Records of jy_user
-- ----------------------------
INSERT INTO `jy_user` VALUES ('28', '15135374298@163.com', '马辉', 'e10adc3949ba59abbe56e057f20f883e', '15135374298', '河南', '2018-10-09', null);

-- ----------------------------
-- Table structure for jy_userrole
-- ----------------------------
DROP TABLE IF EXISTS `jy_userrole`;
CREATE TABLE `jy_userrole` (
  `uid` int(10) NOT NULL COMMENT '用户id',
  `rid` int(10) DEFAULT NULL COMMENT '角色id'
) ENGINE=MyISAM DEFAULT CHARSET=gbk COMMENT='用户角色表';

-- ----------------------------
-- Records of jy_userrole
-- ----------------------------
INSERT INTO `jy_userrole` VALUES ('24', '14');
INSERT INTO `jy_userrole` VALUES ('25', '11');
INSERT INTO `jy_userrole` VALUES ('26', '11');
INSERT INTO `jy_userrole` VALUES ('26', '14');
INSERT INTO `jy_userrole` VALUES ('27', '1');
INSERT INTO `jy_userrole` VALUES ('28', '1');
