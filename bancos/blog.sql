# Host: localhost  (Version 8.0.21)
# Date: 2020-08-23 12:39:04
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "posts"
#

DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `data_criada` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `corpo` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `autor` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

#
# Data for table "posts"
#

INSERT INTO `posts` VALUES (1,'primeiro titulo','2020-08-19 00:00:00','asdfasdasdadasdadadqwrwqer','giovanni'),(2,'segundo titulo','2020-08-19 00:00:00','asdfasdasdadasdadadqwrwqer','giovanni');

#
# Structure for table "usuario"
#

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `senha` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

#
# Data for table "usuario"
#

INSERT INTO `usuario` VALUES (1,'giovanni lúcio','glbrito@gmail.com','123456'),(2,'joselina brito','josehbrito@gmail.com','1234'),(3,'gilson neves','gilson@gmail,com',''),(8,'luciana brito','lu@gmail.com','81dc9bdb52d04dc20036dbd8313ed055'),(9,'jonathas neves de brito','jonathas@gmail.com','fcea920f7412b5da7be0cf42b8c93759');
