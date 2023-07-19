/*
 Navicat Premium Data Transfer

 Source Server         : root
 Source Server Type    : MySQL
 Source Server Version : 100410 (10.4.10-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : sample

 Target Server Type    : MySQL
 Target Server Version : 100410 (10.4.10-MariaDB)
 File Encoding         : 65001

 Date: 19/07/2023 20:57:00
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for districts
-- ----------------------------
DROP TABLE IF EXISTS `districts`;
CREATE TABLE `districts`  (
  `id` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `value` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of districts
-- ----------------------------
INSERT INTO `districts` VALUES ('LKA2448', 'Mahanuwara', 5);
INSERT INTO `districts` VALUES ('LKA2449', 'Matale', 1);
INSERT INTO `districts` VALUES ('LKA2450', 'Nuwara Eliya', 0);
INSERT INTO `districts` VALUES ('LKA2451', 'Ampara', 6);
INSERT INTO `districts` VALUES ('LKA2452', 'Madakalapuwa', 0);
INSERT INTO `districts` VALUES ('LKA2453', 'Polonnaruwa', 10);
INSERT INTO `districts` VALUES ('LKA2454', 'Tricunamalaya', 1);
INSERT INTO `districts` VALUES ('LKA2455', 'Anuradhapura', 2);
INSERT INTO `districts` VALUES ('LKA2456', 'Vavniyawa', 0);
INSERT INTO `districts` VALUES ('LKA2457', 'Mannarama', 0);
INSERT INTO `districts` VALUES ('LKA2458', 'Mulativ', 4);
INSERT INTO `districts` VALUES ('LKA2459', 'Yapanaya', 3);
INSERT INTO `districts` VALUES ('LKA2460', 'Kilinochchi', 22);
INSERT INTO `districts` VALUES ('LKA2461', 'Kurunegala', 1);
INSERT INTO `districts` VALUES ('LKA2462', 'Puththalama', 11);
INSERT INTO `districts` VALUES ('LKA2463', 'Rathnapura', 40);
INSERT INTO `districts` VALUES ('LKA2464', 'Galle', 1);
INSERT INTO `districts` VALUES ('LKA2465', 'Hambanthota', 1);
INSERT INTO `districts` VALUES ('LKA2466', 'Mathara', 0);
INSERT INTO `districts` VALUES ('LKA2467', 'Badulla', 24);
INSERT INTO `districts` VALUES ('LKA2468', 'Monaragala', 34);
INSERT INTO `districts` VALUES ('LKA2469', 'Kegalla', 55);
INSERT INTO `districts` VALUES ('LKA2470', 'Colombo', 1);
INSERT INTO `districts` VALUES ('LKA2471', 'Gampaha', 73);
INSERT INTO `districts` VALUES ('LKA2472', 'Kaluthara', 0);

SET FOREIGN_KEY_CHECKS = 1;
