SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;
DROP TABLE IF EXISTS `sv_answer_options`;
CREATE TABLE `sv_answer_options`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_id` int(11) NULL DEFAULT NULL,
  `text` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `sortorder` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
DROP TABLE IF EXISTS `sv_conditions`;
CREATE TABLE `sv_conditions`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `condition` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `type_question` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
INSERT INTO `sv_conditions` VALUES (1, 'Equals', 'T');
INSERT INTO `sv_conditions` VALUES (2, 'Less than', 'T');
INSERT INTO `sv_conditions` VALUES (3, 'More than', 'T');
INSERT INTO `sv_conditions` VALUES (4, 'Equals or less than', 'T');
INSERT INTO `sv_conditions` VALUES (5, 'Equals or more than', 'T');
INSERT INTO `sv_conditions` VALUES (6, 'Not equals', 'T');
INSERT INTO `sv_conditions` VALUES (7, 'Empty', 'T');
DROP TABLE IF EXISTS `sv_format_date`;
CREATE TABLE `sv_format_date`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `format` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `description` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
INSERT INTO `sv_format_date` VALUES (1, 'yyyy-mm-dd', 'yy-mm-dd');
INSERT INTO `sv_format_date` VALUES (2, 'd m, yy', 'Short - d m, y');
INSERT INTO `sv_format_date` VALUES (3, 'd M, yy', 'Medium - d M, y');
INSERT INTO `sv_format_date` VALUES (4, 'D, d M, yyyy', 'Full - D, d M, Y');
INSERT INTO `sv_format_date` VALUES (6, 'mm/dd/yyyy', 'mm/dd/yy');
INSERT INTO `sv_format_date` VALUES (7, NULL, NULL);
DROP TABLE IF EXISTS `sv_groups`;
CREATE TABLE `sv_groups`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sid` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `sortorder` int(11) NULL DEFAULT NULL,
  `description` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
DROP TABLE IF EXISTS `sv_helpquestion_viewtype`;
CREATE TABLE `sv_helpquestion_viewtype`  (
  `orientation` varchar(1) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `description` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`orientation`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
INSERT INTO `sv_helpquestion_viewtype` VALUES ('R', 'To the right of the question');
INSERT INTO `sv_helpquestion_viewtype` VALUES ('U', 'Under the text of the question');
DROP TABLE IF EXISTS `sv_question_details`;
CREATE TABLE `sv_question_details`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_id` int(11) NOT NULL,
  `text` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `sortorder` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
DROP TABLE IF EXISTS `sv_question_types`;
CREATE TABLE `sv_question_types`  (
  `type` varchar(1) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `description` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`type`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
INSERT INTO `sv_question_types` VALUES ('A', 'List');
INSERT INTO `sv_question_types` VALUES ('B', 'List (5 point choice)');
INSERT INTO `sv_question_types` VALUES ('C', 'List (10 point choice)');
INSERT INTO `sv_question_types` VALUES ('D', 'Dropdown box');
INSERT INTO `sv_question_types` VALUES ('E', 'Date');
INSERT INTO `sv_question_types` VALUES ('L', 'Long text');
INSERT INTO `sv_question_types` VALUES ('M', 'Multiple choice');
INSERT INTO `sv_question_types` VALUES ('N', 'Number');
INSERT INTO `sv_question_types` VALUES ('P', 'Multiple choice with comments');
INSERT INTO `sv_question_types` VALUES ('R', 'Radio-buttons');
INSERT INTO `sv_question_types` VALUES ('S', 'Simple text, no question');
INSERT INTO `sv_question_types` VALUES ('T', 'Text');
INSERT INTO `sv_question_types` VALUES ('U', 'File upload');
INSERT INTO `sv_question_types` VALUES ('X', 'Checkbox');
DROP TABLE IF EXISTS `sv_questions`;
CREATE TABLE `sv_questions`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NULL DEFAULT NULL,
  `sid` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `type` varchar(1) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `question` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `help_orientation` varchar(1) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT 'R',
  `regex` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `required` int(11) NULL DEFAULT 0,
  `help` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `sortorder` int(11) NULL DEFAULT NULL,
  `other` int(11) NULL DEFAULT 0,
  `int_only` int(11) NULL DEFAULT 0,
  `max_length` int(11) NULL DEFAULT NULL,
  `file_extensions` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `max_num_of_files` int(11) NULL DEFAULT NULL,
  `max_file_size` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
DROP TABLE IF EXISTS `sv_report`;
CREATE TABLE `sv_report`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime NULL DEFAULT NULL,
  `ip` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
DROP TABLE IF EXISTS `sv_scenarios`;
CREATE TABLE `sv_scenarios`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `qid` int(11) NULL DEFAULT NULL,
  `quest` int(11) NULL DEFAULT NULL,
  `condition` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `cond_value` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
DROP TABLE IF EXISTS `sv_survey`;
CREATE TABLE `sv_survey`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime NULL DEFAULT NULL,
  `ip` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `lastpage` int(11) NULL DEFAULT NULL,
  `hash` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `answer` int(11) NULL DEFAULT NULL,
  `submit` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
DROP TABLE IF EXISTS `sv_survey_formats`;
CREATE TABLE `sv_survey_formats`  (
  `format` varchar(1) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `description` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`format`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
INSERT INTO `sv_survey_formats` VALUES ('A', 'All in one');
INSERT INTO `sv_survey_formats` VALUES ('G', 'One group per page');
INSERT INTO `sv_survey_formats` VALUES ('Q', 'One question per page');
DROP TABLE IF EXISTS `sv_surveys`;
CREATE TABLE `sv_surveys`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `active` int(11) NULL DEFAULT NULL,
  `expires` datetime NULL DEFAULT NULL,
  `startdate` datetime NULL DEFAULT NULL,
  `created` datetime NULL DEFAULT NULL,
  `progressbar` int(11) NULL DEFAULT NULL,
  `allowprev` int(11) NULL DEFAULT NULL,
  `format` varchar(1) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `ipaddr` int(11) NULL DEFAULT NULL,
  `title` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `description` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `welcome_message` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `end_message` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `date_format` int(11) NULL DEFAULT NULL,
  `userid` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
DROP TABLE IF EXISTS `sv_users`;
CREATE TABLE `sv_users`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `reset_token` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `reset_date` datetime NULL DEFAULT NULL,
  `email` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
SET FOREIGN_KEY_CHECKS = 1;