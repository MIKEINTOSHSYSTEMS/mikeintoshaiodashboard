SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;
DROP TABLE IF EXISTS `hd_categories`;
CREATE TABLE `hd_categories`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoryname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
INSERT INTO `hd_categories` VALUES (1, 'Support Question');
INSERT INTO `hd_categories` VALUES (2, 'Technical Issue');
INSERT INTO `hd_categories` VALUES (3, 'Billing Question');
INSERT INTO `hd_categories` VALUES (4, 'Sales Question');
INSERT INTO `hd_categories` VALUES (5, 'General Question');
INSERT INTO `hd_categories` VALUES (6, 'Other');
DROP TABLE IF EXISTS `hd_directions`;
CREATE TABLE `hd_directions`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `directionname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
INSERT INTO `hd_directions` VALUES (1, 'incoming');
INSERT INTO `hd_directions` VALUES (2, 'outgoing');
INSERT INTO `hd_directions` VALUES (3, 'internal');
DROP TABLE IF EXISTS `hd_folders`;
CREATE TABLE `hd_folders`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `foldername` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `lastticket` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
INSERT INTO `hd_folders` VALUES (1, 'General', '2021-10-29 08:31:28');
INSERT INTO `hd_folders` VALUES (2, 'Spam', NULL);
INSERT INTO `hd_folders` VALUES (3, 'Trash', NULL);
INSERT INTO `hd_folders` VALUES (5, 'Test Folder', NULL);
DROP TABLE IF EXISTS `hd_mailtemplates`;
CREATE TABLE `hd_mailtemplates`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NULL DEFAULT NULL,
  `template` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `type` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
INSERT INTO `hd_mailtemplates` VALUES (9, 1, NULL, 'Reply');
INSERT INTO `hd_mailtemplates` VALUES (10, 3, NULL, 'Reply');
DROP TABLE IF EXISTS `hd_messages`;
CREATE TABLE `hd_messages`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime NOT NULL,
  `body` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `to_email` varchar(1024) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `subject` varchar(512) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `message_id` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `maildate` datetime NULL DEFAULT NULL,
  `from_email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `to_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `from_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `attachment` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `cc` varchar(512) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `bcc` varchar(512) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `server_id` int(11) NULL DEFAULT NULL,
  `ticketid` int(11) NULL DEFAULT NULL,
  `directionid` int(11) NULL DEFAULT NULL,
  `statusid` int(11) NULL DEFAULT NULL,
  `categoryid` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 830 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
