SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;
DROP TABLE IF EXISTS `chat_files`;
CREATE TABLE `chat_files`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `messageid` int(11) NULL DEFAULT NULL,
  `files` varchar(4000) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
DROP TABLE IF EXISTS `chat_groups`;
CREATE TABLE `chat_groups`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `groupname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `targetid` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `grouptype` int(11) NULL DEFAULT NULL,
  `ownerid` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
DROP TABLE IF EXISTS `chat_history`;
CREATE TABLE `chat_history`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `messages` varchar(4000) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `ownerid` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `isread` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `targetid` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `tmp_file` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `status` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `status_created` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `soundRecord` mediumblob NULL,
  `isVideo` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
DROP TABLE IF EXISTS `chat_peopletype`;
CREATE TABLE `chat_peopletype`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
INSERT INTO `chat_peopletype` VALUES (1, 'Add all members');
INSERT INTO `chat_peopletype` VALUES (2, 'Add specific people');
DROP TABLE IF EXISTS `chat_settings`;
CREATE TABLE `chat_settings`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `timeperiod` int(11) NULL DEFAULT NULL,
  `findusers` int(11) NULL DEFAULT NULL,
  `soundpath` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `soundenable` int(11) NULL DEFAULT NULL,
  `videoenable` int(11) NULL DEFAULT NULL,
  `provider` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `RC_ClientID` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `RC_ClientSecret` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `RC_Account` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `RC_Password` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Z_APIKey` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Z_APISecret` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `saveInCloud` int(11) NULL DEFAULT NULL,
  `Z_Token` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `timezone` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `RC_APIServerURL` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `MS_ClientID` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `MS_ClientSecret` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `MS_TenantID` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `G_ClientID` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `G_ClientSecret` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `G_APIKey` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `WB_ClientID` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `WB_ClientSecret` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
INSERT INTO `chat_settings` VALUES (1, 3, 1, '', 1, 1, 'Zoom', '', '', '', '', NULL, NULL, 0, '', '', '', '', '', '', '', '', '', '', '');
DROP TABLE IF EXISTS `chat_timezone`;
CREATE TABLE `chat_timezone`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zoom` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `rc` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `order` int(11) NULL DEFAULT NULL,
  `dotnet` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 61 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
INSERT INTO `chat_timezone` VALUES (38, 'Pacific/Honolulu', 'Hawaii (UTC -10)', '60', 1, 'Hawaiian Standard Time');
INSERT INTO `chat_timezone` VALUES (39, 'America/Anchorage', 'Alaska (UTC -9)', '59', 2, 'Alaskan Standard Time');
INSERT INTO `chat_timezone` VALUES (40, 'America/Los_Angeles', 'Pacific Time (US and Canada) (UTC -8)', '58', 3, 'Pacific Standard Time');
INSERT INTO `chat_timezone` VALUES (41, 'America/Denver', 'Mountain Time (US and Canada) (UTC -7)', '57', 4, 'Mountain Standard Time');
INSERT INTO `chat_timezone` VALUES (42, 'America/Chicago', 'Central Time (US and Canada) (UTC -6)', '53', 5, 'Central Standard Time');
INSERT INTO `chat_timezone` VALUES (43, 'America/New_York', 'Eastern Time (US and Canada) (UTC -5)', '51', 6, 'Eastern Standard Time');
INSERT INTO `chat_timezone` VALUES (44, 'Canada/Atlantic', 'Atlantic Time (Canada) (UTC -4)', '48', 7, 'Atlantic Standard Time');
INSERT INTO `chat_timezone` VALUES (45, 'America/Araguaina', 'Brasilia (UTC -3)', '45', 8, 'E. South America Standard Time');
INSERT INTO `chat_timezone` VALUES (46, 'Atlantic/Azores', 'Azores (UTC -1)', '43', 9, 'Azores Standard Time');
INSERT INTO `chat_timezone` VALUES (47, 'Europe/London', 'London (UTC 0)', '2', 10, 'GMT Standard Time');
INSERT INTO `chat_timezone` VALUES (48, 'Europe/Amsterdam', 'Amsterdam (UTC +1)', '6', 11, 'Central Europe Standard Time');
INSERT INTO `chat_timezone` VALUES (49, 'Europe/Helsinki', 'Helsinki (UTC +2)', '11', 12, 'E. Europe Standard Time');
INSERT INTO `chat_timezone` VALUES (50, 'Europe/Moscow', 'Moscow (UTC +3)', '14', 13, 'Russian Standard Time');
INSERT INTO `chat_timezone` VALUES (51, 'Asia/Baku', 'Baku, Tbilisi, Yerevan (UTC +4)', '240', 14, 'Caucasus Standard Time');
INSERT INTO `chat_timezone` VALUES (52, 'Asia/Tashkent', 'Islamabad, Karachi, Tashkent (UTC +5)', '21', 15, 'West Asia Standard Time');
INSERT INTO `chat_timezone` VALUES (53, 'Asia/Dhaka', 'Astana, Dhaka (UTC +6)', '23', 16, 'Central Asia Standard Time');
INSERT INTO `chat_timezone` VALUES (54, 'Asia/Bangkok', 'Bangkok (UTC +7)', '25', 17, 'North Asia Standard Time');
INSERT INTO `chat_timezone` VALUES (55, 'Asia/Hong_Kong', 'Hong Kong (UTC +8)', '26', 18, 'China Standard Time');
INSERT INTO `chat_timezone` VALUES (56, 'Asia/Tokyo', 'Osaka, Sapporo, Tokyo (UTC +9)', '30', 19, 'Tokyo Standard Time');
INSERT INTO `chat_timezone` VALUES (57, 'Australia/Sydney', 'Canberra, Melbourne, Sydney (UTC +10)', '36', 20, 'A.U.S. Eastern Standard Time');
INSERT INTO `chat_timezone` VALUES (58, 'Pacific/Noumea', 'New Caledonia (UTC +11)', '40', 21, 'Central Pacific Standard Time');
INSERT INTO `chat_timezone` VALUES (59, 'Pacific/Auckland', 'Auckland, Wellington (UTC +12)', '41', 22, 'New Zealand Standard Time');
INSERT INTO `chat_timezone` VALUES (60, 'Pacific/Apia', 'Independent State of Samoa (UTC +13)', '61', 23, 'Tonga Standard Time');
DROP TABLE IF EXISTS `chat_users`;
CREATE TABLE `chat_users`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `lastaccess` datetime NULL DEFAULT NULL,
  `isTyping` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `userpic` mediumblob NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `email` mediumtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `reset_token` mediumtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `userpic` mediumblob NULL,
  `reset_date` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;
SET FOREIGN_KEY_CHECKS = 1;