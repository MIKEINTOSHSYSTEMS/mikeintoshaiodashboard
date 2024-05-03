SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;
DROP TABLE IF EXISTS `doc_files`;
CREATE TABLE `doc_files`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `description` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `hash` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `parent_folder_id` int(11) NULL DEFAULT NULL,
  `ownerid` int(11) NULL DEFAULT NULL,
  `file_type` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created` datetime NULL DEFAULT NULL,
  `share_date` date NULL DEFAULT NULL,
  `share_ro` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `share_type` int(11) NULL DEFAULT NULL,
  `share_users` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `share_message` varchar(3000) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `share_sendto` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `share_needDate` int(11) NULL DEFAULT NULL,
  `downloads` int(11) NULL DEFAULT NULL,
  `share_startPoint` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `thumb` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
DROP TABLE IF EXISTS `doc_files_versions`;
CREATE TABLE `doc_files_versions`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `docid` int(11) NULL DEFAULT NULL,
  `file` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `ownerid` int(11) NULL DEFAULT NULL,
  `created` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
DROP TABLE IF EXISTS `doc_savemethod`;
CREATE TABLE `doc_savemethod`  (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `mehodName` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `methodValue` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`ID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
INSERT INTO `doc_savemethod` VALUES (1, 'Use physical directory structure', 1);
INSERT INTO `doc_savemethod` VALUES (2, 'Store all files in the same physical folder', 0);
DROP TABLE IF EXISTS `doc_settings`;
CREATE TABLE `doc_settings`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `upload_path` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `isStructure` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `isVersions` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
INSERT INTO `doc_settings` VALUES (1, 'files', '0', 0);
DROP TABLE IF EXISTS `doc_users`;
CREATE TABLE `doc_users`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `password` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `usertype` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `reset_token` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `reset_date` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
DROP TABLE IF EXISTS `share_type`;
CREATE TABLE `share_type`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `share_type` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
INSERT INTO `share_type` VALUES (1, 'Selected users');
INSERT INTO `share_type` VALUES (2, 'All users');
INSERT INTO `share_type` VALUES (3, 'Share via link');
INSERT INTO `share_type` VALUES (4, 'Do not share');
SET FOREIGN_KEY_CHECKS = 1;