INSERT INTO `hd_messages` VALUES (826, '2021-07-12 08:58:22', 'I have created a Rest API view that displays data when the user provides a filter on the view page. This is a great new feature for 10.5!<br><br>What is the recommended way to save that API view data to the database? In my application I would like to save data provided by the API view into my database. I am very familiar with how to do this with regular tables but not so familiar with the REST API views. I am using PHPRunner 10.5 build 36520 x64.<br>Thank you in advance for any help!', 'testdevmail2@mail.com', 'Can 10.5 insert data to a table from an API View', NULL, '2021-07-12 08:58:22', 'customer@test.com', 'Alina Molchanova', NULL, '', NULL, NULL, NULL, 1, 1, 1, 5);
INSERT INTO `hd_messages` VALUES (827, '2021-07-12 08:59:08', 'does anyone know if it is possible to connect to a SQL linked server? i have looked and tried but the SQL linked server doesn\'t show up.<br>Thanks in advance', 'testdevmail2@mail.com', 'PHPRunner Connections', NULL, '2021-07-12 08:59:08', 'customer@test.com', 'Alina Molchanova', NULL, '', NULL, NULL, NULL, 2, 1, 1, 1);
INSERT INTO `hd_messages` VALUES (828, '2021-07-12 08:59:58', 'This morning when I open my Project, and Build, I receive this error on about 80% of my Tables.<br>I\'m the only one working on the DB, and didn\'t do any changes to the DB or change any passwords for quite some time.<br>php error happened<br>Technical information<br><br>Error type 256<br><br>Error description Incorrect table name \'\'<br><br>URL localhost/hisportal/his_employee_list.php?page=list&menuItemId=73<br><br>Error file D:\\xampp\\htdocs\\hisportal\\connections\\Connection.php', 'testdevmail2@mail.com', ' What can cause this PHP errors on almost all Files', NULL, '2021-07-12 08:59:58', 'customer@test.com', 'Alina Molchanova', NULL, '', NULL, NULL, NULL, 3, 1, 1, 1);
INSERT INTO `hd_messages` VALUES (829, '2021-07-12 09:02:41', 'Hello!<br><br>You have 2 backticks instead of table name, in your SQL statement after FROM. It could be that your table names cannot be recognized by the script, hence showed empty string. could it be character encoding issue of your OS, or your table names or field names containing unicode characters. Try to ensure all characters encoding are utf-8 in database.<br>Check Latin vs Unicode issue<br>Try using a 3rd party SQL editor, eg. SQLyog, and connect to your database and see if you can browse the data. Last resort is to export the data and try recreate the database using utf-8.<br><br>> This morning when I open my Project, and Build, I receive this error on about 80% of my Tables.<br>> I\'m the only one working on the DB, and didn\'t do any changes to the DB or change any passwords for quite some time.<br>> php error happened<br>> Technical information<br>> <br>> Error type 256<br>> <br>> Error description Incorrect table name \'\'<br>> <br>> URL localhost/hisportal/his_employee_list.php?page=list&menuItemId=73<br>> <br>> Error file D:\\xampp\\htdocs\\hisportal\\connections\\Connection.php', 'customer@test.com', ' What can cause this PHP errors on almost all Files DSS-TP1MIB', NULL, '2021-07-12 09:02:41', 'testdevmail2@mail.com', NULL, 'Alina Molchanova', '', '', '', NULL, 3, 2, 3, NULL);
DROP TABLE IF EXISTS `hd_priorities`;
CREATE TABLE `hd_priorities`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `priorityname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
INSERT INTO `hd_priorities` VALUES (1, 'Critical');
INSERT INTO `hd_priorities` VALUES (2, 'High');
INSERT INTO `hd_priorities` VALUES (3, 'Medium');
INSERT INTO `hd_priorities` VALUES (4, 'Low');
DROP TABLE IF EXISTS `hd_quicktemplates`;
CREATE TABLE `hd_quicktemplates`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `title` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `template_content` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
INSERT INTO `hd_quicktemplates` VALUES (1, 'tp', 'Test template', 'Some test content\nline 1\nline 2\n');
DROP TABLE IF EXISTS `hd_servers`;
CREATE TABLE `hd_servers`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `server` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `user` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `password` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `interval` int(11) NULL DEFAULT NULL,
  `leave_copy` int(11) NULL DEFAULT NULL,
  `lastconnect` datetime NULL DEFAULT NULL,
  `port` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
INSERT INTO `hd_servers` VALUES (3, 'imap.gmail.com', '', '', 1, 1, '2021-10-29 08:31:28', 993);
DROP TABLE IF EXISTS `hd_settings`;
CREATE TABLE `hd_settings`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `attachment_folder` varchar(512) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `isReply` int(11) NULL DEFAULT NULL,
  `to` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `subject` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `body` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `fromName` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `fromEmail` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `knowledge_base` tinyint(4) NULL DEFAULT NULL,
  `who_is_online` tinyint(4) NULL DEFAULT NULL,
  `emaildays` int(11) NULL DEFAULT NULL,
  `folder` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
INSERT INTO `hd_settings` VALUES (1, 'files', 1, '%from%', 'Re: %subject%', 'We have received your email.\n----------------------\n%body%', 'John Do', 'test@mail.com', 1, 0, 0, 'fetch INBOX emails only');
DROP TABLE IF EXISTS `hd_status`;
CREATE TABLE `hd_status`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `statusname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `statuscolor` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
INSERT INTO `hd_status` VALUES (1, 'Unprocessed', '#ffdddc');
INSERT INTO `hd_status` VALUES (2, 'In process', '#ffcc62');
INSERT INTO `hd_status` VALUES (3, 'Answered', '#64ff9a');
INSERT INTO `hd_status` VALUES (4, 'Follow-up', '#6198ea');
INSERT INTO `hd_status` VALUES (5, 'Closed', '#d6d1d5');
INSERT INTO `hd_status` VALUES (6, 'Awaiting for response', NULL);
INSERT INTO `hd_status` VALUES (7, 'Open', NULL);
DROP TABLE IF EXISTS `hd_tickets`;
CREATE TABLE `hd_tickets`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime NOT NULL,
  `updated` datetime NULL DEFAULT NULL,
  `subject` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `statusid` int(11) NULL DEFAULT NULL,
  `priorityid` int(11) NULL DEFAULT NULL,
  `folderid` int(11) NULL DEFAULT NULL,
  `categoryid` int(11) NULL DEFAULT NULL,
  `directionid` int(11) NULL DEFAULT NULL,
  `ticketemail` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `assignedid` int(11) NULL DEFAULT NULL,
  `clientid` int(11) NULL DEFAULT NULL,
  `client_status` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
