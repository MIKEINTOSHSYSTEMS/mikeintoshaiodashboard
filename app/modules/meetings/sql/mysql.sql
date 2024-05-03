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
INSERT INTO `calcalendar` VALUES (1, NULL, NULL, 'don\'t touch this event', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
DROP TABLE IF EXISTS `calcategory`;
CREATE TABLE `calcategory`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Category` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Color` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
INSERT INTO `calcategory` VALUES (1, 'test', '#FFCC99');
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
INSERT INTO `calglobals` VALUES (1, 30, 1, 0, '#FFFFFF', '#FEF6F6', '#EDDFDF', '#9FC6E7', 50, 100, 3, '00:30:00', '23:30:00');
DROP TABLE IF EXISTS `calholidays`;
CREATE TABLE `calholidays`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 31 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
INSERT INTO `calholidays` VALUES (1, 'New Year\'s Day', '2018-01-01');
INSERT INTO `calholidays` VALUES (2, 'Independence Day', '2018-07-04');
INSERT INTO `calholidays` VALUES (3, 'Veterans Day', '2018-11-11');
INSERT INTO `calholidays` VALUES (4, 'Christmas', '2018-12-25');
INSERT INTO `calholidays` VALUES (5, 'Birthday of Martin Luther King, Jr.', '2018-01-15');
INSERT INTO `calholidays` VALUES (6, 'Washington\'s Birthday', '2018-02-19');
INSERT INTO `calholidays` VALUES (7, 'Memorial Day', '2018-05-28');
INSERT INTO `calholidays` VALUES (8, 'Labor Day', '2018-09-03');
INSERT INTO `calholidays` VALUES (9, 'Columbus Day', '2018-10-08');
INSERT INTO `calholidays` VALUES (10, 'Thanksgiving Day', '2018-11-22');
INSERT INTO `calholidays` VALUES (11, 'New Year\'s Day', '2019-01-01');
INSERT INTO `calholidays` VALUES (12, 'Independence Day', '2019-07-04');
INSERT INTO `calholidays` VALUES (13, 'Veterans Day', '2019-11-11');
INSERT INTO `calholidays` VALUES (14, 'Christmas', '2019-12-25');
INSERT INTO `calholidays` VALUES (15, 'Birthday of Martin Luther King, Jr.', '2019-01-21');
INSERT INTO `calholidays` VALUES (16, 'Washington\'s Birthday', '2019-02-18');
INSERT INTO `calholidays` VALUES (17, 'Memorial Day', '2019-05-27');
INSERT INTO `calholidays` VALUES (18, 'Labor Day', '2019-09-02');
INSERT INTO `calholidays` VALUES (19, 'Columbus Day', '2019-10-14');
INSERT INTO `calholidays` VALUES (20, 'Thanksgiving Day', '2019-11-28');
INSERT INTO `calholidays` VALUES (21, 'New Year\'s Day', '2020-01-01');
INSERT INTO `calholidays` VALUES (22, 'Independence Day', '2020-07-04');
INSERT INTO `calholidays` VALUES (23, 'Veterans Day', '2020-11-11');
INSERT INTO `calholidays` VALUES (24, 'Christmas', '2020-12-25');
INSERT INTO `calholidays` VALUES (25, 'Birthday of Martin Luther King, Jr.', '2020-01-20');
INSERT INTO `calholidays` VALUES (26, 'Washington\'s Birthday', '2020-02-17');
INSERT INTO `calholidays` VALUES (27, 'Memorial Day', '2020-05-25');
INSERT INTO `calholidays` VALUES (28, 'Labor Day', '2020-09-07');
INSERT INTO `calholidays` VALUES (29, 'Columbus Day', '2020-10-12');
INSERT INTO `calholidays` VALUES (30, 'Thanksgiving Day', '2020-11-26');
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
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `reset_token` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `reset_date` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
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
DROP TABLE IF EXISTS `mtmeetings`;
CREATE TABLE `mtmeetings`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `desc` varchar(4000) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `users` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `schedule` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `email` varchar(4000) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `sms` varchar(4000) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `subj` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `createlink` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `joinlink` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `ownerid` int(11) NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `notiday` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `notitime` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `notisend` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
DROP TABLE IF EXISTS `mtsettings`;
CREATE TABLE `mtsettings`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `provider` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `RC_ClientID` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `RC_ClientSecret` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `RC_Account` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `RC_Password` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Z_APIKey` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Z_APISecret` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `saveInCloud` int(11) NULL DEFAULT NULL,
  `userstable` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `emailfield` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `phonefield` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `namefield` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Z_Token` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `idfield` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
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
INSERT INTO `mtsettings` VALUES (1, 'Zoom', '', '', '', '', '', '', 1, 'calusers', 'email', '', 'username', 'test', 'id', '42', '', '', '', '', '', '', '', '', '');
DROP TABLE IF EXISTS `mttimezone`;
CREATE TABLE `mttimezone`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zoom` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `rc` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `order` int(11) NULL DEFAULT NULL,
  `dotnet` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 61 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
INSERT INTO `mttimezone` VALUES (38, 'Pacific/Honolulu', 'Hawaii (UTC -10)', '60', 1, 'Hawaiian Standard Time');
INSERT INTO `mttimezone` VALUES (39, 'America/Anchorage', 'Alaska (UTC -9)', '59', 2, 'Alaskan Standard Time');
INSERT INTO `mttimezone` VALUES (40, 'America/Los_Angeles', 'Pacific Time (US and Canada) (UTC -8)', '58', 3, 'Pacific Standard Time');
INSERT INTO `mttimezone` VALUES (41, 'America/Denver', 'Mountain Time (US and Canada) (UTC -7)', '57', 4, 'Mountain Standard Time');
INSERT INTO `mttimezone` VALUES (42, 'America/Chicago', 'Central Time (US and Canada) (UTC -6)', '53', 5, 'Central Standard Time');
INSERT INTO `mttimezone` VALUES (43, 'America/New_York', 'Eastern Time (US and Canada) (UTC -5)', '51', 6, 'Eastern Standard Time');
INSERT INTO `mttimezone` VALUES (44, 'Canada/Atlantic', 'Atlantic Time (Canada) (UTC -4)', '48', 7, 'Atlantic Standard Time');
INSERT INTO `mttimezone` VALUES (45, 'America/Araguaina', 'Brasilia (UTC -3)', '45', 8, 'E. South America Standard Time');
INSERT INTO `mttimezone` VALUES (46, 'Atlantic/Azores', 'Azores (UTC -1)', '43', 9, 'Azores Standard Time');
INSERT INTO `mttimezone` VALUES (47, 'Europe/London', 'London (UTC 0)', '2', 10, 'GMT Standard Time');
INSERT INTO `mttimezone` VALUES (48, 'Europe/Amsterdam', 'Amsterdam (UTC +1)', '6', 11, 'Central Europe Standard Time');
INSERT INTO `mttimezone` VALUES (49, 'Europe/Helsinki', 'Helsinki (UTC +2)', '11', 12, 'E. Europe Standard Time');
INSERT INTO `mttimezone` VALUES (50, 'Europe/Moscow', 'Moscow (UTC +3)', '14', 13, 'Russian Standard Time');
INSERT INTO `mttimezone` VALUES (51, 'Asia/Baku', 'Baku, Tbilisi, Yerevan (UTC +4)', '240', 14, 'Caucasus Standard Time');
INSERT INTO `mttimezone` VALUES (52, 'Asia/Tashkent', 'Islamabad, Karachi, Tashkent (UTC +5)', '21', 15, 'West Asia Standard Time');
INSERT INTO `mttimezone` VALUES (53, 'Asia/Dhaka', 'Astana, Dhaka (UTC +6)', '23', 16, 'Central Asia Standard Time');
INSERT INTO `mttimezone` VALUES (54, 'Asia/Bangkok', 'Bangkok (UTC +7)', '25', 17, 'North Asia Standard Time');
INSERT INTO `mttimezone` VALUES (55, 'Asia/Hong_Kong', 'Hong Kong (UTC +8)', '26', 18, 'China Standard Time');
INSERT INTO `mttimezone` VALUES (56, 'Asia/Tokyo', 'Osaka, Sapporo, Tokyo (UTC +9)', '30', 19, 'Tokyo Standard Time');
INSERT INTO `mttimezone` VALUES (57, 'Australia/Sydney', 'Canberra, Melbourne, Sydney (UTC +10)', '36', 20, 'A.U.S. Eastern Standard Time');
INSERT INTO `mttimezone` VALUES (58, 'Pacific/Noumea', 'New Caledonia (UTC +11)', '40', 21, 'Central Pacific Standard Time');
INSERT INTO `mttimezone` VALUES (59, 'Pacific/Auckland', 'Auckland, Wellington (UTC +12)', '41', 22, 'New Zealand Standard Time');
INSERT INTO `mttimezone` VALUES (60, 'Pacific/Apia', 'Independent State of Samoa (UTC +13)', '61', 23, 'Tonga Standard Time');
SET FOREIGN_KEY_CHECKS = 1;