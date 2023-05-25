/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 100422
 Source Host           : localhost:3306
 Source Schema         : sumber_daya

 Target Server Type    : MySQL
 Target Server Version : 100422
 File Encoding         : 65001

 Date: 16/05/2023 14:40:50
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for pemakaian_listrik
-- ----------------------------
DROP TABLE IF EXISTS `pemakaian_listrik`;
CREATE TABLE `pemakaian_listrik`  (
  `id_listrik` int(11) NOT NULL AUTO_INCREMENT,
  `id_pelanggan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tahun` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `januari` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `februari` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `maret` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `april` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `mei` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `juni` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `juli` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `agustus` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `september` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `oktober` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `november` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `desember` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id_listrik`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pemakaian_listrik
-- ----------------------------
INSERT INTO `pemakaian_listrik` VALUES (1, '514010018113', '2022', '19647100', '17785000', '14708800', '3780000', '3780000', '3780000', '3780000', '3780000', '3780000', '3780000', '3780000', '3780000', '2023-05-15 10:46:21');
INSERT INTO `pemakaian_listrik` VALUES (2, '514010537651', '2022', '735352', '668896', '641447', '394403', '609663', '548986', '654449', '226467', '0', '0', '0', '0', '2023-05-16 09:02:39');
INSERT INTO `pemakaian_listrik` VALUES (3, '514011075475', '2022', '1062900', '826200', '1014300', '1293300', '1367100', '1292400', '1667700', '1998000', '1865700', '1587600', '1602000', '1642500', '2023-05-16 09:03:27');
INSERT INTO `pemakaian_listrik` VALUES (4, '514010733050', '2022', '126191860', '121329100', '106915750', '143959750', '138417850', '146245600', '141225550', '143871500', '154823050', '163966450', '157028050', '157395550', '2023-05-16 09:04:28');
INSERT INTO `pemakaian_listrik` VALUES (5, '514010438935', '2022', '9755200', '9497800', '8803900', '9625600', '9888400', '10337500', '9395200', '8517700', '9442900', '8122600', '7125400', '4487400', '2023-05-16 09:05:11');
INSERT INTO `pemakaian_listrik` VALUES (6, 'tes', '2023', '232323233', '23', '23', '23', '23', '23', '313131', '32', '12121', '31', '3', '13', '2023-05-16 14:08:28');

SET FOREIGN_KEY_CHECKS = 1;
