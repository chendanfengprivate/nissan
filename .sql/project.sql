/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1_3306
Source Server Version : 50553
Source Host           : 127.0.0.1:3306
Source Database       : nissan

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2018-10-27 15:21:57
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for project
-- ----------------------------
DROP TABLE IF EXISTS `project`;
CREATE TABLE `project` (
  `id` int(3) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键，项目id',
  `name` varchar(32) NOT NULL DEFAULT '' COMMENT '项目的名称',
  `content` text NOT NULL COMMENT '详细内容，不限字数',
  `note` varchar(128) NOT NULL DEFAULT '' COMMENT '用户需要补充说明的备注',
  `connect_table` varchar(32) NOT NULL DEFAULT '' COMMENT '通过此字段进行统一管理各表',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='总表，所有项目的总和';
