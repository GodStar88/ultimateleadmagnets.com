# Host: 104.236.32.219  (Version 5.7.24-0ubuntu0.16.04.1)
# Date: 2018-11-20 17:35:14
# Generator: MySQL-Front 6.1  (Build 1.26)


#
# Structure for table "verification"
#

DROP TABLE IF EXISTS `verification`;
CREATE TABLE `verification` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `first` varchar(255) DEFAULT NULL,
  `last` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `member` varchar(255) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# Data for table "verification"
#

INSERT INTO `verification` VALUES (83,'God','Star','godstar1','choesad0808@gmail.com','1q2w3e4r','Free','6e75838f'),(84,'God','Star','godstar1','choesad0808@gmail.com','1q2w3e4r','Free','6e75838f');