INSERT INTO `hd_tickets` VALUES (1, '2021-07-12 08:58:22', '2021-07-12 08:58:22', 'Can 10.5 insert data to a table from an API View', 1, 3, 1, 5, 1, 'customer@test.com', 1, 2, 7);
INSERT INTO `hd_tickets` VALUES (2, '2021-07-12 08:59:08', '2021-07-12 08:59:08', 'PHPRunner Connections', 1, 3, 1, 1, 1, 'customer@test.com', 3, 2, 7);
INSERT INTO `hd_tickets` VALUES (3, '2021-07-12 09:02:41', '2021-07-12 09:02:45', ' What can cause this PHP errors on almost all Files DSS-TP1MIB', 3, 3, 1, NULL, 2, 'customer@test.com', 3, 2, 6);
DROP TABLE IF EXISTS `hd_todolist`;
CREATE TABLE `hd_todolist`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ticketid` int(11) NULL DEFAULT NULL,
  `completed` tinyint(4) NULL DEFAULT NULL,
  `task` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
DROP TABLE IF EXISTS `hd_users`;
CREATE TABLE `hd_users`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `usertype` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `fullname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `active` int(11) NULL DEFAULT NULL,
  `last_activity` datetime NULL DEFAULT NULL,
  `viewing_page` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `repling_in` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `supporterView` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `reset_token` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `reset_date` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
