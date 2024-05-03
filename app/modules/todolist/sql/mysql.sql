SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;
DROP TABLE IF EXISTS `calcalendar`;
CREATE TABLE `calcalendar`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `DateField` date NULL DEFAULT NULL,
  `Description` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `Subject` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `TimeField` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `EndTime` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `DayEvent` int(11) NULL DEFAULT NULL,
  `EndDate` date NULL DEFAULT NULL,
  `Period` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `PeriodDays` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Recurrence` int(11) NULL DEFAULT NULL,
  `Category` int(11) NULL DEFAULT NULL,
  `OwnerID` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `RecurType` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `RecurOnValue` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `RecurAfterValue` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
INSERT INTO `calcalendar` VALUES (1, '2020-02-04', NULL, 'don\'t delete', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
DROP TABLE IF EXISTS `calcategory`;
CREATE TABLE `calcategory`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Category` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Color` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
DROP TABLE IF EXISTS `calfirstday`;
CREATE TABLE `calfirstday`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dayvalue` int(11) NULL DEFAULT NULL,
  `dayname` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
INSERT INTO `calfirstday` VALUES (1, 0, 'Sunday');
INSERT INTO `calfirstday` VALUES (2, 1, 'Monday');
DROP TABLE IF EXISTS `calglobals`;
CREATE TABLE `calglobals`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `TimePeriod` int(11) NULL DEFAULT NULL,
  `FirstDayOfWeek` int(11) NOT NULL,
  `EditInPast` int(11) NOT NULL,
  `DefaultColor` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '#FFFFFF',
  `HolidayColor` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '#EDDFDF',
  `WeekEndColor` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '#FEF6F6',
  `RangedColor` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '#9FC6E7',
  `SubjectLength` int(11) NOT NULL,
  `DescriptionLength` int(11) NOT NULL,
  `CountEvents` int(11) NOT NULL,
  `StartTime` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `EndTime` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
