/*
Navicat MySQL Data Transfer

Source Server         : 1804A
Source Server Version : 50553
Source Host           : 127.0.0.1:3306
Source Database       : 1804a

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2018-10-09 15:26:54
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
INSERT INTO `jy_privileges` VALUES ('1', '管理班级', '0', '0');
INSERT INTO `jy_privileges` VALUES ('2', '管理卫生', '0', '0');
INSERT INTO `jy_privileges` VALUES ('3', '管理卫生一', '2', '0');
INSERT INTO `jy_privileges` VALUES ('4', '手机', '0', '1');
INSERT INTO `jy_privileges` VALUES ('5', '笔记本', '0', '1');
INSERT INTO `jy_privileges` VALUES ('6', '水果', '0', '1');

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
INSERT INTO `jy_roleprivileges` VALUES ('14', '1');
INSERT INTO `jy_roleprivileges` VALUES ('14', '2');
INSERT INTO `jy_roleprivileges` VALUES ('14', '3');
INSERT INTO `jy_roleprivileges` VALUES ('12', '3');
INSERT INTO `jy_roleprivileges` VALUES ('11', '11');
INSERT INTO `jy_roleprivileges` VALUES ('11', '12');
INSERT INTO `jy_roleprivileges` VALUES ('11', '13');
INSERT INTO `jy_roleprivileges` VALUES ('11', '14');

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
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=gbk COMMENT='角色表';

-- ----------------------------
-- Records of jy_roles
-- ----------------------------
INSERT INTO `jy_roles` VALUES ('13', '纪委', '2018-09-27 18:35:29', '1');
INSERT INTO `jy_roles` VALUES ('14', '平民', '2018-09-27 18:35:29', '1');
INSERT INTO `jy_roles` VALUES ('23', '角色管理功能', '2018-10-09 15:12:03', '1');
INSERT INTO `jy_roles` VALUES ('22', '用户管理功能', '2018-10-09 15:12:03', '1');

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
INSERT INTO `jy_user` VALUES ('24', '1513525852@163.com', '张珑义', 'e10adc3949ba59abbe56e057f20f883e', '123123', '河南', '2018-10-09', '__PUBLIC__/exam2/images/img.jpg');
INSERT INTO `jy_user` VALUES ('25', '13126726903@163.com', '杜胖子', 'e10adc3949ba59abbe56e057f20f883e', '123123', '山西', '2018-10-09', '__PUBLIC__/exam2/images/img.jpg');
INSERT INTO `jy_user` VALUES ('26', 'liuyangyang@163.com', '赵晓东', 'e10adc3949ba59abbe56e057f20f883e', '13126726903', '河南', '2018-10-09', '__PUBLIC__/exam2/images/img.jpg');
INSERT INTO `jy_user` VALUES ('27', '13126726903@163.com', '张三', null, '13126726904', '山西临汾', null, null);
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
