/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50524
Source Host           : localhost:3306
Source Database       : toolkit

Target Server Type    : MYSQL
Target Server Version : 50524
File Encoding         : 65001

Date: 2014-02-25 13:30:59
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for van_toolkit
-- ----------------------------
DROP TABLE IF EXISTS `van_toolkit`;
CREATE TABLE `van_toolkit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL COMMENT '工具titile',
  `type` varchar(255) DEFAULT NULL COMMENT '类型（ALL/DESIGN/ART/PRODUCT/BUSINESS/PHOTOGRAPHY）',
  `shorturl` varchar(255) DEFAULT NULL COMMENT '链接',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `type` (`type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of van_toolkit
-- ----------------------------