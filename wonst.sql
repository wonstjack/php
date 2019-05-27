/*
 Navicat MySQL Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50714
 Source Host           : localhost:3306
 Source Schema         : wonst

 Target Server Type    : MySQL
 Target Server Version : 50714
 File Encoding         : 65001

 Date: 27/05/2019 19:24:21
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for ent_admin_user
-- ----------------------------
DROP TABLE IF EXISTS `ent_admin_user`;
CREATE TABLE `ent_admin_user`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `password` char(32) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `last_login_ip` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `last_login_time` int(10) UNSIGNED NULL DEFAULT NULL,
  `listorder` int(8) UNSIGNED NULL DEFAULT 0,
  `status` tinyint(1) NULL DEFAULT 0,
  `create_time` int(10) UNSIGNED NULL DEFAULT 0,
  `update_time` int(10) UNSIGNED NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `username`(`username`) USING BTREE,
  INDEX `create_time`(`create_time`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ent_admin_user
-- ----------------------------
INSERT INTO `ent_admin_user` VALUES (1, 'wonst', '84961bf6eed1d81c89f280b9d580c776', '127.0.0.1', 1554953940, 0, 1, 0, 1554953940);
INSERT INTO `ent_admin_user` VALUES (2, 'mxxloveye', 'e62567a6c6c3ae2adf50e5cbe6575afe', NULL, NULL, 0, 1, 0, 0);
INSERT INTO `ent_admin_user` VALUES (3, 'mxx ', '7235e87ff82efaae54c444d9731fb64b', NULL, NULL, 0, 1, 1554788525, 0);
INSERT INTO `ent_admin_user` VALUES (4, 'qwert', '5525fddc6f6f301e8ec28e676718b9bf', NULL, NULL, 0, 1, 1554788646, 1554788646);

-- ----------------------------
-- Table structure for ent_news
-- ----------------------------
DROP TABLE IF EXISTS `ent_news`;
CREATE TABLE `ent_news`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL COMMENT '文章标题',
  `small_title` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL COMMENT '短标题',
  `catid` int(8) UNSIGNED NULL DEFAULT 0 COMMENT '栏目的ID',
  `image` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL COMMENT '新闻的图片',
  `content` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL COMMENT '文章的内容',
  `description` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL COMMENT '文章的简介',
  `is_position` tinyint(1) NULL DEFAULT 0 COMMENT '是否推荐',
  `is_head_figure` tinyint(1) NULL DEFAULT 0 COMMENT '是否推荐到轮播图',
  `is_allowcomments` tinyint(1) NULL DEFAULT 0 COMMENT '是否允许用户评论',
  `listorder` int(8) NULL DEFAULT NULL COMMENT '文章的排序',
  `source_type` tinyint(1) NULL DEFAULT 0 COMMENT '文章的来源',
  `create_time` int(10) NULL DEFAULT 0,
  `update_time` int(10) NULL DEFAULT 0,
  `status` tinyint(1) NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `title`(`title`) USING BTREE,
  INDEX `create_time`(`create_time`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;
