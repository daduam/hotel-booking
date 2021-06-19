DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(64) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL UNIQUE,
  `phone_number` varchar(255) DEFAULT NULL,
  PRIMARY KEY(`id`)
);