INSERT INTO `calglobals` VALUES (1, 30, 1, 1, '#FFFFFF', '#FA9E9E', '#EDDFDF', '#6AACE6', 50, 100, 3, '08:00:00', '18:00:00');
DROP TABLE IF EXISTS `calholidays`;
CREATE TABLE `calholidays`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 31 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
INSERT INTO `calholidays` VALUES (1, 'New Year\'s Day', '2023-01-01');
INSERT INTO `calholidays` VALUES (2, 'Independence Day', '2023-07-04');
INSERT INTO `calholidays` VALUES (3, 'Veterans Day', '2023-11-11');
INSERT INTO `calholidays` VALUES (4, 'Christmas', '2023-12-25');
INSERT INTO `calholidays` VALUES (5, 'Birthday of Martin Luther King, Jr.', '2023-01-21');
INSERT INTO `calholidays` VALUES (6, 'Washington\'s Birthday', '2023-02-18');
INSERT INTO `calholidays` VALUES (7, 'Memorial Day', '2023-05-27');
INSERT INTO `calholidays` VALUES (8, 'Labor Day', '2023-09-02');
INSERT INTO `calholidays` VALUES (9, 'Columbus Day', '2023-10-14');
INSERT INTO `calholidays` VALUES (10, 'Thanksgiving Day', '2023-11-28');
INSERT INTO `calholidays` VALUES (11, 'New Year\'s Day', '2024-01-01');
INSERT INTO `calholidays` VALUES (12, 'Independence Day', '2024-07-04');
INSERT INTO `calholidays` VALUES (13, 'Veterans Day', '2024-11-11');
INSERT INTO `calholidays` VALUES (14, 'Christmas', '2024-12-25');
INSERT INTO `calholidays` VALUES (15, 'Birthday of Martin Luther King, Jr.', '2024-01-20');
INSERT INTO `calholidays` VALUES (16, 'Washington\'s Birthday', '2024-02-17');
INSERT INTO `calholidays` VALUES (17, 'Memorial Day', '2024-05-25');
INSERT INTO `calholidays` VALUES (18, 'Labor Day', '2024-09-07');
INSERT INTO `calholidays` VALUES (19, 'Columbus Day', '2024-10-12');
INSERT INTO `calholidays` VALUES (20, 'Thanksgiving Day', '2024-11-26');
DROP TABLE IF EXISTS `callocale`;
CREATE TABLE `callocale`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullcalendarlocale` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `runnerlocale` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 39 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
INSERT INTO `callocale` VALUES (1, 'en', 'Afrikaans');
INSERT INTO `callocale` VALUES (2, 'ar', 'Arabic');
INSERT INTO `callocale` VALUES (3, 'en', 'Bosnian');
INSERT INTO `callocale` VALUES (4, 'bg', 'Bulgarian');
INSERT INTO `callocale` VALUES (5, 'ca', 'Catalan');
INSERT INTO `callocale` VALUES (6, 'zh-cn', 'Chinese');
INSERT INTO `callocale` VALUES (7, 'hr', 'Croatian');
INSERT INTO `callocale` VALUES (8, 'cs', 'Czech');
INSERT INTO `callocale` VALUES (9, 'da', 'Danish');
INSERT INTO `callocale` VALUES (10, 'nl', 'Dutch');
INSERT INTO `callocale` VALUES (11, 'en', 'English');
INSERT INTO `callocale` VALUES (12, 'en', 'Farsi');
INSERT INTO `callocale` VALUES (13, 'fr', 'French');
INSERT INTO `callocale` VALUES (14, 'en', 'Georgian');
INSERT INTO `callocale` VALUES (15, 'de', 'German');
INSERT INTO `callocale` VALUES (16, 'el', 'Greek');
INSERT INTO `callocale` VALUES (17, 'he', 'Hebrew');
INSERT INTO `callocale` VALUES (18, 'hu', 'Hungarian');
INSERT INTO `callocale` VALUES (19, 'id', 'Indonesian');
INSERT INTO `callocale` VALUES (20, 'it', 'Italian');
INSERT INTO `callocale` VALUES (21, 'ja', 'Japanese');
INSERT INTO `callocale` VALUES (22, 'en', 'Malay');
INSERT INTO `callocale` VALUES (23, 'nb', 'Norwegian(Bokmal)');
INSERT INTO `callocale` VALUES (24, 'pl', 'Polish');
INSERT INTO `callocale` VALUES (25, 'pt-br', 'Portuguese(Brazil)');
INSERT INTO `callocale` VALUES (26, 'pt', 'Portuguese(Standard)');
INSERT INTO `callocale` VALUES (27, 'ro', 'Romanian');
INSERT INTO `callocale` VALUES (28, 'ru', 'Russian');
INSERT INTO `callocale` VALUES (29, 'sk', 'Slovak');
INSERT INTO `callocale` VALUES (30, 'es', 'Spanish');
INSERT INTO `callocale` VALUES (31, 'sv', 'Swedish');
INSERT INTO `callocale` VALUES (32, 'en', 'Tagalog(Philippines)');
INSERT INTO `callocale` VALUES (33, 'th', 'Thai');
INSERT INTO `callocale` VALUES (34, 'tr', 'Turkish');
INSERT INTO `callocale` VALUES (35, 'en', 'Urdu');
INSERT INTO `callocale` VALUES (36, 'en', 'Welsh');
INSERT INTO `callocale` VALUES (37, 'zh-hk', 'Chinese (Hong Kong S.A.R.)');
INSERT INTO `callocale` VALUES (38, 'zh-tw', 'Chinese (Taiwan)');
DROP TABLE IF EXISTS `calperiod`;
CREATE TABLE `calperiod`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Period` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `ValueField` varchar(5) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
INSERT INTO `calperiod` VALUES (1, 'Daily', 'd');
INSERT INTO `calperiod` VALUES (2, 'Weekly', 'ww');
INSERT INTO `calperiod` VALUES (3, 'Monthly', 'm');
INSERT INTO `calperiod` VALUES (4, 'Yearly', 'yyyy');
DROP TABLE IF EXISTS `calusers`;
CREATE TABLE `calusers`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `password` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
DROP TABLE IF EXISTS `calweekdays`;
CREATE TABLE `calweekdays`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `daynum` int(11) NULL DEFAULT NULL,
  `dayname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
INSERT INTO `calweekdays` VALUES (1, 1, 'Mon');
INSERT INTO `calweekdays` VALUES (2, 2, 'Tue');
INSERT INTO `calweekdays` VALUES (3, 3, 'Wed');
INSERT INTO `calweekdays` VALUES (4, 4, 'Thu');
INSERT INTO `calweekdays` VALUES (5, 5, 'Fri');
INSERT INTO `calweekdays` VALUES (6, 6, 'Sat');
INSERT INTO `calweekdays` VALUES (7, 7, 'Sun');
DROP TABLE IF EXISTS `todoboards`;
CREATE TABLE `todoboards`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `boardname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `userid` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
DROP TABLE IF EXISTS `todocards`;
CREATE TABLE `todocards`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `listid` int(11) NULL DEFAULT NULL,
  `cardname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `categoryid` int(11) NULL DEFAULT NULL,
  `cardorder` int(11) NULL DEFAULT NULL,
  `assign` int(11) NULL DEFAULT NULL,
  `boardid` int(11) NULL DEFAULT NULL,
  `duedate` datetime NULL DEFAULT NULL,
  `ownerid` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `startdate` date NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
DROP TABLE IF EXISTS `todocategories`;
CREATE TABLE `todocategories`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `color` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
INSERT INTO `todocategories` VALUES (1, '#FF0000', 'Work');
INSERT INTO `todocategories` VALUES (2, '#A35F5F', 'Errands');
INSERT INTO `todocategories` VALUES (3, '#002BFF', 'Kids');
INSERT INTO `todocategories` VALUES (4, '#FFF700', 'Sports ');
DROP TABLE IF EXISTS `todocomments`;
CREATE TABLE `todocomments`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cardid` int(11) NULL DEFAULT NULL,
  `comment` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `ownerid` int(11) NULL DEFAULT NULL,
  `commtime` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
DROP TABLE IF EXISTS `todolists`;
CREATE TABLE `todolists`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `listname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `listorder` int(11) NOT NULL,
  `boardid` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
DROP TABLE IF EXISTS `todousers`;
CREATE TABLE `todousers`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `password` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `fullname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `avatar` varchar(4000) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `daystoadd` int(11) NULL DEFAULT 30,
  `email` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `reset_token` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `reset_date` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
SET FOREIGN_KEY_CHECKS = 1;