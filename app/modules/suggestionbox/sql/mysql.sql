SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;
DROP TABLE IF EXISTS `sgb_blockedip`;
CREATE TABLE `sgb_blockedip`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `blocked_date` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
DROP TABLE IF EXISTS `sgb_categories`;
CREATE TABLE `sgb_categories`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `url` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `category_color` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
INSERT INTO `sgb_categories` VALUES (1, 'customisations', 'customisations', '#cfe5fc');
INSERT INTO `sgb_categories` VALUES (2, 'Integrations', 'Integrations', '#6ba0df');
DROP TABLE IF EXISTS `sgb_comments`;
CREATE TABLE `sgb_comments`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NULL DEFAULT NULL,
  `comment` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `created_date` datetime NULL DEFAULT NULL,
  `s_id` int(11) NULL DEFAULT NULL,
  `status` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `images` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `name` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `email` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `ip` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `merged_info` tinyint(4) NULL DEFAULT NULL,
  `deleted_date` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
DROP TABLE IF EXISTS `sgb_notify`;
CREATE TABLE `sgb_notify`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `s_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
DROP TABLE IF EXISTS `sgb_status`;
CREATE TABLE `sgb_status`  (
  `statusname` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `statuscolor` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `status_label` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `tooltip` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `visibility` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`statusname`(50)) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
INSERT INTO `sgb_status` VALUES ('awaiting_approval', '', 'Awaiting approval', NULL, 'private');
INSERT INTO `sgb_status` VALUES ('deleted', '', 'Deleted', NULL, 'private');
INSERT INTO `sgb_status` VALUES ('done', '#39B549', 'Done', '', 'public');
INSERT INTO `sgb_status` VALUES ('inprogress', '#39B549', 'In progress', '', 'public');
INSERT INTO `sgb_status` VALUES ('notplanned', '#E45D1A', 'Not planned', 'This suggestion is not planned for a future release.', 'public');
INSERT INTO `sgb_status` VALUES ('planned', '#4C7C92', 'Planned', 'This suggestion is planned for a future release.', 'public');
INSERT INTO `sgb_status` VALUES ('under_consideration', '#2C3136', 'Under consideration', 'This suggestion is open for upvotes and comments.', 'public');
DROP TABLE IF EXISTS `sgb_suggestions`;
CREATE TABLE `sgb_suggestions`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `suggested_by` int(11) NULL DEFAULT NULL,
  `status` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created_date` datetime NULL DEFAULT NULL,
  `upvoted_date` datetime NULL DEFAULT NULL,
  `suggestion` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `vote` int(11) NULL DEFAULT NULL,
  `categoryid` int(11) NULL DEFAULT NULL,
  `title` varchar(700) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `images` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `name` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `email` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `pinned` tinyint(4) NULL DEFAULT NULL,
  `ip` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `deleted_date` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
INSERT INTO `sgb_suggestions` VALUES (1, 1639662536, 'under_consideration', '2021-12-22 10:27:20', '2021-12-01 18:29:06', 'You can delete me now', 1, 2, 'Test suggestion', '', 'test', 'test@test.com', 1, '1', NULL);
DROP TABLE IF EXISTS `sgb_users`;
CREATE TABLE `sgb_users`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `password` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `fullname` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `usertype` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `reset_token` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `reset_date` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
DROP TABLE IF EXISTS `sgb_votes`;
CREATE TABLE `sgb_votes`  (
  `user_id` int(11) NULL DEFAULT NULL,
  `s_id` int(11) NOT NULL DEFAULT 0,
  `ip` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`s_id`, `ip`(50)) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
SET FOREIGN_KEY_CHECKS = 1;