DROP TABLE IF EXISTS `kbarticles`;
CREATE TABLE `kbarticles`  (
  `approved` varchar(5) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `ArticleID` int(11) NOT NULL AUTO_INCREMENT,
  `Category` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `DateCreated` date NULL DEFAULT NULL,
  `Problem` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `Solution` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `Title` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Views` int(11) NULL DEFAULT NULL,
  `keyworlds` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`ArticleID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
INSERT INTO `kbarticles` VALUES ('1', 2, 'ASPRunnerPro', '2007-04-24', 'Microsoft OLE DB Provider for ODBC Drivers error \'80004005\'rr[Microsoft][ODBC Microsoft Access Driver] Operation must use an updateable query. /tablename\\_edit.asp, line xxx ', 'The solution to this problem can be found here:rhttp://xlinesoft.com/asprunner/docs/troubleshooting\\_\\_operation\\_must\\_use\\_an\\_updateable\\_query\\_\\_errors.htm ', 'Error: Operation must use an updateable query', 4, 'ODBC Drivers query');
INSERT INTO `kbarticles` VALUES ('1', 3, 'General', '2007-04-24', 'Tryed to install ASPRunner Professional on a windows 2003 server but when I try to launch the program it will not run , nothing happens. ', 'Please try the following:r1. Proceed to Start->Settings->Control panel->System.r2. On the Advanced tab, under Performance, click Settings. r3. On the Data Execution Prevention tab, use one of the following procedures: Click \"Turn on DEP for essential Windows programs and services only\" r4. Click OK two times. rrRun ASPRunnerPro again to see if it runs okay.rrMore info: rhttp://www.microsoft.com/technet/security/prodtech/windowsxp/depcnfxp.mspx#EQD ', 'ASPRunnerPro/PHPRunner doesnt start ', 1, '');
INSERT INTO `kbarticles` VALUES ('1', 4, 'General', '2007-04-24', 'Is there a way to change the display on list page? Instead of bgcolor I would like to display image. Can I change this in the style sheet (CSS)? ', 'Modify include/style.css to set an image as a background.rrbody r{rbackground-image:rurl(\'bgdesert.jpg\')r} ', 'How to set image as a background ', 1, 'query,odbc');
INSERT INTO `kbarticles` VALUES (NULL, 5, 'PHPRunner', '2007-04-24', 'Warning:rmain(include/locale.php): failed to open stream: No such file or directory in /tmp/disk/home/webmaster/Files/WWW/NewUsers/include/Users\\_functions.phpron line 2rrWarning: main(): Failed openingr\'include/locale.php\' for inclusion (include\\_path=\':/usr/lib/php/pear\') in /tmp/disk/home/webmaster/Files/WWW/NewUsers/include/Users\\_functions.php', 'you have unusual setting for \"include\\_path\" PHP configuration option.rPlease change include\\_path setting in your php.ini file to:r<if Unix>rinclude\\_path=\".:/usr/lib/php/...\"r<if Windows>rinclude\\_path=\".;c:\\php\\...\"rrThen restart your web server.', 'Incorrect include\\_path PHP option ', 1, '');
INSERT INTO `kbarticles` VALUES (NULL, 6, 'PHPRunner', '2007-04-24', 'Warning: session\\_start... ', 'To make your pages working do the following:r- open with any text editor file c:\\windows\\php.inir- find the string started with session.save\\_path= r- make sure this directory existsr- make sure Internet Information Server or Apache account has read/write permissions on this directoryr- Make sure that in php.ini file \"session.save\\_handler\" is set to \"files\"r----------------------------------------r. [Session]r; Handler used to store/retrieve data.rsession.save\\_handler = files r----------------------------------------', 'Warning: session\\_start... ', 0, '');
INSERT INTO `kbarticles` VALUES ('1', 7, 'ASPRunnerPro', '2007-04-22', 'How to set default values to a date field in advanced search with \"between\" condition so we can show only records updated within the last two days?', 'You can do this by adding the following three lines in the beginning of list page right before rSession.LCID = 1033 line.rrSession(\"SearchOption\\_\" & strTableName & \"\\_DateField\") = \"Between\"rSession(\"SearchFor1\\_\" & strTableName & \"\\_DateField\") = FormatDatetime(DateAdd(\"d\", -2, now()),2)rSession(\"SearchFor2\\_\" & strTableName & \"\\_DateField\") = FormatDatetime(now(), 2)r', 'How to set default values to a date field in advanced search.', 0, '');
INSERT INTO `kbarticles` VALUES (NULL, 8, 'ASPRunnerPro', '2007-04-25', ' I am wondering if there is a way to save advanced searches so that it\'s easy to view the database based on certain criteria without having to enter the critera each time? Just a simple way to bookmark/link the search results page would suit my needs', 'You will need to make a change on advanced search page to see generated URL. rrTo dipslay parameters open ...\\_search.asp in text editor and change FORM tag to use GET instead of POST. Do required search and copy URL. Change form back to POST. Use this URL to setup direct link to advanced search results.', 'How to setup link to advanced search results page', 0, '');
DROP TABLE IF EXISTS `kbcategories`;
CREATE TABLE `kbcategories`  (
  `Category` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `CategoryID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`CategoryID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;
INSERT INTO `kbcategories` VALUES ('ASPRunner', 1);
INSERT INTO `kbcategories` VALUES ('ASPRunnerPro', 2);
INSERT INTO `kbcategories` VALUES ('General', 3);
INSERT INTO `kbcategories` VALUES ('PHPRunner', 4);
SET FOREIGN_KEY_CHECKS = 1;