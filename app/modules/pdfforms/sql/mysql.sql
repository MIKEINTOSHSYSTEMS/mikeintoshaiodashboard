SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;
DROP TABLE IF EXISTS `pdf_formfields`;
CREATE TABLE `pdf_formfields`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `formid` int(11) NULL DEFAULT NULL,
  `fieldform` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `fieldsql` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `fieldformalt` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `cboxon` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `cboxoff` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
DROP TABLE IF EXISTS `pdf_formoptions`;
CREATE TABLE `pdf_formoptions`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pdfpath` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
INSERT INTO `pdf_formoptions` VALUES (1, 'pdftk/pdftk.exe');
DROP TABLE IF EXISTS `pdf_forms`;
CREATE TABLE `pdf_forms`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `formname` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `sqlquery` varchar(2000) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `formfile` varchar(2000) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `pdffile` varchar(2000) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `multifields` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
DROP TABLE IF EXISTS `pdf_sqlfields`;
CREATE TABLE `pdf_sqlfields`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `formid` int(11) NULL DEFAULT NULL,
  `sqlfield` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
DROP TABLE IF EXISTS `pdf_test`;
CREATE TABLE `pdf_test`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `field_char1` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `field_char2` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `field_char3` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `field_char4` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `field_char5` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `field_int1` int(11) NULL DEFAULT NULL,
  `field_int2` int(11) NULL DEFAULT NULL,
  `field_int3` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `field_date1` date NULL DEFAULT NULL,
  `field_date2` date NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
INSERT INTO `pdf_test` VALUES (1, 'John', 'Smith', 'Boston', '123456', '', 62, NULL, '', '1960-01-28', '2020-01-29');
INSERT INTO `pdf_test` VALUES (2, 'char1', 'char2', 'char3', 'char4', 'char5', 10, 20, '30', '2018-09-09', '2020-02-03');
DROP TABLE IF EXISTS `pdf_users`;
CREATE TABLE `pdf_users`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `reset_token` mediumtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `reset_date` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;
SET FOREIGN_KEY_CHECKS = 1;