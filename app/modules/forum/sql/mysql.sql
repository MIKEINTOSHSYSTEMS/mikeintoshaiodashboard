SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;
DROP TABLE IF EXISTS `forumcategories`;
CREATE TABLE `forumcategories`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `color` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
INSERT INTO `forumcategories` VALUES (1, 'General', '#470DAB');
INSERT INTO `forumcategories` VALUES (2, 'Discussions', '#C96E6E');
INSERT INTO `forumcategories` VALUES (3, 'PHPRunner', '#97D992');
INSERT INTO `forumcategories` VALUES (4, 'ASPRunner.NET', '#EDD871');
INSERT INTO `forumcategories` VALUES (5, 'Marketing', '#E88D51');
DROP TABLE IF EXISTS `forumcategorysubscribers`;
CREATE TABLE `forumcategorysubscribers`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `categoryid` int(11) NULL DEFAULT NULL,
  `lastemail` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
DROP TABLE IF EXISTS `forumreplies`;
CREATE TABLE `forumreplies`  (
  `topicid` int(11) NULL DEFAULT NULL,
  `userid` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `reply` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `created` datetime NULL DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 23 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
DROP TABLE IF EXISTS `forumsettings`;
CREATE TABLE `forumsettings`  (
  `show_active_users` tinyint(4) NOT NULL,
  `autolock_after` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
INSERT INTO `forumsettings` VALUES (1, 0, 5);
DROP TABLE IF EXISTS `forumsubscribers`;
CREATE TABLE `forumsubscribers`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `topicid` int(11) NULL DEFAULT NULL,
  `lastemail` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 36 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
DROP TABLE IF EXISTS `forumtopics`;
CREATE TABLE `forumtopics`  (
  `topic` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `startedby` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoryid` int(11) NULL DEFAULT NULL,
  `views` int(11) NULL DEFAULT NULL,
  `activity` datetime NULL DEFAULT NULL,
  `pinned` tinyint(4) NULL DEFAULT NULL,
  `question` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `created` datetime NULL DEFAULT NULL,
  `solved` tinyint(4) NULL DEFAULT NULL,
  `locked` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
DROP TABLE IF EXISTS `forumusers`;
CREATE TABLE `forumusers`  (
  `displayname` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `password` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usertype` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `reset_token` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `reset_date` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
DROP TABLE IF EXISTS `forumusers_data`;
CREATE TABLE `forumusers_data`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `scheme` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `last_activity` datetime NULL DEFAULT NULL,
  `last_login` datetime NULL DEFAULT NULL,
  `joined` datetime NULL DEFAULT NULL,
  `usertype` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `image` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `userid` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
SET FOREIGN_KEY_CHECKS = 1;