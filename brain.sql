/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MariaDB
 Source Server Version : 100138
 Source Host           : localhost:3306
 Source Schema         : braincms

 Target Server Type    : MariaDB
 Target Server Version : 100138
 File Encoding         : 65001

 Date: 05/03/2019 12:29:26
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(125) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `auth_ticket` varchar(60) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `rank` int(1) UNSIGNED NULL DEFAULT 1,
  `rank_vip` int(1) NULL DEFAULT 1,
  `credits` int(11) NULL DEFAULT 50000,
  `vip_points` int(11) NULL DEFAULT 0,
  `activity_points` int(11) NULL DEFAULT 5000,
  `look` char(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `gender` enum('M','F') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT 'M',
  `motto` char(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `account_created` char(12) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0',
  `last_online` int(11) NULL DEFAULT 0,
  `online` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0',
  `ip_last` varchar(45) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `ip_reg` varchar(45) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `home_room` int(10) NULL DEFAULT 0,
  `is_muted` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0',
  `block_newfriends` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0',
  `hide_online` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0',
  `hide_inroom` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0',
  `vip` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '1',
  `volume` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '100,100,100',
  `last_change` int(20) NULL DEFAULT 0,
  `machine_id` varchar(125) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `focus_preference` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0',
  `chat_preference` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0',
  `pets_muted` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0',
  `bots_muted` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0',
  `advertising_report_blocked` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0',
  `gotw_points` int(11) NULL DEFAULT 0,
  `ignore_invites` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0',
  `time_muted` double NULL DEFAULT 0,
  `allow_gifts` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '1',
  `trading_locked` double NULL DEFAULT 0,
  `friend_bar_state` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '1',
  `disable_forced_effects` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '0',
  `allow_mimic` enum('1','0') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`, `auth_ticket`) USING BTREE,
  UNIQUE INDEX `id`(`id`) USING BTREE,
  UNIQUE INDEX `username`(`username`) USING BTREE,
  INDEX `rank`(`rank`) USING BTREE,
  INDEX `ip_last`(`ip_last`) USING BTREE,
  INDEX `ip_reg`(`ip_reg`) USING BTREE,
  INDEX `credits`(`credits`) USING BTREE,
  INDEX `activity_points`(`activity_points`) USING BTREE,
  INDEX `online`(`online`) USING BTREE,
  INDEX `machine_id`(`machine_id`) USING BTREE,
  INDEX `auth_ticket`(`auth_ticket`) USING BTREE,
  INDEX `last_online`(`last_online`) USING BTREE,
  INDEX `home_room`(`home_room`) USING BTREE,
  INDEX `rank_vip`(`rank_vip`) USING BTREE,
  INDEX `messenger`(`id`, `username`, `look`, `motto`, `last_online`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

SET FOREIGN_KEY_CHECKS = 1;
